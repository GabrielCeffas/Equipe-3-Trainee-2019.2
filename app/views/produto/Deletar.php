<div class="container mt-3">
    <div class="card">
        <h5 class="card-header">
            <p class="font-weight-bold">Deletar Produto</p>
        </h5>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputname"
                        value="<?php echo $produto->nome ?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="example-number-input">Preço</label>
                    <input type="number" name="preco" class="form-control" id="example-number-input" value="<?php echo $produto->preco ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição:</label>
                <textarea class="form-control" name="descricao" value="<?php echo $produto->descricao ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Imagem:</label>
                <input type="file" name="url_imagem" value="<?php echo $produto->url_imagem ?>" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="example-date-input">Data de Venda</label>
                    <input type="date" name="data_venda" value="<?php echo $produto->data_venda ?>" class="form-control" id="example-date-input">
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleFormControlSelect1">Categoria:</label>
                    <select class="form-control" name="categoria_id" value="<?php echo $produto->categoria_id ?>" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <a class="btn btn-outline-danger mb-2" href="<?php echo URL_BASE ."/produto/apagar/" .$produto->id."/S" ?>">Excluir</a>
                    <a href="<?php echo URL_BASE ."/produto" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
                </div>
            </div>        
        </div>
    </div>
</div>
