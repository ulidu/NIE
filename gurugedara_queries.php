<?php include 'includes/header.html' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor_queries/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor_queries/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor_queries/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor_queries/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main_queries.css" rel="stylesheet" media="all">
</head>

<body>
<div class="page-wrapper  p-t-180 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3 p-5">


                <h1 class="title text-center">GURUGEDARA EDUCATIONAL TV CHANNELS</h1>
                <h3 class="title text-center">Eye Channel/ Nethra Channel Educational Telecast</h3>
                <h4 class="title text-center">G.C.E. Advanced Level</h4>
                <h5 class="title text-center">Student Queries</h5>
                <form method="POST" class="mx-auto">
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search ">
                            <select name="medium">
                                <option disabled="disabled" selected="selected">Medium</option>
                                <option>Sinhala</option>
                                <option>English</option>
                                <option>Tamil</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search ">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Subject</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                    <div class="input-group ">
                        <input class="input--style-3" type="text" placeholder="Name" name="name">
                    </div>

                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Queries" name="queries">

                    </div>
                    <div class=" w-100 mx-auto" >
                        <p class="text-center"> <button class="btn btn--pill btn--green  w-50" type="submit" >Submit</button></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="vendor_queries/jquery/jquery.min.js"></script>
<!-- Vendor JS-->
<script src="vendor_queries/select2/select2.min.js"></script>
<script src="vendor_queries/datepicker/moment.min.js"></script>
<script src="vendor_queries/datepicker/daterangepicker.js"></script>

<!-- Main JS-->
<script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

<?php include 'includes/footer.html' ?>