<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->tasks();

        return view('dashboard', compact('tasks'));
    }

    public function add()
    {
        return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        $task = new Task();
        $task->description = $request->description;
        $task->due_date_checkbox = $request->due_date_checkbox;
        if ($request->due_date == '-') {
            $task->due_date = "-";
        } else {
            $dueDate = $request->input('due_date');
            $formattedDueDate = Carbon::createFromFormat('Y-m-d', $dueDate)->format('d-m-y');
            $task->due_date = $formattedDueDate;
        }

        $task->urgent = $request->urgent;
        $task->user_id = auth()->user()->id;
        $task->save();

        return redirect('/dashboard'); 
    }

    public function edit(Task $task)
    {
        if (auth()->user()->id == $task->user_id) {
            return view('edit', compact('task'));
        } else {
            return redirect('/dashboard');
        }
    }

    public function update(Request $request, Task $task)
    {
        if (isset($_POST['delete'])) {
            $task->delete();
            return redirect('/dashboard');
        } else {
            $this->validate($request, [
                'description' => 'required'
            ]);

            $task->description = $request->description;
            $task->due_date_checkbox = $request->due_date_checkbox;

            if ($request->due_date == '-') {
                $task->due_date = "-";
            } else {
                $dueDate = $request->input('due_date');
                $formattedDueDate = Carbon::createFromFormat('Y-m-d', $dueDate)->format('d-m-y');
                $task->due_date = $formattedDueDate;
            }

            $task->urgent = $request->urgent;
            $task->save();
            return redirect('/dashboard'); 
        }
    }

    public function markAsCompleted(Task $task)
{
    $task->completed = true;
    $task->save();

    // Move task to completed tasks table
    CompletedTask::create([
        'description' => $task->description,
        'due_date_checkbox' => $task->due_date_checkbox,
        'due_date' => $task->due_date,
        'urgent' => $task->urgent,
        'user_id' => $task->user_id
    ]);

    return redirect()->back();
}
}
