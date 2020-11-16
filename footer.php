<?php
/**
 * The template for displaying the footer.
 *
 * @package blm_basic
 */
?>




<footer>
    <svg viewBox="0 0 120 14">
        <defs>
            <mask id="xxx">
                <circle cx="7" cy="12" r="40" fill="#fff"/>
            </mask>

            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="2" result="blur"/>
                <feColorMatrix in="blur" mode="matrix" values="
           1 0 0 0 0
           0 1 0 0 0
           0 0 1 0 0
           0 0 0 13 -9" result="goo"/>
                <feBlend in="SourceGraphic" in2="goo"/>
            </filter>
            <path id="wave" d="M 0,10 C 30,10 30,15 60,15 90,15 90,10 120,10 150,10 150,15 180,15 210,15 210,10 240,10 v 28 h -240 z"/>
        </defs>

        <use id="wave3" class="wave" xlink:href="#wave" x="0" y="-2"></use>
        <use id="wave2" class="wave" xlink:href="#wave" x="0" y="0"></use>



        <g class="topball">
            <circle class="drop drop1" cx="20" cy="2" r="1.8"/>
            <circle class="drop drop2" cx="25" cy="2.5" r="1.5"/>
            <circle class="drop drop3" cx="16" cy="2.8" r="1.2"/>
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1"/>

        <g class="gooeff">
            <circle class="drop drop1" cx="20" cy="2" r="1.8"/>
            <circle class="drop drop2" cx="25" cy="2.5" r="1.5"/>
            <circle class="drop drop3" cx="16" cy="2.8" r="1.2"/>
            <use id="wave1" class="wave" xlink:href="#wave" x="0" y="1"/>

    </svg>


    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <p class="text--small" style="margin-bottom: 0">&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?></p>
				<?php bloginfo( 'description' ); ?>
                <p style="color: white;margin-bottom:0">
                    <a style="color: white" href="https://twitter.com/L70Media" title="twitter lzomedia"
                       class="social-link"><i class="fa fa-twitter"></i></a>
                    <a style="color: white" href="https://www.twitch.tv/lzomedia" title="twitch lzomedia"
                       class="social-link"><i class="fa fa-twitch"></i></a>
                    <a style="color: white" href="https://www.instagram.com/lzomedia/" title="instagram lzomedia"
                       class="social-link"><i class="fa fa-instagram"></i></a>
                    <a style="color: white" href="https://www.facebook.com/lzomedia/" title="facebook lzomedia"
                       class="social-link"><i class="fa fa-facebook"></i></a>
                </p>
            </div>
        </div>
        </div>
    </div>
	<?php wp_footer(); ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Lzo Media",
        "image": "<?php echo get_template_directory_uri(); ?>/assets/img/lzomedia.svg",
        "@id": "https://lzomedia.com",
        "url": "https://lzomedia.com",
        "telephone": "07448218899",
        "priceRange": "0-1000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "9 Haddon Road",
            "addressLocality": "Orpington",
            "postalCode": "BR54BU",
            "addressCountry": "GB"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 51.3905818,
            "longitude": 0.1185207
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "09:00",
            "closes": "23:59"
        }
    }
    </script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-104076476-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-104076476-1');
    </script>
</footer>
</body>
</html>
