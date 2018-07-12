<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include_once 'checksession.php' ?>
    <form action="add_deal.php" method="post">
        姓名: <input type="text" name="sname"><br>
        年龄: <input type="text" name="sage"><br>
        性别: <input type="text" name="sgender"><br>
        邮箱: <input type="text" name="semail"><br>
        电话: <input type="text" name="stel"><br>
         <input type="submit" value="添加"><br>
    </form>
</body>
</html>