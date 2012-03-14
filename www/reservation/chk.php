<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>check box</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="850" border="0">
    <tr>
      <td><div align="center"><strong>Item</strong></div></td>
      <td><div align="left"><strong>Quantity</strong></div></td>
    </tr>
    <tr>
      <td width="196"><label>
        <input name="check1" type="checkbox" value="c1">
      Noodles(5.00)</label></td>
      <td width="638"><input type="text" name="txt1"></td>
    </tr>
    <tr>
      <td><input name="check2" type="checkbox" id="check2" value="c2">
        Sardines(10.00)</td>
      <td><input type="text" name="txt2"></td>
    </tr>
    <tr>
      <td><input name="check3" type="checkbox" value="c3">
        Toothpaste(20.0)</td>
      <td><input type="text" name="txt3"></td>
    </tr>
    <tr>
      <td height="36"><label>
        <div align="center">
          <input type="submit" name="OK" id="OK" value="Submit">
        </div>
      </label></td>
      <td><?php
  
  $chk1=$_POST['check1'];
  $chk2=$_POST['check2'];
  $chk3=$_POST['check3'];
  
  
  
  $q1=$_POST['txt1'];
  $q2=$_POST['txt2'];
  $q3=$_POST['txt3'];
  
   
   $a=0;
   
  if ($chk1=='c1')
  
  {
	  echo "You select noodles: 5.00<br>";
	  $h=$q1*5;
	  $a=$a+$h;
  }
  
  if ($chk2=='c2')
  
  {
	  echo "You select Sardines: 10.00<br>";
	  $g=$q1*10;
	  $a=$a+$g;
  }
  
  if ($chk3=='c3')
  
  {
	  echo "You select Toothpaste: 20.00<br>";
	  $e=$q3*20;
	  $a=$a+$e;
  }
  echo"<br>Total is: $a<br>";

?></td>
    </tr>
  </table>
</form>
</body>
</html>