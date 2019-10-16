<?php


class MyClass
{
    
    function __construct($m)
    {
        $this->val = $m;
    }

    function showRedirect(){
        for($j=1;$j<=$this->val;$j++){
            $x = $j;
            for($i=0;$i<$this->val;$i++){
              if($i==0){
                echo $j.' ';
              }else{

                $x = $x+$this->val;
                echo $x.' ';
              }  
            }
            echo '<br>';
        } 
    }
}

$my = new MyClass(4);
$my->showRedirect();

die;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdoDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

      
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       





// prepare and bind
// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("bss", $firstname, $lastname, $email);

// // set parameters and execute
// $firstname = "Shubh";
// $lastname = "Sri";
// $email = "shubh@example.com";
// $stmt->execute();

// $firstname = "Sudish";
// $lastname = "Rawat";
// $email = "sudish@example.com";
// $stmt->execute();

// $firstname = "Sid";
// $lastname = "Srivastava";
// $email = "sid@example.com";
// $stmt->execute();

// echo "New records created successfully";

// $stmt->close();
// $conn->close();


		

    function sel_query($conn, $query, $where = array()) {
        $stmt = $conn->prepare($query);
        $stmt->execute($where);

        if ($stmt->rowCount() == 0){
            return false;
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    $where = array(2, 'shubh');

	$query = "SELECT * FROM MyGuests WHERE id = ? OR firstname = ?"; 
	$res = sel_query($conn, $query, $where);
    print_r($res);
?>