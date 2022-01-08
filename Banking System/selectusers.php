<html>
    <head>
    <title>View Users</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .navbar
    {
        width:100%;
        white-space:nowrap;
    }
    .main_div
    {
        width:100%;
        height:100vh;
        font-size: 50px;
     
    }
    *{
        margin:0;
        padding:0;
       box-sizing:border-box;
    }
    .display_table
    {
        width:100vw;
        height:100vh;
        display:flex;
        flex-direction:column;
        justify-content: center;
        text-align:center;
    }
    .center_div
    {
        width:90vw;
        height:80vh;
        background-repeat:no-repeat;
        background-size:100%;
        padding:20px 0 0 0;
        box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
        border-radius:10px;
        margin-left:30px;
    }
    h1
    {
        font-size:40px;
        color: white;
        text-align:center;
        margin-top:-20px;
        margin-bottom:20px;
    }
    table
    {
        border-collapse:collapse;
        background-color: white;
        box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
        border-radius: 10px;
        border-collapse:collapse;
        table-layout:fixed;
        opacity:0.7;
        color:black;
        font-weight:bold;
        margin:auto;
    }
    th,td
    {
      border:1px solid #f2f2f2;
       padding:8px 30px;
      text-align:center;
      opacity:0.9;
      color: black; 
    }
    th{
        text-transform:uppercase;
        font-weight:500;
    }
    td
    {
        font-size:13px;
    }
    

    </style>
    </head>
    <body background= "images/bg12.jpg">
        <div class="main_div">           
            <div class="display_table">
                <h1>Customer Details</h1>
                    <div class="center_div">
                    <div class="table-responsive">
                        <table>
                        <thead>
                        <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Amount</th>
                        
                        <th colspan="2">operation</th>
                        </tr>
                        </thead>
                        <tbody>
                    </div>
              <?php
              include 'connect.php';
              $selectquery = 'select * from users';
              $query = mysqli_query($db,$selectquery);
              $numofrows = mysqli_num_rows($query);
    

                while($res = mysqli_fetch_array($query))  {
                 ?>
                <tr>
                   <td><?php  echo $res['id']; ?></td>
                   <td><?php echo $res['name']; ?></td>
                   <td><?php echo $res['email']; ?></td>
                   <td><?php echo $res['balance']; ?></td>
                <td><a href="moneytransfer.html?id=<?php  echo $res['id']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:black;"></i></a></td>
                </tr>
                 <?php
                }
            ?>
                 </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
        <div class="footer">
        <p><a style="color: white; text-decoration: underline;" href="homepg.html" > Click Here to go to Home Page </a> </p>
        <div style="color: white" class="panel-footer" text="right">
            <small>&copy;TSFBank</small>
         </div>
    </body>
</html>
    


