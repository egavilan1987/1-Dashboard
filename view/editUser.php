<html>
 <head>
  <title>Edit User</title>
  <?php require_once "menu.php"; 
    $id = $_GET['idUser'];
  ?>
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
        <li class="breadcrumb-item active">Edit User</li>
      </ol>
      <a href="users.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-fw fa-users"></span>&nbsp;&nbsp;Users&nbsp;&nbsp;</a>
      <br>
      <br>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked admin-menu">            
                <li class="active">
                  <a href="#" class="btn btn-primary btn-ms" role="button" aria-pressed="true" data-target-id="home"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Profile Settings &nbsp;&nbsp;&nbsp;&nbsp;</a>
                </li>
                <br><br>
                <li>
                  <a href="#" class="btn btn-primary btn-ms" role="button" aria-pressed="true" data-target-id="widgets"><i class="fa fa-lock" aria-hidden="true"></i> &nbsp;&nbsp;Change Passworld</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9 well admin-content" id="home">        
          <!-- Example DataUsers Card-->
        <div class="card mb-3">
        <div class="card-header">
        <i class="fa fa-pencil"></i>  Edit User</div>
        <div class="card-body">       
          <div class="table-responsive">
           <div class="container">
            <!------ Include the above in your HEAD tag ---------->
           <div class="container">
                      <div class="row">
                          <div class="col-md-12  toppad  offset-md-0 ">
                            <div id="alert_error_message" class="alert alert-danger alert-dismissible fade show" role="alert">
                               <i class="fa fa-exclamation-triangle"></i>
                              <strong>Alert!</strong> Please check in on some of the fields below.
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>
                          </div>
                          <div class="col-md-6  offset-md-0  toppad" >
                            <form id="frmEditUser">
                              <h2>Edit User</h2>

                              <p style="color:red"><i>*Required</i></p>
                              <div class="row">
                              </div>
                              <input type="text" hidden="" id="idUser" name="idUser">
                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="updateUserName" id="updateUserName" class="form-control input-lg" placeholder="Username*">
                                <div id="username_error_message" style="color:red"></div>
                              </div>

                              <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="updateEmail" id="updateEmail" class="form-control input-lg" placeholder="E-mail*">
                                <div id="email_error_message" style="color:red"></div>
                              </div> 

                              <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" name="updateFullName" id="updateFullName" class="form-control input-lg" placeholder="Employee Name*">
                                <div id="employee_error_message" style="color:red"></div>
                              </div>

                              <div class="form-group">
                                <label>Role</label>
                                <select name="updateRole" id="updateRole" class="form-control">
                                  <option value="" hidden>Role</option>
                                  <option>Admin</option>
                                  <option>User</option>
                                </select>
                                <div id="role_error_message" style="color:red"></div>
                              </div>

                              <div class="form-group">
                                <label>Status</label>
                                <select name="updateStatus" id="updateStatus" class="form-control">
                                  <option value="" hidden>Status</option>
                                  <option>Active</option>
                                  <option>Inactive</option>
                                </select>
                                <div id="status_error_message" style="color:red"></div>
                              </div>

                                  <button type="button" id="btnCancel"  class="btn btn-danger">Cancel</button>
                                  <button type="button" id="btnUpdateUser" class="btn btn-primary">Save</button>
                            </form>
                          </div>

                          <div class="col-md-6  offset-md-0  toppad">
                            <dt><label for="upload-profile-picture">Profile picture</label></dt>
                              <div align="center">                                             
                                      <dd class="avatar-upload-container clearfix">
                                        <img class="img-thumbnail" src="https://avatars3.githubusercontent.com/u/29561850?s=400&amp;u=d29c527f6afa334781a92b5ee88cfad35ffd1d00&amp;v=4" width="200" height="200" alt="@egavilan1987" />
                                        <div class="avatar-upload">
                                          <br>
                                            <input id="upload-profile-picture" type="file" class="manual-file-chooser width-full height-full ml-0 js-manual-file-chooser">
                                          
                                        </div> <!-- /.avatar-upload -->
                                      </dd>
                                      <a href="#" class="btn btn-primary ml-2">Save new profile image.</a>                       
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Example DataUsers Card-->
        <div class="col-md-9 well admin-content" id="widgets">
          <!-- Example DataUsers Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pencil"></i>  Edit User Password</div>
            <div class="card-body">       
              <div class="table-responsive">
                <div class="container">
                  <form id="frmEditUserPassword">

                    
                    <div id="alert_password_error_message" class="alert alert-danger alert-dismissible fade show" role="alert">
                      <i class="fa fa-exclamation-triangle"></i>
                      <strong>Alert!</strong> Please check in on some of the fields below.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <p style="color:red"><i>*Required</i></p>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">             
                        <input type="text" hidden="" id="idUpdatePassword" name="idUpdatePassword">
                        <div class="form-group">
                          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="New Password*">
                          <div id="password_error_message" style="color:red"></div>
                        </div>
                        <div class="form-group">
                          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password*">
                          <div id="password_confirmation_error_message" style="color:red"></div>
                        </div>
                          <button type="button" id="btnCancelPassword"  class="btn btn-danger">Cancel</button>
                          <button type="button" id="btnSavePassword" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>


<script>
$(function() {
  var error_username = false;
  var error_email = false;
  var error_employee = false;
  var error_role = false;
  var error_status = false;
  var error_password = false;
  var error_retype_password = false;

  $("#updateUserName").focusout(function() {
      check_username();
    });
   $("#updateEmail").focusout(function() {
      check_email();
    });
   $("#updateFullName").focusout(function() {
      check_employee();
    });
   $("#role").focusout(function() {
      check_role();
    });
    $("#status").focusout(function() {
      check_status();
    });
    $("#password").focusout(function() {
      check_password();
    });
    $("#password_confirmation").focusout(function() {
      check_password_confirmation();
    });
    function check_username() {
    
    var username_length = $("#updateUserName").val().length;
    
    if( $.trim( $('#updateUserName').val() ) == '' ){
      $("#username_error_message").html("Input is blank!");
      $("#username_error_message").show();
      error_username = true;
      updateUserName.style.border = "1px solid red";
      }else if(username_length < 5 || username_length > 20) {
      $("#username_error_message").html("Should be between 5-20 characters");
      $("#username_error_message").show();
      error_username = true;
      updateUserName.style.border = "1px solid red";
      $("#username_error_message").show();
      error_username = true;
      }else{
      $("#username_error_message").hide();
      updateUserName.style.border = "1px solid #ccc";
    }
  
  }
   function check_email() {
    
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    var email_length = $("#updateEmail").val().length;
    
    if( $.trim( $('#updateEmail').val() ) == '' ){
      $("#email_error_message").html("Input is blank!");
      $("#email_error_message").show();
      error_email = true;
      updateEmail.style.border = "1px solid red";
      }else if(!(pattern.test($("#updateEmail").val()))) {
      $("#email_error_message").html("Invalid email address");
      error_email = true;
      updateEmail.style.border = "1px solid red";
      $("#email_error_message").show();
      error_email = true;
      } else {
      $("#email_error_message").hide();
      updateEmail.style.border = "1px solid #ccc";
      }
  
  }
   function check_employee() {
    
    var employee_length = $("#updateFullName").val().length;
    
    if( $.trim( $('#updateFullName').val() ) == '' ){
      $("#employee_error_message").html("Input is blank!");
      $("#employee_error_message").show();
      error_employee = true;
      updateFullName.style.border = "1px solid red";
      }else if(employee_length < 5 || employee_length > 50) {
      $("#employee_error_message").html("Should be between 5-20 characters");
      $("#employee_error_message").show();
      error_employee = true;
      updateFullName.style.border = "1px solid red";
      }else{
      $("#employee_error_message").hide();
      updateFullName.style.border = "1px solid #ccc";
    }
  
  }
   function check_password() {
    
    var password_length = $("#password").val().length;
    
    if(password_length < 8) {
      $("#password_error_message").html("At least 8 characters!");
      $("#password_error_message").show();
      error_password = true;
      password.style.border = "1px solid red";
    } else {
      $("#password_error_message").hide();
      password.style.border = "1px solid #ccc";
    }
  
  }
   function check_password_confirmation() {
    
    var password = $("#password").val();
    var retype_password = $("#password_confirmation").val();
    
    if(password !=  retype_password) {
      $("#password_confirmation_error_message").html("Passwords don't match");
      $("#password_confirmation_error_message").show();
      error_retype_password = true;
      password_confirmation.style.border = "1px solid red";
      } else {
      $("#password_confirmation_error_message").hide();
      password_confirmation.style.border = "1px solid #ccc";
         }
      }

      $('#btnUpdateUser').click(function(){
        error_username = false;
        error_email = false;
        error_employee = false;
        check_username();
        check_email();
        check_employee();

      if(error_username == false && error_email == false && error_employee == false) {          
          $("#alert_error_message").hide();

          data=$('#frmEditUser').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/users/updateUser.php",
            success:function(r){
            if(r==1){
              alertify.success("User information successfully updated!");
          }else{
              alertify.error("Could not update the user information.");
              }
            }
          });
          return false; 
        }else{
          $("#alert_error_message").show();
          return false; 
        }
    });
      $('#btnCancel').click(function(){
        alertify.confirm('Cancel User Information Updating.','Do you want to cancel user information updating?', function(){
         window.location.replace("users.php");
        }, function(){ 
          alertify.success("Operation Canceled!");
        });
    });

      $('#btnSavePassword').click(function(){
        error_password = false;
        error_retype_password = false;
        check_password();
        check_password_confirmation();

      if(error_password == false && error_retype_password == false) {          
          $("#alert_password_error_message").hide();

          data=$('#frmEditUserPassword').serialize();
          $.ajax({
            type:"POST",
            data:data,
            url:"../process/users/updatePassword.php",
            success:function(r){
            if(r==1){
              $('#frmEditUserPassword')[0].reset();
              alertify.success("Password changed sucessfully!");

          }else{
              alertify.error("Could not update the user information.");
              }
            }
          });
          return false; 
        }else{
          $("#alert_password_error_message").show();
          return false; 
        }
    });
      $('#btnCancelPassword').click(function(){
        alertify.confirm('Cancel User Information Updating.','Do you want to cancel user information updating?', function(){
         window.location.replace("users.php");
        }, function(){ 
          alertify.success("Operation Canceled!");
        });
    });

});
</script>
</script>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#alert_error_message").hide(); 
      $("#alert_password_error_message").hide();

      var navItems = $('.admin-menu li > a');
      var navListItems = $('.admin-menu li');
      var allWells = $('.admin-content');
      var allWellsExceptFirst = $('.admin-content:not(:first)');
    
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });

    });

    var idUser ="<?php echo $id; ?>";
    addUser(idUser);



    function addUser(idUser){
      $.ajax({
        type:"POST",
        data:"idUser=" + idUser,
        url:"../process/users/getUserData.php",
        success:function(r){
          
          data=jQuery.parseJSON(r);
          $('#idUser').val(data['id_user']);
          $('#idUpdatePassword').val(data['id_user']);
          $('#updateUserName').val(data['user_name']);
          $('#updateEmail').val(data['email']);
          $('#updateFullName').val(data['full_name']);
          $('#updateRole').val(data['user_role']);
          $('#updateStatus').val(data['status']);              
        }
      });
    }

  </script>


