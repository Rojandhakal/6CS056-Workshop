
<x-layouts.app title="Edit Student">

    <div class="card">

        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student) }}" method="POST">

            @csrf
            @method('PUT')

            <x-students.form
                :student="$student"
                buttonText="Update Student"
            />

        </form>

        <br>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Back to Students
        </a>

    </div>

</x-layouts.app>
