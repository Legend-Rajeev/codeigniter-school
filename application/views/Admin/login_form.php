<div class="container">
<div class="col-md-5 m-auto mt-5">
  <div class="msg bg-danger p-2 text-white"></div>
</div>
<div class="col-md-5 m-auto mt-3  bg-info">
  <form class="p-5">
      <div class="form-group">
      <div class="mb-3">
        <label for="username" class="form-label text-white ">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label text-white ">Password</label>
        <input type="text" class="form-control" id="password" name="password">
      </div>
      <button type="button" class="btn btn-primary" id="submit" name="submit">Submit</button>
    </div>
  </form>
</div>
</div>
<script>

  $(document).ready(function(){
    $('#submit').on('click', login);

    function login(){
      let username = $('#username').val();
      let password = $('#password').val();
      let error_type = "";

      if(username == ""){
        $('.msg').html('Please enter username !');
        error_type = "yes";
      }
      if(password == ""){
        $('.msg').html('Please enter password !');
        error_type = "yes";
      }
      if(error_type == ""){
        $.ajax({
          url : "login",
          type : "POST",
          data : {username:username, password:password},
          success : function(data){
            let response = JSON.parse(data);
            console.log(response);
            $('.msg').html('');
            if(response.result == "success"){
              window.location.href = "<?= base_url("Admin/posts"); ?>";
            }
            $('.msg').html(response.msg);
          }
        })
      }

    }
  })

</script>