
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Management System' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <x-navbar />

    <main class="container">
        @if(session('success'))
            <x-alert type="success" :message="session('success')" />
        @endif

        @if($errors->any())
            <x-alert type="danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </x-alert>
        @endif

        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
