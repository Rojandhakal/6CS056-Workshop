<!DOCTYPE html>
<html>
<head>
    <title>Register Course</title>
</head>
<body>

    <h1>Register New Course</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if($errors->any())
        <ul style="color: red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/courses" method="POST">
        @csrf

        <label>Course Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea>
        <br><br>

        <label>Duration (Weeks):</label><br>
        <input type="number" name="duration" value="{{ old('duration') }}" min="1" required>
        <br><br>

        <label>Fee:</label><br>
        <input type="number" name="fee" value="{{ old('fee') }}" min="0" step="0.01" required>
        <br><br>

        <label>Difficulty:</label><br>
        <select name="difficulty" required>
            <option value="">Select Difficulty</option>
            <option value="Easy">Easy</option>
            <option value="Medium">Medium</option>
            <option value="Hard">Hard</option>
        </select>
        <br><br>

        <label>Active Status:</label><br>
        <select name="is_active" required>
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
        <br><br>

        <button type="submit">Register Course</button>

    </form>

</body>
</html>