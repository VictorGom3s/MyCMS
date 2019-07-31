<aside>
  <div class='head-menu'>
    <a href="#" class='btn-menu oculto'>
      <i class="material-icons">menu</i>
    </a>
    <h3><a href="<?= base_url('/') ?>">MyCMS</a></h3>
  </div>

  <div class="user-holder">
    <div class="icon-holder">
      <i class="material-icons">person</i>
    </div>
    <p>Usuário Logado</p>
  </div>
  <hr>
  <div class="menu">
    <ul>
      <li class=''>
        <a href="<?= base_url('usuarios') ?>">
          <i class="material-icons">person</i>
          Usuários
        </a>
      </li>
      <li>
        <a href="<?= base_url('cabecalho') ?>">
          <i class="material-icons">edit</i>
          Cabeçalho
        </a>
      </li>
      <li>
        <a href="<?= base_url('paginas') ?>">
          <i class="material-icons">insert_drive_file</i>
          Páginas
        </a>
      </li>
      <li>
        <a href="<?= base_url('rodape') ?>">
          <i class="material-icons">edit</i>
          Rodapé
        </a>
      </li>
    </ul>
  </div>

  <div class="footer-menu">
    <ul>
      <li>
        <a href="<?=base_url('deslogar')?>">
          <i class="material-icons">power_settings_new</i>
          Sair
        </a>
      </li>
    </ul>
  </div>
</aside>

<?php if($this->session->flashdata()){ ?>
  <div class="container-alert">    
      <?php
        if($this->session->flashdata('danger')){?>
          <div class="alert-danger">
          <?php echo $this->session->flashdata('danger');
        }else if($this->session->flashdata('success')){?>
          <div class="alert-success">
          <?php echo $this->session->flashdata('success');
        }else if($this->session->flashdata('info')){?>
          <div class="alert-info">
          <?php echo $this->session->flashdata('info');
        } 
      ?>
      <span class='close-alert'>X</span>
    </div>
  </div>
<?php } ?>