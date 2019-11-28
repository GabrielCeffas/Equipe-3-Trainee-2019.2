<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="img/logodiamante.png">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/101f0cf20a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo_produtos.css">
    <title>Produtos</title>
  </head>
  <body>
    <header>
    <?php
            include 'navbar.html'; 
        ?>
    </header>
    
    <div class="container">
      <div>  
        <h1 class="conheca text-center mt-4" id="conheca">Nossos Produtos</h1>
        <div class="row">
          <div class="col-md-3">
            <p><h5>Pesquise pelo nome:</h5></p>
            <form class="input-group">
                <input class="form-control" type="search" placeholder="Digite aqui" aria-label="Search">
                <div class="input-group-append"><button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button></div>
            </form>
            <p><h5>Classificar por:</h5></p>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" >
                <option selected></option>
                <option value="brincos">Brincos</option>
                <option value="pulseiras">Pulseiras</option>
                <option value="aneis">Anéis</option>
                <option value="colar">Colár</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-sync-alt"></i></button>
              </div>
            </div>
            <p><h5>Ordenar por:</h5></p>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" >
                <option selected></option>
                <option value="Nome">Nome</option>
                <option value="preco">Preço</option>
                <option value="tipo">Tipo</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-sort-amount-up"></i></button>
              </div>
            </div>
        </div>
        <div class="col-md-9 produto padding mt-5">
            <p id="produto"><h2>Nenhum produto encontrado!</h2></p>
        </div>
        </div>
      </div>
    </div>

  </body>
  <footer>
    <?php
                include 'rodape.html'; 
            ?>
</footer>
</html>