<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Edit</title>
</head>
<body>

<form action="{{ route('post.update', ['post' => $id]) }}" method="post">
    @csrf
    @method('PUT')
    <p><input type="text" name="title"></p>
    <br>
    <p><input type="text" name="content"></p>
    <br>
    <button type="submit">Submit</button>
</form>

</body>
</html>

