<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata and Stylesheets -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/general.css">
    <!--slide css-->
    
    <!--Bootstrap of slid -->
   <link rel="stylesheet" href="css/slide.css">
   <link rel="icon" href="image/logo.jpg" type="image/icon type">
   <title> Wejha</title>

    <!--End slide css -->
  
    <style>
.faq-container {
    background: linear-gradient(120deg, #a1c4fd, #5a92ac);
    padding: 20px;
    width: 100%;
    margin-top: 60px;
    
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.faq-item {
    margin-bottom: 10px;
}

.faq-checkbox {
    display: none; /* Hide the checkbox itself */
}

.faq-checkbox + .faq-question {
    position: relative;
    padding-left: 30px;
    cursor: pointer;
    display: block;
    color: #333;
    font-weight: bold;
}

.faq-checkbox + .faq-question:before {
    content: '+';
    position: absolute;
    left: 0;
    top: -2px;
    color: #333;
    font-weight: bold;
}

.faq-checkbox:checked + .faq-question:before {
    content: '-';
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease-out;
    margin-left: 30px; /* Align text with the questions */
    color: #333;
}

.faq-checkbox:checked ~ .faq-answer {
    max-height: 1000px; /* Ensure it's large enough to display any content */
    transition: max-height 0.5s ease-in;
}

.contact-button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 8px;
}
.table-bordered th,
    .table-bordered td {
      border: 1px solid #dee2e6;
    }

    .table-bordered {
      border: 1px solid #dee2e6;
      border-radius: 0.25rem;
      margin-bottom: 1rem;
    }

    .table th,
    .table td {
      padding: 0.75rem;
      vertical-align: top;
      border-top: 1px solid #dee2e6;
    }

    .table thead th {
      vertical-align: bottom;
      border-bottom: 2px solid #dee2e6;
    }

    .table-bordered thead th, .table-bordered thead td {
      border-bottom-width: 2px;
    }

    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-expand-sm  navbar-light shadow">
       
        <div class="container d-flex justify-content-between align-items-center"> 
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                  <img src="image/logo.jpg" alt="Wejha Logo">
            </a>
           
            <!-- Brand Logo and Text -->
            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                 <!-- Correct the src path as needed -->
                Wejha
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between " id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none ;">Content</a>
                        <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="Caravans.html" style="border: #59ab6e solid;margin-bottom: 5px;">Caravans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Chalets.html" style="border: #59ab6e solid;">Chalets</a>
                        </li>
                    </ul>
                       </div>
                       <div class="dropdown">
                        <a href="" class="dropdown-toggle" data-bs-toggle="dropdown" style="text-decoration: none ;">jspages</a>
                    <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="dynamicTable.html" >dynamictable with objects</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="dynamicTablewitharray.html" >dynamicTable with arrays</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                      <a class="nav-link" href="Questionnaire.html" >Questionnaire page</a>
                  </li>
                  <hr>
                  <li class="nav-item">
                    <a class="nav-link" href="funpage/funPage.html" >Funpage</a>
                </li>
                </ul>
                   </div>
                        <li class="nav-item">
                            <a class="nav-link" href="About_Us.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contact_Us.html">Contact Us</a>
                        </li>
                    </ul>
                   
                </div>
                <div class="navbar align-self-center d-flex nav-tabs">
                    <!-- Reservation Icon -->
                    <a class="nav-icon position-relative text-decoration-none" href="Reservation.html">
                        <i class="fas fa-calendar-alt text-dark mr-3"></i>
                    </a>
                   
                    <!-- Login Icon -->
                    <a class="nav-icon position-relative text-decoration-none" href="Login.html">
                        <i class="fas fa-sign-in-alt text-dark mr-3"></i>
                    </a>

                    <!-- Sign-In Icon -->
                    <a class="nav-icon position-relative text-decoration-none" href="Sign-In.html">
                        <i class="fas fa-user-plus text-dark mr-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Header -->