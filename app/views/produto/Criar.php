<div class="container mt-3">
        <div class="card">
            <h5 class="card-header">
                <p class="font-weight-bold">Novo Produto</p>
            </h5>
            <div class="card-body">
                <form action="<?php echo URL_BASE . "/produto/salvar" ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Nome</label>
                            <input type="text" name="nome" class="form-control" id="inputname"
                                placeholder="digite o nome do produto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="example-number-input">Preço</label>
                            <input type="number" name="preco" class="form-control" id="example-number-input" placeholder="Preço">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição:</label>
                        <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Imagem:</label>
                        <input type="file" name="url_imagem" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="example-date-input">Data de Venda</label>
                            <input type="date" name="data_venda" class="form-control" id="example-date-input">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlSelect1">Categoria:</label>
                            <select class="form-control" name="categoria_id" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-outline-success ml-2">
                        <a href="<?php echo URL_BASE ."/produto" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>

                </form>
            </div>
        </div>
    </div>
</div>