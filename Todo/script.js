const taskInput = document.getElementById('task-input');
const dueDateInput = document.getElementById('due-date-input');
const priorityInput = document.getElementById('priority-input');
const categoryInput = document.getElementById('category-input');
const addTaskButton = document.getElementById('add-task-button');
const taskList = document.getElementById('task-list');


function addTask() {
    const taskText = taskInput.value.trim();
    const dueDate = dueDateInput.value;
    const priority = priorityInput.value;
    const category = categoryInput.value;

    if (taskText === '') {
        alert('Task cannot be empty');
        return;
    }


    const taskItem = document.createElement('li');
    taskItem.classList.add(priority-{priority});
    
    const taskContent = `
        <span class="task-text">${taskText}</span> 
        <span class="task-due-date">${dueDate}</span> 
        <span class="task-priority">${priority}</span>
        <span class="task-category">${category}</span>
        <button onclick="completeTask(this)">Complete</button> 
        <button onclick="deleteTask(this)">Delete</button>
    `;

    taskItem.innerHTML = taskContent;
    taskList.appendChild(taskItem);


    taskInput.value = '';
    dueDateInput.value = '';
    priorityInput.value = 'Priority';
    categoryInput.value = '';
}

function completeTask(button) {
    const taskItem = button.parentNode;
    taskItem.classList.toggle('completed');
}

function deleteTask(button) {
    const taskItem = button.parentNode;
    taskList.removeChild(taskItem);
}

addTaskButton.addEventListener('click', addTask);