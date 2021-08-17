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
        <li><?= 'Pokemon Name; ' . $card['name'] . '  HP; ' . $card['hp'] . '  Skill; '. $card['skill']?></li>
    <?php endforeach; ?>
</ul>

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