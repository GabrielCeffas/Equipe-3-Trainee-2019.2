<div class="container mt-3">
            <div class="card">
                    <h5 class="card-header"><p class="font-weight-bold">Editar Produto</p></h5>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Nome</label>
                                <input type="email" class="form-control" id="inputEmail4"
                                    placeholder="digite o nome do produto">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="example-number-input">Preço</label>
                                <input type="number" class="form-control" id="example-number-input" placeholder="Preço">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Descrição:</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Imagem:</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="example-date-input">Data de Venda</label>
                                <input type="date" class="form-control" id="example-date-input">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">Categoria:</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Salvar</button>
                            <a href="<?php echo URL_BASE ."/produto" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
    
                    </form>
                </div>
            </div>
        </div>
</div>