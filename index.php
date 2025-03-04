<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard Page</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
   
 <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->

</head>
<body>


   
 
<style>
        .marquee-container {
            background-color: #6666ff;
            padding: 10px 0;
            overflow: hidden;
            white-space: nowrap;

        }
        .marquee-text {
            display: inline-block;
            color: white;
            font-weight: bold;
            animation: marquee 10s linear infinite;
        }
        @keyframes marquee {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
        }
    </style>


    <div class="marquee-container">
        <div class="marquee-text">
            Patient can contact Dr. GS Bansal on phone no 9811119367 for treatment / guidance till lockdown
        </div>
    </div>



<!-- Top Navbar -->
<nav class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo -->
            <div class="flex items-center">
                <img src="https://www.drgsbansalclinic.com/img/logo.png" alt="Logo" class="h-12">
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-6">
                <a href="index.php" class="text-gray-700 hover:text-blue-500">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-blue-500">About Us</a>
                <a href="contact.php" class="text-gray-700 hover:text-blue-500">Contact Us</a>
            </div>
        </div>
    </nav>


<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" id="top">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/doctor1.png"  alt="Slide 1" style="height: 550px; width: 1540px;" >
        </div>
        <div class="carousel-item">
            <img src="images/doctor2.png"  alt="Slide 2" style="height: 550px; width: 1540px;" >
        </div>
        <div class="carousel-item">
            <img src="images/doctor3.png"  alt="Slide 3" style="height: 550px; width: 1540px;" >
        </div>
        <!-- <div> -->
    
        <div class="carousel-item">
            <img src="images/doctor4.png"  alt="Slide 4" style="height: 550px; width: 1540px;" >
        </div>
        <div class="carousel-item">
            <img src="images/doctor5.png"  alt="Slide 5" style="height: 550px; width: 1540px;" >
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Floating Contact Button 1 -->
<div class="fixed right-1 top-1/3 transform -translate-y-1/1 flex items-center mt-10">
    <a href="tel:9811119367">
        <img src="images/enquiry.png" alt="" style="width:150px; height:60px">
    </a>
</div>

<!-- Floating Contact Button 2 -->
<div class="fixed right-1 top-1/2 transform -translate-y-1/1 flex items-center ">
    <a href="tel:9811119367" >
        <img src="images/call-now-button.png" alt="" style="width:230px; height:65px">
    </a>
</div>


<div class="info-section">
    <div class="info-box">
        <img src="images/phone2.png" alt="Phone">
        <p>Patient Can Contact <strong>Dr. GS Bansal</strong> On <br>
            <span class="highlight">Phone No 9811119367</span> For <br>Treatment/guidance till lockdown by Govt.
        </p>
    </div>
    <div class="info-box">
        <img src="images/clock.png" alt="Clock">
        <p>We are open Mon-Sat <br>
            <span class="highlight">9 AM - 1 PM & 5 PM - 8:30 PM</span> <br> Fee: Rs.300/-
        </p>
    </div>
    <div class="info-box">
        <img src="images/mail1.png" alt="Email">
        <p>Need support? Drop us an email <br>
            <a href="mailto:Drgsbansal@Gmail.Com" class="email-link">Drgsbansal@Gmail.Com</a>
        </p>
    </div>
</div>



<div class="about_us_text">
    <div class="text-content1">
        <h3>ABOUT US <span>DR. G.S. BANSAL</span></h3>
        <p>Since 1980 ,Dr. G. S. Bansal, an eminent and reputed Family & General 
         (Rajasthan). He completed MBBS . Post graduation certification in Chest and Tuberculosis from IMA IKN Sinha institute, INDIA . 
         FCGP coferred by College of general practitioner IMA Delhi .With over 40 + years of experience in the field, 
         he is one of the oldest Gen physicians in Noida, working since 1980. In early days of his career, he worked in Safdarjung Hospital
        in Delhi and has been a visiting doctor in many prestigious government institutions such as DTC and premier schools such as
        D.P.S.He is a highly regarded family and General physician is well-known amongst patients of all age groups.</p>
        <p>Health issues of any kind Fever may be Viral Malaria Typhoid Dengue Tuberculosis ,Cough Cold Pain abdomen Gases constipation 
        Hypertension Thyrroid Diabetes Knee joints pain Eye Ear Nose problems any health issue like Gynacological or Sexual like 
        premature ejaculation are to be address first by GP and to refer higher centres if needed . GP is qualified to treat most 
        ailments and provide comprehensive primary health care.
        <a href="about_us_text">Read More</a>
        </p>
        <div class=special_service>
           <div class="row">
               <div class="col-md-6">
                  <div class="single_special_service  border-2 border-blue-200">
                    <h5><i class="fa-solid fa-briefcase-medical "></i> BEST PHYSICIAN</h5>
                  </div>
               </div>
        
               <div class="col-md-6">
                  <div class="single_special_service  border-2 border-blue-200">
                    <h5><i class="fa-solid fa-home"></i> ONLINE DOCTOR CONSULTATION</h5>
                  </div>
               </div>
           </div>

           <div class="row">
               <div class="col-md-6">
                  <div class="single_special_service  border-2 border-blue-200">
                    <h5><i class="fa-solid fa-user-md"></i> QUALIFIED DOCTOR</h5>
                  </div>
               </div>
           
               <div class="col-md-6">
                  <div class="single_special_service  border-2 border-blue-200">
                    <h5><i class="fa-solid fa-truck-medical"></i> EMERGENCY SERVICES</h5>
                  </div>
               </div>
           </div>
        </div>
        
    </div>
    
    <div class="image-content">
        <img src="images/man.png" alt="Dr. G.S. Bansal">
    </div>
</div>


<div class="call_to_action">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
            <div class="col">
                <div class="call_to_image hidden-sm-down">
                    <img src="https://www.drgsbansalclinic.com/img/appointment.png" alt="" width="498px">
                </div>
            </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="col">
            <div class="call_to">
                <h3>
                Patient can contact Dr. GS Bansal on phone no 9811119367 for
                treatment/guidance till lockdown by Govt.
                
                </h3>
            </div>
        </div>
      </div>
    </div>
</div>

     
<div class="bg-gray-100 flex">
    
<section class="text-center py-12 mt-5">
        <h2 class="text-2xl font-semibold text-gray-800">
            WHY <span class="text-blue-600 font-bold">CHOOSE US</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto mt-10 px-4">
            
            <!-- Card 1 -->
            <div class="bg-white shadow-md border-2 border-blue-500 rounded-lg p-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/387/387561.png" alt="Doctor Icon" class="w-16 mx-auto mb-4">
                <h3 class="text-lg font-bold text-gray-800 uppercase">Qualified Doctor</h3>
                <p class="text-gray-600 mt-2">He is a well-trained & experienced physician doctor to plan this treatment.</p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-md border-2 border-blue-500 rounded-lg p-6 text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/387/387561.png" alt="Consultation Icon" class="w-16 mx-auto mb-4">
                <h3 class="text-lg font-bold text-gray-800 uppercase">Online Doctors Consultation</h3>
                <p class="text-gray-600 mt-2">
                    Chat with a doctor privately. <span class="font-bold text-black">Call: +91 98111 19367</span>
                    Talk to doctors online about your issues & get answers.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-md border-2 border-blue-500 rounded-lg p-6 text-center">
                <i class="fa-solid fa-sack-dollar text-primary-600 text-4xl w-16 mx-auto mb-5"></i>
                <h3 class="text-lg font-bold text-gray-800 uppercase">Affordable Cost</h3>
                <p class="text-gray-600 mt-2">The treatments are cheap and affordable as compared to other forms of treatment.</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-md border-2 border-blue-500 rounded-lg p-6 text-center">
            <i class="fa-solid fa-capsules text-primary-600 text-4xl w-16 mx-auto mb-5" ></i>
               
                <h3 class="text-lg font-bold text-gray-800 uppercase">Quality You Expect</h3>
                <p class="text-gray-600 mt-2">We promise to offer best quality products & services to our patients that they are looking for.</p>
            </div>

        </div>
    </section>

</div>


<div class="bg-white-400 px-10 md:px-20">

<section class="container mx-auto text-center py-10 mt-10">
        <h2 class="text-3xl font-bold text-blue-600 ">EXPERTISE</h2>

        <div class="flex flex-wrap justify-center items-center mt-10">

            <!-- Left Side -->
            <div class="w-full md:w-1/3 space-y-6 text-gray-700">
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg">General Physician</h3>
                    <p>Dr. G.S. Bansal is known as one of the best General Physicians in Noida.</p>
                </div>
                <div class="w-12 h-10 bg-white border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                    ✔
                </div>

            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg">Asthma</h3>
                    <p>A condition in which airways become inflamed, narrow, and produce extra mucus.</p>
                </div>
                <div class="w-12 h-10 bg-white border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                    ✔
                </div>
            </div>
            <div class="flex items-center justify-between">
                <div>
                    <h3 class="font-bold text-lg">Dermatologists</h3>
                    <p>Dermatology deals with skin, nails, hair, and related diseases.</p>
                </div>
                <div class="w-12 h-10 bg-white border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                    ✔
                </div>
            </div>
        </div>

 <!-- Doctor Image -->
            <div class="w-full md:w-1/3 flex justify-center my-6 md:my-0">
                <img src="images/doctor6.png" alt="Doctor" class="w-55 h-52">
            </div>

            <!-- Right Side -->
            <div class="w-full md:w-1/3 space-y-6 text-gray-700 justify-">
                <div class="flex items-end space-x-4">
                    <div class="w-12 h-10 bg-white border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                        ✔
                    </div>
                    <div class="ml-4">
                        <h3 class="font-bold text-lg">ENT</h3>
                        <p>Dr. G.S. Bansal is well equipped with top ENT specialists in Delhi/NCR.</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-12 h-10 bg-white  border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                        ✔
                    </div>
                    <div class="ml-4">
                        <h3 class="font-bold text-lg">Orthopaedic</h3>
                        <p>Orthopedics focuses on diagnosis, correction, and treatment of skeletal issues.</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="w-12 h-10 bg-white-200  border-2 border-blue-600 flex items-center justify-center rounded-md text-blue-600 text-2xl font-bold ml-auto">
                        ✔
                    </div>
                    <div class="ml-4">
                        <h3 class="font-bold text-lg">Paediatricians</h3>
                        <p>Pediatrics involves the medical care of infants, children, and adolescents.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<div class="bg-gray-100 py-12 mb-10">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-800">
                OUR <span class="text-blue-600">SERVICES</span>
            </h1>
        </div>
        
        <!-- Grid Layout -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-6 max-w-6xl mx-auto">
            <!-- Service Cards -->
            <div class="card bg-white  shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Asthma Doctors.png" alt="Asthma Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold   text-gray-700 flex-grow">Asthma Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Dermatologists.png" alt="Dermatology Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Dermatology Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/diabetologist_doctors.png" alt="Diabetes Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Diabetes Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/ENT-Treatment.png" alt="ENT Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">ENT Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/Family Physician.png" alt="Family Physician" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Family Physician</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/General-Physician-Doctors.png" alt="General Physician" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">General Physician</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Thyroid Doctors.png" alt="Thyroid Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Thyroid Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/Orthopaedic Doctors.png" alt="Orthopaedic Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Orthopaedic Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/Paediatricians.png" alt="Paediatrician" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Paediatrician (Child Care)</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Psychiatrists.png" alt="Psychiatric Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Psychiatric Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/Psychological Treatments.png" alt="Psychological Treatments" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold  text-gray-700 flex-grow">Psychological Treatments</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Sexual Problems.png" alt="Sexual Problems Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold text-gray-700 flex-grow ">Sexual Problems Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Hypertension Doctors.png" alt="Hypertension Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold text-gray-700 flex-grow">Hypertension Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center ">
                <img src="images/Tuberculosis Doctors.png" alt="Tuberculosis Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold text-gray-700 flex-grow">Tuberculosis Treatment</p>
            </div>

            <div class="card bg-white shadow-lg rounded-lg overflow-hidden p-4 text-center">
                <img src="images/urology.png" alt="Urology Treatment" class="w-full h-40 object-cover">
                <p class="mt-10 font-bold text-gray-700 flex-grow">Urology Treatment</p>
            </div>
        </section>
    </div>

    <section class="awards py-10 px-4 bg-white mb-10">
    <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">
        WHY <span class="text-blue-600 font-bold">AWARDS</span>
    </h2>

    <div class="grid-awards grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white awardss p-6 shadow-lg rounded-lg text-center">
            <img src="images/1.png" alt="Doctor Icon" class="w-16 mx-auto mb-4">
              </div>

        <!-- Card 2 -->
        <div class="bg-white awardss p-6 shadow-lg rounded-lg text-center">
            <img src="images/2.png" alt="Consultation Icon" class="w-16 mx-auto mb-4">
            </div>

        <!-- Card 3 -->
        <div class="bg-white awardss p-6 shadow-lg rounded-lg text-center">
            <img src="images/3.png" alt="Best Service" class="w-16 mx-auto mb-4">
                </div>

        <!-- Card 4 -->
        <div class="bg-white awardss p-6 shadow-lg rounded-lg text-center">
            <img src="images/4.png" alt="Top Hospital" class="w-16 mx-auto mb-4">
              </div>
    </div>
</section>


    <div class="bg-gray-100 py-12 ">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-gray-900">
                PATIENT'S <span class="text-blue-600">FEEDBACK</span>
            </h1>
        </div>

        <section class="card-size">
         <div class=special_service>
           <div class="row">
               <div class="col-md-3">
                  <div class="single_special_service">
                    <h5>Dinesh Khari</h5>
                    <p>Few months back, I contacted Dr. G.S. Bansal for taking his advice for my father for his prostate surgery.</p>
                    <div class="stars">★★★★★</div> 
                  </div>
               </div>
        
               <div class="col-md-3">
                  <div class="single_special_service">
                    <h5>Prakash Pandya</h5>
                    <p>If you are looking for Best Physician doctor? Dr. G.S. Bansal is one of the Best Physician and Asthma Doctor in Noida Sector 15.</p>
                    <div class="stars">★★★★★</div> 
                  </div>
               </div>

               <div class="col-md-3">
                  <div class="single_special_service">
                    <h5> Daksh Bisla</h5>
                    <p>I have heard about dr anurag khaitan is he comparable to DR. G.S. BANSAL</p>
                    <div class="stars">★★★★★</div> 
                  </div>
                </div>
           </div>
         </div>
        </section>
    </div> 


<section class="footer_bottom_area ">
    <footer class="footer_area">
    <div class="container">
        <div class="row">
           <div class="col-md-4 ">
              <div class="title">
                 <img src="https://www.drgsbansalclinic.com/img/logo.png" alt="Red Cross" class="logo">
                      <p>Dr. G.S Bansal is a General Physician and Family Physician in Sector 15, Noida and has an experience of 38 years in these fields. Dr. G.S Bansal practices at Fever Clinic in Sector 15, Noida.</p>
              </div>
           </div>

           <div class="col-md-4 ">
              <div class="title">
                 <h4>Useful Links</h4>
              </div>
              
              
              <ul class="link">
                    <li><a href="index.php"></a>Home</li>
                    <li><a href="about.php"></a>About Us</li>
                    <li><a href="contact.php"></a>Contact Us</li>
                 </ul>
           </div>

           <div class="col-md-4 ">
              <div class="title-1">
                <h4>Contact Info</h4>
              </div>
              <div class="footer_single_contact">
                <p><i class="fa fa-map-marker" aria-hidden="true"></i>
                 Shop Number. C-63, Gulmohar Commercial Complex, DSC Marg A Block, Sector 15 Noida, Uttar Pradesh 201301 India</p>
              </div>
              
              <div class="footer_single_contact">
                <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><a href="tel:9811119367">09811119367 </a>
                <a href="tel:01202516361"> 0120 251 6361</a></span>
                </p>
              </div>

              <div class="footer_single_contact">
                <p>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span><a href="mailto:drgsbansal@gmail.com">drgsbansal@gmail.com</a></span>
                </p>
              </div>
           </div>

        </div>
    </footer>
</section>


<a href="#" class="scroll-to-top">&#9650;</a>



<div class="container-1">
        <div class="col-md-6">
            <div class="top_quote hidden-sm">
                <p>
                © drgsbansal | All rights reserved
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="top_quote hidden-sm">
                <p>
                <a href="">Design & Develop by: Kite Web Technologies Pvt. Ltd.</a>
            </div>
        </div>
</div>


</body>
</html>