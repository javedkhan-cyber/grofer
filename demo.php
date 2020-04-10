<style type="text/css">
    * {
  box-sizing: border-box;
}

body {
  font: 300 100% 'Helvetica Neue', Helvetica, Arial;
}

.container {
  width: 50%;
  margin: 0 auto;
}

ul li {
  display: inline;
  text-align: center;
}

a {
  display: inline-block;
  width: 25%;
  padding: .75rem 0;
  margin: 0;
  text-decoration: none;
  color: #333;
}

.two:hover ~ hr {
  margin-left: 25%;
}

.three:hover ~ hr {
  margin-left: 50%;
}

.four:hover ~ hr {
  margin-left: 75%;
}

hr {
  height: .25rem;
  width: 25%;
  margin: 0;
  background: tomato;
  border: none;
  transition: .3s ease-in-out;
}
</style>
<div class="container">
  <ul>
    <li class="one"><a href="#">Uno</a></li><!--
 --><li class="two"><a href="#">Dos</a></li><!--
 --><li class="three"><a href="#">Tres</a></li><!--
 --><li class="four"><a href="#">Quatro</a></li>
    <hr />
  </ul>
</div>