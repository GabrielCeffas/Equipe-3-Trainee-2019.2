<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">
            <p class="font-weight-bold">Deletar Categoria</p>
        </h5>
        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <label for="inputname">Nome: <?php echo $categoria->nome ?></label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição: <?php echo $categoria->descricao ?></label>
            </div>
        </div>
        <div class="col-md-6">

            <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE . "/categoria/apagar/" . $categoria->id . "/S" ?>">Excluir</a>
            <a href="<?php echo URL_BASE . "/categoria" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>

        </div>
    </div>
</div>
</div>