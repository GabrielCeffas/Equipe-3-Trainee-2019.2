<div class="container">
  <h1 class="conheca text-center mt-4 mb-4" id="conheca">Fale Conosco!</h1>
  <div class="row">
    <div class="col-sm text-center">
      <div class="iframe-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7409.968154982964!2d-43.358822190862966!3d-21.780877245266694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb6ffa6ed3a5e43ac!2sIndepend%C3%AAncia%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1569341060201!5m2!1spt-BR!2sbr" width="550" height="530" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
    <div class="col-sm">
      <form class="form-group" action="<?php echo URL_BASE . "/contato/salvar" ?>" method="POST">
        <div class="form-group">
          <label for="exampleFormControlInput1">Email de contato</label>
          <input name="c_email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="seuemail@exemplo.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Seu nome</label>
          <input name="c_nome" type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect2">Assunto</label>
          <input name="c_assunto" type="text" class="form-control" id="formGroupExampleInput" placeholder="Digite assunto">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Comentario</label>
          <textarea name="c_coment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite um comentario"></textarea>
        </div>
        <button type="submit" class="botao btn btn-primary mb-2">Enviar <i class="fas fa-paper-plane"></i></button>
      </form>
    </div>
  </div>
  <h4>
    <p class="text-center"><i class="fas fa-map-marked-alt"></i><strong> Endereço:</strong></p>
  </h4>
  <p class="text-center">Independência Shopping<br>
    Av. Presidente Itamar Franco<br>
    N°: 3600/Loja: 1001<br>
    Cascatinha - Juiz de Fora<br>
    CEP: 36052-290<br>
    (32)4002-8922</p>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>