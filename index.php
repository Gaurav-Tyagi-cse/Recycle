<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recycle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

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
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #d4edda;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
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

    <!-- Image Section -->
    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First Video -->
            <div class="carousel-item active">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/ItNLMCh5ZHg?autoplay=1&mute=1"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <!-- Second Video -->
            <div class="carousel-item">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/vYX2ulR5j4s?autoplay=1&mute=1"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
           
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Our Services Section -->
    <section class="container py-5" id="our-services">
        <h2 class="text-center mb-4" style="background-color: lightgreen;">Our Services</h2>

        <div class="row">
            <div class="col-md-3 d-flex">
                <div class="card h-100">
                    <img src="images/pro_image.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">PRO</h5>
                        <p class="card-text">PRO" stands for Producer Responsibility Organization, an entity that takes on the responsibility ...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="card h-100">
                    <img src="images/erp_image.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">ERP</h5>
                        <p class="card-text">EPR refers to Extended Producer Responsibility services. Extended Producer obligation is a policy concept...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="card h-100">
                    <img src="images/Reverse-logistic.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">LOGISTIC</h5>
                        <p class="card-text">Reverse logistics is a key service offerings of PRO, to facilitate the takeback and channelise the...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="card h-100">
                    <img src="images/asset-lquitaion.jpg" class="card-img-top" alt="Service 4">
                    <div class="card-body">
                        <h5 class="card-title">LQUITAION</h5>
                        <p class="card-text">Asset liquidation services for redundant assets in IT and Telecom category encompasses...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Waste Options Section -->
    <section class="container py-5" id="waste-options">

        <!-- Nav Tabs -->
        <div class="d-flex justify-content-center">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link active" id="pills-ewaste-tab" data-bs-toggle="pill" data-bs-target="#pills-ewaste" type="button" role="tab" aria-controls="pills-ewaste" aria-selected="true">
                        e-Waste
                    </button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link" id="pills-plastic-tab" data-bs-toggle="pill" data-bs-target="#pills-plastic" type="button" role="tab" aria-controls="pills-plastic" aria-selected="false">
                        Plastic Waste
                    </button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link" id="pills-battery-tab" data-bs-toggle="pill" data-bs-target="#pills-battery" type="button" role="tab" aria-controls="pills-battery" aria-selected="false">
                        Battery Waste
                    </button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link" id="pills-tyre-tab" data-bs-toggle="pill" data-bs-target="#pills-tyre" type="button" role="tab" aria-controls="pills-tyre" aria-selected="false">
                        Tyre Waste
                    </button>
                </li>
                <li class="nav-item mx-1" role="presentation">
                    <button class="nav-link" id="pills-hazardous-tab" data-bs-toggle="pill" data-bs-target="#pills-hazardous" type="button" role="tab" aria-controls="pills-hazardous" aria-selected="false">
                        Hazardous Waste
                    </button>
                </li>
            </ul>
        </div>
        <!-- Tab Content -->
        <div class="tab-content mt-4">
            <div class="tab-pane fade show active" id="pills-ewaste" role="tabpanel" aria-labelledby="pills-ewaste-tab">
                <div class="row align-items-center" style="background-image: url('images/images.jpeg'); background-size: cover; background-position: center; height: 400px;">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="bg-white p-4 rounded shadow">
                            <h3 class="text-dark">e-Waste</h3>
                            <p class="text-dark">e-Waste is the fastest-growing waste stream consisting of a complex combination of key elements like Plastic, Iron, aluminium, copper, silver, gold, palladium and many more than we can imagine. The rapid advancement of technology has resulted in a higher waste ratio of electronic products, which impacts adversely if not recycled formally.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-plastic" role="tabpanel" aria-labelledby="pills-plastic-tab">
                <div class="row align-items-center" style="background-image: url('images/plastic_waste.png'); background-size:    cover; background-position: center; height: 400px;">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="bg-white p-4 rounded shadow">
                            <h3>Plastic Waste</h3>
                            <p>Plastic Waste is growing considerably and is a major concern impacting our environment. Plastic can continue to be in landfills for thousands of years which impairs the problem of space and contamination of soil. We encourage consumers to adopt sustainable practices and minimal use of plastic and promote recycling to reduce adverse impacts on the circular economy and environmental sustainability.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-battery" role="tabpanel" aria-labelledby="pills-battery-tab">
                <div class="row align-items-center" style="background-image: url('images/Batteries_waste.jpg'); background-size:    cover; background-position: center; height: 400px;">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="bg-white p-4 rounded shadow">
                            <h3>Battery Waste</h3>
                            <p>Battery Waste (Lead Acid Battery)<br>
                                Battery is a standby energy source that largely has domestic and commercial use.<br>
                                Battery Waste (Lithium Ion)<br>
                                Battery is a standby energy source that largely has domestic and commercial use in electronic equipment like</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-tyre" role="tabpanel" aria-labelledby="pills-tyre-tab">
                <div class="row align-items-center" style="background-image: url('images/tyre_waste.webp'); background-size:    cover; background-position: center; height: 400px;">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="bg-white p-4 rounded shadow">
                            <h3>Tyre Waste</h3>
                            <p>Tyre waste recycling is essential for waste reduction and environmental sustainability. Discarded tyres, if not handled appropriately, can cause environmental and health issues due to their delayed decomposition, potential fire threats, and habitat disruption. Recycling tyre waste not only addresses environmental concerns but also generates economic opportunities and helps to build a more sustainable and circular economy by Retreading, </p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-hazardous" role="tabpanel" aria-labelledby="pills-hazardous-tab">
                <div class="row align-items-center" style="background-image: url('images/Hazardous-Waste-Image-2.jpeg'); background-size:    cover; background-position: center; height: 400px;">
                    <div class="col-md-6 offset-md-3 text-center">
                        <div class="bg-white p-4 rounded shadow">
                            <h3>Hazardous Waste</h3>
                            <p>Expired items are classified as hazardous waste because they can cause harm to human health and the environment if not properly managed. Expired products, including packaged food, medicines, cosmetics, and other consumer goods, may contain damaged active chemicals or potentially hazardous compounds. Recycling expired consumer products presents challenges similar to those encountered with packaged food, particularly concerning safety, materials, and environmental considerations.</p>
                            <a href="#" class="btn btn-outline-primary">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="background-image: url('images/backgroung_image.png'); background-size: contain; background-position: center; background-repeat: no-repeat; height: 400px;" class="d-flex justify-content-center align-items-center">
    </div>
    <!-- Transforming Values Section -->
    <section class="container py-5">
        <div class="text-center">
            <h1 class="elementor-heading-title elementor-size-default">Transforming waste</h1>
            <h3 class="elementor-heading-title elementor-size-default">for Sustainable Values</h3>
        </div>

        <section class="container py-5">
            <div class="row text-center">
                <!-- First Column -->
                <div class="col-12 col-md-4 mb-4">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2023/12/icon-1.png" alt="" class="img-fluid" width="100" height="105">
                    <h2 class="mt-3">‘Reduce’ <br>think before you buy</h2>
                </div>
                <!-- Second Column -->
                <div class="col-12 col-md-4 mb-4">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2023/12/icon-2.png" alt="" class="img-fluid" width="100" height="100">
                    <h2 class="mt-3">‘Reuse’<br> Sell or Donate for Use</h2>
                </div>
                <!-- Third Column -->
                <div class="col-12 col-md-4 mb-4">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2023/12/icon-3.png" alt="" class="img-fluid" width="100" height="96">
                    <h2 class="mt-3">‘Recycle’<br> Waste to Value</h2>
                </div>
            </div>
        </section>

    </section>
    <section class="container py-5" id="about-us">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center">
                <img src="images/about-us.jpg" alt="About Us" class="img-fluid">
            </div>
            <div class="col-md-6 text-center">
                <h2>About Us</h2>
                <p>KarParivartan was founded in the year 2020, An initiative designed to change the way we manage e-Waste, Battery Waste, Plastic Waste, Tyre Waste & Hazardous waste</p>
                <a href="#learn-more" class="btn btn-primary btn-flow">Read More</a>
            </div>
        </div>
    </section>

    <div class="bg-image d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row text-center">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card mb-3" style="background-color: #90ee90;">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="font-size: 50px;">📥</span> <!-- Download emoji -->
                            </div>
                            <h5 class="card-title">Collected and Channelised in 2021(MT)</h5>
                            <h2 class="card-text">2500+</h2>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card mb-3" style="background-color: #90ee90;">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="font-size: 50px;">📥</span> <!-- Another emoji -->
                            </div>
                            <h5 class="card-title">Collected and Channelised in 2022(MT)</h5>
                            <h2 class="card-text">5600+</h2>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card mb-3" style="background-color: #90ee90;">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="font-size: 50px;">📥</span> <!-- Another emoji -->
                            </div>
                            <h5 class="card-title">Target Collection and Channelisation 2023(MT)</h5>
                            <h2 class="card-text">14000+</h2>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card mb-3" style="background-color: #90ee90;">
                        <div class="card-body">
                            <div class="mb-3">
                                <span style="font-size: 50px;">📥</span> <!-- Another emoji -->
                            </div>
                            <h5 class="card-title">Target Collection and Channelisation 2024(MT)</h5>
                            <h2 class="card-text">24000+</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4">Aevitas Recycling LLP Edge</h2>
        <hr class="my-4">
        <div class="row justify-content-center text-center">
            <div class="d-flex flex-row flex-nowrap overflow-auto">
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2024/01/Untitled-2-1.png" class="img-fluid w-50" alt="">
                    <h5 class="mt-3">Recyclable Waste Solutions</h5>
                </div>
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2024/01/icon2.png" class="img-fluid w-50" alt="">
                    <h5 class="mt-3">Network of Recyclers</h5>
                </div>
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2024/01/icon3.png" class="img-fluid w-50" alt="">
                    <h5 class="mt-3">Pan India Foot Print</h5>
                </div>
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2024/01/icon4.png" class="img-fluid w-50" alt="">
                    <h5 class="mt-3">Transparency</h5>
                </div>
                <div class="col-12 col-md-2 mb-4 mb-md-0">
                    <img src="https://www.karparivartan.com/wp-content/uploads/2024/01/icon5.png" class="img-fluid w-50" alt="">
                    <h5 class="mt-3">EPR Compliance Management</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: flex-start;   margin-top: 50px; background-color: lightgreen; border: 1px solid #ccc; padding: 20px;">
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
                            <i class="bi bi-geo-alt-fill" style="color: #007bff; margin-right: 5px;"></i> Ground floor, factory no 58, Village Budhewal, Jandiali Budhewal Road, Tehsil and District Ludhiana
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>