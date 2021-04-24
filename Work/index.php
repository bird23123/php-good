<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<div class="container">
			<div class="header-top">
				<div class="header-top-lang">
					<?php
					if (isset($_SESSION["user_name"])) {
						echo "<a href='home.php' target='_blank' class='header-top-lang__item'>HOME</a>";
						echo "<a href='logout.php' target='_blank' class='header-top-lang__item'>Log out</a>";
					} else {
						echo "<a href='home.php' target='_blank' class='header-top-lang__item'>HOME</a>";
						echo "<a href='logout.php' target='_blank' class='header-top-lang__item'>Log out</a>";
						echo "<a href='login.php' target='_blank' class='header-top-lang__item'>Sign in</a>";
						echo "<a href='signup.php' target='_blank' class='header-top-lang__item'>Sign up</a>";
					}
					?>
				</div>
				<a href="" class="header-top__link">Online Ordering</a>
			</div>
			<div class="header-bottom">
				<div class="header-bottom__column center">
					<nav class="header-bottom-menu">
						<ul class="header-bottom-menu-list">
							<li>
								<a href="" class="header-bottom-menu__link">ABOUT</a>
							</li>
							<li>
								<a href="" class="header-bottom-menu__link">MENUS</a>
							</li>
							<li>
								<a href="" class="header-bottom-menu__link">SERVICE INFO</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-bottom__column">
					<div class="header-logo">
						<span class="header-logo__text">NYC'S</span>
						<a href="" class="header-logo__image"><img src="img/logo@1X.png" alt=""></a>
						<span class="header-logo__text">Catering</span>
					</div>
				</div>
				<div class="header-bottom__column center">
					<nav class="header-bottom-menu header-bottom-menu--right">
						<ul class="header-bottom-menu-list">
							<li>
								<a href="" class="header-bottom-menu__link">Gallery</a>
							</li>
							<li>
								<a href="" class="header-bottom-menu__link">Friends</a>
							</li>
							<li>
								<a href="" class="header-bottom-menu__link">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<div class="content">
		<div class="private">
			<div class="private__column">
				<div class="private-ibg"></div>
			</div>
			<div class="private__column">
				<div class="private-body">
					<div class="private-body-content">
						<div class="private-body__title">Private catering</div>
						<div class="private-body__text">Treat your guests to a beautifully plated dinner, hand-crafted canapes or a casual BBQ. Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse vel blanditiis voluptatem similique maxime, molestias quasi, modi vero quod asperiores est a! Dolores quae totam cum incidunt animi quasi iste veritatis, debitis illo molestiae recusandae, delectus ipsam maiores a ut vel et aut velit eum molestias magni obcaecati eos iusto. </div>
						<div class="private-body__buttons">
							<a href="" class="private-body-buttons__item firstbtn">Get a quote</a>
							<a href="" class="private-body-buttons__link">View menus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="products">
			<div class="container">
				<div class="products-body">
					<div class="products__column">
						<div class="products-item">
							<div class="products-item__image first"></div>
							<div class="products-item__title">Corporate Catering</div>
							<div class="products-item__text">We are able to serve events from 2 to 2000 guests and always reasonable prices.</div>
							<a href="" class="products-item__btn btn">Get a quote</a>
							<a href="" class="products-item__link">View menus</a>
						</div>
					</div>
					<div class="products__column">
						<div class="products-item">
							<div class="products-item__image second"></div>
							<div class="products-item__title">Private Catering</div>
							<div class="products-item__text">Fresh, seasonal and simple cuisine. Food is our business and our passion.</div>
							<a href="" class="products-item__btn btn">Get a quote</a>
							<a href="" class="products-item__link">View menus</a>
						</div>
					</div>
					<div class="products__column">
						<div class="products-item">
							<div class="products-item__image third"></div>
							<div class="products-item__title">Wedding Catering</div>
							<div class="products-item__text">We use only the best organic ingredients and gluten and dairy free cooking.</div>
							<a href="" class="products-item__btn btn btn-r">Get a quote</a>
							<a href="" class="products-item__link">View menus</a>
						</div>
					</div>
					<div class="products__column">
						<div class="products-item">
							<div class="products-item__image fourth"></div>
							<div class="products-item__title">Online Ordering</div>
							<div class="products-item__text">Successful catering is about organisation, high quality service, and great food.</div>
							<a href="" class="products-item__btn btn btn-r">Get a quote</a>
							<a href="" class="products-item__link">View menus</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="why">
			<div class="why-top">
				<div class="why-top__column">
					<div class="why-top__text">Why Choose us?</div>
				</div>
				<div class="why-top__column">
					<div class="why-top__image"></div>
				</div>
			</div>
			<div class="why-body">
				<div class="container">
					<div class="why-body-row">
						<div class="why-body__column">
							<div class="why-body-item">
								<div class="why-body-item__icon"><i class="fas fa-dog"></i></div>
								<div class="why-body-item__body">
									<div class="why-body-item-body__title">Always fresh</div>
									<div class="why-body-item-body__text">Fresh, seasonal and simple cuisine. Food is our business and our passion.</div>
								</div>
							</div>
						</div>
						<div class="why-body__column">
							<div class="why-body-item">
								<div class="why-body-item__icon"><i class="fas fa-cat"></i></div>
								<div class="why-body-item__body">
									<div class="why-body-item-body__title">Clean and Healthy</div>
									<div class="why-body-item-body__text">We use only the best organic ingredients and gluten and dairy free cooking.</div>
								</div>
							</div>
						</div>
						<div class="why-body__column">
							<div class="why-body-item">
								<div class="why-body-item__icon"><i class="fas fa-leaf"></i></div>
								<div class="why-body-item__body">
									<div class="why-body-item-body__title">fits any size and budget</div>
									<div class="why-body-item-body__text">We are able to serve events from 2 to 2000 guests and always at reasonable prices.</div>
								</div>
							</div>
						</div>
						<div class="why-body__column">
							<div class="why-body-item">
								<div class="why-body-item__icon"><i class="fas fa-history"></i></div>
								<div class="why-body-item__body">
									<div class="why-body-item-body__title">Reliable AND Flawless</div>
									<div class="why-body-item-body__text">Successful catering is about organisation, high quality service, and great food.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contacts">
			<div class="contacts-top">
				<div class="container">
					<div class="contacts__title">Say Hello</div>
					<div class="contacts-body">
						<div class="contacts-body__column">
							<a href="https://www.google.ru/maps/place/%D0%9F%D0%B8%D1%80%D1%81+%D0%A1%D0%B0%D0%BD%D1%82%D0%B0-%D0%9C%D0%BE%D0%BD%D0%B8%D0%BA%D0%B8/@34.0097108,-118.4960018,18z/data=!4m13!1m7!3m6!1s0x80c2a4d011b77e45:0x3e21e5dd9b286b11!2zMTQxNSBPY2VhbiBBdmUsIFNhbnRhIE1vbmljYSwgQ0EgOTA0MDEsINCh0KjQkA!3b1!8m2!3d34.0138683!4d-118.4971899!3m4!1s0x80c2a4d74d5ea79b:0xcd9a111aced18f4d!8m2!3d34.0099215!4d-118.4960063" target="__blank" class="contacts-body__item contacts-body__item--1">200 Santa Monica Pier, Santa Monica, CA 90401, USA</a>
						</div>
						<div class="contacts-body__column">
							<a href="mailto:goldmedal2016@mail.ru" target="__blank" class="contacts-body__item contacts-body__item--2">contact@primeone.com</a>
						</div>
						<div class="contacts-body__column">
							<a href="" target="__blank" class="contacts-body__item contacts-body__item--3">(718) 777-7777</a>
						</div>
						<div class="contacts-body__column">
							<div class="contacts-social">
								<a href="https://animego.org/anime/neobyatnyy-okean-a645" target="__blank" class="contacts-social__item contacts-social__item--1"><i class="fab fa-facebook-f"></i></a>
								<a href="https://animego.org/anime/magicheskaya-bitva-a1635" target="__blank" class="contacts-social__item contacts-social__item--2"><i class="fab fa-google-plus-g"></i></a>
								<a href="https://vk.com/swimmerangara2" target="__blank" class="contacts-social__item contacts-social__item--3"><i class="fab fa-vk"></i></a>
								<a href="https://www.youtube.com/watch?v=Ua5UARWRYLA" target="__blank" class="contacts-social__item contacts-social__item--4"><i class="fab fa-youtube"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="contacts-content">
				<div class="contacts-content__column">
					<div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.367984284131!2d-118.50000628431297!3d34.008764130617664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2a4d74d5ea79b%3A0xcd9a111aced18f4d!2z0J_QuNGA0YEg0KHQsNC90YLQsC3QnNC-0L3QuNC60Lg!5e0!3m2!1sru!2sru!4v1615705882415!5m2!1sru!2sru" width="100%" height="100%" style="border:0;" allowfullscreen="allowfullscreen" loading="lazy"></iframe>
					</div>
				</div>
				<div class="contacts-content__column">
					<div class="contacts-content-form">
						<div class="contacts-content-form__title">Get in touch</div>
						<form action="#" class="contacts-content-form-body">
							<div class="contacts-content-form-line">
								<input autocomplete="off" type="text" placeholder="Name" name="form[]" class="input">
							</div>
							<div class="contacts-content-form-line">
								<input autocomplete="off" type="text" placeholder="E-mail or phone number" name="form[]" class="input">
							</div>
							<div class="contacts-content-form-line">
								<textarea autocomplete="off" placeholder="Your message" name="form[]" class="input"></textarea>
							</div>
							<div class="contacts-content-form-button">
								<button type="submit" class="form__btn firstbtn">Send message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
	<footer>
		<div class="container">
			<div class="footer">
				<div class="footer-left">© PrimeOne Catering 2021. <a href="" class="tdu">Terms & Conditions</a></div>
				<div class="footer-right"><img src="img/logo@1X.png" alt=""></div>
			</div>
		</div>
	</footer>
</body>

</html>