<?php

require 'database.php';

$sql = "SELECT * FROM films WHERE isOriginal = 1";
$originals = mysqli_fetch_all(mysqli_query($conn, $sql), MYSQLI_ASSOC);


print_r($originals);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Netflix Clone</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" async></script>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- nav -->
	<div id="nav" class="nav">
		<img class="nav__logo" src="images/netflix-logo.png" alt="" />

		<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<img class="nav__avatar" src="images/netflix-avatar.png" alt="" />
		</a>




	</div>

	<!-- header -->
	<header class="banner">
		<div class="banner__contents">
			<h1 class="banner__title">Money Heist</h1>
			<div class="banner__buttons">
				<button class="banner__button">Play</button>
				<button class="banner__button">My List</button>
			</div>
			<h1 class="banner__description">
				To carry out the biggest heist in history, a mysterious man called The Professor recruits
				a band of eight robbers who have a single characteristic: n...
			</h1>
		</div>
		<div class="banner--fadeBottom"></div>
	</header>

	<!-- Netflix Originals -->
	<div class="row">
		<h2>NETFLIX ORIGINALS</h2>
		<div class="row__posters">
			<?php foreach ($originals as $original) : ?>
				<img class="row__poster row__posterLarge" src="images/<?php echo $original["image"] ?>" alt="" />
			<?php endforeach; ?>
		</div>
	</div>

	<!-- Trending Now -->
	<div class="row">
		<h2>Trending Now</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Top Rated -->
	<div class="row">
		<h2>Top Rated</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Action Movies -->
	<div class="row">
		<h2>Action Movies</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Comedy Movies -->
	<div class="row">
		<h2>Comedy Movies</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Horror Movies -->
	<div class="row">
		<h2>Horror Movies</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Romance Movies -->
	<div class="row">
		<h2>Romance Movies</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<!-- Documentaries -->
	<div class="row">
		<h2>Documentaries</h2>
		<div class="row__posters">
			<img class="row__poster" src="images/small-movie1.jpg" alt="" />

			<img class="row__poster" src="images/small-movie2.jpg" alt="" />

			<img class="row__poster" src="images/small-movie3.jpg" alt="" />

			<img class="row__poster" src="images/small-movie4.jpg" alt="" />

			<img class="row__poster" src="images/small-movie5.jpg" alt="" />

			<img class="row__poster" src="images/small-movie6.jpg" alt="" />

			<img class="row__poster" src="images/small-movie7.jpg" alt="" />

			<img class="row__poster" src="images/small-movie8.jpg" alt="" />
		</div>
	</div>

	<script>
		const nav = document.getElementById('nav');
		window.addEventListener('scroll', () => {
			if (window.scrollY >= 100) {
				nav.classList.add('nav__black');
			} else {
				nav.classList.remove('nav__black');
			}
		});
	</script>
</body>

</html>