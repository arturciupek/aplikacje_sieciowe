<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>{$page_title|default:"Kalkulator kredytowy"}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="wrapper">

        <div id="main">
            <div class="inner">

                <header id="header">
                    <a href="{$conf->app_url}" class="logo"><strong>{$page_header|default:"Kalkulator kredytowy"}</strong></a>
                </header>

                <section>
                    {block name=content}{/block}
                </section>

            </div>
        </div>

        <div id="sidebar">
            <div class="inner">

                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="{$conf->app_url}/index.php">Strona główna</a></li>
                        <li><a href="{$conf->app_url}/app/calc.php">Kalkulator kredytowy</a></li>
                        <li><a href="{$conf->app_url}/app/about.php">O projekcie</a></li>
                    </ul>
                </nav>

                <footer id="footer">
                    {block name=footer}
                        <p>„Twój spokój zaczyna się od dobrze policzonej raty.”</p>
                    {/block}
                </footer>

            </div>
        </div>

    </div>
    
    <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/assets/js/browser.min.js"></script>
    <script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
    <script src="{$conf->app_url}/assets/js/util.js"></script>
    <script src="{$conf->app_url}/assets/js/main.js"></script>

</body>
</html>


