<!DOCTYPE html>
<!--
Template Name: Cooban
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<!--Voorraadbeheerder: heeft toegang tot voorraden en producten-->


<?php
require 'dbcrudclass.php';
 session_start();
 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['login'])){
            $sql = "select * from gebruiker where gebruikersnaam = '".$_POST['gebruiker']."' AND wachtwoord = '".$_POST['ww']."'";
            $info = new DbHandler("localhost","mydb","root","");
            $data = $info->ReadData($sql);
            foreach($data as $row){
               $_SESSION["gebruiker"]['id'] = $row['id'];
               $_SESSION["gebruiker"]['gebruikersnaam'] = $row['gebruikersnaam'];
               $_SESSION["gebruiker"]['rol'] = $row['rol'];
            }
        }
        if(isset($_POST['logout'])){
          session_destroy();
          header("Refresh:0");

        }
}
 
?>
<html>
<head>
<title>Cooban | Pages | Full Width</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<?php include 'header.php';  ?>



<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
    <div>
                <?php  if(!isset($_SESSION["gebruiker"]['rol'])){ ?>
        <form action="" style="color:black" method="POST">
            gebruikersnaam:   <input name="gebruiker" type="text">
         wachtwoord:   <input name="ww" type="password">    
         <input type="submit" name="login" value="login">
        </form>
        <?php  }  ?>
     
    </div>
      <!-- ################################################################################################ -->
      <h1>Home</h1>
      <p>Deze site moet worden beveiligd. De volgende rollen moeten kunnen worden onderscheiden:</p>
      <ul>
          <li><strong>Voorraadbeheerder</strong>: heeft toegang tot voorraden en producten</li>
          <li><strong>Accountmanager</strong>: heeft toegang tot locaties, voorraden en producten</li>
          <li><strong>Manager</strong>: heeft toegang tot locaties, voorraden en producten</li>
          <li><strong>Systeembeheerder</strong>: heeft toegang tot gebruikersbeheer</li>
      </ul>
      <p>Wat is de meest praktisch manier om de site te beveiligen, rekening houdend met eventuele uitbreiding in de toekomst?</p>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="title">Phasellus aenean</h6>
      <address class="btmspace-15">
      Company Name<br>
      Street Name &amp; Number<br>
      Town<br>
      Postcode/Zip
      </address>
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Imperdiet aliquam</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Neque porta elit</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Dignissim tellus vitae posuere laoreet dui nulla pulvinar dolor at ultricies lectus orci aliquam ipsum vestibulum at.</p>
      </article>
    </div>
    <div class="one_quarter">
      <h6 class="title">Iaculis mauris</h6>
      <ul class="nospace linklist">
        <li><a href="#">Consectetur commodo orci</a></li>
        <li><a href="#">Vitae tempus maecenas</a></li>
        <li><a href="#">Feugiat eget nisi vel</a></li>
        <li><a href="#">Scelerisque fusce suscipit</a></li>
        <li><a href="#">At sodales facilisis vivamus</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Quis auctor nulla</h6>
      <p>Risus vivamus consectetur neque augue eu tincidunt urna varius nec phasellus.</p>
      <p>Dapibus rutrum interdum nullam commodo lacus sed neque porttitor.</p>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>