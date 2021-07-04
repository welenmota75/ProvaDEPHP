<?php
echo $_GET["mmc"];
echo $_GET["mdc"];

function mdc($x,$y){
$a = $_POST($x,$y);
$b = $=POST($x,$y);
if($a%$b == 0){
return $b;
}else{
return mdc($b,($a%$b));
}
}
echo mdc(48,30); //6
echo mdc(30,48); //6


mmc(x,y) = (($x*$y)/(mdc($x,$y)));
function mmc($x,$y){
return (($x*$y)/(mdc($x,$y)));
}

echo mmc(4,6); //12
echo mmc(4,15); //60
echo mmc(12,30); //60
<?php
echo "mdc".$_GET["M,n"];."mdc".$_GET["n,m mod n se m> n"]."!";

<?php
echo "mdc".$_POST["M,n"];."mdc".$_POST["n,m mod n se m> n"]."!";
<?php
echo "mdc".$_REQUEST["M,n"];."mdc".$_REQUEST["n,m mod n se m> n"]."!";
?>;
?>;
?>;