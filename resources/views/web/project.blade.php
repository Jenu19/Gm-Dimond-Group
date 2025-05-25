@extends('web.layout.default')
@section('styles')
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/project-style.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/project-max.css') }}" rel="stylesheet">
@endsection
@section('content')
    <main>
        <!-- banner  -->
        <section class="banner">
            <div class="">
                <img src="{{ url(env('ASSETPATHURL') . 'web/images/Valley.png') }}" alt="project-banner"
                    title="project-banner">
            </div>
        </section>
        <!-- tabify  -->
        <section class="tabify">
            <div class="container">
                <div class="row">
                    <div class="w-7 w-lg-1">
                        <div class="tab-block" id="tab-block">

                            <ul class="tab-mnu d-flex align-center">
                                <li class="active">Overview</li>
                                <li>Photos</li>
                                <li>EMI Calculator</li>
                                <li>location</li>
                            </ul>

                            <div class="tab-cont">
                                <div class="tab-pane">
                                    <h2>GM Diamond Valley - 4&5 BHK Luxurious Villa</h2>
                                    <span>Mafatlal mill compound, navsari</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. It was
                                        popularised in the 1960s with the release of Letraset sheets containing Lorem
                                        Ipsum passages, and more recently with desktop publishing software like Aldus
                                        PageMaker including versions of Lorem Ipsum.</p>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                </div>
                                <div class="tab-pane">
                                    <h2>GM Diamond Valley - 4&5 BHK Luxurious Villa</h2>
                                    <span>Mafatlal mill compound, navsari</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                    <p>
                                        "Lorem ipsum dolor sit amet,nostrud exercitation ullamco laboris nisi ut aliquip
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                        laborum."
                                    </p>
                                </div>
                                <div class="tab-pane">
                                    <h2>GM Diamond Valley - 4&5 BHK Luxurious Villa</h2>
                                    <span>Mafatlal mill compound, navsari</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                </div>
                                <div class="tab-pane">
                                    <h2>GM Diamond Valley - 4&5 BHK Luxurious Villa</h2>
                                    <span>Mafatlal mill compound, navsari</span>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. It has survived not only five centuries, and more recently with desktop
                                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim id est laborum."
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="w-3 w-lg-1">
                        <form action="">
                            <h3 class="text-center">Interested To Sell a Property?</h3>
                            <div class="form-inp">
                                <input type="text" placeholder="Name*">
                                <input type="text" placeholder="Mobile no*">
                                <input type="text" placeholder="Subject">
                                <textarea name="" id="" placeholder="Message"></textarea>
                                <a href="javascript:void(0)" class="d-flex align-center justify-center form-btn">View
                                    More<svg width="26" height="16" viewBox="0 0 26 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 8V9H25V8V7H0V8Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- photos  -->
        <section class="photos">
            <div class="container">
                <h3>Photos</h3>
                <div class="row">
                    <div class="w-7 w-lg-1">
                        <div class="row">
                            <div class="w-2 w-xs-1">
                                <div>
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph1.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph3.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph5.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph7.png') }}" alt="photo"
                                        title="photo" width="100%">
                                </div>
                            </div>
                            <div class="w-2 w-xs-1">
                                <div>
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph2.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph4.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph6.png') }}" alt="photo"
                                        title="photo" width="100%">
                                    <img src="{{ url(env('ASSETPATHURL') . 'web/images/ph8.png') }}" alt="photo"
                                        title="photo" width="100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-3 w-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- calculator  -->
        <section class="calculater">
            <div class="container">
                <h3>Emi Calculator</h3>
                <div class="row">
                    <div class="w-7 w-lg-1">
                        <div class="slider-group">
                            <div class="slider-label d-flex align-center justify-between">
                                <p>loan requirement (rs.)</p>
                                <input type="text" id="loan-value" class="value-box" readonly>
                            </div>
                            <div class="slider-row">
                                <input type="range" id="loan" min="100000" max="10000000" step="1000"
                                    value="4690332">

                            </div>
                            <div class="range-minmax">
                                <span>1 L</span>
                                <span>1 CR</span>
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="slider-label d-flex align-center justify-between">
                                <p>Interest rate (% p.a)</p>
                                <input type="text" id="interest-value" class="value-box" readonly>
                            </div>
                            <div class="slider-row">
                                <input type="range" id="interest" min="1" max="15" step="0.1"
                                    value="8.5">
                            </div>
                            <div class="range-minmax">
                                <span>1 L</span>
                                <span>15</span>
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="slider-label d-flex align-center justify-between">
                                <p>Interest rate (% p.a)</p>
                                <input type="text" id="tenure-value" class="value-box" readonly>
                            </div>
                            <div class="slider-row">
                                <input type="range" id="tenure" min="1" max="15" step="0.1"
                                    value="8.5">
                            </div>
                            <div class="range-minmax">
                                <span>1 yr</span>
                                <span>30 YR</span>
                            </div>
                        </div>

                    </div>
                    <div class="w-3 w-lg-1">
                        <div class="emi-table">
                            <div class="table-row d-flex align-center justify-between">
                                <p>Monthly EMI</p>
                                <p>Rs.XXXXX</p>
                            </div>
                            <hr>
                            <div class="table-row d-flex align-center justify-between">
                                <p>Principal Amount</p>
                                <p>Rs.4690332</p>
                            </div>
                            <hr>
                            <div class="table-row d-flex align-center justify-between">
                                <p>Interest Amount</p>
                                <p>Rs.XXXXX</p>
                            </div>
                            <hr>
                            <div class="table-row d-flex align-center justify-between">
                                <p>Total Payable Amount</p>
                                <p>Rs.XXXXX</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script src="{{ url(env('ASSETPATHURL') . 'web/js/jquery.min.js') }}"></script>
    <script>
        // tabify 
        $(document).ready(function() {
            var tabWrapper = $('#tab-block'),
                tabMnu = tabWrapper.find('.tab-mnu  li'),
                tabContent = tabWrapper.find('.tab-cont > .tab-pane');

            tabContent.not(':first-child').hide();

            tabMnu.each(function(i) {
                $(this).attr('data-tab', 'tab' + i);
            });
            tabContent.each(function(i) {
                $(this).attr('data-tab', 'tab' + i);
            });

            tabMnu.click(function() {
                var tabData = $(this).data('tab');
                tabWrapper.find(tabContent).hide();
                tabWrapper.find(tabContent).filter('[data-tab=' + tabData + ']').show();
            });

            $('.tab-mnu > li').click(function() {
                var before = $('.tab-mnu li.active');
                before.removeClass('active');
                $(this).addClass('active');
            });

        });


        // calculater 
        const loan = document.getElementById("loan");
        const loanVal = document.getElementById("loan-value");
        const interest = document.getElementById("interest");
        const interestVal = document.getElementById("interest-value");
        const tenure = document.getElementById("tenure");
        const tenureVal = document.getElementById("tenure-value");

        function updateValues() {
            loanVal.value = loan.value;
            interestVal.value = interest.value;
            tenureVal.value = tenure.value;
        }
        loan.addEventListener("input", updateValues);
        interest.addEventListener("input", updateValues);
        tenure.addEventListener("input", updateValues);
        updateValues(); // Initialize values
        function setSliderBackground(slider) {
            const min = slider.min;
            const max = slider.max;
            const val = slider.value;
            const percentage = ((val - min) / (max - min)) * 100;
            slider.style.background =
                `linear-gradient(to right, #B8882D 0%, #B8882D ${percentage}%, #eee ${percentage}%, #eee 100%)`;
        }

        function updateValues() {
            loanVal.value = loan.value;
            interestVal.value = interest.value;
            tenureVal.value = tenure.value;
            setSliderBackground(loan);
            setSliderBackground(interest);
            setSliderBackground(tenure);
        }
        loan.addEventListener("input", updateValues);
        interest.addEventListener("input", updateValues);
        tenure.addEventListener("input", updateValues);
        updateValues(); // Set initial background
    </script>
@endsection
