
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Student</title>
</head>
<body>

    <h1>Student Registration Form</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">

        @csrf

        <label>Full Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Phone:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}" required>
        <br><br>

        <label>Address:</label><br>
        <textarea name="address">{{ old('address') }}</textarea>
        <br><br>

        <label>Date of Birth:</label><br>
        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
        <br><br>

        <button type="submit">Register Student</button>

    </form>

</body>
</html>
