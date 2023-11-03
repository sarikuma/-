<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Risa's profile site</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" rel="stylesheet" type="text/css" />
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">

    <!-- header -->
    <header class="header">
      <div class="container">
        <h1 class="header-logo">
          <a href="/">RISA SHIMIZU</a>
        </h1>
        <nav class="gnav">
          <ul class="gnav-list">
            <li class="gnav-item"><a href="<?php echo home_url(); ?>/#works">WORKS</a></li>
            <li class="gnav-item"><a href="<?php echo home_url(); ?>/#skill">SKILL</a></li>
            <li class="gnav-item"><a href="<?php echo home_url(); ?>/#about">ABOUT</a></li>
            <li class="gnav-item"><a href="<?php echo home_url(); ?>/#contact">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- header -->