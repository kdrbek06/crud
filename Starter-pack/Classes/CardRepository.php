<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern



class CardRepository
{
    private $databaseManager;


    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }



    public function create()

    {
        $newName = $_POST['name'];
        $newHp = $_POST['hp'];
        $newSkill = $_POST['skill'];

        $sql = "INSERT INTO pokemons (name,hp, skill) VALUE ('".$newName."', '".$newHp."', '".$newSkill."')";
        return $this->databaseManager->connect()->query($sql);
    }




    // Get all pokemons from database
    public function get()
    {
        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)

        $sql = 'SELECT * FROM pokemons';
        return $this->databaseManager->connect()->query($sql);
    }




    public function update()
    {
        $editedId = $_POST['editedId'];
        $editedName = $_POST['editedName'];
        $editedHp = $_POST['editedHp'];
        $editedSkill = $_POST['editedSkill'];


        // this is protection for sql injection
        if (!is_numeric($editedId)) return;

        $sql = "UPDATE pokemons SET name = '".$editedName."', hp = '".$editedHp."', skill =  '".$editedSkill."' WHERE id = '".$editedId."'";
        return $this->databaseManager->connect()->query($sql);
    }




    public function delete()
    {
        $deletedId = $_GET['delete'];

        $sql = "DELETE FROM pokemons WHERE id = '".$deletedId."'";
        return $this->databaseManager->connect()->query($sql);
    }

}