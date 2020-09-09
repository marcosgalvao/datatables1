<div class="card-header">
    <h3>Editando dados do cliente</h3>
</div>

<div class="card col-12">

    <div class="card-body">

        <!-- Alerta de sucesso em cadastro de cliente  -->
        <div id="alert-sucesso-cad-cliente" class="alert alert-success row" role="alert" style="display: none">
            <h5 class="alert-heading">Alterações efetuadas com sucesso!</h5>

            <!-- Redireciona para a página do cliente -->
            <form id="form-abrir-inserir-veiculo" method="post" action="javascript:clienteShow()"
                style="margin-left: 15px">

                <input type="hidden" id="nome-cliente-veiculo">
                <input type="hidden" id="id-cliente-veiculo">
                <button type="submit" id="btn-form-veiculo-inserir" class="btn btn-success">Ok</button>

            </form>
        </div>

        <!-- Alerta de falha em cadastro de cliente  -->
        <div id="alert-falha-cad-cliente" class="alert alert-danger" role="alert" style="display: none">
            <h4 class="alert-heading">Falha ao inserir Cliente!</h4>
            <a href="../../views/loja/loja.php" class="btn btn-primary">Ok</a>
        </div>

        <!-- Alerta2 de falha em cadastro de cliente  -->
        <div id="alert2-falha-cad-cliente" class="alert alert-danger" role="alert" style="display: none">
            <h4 class="alert-heading">Preencha corretamente os campos solicitados!</h4>
            <!--  <a href="../../views/loja/loja.php" class="btn btn-primary">Ok</a>  -->
            <button class="btn btn-primary" onclick="fechaAlert()">OK</button>
        </div>

        <!-- Formulário  -->
        <form id="form-novo-cliente" method="post">

            <input type="hidden" id="id_cliente">

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="nome">Nome do cliente</label>
                    <input type="text" class="form-control" id="nome" placeholder="digite o nome" name="nome"
                        minlength="2" maxlength="50" required>
                </div>

                <div class="form-group col-md-4">
                    <label for="cpf">CPF</label>
                    <input type="text" class="cpf form-control" id="cpf" name="cpf" data-mask="000.000.000-00"
                        minlength="14" maxlength="14" placeholder="digite o cpf sem traço e sem espaço"
                        onkeyup="testaCpfRedireciona()">
                    <small id="cpf-invalido" style="color: red"></small>
                </div>

                <div class="form-group col-md-4">
                    <label for="cel">Celular</label>
                    <input type="tel" class="celular form-control" id="cel" name="cel" data-mask="(99) 9 9999-9999"
                        placeholder="(99) 9 9999-9999" required>
                    <small>Format: (99) 9 9999-9999</small>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                        placeholder="Enter email">
                </div>

                <div class="form-group col-md-3">
                    <label for="data-nasc">Data de nascimento</label>
                    <input type="date" id="data-nasc" name="data-nasc" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-3">
                    <label for="cep">CEP</label>
                    <input type="text" class="cep form-control" id="cep" name="cep" onblur="enderecoViaCep()"
                        data-mask="00000-000">
                </div>

                <div class="form-group col-md-3">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" class="form-control" id="logradouro" name="logradouro">
                </div>

                <div class="form-group col-md-3">
                    <label for="numero">Número</label>
                    <input type="text" class="form-control" id="numero" name="numero">
                </div>

                <div class="form-group col-md-3">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" id="complemento" name="complemento">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-5">
                    <label for="bairro">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro">
                </div>

                <div class="form-group col-md-5">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade">
                </div>

                <div class="form-group col-md-2">
                    <label for="uf">Estado</label>
                    <select id="uf" class="form-control" name="uf">
                        <option selected></option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="anotacoes">Anotações</label>
                <input type="text" class="form-control" id="anotacoes" name="anotacoes">
            </div>

            <button type="button" class="btn btn-outline-info" onclick="clienteShow()">Cancelar</button>

            <button type="button" class="btn btn-info" onclick="editarCliente()">Enviar</button>

        </form>
    </div>

</div>