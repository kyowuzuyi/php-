<?php
//ˆê”ÔÅ‰url‚Ì’†‚Épage=0;
$array =array(1,2,3,4,5);
$page = $_GET['page'];
?>
<html>

<body>

<h1>test</h1>

<form action="index.php" method="GET">
<input type = "text" name="name" value="">
<input type = "text" name="id" value="">
<input type = "submit" value="send">
</form>



<h1>asas</h1>
<ul>
<li><?php echo "<h1>".$array[$page]."</h1>"; $page++;?></li>
<li><?php echo "<h1>".$array[$page]."</h1>"; $page++;?></li>
</ul>


<?php
 echo "<a href='index.php?page=". $page."'>next page</a>";
?>

<?php
 $page = 
 echo "<a href='index.php?page=". $page."'>pre page</a>";
?>

</body>


</html>