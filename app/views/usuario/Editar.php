
<div class="container mt-3">
        <div class="card">
            <h5 class="card-header">
                <p class="font-weight-bold">Editar Usuario</p>
            </h5>
            <div class="card-body">
                <form action="<?php echo URL_BASE ."/usuario/salvar" ?>" method="POST">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="inputname">Nome do Usuario</label>
                            <input type="name" name="nome" value="<?php echo $usuario->nome ?>" class="form-control" id="inputname" placeholder="Digite o nome do usuario">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputemail">Email do Usuario</label>
                        <input type="email" name="email" value="<?php echo $usuario->email ?>" class="form-control" id="inputemail" placeholder="Digite o email do usuario">
                    </div>
                        <div class="col-md-6">
                        
                        <input type="hidden" name="id" value="<?php echo $usuario->id?>">
                        <input type="submit" value="Salvar" class="btn btn-outline-success mb-2">
                        <a href="<?php echo URL_BASE ."/usuario" ?>"><button type="button" class="btn btn-outline-dark mb-2"><i class="fas fa-arrow-left"></i> Voltar</button></a>
                        
                        </div>
                </form>
            </div>
        </div>
</div>
