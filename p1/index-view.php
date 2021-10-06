<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Project 1 - High/Low Guessing game</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>     
    <link rel="stylesheet" href="style.css" />

</head>

<body>

<div class="container">
<img src="logo.png" alt="logo" /><br />
<div id="str"><?php echo $str
 ?></div> <br />
<form  action="" method="post">
     <?php echo $submit?> </form>
     <br />
   <div id="attempts">  <?php echo $attempts
 ?> </div>
 </div>

<?php echo $number."<br />".$guess."<br />".$str."<br />".$_SESSION['counter'];
 ?> 

</body>
</html>