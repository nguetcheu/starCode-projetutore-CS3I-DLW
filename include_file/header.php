<?php 
echo '<header class="site-navbar py-4 bg-white" role="banner">

<div class="container">
  <div class="row align-items-center">
    
    <div class="col-11 col-xl-2">
      <h1 class="mb-0 site-logo"><a href="index.php" class="text-black h2 mb-0">starCode</a></h1>
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="work.php">Work</a></li>
          <li class="has-children">
            <a href="services.php">Services</a>
            <ul class="dropdown">
              <li><a href="services.php">Web Applications</a></li>
              <li><a href="services.php">WordPress Dev</a></li>
              <li><a href="services.php">Mobile Applications</a></li>
              <li><a href="services.php">eCommerce</a></li>
            </ul>
          </li>
          <li><a href="about.php">About</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
</div>

</header>';
?>