<?php

if (isset($_POST['name'])) {
$name = $_POST['name'];

if(!empty($name)) {
$sentence = $name.' woke up, and made a PHP tutorial.'; 
}
else {
echo 'Please enter a name.'; 
}

}
?>

<html>
 
<head>




</head>


<body>


<form action="index.php" method="POST">
Name: <input type="text" name="fname" value=<?php echo $name?> > <br>
Age: <input type="text" name="age" />
<input type="submit" value="Submit">
</form> 


<textarea rows="6" cols="15"><?php echo $sentence ?></textarea>

Welcome <?php echo $_POST["fname"]; ?> <br /> 


<strong> Jessie </strong> 
<?php


echo "Body of webpage...";
echo ""; 

echo "My name is "; 

myname(); 

?>  

<?php


function myname()
{
echo "Alex"; 
}






?>



</body>


</html> 