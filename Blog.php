<!DOCTYPE html>
<html>
<head>
	<title>Blog - My Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="logo">
			<img src="logo.png" alt="My Website">
		</div>
		<nav>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Blog</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
	</header>
	<main class="blog">
		<section class="posts">
			<article>
				<img src="post-image-1.jpg" alt="Post Image">
				<h2><a href="#">Title of Blog Post 1</a></h2>
				<p>Excerpt from blog post 1 goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="read-more">Read More</a>
			</article>
			<article>
				<img src="post-image-2.jpg" alt="Post Image">
				<h2><a href="#">Title of Blog Post 2</a></h2>
				<p>Excerpt from blog post 2 goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="read-more">Read More</a>
			</article>
			<article>
				<img src="post-image-3.jpg" alt="Post Image">
				<h2><a href="#">Title of Blog Post 3</a></h2>
				<p>Excerpt from blog post 3 goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<a href="#" class="read-more">Read More</a>
			</article>
		</section>
		<aside class="sidebar">
			<form>
				<label for="search">Search:</label>
				<input type="text" id="search" name="search">
				<button type="submit">Go</button>
			</form>
			<h3>Categories</h3>
			<ul>
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
			</ul>
		</aside>
	</main>
	<footer>
		<p>&copy; My Website 2023. All Rights Reserved.</p>
	</footer>
</body>
</html>