<?php 
   include "idconfig_project.php";

   // Select a database
   $dbname = "world";
   mysqli_select_db($conn, $dbname) or die('DB selection failed');

   $sql = "SELECT * FROM country";
   $resultCustomers = $conn->query($sql);

   if($resultCustomers->num_rows > 0){
      while($row = $resultCustomers->fetch_assoc()){
         $name = $row["Code"];
         break;
      }
   }
?>

<script>
   var n = "<?php echo $name ?>"
   document.getElementById("DisplayTypeData").innerHTML = n;
</script>