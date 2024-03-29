<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <form class="form-inline search-crud my-2 my-lg-0" method="GET" action="<?php echo URL_BASE . "/categoria/pesquisar" ?>">
            <input class="form-control mr-sm-2" type="search" name="categoria_pesquisar" placeholder="buscar..." aria-label="Search">
            <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <a href="<?php echo URL_BASE . "/categoria/novo" ?>"><button type="button" class="btn btn-outline-success">Nova Categoria</button></a>
    </div>
    <table class="table mt-3 text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>

            <?php if (is_array($categorias)) {
                foreach ($categorias as $categoria) { ?>
                    <tr>
                        <td><?php echo $categoria->nome ?></td>
                        <td>
                            <a href="<?php echo URL_BASE . "/categoria/editar/" . $usuario->id ?>" title="Editar" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo URL_BASE . "/categoria/apagar/" . $categoria->id ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>

    <a href="<?php echo URL_BASE . "/categoria" ?>"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Sair da Pesquisa</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>