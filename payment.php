


<?php
include("dbconnect.php");
session_start();
extract($_POST);








   

$id=$_GET['id'];



if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"update application set pay='1' where id='$id'");
if($qry){?>
		 <script> alert('payment successfully')
window.location.href=("studhome.php");</script>
<?php } }?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>

body{
  display: block;
  position: center;
    font-family: 'Space Mono', monospace;
    background-color: rgb(240, 244, 247);
  background: Grey;
  height: 100vh;
  
}



/* .box {
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

}  */



/* Background circles start */
.circle {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(120deg, #1D976C, #2c3e50);
}
.circles {
  position: absolute;
  height: 270px;
  width: 450px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
}
.circle-1 {
  height: 300px;
  width: 300px;
  top: 100px;
  left: -50px;
  opacity: 0.8;
  animation-timing-function: cubic-bezier(0.54, 0.085, 0.5, 0.92);
  animation-iteration-count: infinite;
  animation-name: float;
  -webkit-animation-name: float;
  animation-duration: 6s;
  -webkit-animation-duration: 6s;
  -webkit-animation-delay: 3.5s;
  animation-delay: 3.5s;
  animation-direction: alternate;
  
}

.circle-2 {
  height: 240px;
  width: 240px;
  bottom: 40px;
  right: -100px;
  opacity: 0.8;
  animation-timing-function: cubic-bezier(0.54, 0.085, 0.5, 0.92);
  animation-iteration-count: infinite;
  animation-name: float;
  -webkit-animation-name: float;
  animation-duration: 6s;
  -webkit-animation-duration: 6s;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  animation-direction: alternate;
}
/* Background circles end */





/* ANIMATIONS */
@keyframes explode {
 0% { opacity: 1; }
 100% { transform: scale(1.2); opacity: 0; }
}
@keyframes float {

  0% {
    -webkit-transform: rotateX(0deg) translateY(0px);
    -moz-transform: rotateX(0deg) translateY(0px);
    -ms-transform: rotateX(0deg) translateY(0px);
    -o-transform: rotateX(0deg) translateY(0px);
    transform: rotateX(0deg) translateY(0px);
    }

  50% {
    -webkit-transform: rotateX(0deg) translateY(1px) translateX(5px);
    -moz-transform: rotateX(0deg) translateY(10px) translateX(5px);
    -ms-transform: rotateX(0deg) translateY(30px) translateX(5px);
    -o-transform: rotateX(0deg) translateY(40px) translateX(5px);
    transform: rotateX(0deg) translateY(10px) translateX(5px);
}
  100% {
    -webkit-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -moz-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -ms-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -o-transform: rotateX(0deg) translateY(0px) translateX(1px);
    transform: rotateX(0deg) translateY(0px) translateX(1px);
  }

}

.mdl{
  height: auto;
  width: 420px;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-60%,-60%);

}

h1{
  
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 300;
  padding-left: 30px;
  padding-bottom: 20px;
  color: #ffffff;
  width: 420px;
  line-height: 1.5em;
  text-align: left;
}

.card {
  height: 260px;
  width: 420px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(35px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 80px rgba(0, 0, 0, 0.25);
  padding: 30px 30px 30px 30px;
  overflow: hidden;
  
}

.logo{
  padding-bottom: 40px;
  opacity: 0.9;
}



input[id="card-number"]{
  font-size: 30px;
  font-family: 'Space Mono', monospace;
  width: 100%;
  height: 50px;
}

input[id="card-number"]::placeholder{
  color: #b5b5b5;
  font-size: 30px;
  font-family: 'Space Mono', monospace;
}

input::placeholder{
  color: #b5b5b5;
  font-family: 'Space Mono', monospace;
}



.group{
  display: inline-flex;
  margin: 0;
  padding: 0;
  
}

.card-number 			  { 
  position:relative; 
   display: inline-block;
  overflow: hidden;
  margin-bottom:30px; 
  
 
}

.card-number > input[id="card-number"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-name > input[id="card-name"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-exp > input[id="card-exp"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-ccv > input[id="card-ccv"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.underline{
  transition: all 0.3s;
  display: inline-block;
  bottom: 0;
  left: -100%;
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: #ffffff;
}

.card-number > input[id="card-number"]:hover + .underline
{
  left: 0; 
}

.card-number > input[id="card-number"]:focus + .underline
{
  left: 0; 
}




.card-name > input[id="card-name"]:hover + .underline{
  left: 0; 
}
.card-name > input[id="card-name"]:focus + .underline{
  left: 0; 
}

.expiration-date > input[id="card-exp"]:hover + .underline{
  left: 0;
}

.expiration-date > input[id="card-exp"]:focus + .underline{
  left: 0;
}

.ccv > input[id="card-ccv"]:hover + .underline{
  left: 0;
}

.ccv > input[id="card-ccv"]:focus + .underline{
  left: 0;
}

.card-name{ 
  font-family: 'Space Mono', monospace;
padding: 0px 80px  0px 0px;
  margin-right: 40px;
  width: 100px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}

.expiration-date{
  font-family: 'Space Mono', monospace;
 padding: 0px 0px 0px 0px; 
  margin-right: 60px;
  width: 80px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}

.ccv{
  font-family: 'Space Mono', monospace;
 padding: 0px 0px 0px 0px; 
  margin-right: 0px;
  width: 60px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}




input {
  font-family: 'Space Mono', monospace;
  border: none;
  font-size: 16px;
  height: 26px;
  color: #ffffff;
  background: 0;
  padding 0;
  width 0;
}

input:focus{ 
  border-bottom: 2px solid white;
  outline: none;
  font-family: 'Space Mono', monospace;
  border: none;
  color: white;
  font-size: 16px;
  height: 30px;
  margin-bottom: -2px;
}

input:hover{
  border-bottom: 2px solid white;
  font-family: 'Space Mono', monospace;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 30px;
}





input[id="card-number"]:focus
{
  border: none;
  border-bottom: 2px solid white;
  color: white;
  font-size: 30px;
  height: 50px;
  margin-bottom: -2px;
  width: 400px;
}

input[id="card-number"]:hover
{
  border: none;
  border-bottom: 2px solid white;
  color: white;
  font-size: 30px;
  height: 50px;
  margin-bottom: -2px;
  width: 400px;
}




input[id="card-name"]{
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 160px;
}

input[id="card-name"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 160px;
}

input[id="card-name"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;

  height: 26px;
  width: 160px;
}

input[id="card-exp"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 80px;
}

input[id="card-exp"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 80px;
}

input[id="card-ccv"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 50px;
  
}

input[id="card-ccv"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 50px;
  
}


label {
  color: white; 
  font-size:12px;
  font-weight:normal;
  font-family: 'Space Mono', monospace;
  pointer-events:none;
  display: block;
  padding-bottom: 2px;

}


</style>
</head>

<body>
 <span style="color:#FFFFFF;">Amount To Be Paid:</span><input type="text" value="10" />

<div class="box">

  
  <div class="mdl">
  <div class="circles">
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
  </div>  
      <h1 class="title">
        Please enter your  card <br>details below
      </h1>
    
    <div class="card">

      <form method="post" action=""> 
	 
        <div class="logo">
          <?xml version="1.0" encoding="UTF-8"?>
          <svg width="48px" height="48px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>Group</title>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Group" fill="#FFFFFF">
                <circle id="Oval" cx="16" cy="16" r="16"></circle>
                <circle id="Oval" cx="16" cy="48" r="16"></circle>
                <circle id="Oval" cx="48" cy="16" r="16"></circle>
                <circle id="Oval" cx="48" cy="48" r="16"></circle>
              </g>
            </g>
          </svg>

        </div>
        <div class="card-number">
          <label>Card Number</label>
          <input id="card-number" placeholder="1234 1234 1234 1234" type="text" required maxlength="19">
          <span class="underline"></span>

        </div>
        <br>
        <div class="group">
          <div class="card-name">
            <label>Card Holder</label>
            <input id="card-name" placeholder="ISRAEL ISRAELI" type="text" required>
            <span class="underline"></span>

          </div>
          <div class="expiration-date">
            <label>Exp. Date</label>
            <input id="card-exp" placeholder="10/25" type="text" maxlength="5" required>
            <span class="underline"></span>

          </div>
          <div class="ccv">
            <label>CCV</label>
            <input id="card-ccv" placeholder="123" type="text" maxlength="3" required>
            <span class="underline"></span>
          </div>

        </div>
 
    </div>
  </div>

</div>
<div>
<input type="submit" name="btn" value="PAYNOW" style="background:#1b4d3e;font-size:20px;padding:5px;width:300px;position:relative;top:500px;left:900px;padding:10px;height:50px;border-radius:5px;"/>
</div>

     </form>
	 
	 
<script>


/* Card Number Spacing */

$('#card-number').on('keypress change blur', function () {
  $(this).val(function (index, value) {
    return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
  });
});

$('#card-number').on('copy cut paste', function () {
  setTimeout(function () {
    $('#card-number').trigger("change");
  });
});


/* Exp. Date Slash */

$('#card-exp').on('input',function(){
    var curLength = $(this).val().length;
    if(curLength === 2){
       var newInput = $(this).val();
        newInput += '/';
        $(this).val(newInput);
    }


});

// var characterCount
// $('#card-exp').on('input',function(e){
//     if($(this).val().length == 2 && characterCount < $(this).val().length) {
//         $(this).val($(this).val()+'/');
//     }
//     characterCount = $(this).val().length
// });



</script>
</body>
</html>
