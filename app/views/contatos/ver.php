<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">
            <p class="font-weight-bold">Mensagem de <?php echo $contato->nome ?></p>
        </h5>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <div class="form-group">
                        <label class="font-weight-bold">Nome:</label>
                        <?php echo $contato->nome ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Email: </label>
                    <?php echo $contato->email ?>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Assunto: </label>
                    <?php echo $contato->assunto ?>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Mensagem: </label>
                    <?php echo $contato->comentario ?>
                </div>
                <div class="col-md-6">

                    <input type="hidden" name="id" value="<?php echo $contato->id ?>">
                    <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE . "/contato/apagar/" . $contato->id . "/S" ?>">Excluir</a>
                    <a href="<?php echo URL_BASE . "/contato/recebidos" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
                </div>
            </form>
        </div>
    </div>
</div>