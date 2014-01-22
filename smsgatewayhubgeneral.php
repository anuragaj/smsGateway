<?php
$number='91';
$number.=$_POST['phoneNumber'];
$message=$_POST['smsMessage'];
$url='http://203.124.105.204/smsapi/pushsms.aspx';
$fields=array('user'=>'anurag','pwd'=>'959088','to'=>$number,'sid'=>'WEBSMS','msg'=>$message,'fl'=>'0');
$fields_string='';


if($_POST){

$fields_string='user=anurag&pwd=959088&to='.$number.'&sid=WEBSMS&msg='.$message.'&fl=0';
$ch=curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, count($fields));
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//$result=curl_exec($ch);
curl_close($ch);

print $result;

}
echo $fields_string;

?>