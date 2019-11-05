<!-- Código desenvolvido por Darlan Henrique da Costa Silva - 2019 -->

<html lang="pt"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Paula Brincos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="<?php echo URL_BASE ."assets/img/logodiamante.png"?>">
        <link rel="stylesheet" href="<?php echo URL_BASE ."assets/css/styles.css" ?>">
        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/101f0cf20a.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <?php include 'navbar.php'; ?>
        </header>

        <main>
            <?php $this->load($view, $viewData); ?>
        </main>

        <footer>
            <?php include 'rodape.php'; ?>
        </footer>
    </body>
</html>