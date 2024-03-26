<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('contact.form')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" required placeholder="email">
        <input type="file" name = "pdf" required>
            <button type="submit">Click to mail</button>
    </form>
</body>
</html>