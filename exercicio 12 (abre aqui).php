<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form method="get">
<input type="text" name="skt" placeholder="ESCOLHA A TABUADA" />
<input type="submit" value="Confirmar" />
<input type="reset" value="Limpar" />
</form>
<?php
if(isset($_GET['skt']))
{$a=$_GET['skt'];
$n=1;
do{
	echo $a*$n;
	echo '<br />';
	$n++;
}
while($n<=10 and $n>=1);
}
?>
</body>
</html>