<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Üzenetek</title>
</head>
<body>
<h1>Elküldött üzenetek</h1>

@if ($messages->isEmpty())
<p>Még nincs egyetlen üzenet sem.</p>
@else
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
    <tr>
        <th>Küldő</th>
        <th>Üzenet</th>
        <th>Küldés ideje</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($messages as $message)
    <tr>
        <td>{{ $message->sender }}</td>
        <td>{{ $message->message }}</td>
        <td>{{ $message->created_at->format('Y-m-d H:i:s') }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endif
</body>
</html>
