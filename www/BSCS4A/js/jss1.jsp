function validateForm()
{
    var u=document.forms["form1"]["txtuser"].value;
    if (u==null || u=="")
      {
      alert("Username must be filled out");
      return false;
      }
  
    var p=document.forms["form1"]["txtpass"].value;
    if (p==null || p=="")
      {
      alert("Password must be filled out");
      return false;
      }

    var z=document.forms["form1"]["txtre"].value;
    if (z==null || z=="")
      {
      alert("Re-Password must be filled out");
      return false;
      }

    var a=document.forms["form1"]["txtlname"].value;
    if (a==null || a=="")
      {
      alert("Lastname must be filled out");
      return false;
      }

    var b=document.forms["form1"]["txtfname"].value;
    if (b==null || b=="")
      {
      alert("Firstname must be filled out");
      return false;
      }
}
