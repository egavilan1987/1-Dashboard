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
  <div class="modal fade" id="modalView" tabindex="-1" role="dialog" aria-labelledby="usersModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="usersModalLabel">User Information</h5>
          <center>


          <div class="modal-body">
            <form action="editUser.php" method="get">
              <input type="text"  hidden="" id="idUser" name="idUser">
              <input type="submit" id="submit" value="click">



              

            </form>
          </div>


            <?php echo $idUser = 13; ?>
            
            <a class="btn btn-success btn-xs" href="editUser.php?id=<?php echo $idUser; ?>">
              <span  class="fa fa-pencil-square-o"></span>
            </a>






            <a class="btn btn-secondary btn-xs" href="editUser.php?id=<?php echo $idUser; ?>">
                  <span  class="fa fa-print"></span>
            </a>
          </center>
        </div>
        <div class="modal-body">
                <div class="modal-body">
                    <center>
                    <img src="../files/1.JPG" name="aboutme" width="140" height="140" border="0" class="img-thumbnail">
                    <br>
                    


                    

                    <div class="media-heading">
                      <Strong ><h4>
                        <div id="viewFullName"></div></h4>
                      </Strong>
                    </div>

                    <font color="red" id="viewStatus"></font>
                    <div id="viewRole"></div>
                    <div id="viewUser"></div>
                    <div id="viewEmail"></div>

                    <hr>                    
                      <tr>
                        <Strong>
                          <td>Created by:</td>
                        </Strong>
                        <div id="viewCreatedBy"></div>
                      </tr>
                      <tr>
                        <Strong>
                          <td>Date created:</td>
                        </Strong>
                        <div id="viewDateCreated"></div>
                      </tr>
                      <tr>
                        <Strong>
                          <td>Last Update by:</td>
                        </Strong>
                        <div id="viewUpdatedBy"></div>
                      </tr>
                      <tr>
                        <Strong>
                          <td>Last update date:</td>
                        </Strong>
                        <div id="viewUpdatedDate"></div>
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

    function addUser(idUser){
      $.ajax({
        type:"POST",
        data:"idUser=" + idUser,
        url:"../process/users/getUserData.php",
        success:function(r){
          data=jQuery.parseJSON(r);
          $('#idUser').val(data['id_user']);
          $('#viewFullName').text(data['full_name']);
          $('#viewUser').text(data['user_name']);
          $('#viewStatus').text(data['status']);
          $('#viewRole').text(data['user_role']);
          $('#viewEmail').text(data['email']);
          $('#viewCreatedBy').text(data['created_by_user']);
          $('#viewDateCreated').text(data['created_date']);
          $('#viewUpdatedBy').text(data['updated_by_user']);
          $('#viewUpdatedDate').text(data['updated_date']);

        }
      });
    }


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

