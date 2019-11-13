<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <form class="form-inline search-crud my-2 my-lg-0" method="POST" action="<?php echo URL_BASE ."/usuario/pesquisar"?>">
            <input class="form-control mr-sm-2" type="search" name="usuario_pesquisar" placeholder="buscar..." aria-label="Search">
            <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
        </form>
    <h4 class="text-center">Resultados das pesquisas de Usuarios:</h4>
        <a href="<?php echo URL_BASE ."/usuario/novo" ?>"><button type="button" class="btn btn-outline-success">Novo Usuario</button></a>
    </div>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
                if($Produto == )
                foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->nome ?></td>
                <td><?php echo $usuario->email ?></td>
                <td>
                    <a href="<?php echo URL_BASE ."/usuario/editar/". $categoria->id?>" class="btn btn-outline-info btn-sm">Editar</a>
                    <a href="<?php echo URL_BASE ."/usuario/apagar/". $categoria->id?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php } ?>

        </tbody>
    </table>
    
    <a href="<?php echo URL_BASE ."/categoria" ?>"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Sair da Pesquisa</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
