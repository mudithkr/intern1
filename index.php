
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>AdviseUsIndia |Taxation | FEMA</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script type="text/javascript">
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );</script>
</head>
<body class="grey lighten-4" >
  <nav role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://www.adviseusindia.com" class="brand-logo"><img src="./images/Logo_1.png" alt="Advise Us India Logo"></a>
      <ul class="right hide-on-med-and-down">
        <ul class="dropdown-button dropdown-content" id="dropdown"><?php 
 
    include('header.php');
      $queyr = mysqli_query($p,"SELECT * FROM ");
      while($row = mysqli_fetch_array($queyr))
        { 
           echo '<li><a href="blog.php?id=' . $row['id'] .'">'.
           $row["head"] . '</a></li>' ;
      }
      ?></ul>
      <li><a class="dropdown-button" href="#" data-activates="dropdown">Blogs</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
<ul id="login" class="dropdown-content">
</ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Blogs</a></li>
        <li><a href="#">FAQs</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center" style=""><span style="color:#fe8619;">ADVISE </span><span style="color:#cbcbcb;">US </span><span style="color:#59ca00;">INDIA</span></h1>
      <div class="row center">
        <h5 class="header col s12 light">Your Comprehensive Resource for Taxation & FEMA</h5>
      </div>
    </div>
  </div>
  <br><br>

  <div class="container">

    <div class="section">
      <div class="row center">
        <div class="col s12 m6">
        <ul class="collapsible" data-collapsible="accordion">
        <li>
          

      <div class=" safronf collapsible-header btn-large waves-effect waves-light" id="download-button">Non Resident Indians</div>
      <div class="collapsible-body">
      <?php 
      $quey = mysqli_query($p,"SELECT * FROM ");
      while($row = mysqli_fetch_array($quey))
        { 
           echo '<a href="nri.php?id=' . $row['id'] . '" id="download-button" class="btn-large waves-effect waves-light obj">'.
           $row["head"] . '</a>' ;
      }
      ?>
   </div>
        </li>
        </ul>
        </div>
        <div class="col s12 m6">
        <ul class="collapsible" data-collapsible="accordion">
        <li>
      <div class="greenf collapsible-header btn-large waves-effect waves-light" id="download-button">Investing in India</div>
      <div class="collapsible-body">
        <?php 
      $que = mysqli_query($p,"SELECT * FROM ");
      while($row = mysqli_fetch_array($que))
        { 
           echo '<a href="india.php?id=' .$row['id']. '" id="download-button" class="btn-large waves-effect waves-light obj">'.
           $row["head"] . '</a>' ;
      }
      ?>
      </div>
        </li>
        </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <hr style="height: 10px;border: 0;box-shadow: 0 10px 10px -10px #8c8b8b inset;"><br><br>
  <div class="container">
    <div class="section1">
  <div class="center">
        <ul class="collapsible" data-collapsible="accordion">
        <li>
        <div class="collapsible-header btn-large waves-effect waves-light greyf" id="download-button">Have a question, Ask it!</div>    
        <div class="collapsible-body">
        
<div id="contents"><b>
<?php

    if(isset($_POST['submit']))
    {
         $empty=0;
         foreach($_POST as $key => $value)
    {
        if(!isset($value) || empty($value) || $_SERVER["REQUEST_METHOD"] != "POST")
    {
        echo "<center><b>****Please fill all the fields****</b></center>";
        $empty=1;
        break;
    }
  }
  if($empty!=1)
  {
    $email=$_POST['email'];
    $quest=$_POST['quest'];
    $city=$_POST['city'];
    $q="INSERT INTO formaui(email,quest,city) VALUES ('$email', '$quest', '$city')";
    $query_run=mysqli_query($p,$q);
    require_once 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
 
    $mail->isSMTP();                                    
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;                                 
    $mail->Username = '@gmail.com';                            
    $mail->Password = '';                        
    $mail->SMTPSecure = 'tls';                            
 
    $mail->From = 'noreply@gmail.com';  
    $mail->FromName = 'Advise Us India';
    $mail->addAddress('@hotmail.com', ''); 
    $mail->addAddress($email); 
    $mail->addReplyTo($email);
    $mail->WordWrap = 50;                                
    $mail->isHTML(true);                                  
 
    $mail->Subject = 'Query on Advise us India';
    $mail->Body    = '<b>Query:</b>'.$quest.'<div><font color="red"><br>
    from: email- '.$email.'<br>City: '.$city.'<br> </div>';
 
    if(!$mail->send()) {
      echo '<b><center>Query not submitted.<br>ERROR..</center></b>. $mail->ErrorInfo';
    }
 
    echo '<b><center>Your query is Submitted.</center></b>';
}
  
  
}
?>
 <div class="row">
  <form class="col s12" name="ry" action="" method="post">
    <div class="row">
      <div class="input-field col s12">
        <textarea name="quest" id="textarea" class="materialize-textarea validate" placeholder="(If You Wish to Provide Your Name And Mobile Number, Then Enter it at the End of Your Question)" required=""></textarea>
        <label for="textarea">Your Question</label>
      </div></div>
    <div class="row">
      <div class="input-field col s12">
        <input id="email" name="email" autocomplete="on" type="email" class="validate" required="">
        <label for="email">Email</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input name="city" id="username" type="text" class="validate" autocomplete="on" required="">
        <label for="username">City</label>
      </div>
    </div>
    <button class="btn waves-effect waves-light" value="submit" type="submit" name="submit">Submit</button>
  </form>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<br><br>
                  
  <footer class="page-footer deep-purple">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">About Advise Us India</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Copyright © 2016 Advise Us India. All rights reserved.<span style="float:right">Beta Version</span>
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
