<div class="greeting-message">
    <h1>Welcome to the Task Manager!</h1>
</div>

<div class="projects-container">
    <p>
        Your projects:
    </p>
    <input placeholder="Search projects" id="searching-projects">
</div>

<div class="main-container">
    <img src="pictures/task-list.png" width="300px" height="300px">
    <div class="manager-info">
        <p>
            Your tasks are always under control! <br>
            Quick access to your tasks and other projects!
        </p>
    </div>
</div>

<div class="tasks-container">
    <p>
        Your tasks:
    </p>
    <input placeholder="Search tasks" id="searching-tasks">

    <p id="tasks-filter">Filter</p>

    <div class="tasks-filter">
        <input type="radio" id="all-tasks" name="task-filter-element" value="all-tasks">
        <label for="all-tasks">All tasks</label>
        <input type="radio" id="today-tasks" name="task-filter-element" value="today-tasks">
        <label for="today-tasks">For today</label>
        <input type="radio" id="tomorrow-tasks" name="task-filter-element" value="tomorrow-tasks">
        <label for="tomorrow-tasks">For tomorrow</label>
        <input type="radio" id="expired-tasks" name="task-filter-element" value="expired-tasks">
        <label for="expired-tasks">Expired</label>
    </div>
</div>

<p class="tostart">
    To start using the manager, <br>
    please select one of the suggested actions:
</p>

<div class="work-buttons">
    <div class="create-new-task-btn">Create new task</div>
    <div class="create-new-project-btn">Create new project</div>
</div>