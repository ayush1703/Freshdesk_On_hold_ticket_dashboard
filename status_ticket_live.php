<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Start Visual Website Optimizer Asynchronous Code -->
<script type='text/javascript'>
var _vwo_code=(function(){
var account_id=58403,
settings_tolerance=2000,
library_tolerance=2500,
use_existing_jquery=false,
// DO NOT EDIT BELOW THIS LINE
f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
</script>
<!-- End Visual Website Optimizer Asynchronous Code -->
<script type="text/javascript">
function display_table(id) {
$(id).show();
}
function display_fulltable(){
$('#agent1').show();
$('#agent2').show();
$('#agent3').show();
$('#agent4').show();
$('#agent5').show();
$('#agent6').show();
$('#agent7').show();
$('#agent8').show();
$('#agent9').show();
$('#closeAll').show();
}

function hide_fulltable(){
$('#agent1').hide();
$('#agent2').hide();
$('#agent3').hide();
$('#agent4').hide();
$('#agent5').hide();
$('#agent6').hide();
$('#agent7').hide();
$('#agent8').hide();
$('#agent9').hide();
$('#closeAll').hide();
}


function hide_table(id) {
$(id).hide();
}
</script>
<script type="text/javascript">
$( document ).ready(function() {
  $("#row1").click(function (){ 

       $('#agent1').show(); 
       $('html, body').animate({
        scrollTop: $("#agent1").offset().top
    }, 2000); console.log('if1');
    }  
    

);$("#row2").click(function (){ 

       $('#agent2').show(); 
       $('html, body').animate({
        scrollTop: $("#agent2").offset().top
    }, 2000); console.log('if2');
    }  
    );
    $("#row3").click(function (){ 

       $('#agent3').show(); 
       $('html, body').animate({
        scrollTop: $("#agent3").offset().top
    }, 2000); console.log('if3');
    }  
    );
    $("#row4").click(function (){ 

       $('#agent4').show(); 
       $('html, body').animate({
        scrollTop: $("#agent4").offset().top
    }, 2000); console.log('if4');
    }  
    );
    $("#row5").click(function (){ 

       $('#agent5').show(); 
       $('html, body').animate({
        scrollTop: $("#agent5").offset().top
    }, 2000); console.log('if5');
    }  
    );
    $("#row6").click(function (){ 

       $('#agent6').show(); 
       $('html, body').animate({
        scrollTop: $("#agent6").offset().top
    }, 2000); console.log('if6');
    }  
    );
    $("#row7").click(function (){ 

       $('#agent7').show(); 
       $('html, body').animate({
        scrollTop: $("#agent7").offset().top
    }, 2000); console.log('if7');
    }  
    );
    $("#row8").click(function (){ 

       $('#agent8').show(); 
       $('html, body').animate({
        scrollTop: $("#agent8").offset().top
    }, 2000); console.log('if8');
    }  
    );
    $("#row9").click(function (){ 

       $('#agent9').show(); 
       $('html, body').animate({
        scrollTop: $("#agent9").offset().top
    }, 2000); console.log('if5');
    }  
    );
    $("#row10").click(function (){ 

       display_fulltable(); 
       $('html, body').animate({
        scrollTop: $("#agent1").offset().top
    }, 2000); console.log('if10');
    }  
    );


});
</script>
<style>{font-family: Helvetica Neue, Arial, sans-serif; }

body { background-image: linear-gradient(#aaa 25%, rgba(0, 0, 0, 0.42));}

h1, table { text-align: center; }

table {border-collapse: collapse;  width: 70%; margin: 0 auto 1rem;}

#agent_count > tbody> tr > td{padding: 1rem; font-size: 1.3rem; }

th , td, table>caption { padding: 0rem; font-size: -1.7rem; }
#date { padding: 0rem; font-size: 1.3rem; }

tr {background: hsl(50, 50%, 80%); }

tr, td { transition: .4s ease-in; } 

tr:first-child {background: hsla(12, 100%, 40%, 0.5); }

tr:nth-child(even) { background: hsla(50, 50%, 80%, 0.7); }

td:empty {background: hsla(50, 25%, 60%, 0.7); }

//#agent_count > tbody> tr:hover:not(#firstrow), tr:hover td:empty {background: #ffffff; pointer-events: visible;}
//#agent_count > tbody> tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 700; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}
</style>
</head>

<body>



<table style="width:90%" id="agent_count">
  <tr>
    <td>Engineer Name</td>
    <td>Open</td> 
    <td>Pending</td>
<td>Waiting on Customer</td>
    <td>Waiting on Developer</td> 
    <td>Waiting on Sales</td>
<td>Waiting on Engineer</td>
  </tr><?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Ashish_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =6";
$Ashish_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =8";
$Ashish_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =9";
$Ashish_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =10";
$Ashish_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =2";
$Ashish_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ashish Khanna' AND  status_index =3";

$rt0_woc=mysql_query($Ashish_str1,$con);
$Ashish_woc = mysql_fetch_row($rt0_woc);
$rt0_wod=mysql_query($Ashish_str2,$con);
$Ashish_wod = mysql_fetch_row($rt0_wod);
$rt0_wos=mysql_query($Ashish_str3,$con);
$Ashish_wos = mysql_fetch_row($rt0_wos);
$rt0_woe=mysql_query($Ashish_str4,$con);
$Ashish_woe = mysql_fetch_row($rt0_woe);
$rt0_open=mysql_query($Ashish_str5,$con);
$Ashish_open = mysql_fetch_row($rt0_open);
$rt0_pending=mysql_query($Ashish_str6,$con);
$Ashish_pending = mysql_fetch_row($rt0_pending);



?>  <tr id="row1">
    <td> <a href="#one" onClick="display_table('#agent1');">Ashish</a></td>
    <td><?php echo $Ashish_open[0]; ?></td> 
    <td><?php echo $Ashish_pending[0] ?></td>
<td><?php echo $Ashish_woc[0]; ?></td>
    <td><?php echo $Ashish_wod[0]; ?></td> 
    <td><?php echo $Ashish_wos[0]; ?></td>
<td><?php echo $Ashish_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Ayush_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =6";
$Ayush_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =8";
$Ayush_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =9";
$Ayush_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =10";
$Ayush_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =2";
$Ayush_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Ayush Jain' AND  status_index =3";

$rt1_woc=mysql_query($Ayush_str1,$con);
$Ayush_woc = mysql_fetch_row($rt1_woc);
$rt1_wod=mysql_query($Ayush_str2,$con);
$Ayush_wod = mysql_fetch_row($rt1_wod);
$rt1_wos=mysql_query($Ayush_str3,$con);
$Ayush_wos = mysql_fetch_row($rt1_wos);
$rt1_woe=mysql_query($Ayush_str4,$con);
$Ayush_woe = mysql_fetch_row($rt1_woe);
$rt1_open=mysql_query($Ayush_str5,$con);
$Ayush_open = mysql_fetch_row($rt1_open);
$rt1_pending=mysql_query($Ayush_str6,$con);
$Ayush_pending = mysql_fetch_row($rt1_pending);



?>  <tr id="row2">
    <td> <a href="#two" onClick="display_table('#agent2');" >Ayush</a></td>
    <td><?php echo $Ayush_open[0]; ?></td> 
    <td><?php echo $Ayush_pending[0] ?></td>
<td><?php echo $Ayush_woc[0]; ?></td>
    <td><?php echo $Ayush_wod[0]; ?></td> 
    <td><?php echo $Ayush_wos[0]; ?></td>
<td><?php echo $Ayush_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Benny_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =6";
$Benny_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =8";
$Benny_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =9";
$Benny_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =10";
$Benny_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =2";
$Benny_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Benny Thomas' AND  status_index =3";

$rt2_woc=mysql_query($Benny_str1,$con);
$Benny_woc = mysql_fetch_row($rt2_woc);
$rt2_wod=mysql_query($Benny_str2,$con);
$Benny_wod = mysql_fetch_row($rt2_wod);
$rt2_wos=mysql_query($Benny_str3,$con);
$Benny_wos = mysql_fetch_row($rt2_wos);
$rt2_woe=mysql_query($Benny_str4,$con);
$Benny_woe = mysql_fetch_row($rt2_woe);
$rt2_open=mysql_query($Benny_str5,$con);
$Benny_open = mysql_fetch_row($rt2_open);
$rt2_pending=mysql_query($Benny_str6,$con);
$Benny_pending = mysql_fetch_row($rt2_pending);



?>  <tr id="row3">
    <td> <a href="#three" onClick="display_table('#agent3');" >Benny</a></td>
    <td><?php echo $Benny_open[0]; ?></td> 
    <td><?php echo $Benny_pending[0] ?></td>
<td><?php echo $Benny_woc[0]; ?></td>
    <td><?php echo $Benny_wod[0]; ?></td> 
    <td><?php echo $Benny_wos[0]; ?></td>
<td><?php echo $Benny_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Jasjeet_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =6";
$Jasjeet_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =8";
$Jasjeet_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =9";
$Jasjeet_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =10";
$Jasjeet_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =2";
$Jasjeet_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Jasjeet Singh' AND  status_index =3";

$rt3_woc=mysql_query($Jasjeet_str1,$con);
$Jasjeet_woc = mysql_fetch_row($rt3_woc);
$rt3_wod=mysql_query($Jasjeet_str2,$con);
$Jasjeet_wod = mysql_fetch_row($rt3_wod);
$rt3_wos=mysql_query($Jasjeet_str3,$con);
$Jasjeet_wos = mysql_fetch_row($rt3_wos);
$rt3_woe=mysql_query($Jasjeet_str4,$con);
$Jasjeet_woe = mysql_fetch_row($rt3_woe);
$rt3_open=mysql_query($Jasjeet_str5,$con);
$Jasjeet_open = mysql_fetch_row($rt3_open);
$rt3_pending=mysql_query($Jasjeet_str6,$con);
$Jasjeet_pending = mysql_fetch_row($rt3_pending);



?>  <tr id="row4">
    <td> <a href="#four" onClick="display_table('#agent4');" >Jasjeet</a></td>
    <td><?php echo $Jasjeet_open[0]; ?></td> 
    <td><?php echo $Jasjeet_pending[0] ?></td>
<td><?php echo $Jasjeet_woc[0]; ?></td>
    <td><?php echo $Jasjeet_wod[0]; ?></td> 
    <td><?php echo $Jasjeet_wos[0]; ?></td>
<td><?php echo $Jasjeet_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Nidhi_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =6";
$Nidhi_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =8";
$Nidhi_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =9";
$Nidhi_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =10";
$Nidhi_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =2";
$Nidhi_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Nidhi Gupta' AND  status_index =3";

$rt4_woc=mysql_query($Nidhi_str1,$con);
$Nidhi_woc = mysql_fetch_row($rt4_woc);
$rt4_wod=mysql_query($Nidhi_str2,$con);
$Nidhi_wod = mysql_fetch_row($rt4_wod);
$rt4_wos=mysql_query($Nidhi_str3,$con);
$Nidhi_wos = mysql_fetch_row($rt4_wos);
$rt4_woe=mysql_query($Nidhi_str4,$con);
$Nidhi_woe = mysql_fetch_row($rt4_woe);
$rt4_open=mysql_query($Nidhi_str5,$con);
$Nidhi_open = mysql_fetch_row($rt4_open);
$rt4_pending=mysql_query($Nidhi_str6,$con);
$Nidhi_pending = mysql_fetch_row($rt4_pending);



?>  <tr id="row5">
    <td> <a href="#five" onClick="display_table('#agent5');" >Nidhi</a></td>
    <td><?php echo $Nidhi_open[0]; ?></td> 
    <td><?php echo $Nidhi_pending[0] ?></td>
<td><?php echo $Nidhi_woc[0]; ?></td>
    <td><?php echo $Nidhi_wod[0]; ?></td> 
    <td><?php echo $Nidhi_wos[0]; ?></td>
<td><?php echo $Nidhi_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Rohit_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =6";
$Rohit_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =8";
$Rohit_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =9";
$Rohit_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =10";
$Rohit_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =2";
$Rohit_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Rohit Gupta' AND  status_index =3";

$rt5_woc=mysql_query($Rohit_str1,$con);
$Rohit_woc = mysql_fetch_row($rt5_woc);
$rt5_wod=mysql_query($Rohit_str2,$con);
$Rohit_wod = mysql_fetch_row($rt5_wod);
$rt5_wos=mysql_query($Rohit_str3,$con);
$Rohit_wos = mysql_fetch_row($rt5_wos);
$rt5_woe=mysql_query($Rohit_str4,$con);
$Rohit_woe = mysql_fetch_row($rt5_woe);
$rt5_open=mysql_query($Rohit_str5,$con);
$Rohit_open = mysql_fetch_row($rt5_open);
$rt5_pending=mysql_query($Rohit_str6,$con);
$Rohit_pending = mysql_fetch_row($rt5_pending);



?>  <tr id="row6">
    <td> <a href="#six" onClick="display_table('#agent6');" >Rohit</a></td>
    <td><?php echo $Rohit_open[0]; ?></td> 
    <td><?php echo $Rohit_pending[0] ?></td>
<td><?php echo $Rohit_woc[0]; ?></td>
    <td><?php echo $Rohit_wod[0]; ?></td> 
    <td><?php echo $Rohit_wos[0]; ?></td>
<td><?php echo $Rohit_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Utkarsh_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =6";
$Utkarsh_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =8";
$Utkarsh_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =9";
$Utkarsh_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =10";
$Utkarsh_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =2";
$Utkarsh_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Utkarsh Saran' AND  status_index =3";

$rt6_woc=mysql_query($Utkarsh_str1,$con);
$Utkarsh_woc = mysql_fetch_row($rt6_woc);
$rt6_wod=mysql_query($Utkarsh_str2,$con);
$Utkarsh_wod = mysql_fetch_row($rt6_wod);
$rt6_wos=mysql_query($Utkarsh_str3,$con);
$Utkarsh_wos = mysql_fetch_row($rt6_wos);
$rt6_woe=mysql_query($Utkarsh_str4,$con);
$Utkarsh_woe = mysql_fetch_row($rt6_woe);
$rt6_open=mysql_query($Utkarsh_str5,$con);
$Utkarsh_open = mysql_fetch_row($rt6_open);
$rt6_pending=mysql_query($Utkarsh_str6,$con);
$Utkarsh_pending = mysql_fetch_row($rt6_pending);



?>  <tr id="row7">
    <td> <a href="#seven" onClick="display_table('#agent7');" >Utkarsh</a></td>
    <td><?php echo $Utkarsh_open[0]; ?></td> 
    <td><?php echo $Utkarsh_pending[0] ?></td>
<td><?php echo $Utkarsh_woc[0]; ?></td>
    <td><?php echo $Utkarsh_wod[0]; ?></td> 
    <td><?php echo $Utkarsh_wos[0]; ?></td>
<td><?php echo $Utkarsh_woe[0]; ?></td>
  </tr>
  <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Venus_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =6";
$Venus_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =8";
$Venus_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =9";
$Venus_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =10";
$Venus_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =2";
$Venus_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'Venus Kaur' AND  status_index =3";

$rt7_woc=mysql_query($Venus_str1,$con);
$Venus_woc = mysql_fetch_row($rt7_woc);
$rt7_wod=mysql_query($Venus_str2,$con);
$Venus_wod = mysql_fetch_row($rt7_wod);
$rt7_wos=mysql_query($Venus_str3,$con);
$Venus_wos = mysql_fetch_row($rt7_wos);
$rt7_woe=mysql_query($Venus_str4,$con);
$Venus_woe = mysql_fetch_row($rt7_woe);
$rt7_open=mysql_query($Venus_str5,$con);
$Venus_open = mysql_fetch_row($rt7_open);
$rt7_pending=mysql_query($Venus_str6,$con);
$Venus_pending = mysql_fetch_row($rt7_pending);



?>  <tr id="row8">
    <td> <a href="#eight" onClick="display_table('#agent8');" >Venus</a></td>
    <td><?php echo $Venus_open[0]; ?></td> 
    <td><?php echo $Venus_pending[0] ?></td>
<td><?php echo $Venus_woc[0]; ?></td>
    <td><?php echo $Venus_wod[0]; ?></td> 
    <td><?php echo $Venus_wos[0]; ?></td>
<td><?php echo $Venus_woe[0]; ?></td>
  </tr>
  
   <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Admin_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =6";
$Admin_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =8";
$Admin_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =9";
$Admin_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =10";
$Admin_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =2";
$Admin_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  agent_name =  'VWO Admin' AND  status_index =3";

$rt8_woc=mysql_query($Admin_str1,$con);
$Admin_woc = mysql_fetch_row($rt8_woc);
$rt8_wod=mysql_query($Admin_str2,$con);
$Admin_wod = mysql_fetch_row($rt8_wod);
$rt8_wos=mysql_query($Admin_str3,$con);
$Admin_wos = mysql_fetch_row($rt8_wos);
$rt8_woe=mysql_query($Admin_str4,$con);
$Admin_woe = mysql_fetch_row($rt8_woe);
$rt8_open=mysql_query($Admin_str5,$con);
$Admin_open = mysql_fetch_row($rt8_open);
$rt8_pending=mysql_query($Admin_str6,$con);
$Admin_pending = mysql_fetch_row($rt8_pending);



?>  <tr id="row9">
    <td> <a href="#nine" onClick="display_table('#agent9')" >VWO Admin</a></td>
    <td><?php echo $Admin_open[0]; ?></td> 
    <td><?php echo $Admin_pending[0] ?></td>
<td><?php echo $Admin_woc[0]; ?></td>
    <td><?php echo $Admin_wod[0]; ?></td> 
    <td><?php echo $Admin_wos[0]; ?></td>
<td><?php echo $Admin_woe[0]; ?></td>
  </tr>
     <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Overall_str1="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =6";
$Overall_str2="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =8";
$Overall_str3="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =9";
$Overall_str4="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =10";
$Overall_str5="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =2";
$Overall_str6="SELECT count(*) FROM  onhold_ticket_detail WHERE  status_index =3";

$rt9_woc=mysql_query($Overall_str1,$con);
$Overall_woc = mysql_fetch_row($rt9_woc);
$rt9_wod=mysql_query($Overall_str2,$con);
$Overall_wod = mysql_fetch_row($rt9_wod);
$rt9_wos=mysql_query($Overall_str3,$con);
$Overall_wos = mysql_fetch_row($rt9_wos);
$rt9_woe=mysql_query($Overall_str4,$con);
$Overall_woe = mysql_fetch_row($rt9_woe);
$rt9_open=mysql_query($Overall_str5,$con);
$Overall_open = mysql_fetch_row($rt9_open);
$rt9_pending=mysql_query($Overall_str6,$con);
$Overall_pending = mysql_fetch_row($rt9_pending);



?>  <tr id="row10">
    <td> <a href="#one" onClick="display_fulltable();" >Overall</a></td>
    <td><?php echo $Overall_open[0]; ?></td> 
    <td><?php echo $Overall_pending[0] ?></td>
<td><?php echo $Overall_woc[0]; ?></td>
    <td><?php echo $Overall_wod[0]; ?></td> 
    <td><?php echo $Overall_wos[0]; ?></td>
<td><?php echo $Overall_woe[0]; ?></td>
  </tr>
 
</table>
<div id="date" style="float: right;">Last Update at :
 <?php
  $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Overall_str_time="SELECT * FROM  agents_on_hold_count";
$last_update=mysql_query($Overall_str_time,$con);
$last_update_latest=mysql_fetch_array($last_update);
echo $last_update_latest['last_update'];
?></div>
 <a href="#" onClick="hide_fulltable();" style="display:none"id="closeAll">Close All</a> 
  
<section id="one">
<table style="width:100%; display:none" id="agent1"><caption>Ashish</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent1');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Ashish_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Ashish Khanna'";
$Ashish_result=mysql_query($Ashish_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Ashish_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="two">
<table style="width:100%; display:none" id="agent2"><caption>Ayush</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent2');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Ayush_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Ayush Jain'";
$Ayush_result=mysql_query($Ayush_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Ayush_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="three">
<table style="width:100%; display:none" id="agent3"><caption>Benny</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent3');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Benny_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Benny Thomas'";
$Benny_result=mysql_query($Benny_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Benny_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";               }
?>
</table></section>
<section id="four">
<table style="width:100%; display:none" id="agent4"><caption>Jasjeet</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent4');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Jasjeet_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Jasjeet Singh'";
$Jasjeet_result=mysql_query($Jasjeet_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);
while ($row = mysql_fetch_assoc($Jasjeet_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="five">
<table style="width:100%; display:none" id="agent5"><caption>Nidhi</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent5');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Nidhi_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Nidhi Gupta'";
$Nidhi_result=mysql_query($Nidhi_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Nidhi_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="six">
<table style="width:100%; display:none" id="agent6"><caption>Rohit</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent6');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Rohit_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Rohit Gupta'";
$Rohit_result=mysql_query($Rohit_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Rohit_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="seven">
<table style="width:100%; display:none" id="agent7"><caption>Utkarsh</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent7');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Utkarsh_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Utkarsh Saran'";
$Utkarsh_result=mysql_query($Utkarsh_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Utkarsh_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="eight">
<table style="width:100%; display:none" id="agent8"><caption>Venus</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent8');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Venus_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'Venus Kaur'";
$Venus_result=mysql_query($Venus_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Venus_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>
<section id="nine">
<table style="width:100%; display:none" id="agent9"><caption>VWO Admin</caption><br>
  <tr><td>Ticket ID</td><td>Status</td><td>Module</td><td>Priority</td><td>Source</td> <td>Level</td><td>Plan</td><td>Last Update</td><td>Created Since</td></tr>
<tr><td><a href="#" onclick="hide_table('#agent9');"> Close</a></td></tr>
    <?php
    $con=mysql_connect("localhost","__","__")or die("sorry your database is not connected to this web page!");
$db=mysql_select_db("ayushj_freshdesk_onhold",$con);
$Admin_query="SELECT `Ticket_id`,`status`,`module`,`priority`,`source`,`level`,`plan`,`last_update`,`created_since` FROM `onhold_ticket_detail` WHERE `agent_name` = 'VWO Admin'";
$Admin_result=mysql_query($Admin_query,$con);
date_default_timezone_set('Asia/Calcutta');
        $dat=date("Y-m-d H:i:s",time());
        $date1=date_create($dat);

while ($row = mysql_fetch_assoc($Admin_result)) {
$date2=date_create($row['last_update']);
$diff_update=date_diff($date1,$date2,true);

$date3=date_create($row['created_since']);
$diff_create=date_diff($date1,$date3,true);
                   echo "<tr>";
                   echo "<td><a href='http://kb.visualwebsiteoptimizer.com/helpdesk/tickets/".$row['Ticket_id']."' target='_blank'>".$row['Ticket_id']."</a></td>";
                   echo "<td>".$row['status']."</td>";
                   echo "<td>".$row['module']."</td>";
                   echo "<td>".$row['priority']."</td>";
                   echo "<td>".$row['source']."</td>";
                   echo "<td>".$row['level']."</td>";
                   echo "<td>".$row['plan']."</td>";
                   echo "<td>".$diff_update->format('%a days %h hours')."</td>";
                   echo "<td>".$diff_create->format('%a days %h hours')."</td>";
                   echo "</tr>";
               }
?>
</table></section>


</body>
<html>