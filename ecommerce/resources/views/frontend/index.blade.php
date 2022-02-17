@extends('frontend.layouts.base')
@section('main-container')

@foreach ($banners as $banner)
    <div class="Billboard l-wrap--wide"
        style="background:linear-gradient(118deg, #6fe2f5, #10235adb)!important;border-radius:10px; box-shadow:2px 2px 3px grey;color:rgb(167, 37, 37);font-weight:bold;">
        <picture class="Billboard-media js-background-image">
            <!--[if IE 9]><video style="display: none;"><![endif]-->
            {{-- <source
                srcset="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/stock-photos/sunshine-1200-c562bf54a146ba59d8490f6e508b2236cf2c4e76f142d91151f37faf5c237c99.png"
                media="(min-width: 1200px)"> --}}
            {{-- <source
                srcset="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/stock-photos/sunshine-800-f3a1c491765fb159c84127b40c5898174d7a653a7fbce2fa5d9d02d0b4aff2a7.png"
                media="(min-width: 800px)"> --}}
            <!--[if IE 9]></video><![endif]-->
            {{-- <img
                src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/stock-photos/sunshine-500-f13fb6b5b69a4873267fbb273335dbc6f7ca4e0e61b64266bd596954e64df7b7.png"> --}}
        </picture>

        <div class="Billboard-content bg-star-right--before bg-white--before c-auto">
            <div class="Billboard-content-wrap 1-padding">
                <h2 class="Billboard-title">{{ $banner->title }}</h2>
                <div class="Billboard-description">
                    <p class="u-mb2">{{ $banner->heading }}</p>
                </div>
                <a href="/news/2021/05/opensecrets-merger-press-release">
                    <div class="Billboard-cta Button Button--red">Read More</div>
                </a>
            </div>
        </div>
    </div>
    @endforeach

    <div class="Main-wrap l-padding u-mt4">
        <div class="l-wrap">
            <!--h2 class="f-strata-title u-mb2">OpenSecrets Blog</h2-->
            <div class="l-grid-3 u-clearfix u-mb3">
                @foreach ($categories as $category)
                    <div class="l-col" style="box-shadow: 1.5px 3px 2px rgb(119, 64, 248)!important; border-radius:12px!important;">
                        <div class="Card">
                            <a class="Card-media aspect-sixteen-nine bg-zoom" href="others/news.html" aria-hidden="true"
                                tabindex="-1">

                                <img class="Card-image" src="{{ asset('/storage/' . $category->image) }}">
                            </a>

                            <div class="Card-content">
                                <p class="Card-label"><a href="/news/">News Post</a></p>
                                <h2 class="Card-title"><a href="{{ url('/news') }}">{{ $category->name }}</a></h2>
                                <div class="Card-meta">
                                    <span class="Card-meta-item"><a href="others/jimmyCloutier.html">By Jimmy
                                            Cloutier</a></span>
                                    <span class="Card-meta-item">January 27, 2022</span>
                                </div>
                                <div class="Card-description">

                                    <p>{!! $category->description !!}</p>

                                </div>
                                <a href="others/news.html">
                                    <div class="Card-cta Button Button--teal">Read More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="BlogPromo l-padding u-mt3 u-mb3">
        <div class="l-wrap">
            <div class="BlogPromo-wrapper">

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px"
                    y="0px" width="48.318px" height="43.055px" viewBox="0 0 48.318 43.055"
                    enable-background="new 0 0 48.318 43.055" xml:space="preserve" focusable="false" class="BlogPromo-icon"
                    preserveAspectRatio="xMidYMid meet" role="img" aria-hidden="true">
                    <path fill="#333333"
                        d="M41.673,5.21V0L20.562,5.21H7.422v3.242L0,10.284v26.455c0,3.424,2.096,6.316,4.576,6.316  c0.189,0,0.379-0.018,0.564-0.051l35.587-6.582c4.186-0.775,7.591-4.867,7.591-9.125V5.21H41.673z M7.422,36.738  c0,2.543-0.992,4.307-2.589,4.602c-1.452,0.271-3.143-1.787-3.143-4.602v-25.13l5.731-1.414V36.738z M39.982,2.159V5.21H27.621  L39.982,2.159z M46.627,27.297c0,2.904-1.941,5.711-4.572,6.93V24.145H31.365v12.289L8.196,40.719  c0.59-1.051,0.917-2.406,0.917-3.98V6.901h37.514V27.297z">
                    </path>
                    <g>
                        <path fill="#333333"
                            d="M15.072,9.983h1.644l2.146,3.152V9.983h1.66v5.698h-1.66l-2.133-3.129v3.129h-1.656V9.983z">
                        </path>
                        <path fill="#333333"
                            d="M21.823,9.983h4.717V11.2h-2.953v0.905h2.74v1.163h-2.74v1.123h3.04v1.291h-4.804V9.983z">
                        </path>
                        <path fill="#333333"
                            d="M27.123,9.983h1.673l0.602,3.19l0.883-3.19h1.665l0.884,3.186l0.603-3.186h1.663l-1.255,5.698h-1.727   l-1-3.588l-0.995,3.588h-1.728L27.123,9.983z">
                        </path>
                        <path fill="#333333"
                            d="M35.5,13.795l1.674-0.104c0.036,0.272,0.11,0.479,0.222,0.622c0.182,0.23,0.44,0.346,0.778,0.346   c0.25,0,0.444-0.059,0.581-0.177c0.135-0.118,0.204-0.254,0.204-0.41c0-0.148-0.065-0.28-0.194-0.396   c-0.13-0.116-0.431-0.227-0.902-0.331c-0.772-0.173-1.322-0.404-1.651-0.692c-0.332-0.288-0.499-0.654-0.499-1.1   c0-0.293,0.086-0.569,0.256-0.829c0.169-0.261,0.425-0.466,0.766-0.615c0.341-0.148,0.808-0.223,1.401-0.223   c0.728,0,1.284,0.135,1.665,0.406c0.382,0.271,0.609,0.703,0.682,1.293l-1.659,0.097c-0.044-0.256-0.138-0.443-0.277-0.559   c-0.142-0.117-0.337-0.175-0.586-0.175c-0.203,0-0.359,0.043-0.462,0.13c-0.104,0.086-0.156,0.192-0.156,0.316   c0,0.091,0.044,0.173,0.129,0.246c0.083,0.075,0.279,0.145,0.591,0.209c0.77,0.166,1.321,0.334,1.653,0.503   c0.333,0.17,0.575,0.38,0.728,0.632c0.151,0.25,0.227,0.533,0.227,0.843c0,0.365-0.1,0.702-0.303,1.011   c-0.202,0.308-0.485,0.542-0.848,0.701c-0.363,0.159-0.819,0.239-1.372,0.239c-0.968,0-1.639-0.187-2.013-0.56   C35.76,14.846,35.548,14.371,35.5,13.795z">
                        </path>
                    </g>
                    <rect x="13.686" y="18.764" fill="#333333" width="28.369" height="1.989"></rect>
                    <g>
                        <rect x="13.686" y="24.145" fill="#333333" width="6.508" height="1.693"></rect>
                        <rect x="13.686" y="27.643" fill="#333333" width="6.508" height="1.691"></rect>
                        <rect x="13.686" y="31.139" fill="#333333" width="6.508" height="1.691"></rect>
                        <rect x="13.686" y="34.635" fill="#333333" width="6.508" height="1.691"></rect>
                        <rect x="22.657" y="24.145" fill="#333333" width="6.508" height="1.693"></rect>
                        <rect x="22.657" y="27.643" fill="#333333" width="6.508" height="1.691"></rect>
                        <rect x="22.657" y="31.139" fill="#333333" width="6.508" height="1.691"></rect>
                        <rect x="22.657" y="34.635" fill="#333333" width="6.508" height="1.691"></rect>
                    </g>
                </svg>

                <div class="BlogPromo-text">
                    <p>
                        <a href="others/openSecretNews.html">Read more original journalism from OpenSecrets News</a>
                    </p>
                </div>

                <div class="BlogPromo-view">
                    <a class="Button" href="others/openSecretNews.html">Visit OpenSecrets News</a>
                </div>

            </div>
        </div>
    </div>

    <div class="Main-wrap l-padding u-mt4">
        <div class="l-wrap">
            <div class="l-grid-3 js-equalHeights u-clearfix u-mb3">
                @foreach ($posts as $post)
                    <div class="l-col"
                        style="height: 470px; box-shadow:0px 2px 3px rgb(107, 75, 75);border-radius:10px;">
                        <div class="PromoCard">
                            <div class="PromoCard-image bg-navy">
                                <img src="{{ asset('/storage/' . $post->image) }}">
                            </div>
                            <div class="PromoCard-wrap">
                                <div class="PromoCard-content">
                                    <h2 class="PromoCard-title f-strata-title f-uppercase"><a
                                            href="others/recentReport.html">{{$post->heading}}</a></h2>
                                    <ul class="PromoCard-list">
                                        <li class="PromoCard-item"><a
                                                href="others/whichWoman2.html">{{ $post->heading }}&nbsp;<span
                                                    aria-hidden="true">›</span></a></li>

                                        {{-- <li class="PromoCard-item"><a href="others/whichWoman.html">{!! $post->description !!}&nbsp;<span aria-hidden="true">›</span></a></li> --}}

                                        {{-- <li class="PromoCard-item"><a href="others/unprecedentDonation.html">Unprecedented
                                                donations poured into 2020 state and federal races&nbsp;<span
                                                    aria-hidden="true">›</span></a></li> --}}
                                    </ul>



                                    <a class="PromoCard-button Button Button--blue" href="others/recentReportMore.html"
                                        aria-hidden="true" tabindex="-1">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <!-- end PromoCard -->
                    </div>

                @endforeach
                


                {{-- <div class="l-col" style="height: 470px;">
                    <div class="PromoCard">
                        <div class="PromoCard-image bg-forest">
                            <img
                                src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/stock-photos/cash-800-0ed96e592fa1865ca2d05f054c94c3b95752c72a79179b8322dc46d3154861c3.png">
                        </div>
                        <div class="PromoCard-wrap">
                            <div class="PromoCard-content">
                                <h2 class="PromoCard-title f-strata-title f-uppercase"><a href="others/darkMoney.html">Dark
                                        Money</a></h2>
                                <ul class="PromoCard-list">
                                    <li class="PromoCard-item"><a href="others/whatdarkMoney.html">What is Dark
                                            Money?&nbsp;<span aria-hidden="true">›</span></a></li>
                                    <li class="PromoCard-item"><a href="others/whoDonateDarkMoney.html">Who are the top Dark
                                            Money Donors?&nbsp;<span aria-hidden="true">›</span></a></li>
                                    <li class="PromoCard-item"><a href="others/exploreReport.html">Explore our
                                            records&nbsp;<span aria-hidden="true">›</span></a></li>
                                </ul>
                                <a class="PromoCard-button Button Button--green" href="others/darkMoneyMore.html"
                                    aria-hidden="true" tabindex="-1">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- end PromoCard -->
                </div> --}}
                <!-- end l-col -->
                {{-- <div class="l-col" style="height: 470px;">
                    <div class="PromoCard">
                        <div class="PromoCard-image bg-maroon">
                            <img
                                src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/stock-photos/capitol-800-64b98651ad122ae5ed22b14d9752bbdf90ca032aa811840ad12e723b59f7eea9.png">
                        </div>
                        <div class="PromoCard-wrap">
                            <div class="PromoCard-content">
                                <h2 class="PromoCard-title f-strata-title f-uppercase"><a
                                        href="others/politicalAction.html">Political Action Committees</a></h2>
                                <ul class="PromoCard-list">
                                    <li class="PromoCard-item"><a href="others/topPoliticalCommittee.html">See the top
                                            committees&nbsp;<span aria-hidden="true">›</span></a></li>
                                    <li class="PromoCard-item"><a href="others/superPacs.html">Dig into our list of Super
                                            PACs&nbsp;<span aria-hidden="true">›</span></a></li>
                                    <li class="PromoCard-item"><a href="others/whatIsPacs.html">What is a PAC?&nbsp;<span
                                                aria-hidden="true">›</span></a></li>
                                </ul>
                                <a class="PromoCard-button Button Button--red" href="others/pacsMore.html"
                                    aria-hidden="true" tabindex="-1">Learn more</a>
                            </div>
                        </div>
                    </div>
                    <!-- end PromoCard -->
                </div> --}}
                <!-- end l-col -->
            </div>

        </div>
    </div>

    {{-- <div class="LearningCenter l-padding u-mt3">
        <div class="l-wrap">

            <div class="LearningCenter-header">
                <div class="LearningCenter-header-column LearningCenter-header-column-rule -ruleLeft">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228 21" preserveAspectRatio="xMidYMid meet"
                        focusable="false" class="LearningCenter-header-svg" role="img" aria-hidden="true">
                        <path
                            d="M220 0c-3.5 0-6.5 2.3-7.5 5.5L90.1 16c-.5-1.4-1.9-2.4-3.5-2.4-1.7 0-3.1 1.1-3.6 2.6L5 9.7c-.2-1.1-1.2-2-2.4-2C1.1 7.7 0 8.8 0 10.2s1.1 2.5 2.5 2.5c1 0 2-.7 2.4-1.7L83 18.4c.4 1.6 1.8 2.6 3.6 2.6 1.7 0 3.2-1.2 3.7-2.9l122.7-7c1.2 2.7 3.9 4.5 7.2 4.5 4.4 0 7.9-3.5 7.9-7.9-.2-4.2-3.8-7.7-8.1-7.7z">
                        </path>
                    </svg>
                </div>

                <div class="LearningCenter-header-column LearningCenter-header-column-text u-mb1">
                    <h2>Learning Center</h2>
                </div>

                <div class="LearningCenter-header-column LearningCenter-header-column-rule -ruleRight">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 232 19" preserveAspectRatio="xMidYMid meet"
                        focusable="false" class="LearningCenter-header-svg" role="img" aria-hidden="true">
                        <path
                            d="M224.1 1c-3.5 0-6.5 2.2-7.5 5.4L39.3 3.3C38.8 1.4 37.1 0 35.1 0c-2.5 0-4.4 2-4.4 4.4 0 .2 0 .4.1.5l-26.2 10c-.4-.6-1.2-1.1-2-1.1C1.2 13.9 0 15 0 16.4 0 17.9 1.2 19 2.6 19s2.6-1.2 2.6-2.6v-.2l26.2-9.4c.8 1.2 2.1 2 3.6 2 2 0 3.8-1.4 4.3-3.4l177 5.6c.9 3.4 4 6 7.7 6 4.4 0 8-3.6 8-8s-3.5-8-7.9-8z">
                        </path>
                    </svg>
                </div>
            </div>

            <div class="LearningCenter-Cards">

                <div class="LearningCenter-Card">
                    <img class="LearningCenter-Card-image" alt="Calculator"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/illustrations/calc-ed4bc587f8eb43c994843caebafa0dd20f666ef03778cee01dee78d344460950.png">
                    <div class="LearningCenter-Card-contents">
                        <h3>Learn the Basics About Campaign Finance</h3>
                        <div class="LearningCenter-Card-description">
                            <p>Learn the basics, like "10 things every voter should know," and more about campaign finance.
                            </p>
                        </div>
                        <a class="LearningCenter-Card-link" href="others/learnBasic.html">Learn the basics</a>
                        <a class="LearningCenter-Card-overlay" href="others/learnBasic.html" aria-hidden="true"
                            tabindex="-1"></a>
                    </div>
                </div>

                <div class="LearningCenter-Card">
                    <img class="LearningCenter-Card-image" alt="Data"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/illustrations/data-50cc2440930e260f2949b6ea77935c464930d9b49fd919d2c6e787931d5aabc9.png">
                    <div class="LearningCenter-Card-contents">
                        <h3>Investigate Every Aspect of Money in Politics</h3>
                        <div class="LearningCenter-Card-description">
                            <p>These data sets are a goldmine for academics as well as journalists and interested citizens.
                            </p>
                        </div>
                        <a class="LearningCenter-Card-link" href="{{ url('/academicResearch') }}">Find academic
                            research</a>
                        <a class="LearningCenter-Card-overlay" href="{{ url('/academicResearch') }}" aria-hidden="true"
                            tabindex="-1"></a>
                    </div>
                </div>

                <div class="LearningCenter-Card">
                    <img class="LearningCenter-Card-image" alt="Tools"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/illustrations/tools-10f3562674bb03b6b02b7c4a37f8036169b2e998b5b15bc5660dadc3bd8bd47d.png">
                    <div class="LearningCenter-Card-contents">
                        <h3>Create Tools To Empower Citizens</h3>
                        <div class="LearningCenter-Card-description">
                            <p>Build your own tools, design your own mashups or simply display a widget of information based
                                on our comprehensive resources.</p>
                        </div>
                        <a class="LearningCenter-Card-link" href="others/ownTools.html">Build your own tools</a>
                        <a class="LearningCenter-Card-overlay" href="others/ownTools.html" aria-hidden="true"
                            tabindex="-1"></a>
                    </div>
                </div>

            </div>

        </div>
    </div> --}}

    <div class="Main-wrap l-padding u-mt4">
        <div class="l-wrap">
            <!-- News Promos -->
 
            <div class="u-center u-mb2">
                <p class="f-strata-label">We're Regularly Cited By</p>
            </div>

            <ul class="Logos u-mb4">
                <li class="Logos-item">
                    <img alt="Reuters" class="Logos-logo"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/external-logos/reuters-logo-1a9a259b8aeb88a8e4b83281604a13512929bc3191ab0b1bc24c2187cf9732b8.png">
                </li>
                <li class="Logos-item">
                    <img alt="CNN" class="Logos-logo"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/external-logos/cnn-logo-5b8d8cc26833642db34cc554cbc9aaef68a9eaa66b469d2d841447b3114d8ee7.png">
                </li>
                <li class="Logos-item">
                    <img alt="Politico" class="Logos-logo"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/external-logos/politico-logo-4f2e7ab53473d1d6f0456aae1bc36f33a50d8b86230a73be1ea9c0abd0055ca5.png">
                </li>
                <li class="Logos-item">
                    <img alt="Fox News" class="Logos-logo"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/external-logos/fox-news-logo-43832de4ac09466e1303f6c8380c20dfa0fc1aa58598cc01d3542050451056b0.png">
                </li>
                <li class="Logos-item">
                    <img alt="The New York Times" class="Logos-logo"
                        src="https://cdn1.opensecrets.org/rails-assets/production_v3/assets/external-logos/nytimes-logo-7bf47e3c83d66ddbd7e2638f611e71377bf937de1591772317420518d87b51a7.png">
                </li>
            </ul>

            <!-- End News Promos -->

        </div>
    </div>

    </div>



    <!--[if gt IE 9]><!-->
    <script async="async"
        src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/rails_php_and_wordpress-fef4b514a2ca1a52830f.js"
        defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async"
        src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/application-a40b845e52742de3695a.js"
        defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async"
        src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/marketing-54a896eb81a1aed009d8.js"
        defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async"
        src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/preferences-348a89b9938e235d2326.js"
        defer="defer" crossorigin="true" type="text/javascript"></script>
    <script async="async"
        src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/statistics-f7ede5e12f5ec4b39734.js"
        defer="defer" crossorigin="true" type="text/javascript"></script>

    <!--[if IE 9]>
                                        <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/rails_php_and_wordpress-fef4b514a2ca1a52830f.js"
                                                                                crossorigin="true"></script>
                                        <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/application-a40b845e52742de3695a.js"
                                                                                crossorigin="true"></script>
                                        <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/marketing-54a896eb81a1aed009d8.js"
                                                                                crossorigin="true"></script>
                                        <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/preferences-348a89b9938e235d2326.js"
                                                                                crossorigin="true"></script>
                                        <script src="https://cdn1.opensecrets.org/rails-assets/production_v3/packs/js/statistics-f7ede5e12f5ec4b39734.js"
                                                                                crossorigin="true"></script>
                                      <![endif]-->

    <div id="debugging-div" data-agent="" data-development="false" data-environment="production"></div>



    <script type="text/javascript" id="" src="//rum-static.pingdom.net/pa-5f6b593a8e83fa0015000bc5.js"></script><iframe name="_hjRemoteVarsFrame" title="_hjRemoteVarsFrame" id="_hjRemoteVarsFrame"
        src="https://vars.hotjar.com/box-ad575b5823df97fc9725e14a57070642.html"
        style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>

    <iframe id="google_esf" name="google_esf"
        src="https://googleads.g.doubleclick.net/pagead/html/r20220126/r20190131/zrt_lookup.html"
        style="display: none;"></iframe>
@endsection
