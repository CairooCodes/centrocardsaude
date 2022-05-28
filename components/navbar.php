<!-- ======= Header ======= -->
<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container d-flex align-items-center justify-content-between">

    <a href="<?php echo $URI->base('home') ?>" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="<?php echo $URI->base('/assets/img/logo-semfundo.png') ?>" alt="">
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="<?php echo $URI->base('home') ?>">Home</a></li>
        <li class="dropdown"><a href="#"><span>Planos</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="<?php echo $URI->base('plano/essencial') ?>">Plano Essencial</a></li>
            <li><a href="<?php echo $URI->base('plano/gold') ?>">Plano Gold</a></li>
            <li><a href="<?php echo $URI->base('plano/platinum') ?>">Plano Platinum</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="<?php echo $URI->base('home#services') ?>">Benefícios</a></li>
        <!-- <li><a class="nav-link scrollto">Afiliado</a></li> -->
        <!-- <li><a class="nav-link scrollto" href="<?php echo $URI->base('home#recent-blog-posts') ?>">Blog</a></li> -->
        <li class="dropdown"><a href="#"><span>Rede de Desconto</span> <i class="bi bi-chevron-down"></i></i></a>
          <ul>
            <li><a class="nav-link scrollto" href="<?php echo $URI->base('busca-de-servicos') ?>">REDE MÉDICA <i class="bi bi-search"></i></a></li>
            <li><a href="<?php echo $URI->base('#') ?>">FARMÁCIAS</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="<?php echo $URI->base('beneficio/telemedicina') ?>">Telemedicina</a></li>
        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-box-arrow-in-right"></i></a>
          <ul>
            <li><a href="https://appmobi.azurewebsites.net/mobi4tech/centrocard/cliente/web/Login.aspx">ÁREA DO CLIENTE</a></li>
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->

    <a class="btn-getstarted scrollto" href="<?php echo $URI->base('home#pricing') ?>">COMPRE AGORA</a>

  </div>
</header><!-- End Header -->