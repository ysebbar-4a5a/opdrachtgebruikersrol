
<?php  
if(!isset($_SESSION["gebruiker"]['id'])){
    $_SESSION["gebruiker"]['id'] = false;
}

?>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');"> 
  <!-- ################################################################################################ -->
  <div class="row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Cooban</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
         <?php if($_SESSION["gebruiker"]['id'] >= 1 && $_SESSION["gebruiker"]['id'] <= 3 ){?>
          
          <li><a class="drop" href="#">Voorraden</a>
            <ul>
              <li><a href="voorraad.php">Voorraden</a></li>
              <li><a href="producten.php">Producten</a></li>
            </ul>
          </li>
          
        <?php } ?>
        <?php if($_SESSION["gebruiker"]['id'] == 2 || $_SESSION["gebruiker"]['id'] == 3 ){?>

          <li><a href="locaties.php">Locaties</a></li>
        <?php } ?>
        <?php if($_SESSION["gebruiker"]['id'] == 4 ){?>

          <li><a href="gebruikers.php">Gebruikers</a></li>
        <?php } ?>
      


        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
        <?php  if(isset($_SESSION["gebruiker"]['rol'])){ ?>
        <form action="index.php" style="color:black" method="POST">   
            <input type="submit" name="logout" value="logout">
        </form>
        <?php  }  ?>
  </div>
  <!-- ################################################################################################ -->
</div>