<html>
<head>
<title>Exercise2</title>
<?php

$a=75;

if ($a>=70)
{	
	$grade = "Passed";
}
else if($a>=60 && $a<70)
{
	$grade = "Remedial";
}
else
{
	$grade = "Failed";
}
echo "Student's Grade: $grade";

?>
</body>
</head>
</html>