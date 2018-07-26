<html>
 <head>
  <title>Users</title>
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
        <li class="breadcrumb-item active">Users</li>
      </ol>
      <a href="addUsers.php" class="btn btn-success" role="button" aria-pressed="true"><span class="fa fa-user-plus"></span>Add New User</a>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#usersModal">
        Launch demo modal
      </button>

      <br>
      <br>
      <!-- DataUsers Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Users
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="loadUsersTable"></div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </div>
  <!-- User Detail Modal -->
  <div class="modal fade" id="usersModal" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usersModalLabel">User Information</h5>
          <center>
            <a href="editUser.php">Edit&nbsp;</a>
            <a href="users.php">Print</a>
          </center>
        </div>
        <div class="modal-body">
                <div class="modal-body">
                    <center>
                    <img src="../files/1.JPG" name="aboutme" width="140" height="140" border="0" class="img-thumbnail"></a>
                    <div class="media-heading"><Strong>Enmanuel De Jesus Gavilan Cruz</Strong></div>
                    <div class="media-heading">Admin</div>
                    <div>egavilan</div>
                    <div>enmanuelgc@gmail.com</div>
                    <center>
                    <hr>                    
                      <tr>
                        <td>Created by:</td>
                        <td>egavilan</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Date created:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Updated by:</td>
                        <td>egavilan</td>
                      </tr>
                      <br>
                      <tr>
                        <td>Date Updated</td>
                        <td>01/24/1988</td>
                      </tr>
                      <br>
                      <br>
                    </center>                          
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--End User Detail Modal -->
</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#loadUsersTable').load('users/usersTable.php');
      $('#btnAddUsers').click(function(){

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

    function deleteData(idUser){
      alertify.confirm('Delete Registered User','Do you want to delete the user?', function(){ 
        $.ajax({
          type:"POST",
          data:"idUser=" + idUser,
          url:"../process/users/deleteUser.php",
          success:function(r){
            if(r==1){
              $('#loadUsersTable').load("users/usersTable.php");
              alertify.success("User successfuly deleted!");
            }else{
              alertify.error("User could not be deleled.");
            }
          }
        });
      }, function(){ 
        alertify.error('Canceled!')
      });
    }

  </script>


<script type="text/javascript">
  $(document).ready(function(){
    
  });
</script>

