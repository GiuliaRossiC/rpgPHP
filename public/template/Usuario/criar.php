<form action="index.php?controller=usuario&action=criar" method="Post">
    <input name="usuario">
    <input name="email">
    <?php
    if (isset($data['email']))
        echo $data['email'];
    ?>
    <input name="confirmarEmail">
    <input name="senha">
    <input name="confirmarSenha">
    <input name="dataNascimento">
    <div>
    <input class="form-check-input" type="radio" name="sexo"
           id="sexoF"
           value="feminino">
    <label class="form-check-label" for="sexoF">Feminino</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="sexo"
               id="sexoM"
               value="masculino">
        <label class="form-check-label" for="sexoM">Masculino</label>
    </div>
    <select name="estadoCivil" class="form-control" id="inputEstadoCivil">
        <option></option>
        <option value="solteiro">Solteiro(a)</option>
        <option value="casado">Casado(a)</option>
        <option value="divorciado">Divorciado(a)</option>
        <option value="viuvo">Viúvo(a)</option>
        <option value="separadoJudicialmente">Separado Judiciamente</option>
    </select>
    <input name="telefoneResidencial" type="number" class="form-control"
           id="inputTelefoneRes">
    <input name="telefoneCelular" type="number" class="form-control"
           id="inputTelefoneCelular">
    <input name="endereco" type="text" class="form-control" id="inputEndereco">
    <input type="checkbox" class="form-check-input" id="aceitaCadastro">
    <button type="submit">salvar</button>
</form>