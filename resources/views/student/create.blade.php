
<x-layouts.app title="Register Student">

    <div class="card">

        <h1>Register New Student</h1>

        <form action="{{ route('students.store') }}" method="POST">

            @csrf

            <x-students.form
                :student="$student"
                buttonText="Register Student"
            />

        </form>

        <br>

        <a href="{{ route('students.index') }}" class="btn btn-secondary">
            Back to Students
        </a>

    </div>

</x-layouts.app>
