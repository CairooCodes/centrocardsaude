<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Hello, world!</title>
</head>
<style>
  .nav-main {
    box-shadow: 1px 1px 1px hsl(0, 2%, 84%);
  }

  .brand {
    color: #E70006;
    font-size: 22px;
    font-weight: bold;
  }

  .nav-link {
    color: black;
    font-weight: 500;
  }

  .btn-nav {
    background-color: #E70006;
    padding: 5px 30px 5px 30px;
    color: white;
    border-radius: 20px;
  }

  i {
    font-size: 28px;
  }

  .dropdown:hover .dropdown-menu {
    display: block;
    margin-top: 0;
  }

  .form {
    position: relative
  }



  .form span {
    position: absolute;
    right: 17px;
    top: 7px;
    border-left: 1px solid #d1d5db
  }

  .left-pan {
    padding-left: 7px
  }

  .left-pan i {
    padding-left: 10px
  }

  .form-input {
    height: 40px;
    border-radius: 50px
  }

  .form-input:focus {
    box-shadow: none;
    border: none
  }
  .btn-login {
    background-color: transparent;
    border-color:transparent
  }

  ul {
    margin-left: 30px;
  }
</style>

<body>
  <!-- <nav class="nav-main">
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
        <a href="/" class="brand d-flex align-items-center mb-2 mb-md-0 text-decoration-none">
          CENTROCARD
        </a>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Produtos</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Serviços</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Quem somos</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Blog</a></li>
        </ul>

        <div class="col-md-3 text-end">
          <button type="button" class="btn btn-nav">Afiliado</button>
        </div>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle"></i>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Entrar</a></li>
            <li><a class="dropdown-item" href="#">Cairo Felipe</a></li>
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
      </header>
    </div>
  </nav> -->
  <header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="brand d-flex align-items-center mb-2 mb-md-0 text-decoration-none">
          CENTROCARD
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2">Home</a></li>
          <li><a href="#" class="nav-link px-2">Produtos</a></li>
          <li><a href="#" class="nav-link px-2">Serviços</a></li>
          <li><a href="#" class="nav-link px-2">Blog</a></li>
          <li><a href="#" class="nav-link px-2">Quem somos</a></li>
        </ul>

        <!-- <div class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 d-flex">
          <div class="form">
            <input type="text" class="form-control form-input" placeholder="Produtos, serviços...">
            <span class="left-pan"><i class="fa fa-search"></i> </span>
          </div>
        </div> -->

        <div class="text-end">
          <button type="button" class="btn btn-nav">Seja um afiliado</button>
          <button class="btn-login" type="button" class="btn">
          <div class="d-flex align-items-center">
          Login <i class="bi bi-box-arrow-in-right"></i>
          </div>
        </button>
        </div>
      </div>
    </div>
  </header>
  <section style="background-color:#E70006">
    <div class="container col-xxl-8">
      <div class="row flex-lg-row-reverse align-items-center">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="mockup-semfundo.png" class="d-block mx-lg-auto img-fluid" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3 text-white">Até 60% de desconto com nosso cartão</h1>
          <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most
            popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive
            prebuilt components, and powerful JavaScript plugins.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-4 offset-1">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of whats new and exciting from us.</p>
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2021 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>