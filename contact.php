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
<body>
	<?php include("header.php");?>
  <?php include("searchbar.php");?>
<style type="text/css">
 
.input-field {
  position: relative;

  height: 10px;

}
label {

  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  color: #7A7A7A;
  transition: 0.2s all;
  cursor: text; line-height: 44px;font-size: 17px;
}
input {
  width: 100%;
  border: 0;
  outline: 0;
  padding: 0.5rem 0;
  border-bottom: 2px solid #7A7A7A;
  box-shadow: none;
  color: #7A7A7A;
}
input:invalid {
  outline: 0;
  // color: #7A7A7A;
  //   border-color: #E96125;
}
input:focus,
input:valid {
  border-color: #E96125;
}
input:focus~label,
input:valid~label {
  font-size: 14px;
  top: -24px;
  color: #E96125;
}
textarea:focus,
textarea:valid {
  border-color: yellow;
}
</style>
<br>

<div class="container toto" style="margin-top: 40px;">
  <div class="row">
    <div class="col-sm-3" ></div>

    <div class="col-sm-6" style="box-shadow: 5px 5px 5px 5px #eee;padding: 20px 30px 20px 30px;border-top: 8px solid #E96125;border-left: 4px solid #E96125;">
<center>
  <h3>Please Contact Us</h3>
<br>
</center>
<form action="">
  <div class="input-field">
    <input type="text" id="name" required />
    <label for="name">Name:</label>
  </div>

  <div class="input-field" style="margin-top: 55px;">
    <input type="text" id="name1" required />
    <label for="name1">Email:</label>
  </div>

  <div class="input-field" style="margin-top: 55px;">
    <input type="text" id="name2" required />
    <label for="name2">Phone:</label>
  </div>

  <div class="input-field" style="margin-top: 55px;">
    <input type="text" id="name3" required />
    <label for="name3">Publication/Company Name:</label>
  </div>


  <div class="input-field" style="margin-top: 55px;">
    <input type="text" id="name4" required />
    <label for="name4">Subject:</label>
  </div>
  <br><br><br>
<p style="font-size: 17px;color: #7A7A7A">Add your message</p>
  <textarea rows="2" name="comment" form="usrform" style="padding: 10px;width: 100%;border-top: 0;border-left: 0;border-right: 0;border-bottom: 2px solid #7A7A7A;margin-top: -20px;outline: none;">
</textarea>

<center><a href="#" class="btn" style="background-color: #F26E21;color: white;width: 180px;height: 45px;padding-top: 8px;margin-top: 30px;margin-bottom: 30px;"><b>Submit</b></a></center>
</form>


    </div>

    <div class="col-sm-3"></div>
  </div>
</div>




  <br><br><br>
</body>
<?php include("footer.php");?>
</html>
