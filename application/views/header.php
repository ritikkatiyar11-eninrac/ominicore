<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="<?= base_url('assets/fonts/fonts.css') ?>" />
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" />
    <style>
        .toggleClass {
            transform: scale(1);
            opacity: 1;
        }
        .showTransition{
            transform: translateY(10px);
            opacity: 0;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="d-flex justify-content-between" style="padding: 20px 0 0;">
                <div class="logo">
                    <a href="">
                        <img src="<?= base_url() ?>assets/images/logo_dark.png" style="max-width: 200px;" id="logo-img" alt="logo">
                    </a>
                </div>
                <ul style="margin-bottom: 0;"></ul>
                <ul class="d-flex list-style-none" style="margin-bottom: 0;">
                    <li class="subscriptions py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                        <a href="" target="_blank" rel="noopener noreferrer">subscriptions</a>
                    </li>
                    <li class="NewsLetter py-2 px-3 border cursor-pointer" style="border-width:1px;border-style:solid;padding:13px 37px;">
                        <a href="" target="_blank" rel="noopener noreferrer">NewsLetter</a>
                    </li>
                </ul>
            </div>
            <div class="bn-filter-tabs-mobile"></div>
            <div class="bn-controls-wrapper">
                <div class="bn-filter-tab-wrapper" style="margin-bottom: 15px; padding:15px 0 0;">
                    <div class="bn-filter-tabs-inner">
                        <ul class="list-style-none d-flex justify-content-between" style="padding-left: 0; margin-bottom:0;">
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="central">
                                <button class="bn-filter w-100  active bn-filter-top fs-14 border-0 fw-bold" data-slug="central" data-parent="false" data-group="1" data-title="Central" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Central
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="state">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="state" data-parent="false" data-group="2" data-title="State" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    State
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="generation">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="generation" data-parent="false" data-group="3" data-title="Generation" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Generation
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="distribution">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="distribution" data-parent="false" data-group="4" data-title="Distribution" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Distribution
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="transmission">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="transmission" data-parent="false" data-group="5" data-title="Transmission" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Transmission
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="bidupdates">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="bid updates" data-parent="false" data-group="6" data-title="Bid Updates" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Bid Updates
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="infographics">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="infographics" data-parent="false" data-group="7" data-title="Infographics" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Infographics
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="openaccess">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="openaccess" data-parent="false" data-group="8" data-title="Open Access" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Open Access
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="newenergies">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="newenergies" data-parent="false" data-group="9" data-title="New Energies" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    New Energies
                                </button>
                            </li>
                            <li class="bn-filter-item text-center flex-grow-1 layer-one-category" style="margin-right: 5px;" data-category="solarrooftop">
                                <button class="bn-filter w-100   bn-filter-top fs-14 border-0 fw-bold" data-slug="solarrooftop" data-parent="false" data-group="10" data-title="Solar Rooftop" style="padding: 8px 12px; margin-bottom:5px; line-height: 25px;">
                                    Solar Rooftop
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="bn-subfilter-tabs-inner">
                        <div class="bn-subfilter-tabs">
                            <div class="bn-subfilter-tabs-wrapper sub-categories central" style="display: none;" id="central">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-cerc" data-parent="1" data-title="cerc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">CERC</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-mop" data-parent="1" data-title="mop" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOP</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-mnre" data-parent="1" data-title="mnre" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MNRE</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-mof" data-parent="1" data-title="mof" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOF</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-moc" data-parent="1" data-title="moc" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">MOC</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="central-aptel" data-parent="1" data-title="aptel" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">APTEL</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-supremecourt" data-parent="1" data-title="supreme court" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Supreme Court</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="central-others" data-parent="1" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- second data group state -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories state" style="display: none;" id="state">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="state-gujrat" data-parent="2" data-title="Gujrat" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Gujrat</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-maharashtra" data-parent="2" data-title="maharashtra" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Maharashtra</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="state-rajasthan" data-parent="2" data-title="rajsthan" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Rajsthan</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-panjab" data-parent="2" data-title="panjab" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Panjab</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="state-others" data-parent="2" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- third data group generation -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories generation" style="display: none;" id="generation">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="generation-thermal" data-parent="3" data-title="thermal" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Thermal</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-solar" data-parent="3" data-title="solar" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Solar</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-wind" data-parent="3" data-title="wind" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Wind</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-biomass" data-parent="3" data-title="biomass" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Biomass</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-shb" data-parent="3" data-title="shb" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">SHB</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="generation-bess" data-parent="3" data-title="bess" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">BESS</button>
                                    </li>

                                </ul>
                            </div>
                            <!-- fourth data group Distribution -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories distribution" style="display: none;" id="distribution">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="distribution-tariff" data-parent="4" data-title="tariff" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Tariff</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="distribution-c&iconsumers" data-parent="4" data-title="c&i consumers" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">C&I Consumers</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- fifth data group transmission -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories transmission" style="display: none;" id="transmission">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="transmission-connectivity" data-parent="5" data-title="connectivity" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Connectivity</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-charges" data-parent="5" data-title="charges" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Charges</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-ists" data-parent="5" data-title="ists" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">ISTS</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="transmission-nwautomation" data-parent="5" data-title="nwautomation" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">N/W Automation</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="transmission-govtannouncements" data-parent="5" data-title="govtannouncements" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Govt Announcements</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- sixth data group Bid updates -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories bidupdates" style="display: none;" id="bidupdates">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="bidupdates-bidinviteseci&psu" data-parent="6" data-title="bidinviteseci&psu" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Bid invites ( SECI & PSU )</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="bidupdates-banking" data-parent="6" data-title="banking" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Banking</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="bidupdates-others" data-parent="6" data-title="others" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Others</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- 8th data group openaccess -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories openaccess" style="display: none;" id="openaccess">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="openaccess-solar" data-parent="8" data-title="solar" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Solar</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="openaccess-wind" data-parent="8" data-title="wind" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Wind</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="openaccess-hybrid" data-parent="8" data-title="hybrid" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Hybrid</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- 9th data group new energies -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories newenergies" style="display: none;" id="newenergies">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="newenergies-bess" data-parent="9" data-title="bess" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">BESS</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="newenergies-hydrogen" data-parent="9" data-title="hydrogen" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Hydrogen</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="newenergies-psph" data-parent="9" data-title="psph" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">PSPH</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- 10th data group solar rooftop -->
                            <div class="bn-subfilter-tabs-wrapper sub-categories solarrooftop" style="display: none;" id="solarrooftop">
                                <ul class="d-flex flex-wrap list-style-none" style="margin-bottom: 0; margin-top: 5px; padding-left: 0;">
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0" data-slug="solarrooftop-regulations" data-parent="9" data-title="regulations" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Regulations</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="solarrooftop-policies" data-parent="9" data-title="policies" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Policies</button>
                                    </li>
                                    <li class="bn-subfilter-item">
                                        <button class="fs-14 bn-subfilter border-0 " data-slug="solarrooftop-fit'starrif" data-parent="9" data-title="fit'stariff" data-sub="" style="margin-bottom: 3px; margin-right:3px; padding:5px 8px; transition:all .2s ease-out">Fit's Tariff</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <script>
        const buttons = document.querySelectorAll("[data-category]")
        buttons.forEach(button => {
            button.addEventListener("click", function() {
                const category = this.dataset.category;
                // console.log(category)
                const subCategory = document.querySelectorAll(".sub-categories")
                // console.log(subCategory)
                subCategory.forEach(sub => {
                    let s = sub.getAttribute("id")

                    if (s == category) {
                        sub.style.display = "block"
                        console.log(sub.childNodes[1].childNodes[1].classList.toggle("toggleClass"))
                        //    .nodeValue.classList.add("toggleClass")
                    } else {
                        sub.style.display = "none"
                    }
                })
                // console.log(category, subCategory)
            })
        })
    </script>
</body>

</html>