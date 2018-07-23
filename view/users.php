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
          </button>
          <a href="#" class="tooltip-test" title="Tooltip">Edit</a>
        </div>
        <div class="modal-body">
               <!-- DataUsers Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i> User Details
              <a href="#" class="tooltip-test" title="Tooltip">Edit</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Kathmandu,Nepal</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted"></div>
          </div>
        </div>
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
 
 
 
 
 
 		function addUser(idUser){
			$.ajax({
				type:"POST",
				data:"idUser=" + idUser,
				url:"../process/users/getUserData.php",
				success:function(r){
					data=jQuery.parseJSON(r);
					$('#idUser').val(data['id_user']);
					$('#showUserName').val(data['user_name']);
					$('#showEmail').val(data['email']);
					$('#showFullName').val(data['full_name']);
				        $('#showUserRole').val(data['user_role,']);
				        $('#showPassword').val(data['password']);
				        $('#showStatus').val(data['status']);
				        $('#showCreatedBy').val(data['created_by_user']);
				        $('#showCreatedDate').val(data['created_date']);
				        $('#showUpdatedBy').val(data['updated_by_user']);
				       $('#showUpdatedDate').val(data['updated_date']);
				}
			});
		}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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

