<?php
$data=json_decode($_COOKIE["c1"],true);
if(isset($_REQUEST["radio2"]))
{
	$value=$_REQUEST["n4"];
	foreach($data as $var){
		if($value==$var)
		{
			echo "<form action=arra1.html >";
		    echo "<table align=center >";
			echo "<tr><td>element $value found <input type=submit name=s1 value=ok></td></tr>";
			echo "</table>";
			echo "</form>";
		}
	}
}
	
?>