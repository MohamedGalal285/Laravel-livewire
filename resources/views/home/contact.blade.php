<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Bootstrap Themes by Zerotheme dot com - Free Responsive Html5 Templates">
    <meta name="author" content="https://www.Zerotheme.com">

    <title>ChokoCake</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Owl Carousel Assets -->
    <link href="{{ asset('owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

    <!-- jQuery and Modernizr-->
    <script src="{{ asset('js/jquery-2.1.1.js') }}"></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="sub-page">
    <div class="wrap-body">

        <header class="clearfix">

            <!--Navigation-->
            @include('home.inc.nav')


            <!-- Static Header -->
            <div class="header-text">
                <div class="col-md-12 text-center">
                    <span>Give Us A Call Or Drop Us A Line</span>
                    <h1>Get In Touch</h1>
                </div>
            </div><!-- /header-text -->

        </header>
        <!-- /Section: intro -->

        <!-- /////////////////////////////////////////Content -->
        <div id="page-content">

            <!-----------------Content-------------------->
            <section class="box-content">
                <div class="container">
                    <div class="row">
                        <!--Start Map-->
                        <div id="map" style="height: 450px;"></div>
                        <!--End Map-->
                        <div class="col-md-4 box-item">
                            <h3>Contact Info</h3>
                            <span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE
                                LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
                            <p>JL.Kemacetan timur no.23. block.Q3<br>
                                Jakarta-Indonesia</p>
                            <p>+6221 888 888 90 <br>
                                +6221 888 88891</p>
                            <p>info@yourdomain.com</p>
                        </div>
                        <div class="col-md-8">
                            <h3>Contact Form</h3>
                            <form name="form1" method="post" action="contact.php">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="name"
                                                id="name" placeholder="Enter name" required="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control input-lg" name="email"
                                                id="email" placeholder="Enter email" required="required" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" name="subject"
                                                id="subject" placeholder="Subject" required="required" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                                placeholder="Message" style="height: 170px;"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-skin btn-block" name="submitcontact"
                                            id="submitcontact">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        @include('home.inc.footer')

        <!-- Footer -->

        <!-- JS -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <!-- Google Map -->
        <script>
            var marker;
            var image = 'images/map-marker.png';

            function initMap() {
                var myLatLng = {
                    lat: 39.79,
                    lng: -86.14
                };

                // Specify features and elements to define styles.
                var styleArray = [{
                    featureType: "all",
                    stylers: [{
                        saturation: -80
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                            hue: "#000000"
                        },
                        {
                            saturation: 50
                        }
                    ]
                }, {
                    featureType: "poi.business",
                    elementType: "labels",
                    stylers: [{
                        visibility: "off"
                    }]
                }];

                var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: false,
                    // Apply the map style array to the map.
                    styles: styleArray,
                    zoom: 7
                });

                var directionsDisplay = new google.maps.DirectionsRenderer({
                    map: map
                });

                // Create a marker and set its position.
                marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: myLatLng
                });
                marker.addListener('click', toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async
            defer></script>

        <script src="{{ asset('js/main.js') }}"></script>
    </div>
</body>

</html>
