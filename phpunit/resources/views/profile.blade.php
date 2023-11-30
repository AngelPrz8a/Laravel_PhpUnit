<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error  }}
        @endforeach
    @endif
    <form action="" enctype="multipart/form-data" method="post">
        @csrf
        <input type="file" name="photo" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>