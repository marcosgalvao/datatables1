<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="../../resources/css/nav-app.css" /> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script src="../../resources/js/datatables.init.js"></script> -->

</head>

<body>
    <nav id="nav-app" class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="#">

            <!-- <h4>FINECARWASH</h4>  -->
            <figure>
                <!-- <img src="../../resources/images/LogoSiteCopiado.png" height="50px" alt="Minha Figura"> -->
            </figure>

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-app"
            aria-controls="navbar-app" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-app">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">FINECARWASH <span class="sr-only">(current)</span></a>
                </li>


            </ul>
            <div class="mx-auto nav-item">
                <ul class="navbar-nav">

                    <!-- <form id="form-buscar-carro" class="form-inline my-2 my-lg-0"> -->

                    <input id="input-buscar" class="form-control form-control-lg" type="search" autocomplete="off"
                        placeholder="Nome, cpf ou placa" onkeyup="buscaClienteVeiculo()" style="min-width: 300px">


                    <!-- </form> -->

                </ul>

                <div class="card" id="result-buscar-carro"></div>

            </div>
            <ul class="navbar-nav mr-auto">

                <div>Minha conta</div>

                <!-- <form id="form-buscar-carro" class="form-inline my-2 my-lg-0">
                    <input id="input-buscar-carro" class="form-control mr-sm-2" type="search"
                        placeholder="digite a placa..." aria-label="Search" onkeyup="buscaVeiculo2()">

                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="card" id="result-buscar-carro"></div>  -->

            </ul>

        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

</html>