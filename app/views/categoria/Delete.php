<div class="container mt-3">
        <div class="card">
            <h5 class="card-header">
                <p class="font-weight-bold">Nova Categoria</p>
            </h5>
            <div class="card-body">

                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputname">Nome</label>
                            <input type="name" name="nome" value="<?php echo $categoria->nome ?>" class="form-control" id="inputname" placeholder="Digite o nome da categoria">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição:</label>
                        <input name="descricao" value="<?php echo $categoria->descricao ?>" class="form-control" id="exampleFormControlTextarea1" rows="3">
                    </div>
                        </div>
                        <div class="col-md-6">
                        
                        <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE ."/categoria/apagar/" .$categoria->id."/S" ?>">Excluir</a>
                        
                        </div>
            </div>
        </div>
    </div>
