<!DOCTYPE html>
<html lang="us-en">
<head>
<meta charset="utf-8">
<meta title="Author" content="Vidya Santosh and Micah Herstand">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="icons/favicon.png">
<link rel="mask-icon" href="icons/star.svg">
<script src="js/utilities.js"></script>
<script async src="https://use.typekit.net/abm3mqd.js"></script>
<script type='text/javascript' src="js/plan.js"></script>
<link rel="stylesheet" type="text/css" href="css/plan.css" />
<?php include_once("ga.php"); ?>
</head>
<body class="plan-your-trip">
    <header>
        <nav class="primary">
            <ul>
                <li class="homepage"><a rel="homepage" href="/"><img class="logo" src="icons/star.svg" /></a></li>
                <li class="plan"><a class="typ-littleTitle" href="plan-your-trip">Plan Your Trip</a></li>
            </ul>
        </nav>
    </header>
    <main class="stickyFooter">
        <nav class="mobile"><?php
            ?><input name="view" value="list" class="view" type='radio' data-display="list" id='showList' checked /><label class="typ-littleTitle" for='showList'>List</label><?php
            ?><input name="view" value="map" class="view" type='radio' data-display="map" id='showMap' /><label class="typ-littleTitle" for='showMap'>Map</label><?php
        ?></nav>
        <section class="map mobileHide">
            <iframe id="map" src="https://www.google.com/maps/d/embed?mid=zdT3jrYh5dp8.kUSv7mo1SndM&z=14&amp;ll=42.0970519,-75.9151622" width="100%" height="400px"></iframe>
        </section>
        <section class="list">
            <nav class="secondary">
                <ul><?php
                    ?><li><a class="typ-body" href="#gettinghere">Getting Here</a></li><?php
                    ?><li><a class="typ-body" href="#wheretostay">Where to Stay</a></li><?php
                    ?><li><a class="typ-body" href="#wheretoeat">Where to Eat</a></li><?php
                    ?><li><ul><?php
                    ?><li><a class="typ-body" href="#thingstodo">Things to Do</a></li><?php
                    ?><li><a class="typ-body" href="#explore">Explore Upstate NY</a></li><?php
                    ?></ul></li><?php
                ?></ul><?php
            ?></nav>
            <section id="gettinghere" class=""><?php
                ?><header><?php
                ?><img class="titleImage" src="images/title_transport.svg" ?/><?php
                ?><h2 class="typ-title">Getting Here</h2><?php
                ?><hr /><?php
                ?></header><?php
                ?><article class="airports">
                    <header>
                        <h3 class="typ-categoryTitle">Airports</h3>
                        <img src="images/img_transport_airport.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Greater+Binghamton+Airport/@42.2080651,-75.984457,17z/data=!3m1!4b1!4m2!3m1!1s0x89daf165b92a0803:0xc987da113f75e51a"><span class="mapTitleStarter">Greater Binghamton</span> <span class="nobreak">Regional Airport</span></a></h4>
                    <p class="typ-body">Binghamton’s airport is connected to Detroit (<a target="_blank" href="http://www.delta.com/">Delta</a>), Philadelphia (<a target="_blank" href="https://www.aa.com/homePage.do">American Airlines</a>), and Newark (<a target="_blank" href="https://www.united.com/ual/en/us/">United</a>) airports.</p>
                    <p class="typ-body">Within a one-hour drive are Corning, Syracuse, Elmira, and Ithaca airports. Within a three-hour drive are Rochester, Albany, Philadelphia, and Newark airports.</p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article class="buses">
                    <header>
                        <h3 class="typ-categoryTitle">Buses</h3>
                        <img src="images/img_transport_bus.png" />
                    </header>                
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Greyhound/@42.1013026,-75.9122746,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef7a60290fad:0x880836a775e0e7e4"><span class="mapTitleStarter">Greyhound Bus Terminal</span></a></h4>
                    <p class="typ-body">Located in downtown within walking distance of the wedding venue, this terminal receives Greyound, CoachUSA, Megabus, and Adirondack Trailways buses coming from many cities including New York City (~3.5 hours), Buffalo (~5 hours), and Albany (~3.5 hours).</p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <header>
                        <h3 class="typ-categoryTitle">Cars &amp; Cabs</h3>
                        <img src="images/img_transport_cabs.png" />
                    </header>
                    <p class="typ-body">At the Binghamton airport, you can <a target="_blank" href="http://binghamtonairport.com/travel/rental-cars">arrange for a car</a> through Avis, Budget, and Hertz. If you’re looking to take a taxi, these are the <a target="_blank" href="http://www.visitbinghamton.org/taxis/">licensed companies</a> in the area. Anytime Taxi has great <a target="_blank" href="http://www.yelp.com/biz/anytime-taxi-binghamton">Yelp reviews</a>, though we’ve never tried them. Cabs are also regularly parked outside the bus terminal, waiting for passengers.</p>
                </article><?php
            ?></section>
            <hr class="mobileOnly" />
            <section id="wheretostay" class=""><?php
                ?><header><?php
                ?><img class="titleImage" src="images/title_lodging.svg" ?/><?php
                ?><h2 class="typ-title">Where to Stay</h2><?php
                ?><hr /><?php
                ?><p class="typ-subsection-header">We’ve reserved room blocks for our guests at the following hotels from July 9–10. Block rates expire in early June. There are also many other nearby hotels.</p><?php
                ?></header><?php
                ?><article class="venue hotel">
                    <header>
                        <img src="images/img_hotel_holiday.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Holiday+Inn+Binghamton/@42.0970519,-75.9173509,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef6e4e78b8ab:0x7775d5f3b0bf4bee"><span class="mapTitleStarter">Holiday Inn Downtown Binghamton</span></a></h4>
                    <p class="typ-body">This is the wedding venue!<br><em>Reserved under:</em>&nbsp;&nbsp;Santosh-Herstand<br><em>Availability:</em>&nbsp;&nbsp;Double Queen<br><em>Price:</em>&nbsp;&nbsp;July 9–$139, July 10–$115<br><br><a target="_blank" href="http://holidayinnbinghamton.com">holidayinnbinghamton.com</a><br><a target="_blank" href="tel:16077221212">607-722-1212</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article class="hotel">
                    <header>
                        <img src="images/img_hotel_comfort.png" />
                    </header>                
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Comfort+Suites/@42.097033,-75.9945977,17z/data=!3m1!4b1!4m2!3m1!1s0x89daeea081bee36f:0x35743b1bb475c9da"><span class="mapTitleStarter">Comfort Suites, Vestal</span></a></h4>
                    <p class="typ-body"><em>Distance to venue:</em>&nbsp;&nbsp;5 miles<br><em>Reserved under:</em>&nbsp;&nbsp;Santosh-Herstand<br><em>Availability:</em>&nbsp;&nbsp;King or Double Queen<br><em>Price:</em>&nbsp;&nbsp;King–$110, Double–$120<br><em>Provided:</em>&nbsp;&nbsp;Breakfast<br><br><a target="_blank" href="https://www.choicehotels.com/new-york/vestal/comfort-suites-hotels/ny384?source=gglocaljn">choicehotels.com</a><br><a target="_blank" href="tel:16077660600">607-766-0600</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article class="hotel">
                    <header>
                        <img src="images/img_hotel_hampton.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Hampton+Inn+%26+Suites+Binghamton%2FVestal/@42.0943721,-75.9846275,17z/data=!4m6!1m3!3m2!1s0x0:0xc6e61c38f412b3a6!2sHampton+Inn+%26+Suites+Binghamton%2FVestal!3m1!1s0x0:0xc6e61c38f412b3a6"><span class="mapTitleStarter">Hampton Inn, Vestal</span></a></h4>
                    <p class="typ-body"><em>Distance to venue:</em>&nbsp;&nbsp;5 miles<br><em>Reserved under:</em>&nbsp;&nbsp;Santosh-Herstand<br><em>Availability:</em>&nbsp;&nbsp;Double Standard, King Standard or King Study<br><em>Price:</em>&nbsp;&nbsp;$125<br><em>Provided:</em>&nbsp;&nbsp;Breakfast, airport shuttle service<br><br><a target="_blank" href="http://hamptoninn3.hilton.com/en/hotels/new-york/hampton-inn-and-suites-binghamton-vestal-BGMHSHX/index.html">hamptoninn3.com</a><br><a target="_blank" href="tel:16077975000">607-797-5000</a></p>
                </article><?php
            ?></section>
            <hr class="mobileOnly" />
            <section id="wheretoeat" class=""><?php
                ?><header><?php
                ?><img class="titleImage" src="images/title_food.svg" ?/><?php
                ?><h2 class="typ-title">Where to Eat</h2><?php
                ?><hr /><?php
                ?></header><?php
                ?><article>
                    <header>
                        <img src="images/img_food_lost-dog.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Lost+Dog+Cafe/@42.0992896,-75.9232469,16z/data=!4m5!1m2!2m1!1sThe+Lost+Dog+Cafe!3m1!1s0x89daef7048b8fc37:0x178a7cdbcb429c7d"><span class="mapTitleStarter">The Lost Dog Cafe</span></a></h4>
                    <p class="typ-body">With an international menu that includes plenty of creative meat and vegeterian options, the Lost Dog has something for everyone. You might even partake of the extensive bar with an exciting cocktail menu.<br><br><a target="_blank" href="http://www.lostdogcafe.net/index.php/menu">lostdogcafe.net</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <header>
                        <img src="images/img_food_remliks.png" />
                    </header>                
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Remlik's/@42.1033678,-75.9112847,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef7a2feeda85:0x2718374b7e93730e"><span class="mapTitleStarter">Remlik’s Grille &amp; <span class="nobreak">Oyster Bar</span></span></a></h4>
                    <p class="typ-body">A newer downtown spot that has become popular, Remlik’s is a  restaurant and bar focused more on seafood and meats. They also have pasta, sandwiches, and salads.<br><br><a target="_blank" href="remliks.com">remliks.com</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <header>
                        <img src="images/img_food_water-street.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Water+Street+Brewing+Co./@42.0993967,-75.9164326,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef6fd38ab363:0x16156ea205dabe7"><span class="mapTitleStarter">Water Street Brewing Co.</span></a></h4>
                    <p class="typ-body">Water Street is Binghamton’s first and only microbrewery. They serve up six beers of varying styles at a time from their tank-to-tap system that the owner built himself. Vegetarian/vegan-friendly.<br><br><a target="_blank" href="https://www.waterstreetbrewingco.com/index.html">waterstreetbrewingco.com</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Royal+Indian+Bar+and+Grill/@42.0946216,-75.9782756,17z/data=!3m1!4b1!4m2!3m1!1s0x89daeebc3bd9c139:0xf42271997e9fc9fc"><span class="mapTitleStarter">Royal Indian Bar <span class="nobreak">and Grill</span></span></a></h4>
                    <p class="typ-body">Royal Indian is one of a number of Indian restaurants in the area, serving all the Punjabi favorites.<br><br><a target="_blank" href="http://royalindianbarandgrillvestal.com">royalindianbarandgrillvestal.com</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/P+S+Restaurant/@42.0935619,-76.0064702,17z/data=!3m1!4b1!4m2!3m1!1s0x89daec107df6f5ef:0x7367dfdcdfb92604"><span class="mapTitleStarter">P.S. Restaurant</span></a></h4>
                    <p class="typ-body">An old family favorite, P S is a fine dining restaurant with  an eclectic assortment of French, Thai, and continental cuisine.<br><br><a target="_blank" href="http://psrestaurant.com">psrestaurant.com</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Number+5+Restaurant/@42.0902162,-75.9157402,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef67a98a3801:0xdb31386822cbb6dd"><span class="mapTitleStarter">Number 5 Restaurant</span></a></h4>
                    <p class="typ-body">Number 5 RestaurantFrom firehouse to steakhouse, this building has been serving Greater Binghamton for nearly 120 years. South Side.<br><br><a target="_blank" href="http://number5restaurant.com">number5restaurant.com</a></p>
                </article><?php
            ?></section>
            <hr class="mobileOnly" />
            <section id="thingstodo" class=""><?php
                ?><header><?php
                ?><img class="titleImage" src="images/title_activities.svg" ?/><?php
                ?><h2 class="typ-title">Things to do</h2><?php
                ?><hr /><?php
                ?></header><?php
                ?><article>
                    <header>
                        <img src="images/img_activities_roberson.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Roberson+Museum+and+Science+Center/@42.094004,-75.9208437,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef6b95e8b39b:0x153378bde204bc9d"><span class="mapTitleStarter">Roberson Museum &amp; Mansion</span></a></h4>
                    <p class="typ-body">A long-standing fixture of the city, this is a wonderful place for adults and children to engage with history and science in the mansion, museum, and planetarium.<br><br><a target="_blank" href="http://roberson.org">roberson.org</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <header>
                        <img src="images/img_activities_kopernik.png" />
                    </header>                
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Kopernik+Observatory+%26+Science+Center/@42.001995,-76.0356557,17z/data=!3m1!4b1!4m2!3m1!1s0x89dac1d3e292570f:0xc82f6a634d345cc9"><span class="mapTitleStarter">Kopernik Observatory &amp; Science Center</span></a></h4>
                    <p class="typ-body">Kopernik is a well-equipped public observatory with a mission to offer hands-on education. Open every Friday night for public observing events with professional telescopes.<br><br><a target="_blank" href="http://www.kopernik.org">kopernik.org</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <header>
                        <img src="images/img_activities_cutler.png" />
                    </header>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Cutler+Botanic+Garden/@42.1286195,-75.9080941,17z/data=!3m1!4b1!4m2!3m1!1s0x89daeff4a0350e55:0x98169ce76a69b242"><span class="mapTitleStarter">Cutler Botanic Gardens</span></a></h4>
                    <p class="typ-body">Run by the Cornell University Cooperative Extension, this garden is an outdoor classroom for teaching horticulture and environmentalism.<br><br><a target="_blank" href="http://ccebroomecounty.com/gardening/cutler-botanic-gardens">ccebroomecounty.com</a></p>
                    <hr />
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Apple+Hills+Farm+Market+%26+Gift+Shop/@42.2071812,-75.9514931,17z/data=!4m6!1m3!3m2!1s0x89daf11fb735e851:0x9bfb79a116390f6c!2sApple+Dumpling+Cafe!3m1!1s0x0000000000000000:0xe7cf172f4637027f"><span class="mapTitleStarter">Apple Hills</span></span></a></h4>
                    <p class="typ-body">At Apple Hills you can pick your own fresh fruit from the orchards and enjoy the farm market and cafe. Just a 10-minute drive from the airport.<br><br><a target="_blank" href="http://applehills.com">applehills.com</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/The+Discovery+Center+of+the+Southern+Tier/@42.0737874,-75.9059245,17z/data=!3m1!4b1!4m2!3m1!1s0x89daef5188ab5705:0xc8b8bf7a1de8c1f6"><span class="mapTitleStarter">Discovery Center</span></a></h4>
                    <p class="typ-body">A childhood favorite of Vidya’s, this center engages the mind and senses through participatory exhibits for children. Just down the road is the <a target="_blank" href="http://www.rossparkzoo.com/">Ross Park Zoo</a>, the nation’s fifth oldest zoo.<br><br><a target="_blank" href="http://www.thediscoverycenter.org">thediscoverycenter.org</a></p>
                </article><?php
                ?><hr class="mobileOnly" /><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Recreation+Park/@42.0989995,-75.951495,14z/data=!4m5!1m2!2m1!1sRecreation+Park+binghamton!3m1!1s0x89daef10f51b0027:0x278ad1fe1ff276d9"><span class="mapTitleStarter">Recreation Park</span></a></h4>
                    <p class="typ-body">Rec Park is home to one of Binghamton’s six beautiful, functioning <a target="_blank" href="http://www.visitbinghamton.org/things-to-do/carousels/">antique carousels</a>. (We’re the Carousel Capital of the World!) Also has tennis courts and a swimming pool.</p>
                </article><?php
            ?></section>
            <hr class="mobileOnly" />
            <section id="explore" class=""><?php
                ?><header><?php
                ?><img class="titleImage" src="images/title_new-york.svg" ?/><?php
                ?><h2 class="typ-title">Explore Upstate NY</h2><?php
                ?><hr /><?php
                ?><p class="typ-subsection-header">We know Binghamton is a long way to travel for some of you. Consider making the most of your trip by exploring more of what upstate New York has to offer!</p><?php
                ?></header><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/The+Corning+Museum+of+Glass/@42.1498045,-77.0563846,17z/data=!3m1!4b1!4m2!3m1!1s0x89d0484af286aa35:0x86187db0a73cfd52"><span class="mapTitleStarter">Corning Museum of Glass</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Buttermilk+Falls+State+Park,+South+Hill,+NY+14850/@42.4192509,-76.5166506,17z/data=!3m1!4b1!4m2!3m1!1s0x89d0811cade16477:0xfda9ae8bb7e6d713"><span class="mapTitleStarter">Buttermilk Falls State Park</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Watkins+Glen+State+Park/@42.3704627,-76.8966379,17z/data=!3m1!4b1!4m2!3m1!1s0x89d05ec3b976e42d:0x4ab38ecda653c623"><span class="mapTitleStarter">Watkins Glen State Park</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Moosewood/@42.4406492,-76.500847,17z/data=!3m1!4b1!4m2!3m1!1s0x89d0819cc771239f:0xabbc46ccf0e66c7b"><span class="mapTitleStarter">Moosewood Restaurant</span></a></h4>
                </article><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Brewery+Ommegang/@42.626822,-74.9478507,17z/data=!3m1!4b1!4m2!3m1!1s0x89dc07039efb0dbd:0x7ec51df4c01485e4"><span class="mapTitleStarter">Ommegang Brewery</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/National+Baseball+Hall+of+Fame+and+Museum/@42.6999368,-74.9254024,17z/data=!3m1!5s0x89dc0727187b996d:0xcd7cc53e2c10ea4!4m12!1m9!4m8!1m0!1m6!1m2!1s0x89dc072711fb2c8b:0x4c857db79bbf0385!2sNational+Baseball+Hall+of+Fame+and+Museum,+25+Main+St,+Cooperstown,+NY+13326!2m2!1d-74.9232137!2d42.6999368!3m1!1s0x89dc072711fb2c8b:0x4c857db79bbf0385"><span class="mapTitleStarter">National Baseball Hall <span class="nobreak">of Fame</span></span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Howe+Caverns/@42.6962303,-74.4007524,17z/data=!3m1!4b1!4m2!3m1!1s0x89dc28737e1833fb:0x96e28ca619ef864d"><span class="mapTitleStarter">Howe Caverns</span></a></h4>
                </article><?php
                ?><article>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Letchworth+State+Park/@42.584755,-78.0457022,17z/data=!3m1!4b1!4m2!3m1!1s0x89d3d30adc14c32b:0x68bb9da938563a90"><span class="mapTitleStarter">Letchworth State Park</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/The+Strong+Museum/@43.1527836,-77.6028423,17z/data=!3m1!4b1!4m2!3m1!1s0x89d6b5073e2c5ef1:0xa0d7874fe0264a6"><span class="mapTitleStarter">The Strong Museum</span></a></h4>
                    <h4 class="typ-subsection-header"><a target="_blank" href="https://www.google.com/maps/place/Niagara+Falls/@43.0828162,-79.0763516,17z/data=!3m1!4b1!4m2!3m1!1s0x89d34307412d7ae9:0x29be1d1e689ce35b"><span class="mapTitleStarter">Niagara Falls</span></a></h4>
                </article><?php
            ?></section>
        </section>
    </main>
    <footer>
        <div class='content'>
            <header class="typ-littleTitle"><span class="names">Vidya &amp; Micah</span><span data-short="7·10·16" data-long="July 10, 2016" class="date">7·10·16</span><span data-short="Binghamton" data-long="Binghamton, NY" class="location">Binghamton</span></header>
            <p class="typ-body extendedFooter">This website was designed and built by <span class="nobreak">the bride and groom.</span><br />Questions? Comments? Email us at <a href="mailto:wedding@shalomshanti.com">wedding@shalomshanti.com</a>.</p>
        </div>
    </footer>
</body>
</html>