<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

    <div class="navbar">


      <div class="navbar-right">
        <a href="#">Home</a>
        <a href="#login">Register</a>
        <a href="#login">Login</a>
        <a href="#abouthead">About</a>
        <a href="#contacthead">Contact</a>

      </div>

    </div>
    <button id="a">Form A</button><button id="b">Form B</button>
      <form id="a_form" name="a" style="display:none;">
        <input name="a_input" value="A: type here"/>
        <input type="submit"/>
      </form>
      <form id="b_form" name="b" style="display:none;">
        <input name="b_input" value="B: type here"/>
      <input type="submit"/>
      </form>


  </body>
</html>



<script>
var a=document.getElementById('a');
var b=document.getElementById('b');
a.addEventListener('click',function(){
a.style.display="none";
b.style.display="none";
document.getElementById('a_form').style.display="";
});
b.addEventListener('click',function(){
a.style.display="none";
b.style.display="none";
document.getElementById('b_form').style.display="";
});
</script>
