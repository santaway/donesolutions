<!DOCTYPE html>
<html>
<head>
	<link rel="profile" href="#" />
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/slider.css">
	<link rel="stylesheet" href="/css/portfolio.css">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.css" media="all">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tnx</title>
</head>
<nav id="nav">
		<ul>
	    <li><a href="#">Главная</a></li>
	    <li><a href="#">Подобрать сайт</a></li>
	    <li><a href="#">Faq</a></li>
	    <li><a href="#">Контакты</a></li>
		</ul>
		<span class="menu"></span>
	</nav>
	<div class="background-fade"> </div>

	<section id="section">
		<header>
		  <h1>Lorem Ipsum</h1>
		</header>

    <article>
        <h1>Lorem ipsum</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec purus neque, adipiscing malesuada lectus non, ullamcorper gravida augue. Donec rutrum augue eu dolor cursus, id luctus felis tincidunt. Pellentesque consectetur luctus dui quis adipiscing. Donec volutpat varius nulla, pretium vestibulum quam imperdiet et.</p>
    </article>

    <article>
        <h1>Pellentesque consectetur luctus</h1>
        <p>Nullam magna mauris, tempus a tellus varius, hendrerit mattis neque. Duis lacinia commodo magna eget scelerisque. Integer molestie fermentum nisl a bibendum. Donec congue, diam nec commodo elementum, tortor mauris vestibulum erat, adipiscing aliquet enim quam sit amet nulla.</p>
    </article>

    <article>
        <h1>Nullam magna mauris</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec purus neque, adipiscing malesuada lectus non, ullamcorper gravida augue. Donec rutrum augue eu dolor cursus, id luctus felis tincidunt. Pellentesque consectetur luctus dui quis adipiscing.</p>
    </article>

    <article>
        <h1>Pellentesque consectetur luctus</h1>
        <p>Nullam magna mauris, tempus a tellus varius, hendrerit mattis neque. Duis lacinia commodo magna eget scelerisque. Integer molestie fermentum nisl a bibendum. Donec congue, diam nec commodo elementum, tortor mauris vestibulum erat, adipiscing aliquet enim quam sit amet nulla.</p>
    </article>

    <article>
        <h1>Lorem ipsum</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec purus neque, adipiscing malesuada lectus non, ullamcorper gravida augue. Donec rutrum augue eu dolor cursus, id luctus felis tincidunt. Pellentesque consectetur luctus dui quis adipiscing. Donec volutpat varius nulla, pretium vestibulum quam imperdiet et.</p>
    </article>

    <article>
        <h1>Nullam magna mauris</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec purus neque, adipiscing malesuada lectus non, ullamcorper gravida augue. Donec rutrum augue eu dolor cursus, id luctus felis tincidunt. Pellentesque consectetur luctus dui quis adipiscing.</p>
    </article>

  </section>
<style>
  *{
    font-family: Arial, Verdana, Helvetica, sans-serif;
    font-size: 16px;
    transition: all .5s linear;
}

html, body {
    overflow-x: hidden;
}

/*Menu*/
.background-fade{
    display: none;
    height: 100%;
    width: 100%;
    position: fixed;
    background: black;
    opacity: 0.7;
}

.background-fade.active{
  display: block;
}

nav#nav{
  z-index: 1;
  display: block;
  position: fixed;
  padding: 0px 0px 0px 0px;
  top: 0;
  left: -261px;
  height: 100%;
  border-right: 1px solid #707070;
  transition: left 1.5s;
  animation-duration: 2s;
  transform: translate(0px, 0px);
  transition-duration: 1s, 1s;
      -webkit-transform: translate(0px, 0px);
      -webkit-transition-duration: 1s, 1s;
      -moz-transform: translate(0px, 0px);
      -moz-transition-duration: 1s, 1s;
      -o-transition: translate(0px, 0px);
      -o-transition-duration: 1s, 1s;
      -ms-transform: translate(0px, 0px);
      -ms-transition-duration: 1s, 1s;
}

nav#nav.active{
  z-index: 1;
  left: 0px;
  transition: left 1s;
  animation-duration: 2s;
  transition-duration: 1.5s, 1.5s;
  transform: translate(0px, 0px);
      -webkit-transform: translate(0px, 0px);
      -webkit-transition-duration: 1.5s, 1.5s;
      -moz-transform: translate(0px, 0px);
      -moz-transition-duration: 1.5s, 1.5s;
      -o-transform: translate(0px, 0px);
      -o-transition-duration: 1.5s, 1.5s;
      -ms-transform: translate(0px, 0px);
      -ms-transition-duration: 1.5s, 1.5s;
}

nav#nav ul{
  background: #000;
  list-style-position: inside;
  list-style-type: none;
  width: 260px;
  height: 100%;
  margin: 0px auto 0px auto;
  padding: 10px 0px 10px 0px;
}

nav#nav li{
  margin: 0px auto 10px auto;
  padding: 10px 30px 10px 30px;
  cursor: pointer;
}

nav#nav li a {
    color: #FFF;
    text-decoration: none;
    cursor: pointer;
}

nav#nav li:hover{
    background: #FFF;
    color: #000;
}

nav#nav li:hover a{
    color: #000;
}

nav#nav.active span.menu{
    background: #000;
    border-color: white;
}

nav#nav.active span.menu:before{
    background: #fff;
    box-shadow: 0 .45em 0 0 #fff, 0 .9em 0 0 #fff;
}

span.menu {
    width: 40px;
    height: 32px;
    display: block;
    vertical-align: middle;
    position: relative;
    text-indent: -9999px;
    overflow: hidden;
    cursor: pointer;
    background: #FFF;
    border: 1px solid #000;
    position: absolute;
    right: -50px;
    top: 15px;
    border-radius: 5px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -ms-border-radius: 5px;
}

span.menu:before {
    content: "";
    display: block;
    margin: 7px auto;
    width: 80%;
    height: 0.25em;
    background: #000;
    box-shadow: 0 .45em 0 0 #000, 0 .9em 0 0 #000;
}
/*Menu*/

/*Section*/
section#section {
    background: #fff;
}

section#section header{
    background: #808080;
    overflow: hidden;
}

section#section header h1{
    text-align: center;
    font-size: 1.5em;
    color: #FFF;
}
/*Section*/

/*Article*/
article{
    margin: 10px auto;
    padding: 0px 10px;
}
/*Article*/

</style>
<script>
$(document).ready(function() {

  $("span.menu").on('click', function(event){
    clickAction.menuClick($(this).closest("nav"));
  });

  $(".background-fade").on('click', function(){
    clickAction.backgroundClick($(this));
  });

  $("nav#nav ul > li").on('click', function(event){
    clickAction.linkClick();
  });

}); //End - ready

var clickAction = (function(){

  return{

    menuClick: function(content){

      content.toggleClass("active");
      $(".background-fade").toggleClass("active");

    },

    backgroundClick: function(backgrondFade){

      backgrondFade.toggleClass("active");
      $("nav#nav").toggleClass("active");

    },

    linkClick: function(clickLink){

      $("nav#nav").toggleClass("active");
      $(".background-fade").toggleClass("active");

    }

  }//end return

})(); // end clickAction

</script>