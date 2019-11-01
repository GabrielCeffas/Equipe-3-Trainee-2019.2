<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Categorias</title>
        <link rel="icon" href="img/logodiamante.png">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/101f0cf20a.js" crossorigin="anonymous"></script>
    
    </head>

    <body>
        <header>
            <?php
            include('navbar.html');
            include('conecxao.php');
            ?>
        </header>

        <div class="container mt-3">
            <div class="d-flex justify-content-between">
                <form class="form-inline search-crud my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <button type="button" class="btn btn-outline-success">Nova Categoria</button>
            </div>
            <table class="table mt-3 text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <p><h4 class="mt-4 mb-4 text-center">Nenhuma Categoria Cadastrada!</h4></p>
            <button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

    <footer>
        <?php include('rodape.html'); ?>
    </footer>
</html>