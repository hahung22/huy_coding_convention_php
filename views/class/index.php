<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Index</title>
</head>
<body>
    <a href="?action=create&controller=ClassController">
        + Add new
    </a>

    <table width="80%" border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($classes as $class): ?>
            <tr>
                <td><?php echo $class->getid() ?></td>
                <td><?php echo $class->getName() ?></td>
                <td>
                    <a href="?action=edit&controller=ClassController&id=<?php echo $class->getId() ?>">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="?action=destroy&controller=ClassController&id=<?php echo $class->getId() ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
