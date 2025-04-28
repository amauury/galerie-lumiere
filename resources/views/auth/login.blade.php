<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="{{ asset('css/login_style.css') }}">
</head>
<body>
    <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <input type="text" name="email" placeholder="Identifiant">
        <input type="password" name="password" placeholder="mot de passe">
        <button type="submit">Se conecter</button>
    </form>
</body>
</html>