<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
      body #EpicNavbar a{
        color:white;
      }
      #EpicNavbar a:hover{
        background-color:rgb(201, 42, 69);
        border-radius: 8px;
      }
    </style>
</head>

<body style="background-color : #330033;">

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
          </ul>
    </nav>

	<div class="container">
        <h2 class="text-center" style="color : white; margin-top:70px;">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered text-center">
        <thead style="color : white;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'DBConnection.php';
        
            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows=mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
  </div>

  <footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>TSF-Bank</b> </br>Basic Banking System</p>
      </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>