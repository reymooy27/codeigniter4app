<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./home.css">
  <title>Home</title>
</head>

<body>
  <div class='wraper'>
    <div class='logo'>
      <span>reymooy</span>
    </div>
    <nav id='nav'>
      <div class='navigation'>
        <a href=<?= base_url('/') ?>>home</a>
        <a href=<?= base_url('/profile') ?>>profile</a>
        <a href=<?= base_url('/contact') ?>>contact</a>
      </div>
    </nav>
    <div id='btn' class='menu'>
      <img src="./iconmonstr-menu-thin-240.png" alt="">
    </div>
  </div>