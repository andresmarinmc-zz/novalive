<?php
class Body
{

    public function MostrarHead()
    {
?>
        <!-- Basic page needs ================================================== -->
        <meta charset="utf-8" />
        <!--[if IE
      ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"
    /><![endif]-->

        <link rel="shortcut icon" href="assets/favicon.png?v=1288716493049574643" type="image/png" />

        <!-- Title and description ================================================== -->
        <title>
            Novalive Pharma Group
        </title>

        <!-- Social meta ================================================== -->

        <meta property="og:type" content="website" />
        <meta property="og:title" content="Kure" />
        <meta property="og:url" content="https://kure-demo.myshopify.com/" />

        <meta property="og:image" content="assets/logo.png?v=14697657111549854433" />
        <meta property="og:image:secure_url" content=assets/logo.png?v=14697657111549854433"> <meta property="og:site_name" content="Kure" />

        <meta name="twitter:card" content="summary" />

        <!-- Helpers ================================================== -->
        <link rel="canonical" href="https://kure-demo.myshopify.com/" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="theme-color" content="#075ac9" />

        <!-- CSS ================================================== -->
        <link href="assets/frame.scss.css?v=46610312773914753781" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/style.css?v=31804291969627862001" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/slick-theme.css?v=52451408852955709431" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/slick.scss.css?v=5315898799249700291" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/slick-slider.css?v=183219136141200922781" rel="stylesheet" type="text/css" media="all" />
        <link href="assets/animate.css?v=17046942425478865338" rel="stylesheet" type="text/css" media="all" />

        <link href="assets/font-all.min.css?v=15722457319706631789" rel="stylesheet" type="text/css" media="all" />

        <link rel="stylesheet" type="text/css" href="fonts/cssSans.css" />

        <link rel="stylesheet" type="text/css" href="fonts/cssUbuntu.css" />

        <!-- Header hook for plugins ================================================== -->
        <script>
            window.performance &&
                window.performance.mark &&
                window.performance.mark("shopify.content_for_header.start");
        </script>
        <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/18805030976/digital_wallets/dialog" />
        <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch" />
        <script id="shopify-features" type="application/json">
            {
                "accessToken": "7666e39476cc77b21d8fb47bedd87dec",
                "betas": ["rich-media-storefront-analytics"],
                "domain": "kure-demo.myshopify.com",
                "predictiveSearch": true,
                "shopId": 18805030976,
                "smart_payment_buttons_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
                "dynamic_checkout_cart_url": "https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
                "locale": "en"
            }
        </script>
        <script>
            var Shopify = Shopify || {};
            Shopify.shop = "kure-demo.myshopify.com";
            Shopify.locale = "en";
            Shopify.currency = {
                active: "USD",
                rate: "1.0"
            };
            Shopify.theme = {
                name: "kure",
                id: 59461992512,
                theme_store_id: null,
                role: "main",
            };
            Shopify.theme.handle = "null";
            Shopify.theme.style = {
                id: null,
                handle: null
            };
        </script>
        <script type="module">
            !(function (o) {
            (o.Shopify = o.Shopify || {}).modules = !0;
        })(window);
        </script>
        <script>
            !(function(o) {
                function n() {
                    var o = [];

                    function n() {
                        o.push(Array.prototype.slice.apply(arguments));
                    }
                    return (n.q = o), n;
                }
                var t = (o.Shopify = o.Shopify || {});
                (t.loadFeatures = n()), (t.autoloadFeatures = n());
            })(window);
        </script>
        <script>
            (function() {
                function asyncLoad() {
                    var urls = [
                        "\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=kure-demo.myshopify.com",
                        "https:\/\/instafeed.nfcube.com\/cdn\/2dacd9f0f92a1afc5b43e6e10fdd229d.js?shop=kure-demo.myshopify.com",
                    ];
                    for (var i = 0; i < urls.length; i++) {
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        s.src = urls[i];
                        var x = document.getElementsByTagName("script")[0];
                        x.parentNode.insertBefore(s, x);
                    }
                }
                if (window.attachEvent) {
                    window.attachEvent("onload", asyncLoad);
                } else {
                    window.addEventListener("load", asyncLoad, false);
                }
            })();
        </script>
        <script id="__st">
            var __st = {
                a: 18805030976,
                offset: -43200,
                reqid: "bfde4727-f241-4ee2-a8ab-399488d13f57",
                pageurl: "kure-demo.myshopify.com\/",
                u: "a6cdf4b1baa0",
                p: "home",
            };
        </script>
        <script>
            window.ShopifyPaypalV4VisibilityTracking = true;
        </script>
        <script>
            window.ShopifyAnalytics = window.ShopifyAnalytics || {};
            window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
            window.ShopifyAnalytics.meta.currency = "USD";
            var meta = {
                page: {
                    pageType: "home"
                }
            };
            for (var attr in meta) {
                window.ShopifyAnalytics.meta[attr] = meta[attr];
            }
        </script>
        <script>
            window.ShopifyAnalytics.merchantGoogleAnalytics = function() {};
        </script>
        <script class="analytics">
            (function() {
                var customDocumentWrite = function(content) {
                    var jquery = null;

                    if (window.jQuery) {
                        jquery = window.jQuery;
                    } else if (window.Checkout && window.Checkout.$) {
                        jquery = window.Checkout.$;
                    }

                    if (jquery) {
                        jquery("body").append(content);
                    }
                };

                var isDuplicatedThankYouPageView = function() {
                    return (
                        document.cookie.indexOf(
                            "loggedConversion=" + window.location.pathname
                        ) !== -1
                    );
                };

                var setCookieIfThankYouPage = function() {
                    if (
                        window.location.pathname.indexOf("/checkouts") !== -1 &&
                        window.location.pathname.indexOf("/thank_you") !== -1
                    ) {
                        var twoMonthsFromNow = new Date(Date.now());
                        twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                        document.cookie =
                            "loggedConversion=" +
                            window.location.pathname +
                            "; expires=" +
                            twoMonthsFromNow;
                    }
                };

                var trekkie = (window.ShopifyAnalytics.lib = window.trekkie =
                    window.trekkie || []);
                if (trekkie.integrations) {
                    return;
                }
                trekkie.methods = [
                    "identify",
                    "page",
                    "ready",
                    "track",
                    "trackForm",
                    "trackLink",
                ];
                trekkie.factory = function(method) {
                    return function() {
                        var args = Array.prototype.slice.call(arguments);
                        args.unshift(method);
                        trekkie.push(args);
                        return trekkie;
                    };
                };
                for (var i = 0; i < trekkie.methods.length; i++) {
                    var key = trekkie.methods[i];
                    trekkie[key] = trekkie.factory(key);
                }
                trekkie.load = function(config) {
                    trekkie.config = config;
                    var script = document.createElement("script");
                    script.type = "text/javascript";
                    script.onerror = function(e) {
                        new Image().src =
                            "//v.shopify.com/internal_errors/track?error=trekkie_load";
                    };
                    script.async = true;
                    script.src = "javascripts/trekkie.storefront.min.js?v=2020.04.13.1";
                    var first = document.getElementsByTagName("script")[0];
                    first.parentNode.insertBefore(script, first);
                };
                trekkie.load({
                    Trekkie: {
                        appName: "storefront",
                        development: false,
                        defaultAttributes: {
                            shopId: 18805030976,
                            isMerchantRequest: null,
                            themeId: 59461992512,
                            themeCityHash: "6288070540543511406",
                            contentLanguage: "en",
                            currency: "USD",
                        },
                        isServerSideCookieWritingEnabled: true,
                    },
                    Performance: {
                        navigationTimingApiMeasurementsEnabled: true,
                        navigationTimingApiMeasurementsSampleRate: 1,
                    },
                    "Session Attribution": {},
                });

                var loaded = false;
                trekkie.ready(function() {
                    if (loaded) return;
                    loaded = true;

                    window.ShopifyAnalytics.lib = window.trekkie;

                    var originalDocumentWrite = document.write;
                    document.write = customDocumentWrite;
                    try {
                        window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                    } catch (error) {}
                    document.write = originalDocumentWrite;
                    (function() {
                        if (
                            window.BOOMR &&
                            (window.BOOMR.version || window.BOOMR.snippetExecuted)
                        ) {
                            return;
                        }
                        window.BOOMR = window.BOOMR || {};
                        window.BOOMR.snippetStart = new Date().getTime();
                        window.BOOMR.snippetExecuted = true;
                        window.BOOMR.snippetVersion = 12;
                        window.BOOMR.application = "core";
                        window.BOOMR.shopId = 18805030976;
                        window.BOOMR.themeId = 59461992512;
                        window.BOOMR.url =
                            "https://cdn.shopify.com/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
                        var where =
                            document.currentScript ||
                            document.getElementsByTagName("script")[0];
                        var parentNode = where.parentNode;
                        var promoted = false;
                        var LOADER_TIMEOUT = 3000;

                        function promote() {
                            if (promoted) {
                                return;
                            }
                            var script = document.createElement("script");
                            script.id = "boomr-scr-as";
                            script.src = window.BOOMR.url;
                            script.async = true;
                            parentNode.appendChild(script);
                            promoted = true;
                        }

                        function iframeLoader(wasFallback) {
                            promoted = true;
                            var dom, bootstrap, iframe, iframeStyle;
                            var doc = document;
                            var win = window;
                            window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                            bootstrap = function(parent, scriptId) {
                                var script = doc.createElement("script");
                                script.id = scriptId || "boomr-if-as";
                                script.src = window.BOOMR.url;
                                BOOMR_lstart = new Date().getTime();
                                parent = parent || doc.body;
                                parent.appendChild(script);
                            };
                            if (
                                !window.addEventListener &&
                                window.attachEvent &&
                                navigator.userAgent.match(/MSIE [67]./)
                            ) {
                                window.BOOMR.snippetMethod = "s";
                                bootstrap(parentNode, "boomr-async");
                                return;
                            }
                            iframe = document.createElement("IFRAME");
                            iframe.src = "about:blank";
                            iframe.title = "";
                            iframe.role = "presentation";
                            iframe.loading = "eager";
                            iframeStyle = (iframe.frameElement || iframe).style;
                            iframeStyle.width = 0;
                            iframeStyle.height = 0;
                            iframeStyle.border = 0;
                            iframeStyle.display = "none";
                            parentNode.appendChild(iframe);
                            try {
                                win = iframe.contentWindow;
                                doc = win.document.open();
                            } catch (e) {
                                dom = document.domain;
                                iframe.src =
                                    "javascript:var d=document.open();d.domain='" +
                                    dom +
                                    "';void(0);";
                                win = iframe.contentWindow;
                                doc = win.document.open();
                            }
                            if (dom) {
                                doc._boomrl = function() {
                                    this.domain = dom;
                                    bootstrap();
                                };
                                doc.write("<body onload='document._boomrl();'>");
                            } else {
                                win._boomrl = function() {
                                    bootstrap();
                                };
                                if (win.addEventListener) {
                                    win.addEventListener("load", win._boomrl, false);
                                } else if (win.attachEvent) {
                                    win.attachEvent("onload", win._boomrl);
                                }
                            }
                            doc.close();
                        }
                        var link = document.createElement("link");
                        if (
                            link.relList &&
                            typeof link.relList.supports === "function" &&
                            link.relList.supports("preload") &&
                            "as" in link
                        ) {
                            window.BOOMR.snippetMethod = "p";
                            link.href = window.BOOMR.url;
                            link.rel = "preload";
                            link.as = "script";
                            link.addEventListener("load", promote);
                            link.addEventListener("error", function() {
                                iframeLoader(true);
                            });
                            setTimeout(function() {
                                if (!promoted) {
                                    iframeLoader(true);
                                }
                            }, LOADER_TIMEOUT);
                            BOOMR_lstart = new Date().getTime();
                            parentNode.appendChild(link);
                        } else {
                            iframeLoader(false);
                        }

                        function boomerangSaveLoadTime(e) {
                            window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
                        }
                        if (window.addEventListener) {
                            window.addEventListener("load", boomerangSaveLoadTime, false);
                        } else if (window.attachEvent) {
                            window.attachEvent("onload", boomerangSaveLoadTime);
                        }
                        if (document.addEventListener) {
                            document.addEventListener("onBoomerangLoaded", function(e) {
                                e.detail.BOOMR.init({
                                    ResourceTiming: {
                                        enabled: true,
                                        trackedResourceTypes: ["script", "img", "css"],
                                    },
                                });
                                e.detail.BOOMR.t_end = new Date().getTime();
                            });
                        } else if (document.attachEvent) {
                            document.attachEvent("onpropertychange", function(e) {
                                if (!e) e = event;
                                if (e.propertyName === "onBoomerangLoaded") {
                                    e.detail.BOOMR.init({
                                        ResourceTiming: {
                                            enabled: true,
                                            trackedResourceTypes: ["script", "img", "css"],
                                        },
                                    });
                                    e.detail.BOOMR.t_end = new Date().getTime();
                                }
                            });
                        }
                    })();

                    if (!isDuplicatedThankYouPageView()) {
                        setCookieIfThankYouPage();

                        window.ShopifyAnalytics.lib.page(null, {
                            pageType: "home"
                        });
                    }
                });

                var eventsListenerScript = document.createElement("script");
                eventsListenerScript.async = true;
                eventsListenerScript.src =
                    "assets/shop_events_listener-2c6237918c4bbec8783d8ceecd5759edc38afa9b5bef55134462710955517539.js";
                document
                    .getElementsByTagName("head")[0]
                    .appendChild(eventsListenerScript);
            })();
        </script>
        <script integrity="sha256-WJ/zNC1jntI8lPX8EeA9ZOB4jipKaHOR6+7u8g6vL1A=" crossorigin="anonymous" data-source-attribution="shopify.loadfeatures" defer="defer" src="assets/storefront/load_feature-589ff3342d639ed23c94f5fc11e03d64e0788e2a4a687391ebeeeef20eaf2f50.js"></script>
        <script integrity="sha256-EYppj7RbseKnaugbP4EJXR4sMs7TPdTpPmQ3i163eNA=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="//cdn.shopify.com/s/assets/storefront/features-118a698fb45bb1e2a76ae81b3f81095d1e2c32ced33dd4e93e64378b5eb778d0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" media="screen" href="compiled_assets/styles.css?3417" />
        <script id="sections-script" data-sections="slideshow,triangle-icon-block-a,testimonials,brands,header-model-9" defer="defer" src="compiled_assets/scripts.js?3417"></script>

        <script>
            window.performance &&
                window.performance.mark &&
                window.performance.mark("shopify.content_for_header.end");
        </script>

        <!--[if lt IE 9]>
      <script
        src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"
        type="text/javascript"
      ></script>
      <script
        src="assets/respond.min.js?v=5224867783754261923"
        type="text/javascript"
      ></script>
      <link
        href="assets/respond-proxy.html"
        id="respond-proxy"
        rel="respond-proxy"
      />
      <link
        href="//kure-demo.myshopify.com/search?q=9f82428d6293e4fa62cc5e4505e007cb"
        id="respond-redirect"
        rel="respond-redirect"
      />
      <script
        src="//kure-demo.myshopify.com/search?q=9f82428d6293e4fa62cc5e4505e007cb"
        type="text/javascript"
      ></script>
    <![endif]-->

        <script src="assets/header.js?v=1736120199236689723" type="text/javascript"></script>

        <script>
            window.use_sticky = true;
            window.ajax_cart = true;
            window.money_format = "<span class=money>${{amount}} USD</span>";
            window.shop_currency = "USD";
            window.show_multiple_currencies = true;
            window.enable_sidebar_multiple_choice = true;
            window.loading_url = "assets/loading.gif?v=5083731268673326083";
            window.dropdowncart_type = "hover";
            window.file_url = "files/?3417";
            window.asset_url = "";
            window.items = "Items";
            window.many_in_stock = "Many In Stock";
            window.out_of_stock = " Out of stock";
            window.in_stock = " In Stock";
            window.unavailable = "Unavailable";
            window.product_name = "Product Name";
            window.product_image = "Product Image";
            window.product_desc = "Product Description";
            window.available_stock = "Available In stock";
            window.unavailable_stock = "Unavailable In stock";
            window.compare_note =
                "Product Added over 8 product !. Do you want to compare 8 added product ?";
            window.added_to_cmp = "Added to compare";
            window.add_to_cmp = "Add to compare";
            window.select_options = "Select options";
            window.add_to_cart = "Add to Cart";
            window.confirm_box = "Yes,I want view it!";
            window.cancelButtonText = "Continue";
            window.remove = "Remove";
            window.use_color_swatch = true;

            var compare_list = [];
        </script>
    <?php
    } //fin Head
    public function MostrarHeader($inicio = 'current', $empresa = '', $insumos = '', $suplementos = '', $contacto = '')
    {
    ?>
        <div class="wrapper-container">
            <div class="header-type-9">
                <div class="header-sticky">
                    <div id="header-landing" class="sticky-animate">
                        <div id="shopify-section-header-model-9" class="shopify-section">
                            <div class="top_bar top-bar-type-9">
                                <div class="container">
                                    <div class="grid__item">
                                        <div class="header_social top_bar_left">
                                            <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-half small--one-half">
                                                <ul class="menu_topbar_right grid__item">
                                                    <li class="header_currency">
                                                        <ul class="tbl-list">
                                                            <li class="currency dropdown-parent uppercase currency-block">
                                                                <div class="selector-arrow redes-sociales-top">
                                                                    <a href="https://www.facebook.com/Novalive-Pharma-Group-SAS-450678154956426/" title="Facebook" target="blank"><i class="fab fa-facebook"></i></a>
                                                                    <a href="https://twitter.com/novalivepharma" target="_blank"><i class="fab fa-twitter"></i></a>
                                                                    <a href="https://www.instagram.com/novalivepharma/" target="_blank"><i class="fab fa-instagram"></i></a>
                                                                    <i class="fab fa-linkedin"></i>
                                                                    <i class="fab fa-youtube"></i>
                                                                    <i class="fab fa-flickr"></i>
                                                                    <i class="fab fa-google-plus"></i>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="grid__item wide--one-third post-large--one-third large--one-third medium-down--hide">
                                                <ul class="menu_bar_left grid__item">
                                                    <li class="phone_txt">
                                                        <span>Email: novalivepharma@gmail.com</span>
                                                    </li>
                                                    <li class="notification_text">
                                                        <span>| Teléfonos: (5) 303 7851</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-half small--one-half">
                                                <ul class="menu_bar_left grid__item">
                                                    <li class="medium-down--hide phone_no">
                                                        <span>Dirección: Carrera 61 No. 74 - 177</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <header class="site-header">
                                <div class="grid--full site-header__menubar">
                                    <div class="container">
                                        <div class="grid__item menubar_inner">
                                            <div class="grid__item wide--two-sixths post-large--two-sixths large--two-sixths medium-down--hide">
                                                <div class="header-search">
                                                    <div id="sb-search" class="sb-search medium-down--hide">
                                                        <form action="/search" method="get" class="search-bar__table-cell search-bar__form" role="search">
                                                            <input type="hidden" name="type" value="product" />
                                                            <input type="text" id="search" name="search" value="" placeholder="Buscar..." aria-label="Buscar..." class="search-bar__input sb-search-input" />
                                                            <input class="sb-search-submit" type="submit" value="" />
                                                            <span class="sb-icon-search fa fa-search"></span>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <h1 class="grid__item wide--one-third post-large--one-third large--one-third site-header__logo" itemscope itemtype="http://schema.org/Organization">
                                                <a href="index.php" style="max-width: px;">
                                                    <img class="normal-logo" src="assets/logo.png?v=14697657111549854453" alt="Kure" itemprop="logo" />
                                                </a>
                                            </h1>
                                            <ul class="menu_bar_right grid__item wide--one-third  post-large--one-third large--one-third small-grid__item">
                                                <li class="wide--hide post-large--hide large--hide ">
                                                    <div class="header-search">
                                                        <div class="header_toggle"><span class="zmdi zmdi-search"></span></div>
                                                        <div class="slidersearch header_slide_element">
                                                            <form action="/search" method="get" class="search-bar__table-cell search-bar__form" role="search">
                                                                <input type="hidden" name="type" value="product">
                                                                <input type="text" id="search" name="q" value="" placeholder="Search..." aria-label="Search..." class="search-bar__input sb-search-input">
                                                                <button class="sb-search-submit wide--hide post-large--hide large--hide res_btn" type="submit" value=""><i class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header-bar__module cart header_cart">
                                                    <!-- Mini Cart Start -->
                                                    <div class="baskettop">
                                                        <div class="wrapper-top-cart">
                                                            <a href="javascript:void(0)" class="icon-cart-arrow">
                                                                <div class="detail">
                                                                    <i class="fas fa-shopping-cart" aria-hidden="true"></i>
                                                                    <div class="mini-inner-detail-cart">
                                                                        <br>
                                                                        <div class="mini-inner-detail">
                                                                            <div id="cartCount">
                                                                            </div>
                                                                            <div id="minicart_total">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header-bar__module cart header_cart">
                                                    <!-- Mini Cart Start -->
                                                    <div class="baskettop">
                                                        <div class="wrapper-top-cart">
                                                            <a href="javascript:void(0)" class="icon-cart-arrow">
                                                                <div class="detail">
                                                                    <i class="fas fa-plus" aria-hidden="true"></i>
                                                                    <div class="mini-inner-detail-cart">
                                                                        <br>
                                                                        <div class="mini-inner-detail">
                                                                            <div id="cartCount">
                                                                            </div>
                                                                            <div id="minicart_total">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="header-bar__module cart header_cart">
                                                    <!-- Mini Cart Start -->
                                                    <div class="baskettop">
                                                        <div class="wrapper-top-cart">
                                                            <a href="login.php" id="ToggleDown" class="icon-cart-arrow">
                                                                <div class="detail">
                                                                    <i class="fas fa-user"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </header>
                        </div>
                        <div class="desktop-megamenu">
                            <div id="shopify-section-navigation" class="shopify-section">
                                <div class="nav-bar-mobile">
                                    <nav class="nav-bar" role="navigation">
                                        <div class="site-nav-dropdown_inner">
                                            <div class="menu-tool">
                                                <ul class="site-nav">
                                                    <li class=" ">
                                                        <a href="index.php" class="<?= $inicio ?>">
                                                            <span>
                                                                Inicio
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="empresa.php" class="<?= $empresa ?>">
                                                            <span>
                                                                Nuestra Empresa
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="insumos.php" class="<?= $insumos ?>">
                                                            <span>
                                                                Insumos y Medicamentos
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="suplementos.php" class="<?= $suplementos ?>">
                                                            <span>
                                                                Suplementos
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="contacto.php" class="<?= $contacto ?>">
                                                            <span>
                                                                Contacto
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    public function MostrarProducto($nombre, $imagen)
    {
    ?>
        <li class="grid__item item-row wide--one-quarter post-large--one-quarter large--one-quarter medium--one-half small-grid__item medium--one-half small--one-half on-sale" id="product-2240997294144">
            <div class="products product-hover-9">
                <div class="product-container">
                    <a class="grid-link">
                        <div class="ImageOverlayCa"></div>
                        <img src="products/<?= $imagen ?>" class="featured-image" alt="<?= $nombre ?>" />
                    </a>
                    <div class="product_right_tag offer_exist"></div>
                    <div class="ImageWrapper">
                        <div class="product-button">
                            <a title="Quick View">
                                <i class="far fa-eye"></i>
                            </a>
                            <a title="Product Link">
                                <i class="fas fa-link"></i>
                            </a>
                            <div class="add-to-wishlist">
                                <div class="show">
                                    <div class="default-wishbutton-surgical-kit loading">
                                    </div>
                                    <div class="loadding-wishbutton-surgical-kit loading" style="display: none;pointer-events: none;">
                                        <a class="add_to_wishlist"><i class="fas fa-spinner"></i></a>
                                    </div>
                                    <div class="added-wishbutton-surgical-kit loading" style="display: none;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-detail">
                    <a class="grid-link__title big"><?= $nombre ?></a>
                    <div class="grid-link__meta">
                        <div class="product_price">
                            <div class="grid-link__org_price" id="ProductPrice">
                            </div>
                        </div>
                    </div>
                    <form action="/cart/add" method="post" class="variants clearfix" id="cart-form-2241007353920">
                        <center>
                            <a title="Add to Cart" class="add-cart-btn btn">
                                <i class="fas fa-info-circle"></i>Cotizar
                            </a>
                        </center>
                    </form>
                </div>
            </div>
        </li>
    <?php
    }
    public function MostrarProductosGeneral()
    {
    ?>
        <div id="shopify-section-1547016854059" class="shopify-section index-section">
            <div data-section-id="1547016854059" data-section-type="home-product-grid-type-5" class="home-product-grid-type-5">
                <div class="container">
                    <div class="full_width_tab load-wrapper">
                        <div class="section-header section-header--small wow fadeInDown animated">
                            <div class="border-title">
                                <h2 class="section-header__title" style="color: #222222;">
                                    Nuestros Productos
                                </h2>
                                <div class="small-desc">
                                    <p style="color: #444444;">Ofrecemos medicamentos homeopáticos, suplementos alimenticios, insumos hospitalarios, implementos médicos, quirúrgicos, farmacéuticos y hospitalarios</p>
                                </div>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="grid-uniform">
                            <div class="grid__item">
                                <ul class="type4__items">
                                    <?php

                                    $this->MostrarProducto("Suplemento One2max", "1.jpg");
                                    $this->MostrarProducto("Gorro Médico", "pdt19_large.jpg");
                                    $this->MostrarProducto("Suplemento One2max Core", "2.jpg");
                                    $this->MostrarProducto("Bata Médica", "pdt4_large.jpg");
                                    $this->MostrarProducto("Gel de Manos Antibacterial", "pdt7_large.jpg");
                                    $this->MostrarProducto("Tapabocas Desechable", "pdt17_large.jpg");
                                    //$this->MostrarProducto("Cubierta Desechable para zapatos", "pdt18_large.jpg");
                                    $this->MostrarProducto("Gafas Médicas", "pdt8_large.jpg");
                                    //$this->MostrarProducto("Guantes Médicos de Latex", "pdt15_large.jpg");
                                    $this->MostrarProducto("One2max Activador Inmunológico", "3.jpg");
                                    //$this->MostrarProducto("Alcohol Antiséptico", "pdt1_large.jpg");
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    public function MostrarInsumosMedicamentos()
    {
    ?>
        <div id="shopify-section-1547016854059" class="shopify-section index-section">
            <div data-section-id="1547016854059" data-section-type="home-product-grid-type-5" class="home-product-grid-type-5">
                <div class="container">
                    <div class="full_width_tab load-wrapper">
                        <div class="section-header section-header--small wow fadeInDown animated">
                            <div class="border-title">
                                <h2 class="section-header__title" style="color: #222222;">
                                    Insumos y Medicamentos
                                </h2>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="grid-uniform">
                            <div class="grid__item">
                                <ul class="type4__items">
                                    <?php
                                    $this->MostrarProducto("Gorro Médico", "pdt19_large.jpg");
                                    $this->MostrarProducto("Bata Médica", "pdt4_large.jpg");
                                    $this->MostrarProducto("Gel de Manos Antibacterial", "pdt7_large.jpg");
                                    $this->MostrarProducto("Tapabocas Desechable", "pdt17_large.jpg");
                                    $this->MostrarProducto("Cubierta Desechable para zapatos", "pdt18_large.jpg");
                                    $this->MostrarProducto("Gafas Médicas", "pdt8_large.jpg");
                                    $this->MostrarProducto("Guantes Médicos de Latex", "pdt15_large.jpg");
                                    $this->MostrarProducto("Alcohol Antiséptico", "pdt1_large.jpg");
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    public function MostrarSuplementos()
    {
    ?>
        <div id="shopify-section-1547016854059" class="shopify-section index-section">
            <div data-section-id="1547016854059" data-section-type="home-product-grid-type-5" class="home-product-grid-type-5">
                <div class="container">
                    <div class="full_width_tab load-wrapper">
                        <div class="section-header section-header--small wow fadeInDown animated">
                            <div class="border-title">
                                <h2 class="section-header__title" style="color: #222222;">
                                    Suplementos
                                </h2>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                        <div class="grid-uniform">
                            <div class="grid__item">
                                <ul class="type4__items">
                                    <?php
                                    $this->MostrarProducto("Suplemento One2max", "1.jpg");
                                    $this->MostrarProducto("Suplemento One2max Core", "2.jpg");
                                    $this->MostrarProducto("One2max Activador Inmunológico", "3.jpg");
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="dt-sc-hr-invisible-small"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    public function MostrarFooter()
    {
    ?>
        <div id="shopify-section-footer-model-5" class="shopify-section">
            <div id="contacto" data-section-id="footer-model-5" data-section-type="Footer-model-5" class="footer-model-5">
                <footer class="site-footer grid-uniform" style="background-color: #fafafa;">
                    <div class="grid__item wide--two-fifths post-large--two-fifths large--two-fifths medium--grid__item" style="position: relative; margin: 0; ">
                        <div class="footer-logo my_element">
                            <div class="footer_container">
                                <a href="index.php">
                                    <img class="normal-footer-logo" src="files/kure-logo_200x.png?v=1551445618" alt="Kure" />
                                </a>
                                <p style="color: #444444; margin-bottom:0px; padding-bottom: 0px">
                                    Incentivamos y promovemos actividades y alimentos sanos en los ambientes laborales combinados en mejores economías. Nos proyectamos como una empresa totalmente innovadora en la solución y mejoramiento de nuestro desempeño integral de mente cuerpo; llevando al individuo a ser parte concienzudamente y de una forma autónoma de los procesos en que interviene en su organización laboral.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="grid__item wide--three-fifths post-large--three-fifths large--three-fifths medium--grid__item">
                        <div class="footer_right_width" style="background: #075ac9;">
                            <div class="footer_right_container">
                                <div class="grid__item">
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
                                        <h4 style="color: #ffffff;">Redes Sociales</h4>
                                        <ul class="social-links-type-5">
                                            <li>
                                                <a style="color: #ffffff;" class="icon-fallback-text twitt hexagon" target="blank" href="https://twitter.com/novalivepharma" title="Twitter">
                                                    <i class="fab fa-twitter" aria-hidden="true"></i>
                                                    <span> Twitter </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" class="icon-fallback-text fb hexagon" target="blank" href="https://www.facebook.com/Novalive-Pharma-Group-SAS-450678154956426/" title="Facebook">
                                                    <i class="fab fa-facebook" aria-hidden="true"></i>
                                                    <span> Facebook </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" class="icon-fallback-text google hexagon" target="blank" href="https://www.instagram.com/novalivepharma/" title="Google+" rel="publisher">
                                                    <i class="fab fa-instagram" aria-hidden="true"></i>
                                                    <span> Instagram </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
                                        <h4 style="color: #ffffff;">Links de Interés</h4>
                                        <ul class="site-footer__links">
                                            <li>
                                                <a style="color: #ffffff;" href="">Soporte Técnico</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Términos y Conficiones</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Información</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Políticas de Privacidad</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
                                        <h4 style="color: #ffffff;">Mapa del Sitio</h4>
                                        <ul class="site-footer__links">
                                            <li>
                                                <a style="color: #ffffff;" href="">Inicio</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Nuestra Empresa</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Productos</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Contacto</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="grid__item">
                                    <div class="grid__item wide--one-third post-large--one-third large--one-third medium--one-third">
                                        <h4 style="color: #ffffff;">Información</h4>
                                        <ul class="site-footer__links">
                                            <li>
                                                <a style="color: #ffffff;" href="">Devoluciones</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Busqueda Avanzada</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="">Ayuda</a>
                                            </li>
                                            <li>
                                                <a style="color: #ffffff;" href="#">Contacto</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="grid__item wide--two-thirds post-large--two-thirds large--two-thirds medium--two-thirds">
                                        <h4 style="color: #ffffff;">Contáctanos</h4>
                                        <div class="address">
                                            <p style="color: #ffffff;">
                                                <i class="fa fa-home" style="background: #35c7df; color: #ffffff;"></i>
                                                Dirección : Carrera 61 No. 74 - 177
                                            </p>
                                            <p style="color: #ffffff;">
                                                <i style="background: #35c7df;color: #ffffff;" class="fa fa-phone"></i>
                                                Teléfono: 300 814 3673
                                            </p>
                                        </div>
                                        <p style="color: #ffffff; display: inline-block;">
                                            <i style="background: #35c7df; color: #ffffff;" class="fa fa-envelope"></i>
                                            Email: novalivepharma@gmail.com
                                    </div>
                                </div>
                                <div class="footer-menu">
                                    <p style="color: #ffffff;" class="copyright-type__5">
                                        Copyright &copy; 2020 <a href="./">Novalive Pharma Group</a>
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <?php
    }
    public function CargarAssetsJS()
    {
    ?>
        <script src="assets/timber.js?v=13748178311005876045" type="text/javascript"></script>
        <script src="assets/footer.js?v=6686401123983771609" type="text/javascript"></script>
        <script src="assets/theme.js?v=18326697871268545370" type="text/javascript"></script>
        <script src="assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
        <script src="assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" type="text/javascript"></script>
        <script src="assets/shop.js?v=17221836401287222908" type="text/javascript"></script>

        <script src="javascripts/currencies.js" type="text/javascript"></script>
        <script src="assets/jquery.currencies.min.js?v=17505776077200662322" type="text/javascript"></script>
        <script>
            // Pick your format here:
            // Can be 'money_format' or 'money_with_currency_format'
            Currency.format = "money_format";
            var shopCurrency = "USD";

            /* Sometimes merchants change their shop currency, let's tell our JavaScript file */
            Currency.moneyFormats[shopCurrency].money_with_currency_format =
                "${{amount}} USD";
            Currency.moneyFormats[shopCurrency].money_format = "${{amount}}";

            var cookieCurrency = Currency.cookie.read();

            // Fix for customer account pages
            jQuery("span.money span.money").each(function() {
                jQuery(this).parent("span.money").removeClass("money");
            });

            // Add precalculated shop currency to data attribute
            jQuery("span.money").each(function() {
                jQuery(this).attr("data-currency-USD", jQuery(this).html());
            });

            // Select all your currencies buttons.
            var currencySwitcher = jQuery("#currencies");

            // When the page loads.
            if (cookieCurrency == null || cookieCurrency == shopCurrency) {
                Currency.currentCurrency = shopCurrency;
            } else {
                Currency.currentCurrency = cookieCurrency;
                currencySwitcher.val(cookieCurrency);
                Currency.convertAll(shopCurrency, cookieCurrency);
            }
            //currencySwitcher.selectize();
            jQuery(".selectize-input input").attr("disabled", "disabled");

            // When customer clicks on a currency switcher.
            currencySwitcher.change(function() {
                var newCurrency = jQuery(this).val();
                Currency.cookie.write(newCurrency);
                Currency.convertAll(Currency.currentCurrency, newCurrency);
                //show modal
                jQuery("#currencies-modal span").text(newCurrency);
                if (jQuery("#cart-currency").length > 0) {
                    jQuery("#cart-currency").text(newCurrency);
                }
                jQuery("#currencies-modal").fadeIn(500).delay(3000).fadeOut(500);
            });

            // For product options.
            var original_selectCallback = window.selectCallback;
            var selectCallback = function(variant, selector) {
                original_selectCallback(variant, selector);
                Currency.convertAll(shopCurrency, jQuery("#currencies").val());
            };
        </script>
        <script type="text/javascript">
            // <![CDATA[
            jQuery(document).ready(function() {
                //
                var $modalParent = jQuery("div.newsletterwrapper"),
                    modalWindow = jQuery("#email-modal"),
                    emailModal = jQuery("#email-modal"),
                    modalPageURL = window.location.pathname;

                modalWindow = modalWindow.html();
                modalWindow = '<div id="email-modal">' + modalWindow + "</div>";
                $modalParent.css({
                    position: "relative"
                });
                jQuery(".wrapper #email-modal").remove();
                $modalParent.append(modalWindow);

                if (jQuery.cookie("emailSubcribeModal") != "closed") {
                    openEmailModalWindow();
                }

                jQuery("#email-modal .btn.close").click(function(e) {
                    e.preventDefault();
                    closeEmailModalWindow();
                });
                jQuery("body").keydown(function(e) {
                    if (e.which == 27) {
                        closeEmailModalWindow();
                        jQuery("body").unbind("keydown");
                    }
                });
                jQuery("#mc_embed_signup form").submit(function() {
                    if (jQuery("#mc_embed_signup .email").val() != "") {
                        closeEmailModalWindow();
                    }
                });

                function closeEmailModalWindow() {
                    jQuery("#email-modal .modal-window").fadeOut(600, function() {
                        jQuery("#email-modal .modal-overlay").fadeOut(600, function() {
                            jQuery("#email-modal").hide();
                            jQuery.cookie("emailSubcribeModal", "closed", {
                                expires: 1,
                                path: "/",
                            });
                        });
                    });
                }

                function openEmailModalWindow() {
                    jQuery("#email-modal").fadeIn(600, function() {
                        jQuery("#email-modal .modal-window").fadeIn(600);
                    });
                }
            });
            // ]]
            // ]]>
        </script>
        <script src="assets/wow.js?v=8607965041847799793" type="text/javascript"></script>
        <script src="assets/classie.js?v=15303010894070199091"></script>
        <script>
            $(".qtyplus").click(function(e) {
                e.preventDefault();
                var currentVal = parseInt($('input[name="quantity"]').val());
                if (!isNaN(currentVal)) {
                    $('input[name="quantity"]').val(currentVal + 1);
                } else {
                    $('input[name="quantity"]').val(1);
                }
            });

            $(".qtyminus").click(function(e) {
                e.preventDefault();
                var currentVal = parseInt($('input[name="quantity"]').val());
                if (!isNaN(currentVal) && currentVal > 0) {
                    $('input[name="quantity"]').val(currentVal - 1);
                } else {
                    $('input[name="quantity"]').val(1);
                }
            });
        </script>
        <script src="assets/jquery.mb.YTPlayer.js?v=4383344290154288008" type="text/javascript"></script>
<?php
    }
} //Fin Clase Body
?>