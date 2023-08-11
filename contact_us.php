<?php
if(isset($_POST) & !empty($_POST)){
  session_start();
  $_SESSION['email']=$_POST['email'];
    header("Location:index.php");
  // exit();


  
} ?>
<!DOCTYPE>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   <header>
     <?php include('./header.php');?>
   </header>
    <main class=contact_us_main>
<!-- Contact Us Section -->  
    <div id="contact" class="card contact-form">
  <h3>Contact Us</h3>
        <form method="POST">
            <input type="email" name="email" placeholder="name@example.com">
            <textarea name="message" placeholder="Enter your message"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
       


    </main>
  </body>
       
</html>