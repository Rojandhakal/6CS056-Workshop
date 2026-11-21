
<x-layouts.app title="Course Details">

    <div class="card">

        <h1>Course Details</h1>

        <table>
            <tr>
                <th>ID</th>
                <td>{{ $course->id }}</td>
            </tr>

            <tr>
                <th>Course Name</th>
                <td>{{ $course->name }}</td>
            </tr>

            <tr>
                <th>Description</th>
                <td>{{ $course->description ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>Duration</th>
                <td>{{ $course->duration }} Weeks</td>
            </tr>

            <tr>
                <th>Fee</th>
                <td>{{ $course->fee }}</td>
            </tr>

            <tr>
                <th>Difficulty</th>
                <td>{{ $course->difficulty }}</td>
            </tr>

            <tr>
                <th>Status</th>
                <td>{{ $course->is_active ? 'Active' : 'Inactive' }}</td>
            </tr>
        </table>

        <br>

        <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning">
            Edit Course
        </a>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Back to Courses
        </a>

    </div>

</x-layouts.app>
