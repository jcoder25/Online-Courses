<?php
    $fullname=$_POST['fullname'];
    $email=$_POST['emailadd'];
    $contact=$_POST['contact'];
    $query=$_POST['QA'];
    $issue=$_POST['select'];
    $country=$_POST['country'];
    $feedback=$_POST['feedback'];
    $submit=$_POST['submit'];
    if(!isset($submit))
    {
        header('location:contact.html');
    }

    $con=mysqli_connect('localhost','root');
    $stats=mysqli_select_db($con,'contact');
    $q="INSERT INTO contactdata (fullname,email,contact,query,issue,country,feedback)VALUES('$fullname','$email','$contact','$query','$issue','$country','$feedback')";
    $check=mysqli_query($con,$q);  
    if($check==1)
    {
            $swag=1;
    }  
    else{
        $swag=0;
    }

        if($swag==1){
            header('location:Csuccess.php');
        }    
        else if($swag==0)
        {
            header('location:Cfail.php');
        }
        


?>