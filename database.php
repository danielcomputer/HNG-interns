<?php
require __DIR__ . '..\..\interface\databaseConnectInterface.php';

/**
 *
 * @package iamdaniel webdev
 * @author Daniel Archibong <archibongdaniel13@gmail.com>
 * @copyright Copyright (c) 2017, iamdaniel webdev
 */

class Database implements DatabaseConnectionInterface {

    public function createConnection($host,$database_name,$username,$password) {

        $this->dsn = 'mysql:host='.$host.';dbname='.$database_name;
        return new PDO($this->dsn, $username, $password);

    }
}

?>
