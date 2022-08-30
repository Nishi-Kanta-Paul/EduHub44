<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="eduhub";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM facultyinfo";
    $result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin  Dashboard</title>

    <?php

    //include 'style_admin.css';

    ?>

    <style type="text/css">
    
    .table_th
    {
        padding: 20px;
        font-size: 20px;
    }

    .table_td
    {
        padding: 20px;
        background-color: skyblue;
    }

    </style>

</head>
<body>

    <?php

    include 'Admin.php';

    ?>

    <div class="content">

    <center>

        <h1>Faculty Data</h1>
    
    <br><br>

        <table border="1px">
            <tr>
                <th class="table-th">Faculty Name</th>
                <th class="table-th">Email</th>
                <th class="table-th">Title</th>
                <th class="table-th">Phone</th>
 
            </tr>

            <?php

            while($info=$result->fetch_assoc())
            
            {

            ?>

            <tr>

                <td class="table_td">
                    <?php echo "{$info['f_name']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['f_title']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['f_email']}"; ?>
                </td>
                <td class="table_td">
                    <?php echo "{$info['f_phone']}"; ?>
                </td>

            </tr>

            <?php

                }   

            ?>
        </table>
        </center>
    </div>
</body>
</html>