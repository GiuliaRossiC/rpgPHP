<form method="Post">
    <div style="margin: 10px">
        <label>Usuario</label>
        <input name="usuario">
        <?php
        if (isset($data['usuario']))
            echo '<span style="color:red ">' . $data['usuario'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Email</label>
        <input name="email">
        <?php
        if (isset($data['email']))
            echo '<span style="color:red ">' . $data['email'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Confirmar Email:</label>
        <input name="confirmarEmail">
        <?php
        if (isset($data['confirmarEmail']))
            echo '<span style="color:red ">' . $data['confirmarEmail'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Senha</label>
        <input name="senha">
        <?php
        if (isset($data['senha']))
            echo '<span style="color:red ">' . $data['senha'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Confirmar Senha</label>
        <input name="confirmarSenha">
        <?php
        if (isset($data['confirmarSenha']))
            echo '<span style="color:red ">' . $data['confirmarSenha'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Data Nascimento:</label>
        <input type="date" class="form-control" name="dataNascimento" id="inputNascimento">
        <?php
        if (isset($data['dataNascimento']))
            echo '<span style="color:red ">' . $data['dataNascimento'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Informe seu sexo:</label>
        <input class="form-check-input" type="radio" name="sexo"
               id="sexoF"
               value="feminino">
        <label class="form-check-label" for="sexoF">Feminino</label>
        <input class="form-check-input" type="radio" name="sexo"
               id="sexoM"
               value="masculino">
        <label class="form-check-label" for="sexoM">Masculino</label>
        <?php
        if (isset($data['sexo']))
            echo '<span style="color:red ">' . $data['sexo'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Estado Civil:</label>
        <select name="estadoCivil" class="form-control" id="inputEstadoCivil">
            <option></option>
            <option value="solteiro">Solteiro(a)</option>
            <option value="casado">Casado(a)</option>
            <option value="divorciado">Divorciado(a)</option>
            <option value="viuvo">Viúvo(a)</option>
            <option value="separadoJudicialmente">Separado Judiciamente</option>
        </select>
        <?php
        if (isset($data['estadoCivil']))
            echo '<span style="color:red ">' . $data['estadoCivil'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Telefone Residencial</label>
        <input name="telefoneResidencial" type="number" class="form-control"
               id="inputTelefoneRes">
        <?php
        if (isset($data['telRes']))
            echo '<span style="color:red ">' . $data['telRes'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Telefone Celular</label>
        <input name="telefoneCelular" type="number" class="form-control"
               id="inputTelefoneCelular">
        <?php
        if (isset($data['telCel']))
            echo '<span style="color:red ">' . $data['telCel'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Endereço</label>
        <input name="endereco" type="text" class="form-control" id="inputEndereco">
        <?php
        if (isset($data['endereco']))
            echo '<span style="color:red ">' . $data['endereco'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <label>Aceito os termos</label>
        <input name="actCadastro" type="checkbox" class="form-check-input" id="aceitaCadastro">
        <?php
        if (isset($data['actCadastro']))
            echo '<span style="color:red ">' . $data['actCadastro'] . "</span>";
        ?>
    </div>
    <div style="margin: 10px">
        <button type="submit">Cadastrar</button>
    </div>
</form>