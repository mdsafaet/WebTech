<?php
$length = 7;
$width = 7.5;
if($length==$width) echo "this shape is a square.";
else
{
$area = $length * $width;
echo "Area is: ".$area;
$perimeter = 2 *($length + $width );
echo "<br> Perimeter is: " .$perimeter;
}
?>