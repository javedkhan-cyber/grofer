<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="owlcarousel/owl.theme.default.min.css">
</head>
 <style type="text/css">
     .ta_side
     {
color: #595959;font-size: 15px;margin-top: -16px;background-color: #F9F9F9;padding: 15px 15px 15px 33px;width: 249px;margin-left: -15px;cursor: pointer;
     }

     .ta_side2
     {
color: #595959;font-size: 15px;margin-top: -16px;background-color: white;padding: 15px 15px 15px 33px;width: 249px;margin-left: -15px;cursor: pointer;
     }
   
 .add_tr
       {
        padding-left: 29px;color: #949494;margin-top: -12px;width: 80%;display: inline-block;
       }

       .add_tr2
       {
       width: 19%;display: inline-block;float: right;font-size: 13px;padding-left: 24px;margin-top: -8.6px; 
       }

       .card_new
       {
        margin-top: 24px;width: 96%;margin-left: 15px;margin-bottom: 15px;
       }
     .hr_one
     {
      border-top:1px solid #EEEEEE;margin-left: -15px;width: 249px;
     }
     .hr_two
     {
      border-top:1px solid #EEEEEE;margin-left: -15px;width: 249px;margin-top: -16px;
     }

      .card-header
  {
    background-color: white;color: #F26E21;font-size: 14px;
  }

  .card-header:hover
  {
    background-color: #F9F9F9
  }

      @media only screen and (max-width: 768px) {
   .cash_img
   {
    display: inline-block;width: 20%;
   }

   .cash_text
   {
    display: inline-block;width: 79%;
   }

   .cash_p
   {
    width: 119%;
   }

   .cash_p1
   {
    margin-left: -30px;
   }

   #car_he
   {
    min-height: 100px;
    margin-bottom: 10px;
   }

   .si_side
      {
        margin-left: 55px;height: 410px;
      }

      .si_bor
      {
        border-left:1px solid #EEEEEE;
         border-right:1px solid #EEEEEE;
      }

      .si_image
      {
        margin-left: -60px;
      }

      #ri_div
      {
        min-height: 500px
      }

      .add_tr
       {
       min-width: 106%;
       }

       .add_tr2
       {
     min-width: 106%;margin-right: -22px;
       }

   }
   </style>
<body style="background-color: #F9F9F9;">
  
	<?php include("header.php");?>	

<div class="container" style="background-color: white;max-width: 1000px;margin-top: 13px;box-shadow: .5px .5px .5px .9px #929292;min-height: 600px;">
  <div class="row">
    
    <div class="col-sm-3 si_side" style="border-right:1px solid #EEEEEE">
   <center style="padding-top: 25px;margin-bottom: 45px;" class="si_image">
     <img src="image/profile.png"  style="height: 100px;width: 100px;border-radius: 50%;">

     <p style="color: #6F6F6F;font-size: 13px;margin-top: 8px;">+91 9506682139</p>

   </center>
 
<hr class="hr_one">
<p class="ta_side2 tab_one si_bor"><i class="fas fa-map-marked-alt" style="margin-right: 8px;"></i> My Addresses</p>
<hr class="hr_two">

<p class="ta_side2 tab_two si_bor"> <i class="far fa-sticky-note" style="margin-right: 11px;"></i> My Orders</p>
<hr class="hr_two">
<p class="ta_side2 tab_three si_bor"><i class="fas fa-rupee-sign" style="margin-right: 14px;"></i> My wallet</p>
<hr class="hr_two">
<p class="ta_side2 si_bor"><i class="far fa-user" style="margin-right: 11px;"></i> Logout</p>
<hr class="hr_two">


<div style=" border-left: 1px solid white;
  min-height: 200px;"></div>
  </div>


    <div class="col-sm-9" id="ri_div">


<div class="row tab_one_div">
  <div class="col-sm-12">
   <center style="margin-top: 80px;">
      <img src="image/demo.png" height="230">

      <p style="color: #4F4F4F"><b>You have no saved addresses</b></p>

      <p style="color: #A8A8A8;font-size: 13px;margin-top: -10px;"><b>Tell us where you want your orders delivered</b></p>

      <button class="btn" style="background-color:#F26E21;color: white;margin-top: 9px; ">Add New Address</button>
    </center> 

     
    <div class="card card_new">
  <div class="card-header">
    <i class="fas fa-plus-circle" data-toggle="modal" data-target="#myModal"></i> &nbsp;&nbsp;&nbsp;<b>Add New Address</b>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">
    <p style="font-size: 14px;"><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;<b>Home</b></p>
    <p class="add_tr">arhan khan - sector 18,noida, sauycfas, Sector 18, Noida,arhan khan - sector 18,noida, sauycfas, Sector 18, Noida,sana khan - sector 18,noida, sauycfas, Sector 18, Noida,</p>

    <p class="add_tr2"><a href="" style="color: #929292;margin-right: 25px;" data-toggle="modal" data-target="#myModal">Edit</a> <a href="" style="color: #929292;">Delete</a></p>

    </li>
  </ul>
</div>
<style type="text/css">
       @media only screen and (max-width: 768px) {
        .in_box
      {
        max-width: 100%;
      }
      .in_box2
      {
        max-width: 60%;display: inline-block;
      }
      .in_box3
      {
        max-width: 35%;display: inline-block;margin-left: -20px;
      }

      .in_box4
      {
        max-width: 64.6%;display: inline-block;
      }
      .in_box5
      {
        max-width: 35%;display: inline-block;
      }

      .in_box6
      {
        width: 30%
      }

      .in_box7
      {
        width: 290px;
      }

       }

      
    </style>
<div class="modal" id="myModal" style="margin-top: 40px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        

        <div class="row" style="padding-left: 10px;">
          <div class="col-sm-12">
            <center class="in_box7"><h5>Add New Delivery Address</h5>
        <p style="font-size: 13px;color: #ACACAC">Please enter the accurate address, it will help us to serve you better</p></center>
          </div>
          <div class="col-sm-9 in_box2">
            <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 12px;">Area / Locality</label>
    <input type="password" class="form-control in_box" style="margin-top: -3px;width: 350px;" id="exampleInputPassword1" placeholder="E.g.Sector 32 or Kormangala or Park View Resider">
  </div>
          </div>
          <div class="col-sm-3 in_box3">
            <button class="btn btn-secondary nav_dow_but" type="button" style="margin-top: 27px;color: #F26E21;height: 38px;">
        <i class="far fa-paper-plane" style="font-size: 13px;"></i> Detect
      </button>
          </div>
        </div>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body" style="background-color: #F9F9F9;">
        <div class="row" style="padding-left: 10px;">
          <div class="col-sm-2 in_box5"><div class="form-group">
    <label for="exampleFormControlSelect1" style="font-size: 12px;">Name</label>
    <select class="form-control" id="exampleFormControlSelect1" style="width: 83px;">
      <option>Mr</option>
      <option>Mrs</option>
      <option>Miss</option>
    </select>
  </div></div>

  <div class="col-sm-10 in_box4">
    <div class="form-group">
    
    <input type="password" class="form-control in_box" style="margin-top: 30px;width: 369px;" id="exampleInputPassword1" placeholder="E.g.Sector 32 or Kormangala or Park View Resider">
  </div>
  </div>

  <div class="col-sm-12">
            <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 12px;">Flat / House / Office No.</label>
    <input type="password" class="form-control in_box" style="margin-top: -3px;width: 450px;" id="exampleInputPassword1" placeholder="">
  </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
    <label for="exampleInputPassword1" style="font-size: 12px;">Street / Society / Office Name</label>
    <input type="password" class="form-control in_box" style="margin-top: -3px;width: 450px;" id="exampleInputPassword1" placeholder="">
  </div>
          </div>

          <div class="col-sm-2 in_box6"><div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1" style="font-size: 12.5px;">
    Home
  </label>
</div></div>

<div class="col-sm-2 in_box6"><div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1" style="font-size: 12.5px;">
    Office
  </label>
</div></div>

<div class="col-sm-3 in_box6"><div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1" style="font-size: 12.5px;">
    Other
  </label>
</div></div>

<div class="col-sm-5"></div>

        </div>

        <div class="col-sm-12" style="margin-top: 18px;">
          <button type="button" class="btn" style="background-color: #F26E21;color: white;width: 120px;margin-right: 16px;">Continue</button>
          <button type="button" class="btn" data-dismiss="modal" style="background-color: white;color: #ACACAC;width: 120px;border:1px solid #ACACAC">Cancel</button>
        </div>
      </div>


    </div>
  </div>
</div>
  </div>
</div>


<div class="row tab_two_div" style="display: none;">
  <div class="col-sm-12">
    <center style="margin-top: 80px;">
      <img src="image/demo1.png" height="230">

      <p style="color: #4F4F4F"><b>You have no saved addresses</b></p>

      <p style="color: #A8A8A8;font-size: 13px;margin-top: -10px;"><b>Tell us where you want your orders delivered</b></p>

      <button class="btn" style="background-color:#F26E21;color: white;margin-top: 9px; ">Add New orders</button>
    </center>
  </div>



<div class="col-sm-12">
  <div class="card">
  <ul class="list-group list-group-flush">
    <li class="list-group-item" style="background-color: #F5F5F5;font-size: 14px;"><i class="far fa-clock" style="padding-right: 6px;"></i>Placed Sat,1 Jun,8:11 PM</li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-sm-3">
          <center><b style="color: #A8A8B0;">Delivered</b></center>
        </div>
        <div class="col-sm-5">
          <center><b>Super Store - Indirapuram - &#8377;435</b><br><span style="font-size: 14px;color: #A8A8B0;">Order ID:Orderjv763742657 - 6 items</span>



          </center>
        </div>
        <div class="col-sm-4">
          <center style="font-size: 15px;color: #F26E21;">View 5 items ordered <i class="fas fa-chevron-right"></i></center>
        </div>
      </div>
    </li>
    <script>
$(document).ready(function(){
  $(".show").click(function(){
    $(".divv").show();
    $(".hid").show();
    $(".show").hide();

  });
  $(".hid").click(function(){
    $(".divv").hide();
    $(".hid").hide();
    $(".show").show();
  });
});
</script>
    <li class="list-group-item">
      <center class="show"><span style="font-size: 14px;color: #A8A8B0;cursor: pointer;">view address and biling details <i class="fas fa-chevron-down"></i></span>
    </center>

<div class="row divv" style="display: none;">
  <div class="col-sm-3">
    <span style="font-size: 15px;color: #A8A8B0;">Delivery Address</span> 
  </div>
  <div class="col-sm-9">
    <span style="font-size: 15px;">ipsum Delivery Address lorem dummy lorem ipsum ipsum Delivery Address lorem dummy lorem ipsum</span> 
  </div>

  <div class="col-sm-12" style="border-bottom: 1px solid #DFDFDF;margin-top: 15px;margin-bottom: 15px;"></div>

<div class="col-sm-3">
    <span style="font-size: 15px;color: #A8A8B0;">Payment</span> 
  </div>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-9">
         <span style="font-size: 15px;">Subtotal</span> <br>
         <span style="font-size: 15px;">Delivery Charges</span> <br> 
         <span style="font-size: 15px;">Wallet Amount</span>   
      </div>
      <div class="col-sm-3">
        <span style="font-size: 15px;">&#8377;813</span> <br>
         <span style="font-size: 15px;color: green">Free</span> <br> 
         <span style="font-size: 15px;">-&#8377;13</span>  
      </div>
    </div>
    <div class="col-sm-12" style="border-bottom: 1px solid #DFDFDF;margin-top: 15px;margin-bottom: 15px;"></div>

    <div class="row">
      <div class="col-sm-9">
         <span style="font-size: 15px;"><b>Payable Amount(incl.of all taxes)</b></span>
           
      </div>
      <div class="col-sm-3">
        <span style="font-size: 15px;">&#8377;813</span>   
      </div>
    </div>




  </div>
<div class="col-sm-12" style="border-bottom: 1px solid #DFDFDF;margin-top: 15px;margin-bottom: 15px;"></div>
  <div class="col-sm-3">
    <span style="font-size: 15px;color: #A8A8B0;">Delivery Address</span> 
  </div>
  <div class="col-sm-9">
    <span style="font-size: 15px;">ipsum Delivery Address lorem dummy lorem ipsum ipsum Delivery Address lorem dummy lorem ipsum</span> 
  </div>

  <div class="col-sm-12" style="border-bottom: 1px solid #DFDFDF;margin-top: 15px;margin-bottom: 15px;"></div>
</div>

<center class="hid" style="display: none;"><span style="font-size: 14px;color: #A8A8B0;cursor: pointer;">Hide address and biling details <i class="fas fa-chevron-up"></i></span>
    </center>
        </li>
  </ul>
</div>
</div>





</div>


<div class="row tab_three_div" style="display: none;">
  <div class="col-sm-12">
    <div class="row" style="background-color: #F9F9F9;min-height: 200px;margin-top: 13px;margin-left: .5px;margin-right: .5px;border-radius:5px;">


      <div class="col-sm-12">
        <center>
          <p style="color: #ACACAC;font-size: 13px;margin-top: 22px;"><b>My Balance:</b></p>
          <h2 style="margin-top: -15px;">&#8377;0</h2>
        </center>
      </div> 

<div class="col-sm-6">
  <div class="card" id="car_he" style="height: 90px;">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-2 cash_img"><img src="image/g_cash.png" height="40"></div>
      <div class="col-sm-10 cash_text">
        <p class="cash_p" style="font-size: 14px;color: #444444;"><span style="margin-right: 130px;"><b>Grofers Cash</b></span><span class="cash_p1">&#8377;0</span></p>
        <p style="font-size: 11px;color: #9D9D9D;margin-top: -17px;">100% of this can be used on your next order</p>
        <p style="font-size: 12px;color: #F26E21;;margin-top: -14px;cursor: pointer;" data-toggle="modal" data-target="#myModal21"><b>Know More &nbsp;<i class="fas fa-chevron-right"></i></b></p>
      </div>
    
    </div>   
    
  </div>
</div>
</div>


<div class="modal" id="myModal21" style="top: 150px;">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal body -->
      <div class="modal-body">
       <div class="row" style="padding-right: 10px;">
      <div class="col-sm-2"><img src="image/g_cash.png" height="50"></div>
      <div class="col-sm-9">
        <p style="font-size: 18px;color: #444444;"><span style="margin-right: 130px;"><b>Grofers Cash</b></span></p>
        <p style="font-size: 15px;color: #9D9D9D;margin-top: -17px;">100% of this can be used on your next order</p>
        
      </div>
      <div class="col-sm-1"><span>&#8377;0</span></div>
    
    </div>

    <div class="row" style="padding-left: 16px;padding-right: 16px;">
      <div class="col-sm-6" style="border: 1px solid #9D9D9D;padding-top: 20px;padding-bottom: 20px;border-radius: 4px 0px 0px 4px"><center><h6 style="font-size: 18px;color: #9D9D9D;">Cashback: 0</h6></center></div>
      <div class="col-sm-6" style="border: 1px solid #9D9D9D;padding-top: 20px;padding-bottom: 20px;border-radius: 0px 4px 4px 0px"><center><h6 style="font-size: 18px;color: #9D9D9D;">Refund: 0</h6></center></div>
    </div>

    <button class="btn" data-dismiss="modal" style="background-color:#F26E21;color: white;margin-top: 9px;width: 100%;height: 50px;margin-top: 25px; ">Ok, Got it</button>
      </div>


    </div>
  </div>
</div>






<div class="col-sm-6">
  <div class="card" id="car_he" style="height: 90px;">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-2 cash_img"><img src="image/o_cash.png" height="40"></div>
      <div class="col-sm-10 cash_text">
        <p class="cash_p" style="font-size: 14px;color: #444444;"><span style="margin-right: 130px;"><b>Orange Cash</b></span><span class="cash_p1">&#8377;0</span></p>
        <p style="font-size: 11px;color: #9D9D9D;margin-top: -17px;">Use this to pay for any order</p>
        <a href="wallet.php"><p style="font-size: 12px;color: #F26E21;;margin-top: -14px;"><b>Know More &nbsp;<i class="fas fa-chevron-right"></i></b></p></a>
      </div>
    
    </div>   
    
  </div>
</div>
</div>









    </div>
    
  </div>


<script>
$(document).ready(function(){
  $(".r_w").click(function(){
    $(".r_w_div").hide();
    $(".re_div").show();
  });
  $(".re").click(function(){
   $(".r_w_div").show();
    $(".re_div").hide();
  });
});
</script>
  <div class="col-sm-12">
    <br>
  <center class="re_div" style="display: none;">
    <h4 style="color: #FF7012;">Recharge Wallet</h4>
   <img src="image/food.jpg" height="190" style="margin-top: 10px;"> 

<div class="form-group">
    <label for="formGroupExampleInput"><b>Enter Wallet Amount</b></label>
    <input type="text" class="form-control" style="width: 200px;" id="formGroupExampleInput" placeholder="Enter Amount">
  </div>
<button type="button" class="btn re" style="width: 200px;background-color: #FA5400;color: white;"><i class="fas fa-battery-half"></i> Recharge</button>
  </center>


  <center class="r_w_div">
    <h4 style="color: #FF7012;">Wallet</h4>
   <img src="image/wallet.png" height="190" style="margin-top: 10px;"> 

<div class="form-group">
    <label for="formGroupExampleInput"><b>My Wallet Amount</b></label><br>
    <span><b><span style="background-color:#FA5400;border-radius: 50%;padding: 4px 7px 4px 7px;color: white; ">&#8377;</span> 423</b></span>
  </div>
<button type="button" class="btn r_w" style="width: 200px;background-color: #FA5400;color: white;"> Recharge Wallet</button>
  </center>
</div>





</div>
    </div>
  </div>
</div>




</body>
<?php include("footer.php");?>
</html>
<style type="text/css">
  .active
  {
    background-color: #F9F9F9
  }
</style>
 <script>
  clicked = true;
$(document).ready(function(){

  $(".tab_one").click(function(){
    $(this).addClass('active').siblings().removeClass('active')  
    $(".tab_one_div").show(1000);
     $(".tab_two_div").hide(1000);
     $(".tab_three_div").hide(1000);
     
  });

   $(".tab_two").click(function(){
   $(this).addClass('active').siblings().removeClass('active')  
    $(".tab_two_div").show(1000);
    $(".tab_one_div").hide(1000);     
     $(".tab_three_div").hide(1000);
     
  });

    $(".tab_three").click(function(){
      $(this).addClass('active').siblings().removeClass('active') 
      $(".tab_three_div").show(1000);
    $(".tab_one_div").hide(1000);
     $(".tab_two_div").hide(1000);
     
     
  });

});
</script>