<!--====== Footer PART START ======-->
<style>
    /* Ganti warna teks link menjadi putih */
    .list-unstyled a {
        color: white;
        text-decoration: none;
        /* Hilangkan garis bawah pada tautan */
    }
</style>
<footer class="warna-si-oren">
    <div class="container">
        <div class="row text-white">
            <div class="col-sm-4 p-4">
                <h4 class="text-white">Tentang</h4>
                <br>
                <p class="text-justify">Sekolah impian (SI) adalah intitusi yang tumbuh dari cita-cita luhur para pendiri
                    yang ingin meraih Ridlo Allah Taala dengan cara berdakwah melalui jalur pendidikan. Metode yang
                    digunakan adalah mendidik para santri/siswa/i menjadi seorang penghafal Al-Quran dan sekaligus
                    mendidik mereka menjadi seorang ahli dalam bidang teknologi informasi (IT).</p>
            </div>
            <div class="col-sm-4 p-4">
                <h4 class="text-white">Informasi</h4>
                <p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-map-marker"></i> Kampung Ciangsana, RT.02/RW.04, Tapos I, Kec. Tenjolaya,
                        Kabupaten Bogor, Jawa Barat 16371</li>
                    <li><i class="fa fa-phone"></i> 08161123811</li>
                    <li><i class="fa fa-envelope"></i> <a
                            href="mailto:info@sekolahimpian.com">info@sekolahimpian.com</a></li>
                </ul>
                </p>
            </div>
            <div class="col-sm-4 p-4">
                <h4 class="text-white">Ikuti Kami</h4>
                <p>
                <ul class="list-unstyled">
                    <li><i class="fab fa-youtube"></i> <a href="https://www.youtube.com">Youtube</a></li>
                    <li><i class="fab fa-instagram"></i> <a href="https://www.instagram.com">Instagram</a></li>
                    <li><i class="fab fa-facebook"></i> <a href="https://www.facebook.com">Facebook</a></li>
                    <li><i class="fab fa-telegram"></i> <a href="https://www.telegram.org">Telegram</a></li>
                </ul>
                </p>
            </div>


        </div>

    </div>
</footer>
<div class="row" style="background-color: #bd711b; padding: 20px 0 30px 0" class="text-center">
    <div class="col-sm-12">
        <p class="text-center text-white">Copyright SekolahImpian @2023</p>
    </div>
</div>
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
