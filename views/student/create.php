<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Index</title>
</head>
<body>
    <a href="?action=create">
        + Add new
    </a>

    <table width="100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student->getid() ?></td>
                <td><?php echo $student->getName() ?></td>
                <td><?php echo $student->getPhoneNumber() ?></td>
                <td><?php echo $student->getAddress() ?></td>
                <td>
                    <a href="?action=edit&controller=StudentController&id=<?php echo $student->getId() ?>">
                        Edit
                    </a>
                </td>
                <td>
                    <a href="?action=destroy&controller=StudentController&id=<?php echo $student->getId() ?>">
                        Delete
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
