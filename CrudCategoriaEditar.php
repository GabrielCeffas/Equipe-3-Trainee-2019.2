<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Editar Categorias</title>
        <link rel="icon" href="img/logodiamante.png">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/101f0cf20a.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar nav-home navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="img/logodiamante.png" width="50" height="40" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quem Somos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>

        <div class="container">
            <div class="text-center mt-4">
                    <h1>Editar Categorias</h1>
            </div>
        <div class="form container text-center crud">
            <div class="mt-4 col-md-4 mb-3">
                <label><h5>Nome da Categoria</h5></label>
                <input type="text" class="form-control" placeholder="Digite o nome da categoria" required>
                <div  class="desc">
                    <label><h5>Descrição da Categoria</h5></label>
                    <input type="text" class="form-control" placeholder="Descreva a categoria" required>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-outline-success mb-3" type="submit">Salvar Categoria</button>
            <button type="button" class="btn btn-outline-dark mb-3"><i class="fas fa-arrow-left"></i> Voltar</button>
        </div>
        </div>
        

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    <footer id="rodape" class="mt-5 content">
        <div>
            <div class="text-center row">
                <div class="col-md-4 mapaSite">
                    <a href="index.html"><img id="logo" src="img/logo.png"></a>
                </div>
                <div class="col-md-4 mapaSite">
                    <nav>
                        <p>
                            <h6>Nossa empresa</h6>
                        </p>
                        <p><a class="menu" href="index.html">Home</a></p>
                        <p><a class="menu" href="produtos.html">Veja os nossos produtos</a></p>
                        <p><a class="menu" href="quemsomos.html">Quem Somos</a></p>
                        <p><a class="menu" href="viewContato.html">Entre em contato</a></p>
                    </nav>
                </div>
                <div id="end" class="col-md-4">
                    <sect-ion>
                        <p for="email">
                            <h6>Nos Acompanhe</h6>
                        </p>
                        <p id="end">E seja o primeiro a receber todas as novidades de nossa loja pelo o seu email.</p>
                        <p><input class="UserEmail form-control" name="UserEmail" id="UserEmail" type="email" placeholder="Seu email">
                        </p>
                        <p><input class="btn btn-outline-dark bto" type="submit" value="Inscreva-se!" /></p>
                        </section>
                        <p><a title="Facebook" href="http://facebook.com/"><i class="fab fa-facebook-square social"></i></a>
                            <a title="Instagram" href="http://instagram.com/"><i class="fab fa-instagram social"></i></i></a>
                            <a title="Twitter" href="http://twitter.com/"><i class="fab fa-twitter social"></i></i></a>
                            <a title="Whatsapp" href="http://web.whatsapp.com/"><i class="fab fa-whatsapp-square social"></i></a></p>
                </div>
            </div>
            <p id="copyright">© Copyright 2019 - Todos os direitos reservados. <a href="viewLogin.html"><i class="fas fa-lock login"></i></a></p>
        </div>
    </footer>
</html>