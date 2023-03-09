Errors during development:

Event Listener Error:
On the task dashboard, there are buttons to order the tasks by date. 
I created an event listener function to activate when the sort button was clicked. When other pages were loaded e.g. add task, an error would appear in the console stating that it was not possible to find the buttons linked to the event listener.

To fix this error, I added an IF statement to the beginning of the functions to check if the buttons exist before commencing the function.