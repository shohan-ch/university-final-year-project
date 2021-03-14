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

                        <li class="nav-item active">
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
                              
                              

                              
                              <li class="nav-item ">
                                <a class="nav-link " href="contact.php" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                                  Contact Us
                                </a>
                              
                              </li>
                             
                        
                      </ul>
                    
                      
                    </div>
    
            </div>
                
              </nav>
    

    <!-----------------------------------End Navigations------------------------->






 <!---------------------- plug in-------------------------------------------------------------------------->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
 <script src="js/aos.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>


 <!---------------------- plug in-------------------------------------------------------------------------->

 <script>

$(document).ready(function(){
  $('a').on('click',function(){
    $(this).addClass('active').siblings().removeClass('active')
  })
})




</script>



       







<!----------------------------------------------Filter lists start------------------------------------------------>

                  <div class="container doctor-filter p-5">

                    <div class="row">

  

                      <div class="col-12 col-md-4">

                        <div class="filter-list"

                        data-aos="fade-up"
                        data-aos-offset="100"
                        data-aos-delay="0"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out"
                        data-aos-mirror="true"
                        data-aos-once="true"
                        data-aos-anchor-placement="center-bottom"
                        
                        
                        
                        >
                            


                            <h3>Find a Doctors</h3>

                            <p>Select Area</p>

                            <ul class="list-unstyled">
                              <li>

                                  <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox" class="custom-control-input" id="syl" data-filter= ".syl" >
                                      <label class="custom-control-label" for="syl">Sylhet</label>
                                    </div>

                              
                              </li>
                            
                              <li>
                                
                                  <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox" class="custom-control-input" id="dhk" data-filter=".dhk" >
                                      <label class="custom-control-label" for="dhk">Dhaka</label>
                                    </div>
                              </li>


                              <li>

                                  <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox" class="custom-control-input" id="chittagong" data-filter=".chit">
                                      <label class="custom-control-label" for="chittagong">Chittagong</label>
                                    </div>


                              </li>
                              
                            </ul>

                        </div>


                       

                   



                    </div>




                        

                       



                     


 <!----------------------------------------------Filter lists Ends------------------------------------------------>












  <!----------------------------------------------Doctor  Details Column start------------------------------------------------>

                      <div class="col-12 col-md-8 grid" >



                        <div class="doctor-list">


                          <div class="syl grid-item al">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      <br> Al- Haramain Hospital,Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      Al-haramain hospital<br> subhanighat, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>




                          <div class="syl grid-item">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/278-3.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>prof. salahuddin sharkar</h2>
                                  <p>MBBS, MD, DDV.<br>

                                    Associate Professor, Dept. of Dermatology
                                      <br> Al- Haramain Hospital,Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      Al-haramain hospital<br> subhanighat, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 500 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 045190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>






                          <div class="syl grid-item al">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Md. mahbubur rahman</h2>
                                  <p>MBBS, MD.<br>

                                    Professor & Head, Dept. of Dermatology, Sir 
                                      <br> Al- Haramain Hospital,Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      Al-haramain hospital<br> subhanighat, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="syl grid-item al">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      <br> Al- Haramain Hospital,Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      Al-haramain hospital<br> subhanighat, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="syl grid-item al">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      <br> Al- Haramain Hospital,Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      Al-haramain hospital<br> subhanighat, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>







                          
                          <div class="syl grid-item po">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr mohammad sayem chowdhury</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      <br> Popular hospital, kajalshah, Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Popular hospital<br> kajalshah, Sylhet.<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 500 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 




                                  </p>

                                </div>


                                </div>
                                <hr>




                          </div>





                          <div class="syl grid-item po">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Dr._Mohammad_Rokonujjaman_Selim_.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr habibullah ahmed</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in medicine,
                                      <br> Popular hospital, kajalshah, Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Popular hospital<br> kajalshah, Sylhet.<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 04442523190658 




                                  </p>

                                </div>

                            



                                </div>

                                <hr>




                          </div>




                          
                          <div class="syl grid-item po">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Prof._Dr_._Mir_Jamal_Uddin_.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Bushun Das</h2>
                                  <p>MBBS, MD, DDV.<br>

                                    Associate Prof.(Ex) & Senior Consultant,Aurora<br> Skin & Hair Research Institute
                                    <br> Popular hospital, kajalshah, Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Popular hospital<br> kajalshah, Sylhet.<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 600 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0523190658 




                                  </p>

                                </div>

                            



                                </div>

                                <hr>




                          </div>



                          
                          <div class="syl grid-item po">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Doc-46.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr habibullah ahmed</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in medicine,
                                      <br> Popular hospital, kajalshah, Sylhet.</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Popular hospital<br> kajalshah, Sylhet.<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 04442523190658 




                                  </p>

                                </div>

                            



                                </div>

                                <hr>




                          </div>
















                          <div class="dhk  grid-item ce">


                              <div class="row">


                                <div class="col-2 doc-img p-3 mt-3 text-capitalize" >

                                  <img src="img/doc/Dr._Mohammad_Ullah_Firoze_.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Mehdi Hasan Mazumder</h2>
                                  <p>MD (Doctor of Medicine) (Russia), MS (CVS)<br> (Russia)<br>

                                      
                                      <br>Consultant (ICDC/ Russia)</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      central hospital<br> khilkheth, Dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span>  Call for appointment 01893188654 




                                  </p>

                                </div>



                                </div>

                                <hr>

                          </div>






                          <div class="dhk grid-item ut">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                     

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                     uttara crescent hospital<br> tejgaou, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 700 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 4431764134565 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>




                          <div class="dhk grid-item ut">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/278-3.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>prof. salahuddin sharkar</h2>
                                  <p>MBBS, MD, DDV.<br>

                                    Associate Professor, Dept. of Dermatology
                                      <br>  uttara crescent hospital</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    uttara crescent hospital<br> subhanighat, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 1000 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 04519245634560658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>






                          <div class="dhk grid-item aj">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Md. mahbubur rahman</h2>
                                  <p>MBBS, MD.<br>

                                    Professor & Head, Dept. of Dermatology, Sir 
                                      <br> Ajgor ali hospital, dhaka</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Ajgor ali hospital, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 900 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0154656 190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="dhk grid-item aj">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Asst._prof_._Dr_._Ashraf_Uddin_Chowdhury_1.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Ajgor ali hospital, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 800 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="dhk grid-item aj">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Ajgor ali hospital, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 500 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0475190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>






































                          <div class="chit  grid-item">


                              <div class="row">


                                <div class="col-2 doc-img p-3 mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Prof. Dr. Rezwanul Hoque (Bulbul)</h2>
                                  <p>
                                      MBBS, MS (Cardiovascular & Thoracic Surgery)<br> 
                                      FCPS (Surgery), FRCS<br> (Glasgow), FRCS (Edinburgh)<br><br>

                                      Professor, Dept. of Cardiac Surgery, <br>
                                      Medinova Care, Khilket, chittagong
                                    
                                    </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Medinova Care,<br> Khilket, chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 600 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span>  Call for appointment 019323190658 




                                  </p>

                                </div>

                            



                                </div>

                                <hr>





                          </div>




















                          
                          <div class="chit  grid-item re">


                              <div class="row">


                                <div class="col-2 doc-img p-3 mt-3 text-capitalize" >

                                  <img src="img/doc/Dr._Mohammad_Ullah_Firoze_.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Mehdi Hasan Mazumder</h2>
                                  <p>MD (Doctor of Medicine) (Russia), MS (CVS)<br> (Russia)<br>

                                      
                                      <br>Consultant (ICDC/ Russia)</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Red Crescent Maternity Hospital<br> nowapara, chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span>  Call for appointment 4654893188654 




                                  </p>

                                </div>



                                </div>

                                <hr>

                          </div>






                          <div class="chit grid-item re">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                     

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Red Crescent Maternity Hospital<br> nowapara, chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 700 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 4431764134565 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>




                          <div class="chit grid-item me">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/278-3.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>prof. salahuddin sharkar</h2>
                                  <p>MBBS, MD, DDV.<br>

                                    Associate Professor, Dept. of Dermatology
                                      <br> Chittagong Medical College</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Chittagong Medical College<br> chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 1000 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 04519245634560658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>






                          <div class="chit grid-item me">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Md. mahbubur rahman</h2>
                                  <p>MBBS, MD.<br>

                                    Professor & Head, Dept. of Dermatology, Sir 
                                      <br> Chittagong Medical College</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Chittagong Medical College, chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 900 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0154656 190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="chit grid-item me">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Asst._prof_._Dr_._Ashraf_Uddin_Chowdhury_1.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Chittagong Medical College<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 800 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="chit grid-item im">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Imperial Hospital Limited,chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 500 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0475190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="syl grid-item al">


                        <div class="row">


                          <div class="col-2 doc-img p-3 text-capitalize mt-3">

                            <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                            
                          </div>

                          <div class="col-5 p-3">

                            <h2>Dr. Md. Emdadul Haque</h2>
                            <p>MBBS, MD.<br>

                                Consultant, Dept. in Cardiology,
                                <br> Al- Haramain Hospital,Sylhet.</p>

                          </div>


                          <div class="col-5 p-3 text-capitalize">

                            <p>

                              <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                Al-haramain hospital<br> subhanighat, sylhet<br>
                                
                                  <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                
                                New appointment: 400 TK.<br>
                              <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                            </p>

                          </div>



                          </div>
                          <hr>

                        </div>




                        <div class="syl grid-item">


                        <div class="row">


                          <div class="col-2 doc-img p-3 text-capitalize mt-3">

                            <img src="img/doc/278-3.jpg" alt="img" class=" rounded-circle shadow-lg ">
                            
                          </div>

                          <div class="col-5 p-3 text-capitalize">

                            <h2>prof. salahuddin sharkar</h2>
                            <p>MBBS, MD, DDV.<br>

                              Associate Professor, Dept. of Dermatology
                                <br> Al- Haramain Hospital,Sylhet.</p>

                          </div>


                          <div class="col-5 p-3 text-capitalize">

                            <p>

                              <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                Al-haramain hospital<br> subhanighat, sylhet<br>
                                
                                  <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                
                                New appointment: 500 TK.<br>
                              <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 045190658 


                            </p>

                          </div>



                          </div>
                          <hr>

                        </div>






                        <div class="syl grid-item al">


                        <div class="row">


                          <div class="col-2 doc-img p-3 text-capitalize mt-3">

                            <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                            
                          </div>

                          <div class="col-5 p-3 text-capitalize">

                            <h2>Dr. Md. mahbubur rahman</h2>
                            <p>MBBS, MD.<br>

                              Professor & Head, Dept. of Dermatology, Sir 
                                <br> Al- Haramain Hospital,Sylhet.</p>

                          </div>


                          <div class="col-5 p-3 text-capitalize">

                            <p>

                              <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                Al-haramain hospital<br> subhanighat, sylhet<br>
                                
                                  <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                
                                New appointment: 400 TK.<br>
                              <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                            </p>

                          </div>



                          </div>
                          <hr>

                        </div>



                        <div class="chit grid-item me">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Md. mahbubur rahman</h2>
                                  <p>MBBS, MD.<br>

                                    Professor & Head, Dept. of Dermatology, Sir 
                                      <br> Chittagong Medical College</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Chittagong Medical College, chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 900 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0154656 190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="chit grid-item me">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/Asst._prof_._Dr_._Ashraf_Uddin_Chowdhury_1.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Chittagong Medical College<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 800 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 01723190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>



                          <div class="chit grid-item im">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                      </p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Imperial Hospital Limited,chittagong<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 500 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0475190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>


                          
                          <div class="dhk  grid-item ce">


                              <div class="row">


                                <div class="col-2 doc-img p-3 mt-3 text-capitalize" >

                                  <img src="img/doc/Dr._Mohammad_Ullah_Firoze_.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Mehdi Hasan Mazumder</h2>
                                  <p>MD (Doctor of Medicine) (Russia), MS (CVS)<br> (Russia)<br>

                                      
                                      <br>Consultant (ICDC/ Russia)</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                      central hospital<br> khilkheth, Dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 400 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span>  Call for appointment 01893188654 




                                  </p>

                                </div>



                                </div>

                                <hr>

                          </div>






                          <div class="dhk grid-item ut">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/doctor.png" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3">

                                  <h2>Dr. Md. Emdadul Haque</h2>
                                  <p>MBBS, MD.<br>

                                      Consultant, Dept. in Cardiology,
                                     

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                     uttara crescent hospital<br> tejgaou, sylhet<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 700 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 4431764134565 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>




                          <div class="dhk grid-item ut">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/278-3.jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>prof. salahuddin sharkar</h2>
                                  <p>MBBS, MD, DDV.<br>

                                    Associate Professor, Dept. of Dermatology
                                      <br>  uttara crescent hospital</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    uttara crescent hospital<br> subhanighat, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 1000 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 04519245634560658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>






                          <div class="dhk grid-item aj">


                              <div class="row">


                                <div class="col-2 doc-img p-3 text-capitalize mt-3">

                                  <img src="img/doc/13(1).jpg" alt="img" class=" rounded-circle shadow-lg ">
                                  
                                </div>

                                <div class="col-5 p-3 text-capitalize">

                                  <h2>Dr. Md. mahbubur rahman</h2>
                                  <p>MBBS, MD.<br>

                                    Professor & Head, Dept. of Dermatology, Sir 
                                      <br> Ajgor ali hospital, dhaka</p>

                                </div>


                                <div class="col-5 p-3 text-capitalize">

                                  <p>

                                    <span class=""><i class="fas fa-map-marker-alt mb-3 text-danger"></i> Chamber</span> <br>

                                    Ajgor ali hospital, dhaka<br>
                                      
                                        <span><i class="fas fa-money-bill-alt text-danger"></i></span> Fees<br>
                                      
                                      New appointment: 900 TK.<br>
                                    <span><i class="fas fa-phone-alt mt-3 text-danger"></i></span> Call for appointment 0154656 190658 


                                  </p>

                                </div>

                         

                                </div>
                                <hr>

                          </div>





                          </div>

                          



                        </div>



                      </div>




                    </div>


                    </div>




<!------------------------------------------- isotope Options----------------------------------->



                                 <script>

                                   var grid = $('.grid').isotope({
                                     //Options

                                    itemSelector: '.grid-item',
                                    layoutMode: 'fitRows'
                                   });

                                   $('input').on('click',function(){
                                     var value = $(this).attr('data-filter');
                                    
                                     $('input').on('change', function() {
                                     $('input').not(this).prop('checked', false);  
                                     });

                                     grid.isotope({
                                       filter:value
                                     })
                                   })
                                 
                                 
                                 
                                 

                                 </script>


<!------------------------------------------- isotope Options----------------------------------->






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



</script>































</body>

</html>