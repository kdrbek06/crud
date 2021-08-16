<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

<ul>
    <?php foreach ($cards as $card) : ?>
        <li><?= 'Pokemon Name; ' . $card['Name'] . '  HP; ' . $card['HP'] . '  Skills; '. $card['Skills']?></li>
    <?php endforeach; ?>
</ul>

// TODO: Create a form

<form action="" method="post">

    <label for="Name">Pokemon Name:</label>
    <input type="text" name="Name" id="name">


    <label for="Skills">Skills: </label>
    <inpul type="text" name="Name"></inpul>


</form>




</body>
</html>