<nav class="navbar nav-home navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo URL_BASE ?>">
        <img src="<?php echo URL_BASE ."assets/img/logodiamante.png" ?>" width="50" height="40" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URL_BASE?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE ."categoria" ?>">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URL_BASE ."categoria/novo" ?>">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../quemsomos.php">Quem Somos</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
            <button class="btn  my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</nav>