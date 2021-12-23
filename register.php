<?php
if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];

    //if no errors carry on
    if(!isset($error)){

        // Title of the CSV
              $Content = "Name,Address,Mobile,Email\n";

        //set the data of the CSV
        $Content .= "$name,$address,$mobileno,$email\n";

        //set the file name and create CSV file
        $FileName = $name."-".date("d-m-y-h:i:s").".csv";
        header('Content-Type: application/csv'); 
        header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
        echo $Content;
        exit();
    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo '<p style="color:#ff0000">$error</p>';
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<label>Name</label><br><input type="text" name="name" required="" value="">
<br>
<label>Address</label><br><textarea rows="8" cols="22" name="address" required="" value=""></textarea>
<br>
<label>Mobile No.</label><br><input type="number" name="mobileno" value="" required="">
<br>
<label>Email</label><br><input type="email" name="email" value="" required="">
<br><br>
<input type="submit" name="submit"   value="Get CSV File">
</body>
</html>


</form>