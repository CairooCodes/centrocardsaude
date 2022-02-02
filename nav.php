<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
  <div class="container d-flex justify-content-between">
    <div class="contact-info d-flex align-items-center">
      <a href="mailto:contact@example.com">contato@centrocard.com</a>
      <a href="mailto:contact@example.com">Consultas e exames: +55 3000-0000</a>
    </div>
    <div class="d-none d-lg-flex social-links align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      <a href="./admin/login.php" class="linkedin"> Login <i class="bi bi-box-arrow-in-right"></i></a>

    </div>
  </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <a href="<?php echo $URI->base('/home') ?>" class="logo me-auto"><img src="<?php echo $URI->base('/assets/img/logo.jpg') ?>" alt="" class="img-fluid"></a>

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li class="dropdown"><a href="#"><span>PLANOS</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?php echo $URI->base('/plano/essencial') ?>">Plano Essencial</a></li>
            <li><a href="<?php echo $URI->base('/plano/gold') ?>">Plano Gold</a></li>
            <li><a href="<?php echo $URI->base('/plano/platinum') ?>">Plano Platinum</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#services">Befefícios</a></li>
        <!-- <li><a class="nav-link scrollto" href="#doctors">Blog</a></li> -->
        <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>
</header><!-- End Header -->
<div class="contact-nav">
  <div class="btn-contact-nav">
    <button aria-label="Abrir Contato" type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="fas fa-headset"></i>
    </button>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Entre em contato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0 pb-3">
              <input size="20" maxlength="14" type="tel" class="form-control" name="whats" placeholder="Seu número" required>
            </div>
            <div class="col-md-12 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="msg" rows="3" placeholder="Esreva sua mensagem"></textarea>
          </div>
          <input type="hidden" name="tipo" value="1">
          <div class="text-center pt-3">
            <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
          </div>
        </form>
        <p class="text-center pt-3">OU</p>
        <div class="row justify-content-center pb-3">
          <div class="col-4">
            <a href="<?php echo $URI->base('/https://www.instagram.com/cocaisshoppingoficial/') ?>">
              <div class="container-a-i rounded">
                <i class="fab fa-instagram"></i> Instagram
              </div>
            </a>
          </div>
          <div class="col-4">
            <a href="<?php echo $URI->base('/https://www.instagram.com/cocaisshoppingoficial/') ?>">
              <div class="container-a-f rounded">
                <i class="fab fa-facebook"></i> Facebook
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>