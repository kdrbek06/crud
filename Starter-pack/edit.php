<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<form action="">

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>HP</th>
            <th>Skill</th>
            <th>Edit Card</th>
        </tr>

        <?php foreach ($cards as $card) :  ?>
        <?php if($card['id'] == $_GET['edit']) : ?>
        <tr>
            <td><?= $card['id'] ?> </td>
            <td><?= $card['name'] ?> </td>
            <td><?= $card['hp'] ?> </td>
            <td><?= $card['skill'] ?> </td>
            <td><a href="index.php?edit=<?= $card['id'] ?>" class="w3-button w3-blue">Edit</a></td>

        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </table>
</form>

</body>
</html>