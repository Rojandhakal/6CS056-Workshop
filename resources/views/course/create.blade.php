
<x-layouts.app title="Register Course">

    <div class="card">

        <h1>Register New Course</h1>

        <form action="{{ route('courses.store') }}" method="POST">

            @csrf

            <x-courses.form
                :course="$course"
                buttonText="Register Course"
            />

        </form>

        <br>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Back to Courses
        </a>

    </div>

</x-layouts.app>
