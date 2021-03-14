<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/flickity.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="style.css">
 <title>Doctorola.com</title>
 </head>
 <body>
    <!---------------------------------Above Navigations--------------------->

    <div class="container mt-3 d-flex justify-content-between">

      
      <!-------------------------------------------   --------->
            <div class="dropdown drop1">
                <a href="#" class="dropdown-toggle text-dark" data-toggle="dropdown"> 
                    <span><img class="dropdown-item-icon" src="img/1280px-Flag_of_the_United_States.svg.png" alt="SVG" width="20px" height="17px" class="img-fluid"></span> 
                    <span class="ml-1">United States</span>

                </a>
                <div class="dropdown-menu border-0 shadow-lg">
                     <a href="#" class="dropdown-item">English</a>
                    <a href="#" class="dropdown-item">Destuch</a>
                    <a href="#" class="dropdown-item">Spanish</a>
    
                </div>
    
            </div>
         


         
    
            <ul class="list-unstyled list-inline text-capitalize">
                <li  class="list-inline-item"><a href="#" class="text-decoration-none  text-muted"><i class="fas fa-user text-danger" style="font-size: 19px"></i> Log in/Sign up</a></li>
    
            </ul>
    
    
    
        </div>
    
    
        <!---------------------------------End Above Navigations--------------------->
        <!-----------------------------------Start Navigations------------------------->
    
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-lg"
      
     
        data-aos-delay="1000"
        data-aos-duration="1000"
        data-aos-easing="ease-in-out"
        data-aos-mirror="false"
        data-aos-once="true"
        
>

            <div class="container">

                    <a class="navbar-brand" href="index.php">
                        <img src="img/doctorola_logo.png" alt="logo-img" class="img-fluid" width="120px" height="100px;">
                          
            
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                      <ul class="navbar-nav ml-auto mix">
                            <li class="nav-item">
                                    <a class="nav-link" href="index.php" role="button"  aria-haspopup="true" aria-expanded="false">
                                      Home
                                    </a>
                                  </li>

                        <li class="nav-item">
                          <a class="nav-link" href="doctors.php">Doctors</a>
                        </li>

                        <li class="nav-item ">
                          <a class="nav-link" href="blood donor.php" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Blood Donors
                          </a>
                        
                        </li>

                        <li class="nav-item">
                                <a class="nav-link " href="ambulance.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                  Call Ambulance
                                </a>
                              
                              </li>

                              <li class="nav-item ">
                                <a class="nav-link " href="news.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                  News
                                </a>
                              
                              </li>
                              
                              <li class="nav-item active">
                                <a class="nav-link" href="contact.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                  Contact Us
                                </a>
                              
                              </li>
                              
                        
                      </ul>
                     
                      
                    </div>
    
            </div>
                
              </nav>
    

    <!-----------------------------------End Navigations------------------------->






                    <!---------------------- plug in-------------------------------------------------------------------------->
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="js/aos.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <script src="js/owl.carousel.min.js"></script>
                    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
                    <script src="js/isotope.pkgd.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>

                    <!---------------------- plug in-------------------------------------------------------------------------->


  <script>

$(document).ready(function(){
  $('li').on('click',function(){
    $(this).addClass('active').siblings().removeClass('active')
  })
})




</script>


<?php  
$name = null;
$email = null;
$message = null;



?>







           <div class="form-page padding">


           <div class="container padding">


           <div class="row">
               <div class="col-12 col-md-8 mt-5">


               <h4><strong>Get in Touch</strong></h4>
               <p class="text-muted mb-4" style="font-size:15px;font-weight: 300;">Please fill out the quick form and we will be in touch with lightning speed.</p>

               
            <form action="insert.php" method="POST" id="frmbox" onsubmit="return msgfrm();">

             <p><input type="text" placeholder="Name" class="form-control w-75" name="name" required value="<?php echo $name?>" ></p>
             <p><input type="email" placeholder="Your email address" class="form-control w-75"  name="email"required value="<?php echo $email?>" ></p>
             <p><textarea name="message" id="" cols="30" rows="10" placeholder="Message" class="form-control" required value="<?php echo $message?>" ></textarea></p>

             <button type="submit" name="submit" class="btn btn-danger">Submit</button> 
             <span id="chat" class="text-danger ml-2 font-weight-bolder"></span>
            

               </form>

               
         

               </div>


               <div class="col-12 col-md-4 mt-5">
               <h4><strong> Connect with us:</strong></h4>
                 <p class="text-muted m-0 p-0">For support or any questions:</p>
               <p class="text-muted">Email us at <a href="https://webmail.au.syrahost.com" target="_blank">chowdhury889@gmail.com</a></p>


               </div>

           </div>

           </div>
           </div>


<!------------------------------------------------------Ajax Code Start------------------------------------------------------>
                              <script type="text/javascript">

                                            

                               function msgfrm(){
                                $.ajax({
                                type:'POST',
                                url:'insert.php',
                                data:$('#frmbox').serialize(),
                                success:function(response){
                                  $('#chat').html(response);
                                }
                              });

                              var form = document.getElementById('frmbox').reset();

                              return false;

                              }



                              </script>

                                                  










<!------------------------------------------------------Ajax Code Ends------------------------------------------------------>












           


               
 
<!----------------------------------------------footer options satrt---------------------------------->





                        <footer class="shadow-lg foot">






                        <div class="container">





                        <ul class="list-unstyle list-inline text-center">

                            <li class="list-inline-item m-3"><i class="fab fa-facebook fa-2x" style="color:#fff;"></i></li>
                            <li class="list-inline-item m-3"><i class="fab fa-twitter fa-2x" style="color:#fff;"></i></li>
                            <li class="list-inline-item m-3"><i class="fab fa-instagram fa-2x" style="color:#fff;"></i></li>



                        </ul>

                        <hr style="border-top: 2px solid #fff">


                        <ul class="list-unstyle list-inline text-center" style="font-size: 21px;" >

                            <li class="list-inline-item m-3"> <a href="#"  style="color:#fff;">About Us</a></li>
                            <li class="list-inline-item m-3"> <a href="#" style="color:#fff;">Blog</a></li>
                            <li class="list-inline-item m-3"> <a href="#" style="color:#fff;">Contact Us</a></li>
                            <li class="list-inline-item m-3"> <a href="#" style="color:#fff;">Faq</a></li>

                        </ul>

                        <h5 class="text-center text-light mb-4">&copy;  2019 Doctorola Ltd. All rights reserved.</h5>

                        <h6 class="text-center text-light font-weight-bold">-Developed By Saifur Rahman Chowdhury (Shohan)</h6>





                        </div>





                        </footer>



<!----------------------------------------------footer options Ends---------------------------------->






                    <script>

                    AOS.init();


                    window.sr = ScrollReveal();
                    sr.reveal('footer', {
                    duration: 3000,
                    origin:'bottom'
                    });




                        



                    </script>



    



















 </body>


 </html>
