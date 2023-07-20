<?php
session_start();
include('./components/nav.php'); ?>
		<div class="slider">
			<div id="slide1" class="slide"><img src="https://img.freepik.com/free-photo/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.jpg?w=2000"></div>
			<div id="slide2" class="slide"><img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823__340.jpg"></div>
			<div id="slide3" class="slide"><img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111-1500x1000.jpg"></div>
			<div id="slide1" class="slide"><img src="https://img.freepik.com/free-photo/wide-angle-shot-single-tree-growing-clouded-sky-during-sunset-surrounded-by-grass_181624-22807.jpg?w=2000"></div>
			<div id="slide2" class="slide"><img src="https://cdn.pixabay.com/photo/2015/12/01/20/28/road-1072823__340.jpg"></div>
			<div id="slide3" class="slide"><img src="https://iso.500px.com/wp-content/uploads/2016/03/stock-photo-142984111-1500x1000.jpg"></div>
		</div>
	<section id="hero">
		<div class="hero-text">
			<h1>Welcome to our website</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat, odio sed tristique feugiat, risus nulla porttitor turpis, vel dictum eros felis sit amet metus.</p>
			<a href="#" class="btn">Learn More</a>
		</div>
	</section>

	<section id="about">
		<div class="about-text">
			<h2>About Us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat, odio sed tristique feugiat, risus nulla porttitor turpis, vel dictum eros felis sit amet metus.</p>
		</div>
	</section>

	<section id="services">
		<div class="services-text">
			<h2>Our Services</h2>
			<ul>
				<li>Web Design</li>
				<li>Web Development</li>
				<li>Search Engine Optimization</li>
				<li>Social Media Marketing</li>
				<li>Mobile App Development</li>
			</ul>
		</div>
	</section>

	<section id="contact">
		<div class="contact-text">
			<h2>Contact Us</h2>
			<form method="post" action="#">
				<label>Name:</label>
				<input type="text" name="name" required><br>
				<label>Email:</label>
				<input type="email" name="email" required><br>
				<label>Message:</label>
				<textarea name="message" required></textarea><br>
				<input type="submit" value="Send">
			</form>
		</div>
	</section>

	<footer>
		<p>&copy; 2023 Five Section Page. All rights reserved.</p>
	</footer>
	<script>
function windowReady() {
  var slides = document.getElementsByClassName("slide");
  var numSlides = slides.length;
  var i = 0;

  setInterval(() => {
    slides[i].classList.remove("active");
    i = (i + 1) % numSlides;
    slides[i].classList.add("active");
  }, 3000);
}


    window.onload = windowReady;
  </script>
</body>
</html>

