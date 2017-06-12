
<body>
<?php $this->view('templates/ua/_parts/mobile-menu',array()); ?>
<div id="overlay-one" class="overlay"></div>
<div id="main" class="site-content">
    <?php $this->view('templates/ua/_parts/banner-menu',array()); ?>
    <div class="site-wrapper hyperlink">
        <div class="mobile-booking-header palm--show">
            <div class="mobile-book-now">
                <div class="combo reversed">
                    <div class="combo-first">
                        <div class="tour-title font-carto-gothic-regular">
                            <p>This is Aperitivo!</p>
                        </div>
                        <div class="tour-location font-open-sans">
                            <p>Cinque Terre, Italy</p>


                        </div>
                    </div>
                    <div class="combo-last">
                        <!--start price mobile-->
                        <p class="from-price">From USD 88.49</p>
                        <!--meta(content="#{tour.currency}", itemprop="priceCurrency")-->
                        <!--meta(content="#{tour.price2}", itemprop="price")-->
                        <!--end price mobile-->
                        <div class="submit-button"><a href="Cinque-Terre-tour-this-is-aperitivo" class="wide button palm--hidden">Book Now</a><a href="/mobile/Cinque-Terre-tour-this-is-aperitivo" class="wide button large--hidden">Book Now</a></div>
                    </div>
                </div>
            </div>
            <div class="mobile-tour-info">
                <p>Office phone number: <a href="tel:+39 338 884 7405">+39 338 884 7405</a></p>
                <!--reserve now button-->
            </div>
        </div>
        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg')" class="tour-booking">
            <div class="grid large--show">
                <div class="grid__item two-thirds lap--one-third"></div>
                <div class="grid__item one-third lap--two-thirds">
                    <div class="booking">
                        <div class="booking-header">
                            <div class="tour-title font-carto-gothic-regular">
                                <p>This is Aperitivo!</p>
                            </div>
                            <div class="tour-location font-open-sans">
                                <p>Cinque Terre, Italy</p>


                            </div>
                        </div>
                        <div class="book-now">
                            <div id="datepicker" class="calendar"></div>
                            <div class="date-selector-legend spacer"><span class="selection">Select day</span><span class="unavailable">Not Available</span></div>
                            <form name="frmBooking" id="frmBooking" action="" method="post">
                                <div class="time-selector">
                                    <p>Departure time</p>
                                    <select id="departure-time" class="depart form-select">
                                        <option value="1434">6.30 PM</option><option value="1884">5.30 PM</option>
                                    </select><span class="depart">&nbsp;</span>
                                    <input type="hidden" name="departure-time" class="depart">
                                </div>
                                <div class="people-selector">
                                    <div class="adults">
                                        <p>Adult</p>
                                        <select id="no-adults" name="no-adults" class="form-select"></select>
                                        <p class="align-center">
                                            <span id="price-adults-currency" class="price-currency">USD</span><span id="price-adults">88.49</span>
                                        </p>
                                    </div>
                                    <div class="children">
                                        <p>Child</p>
                                        <select id="no-children" name="no-children"  class="form-select"></select>
                                        <!--s-child-policy-->
                                        <p class="align-center">
                                            <span id="price-children-currency" class="price-currency">USD</span><span id="price-children">88.49</span>
                                        </p>
                                        <!--e-child-policy-->
                                    </div>

                                </div>
                                <div class="submit-button"><a id="submitBooking" href="javascript:void(0)" class="wide button">Book Now</a></div>
                                <input type="hidden" name="departure_date" id="departure_date">
                                <input type="hidden" id="promo_code" name="promo_code" value="">
                                <input type="hidden" name="act" value="SubmitBooking">
                                <!--TRIP_CODE=ITCQA-->
                            </form>
                            <div class="call-to-action">
                                <input type="hidden" name="tour-id" id="tour-id" value="1156">
                                <input type="hidden" name="currencyrate" id="currencyrate" value="1">
                                <input type="hidden" name="Price" id="Price" value="79.00">
                                <input type="hidden" name="ExPrice" id="ExPrice" value="88.49">
                                <input type="hidden" name="ChildPrice" id="ChildPrice" value="79.00">
                                <input type="hidden" name="ExChildPrice" id="ExChildPrice" value="88.49">
                                <input type="hidden" name="ChildPolicy" id="ChildPolicy" value="1"><a href="javascript:checkoutTour();" id="CGbuttonSubmit" class="call-to-action-link">Give as gift</a>
                            </div>
                            <!--reserve now button-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid--narrow">

        </div>
        <div class="accordion-container tour-accordion">
            <div id="nav-section1" class="accordion">TOUR SNAPSHOT</div>
            <div class="container">
                <ul class="accordion-item">

                    <!--s-snapshot  -->
                    <li id="snapshot_tour" class="snapshot_tour">
                        <h4>Tour snapshot</h4><p>Great views, great food, great wine, and great stories — this tour has it all! Get a taste for both old and new Monterosso on this walking tour, before digging into authentic <em>aperitivo</em> at a traditional local cafe.</p>
                    </li>
                    <!--e-snapshot-->
                    <li id="hightlight_tour">
                        <h4>Highlights</h4><ul>
                            <li>Participate in traditional <em>aperitivo</em> at a local cafe</li>
                            <li>Sample local food, paired with local wine</li>
                            <li>Explore on foot both the old and new towns of Monterosso</li>
                            <li>Get spectacular views of the coastline and coloured houses of the village</li>
                            <li>Learn the history and traditions of Monterosso, directly from the local people</li>
                        </ul>
                    </li>
                    <!--s-inclusion1-->
                    <p>Inclusions: Local English-speaking guide, food and drink tastings (samples may vary depending on the season and what’s freshly available, but expect treats like bruschetta, olives, focaccia, pesto, anchovies, and cheese, along with two wines or soft drinks per person).</p>
                    <!--e-inclusion1-->
                    <!--s-exclusion1-->
                    <p>Exclusions: Additional food and drinks, souvenirs and items of a personal nature, tips/gratuities for your guide.</p>
                    <!--e-exclusion1-->
                    <li>
                        <h4>Schedule details</h4>
                        <ul class="unordered-list">
                            <li>Duration: 2 hours</li>
                            <li class="pickup-location">Meeting point: <p>Monterosso train station on platform 1, just outside the tourist information office</p></li>
                            <li class="pickup-time">Starting time: 5.30 PM, 6.30 PM</li>
                            <li class="dropoff-location">Ending point: <p>Monterosso Old Town</p></li>
                        </ul>
                    </li>


                    <!--s-actionaid--><a href="https://www.urbanadventures.com/action-aid"><img src="https://media-cdn.urbanadventures.com/images/en/ActionAid-Tour-Page-banner.jpg" class="hero-photo padding-10"></a>
                    <!--e-actionaid-->
                </ul>
            </div>
            <div id="nav-section2" class="accordion">FULL ITINERARY</div>
            <div class="container">
                <ul class="accordion-item">
                    <li class="itinerary-container"><p>Your Cinque Terre tour will start out in the new part of Monterosso village, where there’s plenty of coastline and little rocky beaches to see. We’ll walk to the end of this area and check out the ancient statue on the rocks, called “the Giant of Monterosso.” </p>
                        <p>From there, we’ll continue to a spot that overlooks the Mediterranean Sea and the coast of Cinque Terre. Trust us, there are beautiful views to be found here! From this point, we’ll continue along a short path that takes us down to the old area of Monterosso. We’ll walk through the narrow streets where the houses are brightly coloured, and take a look at the old Genoese gothic church. Then, finally, we’ll grab a seat to enjoy our <em>aperitivo</em>! </p>
                        <p>We’ll settle into a traditional cafe, where you can experience the best bites of local food, and sip wine produced in Cinque Terre. While enjoying all the traditional flavours, the owner will share the local secrets behind what we're eating and drinking, as well as a few good stories about Monterosso.</p></li>
                    <li>
                        <h4>Additional information</h4>
                        <!--s-inclusion-->
                        <p>Inclusions: Local English-speaking guide, food and drink tastings (samples may vary depending on the season and what’s freshly available, but expect treats like bruschetta, olives, focaccia, pesto, anchovies, and cheese, along with two wines or soft drinks per person).</p>
                        <!--e-inclusion-->
                        <!--s-exclusion-->
                        <p>Exclusions: Additional food and drinks, souvenirs and items of a personal nature, tips/gratuities for your guide.</p>
                        <!--e-exclusion-->
                        <!--s-dress_standard-->
                        <p>Dress standard: Please wear comfortable shoes for walking. You will need to have your knees and shoulders covered to enter the church.</p>
                        <!--e-dress_standard-->
                        <!--s-yourtrip-->
                        <p>Your Trip: For your Urban Adventure you will be in a small group of a maximum of 12 people.</p>
                        <!--e-yourtrip-->
                        <!--s-confirmation-->
                        <p>Confirmation of booking: If you have your voucher, your booking is confirmed. We'll see you at the start point. Get in touch if you have any concerns or require more information via the email address or phone number (business hours only) on your voucher.</p>
                        <!--e-confirmation-->


                        <!--s-child_policy-->
                        <p>Child Policy: This is a child-friendly tour. Children between the ages of 6 and 11 inclusively are permitted on this tour at the rate listed above. Please select ‘child’ above when booking. Children under the age of 6 are permitted to join this tour free of charge. Please inform us at the time of booking if you’ll be bringing a child under the age of 6. You can do so in the special request box on the checkout page.</p>
                        <!--e-child_policy-->
                    </li>

                    <li>
                        <h4>Local contact</h4>
                        <p>Office phone number: <a href="tel:+39 338 884 7405">+39 338 884 7405</a> <br/> Email address: info@cinqueterreurbanadventures.com</p>
                    </li>
                </ul>
            </div>
            <div id="nav-section3" class="accordion">REVIEWS</div>
            <div class="container">
                <div class="rating-header">
                    <div class="grid">
                        <div class="grid__item one-half palm--one-whole">
                            <div class="traveller-rating">
                                <h4>Traveller rating</h4>
                                <div class="traveller-rating-items">
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Excellent</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Very good</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Average</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Poor</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                    <div class="traveller-rating-item">
                                        <div class="item-title">
                                            <p>Terrible</p>
                                        </div>
                                        <div class="item-progress">
                                            <div class="progress-bar">
                                                <div style="width: 0%" class="progress-value"></div>
                                            </div>
                                        </div>
                                        <div class="item-value">
                                            <p>(0)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__item one-half palm--one-whole">
                            <div class="rating-summary">
                                <h4>Rating summary</h4>
                                <div class="rating-summary-items">
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Overall experience</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Guide</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Local learning</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Responsible travel</p>
                                        </div>

                                    </div>
                                    <div class="rating-summary-item">
                                        <div class="item-title">
                                            <p>Met expectations</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="accordion-item">

                </ul>
            </div>
            <div id="nav-section4" class="accordion">PHOTO GALLERY</div>
            <div class="container mobile-tour-container">
                <ul class="accordion-item">
                    <li>
                        <div class="photo-gallery">
                            <div class="photo-gallery-row">
                                <div class="current-photo">
                                    <img id="img_1" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_2" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_3" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_4" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_5" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_6" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_7" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />
                                    <img id="img_8" src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg"   alt="This is Aperitivo tour, Cinque Terre tour"  />

                                </div>
                                <div class="gallery-tiles">
                                    <div class="gallery-offset">

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg" id="img_1" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg" id="img_2" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg" id="img_3" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg" id="img_4" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg" id="img_5" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg" id="img_6" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg" id="img_7" class="gallery-tile"></div>

                                        <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg" id="img_8" class="gallery-tile"></div>

                                    </div>
                                </div>
                                <div class="carousel mobile-tour-carousel pictures">
                                    <ul class="bxslider-carousel">

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg" id="img_1" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg" id="img_2" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-4.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg" id="img_3" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-7.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg" id="img_4" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-15.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg" id="img_5" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-17.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg" id="img_6" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-22.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg" id="img_7" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-23.jpg" style="display:none"></a></div>
                                        </li>

                                        <li>
                                            <div style="background-image: url('https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg');" rel="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg" id="img_8" class="carousel-image"><a href="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg" itemprop="contentUrl" data-size="600x400" data-index="1" class="photoswipe"><img src="https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-24.jpg" style="display:none"></a></div>
                                        </li>

                                    </ul>
                                    <div class="carousel-outside"><i id="slider-prev"></i><i id="slider-next"></i></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--start instagram link-->
                    <li>
                        <div class="call-to-action gallery-call-to-action"><a href="http://www.instagram.com/cinqueterreurbanadventures" target="_blank" class="call-to-action-link">Check out the latest from Cinque Terre on Instagram</a></div>
                    </li>
                    <!--end instagram link-->
                </ul>
            </div>
        </div>
        <div class="share-icons">
            <div class="grid grid--narrow">
                <div class="grid__item one-fifth palm--one-quarter"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.urbanadventures.com%2FCinque-Terre-tour-this-is-aperitivo&amp;display=popup" class="fbshare"><img src="/assets/images/ua/social-facebook.png" class="share-social-icon"></a>
                </div>
                <div class="grid__item one-fifth palm--one-quarter"><a href="https://twitter.com/share?url=http%3A%2F%2Fwww.urbanadventures.com%2FCinque-Terre-tour-this-is-aperitivo&amp;text=I%E2%80%99m+putting+this+%40urbanadventures+tour+on+my+travel+wish+list.+Who%E2%80%99s+in%3F%21+%23localsknow+" class="tweet"><img src="/assets/images/ua/social-tweet.png" class="share-social-icon"></a>
                </div>
                <div class="grid__item one-fifth palm--one-quarter"><a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.urbanadventures.com%2FCinque-Terre-tour-this-is-aperitivo" class="gplus"><img src="/assets/images/ua/social-gplus.png" class="share-social-icon"></a>
                </div>
                <div class="grid__item one-fifth palm--one-quarter"><a href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.urbanadventures.com%2FCinque-Terre-tour-this-is-aperitivo&amp;media=https%3A%2F%2Fmedia-cdn.urbanadventures.com%2Fdata%2F254%2Ftour_1156%2Fc-fakepath-12-lead.jpg&amp;description=I%27m+putting+this+Urban+Adventures+tour+on+my+travel+wish+list.+Who%27s+in%3F%21+Let%27s+go+local.+%23UrbanAdventures" data-pin-do="buttonPin" data-pin-config="above" class="pinit"><img src="/assets/images/ua/social-pinit.png" class="share-social-icon"></a>
                </div>
                <div class="grid__item one-fifth palm--hidden"><a id="btnSendThisPage" href="#" data-name="This is Aperitivo!" data-uri="/Cinque-Terre-tour-this-is-aperitivo" data-type="1" data-message="Hey! I've got the inside scoop for your next trip. Check out this awesome tour with Urban Adventures!"><img src="/assets/images/ua/social-email.png" class="share-social-icon"></a>
                    <div id="send-this-page"></div>
                </div>
            </div>
        </div>
        <!--start other tours-->
        <div class="other-tours">
            <h3>YOU MAY ALSO LIKE</h3>
            <div class="grid">

                <div class="grid__item one-third palm--one-whole spacer"><a href="Cinque-Terre-tour-tasting-cinque-terre" class="tour-tile">
                        <!--.large.new.ribbon-->
                        <div style="background-image: url(https://media-cdn.urbanadventures.com/data/254/tour_1157/xm-c-fakepath-20160614_171511.jpg);" class="tour-tile-image"></div>
                        <div class="tour-tile-info">
                            <h5 class="tour-tile-title">Tasting Cinque Terre</h5><span class="tour-tile-location">Cinque Terre, Italy</span><span class="icon icon-encircled-right-arrow"></span>
                        </div></a></div>

                <div class="grid__item one-third palm--one-whole spacer"><a href="Cinque-Terre-tour-cinque-terre-hike-bite" class="tour-tile">
                        <!--.large.new.ribbon-->
                        <div style="background-image: url(https://media-cdn.urbanadventures.com/data/254/tour_1158/xm-c-fakepath-1-lead.jpg);" class="tour-tile-image"></div>
                        <div class="tour-tile-info">
                            <h5 class="tour-tile-title">Cinque Terre Hike & Bite</h5><span class="tour-tile-location">Cinque Terre, Italy</span><span class="icon icon-encircled-right-arrow"></span>
                        </div></a></div>

                <div class="grid__item one-third palm--one-whole spacer"><a href="Genoa-tour-ancient-tastes-of-genoa" class="tour-tile">
                        <!--.large.new.ribbon-->
                        <div style="background-image: url(https://media-cdn.urbanadventures.com/data/279/tour_1382/xm-c-fakepath-5.jpg);" class="tour-tile-image"></div>
                        <div class="tour-tile-info">
                            <h5 class="tour-tile-title">Ancient Tastes of Genoa</h5><span class="tour-tile-location">Genoa, Italy</span><span class="icon icon-encircled-right-arrow"></span>
                        </div></a></div>

            </div>
        </div>
        <!--end other tour-->
        <!-- start photoswipe-->
        <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                        <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                        <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                    <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--end photoswipe-->
        <div id="fb-root"></div>
        <script language="javascript" type="text/javascript" src="https://connect.facebook.net/en_US/all.js"></script>
        <script type="text/javascript">
            FB.api(
                '/',
                'POST',
                {"scrape": "true", "id": "https://media-cdn.urbanadventures.com/data/254/tour_1156/c-fakepath-12-lead.jpg"},
                function (response) {
                }
            );
            // Code for deleting facebook cache
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=745779065559164facebookAppId";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--.fb-share-button(data-href="#{tour.image_full}" data-layout="button")
        -->
    </div>
    <?php $this->view('templates/ua/_parts/footer-menu',array()); ?>
</div>
