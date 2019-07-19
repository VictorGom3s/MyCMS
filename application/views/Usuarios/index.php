<?php $this->load->view('commons/menu'); ?>

<section class="content">
  <div class="container">
    <div class="row">
      <h3 class='title'>Usuários</h3>
      <a href="<?= base_url('Usuarios/newUser') ?>" class='btn-orange-outline'>Novo</a>
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
          <tr>
            <td>01</td>
            <td>Victor</td>
            <td>Admin</td>
            <td>
              <div class="dropdown">
                <span class="dropdown-button">Ações ▼</span>
                <div class="dropdown-button-content">
                  <a href="#">Editar</a>
                  <a href="#">Excluir</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>02</td>
            <td>Victor</td>
            <td>Admin</td>
            <td>
              <div class="dropdown">
                <span class="dropdown-button">Ações ▼</span>
                <div class="dropdown-button-content">
                  <a href="#">Editar</a>
                  <a href="#">Excluir</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>03</td>
            <td>Victor</td>
            <td>Admin</td>
            <td>
              <div class="dropdown">
                <span class="dropdown-button">Ações ▼</span>
                <div class="dropdown-button-content">
                  <a href="#">Editar</a>
                  <a href="#">Excluir</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>04</td>
            <td>Victor</td>
            <td>Admin</td>
            <td>
              <div class="dropdown">
                <span class="dropdown-button">Ações ▼</span>
                <div class="dropdown-button-content">
                  <a href="#">Editar</a>
                  <a href="#">Excluir</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>