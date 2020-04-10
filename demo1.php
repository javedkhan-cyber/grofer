
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<script>
$(function() {
  $("#refresh").click(function() {
     $("#Container").load("demo1.php")
  })
})
</script>

 


  <div id="Container"><input type="text" name=""></div>

<a href="#" id="refresh">click</a>