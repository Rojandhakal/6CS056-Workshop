
<x-layouts.app title="Courses">

    <div class="card">

        <h1>All Courses</h1>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Register New Course
        </a>

        <br><br>

        @if($courses->isEmpty())

            <p>No courses registered yet.</p>

        @else

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Duration (Weeks)</th>
                        <th>Fee</th>
                        <th>Difficulty</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->description ?? 'N/A' }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>{{ $course->fee }}</td>
                            <td>{{ $course->difficulty }}</td>

                            <td>
                                {{ $course->is_active ? 'Active' : 'Inactive' }}
                            </td>

                            <td>
                                <div class="actions">

                                    <a href="{{ route('courses.show', $course) }}"
                                       class="btn btn-secondary">
                                        View
                                    </a>

                                    <a href="{{ route('courses.edit', $course) }}"
                                       class="btn btn-warning">
                                        Edit
                                    </a>

                                    <x-delete-form
                                        :action="route('courses.destroy', $course)"
                                    />

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        @endif

    </div>

</x-layouts.app>
