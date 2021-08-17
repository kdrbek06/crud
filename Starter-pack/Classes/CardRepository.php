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

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        // TODO: replace dummy data by real one
        $sql = 'SELECT * FROM pokemons';

        return $this->databaseManager->connect()->query($sql);

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update()
    {
        $editedName = $_POST['editedName'];
        $editedHp = $_POST['editedHp'];
        $editedSkill = $_POST['editedSkill'];
        $editedId = '';

//        $sql = "UPDATE pokemons SET name = '".$newName."', hp = '".$newHp."', skill =  '".$newSkill."')" WHERE id =1;


    }

    public function delete()
    {

    }

}