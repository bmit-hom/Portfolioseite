<!DOCTYPE html>
<html>
<head>
<form  method="post" action="index.php" >

<style>
    
    p, body {
    font-family: comic sans ms,sans-serif,italic;
    font-size: 60px;
    background: blue;
    color: red;
    
    }
}

 
</style>
</head>


<body>


<img src="toddboward.png" alt="ToddBoward">

<div></div>

<P>input your name</p>

<form>


<input type="text" name="login" size=100>
<br>
<input type="text" name="password" size=100>

<input type="submit" value="Log in" name="$button1">
<br>

<input type="submit" value="Get cool thing" name="$button2">

</form>


<?php    
if (isset($_POST['$button1'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if ($login == "melik" && $password == "cum"){
    echo "login sucesful";
    }
    else{
        echo "u suck";
    }

}
if(isset($_POST['$button2'])){
  $content = file_get_contents("https://ramsapi.com/api");
  $result = json_decode($content);
  echo $result -> ramsay;
}

?>


</body>
</html>