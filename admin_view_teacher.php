
<?php
//prevents one from loging direct using url you must login
session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    //it will send smone to login page it he want to go to student page uing ur
    elseif($_SESSION['usertype']=='student')   
     {
        header("location:login.php");

    }

    $host ="localhost";
    $username ="root";
    $password="";
    $db ="school_project";

    $data = mysqli_connect($host,$username,$password,$db);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <?php
    include 'admin_css.php';

    ?>
    <style type="text/css">
        .table_th{
            padding: 20px;
            font-size: 20px;

        }
        .table_td{
            padding: 20px;
            background-color: skyblue;

        }
    </style>
</head>
<body>
<?php
    include 'admin_sidebar.php';
    
    ?>
    <div class="content">
        <center>


        <h1>View All Teacher Data</h1>
        <table border="1px">
            <tr>
                <th class="table_th">Teacher Name</th>
                <th class="table_th">About Teacher</th>
                <th class="table_th">Image</th>
           </tr>
           <tr>
            <td class="table_td">ty</td>
            <td class="table_td">klk</td>
            <td class="table_td">yy</td>
           </tr>
        </table>
    </center>
        
    </div>
</body>
</html>