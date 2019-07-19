<section class='login'>
  <div class="login-container">
    <h1>MyCMS</h1>

    <form action="<?=base_url('Login/recoverPassword')?>" method="post" class='login-form' enctype='multipart/form-data'>
      <div class="labelgroup">
        <label for="email">E-mail</label>
        <input type="email" name='email' for="email" placeholder="Digite seu e-mail" class='rounded-input'>
      </div>

      <input type="submit" class="btn-rounded" value="Enviar">
    </form>
  </div>

  <div class="login-footer">
    <hr>
    <ul>
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Contato</a></li>
      <li><a href="#">Copyright</a></li>
    </ul>
  </div>
</section>