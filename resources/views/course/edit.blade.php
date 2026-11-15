<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>

    <h1>Edit Course</h1>

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses/{{ $course->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Course Name:</label><br>
        <input type="text" name="name"
               value="{{ old('name', $course->name) }}" required>
        <br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description', $course->description) }}</textarea>
        <br><br>

        <label>Duration (Weeks):</label><br>
        <input type="number" name="duration"
               value="{{ old('duration', $course->duration) }}"
               min="1" required>
        <br><br>

        <label>Fee:</label><br>
        <input type="number" name="fee"
               value="{{ old('fee', $course->fee) }}"
               min="0" step="0.01" required>
        <br><br>

        <label>Difficulty:</label><br>
        <select name="difficulty" required>
            <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>Easy</option>
            <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>Medium</option>
            <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>Hard</option>
        </select>
        <br><br>

        <label>Active Status:</label><br>
        <select name="is_active" required>
            <option value="1" {{ old('is_active', $course->is_active) == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ old('is_active', $course->is_active) == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
        <br><br>

        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="/courses">Back to Course List</a>

</body>
</html>