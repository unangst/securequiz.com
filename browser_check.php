<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="browser.css">
    <script src="browser.js"></script>
    <script src="keyboard.js"></script>

  <body>

    <div id="controls">
      <img src="securequiztrans.png" height="36">
<?php
echo $_SERVER['HTTP_USER_AGENT'];
$browser = get_browser();
print_r($browser);
?>
      <button onclick="showDialog()"><img src="desmos.png" height="36"></button>
      <button onclick="closeDialog()">X</button>
      
<dialog id="myDialog">
<script src="https://www.desmos.com/api/v1.0/calculator.js?apiKey=dcb31709b452b1cf9dc26972add0fda6"></script>
<div id="calculator" style="width: 600px; height: 400px;"></div>
<script>
  var elt = document.getElementById('calculator');
  var calculator = Desmos.GraphingCalculator(elt);
</script>
</dialog>
<script>
var x = document.getElementById("myDialog"); 

function showDialog() { 
    x.show(); 
} 

function closeDialog() { 
    x.close(); 
} 
</script>
      
      <button id="back" title="Go Back">&#9664;</button>
      <button id="forward" title="Go Forward">&#9654;</button>
      <button id="home" title="Take Another Quiz">&#8962;</button>
      <button id="reload" title="Refresh Page">&#10227;</button>
      <button id="reset">Exit SecureQuiz v.6.19</button>
      <input type="text" value="" class="keyboardInput" lang="es" /> 
      <form id="location-form">
      <div id="center-column">
      </div>
      </form>

<form id="demo"></form>
<script>
var d = new Date();
    d.setHours(0,0,0,0);
setInterval((function(){

return function(){
d.setSeconds(d.getSeconds()+1);
   var t = d.toLocaleTimeString("en-US", {hour12: false});
    document.getElementById("demo").innerHTML = t;
}
})(), 1000);
</script>
            
    <webview src="http://1hd.net/quiz/survey" style="width:100%; height:100%"></webview>
    <div id="sad-webview">
      <div id="sad-webview-icon">&#9762;</div>
      <h2 id="crashed-label">Aw, Snap!</h2>
      <h2 id="killed-label">Quiz App Not Working.</h2>

      <p>Something went wrong while displaying this webpage.
      To continue, reload this page or check your wifi connection and/or date/time.</p>
    </div>
  </body>
</html>