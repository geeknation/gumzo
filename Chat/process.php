<?php
session_start();
$_SESSION['user_id']=10;

$conn=mysql_connect("localhost","root","");

mysql_select_db("valiant",$conn);

    $function = $_POST['function'];
    
    $log = array();
    
    switch($function) {
    
    	 case('getState'):
        	
    	 case('update'):
        	$state = $_POST['state'];
        	
             break;
    	 
    	 case('send'):
		  
          //$nickname = htmlentities(strip_tags($_POST['nickname']));
			$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			$message = htmlentities(strip_tags($_POST['message']));            
           

		 if(($message) != ""){
        	
			 $query="INSERT INTO messaging SET conversation_id='".$_POST['conversation_id']."', title='chat', user1='".$_SESSION['user_id']."', user2='sysAdmin' ,message='".$message."',timestamp='".time()."',user1read='yes',user2read='no' ";
            $res=mysql_query($query)or die(mysql_error());

			 
        	
        	 
		 }
        	 break;
    	
    }
    
    echo json_encode($log);

?>