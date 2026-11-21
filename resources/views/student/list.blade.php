
<x-layouts.app title="Students">

    <div class="card">

        <h1>Registered Students</h1>

        <a href="{{ route('students.create') }}" class="btn btn-primary">
            + Register New Student
        </a>

        <br><br>

        @if ($students->isEmpty())

            <p>No students registered yet.</p>

        @else

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                {{ $student->date_of_birth?->format('Y-m-d') ?? 'N/A' }}
                            </td>

                            <td>
                                <div class="actions">

                                    <a href="{{ route('students.show', $student) }}"
                                       class="btn btn-secondary">
                                        View
                                    </a>

                                    <a href="{{ route('students.edit', $student) }}"
                                       class="btn btn-warning">
                                        Edit
                                    </a>

                                    <x-delete-form
                                        :action="route('students.destroy', $student)"
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
