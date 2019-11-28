 
    <div class="container">
      <div>  
        <h1 class="conheca text-center mt-4" id="conheca">Nossos Produtos</h1>
        <div class="row">
          <div class="col-md-3">
            <p><h5>Pesquise pelo nome:</h5></p>
            <form class="input-group">
                <input class="form-control" type="search" placeholder="Digite aqui" aria-label="Search">
                <div class="input-group-append"><button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button></div>
            </form>
            <p><h5>Classificar por:</h5></p>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" >
                <option selected></option>
                <option value="brincos">Brincos</option>
                <option value="pulseiras">Pulseiras</option>
                <option value="aneis">Anéis</option>
                <option value="colar">Colar</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-sync-alt"></i></button>
              </div>
            </div>
            <p><h5>Ordenar por:</h5></p>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" >
                <option selected></option>
                <option value="Nome">Nome</option>
                <option value="preco">Preço</option>
                <option value="tipo">Tipo</option>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i class="fas fa-sort-amount-up"></i></button>
              </div>
            </div>
        </div>
        <div class="col-md-9 produto padding mt-5">
        <div class="container ct-home mt-3">
    <div class="row">
    <?php if(is_array($produtos)){ foreach ($produtos as $produto) { ?>
      <div class="col-lg-4 col-md-6 mb-3">
        <div class="card">
          <img src="<?php echo $produto->url_imagem ?>" class="card-img-top" alt="...">
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