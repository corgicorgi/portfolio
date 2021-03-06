<?php
session_start();
if (!isset ($_SESSION ["manager"])) {
   header ("location: admin_login.php");
   exit();
}
?>
<?php
//Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">  
      <title>Egg Yolk Brooklyn</title>
      <link rel="stylesheet" href="css/font-awesome.css">      
      <link href="css/style.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" media="all">      
      <link rel="stylesheet" href="css/prettify.css" />
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet"> 
   </head>
   <body>
       
      <!--   LOGO     -->
      <header class="header">
         <!--218 x 340 -->
         <!--200 x 115 cella logo-->
         <a href='index.html' class="logo"><h2>egg yolk</h2></a>
         <a href='index.html' class="logo"><h5>brooklyn</h5></a>
         <div id="cartandlogin">
            <a href="cart.php" class="hvr-bob"><i class="fa fa-shopping-cart" id="cart"></i></a> 
            <a href="account_login.php" class="hvr-bob"><i class="fa fa-user" id="login"></i></a>
         </div>   
      </header>
      <!--   NAVIGATION  -->
      <nav>
         <ul>
            <li><a href='index.html' class="hvr-bounce-to-top"><span>Home</span></a></li>
            <li><a href='about.php' class="hvr-bounce-to-top"><span>About</span></a></li>
            <li class='has-sub'><a href='breakfast.php' class="hvr-bounce-to-top"><span>Menus</span></a>
               <ul>
                  <li class='has-sub'><a href='breakfast.php'><span>Breakfast</span></a></li>
                  <li class='has-sub'><a href='lunch.php'><span>Lunch</span></a></li>
                  <li class='has-sub'><a href='dinner.php'><span>Dinner</span></a></li>
                  <li class='has-sub'><a href='drinkdessert.php'><span>Drink &amp; Dessert</span></a>
                     <!-- <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                     </ul> -->
                  </li>
               </ul>
            </li>
            <li class='last'><a href='location.php' class="hvr-bounce-to-top"><span>Location</span></a></li>
            <li class='last'><a href='contact.php' class="hvr-bounce-to-top"><span>Contact</span></a></li>
         </ul>
      </nav>
      <div id="container">
         <div id="revolver" class="revolver container stack">
                <img class="slide" src="img/1.png" alt="" />
                <img class="slide hidden" src="img/2.png" alt="" />
                <img class="slide hidden" src="img/3.png" alt="" />
                <img class="slide hidden" src="img/4.png" alt="" />
                <img class="slide hidden" src="img/5.png" alt="" />
                <img class="slide hidden" src="img/6.png" alt="" />

         </div>
   
      </div>
      
      <!--   FOOTER   -->
      <footer>  
      <p>copyright &copy; 2015 egg yolk restaurant</p>
      <p>* * <a href="adminhome.php">*</a></p> 
      </footer> 
      <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
      <script src="js/jquery.revolver.min.js"></script>
      <script src="js/prettify.js"></script>

        <script type="text/javascript">

            var $revolver = $('#revolver').revolver(),
                revolver  = $revolver.data('revolver'),
                $controls = $('.controls');

            $controls.find('.first, .previous, .next, .last, .play, .stop, .pause, .restart').click(function(e){
                e.preventDefault();
                revolver[this.className]();
            });

            $controls.find('.goto').click(function(e){
                e.preventDefault();
                revolver.goTo($(this).data('goto'));
            });

        </script>
      
      <?php 
         inclue_once("");//your website's footer template
      ?>   
   
   </body>
</html>   