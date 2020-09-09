
<script src="../../resources/js/datatables.init.js"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
        $(document).ready(function() {
            
            datatableClientes();
        });
        </script>


<script>

</script>

<?php //include 'nav-app.php' ?>

<div class="container">

    <button type="button" class="btn btn-secondary" onclick="listarClientes()">Clientes</button>
    <button type="button" class="btn btn-secondary" onclick="listarVeiculos()">Veículos</button>
    <button type="button" class="btn btn-secondary">Right</button>

    <div id="content-loja">

        <?php  

           // include '../tabelas/clientes.html';

        ?>

    </div>

</div>

<!-- datatables -->
<script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.21/r-2.2.5/sl-1.3.1/datatables.min.js"></script>