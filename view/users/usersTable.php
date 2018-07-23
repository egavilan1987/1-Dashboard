
<?php 

require_once "../../model/connection.php";

      $c=new Connect();
      $connection=$c->connection();

$sql="SELECT id_user, user_name,
user_name,
full_name,
email,
created_date,
status
from users";
$result=mysqli_query($connection,$sql);
?>


<div>
  <table class="table table-hover table-condensed table-bordered" id="dataTable">
    <thead style="background-color: #dc3545;color: white; font-weight: bold;">
      <tr>
        <td>User</td>
        <td>Profile Image</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Registration Date/Time</td>
        <td>Status</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Users</td>
        <td>Roles</td>
        <td>Created By</td>
        <td>Last Update By</td>
        <td>Created Date</td>
        <td>Actions</td>
      </tr>
    </tfoot>
    <tbody >
      <?php 
      while ($row=mysqli_fetch_row($result)) {
        ?>
        <tr >
          <td style="text-align: center;"><?php echo $row[1] ?></td>
          <td style="text-align: center;"><img src="../files/1.JPG" class="rounded" alt="Cinque Terre" width="45" height="45"></td>
          <td style="text-align: center;"><?php echo $row[2] ?></td>
          <td style="text-align: center;"><?php echo $row[4] ?></td>
          <td style="text-align: center;"><?php echo $row[5] ?></td>
          <td style="text-align: center;">
            <?php if ($row[5]=='Active'){?>
              <span class="btn btn-success btn-sm" onclick="updateStatus('<?php echo $row[0]; ?>')">
                  <h>Active</h>
              </span>
            <?php 
            }elseif ($row[5]=='Inactive'){ ?>
              <span class="btn btn-secondary btn-sm" onclick="updateStatus('<?php echo $row[0]; ?>')">
                  <h>Inactive</h>
            </span>
            <?php }else{ ?>
              <span class="btn btn-danger btn-sm" onclick="updateStatus('<?php echo $row[0]; ?>')">
                  <h>Undefined</h>
            </span>
            <?php } ?>
          </td> 
          <td style="text-align: center;">
            <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEditar" onclick="viewData('<?php echo $row[0]; ?>')">
              <span class="fa fas fa-eye"></span>
            </span>
            <span class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalEditar" onclick="updateData('<?php echo $row[0]; ?>')">
              <span class="fa fa-pencil-square-o"></span>
            </span>
            <span class="btn btn-danger btn-xs" onclick="deleteData('<?php echo $row[0]; ?>')">
              <span class="fa fa-trash"></span>
            </span>
          </td>
        </tr>
        <?php 
      }
      ?>
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#dataTable').DataTable();
  } );
</script>

