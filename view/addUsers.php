<html>
 <head>
  <title>Create New User</title>
  <?php require_once "menu.php"; ?>
 </head>
 <body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
          <a href="users.php">Users</a>
        </li>
        <li class="breadcrumb-item active">New Users</li>
      </ol>
      <a href="users.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-fw fa-users"></span>Users</a>
      <br>
      <br>
      <!-- Example DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user-plus"></i> Users</div>
        <div class="card-body">
          </tr>
          <div class="table-responsive">
            <div class="container">
              <form id="frmAddUsers">
                <h2>Create New User</h2>
                <hr class="colorgraph">
                <p style="color:red"><i>*Required</i></p>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="user" id="user" class="form-control input-lg" placeholder="User*" tabindex="1" required>
                      <div id="username_error_message" style="color:red"></div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="email" id="email" class="form-control input-lg" placeholder="E-mail*" tabindex="2">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="employee" id="employee" class="form-control input-lg" placeholder="Employee Name*" tabindex="3">
                  <div>Error</div>
                </div>
                <div class="form-group">
                  <select name="gender" id="gender" class="form-control">
                    <option value="" hidden>Role*</option>
                    <option>Admin</option>
                    <option>User</option>
                  </select>
                  <div>Error</div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password*" tabindex="5">
                      <div>Error</div>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password*" tabindex="6">
                      <div>Error</div>
                    </div>
                  </div>
                </div>
                    <button type="button" class="btn btn-danger">Cancel</button>
                    <button type="button" id="btnAddUsers" class="btn btn-primary">Save</button>
              </form>            
          </div>
        </div>
      </div>
    </div>
  </div>



</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#btnAddUsers').click(function(){

      alertify.alert("You must fill all of the fields!");  

      if ( $.trim( $('#user').val() ) == '' ){
          alert("Input is blank!");
          $('#frmUsers')[0].reset();
          return false;
        }              

        data=$('#frmUsers').serialize();
        $.ajax({
          type:"POST",
          data:data,
          url:"../process/users/addUsers.php",
          success:function(r){
            if(r==1){
            $('#frmUsers')[0].reset();
            $('#loadUsersTable').load('users/usersTable.php');
            alertify.success("User successfuly added.");
          }else{
            alertify.error("Could not add the user to the list.");
          }
        }
      });
      });
    });

  </script>


<script>

  $("#user").focusout(function() {
      check_username();
  });

  function check_username() {
    
    var username_length = $("#user").val().length;
    
    if( $.trim( $('#user').val() ) == '' ){
      $("#username_error_message").html("Input is blank!");
      user.style.border = "1px solid red";
    } else if (username_length < 5 || username_length > 20) {
      $("#username_error_message").html("Should be between 5-20 characters");
      user.style.border = "1px solid red";
      $("#username_error_message").show();
      error_username = true;
    } else {
      $("#username_error_message").hide();
      user.style.border = "1px solid #ccc";
    }
  
  }
</script>