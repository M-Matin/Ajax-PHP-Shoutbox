//To connect database.php we need to write this php statement
<?php include 'database.php' ;

 ?>
</<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> JS shoutbox</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="JS/script.js"></script>
  </head>
  <body>
    <div id='container'>
      <header>
        <h1>JS Shoutbox</h1>
      </header>
      <div id='shouts'>
        <ul>
          <li></li>
        </ul>
      </div>
      <footer>
        <form>
          <lable>Name:</lable>
          <input type='text' id='name'>
          <lable>Shout Text</lable>
          <input type='text' id='shout'>
          <input type='submit' id='submit' value='SHOUT!'>
      </footer>
    </div>
  </body>
</html>
