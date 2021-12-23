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