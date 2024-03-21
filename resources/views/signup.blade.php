<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>
    <form action="{{url('process')}}" method="post">
        @csrf
        FistName: <input type="text" name="firstname" id="firstname"><br>
        SureName: <input type="text" name="sureame" id="sureame"><br>
        Mobile & email <input type="text" name="email" id="" placeholder="Mobile number or email address"><br>
        PassWord: <input type="password" name="password" id=""><br>
        Date of Birth : <input type="date" name="dateofbirth" id=""><br>
        <input type="submit" value="SigUp">
    </form>
</body>

</html>