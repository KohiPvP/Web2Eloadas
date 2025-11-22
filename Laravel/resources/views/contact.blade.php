<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Kapcsolat</title>
</head>
<body>
<h1>Kapcsolat</h1>

{{-- siker üzenet --}}
@if (session('success'))
<div style="color: green; margin-bottom: 10px;">
    {{ session('success') }}
</div>
@endif

{{-- validációs hibák --}}
@if ($errors->any())
<div style="color: red; margin-bottom: 10px;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('contact.send') }}">
    @csrf

    <div style="margin-bottom: 10px;">
        <label for="sender">Név vagy e-mail cím:</label><br>
        <input type="text" id="sender" name="sender" value="{{ old('sender') }}">
    </div>

    <div style="margin-bottom: 10px;">
        <label for="message">Üzenet:</label><br>
        <textarea id="message" name="message" rows="5" cols="40">{{ old('message') }}</textarea>
    </div>

    <button type="submit">Üzenet küldése</button>
</form>
</body>
</html>
