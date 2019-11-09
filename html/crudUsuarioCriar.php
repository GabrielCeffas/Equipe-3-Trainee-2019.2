<!DOCTYPE html>
<html>
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    
        <div class="container">
            <div class="text-center mt-4">
                    <h1>Criar Usuário</h1>
            </div>
        <div class="form-row container">
            <div class="col">
                <label>Nome do Usuário</label>
                <input type="number" class="form-control" placeholder="Digite o Nome" required>
            </div>
            <div class="col">
                <label>Email do Usuário</label>
                <input type="text" class="form-control" placeholder="Digite o Email" required>
            </div>
        </div>
        <div class="mt-3 col-md-4 mb-3">
            <button class="btn btn-outline-success" type="submit">Salvar Usuário</button>
            <button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button>
        </div>
        </div>
        
    
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <footer>
            <?php
                include 'rodape.html'; 
            ?>
        </footer>
    </body>
    
    </html>