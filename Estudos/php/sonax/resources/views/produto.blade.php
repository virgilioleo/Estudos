<!DOCTYPE html>
<html lang="pt-br"  data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <!--<nav class="navbar navbar-expand-lg bg-body-tertiary">-->
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Produtos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/clientes">Clientes</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Novo Produto?
                </button>
            </div>
        </div>
    </nav>
    </nav>
    <div class="container">

        <table class="table">

            <tr>
                <th>Produto</th>
            </tr>
            <?php
            foreach ($produtos as $item) {
                echo '<tr>
                     <td>' . $item . '</td>
                 </tr>';
            }
            //foreach ($valor as $item) {
            //    echo '<tr>
            //         <td>' . $item . '</td>
            //     </tr>';
            //}
            ?>
            <!-- <tr>
            <td>Alfreds Futterkiste</td>
        </tr>
        <tr>
            <td>Francisco Chang</td>
        </tr> -->
        </table>
        <!--<button type="button" class="btn btn-dark">Testando jquery</button>-->
        <button id="btnjquery" class="btn btn-dark">Testando jquery</button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Produto?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/clientes" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Produto</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name" name="nome">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Descrição" name="Descrição">
                        </div>
                        <input type="submit" value="Submit">
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Salvar Alterações</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $('#btnjquery').click(function() {
            alert('Jquery funcionando?');
        });
    </script>
</body>

</html>