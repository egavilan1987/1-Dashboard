<html>
 <head>
  <title>Departments</title>
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
        <li class="breadcrumb-item active">Departments</li>
      </ol>
      <span class="btn btn-primary" data-toggle="modal" data-target="#addDepartmentModal">+ Add New Department</span>
      <br>
      <br>
      <!-- Example DataDepartments Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Departments</div>
        <div class="card-body">
          </tr>
          <div class="table-responsive">
            <div id="loadClientsTable"></div>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  </div>

  <!-- Add New Department Modal-->
  <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmDepartments">
            <label>Department</label>
            <input type="text" class="form-control input-sm" name="department" id="department">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" id="btnAddDepartments" class="btn btn-primary" data-dismiss="modal">Save</button>
        </div>
      </div>
    </div>
  </div>


</body>
</html>

<script type="text/javascript">
    $(document).ready(function(){
      $('#loadClientsTable').load('departments/departmentsTable.php');
      $('#btnAddDepartments').click(function(){

      if ( $.trim( $('#department').val() ) == '' ){
          alert("Input is blank!");
          $('#frmDepartments')[0].reset();
          return false;
        }              

        data=$('#frmDepartments').serialize();
        $.ajax({
          type:"POST",
          data:data,
          url:"../process/departments/addDepartments.php",
          success:function(r){
            if(r==1){
            $('#frmDepartments')[0].reset();
            $('#loadClientsTable').load('departments/departmentsTable.php');
            alertify.success("Department successfuly added.");
          }else{
            alertify.error("Could not add the department to the list.");
          }
        }
      });
      });
    });

  </script>


<script type="text/javascript">
  $(document).ready(function(){
    
  });
</script>

