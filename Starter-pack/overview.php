<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
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
        .center {
            text-align: center;
            border: 1px solid grey;
        }
    </style>
</head>
<body>




<div class="center">
    <h1 class="w3-tag w3-xlarge w3-padding w3-red" >Pokémon cards</h1>
</div>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>HP</th>
        <th>Skill</th>
        <th>Edit Card</th>

    </tr>
    <?php foreach ($cards as $card) :  ?>
    <tr>
        <td><?= $card['id'] ?> </td>
        <td><?= $card['name'] ?> </td>
        <td><?= $card['hp'] ?> </td>
        <td><?= $card['skill'] ?> </td>
        <td>
            <a href="index.php?edit=<?= $card['id'] ?>" class="w3-button w3-blue">Edit</a>
            <a href="index.php?delete=<?= $card['id'] ?>" class="w3-button w3-red">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>



<!--New pokemon create form-->
<form action="" method="post">

    <div class="center">
        <h3 class="w3-tag w3-animate-fading w3-large">Create New Pokemon</h3>
    </div>

    <table>
        <tr>

            <th>Name</th>
            <th>HP</th>
            <th>Skill</th>
            <th>Edit Card</th>

        </tr>
        <tr>
            <td><input type="text" name="name" id="name"></td>
            <td><input type="number" name="hp" id="hp"></td>
            <td><input type="text" name="skill" id="skill"></td>
            <td><input type="submit" value="Add Pokemon" name="submit" class="w3-button w3-green"></td>
        </tr>
    </table>
</form>


</body>
</html>