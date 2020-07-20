<?php 
// variable Setting
$name =$_REQUEST['name']
$email =$_REQUEST['email']
$phone=$_REQUEST['phone']
$subject =$_REQUEST['subject']
$Message =$_REQUEST['Message'] 

//CHECK INPUT FIELD 
IF (empty($name)|| (empty($email) || (empty($phone)|| (empty($subject)|| (empty($Message))
{
	echo "Please fill all the fields"

}

else
{

	mail("karthikeetz@gmail.com", "Message from E bull jet webdite" , $message, "From:$name <$ email> <$phone>  <$subject> <$Message>");
	echo "<script type='text/javascript'>alert ('your message sent successfully');

	windows.history.log(-1);
	</script>;
}


?>