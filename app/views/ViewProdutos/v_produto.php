<div class="container">
  <h1 class="conheca text-center mt-4" id="conheca">Nossos Produtos</h1>
  <div class="produto padding mt-5">
    <div class="container ct-home mt-3">
      <div class="row">
        <?php if (is_array($produtos)) {
          foreach ($produtos as $produto) { ?>
            <div class="col-lg-4 col-md-6 mb-3">
              <div class="card">
                <img src="../../../assets/img/<?php echo $produto->url_imagem ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title text-center"><?php echo $produto->nome ?></h5>
                  <p class="card-text text-center">Preço: R$ <?php echo $produto->preco ?>,00</p>
                  <a href="<?php echo URL_BASE . "/produto/visualizar/" . $produto->id ?>"><button type="button" class="ver botao">Ver mais</button></a>
                </div>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>