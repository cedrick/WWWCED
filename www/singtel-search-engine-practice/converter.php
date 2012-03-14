<?php 



$romans = array(
    'M' => 1000,
    'CM' => 900,
    'D' => 500,
    'CD' => 400,
    'C' => 100,
    'XC' => 90,
    'L' => 50,
    'XL' => 40,
    'X' => 10,
    'IX' => 9,
    'V' => 5,
    'IV' => 4,
    'I' => 1,
);



$roman = 'IVI';
$result = 0;

foreach ($romans as $key => $value) {
    while (strpos($roman, $key) === 0) {
    	$result += $value;
        $roman = substr($roman, strlen($key));
    }
}
echo $result;

?>

<?php
//$bin= '1001';
//echo base_convert($bin, 2, 16);
?>
