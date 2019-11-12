<div class="container mt-3">
        <div class="card">
            <h5 class="card-header">
                <p class="font-weight-bold">Editar Categoria</p>
            </h5>
            <div class="card-body">
                <form action="<?php echo URL_BASE ."/categoria/salvar" ?>" method="POST">
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
                        
                        <input type="hidden" name="id" value="<?php echo $categoria->id?>">
                        <input type="submit" value="Salvar" class="btn btn-outline-success mb-2">
                        <a href="<?php echo URL_BASE ."/categoria" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
                        
                        </div>
                </form>
            </div>
        </div>
    </div>
