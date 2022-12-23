<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Index</title>
</head>
<body>
    <form action="?action=update" method="post">
        <input type="hidden" name="id" value="<?php echo $class->getId() ?>">
        Name
        <input type="text" name="name" value="<?php echo $class->getName() ?>">
        <br>
        <button>Update</button>
    </form>
</body>
</html>
