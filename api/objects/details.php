<?php
class Details{

    // database connection and table name
    private $conn;
    private $table_name = "details";

    // object properties
    public $id;
    public $Firstname;
    public $Lastname;
    public $Email;
    public $DateofBirth;
    public $Gender;
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    //welcome user
    function welcome(){

        if($this->isAlreadyExist()){
            return false;
        }
        // query to insert record
        $query = "INSERT INTO
                    " . $this->table_name . "
                SET
                    Firstname=:Firstname,Lastname=:Lastname Email=:Email,DateofBirth=:DateofBirth,Gender=:Gender";

        // prepare query
        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->Firstname=htmlspecialchars(strip_tags($this->Firstname));
        $this->Lstname=htmlspecialchars(strip_tags($this->Lastname));
        $this->Email=htmlspecialchars(strip_tags($this->Email));
        $this->DateofBirth=htmlspecialchars(strip_tags($this->DateofBirth));
        $this->Gender=htmlspecialchars(strip_tags($this->Gender));

        // bind values
        $stmt->bindParam(":Firstname", $this->Firstname);
        $stmt->bindParam(":Lastname", $this->Lastname);
        $stmt->bindParam(":Email", $this->Email);
        $stmt->bindParam(":DateofBirth,$this->DateofBirth")
        $stmt->bindParam(":Gender", $this->Gender);

        // execute query
        if($stmt->execute()){
            $this->id = $this->conn->lastInsertId();
            return true;
        }

        return false;

    }
    // Welcome user
    function welcome(){
        // select all query
        $query = "SELECT
                    `id`, `Firstname`, `Lastname`,`Email`,`DateofBirth`,`Gender`
                FROM
                    " . $this->table_name . "
                WHERE
                    Firstname='".$this->Firstname."' AND Email='".$this->Email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
    function isAlreadyExist(){
        $query = "SELECT *
            FROM
                " . $this->table_name . "
            WHERE
                Email='".$this->Email."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
