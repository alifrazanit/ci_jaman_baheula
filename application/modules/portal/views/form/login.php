 <?php echo form_open(base_url('loginact'), 'role="form"');?>
    <div class="container_form">
      <h1>Login</h1>
      <p>Masukan username dan password Anda.</p>
      <hr> 
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="password" required>
        <button type="submit" class="loginbtn">Sign Up</button>
    </div>
  </form>
