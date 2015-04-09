<?php
$count=0;
$mark=0;
if(!empty($_POST['quiz1']))
{
    $q1=$_POST['quiz1'];
    $count++;
}    
else
{
    $q1=0;
}

if(!empty($_POST['quiz2']))
{
    $q2=$_POST['quiz2'];
    $count++;
}    
else
{
    $q2=0;
} 

if(!empty($_POST['quiz3']))
{
    $q3=$_POST['quiz3'];
    $count++;
}    
else
{
    $q3=0;
}

if(!empty($_POST['quiz4']))
{
    $q4=$_POST['quiz4'];
    $count++;
}    
else
{
    $q4=0;
}

if(!empty($_POST['quiz5']))
{
    $q5=$_POST['quiz5'];
    $count++;
}    
else
{
    $q5=0;
}

if(!empty($_POST['quiz6']))
{
    $q6=$_POST['quiz6'];
    $count++;
}    
else
{
    $q6=0;
}

if(!empty($_POST['quiz7']))
{
    $q7=$_POST['quiz7'];
    $count++;
}    
else
{
    $q7=0;
}

if(!empty($_POST['quiz8']))
{
    $q8=$_POST['quiz8'];
    $count++;
}    
else
{
    $q8=0;
}

if(!empty($_POST['quiz9']))
{
    $q9=$_POST['quiz9'];
    $count++;
}    
else
{
    $q9=0;
}

if(!empty($_POST['quiz10']))
{
    $q10=$_POST['quiz10'];
    $count++;
}    
else
{
    $q10=0;
}

if(!empty($_POST['quiz11']))
{
    $q11=$_POST['quiz11'];
    $count++;
}    
else
{
    $q11=0;
}

if(!empty($_POST['quiz12']))
{
    $q12=$_POST['quiz12'];
    $count++;
}    
else
{
    $q12=0;
}

if(!empty($_POST['quiz13']))
{
    $q13=$_POST['quiz13'];
    $count++;
}    
else
{
    $q13=0;
}


if(!empty($_POST['quiz14']))
{
    $q14=$_POST['quiz14'];
    $count++;
}    
else
{
    $q14=0;
}

if(!empty($_POST['quiz15']))
{
    $q15=$_POST['quiz15'];
    $count++;
}    
else
{
    $q15=0;
}

if(!empty($_POST['quiz16']))
{
    $q16=$_POST['quiz16'];
    $count++;
}    
else
{
    $q16=0;
}

if(!empty($_POST['quiz17']))
{
    $q17=$_POST['quiz17'];
    $count++;
}    
else
{
    $q17=0;
}

if(!empty($_POST['quiz18']))
{
    $q18=$_POST['quiz18'];
    $count++;
}    
else
{
    $q18=0;
}

if(!empty($_POST['quiz19']))
{
    $q19=$_POST['quiz19'];
    $count++;
}    
else
{
    $q19=0;
}

if(!empty($_POST['quiz20']))
{
    $q20=$_POST['quiz20'];
    $count++;
}    
else
{
    $q20=0;
}


if($q1==1) $mark++;
if($q2==3) $mark++;
if($q3==2) $mark++;
if($q4==3) $mark++;
if($q5==1) $mark++;
if($q6==1) $mark++;
if($q7==3) $mark++;
if($q8==2) $mark++;
if($q9==3) $mark++;
if($q10==1) $mark++;
if($q11==1) $mark++;
if($q12==3) $mark++;
if($q13==2) $mark++;
if($q14==3) $mark++;
if($q15==1) $mark++;
if($q16==1) $mark++;
if($q17==3) $mark++;
if($q18==2) $mark++;
if($q19==3) $mark++;
if($q20==1) $mark++;


echo "Attempted:".$count."<br>"."Marks obtained:".$mark;
?>
