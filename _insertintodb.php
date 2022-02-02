<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into DB</title>
</head>
<body>
    <p>Insert into Database</p>
    <form action="_insertintodbhandler.php" method="post">
        <input type="text" name="tablename" placeholder="table name">
        <input type="text" name="columnname" placeholder="column name">
        <input type="text" name="content">
        <input type="submit" value="submit">
    </form>

</body>
</html>



