<?php

  $email=“api_token”;
  $password="X";
$tickets=array();

$Ayush=array();
$qwe=0;

$con=mysql_connect("localhost”,”db”,”password”)or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);

$delstr="delete from onhold_ticket_detail";
$delres=mysql_query($delstr,$con);
$delstr1="delete from agents_on_hold_count";
$delres1=mysql_query($delstr1,$con);


  for($i=1; $i<=200; $i++)
{
  $url = 'http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/filter/all_tickets?format=json&page='.$i;
  $ch = curl_init ($url);
  
  curl_setopt($ch, CURLOPT_USERPWD, "$email:$password");
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  $server_output = curl_exec ($ch);
  $tickets[$i]= json_decode($server_output);
  echo '<script> console.log("JSON received");</script>';
foreach ($tickets[$i] as $key => $ticket) {

if ($ticket->status==6 || $ticket->status==8 || $ticket->status==9 || $ticket->status==10 || $ticket->status==3 || $ticket->status==2)
{
$Ayush['status']=$ticket->status;
$Ayush['status_name']=$ticket->status_name;
$Ayush['display_id']=$ticket->display_id;
$Ayush['priority_name']=$ticket->priority_name;
$Ayush['source_name']=$ticket->source_name;
$Ayush['updated_at']=$ticket->updated_at;
$Ayush['module_affected_83876']=$ticket->custom_field->module_affected_83876;
$Ayush['case_reason_83876']=$ticket->custom_field->case_reason_83876;
$Ayush['subcase_reason_83876']=$ticket->custom_field->subcase_reason_83876;
$Ayush['new_level_83876']=$ticket->custom_field->new_level_83876;
$Ayush['plan_type_83876']=$ticket->custom_field->plan_type_83876;
$Ayush['created_at']=$ticket-> created_at;
$Ayush['responder_name']=$ticket->responder_name;
$qwe++;
$insstr="insert into onhold_ticket_detail values($Ayush[display_id],'$Ayush[responder_name]','$Ayush[status_name]',$Ayush[status],'$Ayush[module_affected_83876]','$Ayush[priority_name]','$Ayush[source_name]','$Ayush[new_level_83876]','$Ayush[plan_type_83876]','$Ayush[updated_at]','$Ayush[created_at]')";
$res=mysql_query($insstr,$con);
  echo '<script> console.log("Record inserted");</script>';
}


}
  }
  
  date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        
 $insstr1="insert into agents_on_hold_count values('$dat')";
$res1=mysql_query($insstr1,$con);
 
  curl_close ($ch);
?>