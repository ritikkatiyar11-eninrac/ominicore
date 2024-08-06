<style>
    .page-header a {
        color: #0f3f6e;
        width: max-content;
        transition: all 0.4s ease-in-out;
        transition-timing-function: cubic-bezier(.4, 0, .2, 1);

    }

    .page-header a:hover {
        transform: scale(0.98);
        color: #3243e9;
        transition-duration: .4s;
    }

    .page-header a span {
        text-transform: uppercase;
    }

    .page-header a i {
        font-size: 1.5rem;
    }
</style>

<div class="langing_page-top d-flex">
    <div class="langing_page-top-sidebar" id="landing_top-sidebar">

        <div class="menuwrapper" style="width:35%;">
            <a href="" class="menu-logo">
                <div class="logo"><span>Recent Updates</span><br /> <span id="totalUpdates"></span></div>
            </a>
            <div class="tickerwrapper">
                <div class="menu-ticker --active" id="central">
                    <a href="<?= base_url() ?>recent-updates/central">
                        <div class="label text-dark">Central</div>
                        <div class="ticker-up" style="color: #8cd19e;"><span> 20</span></div>
                    </a>
                </div>
                <div class="menu-ticker">
                    <a href="<?= base_url() ?>recent-updates/state" style="color: black;">
                        <div class="label text-dark">State</div>
                        <div class="ticker-up" style="color: #f2555d;"><span> 20</span></div>
                    </a>
                </div>

                <div class="menu-ticker" id="bidupdate">
                    <a href="<?= base_url() ?>recent-updates/bidupdate">
                        <div class="label text-dark">Bid Updates</div>
                        <div class="ticker-up" style="color: #f2555d;"> <span> 20</span></div>
                    </a>
                </div>

                <div class="menu-ticker" id="openaccess">
                    <a href="<?= base_url() ?>recent-updates/openaccess">
                        <div class="label text-dark">Open Access</div>
                        <div class="ticker-up" style="color:#8cd19e ;"> <span> 20</span></div>
                    </a>
                </div>

                <div class="menu-ticker" id="newenergies">
                    <a href="<?= base_url() ?>recent-updates/newenergies">
                        <div class="label text-dark">New Energies</div>
                        <div class="ticker-up" style="color: #8cd19e;"> <span> 20</span></div>
                    </a>
                </div>
                <a href="<?= base_url() ?>recent-updates/others" class="menu-link">
                    <i class="icofont-edit"></i>
                    <div class="">other Updates</div>
                </a>
            </div>
        </div>
        <div class="feedwrapper" style="width:65%; ">
            <div class="feed-header">
                <h2>Recent news</h2>
            </div>
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">3h ago</h3>
                <p>SEC Chairman Applauds &#8216;Operation Crypto-Sweep&#8217;</p>
            </a>
            
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">5h ago</h3>
                <p>Darknet Market Rapture Has Been Down 18% Retroactive Tax Has Been Down 18% Re</p>
            </a>
            <a href="" class="feed-item">
                <h3 class="label" style=" color: #3243e9;">8h ago</h3>
                <p>Indian Government Considering 18% Retroactive Tax</p>
            </a>


            <a href="" class="feed-link">
                <div class="">
                    More Updates
                </div>
                <i class="icofont-long-arrow-right"></i>
            </a>
        </div>
    </div>
    <div class="langing_page-contentwrapper" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;">

        <!-- section one -->
        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">Top Articles</h1>
            <a href="<?= base_url() ?>category" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="" >
         <div class="content-section" id="toparticlecontent" >
                <div class="content-col" id="toparticleid">
                </div>
                <div class="side-col">
                    <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <div class="tag-breaking"><span>Breaking</span></div>
                        <div class="">
                            <div class="card-meta mb-2">
                                2h ago
                            </div>
                            <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                        </div>
                    </div>
                    <div class="placeholder-image-05 d-flex flex-column align-items-start">
                        <div class="thumbnailwrapper mb-2">
                            <i class="icofont-light-bulb"></i>
                        </div>
                        <div>
                            <div class="card-meta">
                                INSIGHTS
                            </div>
                            <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- section one -->
        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">Central</h1>
            <a href="<?= base_url() ?>category/central" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section" id="centralmainContent">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">CERC </span>// Orders</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">MoP </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">MNRE </span>// Orders</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>


            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>

                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>

                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>

                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>


            </div>
        </div>

        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">State</h1>
            <a href="<?= base_url() ?>category/state" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section" id="statemaincontent">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e;font-weight:600; opacity:1;">Maharashtra </span>// MERC</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Gujrat </span>// GERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Panjab </span>// PERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-3;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-4;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performances</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">Bid Updates</h1>
            <a href="<?= base_url() ?>category/bidupdates" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section" id="bidupdatemafincontent">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e;font-weight:600; opacity:1;">Maharashtra </span>// MERC</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Gujrat </span>// GERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Panjab </span>// PERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-3;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-4;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performances</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">Open Access</h1>
            <a href="<?= base_url() ?>/category/openaccess" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section" id="openaccessmaincontent">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e;font-weight:600; opacity:1;">Maharashtra </span>// MERC</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Gujrat </span>// GERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Panjab </span>// PERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-3;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-4;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performances</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-header flex-column">
            <h1 class="page-title" style="color: #3243e9; margin-top:0;">New Energies</h1>
            <a href="<?= base_url() ?>category/powergeneration" class="d-flex" style="cursor:pointer;margin-left: 2%;"><span>Read all</span><i class="icofont-long-arrow-right"></i></a>
        </div>
        <div class="content-section" id="newenergiesmaincontent">
            <div class="content-col">
                <div class="trending-card card-placeholder-img-01 imghover" style="grid-area: trendingfull-card;">
                    <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e;font-weight:600; opacity:1;">Maharashtra </span>// MERC</div>
                        <h3 class="trending-card-title" style="font-size:18px;line-height:28px; font-weight:600; margin-top:0; margin-bottom:0;">The Verge Struck by Second POW Attack in as Many Months</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet Lorem ipsum dolor sit amet, consectetur adipisicing. world she helped inspire Lorem ipsum dolor sit amet consectetur Reiciendis, cum... <span style="color:blue">Read more</span></p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-1;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Gujrat </span>// GERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Govt. Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-2;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">Panjab </span>// PERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-3;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>

                <div class="trending-card card-half placeholder-image-03 w-inline-block" style="grid-area: trendinghalf-4;">
                    <div class="">
                        <img src="<?= base_url() ?>assets/images/trending-img-1.jpeg" alt="" style="border-radius:10px">
                    </div>
                    <div class="trending-card-content">
                        <div class="card-meta"> <span style="color: #0f3f6e; font-weight:600; opacity:1;">rajsthan </span>// RERC</div>
                        <h3 class="child-card-title" style="font-size:16px;line-height:20px; font-weight:600; margin-top:0; margin-bottom:0;">Bitcoin Use Case: Limiting Government Growth</h3>
                        <p class="fs-14">In Guggenheim exhibition, Jenny Holzer grapples with the post-internet world she helped inspire</p>
                    </div>
                </div>
            </div>
            <div class="side-col">
                <div class="placeholder-image-04" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="tag-breaking"><span>breaking</span></div>
                    <div class="">
                        <div class="card-meta mb-2">
                            2h ago
                        </div>
                        <div class="card-title" style="line-height: 20px;">U.S. Government Shutdown Hits Record Length With No End Seen</div>
                    </div>
                </div>
                <div class="placeholder-image-05">
                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performances</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">McAfee Predicts Bull Run as Crypto Markets Dip</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
                <div class="placeholder-image-05">

                    <div>
                        <div class="card-meta">
                            30 july 2024
                        </div>
                        <p class="card-title fw-400" style="line-height: 20px;">Texas city faces backlash for stripping local arts centre's funding over drag performance</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<script src="<?= base_url() ?>assets/js/toparticlenews.js"></script>
<script src="<?= base_url() ?>assets/js/trendingjs.js"></script>