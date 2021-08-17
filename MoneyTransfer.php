<?php
include 'DBConnection.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! Invalid amount cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Balance is Insufficient ")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Sorry! Zero amount cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query = mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='Transfer History.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- Navigation bar-->
        <nav id="EpicNavbar" class="navbar navbar-light px-3 fixed-top" style="background:rgba(0, 0, 0,0.1)">
          <a class="navbar-brand" class="content" href="#">Basic Banking System</a>
          
          <ul class="nav nav-pills">
              <li class="nav-item">
                  <a class="nav-link" class="content" href="Index.php">Home</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" class="content" href="MyCustomers.php">Customers Details</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" class="content" href="Transfer History.php">Transfer History</a>
              </li>
          </ul>
        </nav>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick and Safe Transfer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
      body #EpicNavbar a{
        color:white;
      }
      #EpicNavbar a:hover{
        background-color:cornflowerblue;
        border-radius: 8px;
      }
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
</head>

<body style="background-color:darkcyan">

            <div class="container">
                    <?php
                        include 'DBConnection.php';
                        $sid=$_GET['id'];
                        $sql = "SELECT * FROM  users where id=$sid";
                        $result=mysqli_query($conn,$sql);
                        if(!$result)
                        {
                            echo "Error : ".$sql."<br>".mysqli_error($conn);
                        }
                        $rows=mysqli_fetch_assoc($result);
                    ?>
                    <form method="post" name="tcredit" class="tabletext" ><br>
            <div>

            <div class="container">
                <h2 class="text-center pt-4" style="color:white; font-family:sans-serif; margin-top:70px">Quick and Safe Transfer</h2>                    
                    <div class="container">
                        <div class="card col-lg-12 mx-auto" style="background-color:cornflowerblue; width: 50rem;">
                        <div class="mt-2">
                            <table class="table table-striped table-condensed table-bordered">
                                <tr style="color : white;">
                                    <th class="text-center">Account No.</th>
                                    <th class="text-center">Account Name</th>
                                    <th class="text-center">E-mail</th>
                                    <th class="text-center">Account Balane(in Rs.)</th>
                                </tr>
                                <tr style="color : white;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                </tr>
                            </table>
                        </div>
                            <img src="img/1.jpg" class="img-thumbnail mt-2" alt="Responsive image">
                            <div class="card-body mb-3">
                                <form method="post" name="tcredit" class="tabletext" ><br>
                                    <label style="color : white;"><b>Transfer To:</b></label>
                                    <select name="to" class="form-control" required>
                                        <option value="" disabled selected>Choose account</option>
                                        <?php
                                            include 'DBConnection.php';
                                            $sid=$_GET['id'];
                                            $sql = "SELECT * FROM users where id!=$sid";
                                            $result=mysqli_query($conn,$sql);
                                            if(!$result)
                                            {
                                                echo "Error ".$sql."<br>".mysqli_error($conn);
                                            }
                                            while($rows = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option class="table" value="<?php echo $rows['id'];?>" >
                                            
                                                <?php echo $rows['name'] ;?> (Balance: 
                                                <?php echo $rows['balance'] ;?> ) 
                                        
                                            </option>
                                        <?php 
                                            } 
                                        ?>
                                        <div>
                                    </select>
                                    <br>
                                    <br>
                                    <label style="color : white;"><b>Amount:</b></label>
                                    <input type="number" class="form-control" name="amount" required>   
                                    <br><br>
                                    <div class="text-center" >
                                    <button class="btn btn-secondary mt-3" name="submit" type="submit" id="myBtn" >Transfer Money</button>
                                    </div>    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            <footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>TSF-Bank</b> </br>Basic Banking System</p>
      </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>