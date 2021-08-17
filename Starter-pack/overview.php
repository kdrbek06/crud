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
    <?php foreach ($cards as $card) :  ?>
    <tr>
        <td><?= $card['id'] ?> </td>
        <td><?= $card['name'] ?> </td>
        <td><?= $card['hp'] ?> </td>
        <td><?= $card['skill'] ?> </td>
<!--        <td><button id="--><?//= $card['id'] ?><!--" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">Edit</button></td>-->
        <td>
            <a href="index.php?edit=<?= $card['id'] ?>" class="w3-button w3-blue">Edit</a>
            <a href="index.php?delete=<?= $card['id'] ?>" class="w3-button w3-red">Delete</a>
        </td>




    </tr>

    <?php endforeach; ?>
</table>

<h2>Create New Pokemon</h2>

<form action="" method="post">

    <label for="name">Pokemon Name:</label>
    <input type="text" name="name" id="name">

    <label for="hp">HP:</label>
    <input type="number" name="hp" id="hp">

    <label for="skill">Skills: </label>
    <input type="text" name="skill" id="skill">

    <input type="submit" value="Add Pokemon" name="submit">

</form>



// MODAL BOX FOR EDITING POKEMON




<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-animate-top w3-card-4">
        <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-button w3-display-topright">&times;</span>
            <h2>Edit Pokemon</h2>
        </header>

        <div class="w3-container">

            <label for="name">Name:</label>
            <input type="text" name="editedName">

            <label for="hp">HP:</label>
            <input type="number" name="editedHp">

            <label for="skill">Skills: </label>
            <input type="text" name="editedSkill">

        </div>

        <footer class="w3-container w3-teal">
            <input type="submit" value="Save Changes" name="editSubmit">
        </footer>
    </div>
</div>





<!--<script type="text/javascript">
    function selectForEdit(id){
        document.getElementById('id01').style.display='block';
        console.log(id);
    }
</script>-->





</body>
</html>