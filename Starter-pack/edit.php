<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

<form action="index.php" method="post">

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

            <td><input type="hidden" name="editedId" value="<?= $card['id'] ?>"><?= $card['id'] ?></td>
            <td><input type="text" name="editedName" value="<?= $card['name'] ?>"></td>
            <td><input type="text" name="editedHp" value="<?= $card['hp'] ?>"></td>
            <td><input type="text" name="editedSkill" value="<?= $card['skill'] ?>"></td>

            <td><input type="submit" value="Edit" class="w3-button w3-blue"></input></td>

        </tr>
        <?php endif; ?>
        <?php endforeach; ?>
    </table>
</form>

</body>
</html>