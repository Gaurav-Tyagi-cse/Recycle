<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        #waste-options {
            background-color: #f9f9f9;
            padding: 50px 0;
        }

        .content-box {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .content-box h3 {
            font-weight: bold;
        }

        .btn-group .btn {
            text-transform: capitalize;
        }

        .bg-image {
            background-image: url('images/images (1).jpeg');
            background-size: cover;
            background-position: center;
            min-height: 300px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: stretch;
            }

            .container>div {
                margin-bottom: 20px;
            }
        }

        .card {
            background-color: #d4edda;
            /* Light green background */
            border: 1px solid #c3e6cb;
            /* Slightly darker green border */
            height: 250px;
            /* Fixed height for all cards */
        }

        .card-title {
            color: #155724;
            /* Dark green text color */
        }

        .card-text {
            font-size: 1rem;
            /* Adjust text size for readability */
        }

        .certificate-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .certificate-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #d4edda;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Who WE Are</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="proDropdown" role="button" data-bs-toggle="dropdown">Pro</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Reverse Logistic</a></li>
                            <li><a class="dropdown-item" href="#">Collection Points</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="erpDropdown" role="button" data-bs-toggle="dropdown">ERP</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                            <li><a class="dropdown-item" href="#">Option 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Assest.php">Assest Liquidation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="contect.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">

        <div
            class="d-flex justify-content-center align-items-center text-center"
            style="
      background-image: url('images/backgroung_image.png'); /* Replace with your image */
      background-size: cover; 
      background-position: center; 
      height: 200px; 
      color: white; 
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
            <div>
                <h1 class="display-4 fw-bold">ABOUT US</h1>
            </div>
        </div>


        <div class="elementor-widget-container">
            <h3>Kar Parivartan founded in year 2020, An initiative designed to change the way we manage e-Waste. We are driven by our desire to convert redundant and obsolete end-of-life assets into elements. We promote reuse over recycling, an approach known as upcycling.</h3>
        </div>


        <div class="elementor-element elementor-element-c4b8a63 elementor-widget elementor-widget-text-editor" data-id="c4b8a63" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">
                <h6>We are recognised PRO (Producer Responsibility Organisation) authorised by CPCB (Central Pollution Control Board) to Channelise e-Waste for recycling through authorised recyclers. According to the 2016/ 2022 e-Waste Management Guidelines, it is recommended that Brand Owner/Producers work with PRO on their EPR/IPR strategy and goals. Our goal is to provide environment-friendly solutions that lead to the reuse and recycling, reducing their reach to landfills</h6>
                <h6>Our e-Waste Solutions and electronic disposal services are eco-friendly in nature to provide sustainable environmental. We understand compliance management and requirement that create an ecosystem of e-Waste collection and recycling based on the cost-effective model. Our focus is on responsible recycling, a zero-landfill policy and a healthy society, free of pollution.</h6>
            </div>
        </div>
   </div>

    </section>



    <div class="container my-5">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Our Strategy to Success</h3>
                    <p class="card-text">We focus on innovation, dedication, and delivering quality to achieve excellence in all our endeavors.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Mission</h3>
                    <p class="card-text">Our mission is to empower individuals and organizations through innovative solutions and unparalleled services.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h3 class="card-title">Vision</h3>
                    <p class="card-text">To become a global leader in our industry by fostering growth, sustainability, and positive impact.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="images/e_waste.png" alt="Image" class="img-fluid">
            </div>
            <!-- Content Section -->
            <div class="col-md-6">
                <h2>Name of founder</h2>
                <h4> founder</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</p>
                <p>More content about the image or topic goes here. You can add more paragraphs or any other content like links, lists, etc.</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6">
                <img src="images/e_waste.png" alt="Image" class="img-fluid">
            </div>
            <!-- Content Section -->
            <div class="col-md-6">
                <h2>Name of Co-founder</h2>
                <h4>Co- founder</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</p>
                <p>More content about the image or topic goes here. You can add more paragraphs or any other content like links, lists, etc.</p>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-4">Our Certificates</h2>
        <div class="row">
            <!-- Certificate 1 -->
            <div class="col-md-6 mb-4">
                <div class="card certificate-card">
                    <img src="certificate1.jpg" class="card-img-top" alt="Certificate 1">
                    <div class="card-body">
                        <h5 class="card-title text-center">Certificate Title 1</h5>
                        <p class="card-text text-center">Description or details about the first certificate.</p>
                    </div>
                </div>
            </div>

            <!-- Certificate 2 -->
            <div class="col-md-6 mb-4">
                <div class="card certificate-card">
                    <img src="certificate2.jpg" class="card-img-top" alt="Certificate 2">
                    <div class="card-body">
                        <h5 class="card-title text-center">Certificate Title 2</h5>
                        <p class="card-text text-center">Description or details about the second certificate.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start; margin-top: 50px; background-color: lightgreen; border: 1px solid #ccc; padding: 20px;">
        <div style="flex: 1; padding-right: 30px; min-width: 300px; margin-bottom: 20px;">
            <h1>Contact Us Directly</h1>
            <h3><span style="font-size: 1.5rem;">📞</span> Phone: 9910063653</h3>
            <h3><span style="font-size: 1.5rem;">📧</span> Email: contact@example.com</h3>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label">Comment</label>
                    <textarea class="form-control" id="comment" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>




    </div>
    <br><br>
    </div>
    <!-- Footer -->
    <footer style="background-color:rgb(243, 248, 243); padding: 20px 0;">
        <div class="container">
            <div class="row">
                <!-- First Section -->
                <div class="col-md-4 text-center text-md-start">
                    <img src="your-logo-url.png" alt="Logo" style="max-width: 150px; margin-bottom: 10px;">
                    <p style="margin-top: 10px; font-size: 15px; color: #6c757d;">
                        We are a trusted company providing quality services to our customers. Learn more about us.
                    </p>
                </div>
                <!-- Second Section -->
                <div class="col-md-4 text-center text-md-start">
                    <h5 style="font-size: 30px;">Quick Links</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li><a href="index.php" style="text-decoration: none; color: #6c757d; font-size: 20px;">-- >Home</a></li>
                        <li><a href="#" style="text-decoration: none; color: #6c757d; font-size: 20px;">-- >Services</a></li>
                        <li><a href="about.php" style="text-decoration: none; color: #6c757d; font-size: 20px;">-- >About Us</a></li>
                        <li><a href="contect.php" style="text-decoration: none; color: #6c757d; font-size: 20px;">-- >Contact</a></li>
                        <li><a href="#" style="text-decoration: none; color: #6c757d; font-size: 20px;">-- >FAQs</a></li>
                    </ul>
                </div>
                <!-- Third Section -->
                <div class="col-md-4 text-center text-md-start">
                    <h5 style="font-size: 30px;">Contact Us</h5>
                    <ul style="list-style: none; padding: 0;">
                        <li style="font-size: 20px; color: #6c757d;">
                            <i class="bi bi-telephone-fill" style="color: #007bff; margin-right: 5px;"></i> 9910063653
                        </li>
                        <li style="font-size: 20px; color: #6c757d;">
                            <i class="bi bi-envelope-fill" style="color: #007bff; margin-right: 5px;"></i> info@example.com
                        </li>
                        <li style="font-size: 20px; color: #6c757d;">
                            <i class="bi bi-geo-alt-fill" style="color: #007bff; margin-right: 5px;"></i>Ground floor, factory no 58, Village Budhewal, Jandiali Budhewal Road, Tehsil and District Ludhiana
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>

</html>