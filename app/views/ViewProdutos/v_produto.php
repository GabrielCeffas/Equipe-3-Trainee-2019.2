 
    <div class="container">
      <div>  
        <h1 class="conheca text-center mt-4" id="conheca">Nossos Produtos</h1>
        <div class="produto padding mt-5">
        <div class="container ct-home mt-3">
    <div class="row">
    <?php if(is_array($produtos)){ foreach ($produtos as $produto) { ?>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card">
          <img src="../../../assets/img/<?php echo $produto->url_imagem ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center"><?php echo $produto->nome ?></h5>
            <p class="card-text text-center"><?php echo $produto->descricao ?></p>
            <a href="#" class="btn btn-outline-dark btn-lg btn-block">Ver mais</a>
          </div>
        </div>
      </div>
      <?php }} ?>
      
    </div>
        </div>
        </div>
      </div>
    </div>
</div>