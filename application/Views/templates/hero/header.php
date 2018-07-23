<!DOCTYPE html>
<html lang="en">
<head>
    <!-- These meta tags come first. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?= view('assets/head/title') ?>
    <?= view('assets/head/copyright') ?>
    <meta name="author" content="Kristian Matthews">

    <!-- Open Graph -->
    <?= view('assets/head/opengraph', [], ['saveData' => true]) ?>

    <!-- Twitter -->
    <?= view('assets/head/twitter', [], ['saveData' => true]) ?>

    <!-- GoSquared -->
    <?= view('assets/head/gosquared', [], ['saveData' => true]) ?>

    <!-- Hotjar -->
    <?= view('assets/head/hotjar', [], ['saveData' => true]) ?>

    <!-- Include the CSS -->
    <?= view('assets/head/css') ?>
</head>
<body>

<nav class="navbar navbar-static-top navbar-transparent">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-com">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url() ?>">
                <h1>EpicKris</h1>
            </a>
        </div>
        <div id="navbar-collapse-com" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= site_url('about') ?>">About</a></li>
                <li><a href="<?= site_url('cv') ?>">CV</a></li>
                <li><a href="<?= site_url('portfolio') ?>">Portfolio</a></li>
            </ul>
        </div>
    </div>
</nav>
