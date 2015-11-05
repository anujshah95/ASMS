<!DOCTYPE html>
<html>
<head>
<script>
function Show_Auto_Gold(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getrecord.php?q="+str,true);
  xmlhttp.send();

  var autogold="<br/><h3>Search By Products </h3>\
      <h3><input type=radio name=radio value=head_light onClick=Auto_head_light(this.value) /> Head Light <br/>\
  <input type=radio name=radio value=side_light onClick=Auto_side_light(this.value) /> \
    Side Light</h3>";

document.getElementById("side").innerHTML=autogold;
}

function Auto_head_light(str)
   {
      if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getrecord.php?c="+str,true);
  xmlhttp.send();
         
    }
    function Auto_side_light(str)
   {
      if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getrecord.php?c="+str,true);
  xmlhttp.send();
         
    }
</script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div id="header">
    <h1>Auto Spare Parts</h1>
</div>
 <div id="content">
    <div id="sidebar">
    <h2>Search By Manfacture</h2><br/>
<form>
  <h3><input type="radio"  name="radio" onClick="Show_Auto_Gold(this.value);" value="1"><label>Auto Gold</label><br/>
  <input type="radio" name="radio" onClick="Show_Zip_Filter(this.value)" value="2"><label>Zip Filter</label></h3>
</form>
<div id="side"></div>
</div>
<div id="main-content"> 

<div id="txtHint"><b>Products</b></div>
</div>
</body>
</html>
