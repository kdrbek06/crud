<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
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

<h1>Goodcard - track your collection of Pokémon cards</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>HP</th>
        <th>Skill</th>
        <th>Edit Card</th>

    </tr>
    <?php foreach ($cards as $card) : ?>
    <tr>
        <td><?= $card['id'] ?> </td>
        <td><?= $card['name'] ?> </td>
        <td><?= $card['hp'] ?> </td>
        <td><?= $card['skill'] ?> </td>
        <td><a href="">Edit</a></td>


    </tr>

    <?php endforeach; ?>
</table>

// TODO: Create a form

<form action="" method="post">

    <label for="name">Pokemon Name:</label>
    <input type="text" name="name" id="name">

    <label for="hp">HP:</label>
    <input type="number" name="hp" id="hp">

    <label for="skill">Skills: </label>
    <input type="text" name="skill" id="skill">

    <input type="submit" value="Add Pokemon" name="submit">

</form>




</body>
</html>