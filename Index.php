<!DOCTYPE html>
<html lang="en">
<head>
   <title>Basic Bank System</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    body #EpicNavbar a{
      color:whitesmoke;
    }
    #EpicNavbar a:hover{
      background-color:rgb(191, 167, 111);
      border-radius: 8px;
    }
  </style>
</head>
        
<body data-spy="scroll" data-target="#EpicNavbar" style="background-color:whitesmoke;">

      <!-- Navigation Bar -->
      <nav id="EpicNavbar" class="navbar navbar-light px-3 fixed-top" style="background:rgba(0, 0, 0,0.1)">
          <a class="navbar-brand"  href="#">Basic Banking System</a>
          
          <ul class="nav nav-pills">
              <li class="nav-item">
                  <a class="nav-link"  href="Index.php">Home</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link"  href="MyCustomers.php">Customers Details</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link"  href="#about">About Us</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link"  href="#contact">Contact Details</a>
              </li>
          </ul>
      </nav>
      
      <!-- Caraousel-->
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active" onclick="changeBackgroundColor()"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/5.jpg" alt="Easy Transfer" width="1500" height="625">
            <div class="carousel-caption">
              <div class="container my-2 col-12">
                <!-- card -->
                <div class="row">
                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick and Safe Transfer</h5>
                      <p class="card-text">Business and life are like a bank account you can't take out more than you put in.</p>
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Keeps Your Interests</h5>
                      <p class="card-text">A bank is a place that will lend you money if you can prove that you don't need it.</p>
                      
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick Personal Loans</h5>
                      <p class="card-text">Banking technology has made it simple and efficient to invest in good causes.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
          <div class="carousel-item">
            <img src="img/7.jpg" alt="Quick Deposit" width="1500" height="625">
            <div class="carousel-caption  d-none d-md-block">
              <div class="container my-2 col-12">
                <!-- card -->
                <div class="row">
                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick and Safe Transfer</h5>
                      <p class="card-text">Business and life are like a bank account you can't take out more than you put in.</p>
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Keeps Your Interests</h5>
                      <p class="card-text">A bank is a place that will lend you money if you can prove that you don't need it.</p>
                      
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick Personal Loans</h5>
                      <p class="card-text">Banking technology has made it simple and efficient to invest in good causes.</p>
                      
                    </div>
                  </div>
                </div>
              </div>        
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/4.jpg" alt="Low interests" width="1500" height="625">
            <div class="carousel-caption">
              <div class="container my-2 col-12">
                <!-- card -->
                <div class="row">
                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick and Safe Transfer</h5>
                      <p class="card-text">Business and life are like a bank account you can't take out more than you put in.</p>
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Keeps Your Interests</h5>
                      <p class="card-text">A bank is a place that will lend you money if you can prove that you don't need it.</p>
                      
                    </div>
                  </div>

                  <div class="card .col-sm-3 mx-auto" style="width: 18rem; height:9rem; background-color:rgba(0,0,100,0.2); color:whitesmoke; border:lightblue solid 2px;">
                    <div class="card-body">
                      <h5 class="card-title">Quick Personal Loans</h5>
                      <p class="card-text">Banking technology has made it simple and efficient to invest in good causes.</p>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      
      <!--About us-->
      <div class="container col-lg-12" style=" font-family:sans-serif;">
          <div class="row">
                  <div  class="my-5" data-spy="scroll" data-target="#EpicNavbars" data-offset="0" id="about">                    
                    <br><br><br>
                      <h2 class="text-center" style="color:cadetblue">About Us</h2>                    
                        <p>
                          <div class="row" style="background-color:rgb(120, 159, 194);">
                            <div  class="col-lg-6 col-md-6 col-12">
                              <img src="img/6.jpg" class="img-fluid">
                            </div>
                            <div  class="col-lg-6 col-md-6 col-12">
                              <h4 style="color:whitesmoke">Basic Banking System</h4>
                              <p1>The primary function of banks is to lend account holders' money to other people, who will use that money to buy home, businesses, or send their children to college. When you deposit your money at a bank, that money goes into a large pool of money, and the amount of money that you deposited is credited to your account.
                                  Image result for basic banking system about us section in india
                                  The structure of the banking system of India can be broadly divided into scheduled banks, non-scheduled banks and development banks. Banks that are included in the second schedule of the Reserve Bank of India Act, 1934 are considered to be scheduled banks.
                              </p1>                            
                            </div>  
                          </div>
                        </p>
                      
                  </div>
              
          </div>
      </div>
    
      <!-- Contact us -->
      <div class="container mt-3 col-lg-12" data-spy="scroll" data-target="#EpicNavbars" data-offset="0">
        <div id="contact" class="row" style="padding-top:65px;">
            <div class="col-lg-8" style="background-color:rgb(120, 159, 194);">
                <h3 style="font-family:sans-serif; color:whitesmoke;">Contact Us</h3>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Contact Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contact Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email Address">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                </div>
                <div class="mb-3">
                    <button for="exampleFormControlTextarea1" class="btn btn-outline-success form-label">Submit</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card col-lg-12 mx-auto" style="width: 18rem; ">
                    <img src="img/2.jpg" class="img-thumbnail mt-2" alt="Responsive image">
                    <div class="card-body mb-3">
                      <b>Email :</b> Bank5020@gmail.com
                      <b>Contact No :</b> 7587523390   
                    </div>
                      <a href="" class="btn btn-success">Subscribe Us</a>
                    </div>
                </div>
            </div>
        </div>
      </div>        
  
      <!--Disclaimer-->
      <section class= "my-5">
      <div class=" col-lg-12 py-5">
      <h3 class="text-center" >Disclaimer</h3>
      <p1>Certain sections or pages on this Site may contain separate terms and conditions, which are in addition to these terms and conditions. In the event of a conflict, the additional terms and conditions will govern those sections or pages.COPYRIGHT TSF-BANK ©2021. ALL RIGHTS RESERVED. Copyright in the pages, in the screens displaying the pages, in the information and material therein and in their arrangement is owned by Bank, unless otherwise indicated.</p1>
      </div>

      <footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>TSF-Bank</b> </br>Basic Banking System</p>
      </footer>
    
          <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
        
        <script>
          
            window.addEventListener( "resize", ResizeWindow );

            function ResizeWindow( )
            {
                var dataSpyList = [].slice.call( document.querySelectorAll( '[data-spy="scroll"]' ) );
                
                dataSpyList.forEach( function ( dataSpyElement )
                {
                    bootstrap.ScrollSpy.getInstance( dataSpyElement ).refresh( );
                } );
            }

        </script>
</body>
</html>
