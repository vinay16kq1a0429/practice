<?php
$values=array(100,200,300,400,500);
$ele=$_POST["n1"];
$rad1=$_POST["add1"];
$rad2=$_POST["remove"];
echo "array before change:";
print_r($values);
echo"<br>";
if($rad1=="add"){
	if($rad2=="begin"){
		array_unshift($values,$ele);
	}
	elseif($rad2=="end"){
		array_push($values,$ele);
	}
}
elseif($rad2=="remove"){
	if($rad2=="begin"){
		array_shift($values);
	}
	elseif($rad2=="end"){
		array_pop($values);
	}
}
echo "array after change";
print_r($values);
$keys=array_keys($values);
echo "<br>array 2nd value is:";
print_r($keys[2]);
echo"=>";
print_r($values[2]);
setcookie("c1",json_encode($values),time()+3600);
echo "
<html>
<head>
</head>
<body>
<form action=arr2.php method=POST>
<table>
<tr>
<td colspan=2>Find an element<input type=radio name=radio2 value=fetch></td></tr>
<tr>
<td>enter the element</td>
<td><input type=text name=n4></td>
</tr>
<tr>
<td><input type=submit name=submit value=Check></td>
</tr>
</table>
</form>
</body>
</html>";
?>