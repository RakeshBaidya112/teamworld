<footer>
    <div class="container">
        <!--<div class="row border-bottom border-top py-5">-->
        <!--    <div class="col-md-6 offset-md-1 text-center text-md-left">-->
        <!--        <h4>Group Companies</h4>-->
        <!--        <div class="d-flex group-companies">-->
        <!--            <a href="#"><img src="assets/images/teamglobal.png" alt="Teamglobal" class="img-fluid"></a>-->
        <!--            <a href="#"><img src="assets/images/globicon.png" alt="Globicon" class="img-fluid"></a>-->
        <!--            <a href="#"><img src="assets/images/batco-cfs.png" alt="BATCO" class="img-fluid"></a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <div class="col-md-4 text-center text-md-left">-->
        <!--        <h4>Member Of</h4>-->
        <!--        <div class="d-flex justify-content-center justify-content-md-start pt-4">-->
        <!--            <a href="#"><img src="assets/images/wca-inter-global.png" alt="WCA" class="img-fluid"></a>-->
        <!--            < !--<a href="#"><img src="assets/images/agln.png" alt="AGLN" class="img-fluid"></a>-- >-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class="row office-info border-top py-5">
            <div class="col-md-4 pb-4 pb-md-0 text-center text-md-left">
                <h5 lass="d-flex align-items-center"><i class="fa fa-map-marker-alt icon-before-heding"></i>Corporate
                    Office</h5>
                <p>Teamworld Logistics Pvt. Ltd.
                    703, Balaji Business Park C.P.S Ltd.,
                    Andheri Kurla Road, Andheri East,
                    Mumbai - 400059 Maharastra - INDIA</p>
            </div>
            <div class="col-md-4 pb-4 pb-md-0 text-center text-md-left">
                <h5 lass="d-flex align-items-center"><i class="fas fa-phone-alt icon-before-heding"></i>Enquiry Us On
                </h5>
                <p>Phone: <a href="tel:91226754980" target="_blank">+91 22 6982 4500</a></p>
                <p>Fax: +91 22 6754 9899</p>
                <p>Email: <a href="mailto:info@teamworld.in" target="_blank">info@teamworld.in</a></p>
            </div>
            <div class="col-md-4 text-center text-md-left">
                <h5 lass="d-flex align-items-center"><i class="fa fa-map-marker-alt icon-before-heding"></i>Our Presence
                </h5>
                <ul>
                    <li><a href="/teamworld/offices.php#ahmedabad">• Ahmedabad</a></li>
                    <li><a href="/teamworld/offices.php#bangalore">• Bangalore </a></li>
                    <li><a href="/teamworld/offices.php#chennai">• Chennai </a></li>
                    <li><a href="/teamworld/offices.php#gandhidham">• Gandhidham </a></li>
                    <li><a href="/teamworld/offices.php#jodhpur">• Jodhpur </a></li>
                    <li><a href="/teamworld/offices.php#west-bengal">• Kolkata </a></li>
                    <li><a href="/teamworld/offices.php#ludiana">• Ludhiana </a></li>
                    <li><a href="/teamworld/offices.php#mumbai">• Mumbai</a></li>
                    <li><a href="/teamworld/offices.php#mundra">• Mundra</a></li>
                    <li><a href="/teamworld/offices.php#delhi">• New Delhi</a></li>
                    <li><a href="/teamworld/offices.php#surat">• Surat</a></li>
                    <li><a href="/teamworld/offices.php#tuticorin">• Tuticorin</a></li>
                    <li><a href="/teamworld/offices.php#udaipur">• Udaipur</a></li>
                    <li><a href="/teamworld/offices.php#vadodara">• Vadodara</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Copyright © 2022 All Rights Reserved By Teamworld.</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-md-end justify-content-center">
                        <a href="#" class="text-white">Sitemap</a>
                        <a href="privacy-policy.php" class="text-white">Privacy</a>
                        <a href="terms-of-use.php" class="text-white">@T&C</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('.play-btn').click(function () {
            video = '<iframe src="' + $(this).attr('data-video') + '"></iframe>';
            $('.full-width-video-img').replaceWith('<iframe class="res-iframe" width="661" height=" 390" src="https://www.youtube.com/embed/bwlqgTANdZQ?rel=0;&autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen ></iframe>');
            $('.play-btn').css("display", "none");
            $('.overlay').css("display", "none");
        });
    });
</script>
</body>

</html>