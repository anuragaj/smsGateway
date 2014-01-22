<?php
$sem=$_POST['sem'];
$usn=$_POST['usn'];
//$fields=array('user'=>'anurag','pwd'=>'959088','to'=>$number,'sid'=>'WEBSMS','msg'=>$message,'fl'=>'0');;

//write a query which will fetch all the phone number into an array, then change the value of number each time
// and send the message
      $username = "root";
      $password = "root";
      $hostname = "localhost"; 
      $queryusn="SELECT * FROM studentdetails where usn='$usn'";
      $querysem="SELECT * FROM subjectDetails where sem='$sem'";


      $dbhandle = mysql_connect($hostname, $username, $password)
                            or die("Unable to connect to MySQL");
      $selected = mysql_select_db("student",$dbhandle)
                            or die("Could not select studentdetails");

       $result = mysql_query($queryusn);
       $row=mysql_fetch_row($result);
       $studentName=$row[1];
       $studentPhone.=$row[3];
       $parentPhone.=$row[4];

       $result=mysql_query($querysem);
       $i=0;
       while($row=mysql_fetch_row($result)){
       	$sub[$i]=$row[0];
       	$i=$i+1;
       }   
//if not found, alert a message to fill the details manually;
       ?>
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   <link rel="stylesheet" type="text/css" href="./smscss.css"/>
  </head>
  <body>
   <div id="container" name="d">
    <h1>DEPARTMENT OF CSE</h1>
    <!--<form action="./smsgatewayhubiamarks.php" method="post">-->
    <form action="smsgatewayhubia.php"method="post" name="form1">
     <ul name="ulist">
      
      <li name="llist">
        <label for="usn">USN</label>
  		<input type="text" name="usn" id="usn" value="<?php echo $usn ?>"/></li>
  		
  	<li name="llist">
        <label for="sem">Semester</label>
  		<input type="text" name="sem" id="sem" value="<?php echo $sem ?>"/></li>
  		
  	<li name="llist">
        <label for="name">Name</label>
  		<input type="text" name="name" id="name" value="<?php echo $studentName ?>"/></li>
  	
  	<li name="llist">
        <label for="studentphonenumber">Student Phone Number</label>
  		<input type="text" name="sph" id="sph" value="<?php echo $studentPhone ?>"/></li>
  	
  	<li name="llist">
        <label for="parentphonenumber">Parent Phone Number</label>
  		<input type="text" name="pph" id="pph" value="<?php echo $parentPhone ?>"/></li>
  
  		<li name="llist">
        <label for="message">Message</label>
  		<textarea type="text" name="message" id="message" cols="45" rows="15" onFocus="takeInput()"/></textarea></li>

     <li><input type="submit" name="sendMessage" id="sendMessage" value="Send Message" /></li>
    </ul>
   </form>
  </div>
 </body>
 <?php
 if(!$studentName)
       echo '<script type="text/javascript">
              window.alert("USN not found please fill in the details manually");
              </script>';
        else{
          switch($sem){
            case 3:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";
                                    
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";
                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;
            case 4:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";
                                              
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";
                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;
            case 5:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";
                       
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";
                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;                            
             case 6:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";
                                             
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";
                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;
                          
            case 7:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";
                                         
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";

                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;
              case 8:echo '<script language="javascript">
                          var sub1="sub1";
                          var sub2="sub2";
                          var sub3="sub3";
                          var sub4="sub4";
                          var sub5="sub5";
                          var sub6="sub6";                   
                          var marks=window.prompt("Enter the IA and then marks separated by space");
                          marks=marks.split(" ");
                          
                          var message="Greetings, your wards " + marks[0] + " internal marks are as follows\n";
                          message=message + sub1 + " : " + marks[1] + "\n";
                          message=message + sub2 + " : " + marks[2] + "\n";
                          message=message + sub3 + " : " + marks[3] + "\n";
                          message=message + sub4 + " : " + marks[4] + "\n";
                          message=message + sub5 + " : " + marks[5] + "\n";
                          message=message + sub6 + " : " + marks[6] + "\n";
                          message=message + "Thank you ";
                         
            
                          var formMessage=document.getElementById("message");
                          formMessage.value=message;
                          </script>';
                          break;                                                 

          }
        }
      ?>
 </html>