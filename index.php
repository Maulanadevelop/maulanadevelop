<!DOCTYPE html>
<html>
<head>
	<title>Maulana Dev</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
<?php
$a = [];
$bilangan = 72;

for($i=1;$i <= $bilangan; $i++){
	if($bilangan % $i == 0){
	array_push($a, $i);
	}
}

echo $bilangan." bisa dibagi dengan ";
foreach($a as $b){
echo $b.",";
}

if(count($a) > 2){
echo "<br>".$bilangan." BUKAN BILANGAN PRIMA";
}else{
echo "<br>".$bilangan." BILANGAN PRIMA";
}
</body>
</html>
<script>
</script>
