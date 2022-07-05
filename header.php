<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body>
  <?php wp_body_open(); ?>
  <main>
    <header>
      <div class="headerwrapper">
        <hgroup>
          <h1>Flowers</h1>
          <h2>-Hanakotoba-</h2>
        </hgroup>
        <div class="spnavbtn sp">
          <img src="images/menu.svg" alt="">
        </div>
        <div class="navcontent pc">
          <?php get_search_form(); ?>
          <nav>
            <ul>
              <li>Top</li>
              <li>Flowers</li>
              <li>About</li>
              <li>Contact</li>
            </ul>
          </nav>
        </div>
        <div class="spnav sp">
          <nav>
            <ul>
              <li>
              <?php get_search_form(); ?>
              </li>
              <li>Top</li>
              <li>Flowers</li>
              <li>About</li>
              <li>Contact</li>
            </ul>
          </nav>
        </div>
      </div>
    </header>