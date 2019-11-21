<div class="container mt-3">
    <div class="d-flex justify-content-between">
        <a href="<?php echo URL_BASE . "/usuario/novo" ?>"><button type="button" title="Novo Usuario" class="btn btn-outline-success"><i class="fas fa-user-plus"></i></button></a>
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

            <?php if (is_array($usuarios)) {
                foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario->nome ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td>
                            <a href="<?php echo URL_BASE . "/usuario/editar/" . $usuario->id ?>" title="Editar" class="btn btn-outline-info"><i class="fas fa-edit"></i></a>
                            <a href="<?php echo URL_BASE . "/usuario/apagar/" . $usuario->id ?>" title="Apagar" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>

    <a href="<?php echo URL_BASE . "/administrativo" ?>"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>