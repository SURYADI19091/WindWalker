let tasks = JSON.parse(localStorage.getItem('tasks')) || [];
let taskToFinish = null;
let taskToDelete = null;

// Add new task
document.getElementById('todo-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const taskInput = document.getElementById('todo-input').value;
    const dueDateTimeInput = document.getElementById('due-date-time').value; // Changed to datetime input

    if (taskInput && dueDateTimeInput) {
        tasks.push({ text: taskInput, date: dueDateTimeInput, completed: false });
        document.getElementById('todo-input').value = '';
        document.getElementById('due-date-time').value = ''; // Clear the datetime input
        saveTasks();
        renderTasks();

        // Show success alert
        Swal.fire({
            icon: 'success',
            title: 'Task Added!',
            text: 'Your task has been added successfully.',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'custom-confirm-button' // Custom class name
            }
        });
    }
});

// Function to render tasks to the list
function renderTasks() {
    const todoList = document.getElementById('todo-list');
    todoList.innerHTML = '';
    const now = new Date();

    tasks.forEach((task, index) => {
        const listItem = document.createElement('li');
        listItem.className = `flex justify-between items-center p-4 border-b ${task.completed ? 'line-through text-gray-400' : ''}`;

        // Format the date and time for display
        const formattedDate = new Date(task.date).toLocaleString();

        // Check if the task is nearing its due date (within the next 24 hours)
        const dueDate = new Date(task.date);
        const timeDifference = dueDate - now;

        // Determine status
        let statusText = '';
        if (task.completed) {
            statusText = 'Completed';
        } else if (timeDifference <= 0) {
            statusText = 'Overdue';
        } else if (timeDifference <= 24 * 60 * 60 * 1000) { // 24 hours in milliseconds
            statusText = 'Due Soon';
            Swal.fire({
                icon: 'warning',
                title: 'Task Due Soon!',
                text: `The task "${task.text}" is due soon on ${formattedDate}.`,
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'custom-confirm-button' // Custom class name
                }
            });
        } else {
            statusText = 'Active';
        }

        listItem.innerHTML = `
            <div>
                <strong>${task.text}</strong><br>
                <span class="text-gray-400">${formattedDate} - <span class="${statusText === 'Overdue' ? 'text-red-500' : statusText === 'Due Soon' ? 'text-yellow-500' : 'text-green-500'}">${statusText}</span></span>
            </div>
            <div class="mt-2 flex space-x-4"> <!-- Flex container for buttons with spacing -->
                <div class="bg-green-500 p-2 rounded-lg"> <!-- Background for Finish button -->
                    <button class="text-white" onclick="showFinishDialog(${index})">
                        ${task.completed ? 'Undo' : 'Finish'}
                    </button>
                </div>
                <div class="bg-red-500 p-2 rounded-lg"> <!-- Background for Delete button -->
                    <button class="text-white" onclick="showDeleteDialog(${index})">
                        Delete
                    </button>
                </div>
            </div>
        `;
        todoList.appendChild(listItem);
    });
}

// Save tasks to localStorage
function saveTasks() {
    localStorage.setItem('tasks', JSON.stringify(tasks));
}

// Show Finish Confirmation Dialog
function showFinishDialog(index) {
    taskToFinish = index;
    document.getElementById('confirm-finish-dialog').classList.remove('hidden');
}

// Confirm Finish Task
document.getElementById('confirm-finish').addEventListener('click', function() {
    if (taskToFinish !== null) {
        tasks[taskToFinish].completed = !tasks[taskToFinish].completed; // Toggle completion
        saveTasks();
        renderTasks();

        // Show success alert for task completion
        Swal.fire({
            icon: 'success',
            title: 'Task Update!',
            text: 'Your task has been updated successfully.',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'custom-confirm-button' // Custom class name
            }
        });

        taskToFinish = null;
        document.getElementById('confirm-finish-dialog').classList.add('hidden');
    }
});

// Cancel Finish Action
document.getElementById('cancel-finish').addEventListener('click', function() {
    taskToFinish = null;
    document.getElementById('confirm-finish-dialog').classList.add('hidden');
});

// Show Delete Confirmation Dialog
function showDeleteDialog(index) {
    taskToDelete = index;
    document.getElementById('confirm-dialog').classList.remove('hidden');
}

// Confirm Delete Task
document.getElementById('confirm-delete').addEventListener('click', function() {
    if (taskToDelete !== null) {
        tasks.splice(taskToDelete, 1);
        saveTasks();
        renderTasks();

        // Show success alert for task deletion
        Swal.fire({
            icon: 'success',
            title: 'Task Deleted!',
            text: 'Your task has been deleted successfully.',
            confirmButtonText: 'OK',
            customClass: {
                confirmButton: 'custom-confirm-button' // Custom class name
            }
        });

        taskToDelete = null;
        document.getElementById('confirm-dialog').classList.add('hidden');
    }
});

// Cancel Delete Action
document.getElementById('cancel-delete').addEventListener('click', function() {
    taskToDelete = null;
    document.getElementById('confirm-dialog').classList.add('hidden');
});

// Initial render
renderTasks();
