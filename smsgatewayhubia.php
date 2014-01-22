<?php
$studentNumber='91';
$parentNumber='91';
$studentNumber.=$_POST['sph'];
$parentNumber.=$_POST['pph'];
echo $parentNumber;
$message=$_POST['message'];
$url='http://203.124.105.204/smsapi/pushsms.aspx';
$fields1=array('user'=>'anurag','pwd'=>'959088','to'=>$studentNumber,'sid'=>'WEBSMS','msg'=>$message,'fl'=>'0');
$fields2=array('user'=>'anurag','pwd'=>'959088','to'=>$parentNumber,'sid'=>'WEBSMS','msg'=>$message,'fl'=>'0');
$fields_string1='';
$fields_string2='';


if($_POST){

$fields_string1='user=anurag&pwd=959088&to='.$studentNumber.'&sid=WEBSMS&msg='.$message.'&fl=0';
$fields_string2='user=anurag&pwd=959088&to='.$parentNumber.'&sid=WEBSMS&msg='.$message.'&fl=0';
$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields1));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//$result=curl_exec($ch);
curl_close($ch);

print $result;

$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields2));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//$result=curl_exec($ch);
curl_close($ch);

print $result;

}
//echo $fields_string1;
//echo "\n";
//echo $fields_string2;

?>