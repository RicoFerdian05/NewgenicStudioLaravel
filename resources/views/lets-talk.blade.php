<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lets Talk</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/lets-talk.css">

    <!-- Family Font Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;500&display=swap" rel="stylesheet">

    <!-- Leaflet CSS -->
    <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <!-- Leaflet JS -->
    <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>

   

</head>

<body>
    <div class="background-1">
        <img src="../images/Vector 15.png" alt="">
    </div>
    <div class="navbar">
        <div class="container">
                <div class="col-md-6" >
                    <img src="../icons/logo_newgenic.png" alt="">&nbsp;
                    <span class="title align-middle"><span class="sub-title">new</span>genic studio</span>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/web-service" >Service</a></li>
                        <li><a href="/team">Team</a></li>
                        <li><a href="/ourwork">Our Work</a></li>
                        <li><a href="/lets-talk"><button>Lets Talk</button></a></li>
                        <li>En</li>
                    </ul>
                </div>  
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <center>
                    <div class="col text-center">
                        <h1>Contact Us</h1>
                        <h5>Let's start something great together. Get in touch with one of the team today!</h5>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <div class="body-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Let's Talk<span style="color: #faac1b;">.</span></h2>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col category">
                            Sales
                        </div>
                    </div>
                    <div class="row">
                        <div class="col category">
                            Careers
                        </div>
                    </div>
                    <div class="row">
                        <div class="col category">
                            Internship
                        </div>
                    </div>
                </div>
                <div class="col form">
                    <div class="row">
                        <div class="col">
                            <form action="">
                                <h3>Get in touch!</h3>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="first" id="first" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="last" id="last" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="url" name="website1" id="website1" placeholder="Website (optional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="url" name="website2" id="website2" placeholder="Website (optional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <textarea name="message" id="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <input type="checkbox" name="check" id="check">
                           <span style="font-size: 14px;">I'd Like To Receive Updates And Tips On Digital Marketing For My Business</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                           <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-1">
        <div class="container">
            <center>
                <div class="row">
                    <div class="col">
                        <h2><span style="color: #2A5298;">Meet</span> Us Offline</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div id="map"
                            style="width: 1000px; margin-top: 55px; height: 600px; border-radius: 10px; box-shadow: -10px 0px 30px rgba(0, 0, 0, 0.2);"></div>
                         <!-- Google Maps JS -->
                        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF9_DxJLhJpqVB_IvpQb_-6dEGhzPrqLw&callback=initMap&v=weekly&channel=2" async></script> -->
                        
                    </div>
                </div>
            </center>
        </div>
    </div>

    <div class="body-1" style="background-color: #2A5298; height: 150px;">
        <div class="container">
            <div class="row ">
                <div class="col contact">
                    <div class="row contact-us">
                        <div class="col contact-us-1">
                            <img src="../icons/office.png" alt="office.png">
                            <div class="teks-contact">
                                <h5>Office</h5>
                                <b>newgecnicstudio@gmail.com</b>
                            </div>
                        </div>
                        <div class="col contact-us-1">
                            <img src="../icons/email.png" alt="office.png">
                            <div class="teks-contact">
                                <h5>E-mail</h5>
                                <b>newgecnicstudio@gmail.com</b>
                            </div>
                        </div>
                        <div class="col contact-us-1">
                            <img src="../icons/phone.png" alt="office.png">
                            <div class="teks-contact">
                                <h5>Phone</h5>
                                <b>+6253723526</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="background-footer" style="background-color: #F3F3F3; height: 500px;">
        <div class="footer2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3" style="margin-left: 0px; color: #616161;">
                        <img src="../icons/logo_newgenic.png" alt="" style="margin-left: -1px;">&nbsp;
                        <span class="title" style="color: #2A5298;"><span class="sub-title">new</span>genic studio</span>
                        <h5>Newgenic Studio is committed to helping customers reach their business dreams. Providing perfect strategy, innovative creations and effective digital marketing solutions</h5>
                        <img src="../icons/Social Icons.png" style="margin-left:0px;">
                        <img src="../icons/Social Icons-2.png">
                        <img src="../icons/Social Icons-3.png">
                        <img src="../icons/Social Icons-4.png">
                    </div>
                    <div class="col-md-3">
                        <h6>Quick Links</h6>
                        <p>Portofolio</p>
                        <p>Blogs</p>
                        <p>About</p>
                        <p>Press</p>
                        <p>Careers</p>
                    </div>
                    <div class="col-md-3">
                        <h6>Services</h6>
                        <p>UI/UX Design</p>
                        <p>App Development</p>
                        <p>Web Development</p>
                        <p>Quality Assurance</p>
                        <p>Machine Learning</p>
                    </div>
                    <div class="col-md-3" style="color: #616161;">
                        <h6>Reach Us</h6>
                        <p><img src="../icons/logos_linkedin-icon.png" class="spc">hello@landify.co</p>
                        <p><img src="../icons/logos_facebook.png" class="spc">Newgenic studio</p>
                        <div class="row">
                            <div class="col-md-1">
                                <img src="../icons/address.png" class="spc">
                            </div>
                            <div class="col-md-3">
                                <p class="p-spc">772 Lyonwood Ave Walnut, CA 91789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer2 text-end" style="margin-top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        Terms & Conditions | Privacy Policy | Sitemop | Disclaimer
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
<script>
    // Initialize and add the map Google Maps
    // function initMap() {
    // // The location of Uluru
    // const uluru = { lat: -25.344, lng: 131.036 };
    // // The map, centered at Uluru
    // const map = new google.maps.Map(document.getElementById("map"), {
    //     zoom: 4,
    //     center: uluru,
    // });
    // // The marker, positioned at Uluru
    // const marker = new google.maps.Marker({
    //     position: uluru,
    //     map: map,
    // });
    // }
    
    // Leaflet Map
    var map = L.map('map').setView([-6.2401461, 106.821305], 13);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([-6.2401461, 106.821305]).addTo(map)
    .bindPopup('Newgenic Studio')
    .openPopup();
</script>

</html>