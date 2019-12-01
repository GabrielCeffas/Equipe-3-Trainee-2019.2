<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">
            <p class="font-weight-bold">Deletar Produto</p>
        </h5>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <label for="inputname" class="font-weight-bold">Nome do Produto: </label><br>
                    <?php echo $produto->nome ?>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="inputname" class="font-weight-bold">Preço do Produto: </label><br>
                    R$ <?php echo $produto->preco ?>,00
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="inputname" class="font-weight-bold">Descrição do Produto: </label><br>
                    <?php echo $produto->descricao ?>
                </div>
            </div>
            <div class="col-md-6">
                <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE . "/produto/apagar/" . $produto->id . "/S" ?>">Excluir</a>
                <a href="<?php echo URL_BASE . "/produto" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
            </div>
        </div>
    </div>
</div>
</div>