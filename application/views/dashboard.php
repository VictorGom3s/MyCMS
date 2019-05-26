<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyCMS</title>
  <link rel="stylesheet" href="<?=base_url('assets/css/main.css')?>">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
</head>
<body>

  <aside>
    <div class='head-menu'>
      <h3>MyCMS</h3>
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
        <li>Usuários</li>
        <li>Cabeçalho</li>
        <li>Páginas</li>
        <li>Rodapé</li>
      </ul>
    </div>
    <hr>

    <div class="footer-menu">
      <ul>
        <li>Sair</li>
      </ul>
    </div>
  </aside>

  <section id='content' class='content'>

    <div class="card">
      <div class="icon-holder">
        icon
      </div>
      <h4>Usuários</h4>
      <p>Administrar usuários do sistema</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        icon
      </div>
      <h4>Cabeçalho</h4>
      <p>Alterar textos e informações do cabeçalho.</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        icon
      </div>
      <h4>Páginas</h4>
      <p>Adicionar e removar páginas do site</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

    <div class="card">
      <div class="icon-holder">
        icon
      </div>
      <h4>Rodapé</h4>
      <p>Alterar textos e informações do rodapé</p>
      <a href="#" class='btn-orange'>Acessar</a>
    </div>

  </section>
</body>
</html>