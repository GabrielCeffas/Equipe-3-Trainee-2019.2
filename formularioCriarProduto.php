<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Paula Brincos</title>
    <link rel="icon" href="img/logodiamante.png">

    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/101f0cf20a.js" crossorigin="anonymous"></script>
</head>

<body>
   <header>
   <?php
            include 'navbar.html'; 
        ?>
   </header>

    <div class="container mt-3">
        <div class="card">
                <h5 class="card-header"><p class="font-weight-bold">Novo Produto</p></h5>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">
                            <p class="font-weight-bold">Nome:</p>
                        </label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="digite o nome do produto">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">
                            <p class="font-weight-bold">Categoria:</p>
                        </label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="exampleFormControlFile1"><p class="font-weight-bold">Imagem:</p></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">
                            <p class="font-weight-bold">Descrição:</p>
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

<footer>
    <?php
                include 'rodape.html'; 
            ?>
</footer>

</html>