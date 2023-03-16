<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php');

class DataLayer
{
    // Database connection object
    private $_dbh;

    function __construct()
    {
        try {
            //Instantiate a PDO object
            $this->_dbh = new PDO(DB_DRIVER, USERNAME, PASSWORD);
            //echo 'Successful!';
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function saveDestination($destinationObj)
    {
        //1. Define the query
        $sql = "INSERT INTO `destinations`(`name`, `description`, `address`, `city`, `zipCode`) VALUES
        (:name, :description, :address, :city, :zipCode)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters
        $name = $destinationObj->getName();
        $description = $destinationObj->getDescription();
        $address = $destinationObj->getStreetAddress();
        $city = $destinationObj->getCity();
        $zipCode= $destinationObj->getZipCode();

        $statement->bindParam(':name', $name);
        $statement->bindParam(':description', $description);
        $statement->bindParam(':address', $address);
        $statement->bindParam(':city', $city);
        $statement->bindParam(':zipCode', $zipCode);

        //4. Execute the query
        $statement->execute();

        //5. Process the results

    }

    function getDestinations()
    {
        //1. Define the query
        $sql = "SELECT * FROM `destinations`";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();


        //5. Process the results
        return $statement->fetchAll(PDO::FETCH_ASSOC);


// need to figure out how to display DATABASE info
//        foreach ( $result as $row ) {
//            echo "<h1>" . $row['name'] . ", " . $row['description'] . "</h1>" . "<br>";
//        }
    }

}