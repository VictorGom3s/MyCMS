<?php $this->load->view('commons/menu'); ?>

<section class="content">

  <div class="container-alert">
    <div class="alert-success">
      <p>Usuário atualizado com sucesso</p>
      <span class='close-alert'>X</span>
    </div>
  </div>
  
  <div class="cards">
    <div class="card">
      <div class="icon-holder">
        <i class="material-icons">person</i>
      </div>
      <h4>Usuários</h4>
      <p>Administrar usuários do sistema</p>
      <a href="<?=base_url('usuarios')?>" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        <i class="material-icons">edit</i>
      </div>
      <h4>Cabeçalho</h4>
      <p>Alterar textos e informações do cabeçalho.</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        <i class="material-icons">insert_drive_file</i>
      </div>
      <h4>Páginas</h4>
      <p>Adicionar e removar páginas do site</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        <i class="material-icons">edit</i>
      </div>
      <h4>Rodapé</h4>
      <p>Alterar textos e informações do rodapé</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>
  </div>

</section>