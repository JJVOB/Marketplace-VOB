<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotrons/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('js/sidebar.js') }}"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    <title>JJVOB - MarketPlace</title>
</head>

<body>
    <header class="header">
        <a href="#" class="logo aft">VOB</a>
        <nav class="nav-list">
            <ul class="ul-list">
                <li><a class="login aft" id="home" href="#" rel="noopener noreferrer" style="padding-right: 50px">Home</a> </li>
                <li><a class="login aft" id="login" href="#" rel="noopener noreferrer" style="padding-right: 50px">Login</a> </li>
                <li><a class="login aft" id="suporte" href="#" rel="noopener noreferrer" style="padding-right: 50px">Suporte</a> </li>
            </ul>
        </nav>
    </header>

    <section class="grid">
      <div class="flex-shrink-0 p-3 menu-grid-item">
        <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
          <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-5 fw-semibold">Inicio</span>
        </a>

        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
              Home
            </button>
            <div class="collapse" id="home-collapse" style="">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Marketplace</a></li>
              </ul>
            </div>
          </li>

          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Painel da Empresa
            </button>
            <div class="collapse" id="dashboard-collapse" style="">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Editar Empresa</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Ver Empresa</a></li>
              </ul>
            </div>
          </li>

          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Produto
            </button>
            <div class="collapse" id="orders-collapse" style="">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Cadastrar Novo Produto</a></li>
                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Produtos Cadastrados</a></li>
              </ul>
            </div>
          </li>

          <li class="border-top my-3"></li>
            <li class="mb-1">
              <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                Account
              </button>
              <div class="collapse" id="account-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Perfil</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Configurações</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Sair</a></li>
                </ul>
              </div>
            </li>
        </ul>
      </div>

      <div class="p-5 mb-4 bg-body-tertiary rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bem-vindo ao mundo da VOB</h1>
          <p class="col-md-8 fs-4">Sua porta de entrada para uma variedade excepcional de produtos no vasto universo do marketplace.</p>
        </div>
      </div>
  
      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-bg-dark rounded-3">
            <h2>sobre</h2>
            <p>Nosso marketplace é um verdadeiro tesouro de opções, onde você pode encontrar desde os últimos lançamentos tecnológicos até os clássicos atemporais, 
              tudo em um único lugar. Com uma equipe dedicada de especialistas em produtos, trabalhamos incansavelmente para garantir que cada item em nosso catálogo 
              atenda aos mais altos padrões de qualidade e funcionalidade.</p>
            <button class="btn btn-outline-light" type="button">Example button</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 bg-body-tertiary border rounded-3">
            <h2>Add borders</h2>
            <p>Nosso marketplace é um verdadeiro tesouro de opções, onde você pode encontrar desde os últimos lançamentos tecnológicos até os clássicos atemporais, 
              tudo em um único lugar. Com uma equipe dedicada de especialistas em produtos, trabalhamos incansavelmente para garantir que cada item em nosso catálogo 
              atenda aos mais altos padrões de qualidade e funcionalidade.</p>
            <button class="btn btn-outline-secondary" type="button">Acessar Marketplace</button>
          </div>
        </div>
      </div>
    
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-body-secondary">&copy; 2024 JJVOB, Inc</p>
    
        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
    
        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Marketplace</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Produtos</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Suporte</a></li>
        </ul>
      </footer>
    </div>
</body>
</html>
