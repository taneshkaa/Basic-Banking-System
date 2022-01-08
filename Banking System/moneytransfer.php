<html>
    <head>
    <title>Money Transfer</title>
    <link rel="stylesheet" type="text/css" href="css/userstyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
    *{
        margin:0;
        padding:0;
    }
    .main_div
    {
        width:100%;
        height:100vh;
     
    }
       input
      {
          margin-top:10px;
          width:200px;
          height:40px;
          border-radius:5px;
          outline:none;
      }
     ::placeholder
     {
         padding:10px;
         color:black;
     }
    button
    {
        color:black;
        background:tan;
        border-color:black;
       padding: 14px 20px;
      cursor: pointer;
      width: 100%;
        
    }
    button:hover
     {
         color:black;
         background:green;
         border-color:black;
         opacity:0.8;
     }
     </style>
    </head>
    <body background="images/bg12.jpg">
         <div class="container" align="center">
                 <h1 align="center" style="color: tan;">TSF Bank Transaction</h1>
              <div class="col-sm-4">
                  <div class="card text-center" style="margin-top:60px;background-color:tan;border-radius:10px;color:black;" >
                  <form method="POST">  
                                                  
     <?php
        include 'connect.php';
        $id=$_GET['id'];
        $showquery="select * from `transactions` where id=($id) ";
        $showdata=mysqli_query($db,$showquery);
        if (!$showdata) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
        }
        $arrdata=mysqli_fetch_array($showdata);
    ?>                
    <div class="card-body" align="center">  
        <h3>Transfer Details</h3>
             <label>Name</label>
                <input type="text"  name="sname" value="" required placeholder="Enter your Name"/><br><br>
             <label>Email</label>
                <input type="text" name="semail" value="" required placeholder="Enter E-Mail Id"/><br><br>
            <label>Amount</label>
                <input type="text" name="amount" value="" style="width:210px;" required placeholder="Enter Transferring Amount"/><br>
                <p align="center" style="color:black;">[Sender]</p>
                <br>
    </div>
    </div>
    </div>
        <div class="col-sm-4">
        <div class="card text-center" style="margin-top:60px;background-color:tan;border-radius:10px;color:black">    
       <div class="card-body">
            <h3>Transfer Details</h3>         
            <label>Name</label>
                <input type="text"  name="rname" value="" required placeholder="Enter your Name"/><br><br>
            <label>Email</label>
                <input type="text" name="remail" value="" required placeholder="Enter EMail Id"/><br>
                <p align="center" style="color:black;">[Receiver]</p>
                <br>
        </div>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card-body">
        <br>
        <br>
        <button  name="submit">Proceed to Pay</button>
        </div>      
    </div>
    </div>
    </div>
    <div class="footer">
            <p><a style="color: tan; text-decoration: underline;" href="homepg.html"> Click Here to go to Home Page </a> </p>
            <div style="color: tan" class="panel-footer" text="right">
                <small>&copy;TSFBank</small>
            </div>
        </div>
    </div>
    </form> 
    <?php
        include 'connect.php';
        if(isset($_POST['submit']))
        {
        
      
        $Sender_name=$_POST['sname'];
        $Sender_email=$_POST['semail1'];
        $Sender=$_POST['amount'];
        $Receiver_name=$_POST['rname'];
        $Receiver_email=$_POST['remail'];
         
        $id=$_GET['id'];
        $senderquery="select * from `transactions` where id=$id ";
        $senderdata=mysqli_query($db,$senderquery);
      
        if (!$senderdata) {
         printf("Error: %s\n", mysqli_error($db));
        exit();
        }
        $arrdata=mysqli_fetch_array($senderdata);
    
        $receiverquery="select * from `transactions` where Email='$Receiver_email' ";
        $receiver_data=mysqli_query($db,$receiverquery);
       
        if (!$receiver_data) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
        }
        $receiver_arr=mysqli_fetch_array($receiver_data);
        $id_receiver=$receiver_arr['id'];

        if($arrdata['Amount'] >= $Sender)
        {
          $decrease_sender=$arrdata['Amount'] - $Sender;
          $increase_receiver=$receiver_arr['Amount'] + $Sender;
           $query="UPDATE `users` SET `is`=$id,`Amount`= $decrease_sender  where `id=$id ";
           $rec_query="UPDATE`users` SET `id`=$id_receiver,`Amount`= $increase_receiver where  `id`=$id_receiver ";
           $res= mysqli_query($db,$query);
           $rec_res= mysqli_query($db,$rec_query);
          // $res_receiver=mysqli_query($db,$query_receiver);
           if($res && $rec_res)
          {
           ?>
           <script>
           swal("Done!", "Transaction Successful!", "success");
            </script> 
          <?php
          }
          else
          {
          ?>
               <script>
           swal("Error!", "Error Occured!", "error");
            </script> 
          <?php
          }
        }
      else
     {
      ?>
        <script>
           swal("Insufficient Balance", "Transaction Not  Successful!", "warning");
            </script> 
      <?php
     }
    }
    ?>
    
    </body>
</html>
