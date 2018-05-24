<!DOCTYPE html>
<html>
<head>
	<link rel="profile" href="#" />
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/tabs.css">
	<link rel="stylesheet" href="/css/mmenu.css">
	<link rel="stylesheet" href="/css/portfolio.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<!-- 	<link type="text/css" rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.7/css/bootstrap.css" media="all"> -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="/js/mmenu.js"></script>
	<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<!-- 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="/js/mmenu.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tnx</title>
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 70%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>
  <div class="main-block">
  		<div class="container">
	<header>
    <div class="col-md-12 head" style="background:none; box-shadow: none;">
     <div class="col-md-4 logo">
					<div class="logo-image row">
						<a href="main.php"><img src="/upload/logonew.png" alt="логотип"/></a>
					</div>
				</div>
      <nav class="col-md-8 menu">
        <ul class="menu-spin">
          <li><a href="mainpage.php" >Главная</a></li>
          <li><a href="testing.php">Подобрать сайт</a></li>
          <li><a href="faq.php">Faq</a></li>
          <li><a href="index.php" class="current">Контакты</a></li>
        </ul>
      </nav>
			<nav id="nav">
					<ul>
						<li><a href="mainpage.php">Главная</a></li>
						<li><a href="siteselection.php">Подобрать сайт</a></li>
						<li><a href="faq.php">Faq</a></li>
						<li><a href="index.php">Контакты</a></li>
						<li><a class="mail-li">info@tanix.by</a></li>
						<li><a class="velcom-li">+375 29 170 12 39</a></li>
						<li><a class="velcom-li">+375 44 737 58 40</a></li>
						<li><a class="mts-li">+375 29 860 13 49</a></li>
						<li><a class="city-mobile">+375 17 395 05 66</a></li>
						<li><a class="location-li">Логойский тракт 22а</a></li>
						<li><a class="clock-li">Пн. - Пт.: 9 00 - 18 00</a></li>
					</ul>
					<span class="menu"></span>
				</nav>
    </div>
</header>
<div class="row section-home">
<section class="col-xs-12 col-sm-6 color-white">
<h1 class="title-contact white-title">Контакты</h1>
	<ul class="contacts">
		<li class="p-li-b">
			<div class="col-md-2 f-phone"><img src="/upload/phone.png"/></div>
			<div class="col-md-6 col-lg-4 p-li p-left-img">+37529 170 12 39 <br>+37544 737 58 40</div>
			<div class="col-md-6 p-li">+37529 860 13 49 <br>+37517 395 05 66</div>
		</li>
		<li><div class="col-md-2 p-img"><img src="/upload/adress.png"/></div><div class="col-md-10 p-adress"><span class="adress">Логойский тракт, 22a, офис 415,<br> Республика Беларусь, 220090, Минск</span></div></li>
		<li><div class="col-md-2 f-email"><img src="/upload/email.png"/></div><div class="col-md-10 p-email"><a class="email">info@tanix.by</a></div></li>
		<li><div class="col-md-2 f-time"><img src="/upload/time.png"/></div><div class="col-md-10 p-time"><span class="time">Время работы: пн. - пт. 9.00 - 18.00</span></div></li>
	</ul>
	
</section>

<section class="col-xs-12 col-sm-6">
<h1 class="title white-title">Оставить заявку</h1>
  		<form id="visit-form" class="form-appointment" method="post">
				<i class="ask fa fa-user"></i>
				<p><input class="send-field send-string" type="text" name="name_field" rows="10" cols="40" required placeholder="Имя"></p>
				<i class="ask fa fa-envelope"></i>
				<p><input class="send-field send-string" type="text" pattern="^[0-9\-\+\s\(\)]*$" name="email_field" rows="10" cols="40" placeholder="E-mail"></p>
				<i class="ask fa fa-phone"></i>
				<p><input class="send-field send-string" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="phone_field" rows="10" cols="40" required placeholder="Телефон"></p>
				<i class="ask fa fa-commenting" ></i>
				<p><textarea class="send-field send-message" type="text" pattern="[A-Za-zА-Яа-яЁё0-9\s]+" placeholder="Ваше сообщение" title="Допустимы латинские и кирилические буквы верхнего и нижнего регистра, цифры от 0 до 9, а также пробелы." name="message_field" rows="10" cols="40" required></textarea></p>
    		<p><input type="submit" class="send-button" value="Отправить"></p>
			</form>
</section>
</div>  
	</div>
					
		</div>
    <div id="map"></div>
    <script>
      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 53.9469155, lng: 27.6133489},
          zoom: 12,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#012a41'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#1a3646'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#8ec3b9'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#64779e'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {lat: 59.327, lng: 18.067}
  });
  marker.addListener('click', toggleBounce);
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7yb6XptEcJFyehb3oNh8S9A7T_Uzmx1w&callback=initMap"
    async defer></script>
	
	<footer class="footer_page" style="background: #012a41">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 unique">

					<div class="logo-image col-md-12">
						<a href="main.php"><img src="/upload/logonew.png" alt="логотип" /></a>
					</div>
				</div>
				<!--.unique-->
				<div class="col foomenu">
					<div class="col-md-12">
					<div class="row">
						<a title="Главная" class="menu_link" href="main.php">Главная</a>
						<a title="Подобрать сайт" class="menu_link" href="siteselection.php">Подобрать сайт</a>
						<a title="Faq" class="menu_link" href="faq.php">Faq</a>
						<a title="Контакты" class="menu_link" href="#index.php">Контакты</a>
					</div>
					</div>
				</div>
				<!--.foomenu-->
				<div class="col-xs-12 col-sm-6 col-md-3 social">
					<div class="social-row">
						<p>Подписаться:
							<a class="vk" href="https://vk.com/tanixgroup" target="_blank" rel="nofollow"><i class="fa fa-vk" aria-hidden="true"></i></a>
							<a class="fb" href="https://www.facebook.com/tanixby" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a class="inst" href="https://www.instagram.com/tanixby" target="_blank" rel="nofollow"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</p>
					</div>

				</div>
				<!--.social-->
				<div class="col-md-6 offset-md-6 creator">
					<a href="//tanix.by/">&copy; 2017 Ӏ Разработано<img alt="tanix.by" title="tanix.by" src="/upload/logofoo.png"></a>
				</div>
			</div>
		</div>

	</footer>
<script>
	
	</script>
</body>
</html>
<!--style="background-image:url(/upload/background.jpg); background-size:cover; padding-top:200px;padding-bottom:200px;"