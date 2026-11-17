<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessions & Cookies</title>
</head>
<body>
    <h1>Sessions & Cookies Demo</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <h2>1. Save Session</h2>

    <form method="POST" action="{{ route('session-cookie.save') }}">
        @csrf

        <label>Username:</label>
        <input type="text" name="username"
               value="{{ old('username') }}" required>

        <button type="submit">Save Session</button>
    </form>

    @error('username')
        <p>{{ $message }}</p>
    @enderror

    <p>Saved username: {{ $username ?? 'No username saved' }}</p>
    <p>Visits counter: {{ $visits }}</p>

    <hr>

    <h2>2. Save Cookie</h2>

    <p>Current theme: {{ $theme }}</p>

    <form method="POST" action="{{ route('session-cookie.cookie') }}">
        @csrf
        <button type="submit">Save Dark Theme Cookie</button>
    </form>

    <hr>

    <h2>3. Clear Session and Cookie</h2>

    <form method="POST" action="{{ route('session-cookie.clear') }}">
        @csrf
        <button type="submit">Clear Data</button>
    </form>
</body>
</html>