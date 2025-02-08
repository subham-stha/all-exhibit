<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title><? wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <!-- header starts -->
    <header>
      <div class="container">
        <nav class="navbar navbar-expand-xl">
          <a class="navbar-brand" href="<?php echo home_url();?>"
            ><img src="<?= get_template_directory_uri();?>/assets/img/logo.svg" alt="logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon">
              <span class="icon-bar icon-bar-1"></span>
              <span class="icon-bar icon-bar-2"></span>
            </span>
          </button>
          <div class="collapse main-navbar navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Locations</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href=""> Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Blog </a>
              </li>
            </ul>
            <ul class="header-btn">
              <li class="nav-item">
                <a class="btn-primary" href="#"> Place an Order </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
