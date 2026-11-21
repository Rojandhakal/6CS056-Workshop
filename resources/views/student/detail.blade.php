
<x-layouts.app title="Student Details">

    <div class="card">

        <h1>Student Details</h1>

        <table>
            <tr>
                <th>ID</th>
                <td>{{ $student->id }}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>{{ $student->name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $student->email }}</td>
            </tr>

            <tr>
                <th>Phone</th>
                <td>{{ $student->phone }}</td>
            </tr>

            <tr>
                <th>Address</th>
                <td>{{ $student->address ?? 'N/A' }}</td>
            </tr>

            <tr>
                <th>Date of Birth</th>
                <td>
                    {{ $student->date_of_birth?->format('Y-m-d') ?? 'N/A' }}
                </td>
            </tr>

            <tr>
                <th>Age</th>
                <td>{{ $student->age ?? 'N/A' }}</td>
            </tr>
        </table>

        <br>

        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">
            Edit Student
        </a>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Back to Students
        </a>

    </div>

</x-layouts.app>
