<html>

<head>

<title></title>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<script language="javascript">







  var now = new Date();







  var month = now.getMonth() + 1;







  var date = now.getDate();







  var year = now.getYear();















        msgs = new Array







 	msgs[1] = "recovery"







        msgs[2] = "enlight"







        msgs[3] = "happiness"







        msgs[4] = "otherbar"







        msgs[5] = "healhty"







        msgs[6] = "lawyer"







        msgs[7] = "ideamix"







        msgs[8] = "attorney"







        msgs[9] = "football"







        msgs[10] = "baseball"







        msgs[11] = "empower"







        msgs[12] = "hello"







        msgs[13] = "joyful"







        msgs[14] = "friendship"







        msgs[15] = "gratitude"







        msgs[16] = "helpful"







        msgs[17] = "powerful"







        msgs[18] = "glee"







        msgs[19] = "enjoyment"







        msgs[20] = "bliss"







        msgs[21] = "ecstasy"







        msgs[22] = "elation"







        msgs[23] = "thrill"







        msgs[24] = "love"







        msgs[25] = "family"







        msgs[26] = "delight"







        msgs[27] = "watermelon"







        msgs[28] = "icecream"







        msgs[29] = "goals"







        msgs[30] = "freedom"







        msgs[31] = "forgive"















var msg = msgs[date];















function submit_form()







{







  vcode = document.form1.vcode.value;







  code = document.form1.code.value;







  name = document.form1.name.value;







  







  if(code == "" || code==null)







  {







   alert("Please Enter the Code");







   return false;







  }







  else if(vcode != code)







  {







   alert("Please Enter the Correct Verification Code");







   return false;







  }







  else if(name =="" || name==null)







  {







   alert("Please Enter Your Name");







   return false;







  } 







}







function assignVcode()







{







 document.form1.vcode.value = msg;







}







</script>

</head>



<body bgcolor="#FFFFFF" onLoad="assignVcode();" style="margin:0px; padding:10px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px;" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr valign="top"> 

    <td> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

      <form name="form1" method="post" action="contact01.php">
        <input type="hidden" name="title" value="Contact Bill" />

   

        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="26%" height="26"> 
              <blockquote> 
                <p><font color="#000000" size="4"><b><font face="Trebuchet MS"> 
                  Name:</font></b></font></p>
              </blockquote>
            </td>
            <td width="74%" height="26"><font size="2" face="Trebuchet MS"> 
              <input type="text" name="name">
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote> 
                <p><font color="#000000" size="4"><b><font face="Trebuchet MS">E-mail:</font></b></font></p>
              </blockquote>
            </td>
            <td width="74%"><font size="2" face="Trebuchet MS"> 
              <input type="text" name="email">
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote> 
                <p><font color="#000000" size="4"><b><font face="Trebuchet MS">Message</font></b></font></p>
              </blockquote>
            </td>
            <td width="74%"><font size="2" face="Trebuchet MS"> 
              <textarea name="comments" cols="50" rows="10"></textarea>
              <br>
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote>&nbsp;</blockquote>
              <font color="#000000" size="4"><b><font face="Trebuchet MS"> </font></b></font></td>
            <td width="74%"><font size="4" face="Trebuchet MS" color="#000000"> 
              <b><br>
              Code: </b><br>
              <input name="vcode" type="text" id="vcode" style="border:1px solid #ffffff; height:17px; color:#990000; font-weight:bold; width:100px;" value=" " readonly="true" />
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote>&nbsp;</blockquote>
              <font color="#000000" size="4"><b></b></font></td>
            <td width="74%"> <font color="#000000" size="4"><b><font face="Trebuchet MS"><br>
              Enter the Code Above </font></b><br>
              <input name="code" type="text" id="code" />
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote>&nbsp;</blockquote>
              <font color="#000000" size="4"><b></b></font></td>
            <td width="74%"><font size="4" face="Trebuchet MS" color="#000000"> 
              <b><br>
              Enter Your Name Again</b><br>
              <input name="name" type="text" id="name" />
              </font></td>
          </tr>
          <tr> 
            <td width="26%"> 
              <blockquote>&nbsp;</blockquote>
              <font color="#000000" size="4"><b></b></font></td>
            <td width="74%"><font size="2" face="Trebuchet MS"> 
              <input type="submit" name="Submit" value="Submit" onClick="return submit_form();" />
              </font></td>
          </tr>
        </table>



      </form>



</td>

  </tr>

</table>



<blockquote>
  <p><font face="Trebuchet MS" size="4">&lt;html&gt;<br>
    &lt;head&gt;<br>
    &lt;Educator.com - #1 Trusted e-Learning Service Site - Start Today&gt;<br>
    &lt;/head&gt;</font></p>
  <p><font face="Trebuchet MS" size="4"><br>
    <font color="#000000">&lt;body&gt;</font><br>
    &lt;<b><font color="red">form</font></b> method="<b><font color="red">POST</font></b>" 
    name="contact_form" action="<font color="red">contact01.php</font>" &gt;<br>
    &lt;table width="100%" border="0" cellspacing="0" cellpadding="5" &gt;<br>
    &lt;TR&gt; <br>
    &lt;td width="20%" height="18"&gt;<br>
    Name:&lt; input type="text" <font color="red"><b>name</b></font>="name" &gt;</font></p>
</blockquote>
<p>&nbsp;</p>
<p><font size="4"><br>
  &lt;/body&gt;</font><br>
  <font size="4">&lt;/html&gt;</font> <br>
</p>
</body>

</html>

