<?php
$flag = 0;
if(empty($_POST['fname'])){echo "First Name is Empty. <br>"; $flag = 1;}
if(empty($_POST['lname'])){echo "Last Name is Empty. <br>"; $flag = 1;}
if(empty($_POST['gender'])){echo "Gender is Empty. <br>"; $flag = 1;}
if(empty($_POST['email'])){echo "Email is Empty. <br>"; $flag = 1;}
if(empty($_POST['mobileno'])){echo "Mobile No is Empty. <br>"; $flag = 1;}
if(empty($_POST['shr'])){echo "Street/House/Road is Empty. <br>"; $flag = 1;}
if(empty($_POST['country'])){echo "Country Name is Empty. <br>"; $flag = 1;}
if($flag == 0) {echo "Registration Successful.";}
?>
