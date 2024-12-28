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
                <h1 class="display-4 fw-bold">Assest Liquidation</h1>
            </div>
        </div>




        <section class="elementor-section elementor-top-section elementor-element elementor-element-16afb5f elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no" data-id="16afb5f" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-924b34d" data-id="924b34d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section class="elementor-section elementor-inner-section elementor-element elementor-element-3213fb6 elementor-section-content-middle elementor-section-full_width elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no" data-id="3213fb6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ha_eqh_enable&quot;:false}">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-458ef3c" data-id="458ef3c" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-26fbc85 elementor-widget elementor-widget-text-editor" data-id="26fbc85" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Asset liquidation services for redundant assets in IT and Telecom category encompasses a range of activities aimed at efficiently disposing of assets that are no longer needed or useful to a business or organization. Our Scope of services includes:</p>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-4754b2e elementor-widget elementor-widget-heading" data-id="4754b2e" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Asset Assessment and Identification:</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-27cbb6d elementor-widget elementor-widget-text-editor" data-id="27cbb6d" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                Conducting a comprehensive assessment to identify redundant assets across the organization to determine which ones can be liquidated. </div>
                                        </div>
                                        <div class="elementor-element elementor-element-cca4032 elementor-widget elementor-widget-heading" data-id="cca4032" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Valuation and Pricing:</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7c6b3fe elementor-widget elementor-widget-text-editor" data-id="7c6b3fe" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                Valuing redundant assets to determine their fair market value. This may involve utilizing various valuation methods and considering factors such as age, condition, and market demand to set appropriate prices </div>
                                        </div>
                                        <div class="elementor-element elementor-element-959404f elementor-widget elementor-widget-heading" data-id="959404f" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Reverse Logistics and Asset Removal:</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-00b6229 elementor-widget elementor-widget-text-editor" data-id="00b6229" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                Coordinating logistics for the removal and transportation of assets from the organization&#8217;s premises to the buyer&#8217;s location. </div>
                                        </div>
                                        <div class="elementor-element elementor-element-47fcfca elementor-widget elementor-widget-heading" data-id="47fcfca" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Documentation and Legal Compliance:</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-40fb317 elementor-widget elementor-widget-text-editor" data-id="40fb317" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                Ensuring proper documentation and legal compliance throughout the liquidation process including preparing enroute documentation, disposal certificates and facilitating the recycling services </div>
                                        </div>
                                        <div class="elementor-element elementor-element-986e39c elementor-widget elementor-widget-heading" data-id="986e39c" data-element_type="widget" data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">Environmental and Ethical Considerations:</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-a24ba59 elementor-widget elementor-widget-text-editor" data-id="a24ba59" data-element_type="widget" data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <p>Adhering to environmental regulations and ethical standards in the disposal of assets. This may involve ensuring proper recycling or disposal of hazardous materials and minimizing environmental impact throughout the liquidation process.</p>
                                                <p>Overall, the scope of liquidation services for redundant assets encompasses a wide range of activities aimed at maximizing value and efficiency in the disposal process while ensuring compliance with legal, ethical, and environmental standards.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>




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