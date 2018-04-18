<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge chrome=1">
    <title>Document</title>
</head>
<body>
    <!-- 233 -->
<?php
define("d1",1);
define("d2",2);
define("d3",4);

$state=5;

// if  (($state&d1)>0)
// {
// echo ("<br /> 1dengliang");
// }
// if  (($state&d2)>0)
// {
// echo ("<br /> 2dengliang");
// }


function showall($sta)
{
for ($i=1;$i<4;$i++)
{
$s="d".$i;
if (($sta&constant($s))>0)
{
echo "deng {$i} liang";
}
}
}
showall(5);
echo "<hr> ";
$state=$state|d2;
showall($state);
echo "<hr> ";
$state=$state&(~d1);
showall($state);
echo "<hr> ";
?>
<?php 
include '.\3.php';
 $v2=  include __DIR__ . '\3.php';
echo "($v2)";

?>



</body>
</html>