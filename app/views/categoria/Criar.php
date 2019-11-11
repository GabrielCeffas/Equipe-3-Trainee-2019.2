<div class="container mt-3">
        <div class="card">
            <h5 class="card-header">
                <p class="font-weight-bold">Nova Categoria</p>
            </h5>
            <div class="card-body">
                <form action="<?php echo URL_BASE ."/categoria/salvar" ?>" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputname">Nome</label>
                            <input type="name" name="nome" class="form-control" id="inputname" placeholder="Digite o nome da categoria">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição:</label>
                        <input name="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3">
                    </div>
                        </div>
                        <div class="col-md-6">
            
                        <input type="submit" value="Salvar" class="btn btn-outline-success mb-2">
                        
                        </div>
                </form>
            </div>
        </div>
    </div>
