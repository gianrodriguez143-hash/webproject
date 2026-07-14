<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Travel Guide Information | Bislig City</title>
    <link rel="stylesheet" href="Travel-Guide-Information.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1><i class="fas fa-map-guide"></i> Travel Guide Information</h1>
            <p>Discover the beauty of <strong>Bislig City, Surigao del Sur</strong></p>
            <div class="header-stats">
                <div class="stat"><span class="stat-number">14+</span><span>Spots</span></div>
                <div class="stat"><span class="stat-number">12+</span><span>Hotels</span></div>
                <div class="stat"><span class="stat-number">8</span><span>Routes</span></div>
            </div>
            <a href="logout.php" class="logout-btn">
                <i class="fas fa-right-from-bracket"></i> Logout
            </a>
        </header>

        <input type="radio" name="mainTab" id="tab-spots" class="tab-radio" checked>
        <input type="radio" name="mainTab" id="tab-maps" class="tab-radio">
        <input type="radio" name="mainTab" id="tab-hotels" class="tab-radio">
        <input type="radio" name="mainTab" id="tab-schedules" class="tab-radio">

        <div class="radio-group">
            <label for="tab-spots"><i class="fas fa-map-marker-alt"></i> Tourist Spots</label>
            <label for="tab-maps"><i class="fas fa-map"></i> Maps & Routes</label>
            <label for="tab-hotels"><i class="fas fa-hotel"></i> Hotels</label>
            <label for="tab-schedules"><i class="fas fa-calendar-alt"></i> Schedules</label>
        </div>

        <div class="content-wrapper">
            <div id="panel-spots" class="tab-panel">
                <div class="panel-header">
                    <h2>✨ Must-Visit Spots in Bislig City</h2>
                    <p class="info-badge"><i class="fas fa-info-circle"></i> Hover over cards to see animation effect
                    </p>
                </div>
                <div class="spots-grid">
                    <div class="spot-card">
                        <div class="spot-image"
                            style="background-image: url('https://1.bp.blogspot.com/-jGaAF2uf6xA/XtduAdektsI/AAAAAAAAvlk/GD7Qdrn5bOYLuvidTeCTuOpU_AZIFBJqwCLcBGAsYHQ/s1600/DSC_5152.JPG')">
                            <div class="spot-category falls"></div>
                        </div>
                        <div class="spot-info">
                            <h3>Tinuy-an Falls</h3>
                            <p class="rating"><i class="fas fa-star"></i> 4.9 (1,247 reviews)</p>
                            <p>Majestic three-tiered waterfall, known as "Niagara Falls of the Philippines".</p>
                            <div class="spot-features"><span><i class="fas fa-hiking"></i> Adventure</span><span><i
                                        class="fas fa-swimming-pool"></i> Swimming</span></div>
                        </div>
                    </div>
                    <div class="spot-card">
                        <div class="spot-image"
                            style="background-image: url('https://images.fineartamerica.com/images-medium-large-5/hagonoy-island-jojie-alcantara.jpg')">
                            <div class="spot-category beach"></div>
                        </div>
                        <div class="spot-info">
                            <h3>Hagonoy Island</h3>
                            <p class="rating"><i class="fas fa-star"></i> 4.7 (892 reviews)</p>
                            <p>Pristine white sand beach perfect for relaxation and water sports.</p>
                            <div class="spot-features"><span><i class="fas fa-umbrella-beach"></i> Beach</span><span><i
                                        class="fas fa-camera"></i> Photography</span></div>
                        </div>
                    </div>
                    <div class="spot-card">
                        <div class="spot-image"
                            style="background-image: url('https://bislig.gov.ph/wp-content/uploads/2019/08/hinayagan-cave.jpg')">
                            <div class="spot-category cave"></div>
                        </div>
                        <div class="spot-info">
                            <h3>Hinayagan Cave</h3>
                            <p class="rating"><i class="fas fa-star"></i> 4.5 (456 reviews)</p>
                            <p>Hidden cave with stunning stalactites and underground river.</p>
                            <div class="spot-features"><span><i class="fas fa-mountain"></i> Caving</span><span><i
                                        class="fas fa-binoculars"></i> Exploration</span></div>
                        </div>
                    </div>
                    <div class="spot-card">
                        <div class="spot-image"
                            style="background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgZtsqXMWopY95vlVOkReTyiXdc7H-xHqG2Kps3ejHzhRsfxDAzTuTDfkTMUiHYj6eGtEuC8Kw3_gPmQ4kd18iUHKQlWFIPmkUl1eV1mtHHxganfNzi1V5D6iG36o2l37Oucvq0wLSAhl0b9g-r7Sz53ozlcqz6F1PIsh767svjr_n4lMvDirFwimKN/s4015/Cottage%20Bamboo%20Raft%20-%20Zulig%20Lake%2077%20Mone%20Bislig%20City.jpg')">
                            <div class="spot-category lake"></div>
                        </div>
                        <div class="spot-info">
                            <h3>Lake 77</h3>
                            <p class="rating"><i class="fas fa-star"></i> 4.8 (678 reviews)</p>
                            <p>Serene lake with bamboo rafting, lush greenery — perfect for wellness.</p>
                            <div class="spot-features"><span><i class="fas fa-spa"></i> Relaxation</span><span><i
                                        class="fas fa-heart"></i> Wellness</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-maps" class="tab-panel">
                <div class="panel-header">
                    <h2><i class="fas fa-location-dot"></i> Travel Maps & Detailed Routes</h2>
                    <p class="info-badge">📍 Accurate directions from Bislig City Proper</p>
                </div>
                <div class="maps-container">
                    <div class="map-card">
                        <h3><i class="fas fa-water"></i> Tinuy-an Falls Route</h3>
                        <div class="map-placeholder"><i class="fas fa-map-marked-alt"></i>
                            <p>15km from City Proper<br>30 mins by tricycle/van</p>
                        </div>
                        <div class="map-directions">City Proper → Brgy. San Vicente → Tinuy-an Falls</div>
                        <div class="route-tips">💡 Best time: 8AM-11AM | Entrance: ₱50</div>
                    </div>
                    <div class="map-card">
                        <h3><i class="fas fa-umbrella-beach"></i> Hagonoy Island Access</h3>
                        <div class="map-placeholder"><i class="fas fa-ship"></i>
                            <p>12km land + 20min boat ride</p>
                        </div>
                        <div class="map-directions">Bislig Port → Motorized boat → Hagonoy Island</div>
                        <div class="route-tips">💡 Boat rental ~₱500, bring sunblock</div>
                    </div>
                    <div class="map-card">
                        <h3><i class="fas fa-mountain"></i> Hinayagan Cave Trail</h3>
                        <div class="map-placeholder"><i class="fas fa-hiking"></i>
                            <p>8km from city proper → 200m trek</p>
                        </div>
                        <div class="map-directions">Brgy. Hinayagan → Local guide required</div>
                        <div class="route-tips">💡 Headlamp & sandals needed, guide fee ₱300</div>
                    </div>
                    <div class="map-card">
                        <h3><i class="fas fa-water"></i> Lake 77 Scenic Drive</h3>
                        <div class="map-placeholder"><i class="fas fa-tree"></i>
                            <p>6km from downtown, 15 mins tricycle</p>
                        </div>
                        <div class="map-directions">Mangagoy Center → Lake 77 Road</div>
                        <div class="route-tips">💡 Sunrise paddleboarding, entrance ₱30</div>
                    </div>
                    <div class="map-card">
                        <h3><i class="fas fa-route"></i> Main Circuit Tour</h3>
                        <div class="map-placeholder"><i class="fas fa-compass"></i>
                            <p>Full day covering 4 major spots</p>
                        </div>
                        <div class="map-directions">Tinuy-an → Hagonoy Island → Hinayagan Cave → Lake 77</div>
                        <div class="route-tips">🚐 Habal-habal day tour: ₱800-1200</div>
                    </div>
                </div>
            </div>

            <div id="panel-hotels" class="tab-panel">
                <div class="panel-header">
                    <h2><i class="fas fa-bed"></i> Top-rated Stays & Accommodations</h2>
                    <p class="info-badge">Click "Book Now" to open booking modal</p>
                </div>
                <div class="hotels-grid">
                    <div class="hotel-card">
                        <div class="hotel-image"
                            style="background-image: url('https://tse1.mm.bing.net/th/id/OIP.du2wNCbnjFDdtUn4VU-AMQHaE7?rs=1&pid=ImgDetMain&o=7&rm=3')">
                        </div>
                        <div class="hotel-info">
                            <h3>Hotel La Salle</h3>
                            <div class="hotel-rating">★★★★★ 4.8</div>
                            <p>Modern comfort, cozy rooms, central location.</p>
                            <div class="hotel-price">₱1,500/night</div>
                            <div class="hotel-amenities"><span><i class="fas fa-wifi"></i> WiFi</span><span><i
                                        class="fas fa-parking"></i> Parking</span></div><a href="#booking-modal"
                                class="book-link">📅 Book Now →</a>
                        </div>
                    </div>
                    <div class="hotel-card">
                        <div class="hotel-image"
                            style="background-image: url('https://tse2.mm.bing.net/th/id/OIP.6jaYChf-48dyxUx82RiNLQHaFn?rs=1&pid=ImgDetMain&o=7&rm=3')">
                        </div>
                        <div class="hotel-info">
                            <h3>Paper Country Inn</h3>
                            <div class="hotel-rating">★★★★☆ 4.6</div>
                            <p>Budget-friendly, clean & quiet inn.</p>
                            <div class="hotel-price">₱1,200/night</div>
                            <div class="hotel-amenities"><span><i class="fas fa-wifi"></i> Free WiFi</span><span><i
                                        class="fas fa-utensils"></i> Cafe</span></div><a href="#booking-modal"
                                class="book-link">📅 Book Now →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-schedules" class="tab-panel">
                <div class="panel-header">
                    <h2><i class="far fa-clock"></i> Tour Packages & Daily Itineraries</h2>
                    <p class="info-badge">Click any price button to book</p>
                </div>
                <div class="schedules-container">
                    <div class="schedule-card">
                        <h3>🌊 Day Tour Package</h3>
                        <div class="schedule-time">⏰ 6:00 AM - 6:00 PM</div>
                        <div class="itinerary-item"><span>7:00 AM</span><span>Tinuy-an Falls</span></div>
                        <div class="itinerary-item"><span>11:00 AM</span><span>Hagonoy Island (lunch)</span></div>
                        <div class="itinerary-item"><span>2:00 PM</span><span>Lake 77 Relaxation</span></div><a
                            href="#booking-modal" class="price-button">💰 ₱1,550/person - Book Now</a>
                    </div>
                    <div class="schedule-card">
                        <h3>⚡ Adventure Express</h3>
                        <div class="schedule-time">🔥 8:00 AM - 4:00 PM</div>
                        <div class="itinerary-item"><span>9:30 AM</span><span>Tinuy-an + rafting</span></div>
                        <div class="itinerary-item"><span>1:30 PM</span><span>Hagonoy Island lunch</span></div>
                        <div class="itinerary-item"><span>3:00 PM</span><span>Hinayagan Cave</span></div><a
                            href="#booking-modal" class="price-button">💰 ₱2,100/person - Book Now</a>
                    </div>
                    <div class="schedule-card">
                        <h3>🌿 Nature & Wellness</h3>
                        <div class="schedule-time">🌅 7:00 AM - 5:00 PM</div>
                        <div class="itinerary-item"><span>7:00 AM</span><span>Lake 77 meditation</span></div>
                        <div class="itinerary-item"><span>10:30 AM</span><span>Tinuy-an Falls</span></div>
                        <div class="itinerary-item"><span>2:00 PM</span><span>Hagonoy Island sunset</span></div><a
                            href="#booking-modal" class="price-button">💰 ₱1,850/person - Book Now</a>
                    </div>
                </div>
            </div>
        </div>

        <footer><i class="fas fa-tree"></i> Travel Guide Information — Bislig City Tourism | Discover Surigao del Sur
        </footer>
    </div>

    <div id="booking-modal" class="modal-overlay">
        <div class="modal-card">
            <i class="fas fa-check-circle"></i>
            <h2>✨ Booking Confirmation</h2>
            <p>Thank you for choosing Bislig City Tourism!</p>
            <div class="modal-details">
                <p><i class="fas fa-phone-alt"></i> Hotline: +63 912 345 6789</p>
                <p><i class="fas fa-envelope"></i> Email: tourism@bislig.gov.ph</p>
                <p><i class="fas fa-map-pin"></i> City Tourism Office, Mangagoy, Bislig City</p>
            </div>
            <a href="#" class="close-modal">Close</a>
        </div>
    </div>
    <script src="Travel-Guide-Information.js"></script>
</body>

</html>