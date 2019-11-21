<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">
            <p class="font-weight-bold">Deletar Usuario</p>
        </h5>
        <div class="card-body">
            <form action="<?php echo URL_BASE . "/usuario/salvar" ?>" method="POST">
                <div class="form-group">
                    <div class="form-group">
                        <label for="inputname" class="font-weight-bold">Nome do Usuario: </label><br>
                        <?php echo $usuario->nome ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputemail" class="font-weight-bold">Email do Usuario: </label><br>
                    <?php echo $usuario->email ?>
                </div>
                <div class="col-md-6">

                    <input type="hidden" name="id" value="<?php echo $usuario->id ?>">
                    <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE . "/usuario/apagar/" . $usuario->id . "/S" ?>">Excluir</a>
                    <a href="<?php echo URL_BASE . "/usuario" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>

                </div>
            </form>
        </div>
    </div>
</div>