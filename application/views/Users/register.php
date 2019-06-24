<?php $this->load->view('commons/menu'); ?>

<section class="content">
  <div class="container">
    <div class="row">
      <h3 class='title'>Usuários</h3>
    </div>
    <div class="wrapper">

      <form action="<?= base_url('Pages/usersRegister') ?>" method="post" class="register" autocomplete="off" enctype="multipart/form-data">
        <!-- Preventing Chrome and Firefox autocomplete; -->
        <input autocomplete="off" name="hidden" type="password" style="display:none;">

        <a href="<?= base_url('Pages/usersIndex') ?>" class="btn-return">◄ Voltar</a>

        <div class="labelgroup">
          <label for="nome">Nome</label>
          <input type="text" placeholder="Digite seu nome completo" name="nome">
        </div>

        <div class="labelgroup">
          <label for="email">E-mail</label>
          <input type="email" placeholder="Digite seu e-mail" name="email">
        </div>

        <div class="labelgroup">
          <label for="senha">Senha</label>
          <input type="password" placeholder="Digite uma senha de 6 digitos" name="senha">
        </div>

        <div class="labelgroup">
          <label for="nivel">Nível</label>
          <select name="nivel" id="nivel">
            <option value="">Selecione o nível</option>
            <option value="adm">Administrador</option>
            <option value="comum">Comum</option>
          </select>
        </div>

        <input type="submit" class="btn-orange" value="Cadastrar">
      </form>

    </div>
  </div>
</section>