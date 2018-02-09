<div class="login-message">
  <?=(!empty($message)) ? $message : '';?>
</div>
<script>var login_url = '<?=site_url('login')?>';</script>
<?=form_open('login', 'class="login-form" id="login-form"');?>
  <?php if (!empty($return_url)):?>
  <input type="hidden" name="return_url" value="<?=$return_url?>" id="return_url" />
  <?php endif;?>
  <div class="input-container">
    <i class="icon ion-person"></i>
    <?=form_input('identity','','class="input" id="identity" placeholder="Username" autocomplete="off" autofocus');?>
  </div>
  <small class="validation" id="identity_validate"></small>
  <div class="input-container">
    <i class="icon ion-lock-combination"></i>
    <?=form_password('password','','class="input" id="password" placeholder="Password" autocomplete="off"');?>
    <i id="show-password" class="icon ion-eye"></i>
  </div>
  <small class="validation" id="password_validate"></small>
  <?php if (!empty($captcha)) { echo '<div class="rememberme-container">'.$captcha->render().'</div>'; } ?>
  <div class="rememberme-container">
    <input type="checkbox" name="rememberme" id="rememberme" />
    <label for="rememberme" class="rememberme">
      <span>Ingatkan saya</span>
    </label>
    <!--a class="forgot-password" href="<?=site_url('lostpass')?>">Lupa Password?</a-->
  </div>
  <?=form_submit('submit', 'Log in', 'class="button" id="login-button"');?>
    <!--a href="#" class="register">Register</a-->
    <?=form_close();?>
      <!--div class="resend-activation">
  Sudah terdaftar tapi belum menerima link aktivasi? <br/><a href="#">Kirim ulang link aktivasi</a>
</div>
<div class="separator">
    <span class="separator-text">atau</span>
</div>
<div class="socmed-login">
  <a href="#facebook" class="socmed-btn facebook-btn">
    <i class="icon ion-facebook"></i>
    <span>Login dengan akun Facebook</span>
  <a>
  <a href="#g-plus" class="socmed-btn google-btn">
    <i class="icon ion-google"></i>
    <span>Login dengan akun Google</span>
  <a>
</div-->