<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $var=$_POST["username"];
        print( $var);

    ?>
</head>
<body>
    <form name="form1" methord="post" action="03.php">
        <input type="text" value="username" name="username">
        <input type="submit" name="submit1" value="login">
    </form>

    
</body>
</html>
