
function validateLogin()
{
    var x1=document.forms["frmlogin"]["user_name"].value;
    var x2=document.forms["frmlogin"]["password"].value;
    var atpos=x1.indexOf("@");
    var dotpos=x1.lastIndexOf(".");
    if((x1==null || x1=="") && (x2==null || x2=="") )
    {
        alert("Username and password must be filled out.");
        return false;
    }
    else if((x1==null || x1=="")&& (x2!=null || x2!=""))
    {
        alert("Username must be filled out.");
        return false;
    }
    else if ((x1!=null || x1!="") && (x2==null || x2==""))
    {
        alert("Password must be filled out");
        return false;
    }
    else
    {
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x1.length)
        {
            alert("Username must be a valid e-mail address");
            return false;
        }
    }
}

function validateSignup()
{
    var x1=document.forms["frmsignup"]["first_name"].value;
    var x2=document.forms["frmsignup"]["last_name"].value;
    var x3=document.forms["frmsignup"]["user_name"].value;
    var x4=document.forms["frmsignup"]["password"].value;
    var x5=document.forms["frmsignup"]["gender"].value;
    var x6=document.forms["frmsignup"]["phone"].value;
    if(x1==null)
    {
        alert("Please type your First Name");
        return false;
    }
    else if(x2==null)
    {
        alert("Please type your Last Name");
        return false;
    }
    else if(x3==null)
    {
        alert("Please insert a valid E-mail");
        return false;
    }
    else if(x4==null)
    {
        alert("Please insert your own Password");
        return false;
    }
  /*  else if(x5==null)
    {
        alert("Please set the Gender");
        return false;
    }
  */    else{
        alert("xxxxxxxx");
        return false;
    }
}


function currentTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('time1').innerHTML= h+":"+m+":"+s;
countTime();
setTimeout(function(){alert("Time Out")},1000*30);
}

function countTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('time2').innerHTML= h+":"+m+":"+s;
t=setTimeout(function(){countTime()},1000);
}


function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}

