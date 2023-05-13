
<?php 

$con = mysqli_connect("localhost", "root", "", "cad");
    
$vnome=$_POST['nome'];
$vsobrenome=$_POST['sobrenome'];

$sql="insert into cad values ('$vnome','$vsobrenome')";


if ($con->query($sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
echo"Registro Gravado";

mysqli_close($con);        
?>