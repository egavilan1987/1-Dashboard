
<?php 

require_once "../../model/connection.php";

      $c=new Connect();
      $connection=$c->connection();

$sql="SELECT id_department,
name_department,
created_by_user,
created_date,
updated_by_user,
updated_date
from departments";
$result=mysqli_query($connection,$sql);
?>


<div>
  <table class="table table-hover table-condensed table-bordered" id="dataTable">
    <thead style="background-color: #dc3545;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Departments</td>
        <td>Created By</td>
        <td>Created Date</td>
        <td>Last Update By</td>
        <td>Updated Date</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tfoot style="background-color: #ccc;color: white; font-weight: bold;">
      <tr>
        <td>ID</td>
        <td>Departments</td>
        <td>Created By</td>
        <td>Created Date</td>
        <td>Last Update By</td>
        <td>Updated Date</td>
        <td>Actions</td>
      </tr>
    </tfoot>
    <tbody >
      <?php 
      while ($row=mysqli_fetch_row($result)) {
        ?>
        <tr >
          <td><?php echo $row[0] ?></td>
          <td><?php echo $row[1] ?></td>
          <td><?php echo $row[2] ?></td>
          <td><?php echo $row[3] ?></td>
          <td><?php echo $row[4] ?></td>
          <td><?php echo $row[5] ?></td>
          <td style="text-align: center;">
            <span class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $row[0] ?>')">
              <span class="fa fas fa-eye"></span>
            </span>
            <span class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $row[0] ?>')">
              <span class="fa fa-pencil-square-o"></span>
            </span>
            <span class="btn btn-danger btn-xs" onclick="eliminarDatos('<?php echo $row[0] ?>')">
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

