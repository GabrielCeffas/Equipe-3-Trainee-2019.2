<div class="container">
    <div class="mt-3 col row">
        <a href="../../../assets/img/<?php echo $produto->url_imagem ?>"><img src="../../../assets/img/<?php echo $produto->url_imagem ?>" id="prod" class="img-fluid" alt="Responsive image"></a>
        <div class="mt-3 col hist">
            <p class="font-weight-bold">
                <h4 class="font-weight-bold"><?php echo $produto->nome ?></h5>
            </p>
            <p>ref: #<?php echo $produto->id ?></p>
            <?php foreach ($categorias as $categoria) { ?>
                <?php if ($produto->categoria_id == $categoria->id) { ?>
                    <p>
                        <h5>Tipo: <?php echo $categoria->nome ?></h5>
                    </p>
            <?php }
            } ?>
            <p>
                <h6 class="font-weight-bold">Preço: R$ <?php echo $produto->preco ?>,00</h6>
            </p>
            <a href="<?php echo URL_BASE . "/contato" ?>"><button type="button" class="ver">Visite nossa Loja!</button></a>
        </div>
        <div class="mt-3 row col-md-4">
            <p class="col text-center"><?php echo $produto->descricao ?></p>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $produto->id ?>">
    <a href="<?php echo URL_BASE . "/produto/view_produto" ?>"><button type="button" class="ver mb-2 mt-5"><i class="fas fa-arrow-left"></i> Voltar</button></a>
</div>