
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <form class="form-inline search-crud my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="buscar..." aria-label="Search">
                <button class="btn btn-outline-dark" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <a href="<?php echo URL_BASE ."/usuario/novo"?>"><button type="button" class="btn btn-outline-success">Novo Usuário</button></a>
        </div>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Rafa</td>
                    <td>email@exemplo.com</td>
                    <td><a href="<?php echo URL_BASE ."/usuario/edit"?>"><button type="button" class="btn btn-outline-info btn-sm">Editar</button> <button type="button"
                            class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Lucas</td>
                    <td>email@exemplo.com</td>
                    <td><button type="button" class="btn btn-outline-info btn-sm">Editar</button> <button type="button"
                            class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Darlan</td>
                    <td>email@exemplo.com</td>
                    <td><button type="button" class="btn btn-outline-info btn-sm">Editar</button> <button type="button"
                            class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Junin</td>
                    <td>email@exemplo.com</td>
                    <td><button type="button" class="btn btn-outline-info btn-sm">Editar</button> <button type="button"
                            class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-outline-dark"><i class="fas fa-arrow-left"></i> Voltar</button>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

        