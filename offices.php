<?php include "header.php"; ?>

<body>

    <section class="" style="background-color: #f5f4f4;     padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="breadcrumbs mb-0">
                        <ul class="list-unstyled d-flex">
                            <li><a href="/">HOME</a></li>
                            <li>OFFICES</li>
                        </ul>
                    </div>
                    <!--<h1>Offices</h1>-->
                    <!--<p class="banner-description">Connect with us to help you with your consignment </p>-->
                </div>
            </div>
        </div>
    </section>

    <section class="cust-py-sect">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="offices-left-menu">
                        <ul class="list-unstyled">
                            <li><a data-index="0" class="location-mapper" href="#punjab">PUNJAB</a></li>
                            <li><a data-index="1" class="location-mapper" href="#delhi">DELHI</a></li>
                            <li>
                                <a data-toggle="collapse" href="#collapseRaj" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">RAJASTHAN</a>
                                <div class="collapse" id="collapseRaj">
                                    <div class="y">
                                        <ul class="list-unstyled">
                                            <li><a data-index="2" data-parent="collapseRaj" class="location-mapper"
                                                    href="#jodhpur">Jodhpur</a></li>
                                            <li><a data-index="3" data-parent="collapseRaj" class="location-mapper"
                                                    href="#udaipur">Udaipur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a data-toggle="collapse" href="#collapseGuj" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">GUJARAT</a>
                                <div class="collapse" id="collapseGuj">
                                    <div class="y">
                                        <ul class="list-unstyled">
                                            <li><a data-index="4" data-parent="collapseGuj" class="location-mapper"
                                                    href="#gandhidham">Gandhidham</a></li>
                                            <li><a data-index="5" data-parent="collapseGuj" class="location-mapper"
                                                    href="#vadodara">Vadodara</a></li>
                                            <li><a data-index="6" data-parent="collapseGuj" class="location-mapper"
                                                    href="#mundra">Mundra</a></li>
                                            <li><a data-index="7" data-parent="collapseGuj" class="location-mapper"
                                                    href="#ahmedabad">Ahmedabad</a></li>
                                            <li><a data-index="8" data-parent="collapseGuj" class="location-mapper"
                                                    href="#surat">Surat</a></li>
                                            <!--<li><a href="gujrat-dahej.php#dahej">Dahej</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#collapseMah" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    MAHARASHTRA
                                </a>
                                <div class="collapse" id="collapseMah">
                                    <div class="y">
                                        <ul class="list-unstyled">
                                            <!--<li><a href="maharashtra-mumbai.php#mumbai">Corporate</a></li>-->
                                            <li><a data-index="9" data-parent="collapseMah" class="location-mapper"
                                                    href="#mumbai">Mumbai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a data-index="10" class="location-mapper"
                                                    href="#west-bengal">WEST BENGAL</a></li>
                            <li><a data-toggle="collapse" href="#collapseTamilnadu" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">TAMILNADU</a>
                                <div class="collapse" id="collapseTamilnadu">
                                    <div class="y">
                                        <ul class="list-unstyled">
                                            <li><a data-index="11" data-parent="collapseTamilnadu"
                                                    class="location-mapper" href="#chennai">Chennai</a></li>
                                            <li><a data-index="12" data-parent="collapseTamilnadu"
                                                    class="location-mapper" href="#tutricorin">Tutricorin</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a data-toggle="collapse" href="#collapseKarnataka" role="button" aria-expanded="false"
                                    aria-controls="collapseExample">KARNATAKA</a>
                                <div class="collapse" id="collapseKarnataka">
                                    <div class="y">
                                        <ul class="list-unstyled">
                                            <li><a data-index="13" data-parent="collapseKarnataka"
                                                    class="location-mapper" href="#bangalore">Bangalore</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="service-contact-info" style="width: 100%;">
                        <p class="contact-info-title"><img src="assets/images/call-icon.svg">Enquiry Us On</p>
                        <ul class="list-unstyled">
                            <li class="gray-text">
                                <p class="mb-0">Phone: </p><a href="tel:+912269824500" target="_blank"
                                    class="yellow-text"><strong>+91 22 6982 4500</strong></a>
                            </li>
                            <li class="gray-text">
                                <p class="mb-0">Fax: </p><a href="fax:+91 22 6754 9899" class="yellow-text"><strong>+91
                                        22 6754 9899</strong></a>
                            </li>
                            <li class="gray-text">
                                <p class="mb-0">Email: </p><a href="mailto:info@teamworld.in" target="_blank"
                                    class="yellow-text"><strong>info@teamworld.in</strong></a>
                            </li>
                        </ul>
                    </div>
                    <div class="service-contact-info tools" style="width: 100%;">
                        <p class="contact-info-title"><img src="assets/images/tools-icon.svg">Tools</p>
                        <ul class="list-unstyled">
                            <li><a href="/assets/images/incoterms.pdf" class="blue-text"><strong>INCO Terms</strong><i
                                        class="fas fa-chevron-right"></i></a> </li>
                            <li><a href="shipping-glossary.php" class="blue-text"><strong>Shipping Glossary</strong><i
                                        class="fas fa-chevron-right"></i></a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="">
                        <h3 class="blue-text"><strong>These are our India Networks</strong></h3>

                    </div>
                    <div class="google-map-section">
                        <div class="container-fluid">
                            <div class="google-map plr-185">
                                <div style="width: 100%; height: 80vh;" id="googleMap"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="india-office-loc" style="position: relative;">
                        <div class="india-map">
                            <img src="assets/images/offices/india-map.png" alt="India Map" usemap="#workmap"
                                class="img-fluid">
                        </div>
                        <a href="corporate.html" class="corporate-link">Corporate</a>
                        <a href="punjab-ludhiana.php#ludhiana" class="ludhiana-link">Ludhiana</a>
                        <a href="delhi.php#delhi" class="new-delhi-link">New Delhi</a>
                        <a href="rajasthan-jodhpur.php#jodhpur" class="jodhpur-link">Jodhpur</a>
                        <a href="rajasthan-udaipur.php#udaipur" class="udaipur-link">Udaipur</a>
                        <a href="gujrat-gandhidham.php#gandhidham" class="gandhidham-link">Gandhidham</a>
                        <a href="gujrat-vadodara.php#vadodara" class="vadodara-link">Vadodara</a>
                        <a href="gujrat-mundra.php#mundra" class="mundra-link">Mundra</a>
                        <a href="gujrat-ahmedabad.php#ahmedabad" class="ahmedabad-link">Ahmedabad</a>
                        <a href="gujrat-surat.php#surat" class="surat-link">Surat</a>
                        <a href="gujrat-dahej.php#dahej" class="dahej-link">Dahej</a>
                        <a href="maharashtra-mumbai.php#mumbai" class="mumbai-link">Mumbai</a>
                        <a href="westbengal-kolkata.php#kolkata" class="kolkata-link">Kolkata</a>
                        <a href="tamilnadu-chennai.php#chennai" class="chennai-link">Chennai</a>
                        <a href="tamilnadu-tutricorin.php#tuticorin" class="tutricorin-link">Tutricorin</a>
                        <a href="karnataka-bangalore.php#bangalore" class="bangalore-link">Bangalore</a>

                    </div>

                </div> -->
                </div>
            </div>
    </section>

    <?php include "footer.php"; ?>
    <!--<section>-->
    <!--    <img src="assets/images/tgi-team-img.jpg" class="img-fluid">-->
    <!--</section>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjmS-BK-_z1ylrEfjtQZSnJk_zMUETHiw"></script>
    <script>
        // Json array for places
        var markers = {
            'group-1': [
                {
                    'title': 'Punjab',
                    'lat': '30.9004123',
                    'lng': '75.8154737',
                    'location': 'Punjab, Ludhiana',
                    'address': 'Teamworld Logistics Pvt. Ltd',
                    'link': 'https://maps.app.goo.gl/xjTsrpKB6weshEaVA',
                    'phone': '+91 9876326400',
                    'email': 'manpreetk.luh@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d54776.13337419613!2d75.81547370089599!3d30.90041232219137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C%20Punjab!5e0!3m2!1sen!2sin!4v1694961278878!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 0
                },
                {
                    'title': 'New Delhi',
                    'lat': '28.5390789',
                    'lng': '77.2424362',
                    'location': 'New Delhi',
                    'address': 'B-315, Basement, C R Park, New Delhi – 110019, India.',
                    'link': 'https://maps.app.goo.gl/jnp5AfF7Ki3fSnr37',
                    'phone': '+91 011 45018528',
                    'email': 'joseph@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.0213198886045!2d77.24243622608611!3d28.539078888317423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3fa050bff85%3A0xaa174d2277af087c!2sTeamworld%20Logistics%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1694961503170!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 1
                },
                {
                    'title': 'Jodhpur, Rajasthan',
                    'lat': '26.2537645',
                    'lng': '73.013045',
                    'location': 'Jodhpur, Rajasthan',
                    'address': 'Teamworld Logistics Pvt. Ltd, Rameshwari Bhawan, Plot No. 2A, Bhagat Ki Kothi, Near Pili Tanki, New Pali Road, Jodhpur – 342 001',
                    'link': 'https://maps.app.goo.gl/5iSoCdhcbrnicNbJA',
                    'phone': '+91 291 2616141',
                    'email': 'narendra.jdh@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.24334506954!2d73.01304497602894!3d26.253764488096746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c0d74701b19%3A0xf9b2a483e14a3aab!2sBhagat%20ki%20Kothi!5e0!3m2!1sen!2sin!4v1694961734686!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 2
                },
                {
                    'title': 'Udaipur, Rajasthan',
                    'lat': '24.6082638',
                    'lng': '73.6224705',
                    'location': 'Udaipur, Rajasthan',
                    'address': 'Teamworld Logistics pvt. Ltd',
                    'link': 'https://maps.app.goo.gl/XkTe2MZTePVzHo3g8',
                    'phone': '+91 8928442564',
                    'email': 'rajan.upd@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116078.31354738896!2d73.6224705470094!3d24.608263766883415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e56550a14411%3A0xdbd8c28455b868b0!2sUdaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1694965700976!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 3
                },
                {
                    'title': 'Gandhidham, Gujarat',
                    'lat': '23.0616927',
                    'lng': '70.1354623',
                    'location': 'Gandhidham, Gujarat',
                    'address': 'Teamworld Logistics pvt. Ltd, Office No:206-208,2nd Floor,Trade Centre, Plot No.46 ,Gandhidham,Kutch -370201-Gujarat,India',
                    'link': 'https://maps.app.goo.gl/iusrwvKMBg8uNAsg9',
                    'phone': '+91 291 2616141',
                    'email': 'narendra.jdh@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.966418308735!2d70.13546227595774!3d23.061692714866027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950b9977aa2442b%3A0x31ed33f80aea14d0!2sTrade%20centre!5e0!3m2!1sen!2sin!4v1694961894771!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 4
                },
                {
                    'title': 'Vadodara, Gujarat',
                    'lat': '22.3109508',
                    'lng': '73.1622583',
                    'location': 'Vadodara, Gujarat',
                    'address': 'Teamworld Logistics pvt. Ltd, 902, Alkapuri Arcade, Opp. Welcome Hotel, R.C.Dutt Road, Alkapura,Vadodara - 390007, Gujarat, India',
                    'link': 'https://maps.app.goo.gl/hXTwgMaD9P2WuPs36',
                    'phone': '+91 265 2355557',
                    'email': 'dharmeshs.ahd@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.129257783561!2d73.16225828583956!3d22.31095079012813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8bae1fbb42f%3A0x6529c9eedb1a760b!2sAlkapuri%20Arcade%2C%20RC%20Dutt%20Rd%2C%20Alkapuri%2C%20Vadodara%2C%20Gujarat%20390007!5e0!3m2!1sen!2sin!4v1694962034456!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 5
                },
                {
                    'title': 'Mundra, Gujarat',
                    'lat': '22.7906568',
                    'lng': '69.6986249',
                    'location': 'Mundra, Gujarat',
                    'address': 'Teamworld Logistics Pvt. Ltd, Office No-14, Second Floor, Admin Building, TG Terminals CFS, Old Port Road,Bharat CFS Zone-1, Mundra Port & SEZ,Mundra, Kutch, Gujarat-370421',
                    'link': 'https://maps.app.goo.gl/VtgXQ8WzjAwxxefR7',
                    'phone': '+91 89280 04482',
                    'email': 'himatharamc.mun@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.318566130175!2d69.69862487595233!3d22.790656824941717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39572acf4c2ba767%3A0xd47c993308895120!2sTG%20Terminals%20Private%20Limited!5e0!3m2!1sen!2sin!4v1694962227965!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 6
                },
                {
                    'title': 'Ahmedabad',
                    'lat': '23.0331577',
                    'lng': '72.5686461',
                    'location': 'Ahmedabad, Gujrat',
                    'address': 'Teamworld Logistics Pvt. Ltd, 211 Samaan II,Opp. Shell Petrolpump, Prahladnagar Main Road, Ahmedabad - 380015, Gujarat, India',
                    'link': 'https://maps.app.goo.gl/YKkR4eYLv7nXgEGX8',
                    'phone': '+91 7948984810',
                    'email': 'dharmeshs.ahd@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14685.736654821943!2d72.5529312960289!3d23.044539175214634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848ac8a7faf3%3A0x81c42f8a3176485b!2sTeamglobal%20Logistics%20Private%20Limited!5e0!3m2!1sen!2sin!4v1694943851193!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 7
                },
                {
                    'title': 'Surat, Gujarat',
                    'lat': '21.1593403',
                    'lng': '72.7398953',
                    'location': 'Surat, Gujarat',
                    'address': 'Teamworld Logistics Pvt. Ltd, Surat',
                    'link': 'https://maps.app.goo.gl/tow6Zj43QE6tqHcB6',
                    'phone': '+91 8928004479',
                    'email': 'jitendrad.haz@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709460272!2d72.73989526458324!3d21.159340298688775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1694963390767!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 8
                },
                {
                    'title': 'Mumbai',
                    'lat': '19.1081596',
                    'lng': '72.8840947',
                    'location': 'Mumbai, Maharashtra',
                    'address': 'Times Square, A Wing, 7th Floor, Andheri Kurla Road, Andheri (E), Mumbai-400 059. INDIA',
                    'link': 'https://maps.app.goo.gl/sQwNnA1XqsbKM2xk9',
                    'phone': '+91 22 6754 9700',
                    'email': 'jasminej@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.9885188747044!2d72.88409469999999!3d19.108159600000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1da1411e6c3%3A0x358d915fb50737b4!2sTeam%20Global%20Logistics%20Private%20Limited!5e0!3m2!1sen!2sin!4v1694940592455!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 9
                },
                {
                    'title': 'Kolkata, West Bengal',
                    'lat': '22.5355649',
                    'lng': '88.2649518',
                    'location': 'Kolkata, West Bengal',
                    'address': 'Teamworld Logistics Pvt. Ltd, Kolkata',
                    'link': 'https://maps.app.goo.gl/rJeYVS6TtKSN5MaW6',
                    'phone': '+91 98300 33510',
                    'email': 'saikatr.cal@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.216898424!2d88.26495179325623!3d22.535564935258247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1694962449785!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 10
                },
                {
                    'title': 'Chennai, Tamilnadu',
                    'lat': '13.0631641',
                    'lng': '80.2453401',
                    'location': 'Chennai, Tamilnadu',
                    'address': 'Teamworld Logistics Pvt. Ltd, Apeejay Business Centre, 39/12 Haddows Road,Nungambakkam, Chennai 600 006, Tamilnadu, India.',
                    'link': 'https://maps.app.goo.gl/Ubi7agwXaNNbXHhi7',
                    'phone': '044- 42110200',
                    'email': 'maheshb.chn@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.5677343682446!2d80.2453400758041!3d13.0631641128627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526669439ac537%3A0x2e28741298f598ea!2sApeejay%20Business%20Centre!5e0!3m2!1sen!2sin!4v1694962602940!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 11
                },
                {
                    'title': 'Tuticorin, Tamilnadu',
                    'lat': '8.8105153',
                    'lng': '78.1358952',
                    'location': 'Tuticorin, Tamilnadu',
                    'address': 'Teamworld Logistics Pvt. Ltd, 61/7R/2, Polepettai, Near Arunachalam Manikavel Mahal, Tuticorin - 628002',
                    'link': 'https://maps.app.goo.gl/dWFay3oLPUXe9Urz7',
                    'phone': '+91 9943047553',
                    'email': 'prabhuj.chn@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.739612884603!2d78.13589518441283!3d8.810515269806961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b03ef608053e6d7%3A0x4d991b8a7482eb90!2s61%2F4A%2C%20Polepettai%2C%20East%2C%20Thoothukudi%2C%20Tamil%20Nadu%20628002!5e0!3m2!1sen!2sin!4v1694962718963!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 12
                },
                {
                    'title': 'Bangalore',
                    'lat': '13.0399827',
                    'lng': '77.6346554',
                    'location': 'Bangalore',
                    'address': 'A008, VRR Stone Arch, Punnappa Layout,Dhanavanthiri Road,Hennur,Bangalore- 560043 INDIA.',
                    'link': 'https://maps.app.goo.gl/DkfXyPJRnKAHZ3s76',
                    'phone': '+91 011 43161501',
                    'email': 'raveendran.blr@teamworld.in',
                    'embed': '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9322766944447!2d77.63465537580382!3d13.039982713373925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17472584c1c9%3A0x1dd70d784309a718!2sVRR%20Stone%20Arch%20Apartment!5e0!3m2!1sen!2sin!4v1694962851793!5m2!1sen!2sin" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
                    'index': 13
                },
            ]
        };
        var infoWindow, bounds, map, markerIcon, markerActiveIcon, mapMarkers = [];
        function loadMap() {



            function initializeMap() {
                var mapOptions = {
                    scrollwheel: false,
                };
                markerIcon = {
                    url: './assets/images/contact-us/location.svg',
                    size: new google.maps.Size(20, 20),
                    scaledSize: new google.maps.Size(20, 20),
                    origin: new google.maps.Point(0, 0)
                }
                markerActiveIcon = {
                    url: './assets/images/contact-us/location-active.svg',
                    size: new google.maps.Size(20, 20),
                    scaledSize: new google.maps.Size(20, 20),
                    origin: new google.maps.Point(0, 0)
                }
                infoWindow = new google.maps.InfoWindow();
                bounds = new google.maps.LatLngBounds();
                map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

                dropMarkers('group-1');
            }

            function dropMarkers(target) {
                for (var i in markers[target]) {
                    var data = markers[target][i];

                    var myLatlng = new google.maps.LatLng(data.lat, data.lng);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        icon: markerIcon,
                        title: data.title,
                        animation: google.maps.Animation.DROP
                    });

                    mapMarkers.push(marker);

                    bounds.extend(marker.getPosition());

                    (function (marker, data) {
                        google.maps.event.addListener(marker, "click", function (e, index) {
                            for (var j = 0; j < mapMarkers.length; j++) {
                                mapMarkers[j].setIcon(markerIcon);
                            }
                            this.setIcon(markerActiveIcon);
                            $('.offices-left-menu li').removeClass('active');
                            $('.offices-left-menu a[data-index="' + data.index + '"]').parent().addClass('active');
                            let parent = $('.offices-left-menu a[data-index="' + data.index + '"]').attr('data-parent');
                            $('#' + parent).collapse('show');
                            infoWindow.setContent(
                                '<div class="card loc-info-card" style="width:100%;">' +
                                data.embed +
                                '<div class="card-body"><h5 class="card-title blue-text">' +
                                data.title +
                                '</h5><p class="card-text">' +
                                data.address +
                                '</p><a href="' +
                                data.link +
                                '" class="loc-link">GET DIRECTIONS<i class="fas fa-chevron-right"></i></a> <div class="cnt-details"> <p>Phone:<a href="tel:' +
                                data.phone +
                                '" target="_blank"> ' +
                                data.phone +
                                '</a></p> <p>Email:<a href="mailto:' +
                                data.email +
                                '" target="_blank"> ' +
                                data.email +
                                '</a></p> </div></div>'
                            );
                            infoWindow.open(map, marker);
                        });
                    })(marker, data);
                }
                map.fitBounds(bounds);
            }
            function DeleteMarkers() {
                for (var i = 0; i < mapMarkers.length; i++) {
                    mapMarkers[i].setMap(null);
                }
                mapMarkers = [];
            };


            google.maps.event.addDomListener(window, 'load', initializeMap);
        };
        loadMap();
        $(document).on('click', '.offices-left-menu .location-mapper', function (e) {
            $('.offices-left-menu li').removeClass('active');
            $(this).parent().addClass('active');
            google.maps.event.trigger(mapMarkers[$(this).attr('data-index')], 'click');
        })
        $(document).on('click', '.gm-style-iw-c button', function (e) {
            e.preventDefault();
            $('.offices-left-menu li').removeClass('active');
        });
        $(window).on('load', function () {
            let value = window.location.hash.substring(1);
            setTimeout(() => {
                value.length ? $('a[href="#' + value + '"').trigger('click') : '';
            }, 1200);

        })
    </script>
    <script type="text/javascript">
        if (window.history) {
            var myOldUrl = window.location.href;
            window.addEventListener('hashchange', function () {
                let value = window.location.hash.substring(1);
                value.length ? $('a[href="#' + value + '"').trigger('click') : '';
            });
        }
    </script>