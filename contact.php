

<?php

include 'connect.php';

if(isset($_POST['doctors'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prevent duplicate emails
    $check = mysqli_query($conn, "SELECT * FROM doc WHERE email='$email'");
    if(mysqli_num_rows($check) > 0){
        $display_message= "Email already exists!";
    } else {
        $query = "INSERT INTO doc (full_name, email, phone, message) VALUES ('$full_name', '$email', '$phone', '$message')";
        mysqli_query($conn, $query);
        $display_message= "Data saved successfully!";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
   
 <!-- Bootstrap JS -->

</head>
<body>



 <div class="header_area">
    <div class="container">
        <div class="col-md-6">
            <div class="top_quote hidden-sm">
                <p>
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                Email: drgsbansal@gmail.com
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="top_quote hidden-sm">
                <p>
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                Call: 9811119367
                </p>
            </div>
        </div>
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

  <!-- Hero Section -->
  <div class="relative w-full h-20">
    <div class="absolute inset-0 flex justify-center items-center text-white text-2xl font-bold ">
        ABOUT DR. G.S. BANSAL
    </div>
</div>

<?php
        if(isset($display_message)){
            
            echo
            "<div class='display_message'>
               <span>$display_message</span>
                 <i class='fas fa-times' onclick='this.parentElement.style.display=`none`'></i>
            </div>";
        }
    
    ?>
    
<section class="section-inner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="" class="doctors" method="post">
                    
                    <div class="form-group">
                        <input type="text" name="full_name" class="form-control" placeholder="Enter Full Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter E-Mail" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                    </div>

                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Enter About Yourself" rows="6"></textarea>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary" type="submit" name="doctors">Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>




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



<section class="footer_bottom_area mt-20">
    <footer class="footer_area">
    <div class="container">
        <div class="row">
           <div class="col-md-4">
              <div class="title">
                 <img src="https://www.drgsbansalclinic.com/img/logo.png" alt="Red Cross" class="logo">
                      <p>Dr. G.S Bansal is a General Physician and Family Physician in Sector 15, Noida and has an experience of 38 years in these fields. Dr. G.S Bansal practices at Fever Clinic in Sector 15, Noida.</p>
              </div>
           </div>

           <div class="col-md-4">
              <div class="title">
                 <h4>Useful Links</h4>
              </div>
                 <ul class="link">
                    <li><a href="index.php"></a>Home</li>
                    <li><a href="about.php"></a>About Us</li>
                    <li><a href="contact.php"></a>Contact Us</li>
                 </ul>
           </div>

           <div class="col-md-4">
              <div class="title-1">
                 <h4>Contact Info</h4>
              </div>
              <div class="footer_single_contact">
                <p> <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Shop Number. C-63, Gulmohar Commercial Complex, DSC Marg A Block, Sector 15 Noida, Uttar Pradesh 201301 India</p>
              </div>
              
              <div class="footer_single_contact">
                <p>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><a href="tel:9811119367">09811119367</a>
                <a href="tel:01202516361">0120 251 6361</a></span>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>