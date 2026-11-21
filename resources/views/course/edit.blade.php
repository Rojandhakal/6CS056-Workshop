
<x-layouts.app title="Edit Course">

    <div class="card">

        <h1>Edit Course</h1>

        <form action="{{ route('courses.update', $course) }}" method="POST">

            @csrf
            @method('PUT')

            <x-courses.form
                :course="$course"
                buttonText="Update Course"
            />

        </form>

        <br>

        <a href="{{ route('courses.index') }}" class="btn btn-secondary">
            Back to Courses
        </a>

    </div>

</x-layouts.app>
