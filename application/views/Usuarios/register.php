<?php $this->load->view('commons/menu'); ?>

<section class="content">
  <div class="container">
    <div class="row">
      <h3 class='title'>Usuários</h3>
    </div>
    <div class="wrapper">

      <form action="<?= base_url('Usuarios/newUser') ?>" method="post" class="register" autocomplete="off" enctype="multipart/form-data">
        <!-- Preventing Chrome and Firefox autocomplete; -->
        <input autocomplete="off" name="hidden" type="password" style="display:none;">

        <a href="<?= base_url('Usuarios') ?>" class="btn-return">◄ Voltar</a>

        <div class="labelgroup">
          <label for="nome">Nome</label>
          <input type="text" placeholder="Digite seu nome completo" name="nome" value="<?=isset($nome) && $nome ? $nome : ''?>">
        </div>

        <div class="labelgroup">
          <label for="email">E-mail</label>
          <input type="email" placeholder="Digite seu e-mail" name="email" value="<?=isset($email) && $email ? $email : ''?>">
        </div>

        <div class="labelgroup">
          <label for="senha">Senha</label>
          <input type="password" placeholder="Digite uma senha de 6 digitos" name="senha">
        </div>

        <div class="labelgroup">
          <label for="nivel">Nível</label>
          <select name="nivel" id="nivel">
            <option value="">Selecione o nível</option>
            <option value="adm" <?= isset($nivel) && $nivel == "adm" ? 'selected' : ''?> >Administrador</option>
            <option value="comum" <?= isset($nivel) && $nivel == "comum" ? 'selected' : ''?> >Comum</option>
          </select>
        </div>

        <input type="submit" class="btn-orange" value="Cadastrar">
      </form>

    </div>
  </div>
</section>