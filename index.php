<?php
  $firstname=$_REQUEST["firstname"];
  $lastname=$_REQUEST["lastname"];
  $email=$_REQUEST["mail"];
  $password=$_REQUEST["pass"];

 if(isset($_post["btntest"]))

{
    $host="localhost";
    $user="root";
    $password="";
    $db="books";

   $conn = mysqli_connect($host,$user,$password,$db);

    $insert ="insert into signup values('$firstname','$lastname','$email','$password')";

  mysqli_query($conn,$insert);
   if($conn){
      echo("<h1 style='color:green;'> your Registration is Done!</h1>");
   }
   else{
      echo("<h1 style='color:red;'>your Registration is Failed!!</h1>");
   }




}

?>



