
  

 <?php

 session_start();
         
          $count=0;
        if (isset($_SESSION['cart']))
         {
          $count=count($_SESSION['cart']);
      
          # code...
        }
?>
  <!------------------made with love......-->

  <!DOCTYPE html>
  <html>
  <head>

  	<html lang="en">
	<link rel="icon" href="img\th (1).jfif" height="20%"/>
	<title>UrbanMunda</title>
	<!-- for-mobile-apps -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <meta name="keywords" content="online Vegetables and fruits,online Vegetables and fruits chennai,online Vegetables and fruits shopping,online Vegetables and fruits store,online supermarket,Vegetables and fruits chennai, buy Vegetables and fruits online,online Vegetables and fruits purchase,online vegetable store"/>
    <meta name="description" content="Buy fresh Vegetables and fruits at online store of odisha-India. Online Supermarket includes fresh vegetable,fruits,greens."/>

     
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


   <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

     <!-- bootystrap java script---->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  

    <script src="https://kit.fontawesome.com/67f58695eb.js" crossorigin="anonymous"></script>

    <!----coustum styles sheet--->
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>

  	<div class="container-fluid head">
  			<div class="row">
  				<div class="col-md-8">

  					<div class="icon">
  					<a href="">	<i class="fa fa-facebook-official" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-instagram" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-twitter" aria-hidden="true"></i></a>
  					<a href="">	<i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
  					</div>
  					
  				</div>
  				
  				<div class="col-md-4 ">
  					<div class="icon2">
  					<i class="fa fa-mobile" aria-hidden="true"></i><p>+260 96 0709572</p>
  				</div>
  				</div>
  			</div>
  		
  	</div>

  	<div class="container">
  		<div class="row">
  			<div class="col-md-4">
  			 <div class="brand">
 				<img src="urbanmunda.jpg" alt="Logo" style="height: 50px; margin-left: 0px;"> <!-- Adjust logo size and margin -->
  			 	 	<h2><span></span></h2>
  			 </div>	
  			</div>
  			<div class="col-md-4">
  				<div class="form">
  				<form method="post">
                  <input type="search" name="search" required="" placeholder="Search your Items...">
                  <input type="submit" name=""> 					
  				</form>
  			</div>
  			</div>
  			<div class="col-md-4">
  				<div class="icon3">
  					<a href="https://goo.gl/maps/ZQUnuedvt6E5mjjv5"> <i class="fa fa-map-marker" aria-hidden="true">Location</i></a>
  					<a  href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Cart(<?php echo $count; ?>)</i></a>
  				</div>
               		</div>
  		</div>
  	</div>

  	<!--------------------navbar....================------------m_c_1_4_3-------------->

  		<nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#" id="dynamicLink">UrbanMunda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="vegetables.php">Vegetables</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Fruitd.php">Fruits</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Contact.php">ContactUs</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="Logup.php">Signup</a>
          
      </li>
     
    </ul>
    
  </div>
</nav>

<!--end of nav---mc_-->




 <div >
 	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="slide2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide1.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="slide5.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>


 <div class="container-fluid hori">
 	<div class="row">
 		<div class="col-md-12">
 				<h4>Fresh Fruits & vegetables..</h4>
 		</div>
 		
 	</div>
 	
 	
 </div>

 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 			<div class="title">
 				<h3>VEGETABLES</h3>
 				<hr>
 			</div>
 			
 		</div>
 		
 	</div>
 	
 </div>


   <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="asparagus.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Asparagus</p>
                       </div>
                       <div class="price">
                       <span>1Kg</span><i class="kwacha-symbol">/K50</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="asparagus.jpg">
                     <input type="hidden" name="Iteamname" value="Parwal">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                </div>   
           </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="mushroom1.png" width="100%" height="300px">
                <div class="caption">
                  <p>Mushroom</p>
                       </div>
                       <div class="price">
                     <span>1Kg</span><i class="kwacha-symbol">/K50</i>
                     <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="mushroom1.png">
                     <input type="hidden" name="Iteamname" value="Brinjal Vari">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
            </div>   
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="pea.jpeg" width="100%" height="300px">
                <div class="caption">
                  <p>Peas</p>
                       </div>
                       <div class="price">
		       <span>1Kg</span><i class="kwacha-symbol">/K35</i>
                        <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="pea.jpeg">
                     <input type="hidden" name="Iteamname" value="Bitter Gourd">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                </div>  
      </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="tomato.jpeg" width="100%" height="300px">
                <div class="caption">
                  <p>Tomato</p>
                       </div>
                       <div class="price">
		       <span>1Kg</span><i class="kwacha-symbol">/K24</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="tomato.jpeg">
                     <input type="hidden" name="Iteamname" value="Tomato">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
              </div>   
      </div>
      
    </div>

   </div> 


   <div class="link">
       <p>Click here and see more Fresh  vegetables..</p>
      <a href="vegetables.php" id="dynamicLink">More Vegetables..</a>
      
    </div>



     <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="title">
        <h3>FRUITS</h3>
        <hr>
      </div>
      
    </div>
    
  </div>
  
</div>

     
     <div class="container">
    <div class="row">
      <div class="col-md-3">
         <div class="thumbnail">
                <img src="mango1.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Mango</p>
                       </div>
                       <div class="price">
		       <span>1Kg</span><i class="kwacha-symbol">/K30</i>
                         <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="mango1.jpg">
                     <input type="hidden" name="Iteamname" value="Mango">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
               </div>   
        </div>

      <div class="col-md-3">
           <div class="thumbnail">
                <img src="grapes.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Grapes</p>
                       </div>
                       <div class="price">
		       <span>1Kg</span><i class="kwacha-symbol">/K50</i>
                        <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="grapes.jpg">
                     <input type="hidden" name="Iteamname" value="grapes">
                     <input type="hidden" name="price" value="50">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
             </div>   
      </div>

      <div class="col-md-3">

        <div class="thumbnail">
                <img src="orange.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Orange</p>
                       </div>
                       <div class="price">
		       <span>1Kg</span><i class="kwacha-symbol">/K35</i>
                       <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="orange.jpe">
                     <input type="hidden" name="Iteamname" value="Orange">
                     <input type="hidden" name="price" value="35">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
                </div>  
          </div>
      
       <div class="col-md-3">

        <div class="thumbnail">
                <img src="peach.jpg" width="100%" height="300px">
                <div class="caption">
                  <p>Peaches</p>
                       </div>
                       <div class="price">
 		       <span>1Kg</span><i class="kwacha-symbol">/K24</i>
                    <form method="post" action="manage.php">
                     <p><input type="submit" name="sub" value="Add to Cart" class=" btn bg-success  text-white"></p>
                     <input type="hidden" name="image" value="peach.jpg">
                     <input type="hidden" name="Iteamname" value="Sweetlime">
                     <input type="hidden" name="price" value="24">
                     <input type="hidden" name="quantity" value="1kg">
                   </form>
                   </div>
              </div>   
      </div>
      
    </div>

   </div> 


   <div class="link">
       <p>Click here and see more Fresh Fruits ..</p>
      <a href="Fruitd.php">More Fruits..</a>
      
    </div>



    <div class="container-fluid" style="margin-bottom: 30px;">
      <div class="row">
        <div class="col-md-3 div_s">
          <i class="fa fa-truck" aria-hidden="true"></i>
          <h3>FREE SHIPPING</h3>
          <p>on order over K 500</p>
        </div>

        <div class="col-md-3 div_s">
          <i class="fa fa-umbrella" aria-hidden="true"></i>
          <h3>24/7 SUPPORT</h3>
        <p>online consultations</p>
        </div>

        <div class="col-md-3 div_s">
          <i class="fa fa-wrench" aria-hidden="true"></i>
          <h3>DAILY UPDATES</h3>
          <p>Checkout store for latest</p>
        </div>
        <div class="col-md-3 div_s">
          <i class="fa fa-refresh" aria-hidden="true"></i>
          <h3>EASY RETURNS</h3>
          <p>moneyback guarantee</p>
        </div>
        
        
      </div>
      
    </div>


<!----------pageup---------------------8-1-1-7-0-6-2-9-4-4------------>

  <button id="top" class="top" title="Go to top" onclick="pageup();">Top</button>
    <!---footer part--->

    <div class="container-fluid button_link">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3>INFORMATION</h3>
            <div class="imp_link">
              <a href="">Home</a>
              <a href="">Vegetables</a>
              <a href="">Fruits.</a>
              <a href="">About</a>
              <a href="">Contact</a>
            </div>
          </div>


          <div class="col-md-4">
             <h3>MY ACCOUNT</h3>
            <div class="imp_link">
              <a href="">Login</a>
              <a href="">Logout</a>
              <a href="">Signup.</a>
              <a href="">FaQ</a>
              <a href="">Sitemap</a>
            </div>
            
          </div>

          <div class="col-md-4">
            <h3>FOLLOW US</h3>
            <div class="imp_link">
              <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>



    <div class="container-fluid footer">
      
      <h3>© 2024 Urban Munda . All Rights Reserved | Developed by Munzwa Tariro F.</h3>
    </div>
   
      <script>
     


    //pageup.....

    var mybutton = document.getElementById('top');
   
    window.onscroll = function() 
    {scrollFunction()};

function scrollFunction()
 {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function pageup()
 {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
    </script>
  </body>
  </html>

