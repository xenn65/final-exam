<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>

  <style>
   .container {
       padding: 10px;
       display: flex;
       justify-content: center;
       align-items: center;
   }
   .child {
       border: 1px solid black;
       padding: 10px;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
   }
  </style>

  <script>
   function getInp() {
    const inputVal = document.querySelector('input').value;
    alert("Hello " + inputVal +", Welcome to my site!");
   }
  </script>

 </head>

 <body>
    
 <div class="logo-box">
        <div class="logo"><a href="index.php"><img src="ULS-Logo.png" alt="picture"></a></div>
    </div>
<h1>Homework #2</h1>
<div class="topnav">
    <a href="index.php">Home</a>
    <a class="active"  href="homework.php">Homework 2</a>
    <a href="news.php">News</a>
    <a href="gallery.php">Gallery</a>
  </div>

  <div class="container">
   <div class="child">
       <p>Input name here...</p>
       <input type="text" placeholder="Name here...">
       <button onclick="getInp()">send</button>
   </div>  
  </div>


 </body>

</html>