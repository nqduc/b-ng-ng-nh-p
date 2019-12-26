<?php 
class DBconn {
    private $hostName;
    private $useName;
    private $password;
    private $dbName;
    public $conn;

    function __construct(){
        $this ->hostName = 'localhost';
        $this ->useName ='root';
        $this ->password = '';
        $this ->dbName = 'bist_training';
    }
   function connect(){
       $this->conn = mysqli_connect($this->hostName, $this->useName, $this->password, $this->dbName);

       if (!$this->conn){
           exit ("ket noi that bai");
       } 
       else {
           echo "";
       }
   }

   function insert ($table, $column, $values){
       $mysql= "INSERT INTO $table ($column) VALUES ($values);";
       $insert = $this->conn->query($mysql);
       if ( $insert === TRUE ){
        echo "insert successful";
       }else {
           echo "error:" .$this->conn->error;
       }
   }

    function delete($table, $condition){
        $mysql="DELETE FROM $table WHERE $condition;";
        // var_dump($mysql);
        $result = $this->conn->query($mysql);
        if ($result === TRUE){
            echo "delete successful<br>";
        }else {
            echo "error:" .$this->conn->error;
        }
    }

    function update($table, $column, $values, $where) {
        $mysql= "UPDATE $table SET $column = '$values' where $where ;";
        $update =$this->conn->query($mysql);
        if ($update === TRUE){
        echo "update successful";
        }else {
            echo "error:" .$this->conn->error;
        }
    }

    function select ($table, $where){
        $mysql = "SELECT * FROM $table WHERE $where;";
        $select =$this->conn->query($mysql);
        $rows = mysqli_fetch_assoc($select);
        if ($select){
            echo "";
        }else {
            echo "error:" .$this->conn->error;
        }
        return $rows;
    }  

    function select1 ($table, $where){
        $mysql = "SELECT * FROM $table WHERE $where;";
        $select =$this->conn->query($mysql);
        // $rows = mysqli_fetch_assoc($select);
        return $select;
    }  
}

    // $conn1 = new DBconn();
    // $conn1 ->connect();
    // $table= 'references';
    // $column="(name, phone, email)";
    // $values ="(Name of Refrance, 0921222745, QuangĐức@gmail.com)";
    

    // $conn1 = new DBconn();
    // $conn1 ->connect();
    // // var_dump($conn1->conn); 
    // $table= "dang_nhap";
    // $column="(name, pass)";
    // $value="(anhduc372, 123456)";
    // $conn1->insert($table ,$column ,$value);
    
    // $condition= "id = 22 or id = 23 or id = 26";
    // $conn1->delete($table1,$condition);

    // $table2 ='user';
    // $condition2 = "id = 26 and name = 'hien'";
    // $conn1->delete($table2, $condition);

    // $table3 = "skills";
    // $column3 = "skills";
    // $values3 = "'rather'";
    // $conn1->update($table3, $column3, $values3);

    // $rows = $conn1->select($column3, $table3);
    // foreach ($rows as $row){
    //     var_dump($row);
    //     echo "<br>";
    // }
?>