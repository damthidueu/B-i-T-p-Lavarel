<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Delete products</h3>
    <form action="{{ url('/product/'. $id) }}" method="post">
        @method('DELETE')
        @csrf
        Name: <input type="text" name="" id=""> <br>
        <input type="submit" value="Delete">
    </form>

</body>

</html>