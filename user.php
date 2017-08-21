<?php

  require __DIR__ . '\database.php';

  /**
   *
   */
  class User
  {

    public $host = "localhost";

    public $database_name = "intern_hng";

    public $username = "root";

    public $password = "";

    public $connection;

    /**
     *  call the createConnection function to connect to the Database for every instance of a user
     */
    function __construct(Database $database)
    {

      try {

           $this->connection = $database->createConnection($this->host,$this->database_name,$this->username,$this->password);

      } catch (Exception $e) {

      }

    }

    public function fetchUser()
    {
        $query = $this->connection->prepare('SELECT * FROM intern_hng');
        $query->execute();
        $resource = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resource;
    }

  }

 ?>
