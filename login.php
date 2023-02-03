    <!-- Contact Section -->
    <section id="login">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">SILAHKAN MASUK UNTUK AKSES ADMIN</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <?php 
              if (!empty($_SESSION['inventory'])) {
                echo "<h1 class='text-center'>Anda Sudah Login</h1>";
              }else{
             ?>
             <form name="login" id="logintForm" method="POST" action="#login">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Username</label>
                  <input class="form-control" id="username" name="username" type="text" placeholder="Username" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Password</label>
                  <input class="form-control" id="password" type="password" placeholder="Password" name="password" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" name="login" id="sendMessageButton">MASUK</button>
              </div>
            </form>
            <?php } ?>
          </div>
        </div>
      </div>
      <?php  
require_once 'login_proses.php';
?>
    </section>
