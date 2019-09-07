<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boogle</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//localhost/matomo/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->
</head>

<body>
    <div class="wrapper indexPage">
        <div class="mainSection">
            <div class="logoContainer">
                <a href="https://github.com/justadityaraj"><img src="assets/images/boogle-logo.png" alt="Boogle"></a>
            </div>
            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <input class="searchBox" type="text" name="term" id="" placeholder="Boogle anything...">
                    <input class="searchButton" type="submit" value="Search" id="">
                </form>
            </div>
        </div>
    </div>
</body>

</html>