<div class="container mt-3">
        <div class="d-flex justify-content-between">
            <form class="form-inline search-crud my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
                <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <a href="/produto/novo"><button type="button" class="btn btn-outline-success">Novo Produto</button></a>
        </div>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($produtos)){ foreach ($produtos as $produto) { ?>
                <tr>
                    <td> <?php echo $produto->nome ?></td>
                    <td> <?php echo $produto->descricao ?></td>
                    <td><a href="/produto/editar"><button type="button" class="btn btn-outline-info btn-sm">Editar</button></a> <button type="button"
                            class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            <?php }} ?>
                
            </tbody>
        </table>
        <a href="./Index"><button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button></a>

    </div>