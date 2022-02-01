 <?php echo form_open(base_url('signupadmact'), 'role="form"');?><!--//NEW 8 September 2018-->
    <div class="container_form">
      <h1>Sign Up - Admin</h1>
      <p>Silahkan isi biodata diri Anda.</p>
      <hr>
      <label for="nik"><b>NIK</b></label>
      <input type="text" placeholder="Masukkan Nik" name="nik" required>
      <label for="nama"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="nama" required>
      <label for="jk"><b>Jenis Kelamin</b></label><br/>
      <input type="radio" name="jk" value="P">Perempuan
      <input type="radio" name="jk" value="L">Laki-laki
      <br/><br/>
      <label for="notelp"><b>Telp</b></label>
      <input type="text" placeholder="Masukkan Telp" name="notelp" required>

      <label for="notelp"><b>Alamat</b></label><br/>
      <textarea cols="50" rows="5"  name="alamat" required>
        
      </textarea>
      <br/><br/>
      
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password" name="password" required>

  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </form>
