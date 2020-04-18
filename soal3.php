<!DOCTYPE html>
<html>
<head>
	<title> No.3 </title>
</head>
<body>

	<form action="" method="POST">
		Masukan bintang 
		<input type="text" name="bintang">
		<input type="submit" name="enter" value="GO">
	</form>

	<?php 

		if (isset($_POST["enter"])) {
			$bin = $_POST["bintang"];

//segititga sama kaki...
for($i=1;$i<=$bin;$i++){
    for($j=1;$j<=$bin-$i;$j++){
        print('&nbsp');
        echo "  ";
    }       
    for($k=1;$k<=$i*2-1;$k++){
            echo "*";
    }
    echo "<br>";
}
        }

echo '<br>';
echo '<br>';
echo '<br>';

?>
</body>
</html>

