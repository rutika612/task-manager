<!DOCTYPE html>
<html>
<head>
    <title>Task Manager - Laravel Intern Assessment</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- External JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

<div class="container">
    <h1>Task Management System</h1>

    <!-- Add Task Form -->
    <div class="card">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" name="title" placeholder="Enter task title" required>

            <label>Description</label>
            <textarea name="description" placeholder="Enter task description (optional)"></textarea>

            <label>Priority</label>
            <select name="priority" required>
                <option value="">Select Priority</option>
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>

            <label><b>Status</b></label>
            <select name="status" required>
                 <option value="">Select Status</option>
                 <option value="Pending">Pending</option>
                 <option value="Completed">Completed</option>
            </select>

            <button type="submit" class="add-btn">Add Task</button>
        </form>
    </div>

    <!-- Task List -->
    <div class="card">
        <h2>Your Tasks</h2>
        @foreach($tasks as $task)
        <div class="task-item">
            <div>
                <b>{{ $task->title }}</b><br>
                <small>{{ $task->description }}</small><br>
                <span class="badge {{ $task->priority }}">{{ $task->priority }}</span>
                <span class="badge {{ $task->status }}">{{ $task->status }}</span>
            </div>
            <div class="actions">
                <a href="{{ route('tasks.edit', $task->id) }}">
                    <button class="edit-btn">Edit</button>
                </a>

                @if($task->status != 'Completed')
                <form action="{{ route('tasks.complete', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('PUT')
                    <button class="complete-btn">Done</button>
                </form>
                @endif

                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="delete-btn">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

</body>
</html>
