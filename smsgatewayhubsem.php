<?php
$number='91';
$sem=$_POST['sem'];
$message=$_POST['smsMessage'];
$url='http://203.124.105.204/smsapi/pushsms.aspx';
//$fields=array('user'=>'anurag','pwd'=>'959088','to'=>$number,'sid'=>'WEBSMS','msg'=>$message,'fl'=>'0');;
$fields_string='';

//write a query which will fetch all the phone number into an array, then change the value of number each time
// and send the message
      $username = "root";
      $password = "root";
      $hostname = "localhost"; 
      $query="SELECT * FROM studentdetails where sem='$sem'";


      $dbhandle = mysql_connect($hostname, $username, $password)
                            or die("Unable to connect to MySQL");
      $selected = mysql_select_db("student",$dbhandle)
                            or die("Could not select studentdetails");

       $result = mysql_query($query);
       while($row=mysql_fetch_row($result)){
       	$number='91';
       	$number.=$row[3];
       	$fields_string='';

       $fields_string='user=anurag&pwd=959088&to='.$number.'&sid=WEBSMS&msg='.$message.'&fl=0';
       $ch=curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, count($fields));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//$result=curl_exec($ch);
		curl_close($ch);

		print $result;
    echo $fields_string;
    echo "\n";

}
echo $fields_string;

?>