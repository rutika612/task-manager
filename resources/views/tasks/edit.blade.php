<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $task->title }}" required><br><br>
        <textarea name="description">{{ $task->description }}</textarea><br><br>

        <label>Priority:</label>
        <select name="priority">
            <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
            <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
        </select><br><br>

        <label>Status:</label>
        <select name="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select><br><br>

        <button type="submit">Update Task</button>
    </form>

</body>
</html>
