<?php $this->load->view('commons/menu'); ?>

<section class="content">
  
  <div class="container">
    <div class="row">
      <h3 class='title'>Usuários</h3>
      <a href="<?= base_url('novo') ?>" class='btn-orange-outline'>Novo</a>
    </div>

    <div class="wrapper">
      <table class='table'>
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Nível</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($users as $row => $user){ ?>
          <tr>
            <td><?=$user->id?></td>
            <td><?=$user->nome?></td>
            <td><?=$user->nivel?></td>
            <td>
              <div class="dropdown">
                <span class="dropdown-button">Ações ▼</span>
                <div class="dropdown-button-content">
                  <a href="<?=base_url('editar/'.$user->id)?>">Editar</a>
                  <a href="<?=base_url('excluir/'.$user->id)?>">Excluir</a>
                </div>
              </div>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>