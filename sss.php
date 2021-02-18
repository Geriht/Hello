git clone https://ckeloc3@bitbucket.org/ckeloc3/test.git
<?
$integer = 13;
function divisors($integer) {
 $array=array();
 for ($i = 2 ; $i<$integer-1 ; $i++){
   if ($integer % $i == 0){
   $array[i]=$i; 
   echo "$i";  }
}
if (count($array)==0)
echo 'Простое число';
}
divisors($integer);
?>
