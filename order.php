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
</head>
<body style="background-color: #F9F9F9;">
	<?php include("header.php");?>
  <?php include("searchbar.php");?>

<br>

<div class="container toto" style="margin-top: 10px;">
  <div class="row">
    <div class="col-sm-1" ></div>

    <div class="col-sm-10 shadow rounded" style="background-color: white;padding-top: 30px;padding-bottom: 20px;">
<i class="fas fa-chevron-left" style="color: #F26E21;"> Back</i>
<br><br>
<div class="row">
  <div class="col-sm-8">
    <div class="card">
  <div class="card-header">
    <b>Super Store - Indirapuram</b><br><span style="font-size: 14px;color: #A8A8B0;">Order ID:Orderjv763742657 - 6 items</span>
  </div>
  <ul class="list-group list-group-flush">
   <div class="row" id="ta_one" style="margin-left: 20px;margin-top: 20px;width: 93%;">
  <table id="ta_one" class="table table-hover table-condensed">
            <thead id="ta_one">
            <tr>
              <th style="width:70%">Product</th>
              <th style="width:5%">Quantity</th>
              <th style="width:25%" class="text-center">Price</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-4"><img src="image/p1.jpg" style="height: 80px;max-width: 100%;" alt="..." class="img-responsive"/></div>
                  <div class="col-sm-8">
                    <h5 class="nomargin hea1_font" style="color: #DC5326">Product 1</h5>
                    <p style="font-size: 14px;">Quis aute iure reprehenderit.</p>
                  </div>
                </div>
              </td>
              
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">150.00</td>
              
            </tr>

             <tr>
              <td data-th="Product">
                <div class="row">
                  <div class="col-sm-4"><img src="image/p3.jpg" style="height: 80px;max-width: 100%;" alt="..." class="img-responsive"/></div>
                  <div class="col-sm-8">
                    <h5 class="nomargin hea1_font" style="color: #DC5326">Product 2</h5>
                    <p style="font-size: 14px;">Quis aute iure reprehenderit.</p>
                  </div>
                </div>
              </td>
              
              <td data-th="Quantity">
                <input type="number" class="form-control text-center" value="1">
              </td>
              <td data-th="Subtotal" class="text-center">150.00</td>
              
            </tr>
          </tbody>
          
        </table>
  
</div>
  </ul>
</div>
  </div>
  <div class="col-sm-4">
<div class="card">
  <ul class="list-group list-group-flush">
    
    <li class="list-group-item">
   <div class="row">
     <div class="col-sm-9"><span style="font-size: 14px;">Subtotal</span><br>
     <span style="font-size: 14px;">Delivery Charges</span>
   </div>
     <div class="col-sm-3">
     <span style="font-size: 14px;">&#8377;813</span><br>
     <span style="font-size: 14px;color: green;font-weight: bold;">Free</span></div>
   </div>
    </li>
    <li class="list-group-item"><span style="font-size: 14px;font-weight: bold;">Total Amount</span> <span style="float: right;margin-right: 5px;font-weight: bold;">&#8377;813</span></li>
  </ul>
</div>
  </div>
</div>

    </div>

    <div class="col-sm-1"></div>
  </div>
</div>




  <br><br><br>
</body>
<?php include("footer.php");?>
</html>
