<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- CSS -->
	<link rel="stylesheet" href="<?= cdn_url('css/epickris.css') ?>">
</head>

<body>

<nav class="navbar navbar-full navbar-dark bg-inverse">
	<ul class="nav navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="<?= site_url() ?>">Home<?php if (isset($nav)) if ($nav === 'home'): ?> <span
						class="sr-only">(current)<?php endif; ?></span></a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="<?= site_url('about') ?>">About<?php if (isset($nav)) if ($nav === 'about'): ?>
				<span class="sr-only">(current)<?php endif; ?></span></a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="<?= site_url('cv') ?>">CV<?php if (isset($nav)) if ($nav === 'cv'): ?> <span
						class="sr-only">(current)<?php endif; ?></span></a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="<?= site_url('portfolio') ?>">Portfolio<?php if (isset($nav)) if ($nav ===
				'portfolio')
				: ?> <span class="sr-only">(current)<?php endif; ?></span></a>
		</li>
	</ul>
</nav>

<?= $body ?>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>

</body>

</html>