<?php

$connect = mysqli_connect("localhost", "root", "", "administrator");

$query = "SELECT * FROM users";
$result = mysqli_query($connect, $query);

 ?> 

 <!DOCTYPE html>
 <html>
 <head>
    <title>Reporte de venta</title>
 </head>
 <body>
        <table class="table">
            <tr>
            <tr>
                <th>User Id</th>
                <th>User name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                        <td><?php echo $row["id_user"]; ?> </td>
                        <td><?php echo $row["user_name"]; ?> </td>
                        <td><?php echo $row["full_name"]; ?> </td>
                        <td><?php echo $row["email"]; ?> </td>
                        <td><?php echo $row["user_role"]; ?> </td>
                        <td><?php echo $row["status"]; ?> </td>
                    </tr>                
                <?php } ?>
        </table>
 </body>
 </html>