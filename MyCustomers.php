<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
      body{
        background-color: darkcyan;
      } 
      body #EpicNavbar a{
        color:white;
      }
      #EpicNavbar a:hover{
        background-color:rgba(0, 204, 102,0.5);
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

<body>
        <!-- Navigation Bar -->
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
<?php
    include 'DBConnection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<div class="container">
        <h2 class="text-center" style="color : white; margin-top:70px; ">Customers Details</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered text-center" style="border-color:white;">
                        <thead style="color : white;">
                            <tr>
                            <th scope="col" class="text-center py-2">Account no.</th>
                            <th scope="col" class="text-center py-2">Account holder name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Account Balance(in Rs.)</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="MoneyTransfer.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : #3399ff;">Safe Transfer</button></a></td> 
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
    <footer class="text-center mt-2 py-5">
    <p>&copy 2021  <b>TSF-Bank</b> </br>Basic Banking System</p>
    </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>