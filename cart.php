
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
  <title>CART page</title>
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
      <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    <div class="container-fluid head">
        <div class="row">
          <div class="col-md-8">

            <div class="icon">
            <a href=""> <i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href=""> <i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            </div>
            
          </div>
          
          <div class="col-md-4 ">
            <div class="icon2">
            <i class="fa fa-mobile" aria-hidden="true"></i><p>+91 6370126361</p>
          </div>
          </div>
        </div>
      
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-4">
         <div class="brand">
           <h2><span>V</span>-Kart</h2>
         </div> 
        </div>
        <div class="col-md-4">
          <div class="form">
          <form method="post">
                  <input type="search" name="search" required="" placeholder="Search your Iteams...">
                  <input type="submit" name="">           
          </form>
        </div>
        </div>
        <div class="col-md-4">
          <div class="icon3">
            <a href="https://goo.gl/maps/ZQUnuedvt6E5mjjv5"> <i class="fa fa-map-marker" aria-hidden="true">Location</i></a>
           <a  href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true">Add To Card(<?php echo $count; ?>)</i></a>
          </div>
               
        </div>


      </div>
      
    </div>

    <!--------------------navbar....================------------m_c_1_4_3-------------->

      <nav class="navbar navbar-expand-lg navbar-custom">
  <a class="navbar-brand" href="#">V-kart</a>
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
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">Login</a>
          <a class="dropdown-item" href="Logup.php">Logup</a>
          
      </li>
     
    </ul>
    
  </div>
</nav>

<!--end of nav---mc_-->


<div class="container" >
   <div class="row">
      <div  class="col-md-12 text-center border rounded bg-success text-white my-5">
        <h3>My Cart...</h3>
      </div>
      

  <div class="row" style="overflow-x: auto;">

    <div class="col-md-10">
       <table class="table" >
  <thead class="text-center">
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Itemname</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">

    <?php
  
 // print_r($_SESSION['cart']);

    $total=0;
     
     if (isset($_SESSION['cart']))
      {
       foreach ($_SESSION['cart'] as $key => $value)
        {
           $total=$total+$value['price'];
    echo "
      <tr>
       <td><img src='$value[image]' width='100px' height='100px'></td>
       <td>$value[Iteamname]</td>
       <td>$value[price]</td>
       <td>$value[quantity]</td>
        <td>
        <form method='post' action='manage.php'>
        <button class='btn tbn-sm btn-outline-danger' name='remove'>remove</button>
        <input type='hidden' name='Iteamname' value='$value[Iteamname]' >
        </form>
        </td>
      </tr>
 
    ";
  }
     }

    ?>
    
      
  
  </tbody>
</table>
      
    </div>
</div>



    <div class="col-md-2 bg-light text-success border rounded mb-5 mt-4">
      <h3>Total-<?php echo $total;  ?>/-</h3>
       <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadio" id="flexRadio" >
  <label class="form-check-label" for="flexRadio">
    Cash on Delivery
  </label>
</div>
<div class="form-check">
  <form>
  <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
  <label class="form-check-label" for="flexRadioCheckedDisabled">
    Net Banking(Filhal Not availabel.. )  
  <a href="order.php" class="btn bg-success text-white btn-rounded mt-4" > Order Now</a>
    <form>
  </label>
</div>
    </div>
    
  </div>
  
</div>




 
    <!---footer part--->

    <div class="container-fluid button_link">
      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3>INFORMATION</h3>
            <div class="imp_link">
              <a href="">Home</a>
              <a href="">Vegitables</a>
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
              <a href="">Logup.</a>
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


<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

    <div class="container-fluid footer">
      
      <h3>© 2021 V-kart . All Rights Reserved | Design by Balaram!</h3>
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

