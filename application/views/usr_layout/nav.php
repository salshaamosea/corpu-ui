<!-- Header Section -->
<!-- Header Start -->
<header class="site-header">
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <a href="<?= base_url() ?>home/index" class="navbar-brand"><img src="<?= base_url() ?>public/assets/img/logocorp.png" alt="" style="width: 35px;height: 35px;">
      </a>
      <span class="brand-text font-weight">Learning Data Analytics </span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="lni-menu"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
          <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="navbarDropdown" href="#hero-area">
              Overview
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>home/all_in_one">All In One</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/performance">Performance</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/distributionSkill">Distribution Skill</a>
              <!-- <a class="dropdown-item" href="<?= base_url() ?>home/trainingSummary">Training Summary</a> -->
              <a class="dropdown-item" href="<?= base_url() ?>home/ubpp_overview">UBPP</a>
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Details
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>home/academy1">NITS</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy2">CONSUMER</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy3">WS & INTERNATIONAL</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy4">ENTERPRISE</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy5">DSP</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy6">LEADERSHIP</a>
              <a class="dropdown-item" href="<?= base_url() ?>home/academy7">BUSINESS ENABLER</a>
            </div>
            
          </li> -->

          <li class=" nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?= base_url() ?>home/details"  role="button" aria-haspopup="true" aria-expanded="false">
              Details
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?= base_url() ?>home/ubpp_detail">UBPP</a>
            </div>
          </li>

          <!-- <li class=" nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?= base_url() ?>home/academy6"  role="button"aria-haspopup="true" aria-expanded="false">
              Training Recomendation
            </a>
          </li> -->

        </ul>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
</header>
<!-- Header End -->
<!-- End of Header Section -->