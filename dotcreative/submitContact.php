<?php
	
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $phone = $_POST['phone'];   
    $subject = $_POST['subject'];   
    $message = $_POST['message'];
    $property = isset($_POST['property']) ? $_POST['property'] : '';

    $to = 'charithp129@gmail.com'; 
    $subject = 'Contact Page Contact Form Submission'; 
    if(isset($_POST['property'])){
        $body = "Property Type: $property\n From: $name\n E-Mail: $email\n Phone: $phone\n Subject: $subject\n Message:\n $message";
    }else{
        $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Subject: $subject\n Message:\n $message";  
    }     
    
    $headers = "From: $email\r\n"; 
	
				 
        $isSent =  mail ($to, $subject, $body, $headers);

        echo $isSent;

?>

