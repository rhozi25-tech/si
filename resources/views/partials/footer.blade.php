<!--====== Footer PART START ======-->
<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets">
            <div class="col-lg-4 col-md-6 col-md-7">
                <div class="widget about-widget">
                    <div class="logo">
                        <img src="{{ url('logo.png') }}" class="img-fluid" width="150" height="150" alt="">
                    </div>
                    <p class="text-justify">Sekolah impian (SI) adalah intitusi yang tumbuh dari cita-cita luhur para
                        pendiri yang ingin
                        meraih Ridlo Allah Taala dengan cara berdakwah melalui jalur pendidikan. Metode yang
                        digunakan adalah mendidik para santri/siswa/i menjadi seorang penghafal Al-Quran dan
                        sekaligus mendidik mereka menjadi seorang ahli dalam bidang teknologi informasi (IT).</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 offset-xl-1">
                <div class="widget nav-widget">
                    <h4 class="widget-title">Kontak Kami</h4>
                    <div class="footer-list">
                        <ul>
                            <li><a href="https://wa.me/+6281221998970"><i class="fal fa-angle-right"></i> Whatsapp</a>
                            </li>
                            <li><a href="https://www.instagram.com/quadrantboardingschool/"><i
                                        class="fal fa-angle-right"></i> Instagram</a></li>
                            <li><a href="https://www.youtube.com/c/SekolahImpianku"><i class="fal fa-angle-right"></i>
                                    Youtube Sekolah Impian</a></li>
                            <li><a href="https://www.youtube.com/c/SekolahImpianTV"><i class="fal fa-angle-right"></i>
                                    Youtube SI TV</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-md-6">
                <div class="widget contact-widget">
                    <h4 class="widget-title">Alamat Kami</h4>
                    <p>Kampung Ciangsana, RT.02/RW.04, Tapos I, Kec. Tenjolaya, Kabupaten Bogor, Jawa Barat 16371</p>
                    <!--====== Contact Map start ======-->
                    <section class="contact-map">
                        <div class="contact-map-one">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.925009996818!2d106.69447731537332!3d-6.656216666922858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69d0413a51008d%3A0x4216c9d21d02a98e!2sPondok%20Pesantren%20Fahim%20Quran%20Plus!5e0!3m2!1sid!2sid!4v1631198632992!5m2!1sid!2sid"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>Copyright By@ <a href="#">Sekolah Impian</a> - 2023</p>
        </div>
    </div>
</footer>
<!--====== Footer PART ENDS ======-->

<!--====== Jquery ======-->
<script src="{{ url('assets/js/jquery-1.12.4.min.js') }}"></script>
<!--====== Bootstrap ======-->
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
<!--====== Slick slider ======-->
<script src="{{ url('assets/js/slick.min.js') }}"></script>
<!--====== Magnific ======-->
<script src="{{ url('assets/js/jquery.magnific-popup.js') }}"></script>
<!--====== Isotope ======-->
<script src="{{ url('assets/js/isotope.pkgd.min.js') }}"></script>
<!--====== Imagesloaded ======-->
<script src="{{ url('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!--====== Inview ======-->
<script src="{{ url('assets/js/jquery.inview.min.js') }}"></script>
<!--====== Easy Pie Chart ======-->
<script src="{{ url('assets/js/jquery.easypiechart.min.js') }}"></script>
<!--====== Syotimer ======-->
<script src="{{ url('assets/js/jquery.syotimer.min.js') }}"></script>
<!--====== Wow ======-->
<script src="{{ url('assets/js/wow.min.js') }}"></script>
<!--====== Main JS ======-->
<script src="{{ url('assets/js/main.js') }}"></script>

<script>
    popupWhatsApp = () => {

        let btnClosePopup = document.querySelector('.closePopup');
        let btnOpenPopup = document.querySelector('.whatsapp-button');
        let popup = document.querySelector('.popup-whatsapp');
        let sendBtn = document.getElementById('send-btn');

        btnClosePopup.addEventListener("click", () => {
            popup.classList.toggle('is-active-whatsapp-popup')
        })

        btnOpenPopup.addEventListener("click", () => {
            popup.classList.toggle('is-active-whatsapp-popup')
            popup.style.animation = "fadeIn .6s 0.0s both";
        })

        sendBtn.addEventListener("click", () => {
            let msg = document.getElementById('whats-in').value;
            let relmsg = msg.replace(/ /g, "%20");
            //just change the numbers "1515551234567" for your number. Don't use +001-(555)1234567     
            window.open('https://wa.me/+6281221998970?text=' + relmsg, '_blank');

        });

        setTimeout(() => {
            popup.classList.toggle('is-active-whatsapp-popup');
        }, 5000);
    }

    popupWhatsApp();
</script>
<!--    <script type="text/javascript">
    -- >
    <
    !-- function googleTranslateElementInit() {
        -- >
        <
        !--new google.translate.TranslateElement({
            pageLanguage: 'id',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
        -- >
        <
        !--
    }-- >

    <
    !--$(window).load(function() {
            -- >
            <
            !--$(".goog-logo-link").empty();
            -- >
            <
            !--$('.goog-te-gadget').html($('.goog-te-gadget').children());
            -- >
            <
            !--
        }) -- >
        <
        !--
</script>-->
<!--    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>-->
</body>

</html>
