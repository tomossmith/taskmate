<x-app-layout>
<header class="mt-10">
      <h1 class="text-2xl text-center text-gray-800 font-bold">Add Task</h1>
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form method="POST" action="/task">
                    @csrf
                    
                    <div class="form-group">
                        <label for="description" class="block">Task Description:</label>
                        <textarea name="description" id="description"
                            class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"
                            placeholder='Enter your task'></textarea>
                        @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                        <div class="mt-4">
                            <input type="checkbox" id="due_date_checkbox">
                            <label for="due_date_checkbox" class="inline-block">Do you have a date this should be completed by?</label>
                        </div>
                        <div id="due_date_picker" class="mt-2 hidden">
                            <label for="due_date" class="block">Due:</label>
                            <input placeholder="dd-mm-yyyy" type="date" id="due_date" name="due_date"
                                class="w-full border-gray-400 py-2 px-3 rounded">
                        </div>

                        <label for="urgent" class="block mt-4">Urgent?</label>
                        <select name="urgent" id="urgent" class="w-full border-gray-400 py-2 px-3 rounded">
                            <option value="is_urgent">Urgent</option>
                            <option value="not_urgent">Not Urgent</option>
                        </select>
                        @error('urgent')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
