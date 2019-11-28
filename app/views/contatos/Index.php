<div class="container mt-3">

    <table class="table text-center mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Assunto</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>

            <?php if (is_array($contatos)) {
                foreach ($contatos as $contato) { ?>
                    <tr>
                        <td><?php echo $contato->nome ?></td>
                        <td><?php echo $contato->assunto ?></td>
                        <td>
                            <a href="<?php echo URL_BASE . "/contato/visualizar/" . $contato->id ?>" title="Ver" class="btn btn-outline-info"><i class="fas fa-book-reader"></i></a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>

    <a href="<?php echo URL_BASE . "/administrativo" ?>"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button></a>
</div>