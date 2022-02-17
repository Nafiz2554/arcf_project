@extends('frontend.layouts.base')
@section('main-container')
    <div id="contentWrapper">
        <div id="breadCrumbsWrapper" class="dontprintme">
            <div id="breadCrumbsBar">
                <span id="breadCrumb">
                    <a href="/">Home</a> / <a href="/resources/">Learn</a> / Academic Resources: about
                </span>
                <span id="socialShare">
                    <div class="fb-share-button" id="fb-share-button" data-href="" data-type="button"></div>
                    <div class="tw_follow_breadcrumbs" id="tw_follow_breadcrumbs"><iframe id="twitter-widget-0"
                            scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true"
                            class="twitter-share-button twitter-share-button-rendered twitter-tweet-button"
                            style="position: static; visibility: visible; width: 73px; height: 20px;"
                            title="Twitter Tweet Button"
                            src="https://platform.twitter.com/widgets/tweet_button.8f764d5bd2778f88121d31d7d8d8e1e3.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fwww.opensecrets.org%2Fresources%2Flearn%2Facademic.php&amp;size=m&amp;text=Academic%20Resources%3A%20about%20%7C%20OpenSecrets&amp;time=1643520136128&amp;type=share&amp;url=https%3A%2F%2Fwww.opensecrets.org%2Fresources%2Flearn%2Facademic.php&amp;via=opensecretsdc"></iframe>
                        <script type="text/javascript">
                            ! function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0],
                                    p = /^http:/.test(d.location) ? 'http' : 'https';
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = p + '://platform.twitter.com/widgets.js';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, 'script', 'twitter-wjs');
                        </script></div>
                </span>
            </div>
        </div>
        <div id="mainColumn">
            <div id="leftColumn">
                <div id="leftNavContainer">
                    <h1>Resource Center: Learn</h1>
                    <div id="leftNav">
                        <ul id="leftNavList">
                            <li><a href="/resources/dollarocracy/">10 Things You Should Know</a></li>
                            <li><a href="/resources/10things/">10 Things They Won't Tell You</a></li>
                            <li><a href="/resources/learn/anomaly-tracker">Anomaly Tracker</a></li>
                            <li><a href="/resources/learn/glossary.php">Glossary</a></li>
                            <li><a href="/resources/learn/timeline.php">Money-in-Politics Timeline</a></li>
                            <li><a href="/resources/learn/lobbying_timeline.php">Lobbying History Timeline</a></li>
                            <li><a href="/resources/faq/">FAQ</a></li>
                            <li><a href="/resources/ftm/">Follow The Money</a></li>
                            <li><a href="/resources/learn/transparency.php">Transparency</a></li>
                            <li><a href="javascript:togglenav('AcadNav','AcadNavArrow')">Academic Research<img
                                        src="https://s3.amazonaws.com/assets2.opensecrets.org/img/up-arrow.gif" alt=""
                                        width="7" height="3" border="0" align="middle" style="margin: 0 0 5px 3px;"
                                        id="AcadNavArrow"></a>
                                <ul class="navshown" id="AcadNav">
                                    <li class="activePage"><a href="/resources/learn/academic.php" id="cf">About</a></li>
                                    <li><a href="/resources/learn/academic.php?type=cf" id="cf">Campaign Finance</a>
                                    </li>
                                    <li><a href="/resources/learn/academic.php?type=pf" id="pf">Personal Finance</a>
                                    </li>
                                    <li><a href="/resources/learn/academic.php?type=lb" id="lb">Lobbying</a></li>
                                    <li><a href="/resources/learn/academic.php?type=rd" id="rd">Revolving Door</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>

                <div id="donateContainer">
                    <a
                        href="/donate/?utm_campaign=donate&amp;utm_medium=internal_ad&amp;utm_source=/resources/learn/academic.php&amp;utm_content=internal"><img
                            src="https://s3.amazonaws.com/assets2.opensecrets.org/img/internal_donate1.png"></a>
                </div>

                <div id="findreps">
                    <strong>Find Your Representatives</strong>
                    <form action="/members-of-congress/search" method="get">
                        <input class="textfield" id="q" name="q" type="text" size="30"
                            placeholder="Street City, State Zip Code">
                        <input type="hidden" id="type" name="type" value="zip">
                        <button type="submit" id="section_search" class="btn btn-default"><i
                                class="fa fa-search"></i></button>
                    </form>
                </div>
                <div id="adContainer">

                    <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/javascript"></script>
                    <ins class="adsbygoogle" style="display: block; width: 268px; height: 250px; margin: 0px auto;"
                        data-ad-client="ca-pub-2601770384716403" data-ad-slot="7859189996" data-adsbygoogle-status="done"
                        data-ad-status="filled"><ins id="aswift_0_expand"
                            style="border: none; height: 250px; width: 268px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"
                            tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_0_anchor"
                                style="border: none; height: 250px; width: 268px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block;"><iframe
                                    id="aswift_0" name="aswift_0"
                                    style="left:0;position:absolute;top:0;border:0;width:268px;height:250px;"
                                    sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                                    width="268" height="250" frameborder="0" marginwidth="0" marginheight="0" vspace="0"
                                    hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true"
                                    src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2601770384716403&amp;output=html&amp;h=250&amp;slotname=7859189996&amp;adk=3805625603&amp;adf=1205312161&amp;pi=t.ma~as.7859189996&amp;w=268&amp;lmt=1643520135&amp;rafmt=12&amp;psa=1&amp;format=268x250&amp;url=https%3A%2F%2Fwww.opensecrets.org%2Fresources%2Flearn%2Facademic.php&amp;flash=0&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiOTcuMC40NjkyLjk5IixbXSxudWxsLG51bGwsIjY0Il0.&amp;dt=1643520135545&amp;bpp=9&amp;bdt=321&amp;idt=318&amp;shv=r20220126&amp;mjsv=m202201200301&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D562b1ffecf3595a6-226165b347d00037%3AT%3D1643436865%3ART%3D1643436865%3AS%3DALNI_MYlZiBCo2WN2PGRk5gkvfEOoN0L_A&amp;correlator=1686332968501&amp;frm=20&amp;pv=2&amp;ga_vid=1494275310.1643433436&amp;ga_sid=1643520136&amp;ga_hid=1580894874&amp;ga_fc=1&amp;u_tz=360&amp;u_his=3&amp;u_h=900&amp;u_w=1600&amp;u_ah=900&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=322&amp;ady=1223&amp;biw=1583&amp;bih=795&amp;scr_x=0&amp;scr_y=0&amp;eid=31063222%2C21067496&amp;oid=2&amp;pvsid=1237392387610661&amp;pem=503&amp;tmod=758752543&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.opensecrets.org%2F&amp;eae=0&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1600%2C0%2C1600%2C900%2C1600%2C795&amp;vis=1&amp;rsz=%7C%7CoeEbr%7C&amp;abl=CS&amp;pfx=0&amp;fu=256&amp;bc=31&amp;ifi=1&amp;uci=a!1&amp;btvi=1&amp;fsb=1&amp;xpc=GEgQBHje2d&amp;p=https%3A//www.opensecrets.org&amp;dtd=344"
                                    data-google-container-id="a!1" data-google-query-id="CIL_0s_d2PUCFdeOjwodveAJnA"
                                    data-load-complete="true"></iframe></ins></ins>
                    </ins>
                    <script type="text/javascript">
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                </div>
            </div>
            <div id="rightColumn">
                <h1 id="pageHeading">Academic Research</h1>
                <style>
                    #tabbs {
                        /*width:700px;*/
                        width: 100%;
                        float: right;
                        clear: right;
                        margin-left: 60px;
                        padding: .2em;
                        padding-bottom: 0;
                        margin-bottom: 60px;
                        border-bottom: 2px solid #CCCCCC;
                    }

                    #tabbs ul {
                        padding-left: 0;
                        margin: 3px 0 0 0;
                        float: left;
                        font-weight: bold;
                        /*font-size:1.25em;*/
                        width: 100%;
                        padding: .2em .2em 0;
                    }

                    #tabbs ul li {
                        display: inline;
                        list-style: none;
                        float: left;
                        position: relative;
                        top: 0;
                        margin: 1px .2em 0 0;
                        border-bottom-width: 0;
                        padding: .1em .1em 0;
                    }

                    #tabbs ul li a {
                        padding: 0.4em;
                        color: #777777;
                        text-decoration: none;
                        float: left;
                        border-right: 1px solid #CCCCCC;
                        border-top: 1px solid #CCCCCC;
                        border-left: 1px solid #CCCCCC;
                        /*font-size:1.25em;*/
                        white-space: nowrap;
                        background: none repeat-x scroll 50% 50% #EFEFEF;
                    }

                    #tabbs ul li a:hover {
                        background: #CCCCCC;
                        color: #FFFFFF;
                    }

                    .activetab {
                        color: #777777 !important;
                        background: #FFFFFF !important;
                    }

                </style>

                <div id="tabbs">
                    <ul>
                        <li><a class="activetab" href="academic.php">About</a></li>
                        <li><a href="academic.php?type=cf">Campaign Finance</a></li>
                        <li><a href="academic.php?type=pf">Personal Finances</a></li>
                        <li><a href="academic.php?type=lb">Lobbying</a></li>
                        <li><a href="academic.php?type=rd">Revolving Door</a></li>
                    </ul>
                </div>
                <div id="tabs-0">
                    <div id="about">
                        <!--h3>About</h3-->
                        <p>The data sets provided by OpenSecrets are a goldmine for academics as well as journalists and
                            interested citizens. Employing OpenSecrets data, scholars have investigated every aspect of
                            money in politics -- from campaign contributions
                            to lawmakers' investments to shadow lobbying. Click on the above tabs to read their research
                            and find out what they've discovered.</p>
                        <p>If you've used OpenSecrets data in your research and would like to see it cited on this page,
                            contact us at <a href="mailto:academics@crp.org">academics@crp.org</a>.</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT WRAPPER (started on each content page) -->


    <script type="text/javascript">
        var _sf_async_config = {
            uid: 7736,
            domain: 'opensecrets.org',
            useCanonical: true
        };
        (function() {
            function loadChartbeat() {
                window._sf_endpt = (new Date()).getTime();
                var e = document.createElement('script');
                e.setAttribute('language', 'javascript');
                e.setAttribute('type', 'text/javascript');
                e.setAttribute('src', '//static.chartbeat.com/js/chartbeat.js');
                document.body.appendChild(e);
            };
            var oldonload = window.onload;
            window.onload = (typeof window.onload != 'function') ?
                loadChartbeat : function() {
                    oldonload();
                    loadChartbeat();
                };
        })();
    </script>

    <!-- insert footer_add here-->

{{-- 
    <ins class="adsbygoogle adsbygoogle-noablate" data-adsbygoogle-status="done" style="display: none !important;"
        data-ad-status="unfilled"><ins id="aswift_1_expand"
            style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-table;"
            tabindex="0" title="Advertisement" aria-label="Advertisement"><ins id="aswift_1_anchor"
                style="border: none; height: 0px; width: 0px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: block;"><iframe
                    id="aswift_1" name="aswift_1"
                    style="left:0;position:absolute;top:0;border:0;width:undefinedpx;height:undefinedpx;"
                    sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation"
                    frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true"
                    scrolling="no" allowfullscreen="true"
                    src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-2601770384716403&amp;output=html&amp;adk=1812271804&amp;adf=3025194257&amp;lmt=1643520135&amp;plat=3%3A32%2C4%3A32%2C9%3A32776%2C16%3A8388608%2C17%3A32%2C24%3A32%2C25%3A32%2C30%3A1081344%2C32%3A32&amp;format=0x0&amp;url=https%3A%2F%2Fwww.opensecrets.org%2Fresources%2Flearn%2Facademic.php&amp;ea=0&amp;flash=0&amp;pra=7&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiOTcuMC40NjkyLjk5IixbXSxudWxsLG51bGwsIjY0Il0.&amp;dt=1643520135556&amp;bpp=3&amp;bdt=332&amp;idt=369&amp;shv=r20220126&amp;mjsv=m202201200301&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D562b1ffecf3595a6-226165b347d00037%3AT%3D1643436865%3ART%3D1643436865%3AS%3DALNI_MYlZiBCo2WN2PGRk5gkvfEOoN0L_A&amp;prev_fmts=268x250&amp;nras=1&amp;correlator=1686332968501&amp;frm=20&amp;pv=1&amp;ga_vid=1494275310.1643433436&amp;ga_sid=1643520136&amp;ga_hid=1580894874&amp;ga_fc=1&amp;u_tz=360&amp;u_his=3&amp;u_h=900&amp;u_w=1600&amp;u_ah=900&amp;u_aw=1600&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=-12245933&amp;ady=-12245933&amp;biw=1583&amp;bih=795&amp;scr_x=0&amp;scr_y=0&amp;eid=31063222%2C21067496&amp;oid=2&amp;pvsid=1237392387610661&amp;pem=503&amp;tmod=758752543&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fwww.opensecrets.org%2F&amp;eae=2&amp;fc=896&amp;brdim=0%2C0%2C0%2C0%2C1600%2C0%2C1600%2C900%2C1600%2C795&amp;vis=1&amp;rsz=%7C%7Cs%7C&amp;abl=NS&amp;fu=32768&amp;bc=31&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;dtd=379"
                    data-google-container-id="a!2" data-load-complete="true"></iframe></ins></ins>
    </ins><iframe scrolling="no" frameborder="0" allowtransparency="true"
        src="https://platform.twitter.com/widgets/widget_iframe.8f764d5bd2778f88121d31d7d8d8e1e3.html?origin=https%3A%2F%2Fwww.opensecrets.org"
        title="Twitter settings iframe" style="display: none;"></iframe>
    <script language="javascript" type="text/javascript" src="//static.chartbeat.com/js/chartbeat.js"></script>
    <script language="javascript" type="text/javascript" src="//static.chartbeat.com/js/chartbeat.js"></script>
    <script type="text/javascript" id="" src="//rum-static.pingdom.net/pa-5f6b593a8e83fa0015000bc5.js"></script><iframe src="https://www.google.com/recaptcha/api2/aframe" width="0" height="0"
        style="display: none;"></iframe><iframe id="rufous-sandbox" scrolling="no" frameborder="0" allowtransparency="true"
        allowfullscreen="true"
        style="position: absolute; visibility: hidden; display: none; width: 0px; height: 0px; padding: 0px; border: none;"
        title="Twitter analytics iframe"></iframe>
    <iframe id="google_esf" name="google_esf"
        src="https://googleads.g.doubleclick.net/pagead/html/r20220126/r20190131/zrt_lookup.html"
        style="display: none;"></iframe> --}}
@endsection
