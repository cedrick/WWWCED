function validateForm3()
{
    var x=document.forms["form3"]["txtuser"].value;
    if (x==null || x=="")
      {
      alert("Username must be filled out");
      return false;
      }
  
    var y=document.forms["form3"]["txtpass"].value;
    if (y==null || y=="")
      {
      alert("Password must be filled out");
      return false;
      }

    var z=document.forms["form3"]["txtre"].value;
    if (z==null || z=="")
      {
      alert("Re-Password must be filled out");
      return false;
      }

    var a=document.forms["form3"]["txtlname"].value;
    if (a==null || a=="")
      {
      alert("Lastname must be filled out");
      return false;
      }

    var b=document.forms["form3"]["txtfname"].value;
    if (b==null || b=="")
      {
      alert("Firstname must be filled out");
      return false;
      }
}

function validateForm2()
{
    var x=document.forms["form2"]["txtu"].value;
    if (x==null || x=="")
      {
      alert("Username must be filled out");
      return false;
      }
  
    var y=document.forms["form2"]["txtp"].value;
    if (y==null || y=="")
      {
      alert("Password must be filled out");
      return false;
      }
}


function show_alert()
{
alert("I am an alert box!");
}