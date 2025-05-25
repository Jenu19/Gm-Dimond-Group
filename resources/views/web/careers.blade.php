@extends('web.layout.default')
@section('styles')
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/careers-style.css') }}" rel="stylesheet">
    <link href="{{ url(env('ASSETPATHURL') . 'web/css/careers-max.css') }}" rel="stylesheet">
@endsection
@section('content')
    <main>
        <!-- about-banner -->
        <section class="about-banner">
            <div class="about-banner-title">
                <p>Home > Careers</p>
                <h1>Careers</h1>
            </div>
        </section>
        <section class="job">
            <div class="container">
                <div class="job-title">
                    <h3>Explore Job</h3>
                    <h2>We Are Hiring!</h2>
                </div>
                <div class="job-form-container">
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Name*" required />
                        </div>
                        <div class="form-group">
                            <input type="tel" placeholder="Mobile No*" required />
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email*" required />
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Applied No*" required />
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ">
                            <label class="upload-group  ">
                                <div class="upload d-flex align-center justify-center">
                                    <span class="upload-icon "><svg width="37" height="37" viewBox="0 0 37 37"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M28.9105 31.9611H20.9722V23.9396H23.5956C24.2609 23.9396 24.6541 23.1836 24.2609 22.6393L19.1577 15.578C18.8326 15.1243 18.1598 15.1243 17.8347 15.578L12.7315 22.6393C12.3384 23.1836 12.7239 23.9396 13.3968 23.9396H16.0202V31.9611H7.12934C3.1602 31.7418 0 28.0297 0 24.0077C0 21.2331 1.5045 18.8138 3.73478 17.5058C3.53065 16.9539 3.42481 16.3642 3.42481 15.7443C3.42481 12.9092 5.71557 10.6184 8.55067 10.6184C9.16306 10.6184 9.75276 10.7243 10.3047 10.9284C11.9452 7.45067 15.4834 5.03894 19.5962 5.03894C24.9187 5.0465 29.3036 9.12149 29.8026 14.3154C33.8927 15.0185 37 18.8062 37 23.0929C37 27.6744 33.4315 31.6436 28.9105 31.9611Z"
                                                fill="#B8882D" />
                                        </svg>
                                    </span> Upload Your CV
                                    <input type="file" required />
                                </div>
                            </label>
                        </div>
                        <div class="form-group full-width submit-container">
                            <div class="submit-container">
                                <button type="submit" class="submit-btn">Submit <svg width="26" height="16"
                                        viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 8V9H25V8V7H0V8Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Job Opening -->
        <section>
            <div class="container">
                <div class="job-opening-title text-center">
                    <h3>Job Opening</h3>
                    <h2>Current opening!</h2>
                </div>
                <div class="accordion-container">
                    <details open>
                        <summary>
                            <div class="right-border">
                                <span class="accordion-title">
                                    What is the universe?
                                </span>
                                <span class="accordion-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg></span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            The universe is the entirety of all objects and spaces that exist in time and space. It is
                            the
                            largest known system and is believed to be approximately 13.8 billion years old.
                        </div>
                    </details>
                    <details>
                        <summary>
                            <div class="right-border">
                                <span class="accordion-title">
                                    What is dark matter?
                                </span>
                                <span class="accordion-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg></span>
                            </div>
                        </summary>
                        <div class="accordion-content">
                            Dark matter is a form of matter that cannot be seen directly but can be inferred by its
                            influence on galaxy formation and the speed of star rotation. It is believed to make up 27%
                            of
                            the total mass of the universe.
                        </div>
                    </details>
                    <details>
                        <summary>
                            <div class="right-border">
                                <span class="accordion-title">What is the Big Bang?</span>
                                <span class="accordion-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg></span>
                            </div>
                        </summary>
                        <div class="accordion-content">The Big Bang is the event that marked the beginning of the
                            universe,
                            approximately 13.8 billion years ago. It is believed to have been a moment when the entire
                            universe rapidly expanded from an infinitely dense and hot point.</div>
                    </details>
                    <details>
                        <summary>
                            <div class="right-border">
                                <span class="accordion-title">What is dark energy?</span>
                                <span class="accordion-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg></span>
                            </div>
                        </summary>
                        <div class="accordion-content">Dark energy is a form of energy that cannot be seen directly but
                            can
                            be inferred by its influence on the universe's expansion. It is believed to make up 68% of
                            the
                            total energy of the universe.</div>
                    </details>
                    <details>
                        <summary>
                            <div class="right-border">
                                <span class="accordion-title">What is the cosmic horizon?</span>
                                <span class="accordion-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 9l6 6l6 -6" />
                                    </svg></span>
                            </div>
                        </summary>
                        <div class="accordion-content">The cosmic horizon is the farthest limit that can be seen from
                            Earth.
                            It is the most distant point visible due to the universe's expansion and the speed of light.
                            All
                            stars and galaxies beyond this point are beyond human sight.</div>
                    </details>
                </div>
            </div>


        </section>
    </main>
@endsection
@section('script')
    <script src="{{ url(env('ASSETPATHURL') . 'web/js/jquery.min.js') }}"></script>
    <script>
        class Accordion {
            constructor(el) {
                this.el = el;
                this.summary = el.querySelector("summary");
                this.content = el.querySelector(".accordion-content");
                this.expandIcon = this.summary.querySelector(".accordion-icon");
                this.animation = null;
                this.isClosing = false;
                this.isExpanding = false;
                this.summary.addEventListener("click", (e) => this.onClick(e));
            }

            onClick(e) {
                e.preventDefault();
                this.el.style.overflow = "hidden";

                if (this.isClosing || !this.el.open) {
                    this.open();
                } else if (this.isExpanding || this.el.open) {
                    this.shrink();
                }
            }

            shrink() {
                this.isClosing = true;

                const startHeight = `${this.el.offsetHeight}px`;
                const endHeight = `${this.summary.offsetHeight}px`;

                if (this.animation) {
                    this.animation.cancel();
                }

                this.animation = this.el.animate({
                    height: [startHeight, endHeight]
                }, {
                    duration: 400,
                    easing: "ease-out"
                });
                this.animation.onfinish = () => {
                    this.expandIcon.setAttribute(
                        "src",
                        "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z'/></svg>"
                    );
                    return this.onAnimationFinish(false);
                };

                this.animation.oncancel = () => {
                    this.expandIcon.setAttribute(
                        "src",
                        "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z'/></svg>"
                    );
                    return (this.isClosing = false);
                };
            }

            open() {
                this.el.style.height = `${this.el.offsetHeight}px`;
                this.el.open = true;
                window.requestAnimationFrame(() => this.expand());
            }

            expand() {
                this.isExpanding = true;

                const startHeight = `${this.el.offsetHeight}px`;
                const endHeight = `${this.summary.offsetHeight + this.content.offsetHeight
                    }px`;

                if (this.animation) {
                    this.animation.cancel();
                }

                this.animation = this.el.animate({
                    height: [startHeight, endHeight]
                }, {
                    duration: 350,
                    easing: "ease-out"
                });

                this.animation.onfinish = () => {
                    this.expandIcon.setAttribute(
                        "src",
                        "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z'/></svg>"
                    );
                    return this.onAnimationFinish(true);
                };
                this.animation.oncancel = () => {
                    this.expandIcon.setAttribute(
                        "src",
                        "data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z'/></svg>"
                    );
                    return (this.isExpanding = false);
                };
            }

            onAnimationFinish(open) {
                this.el.open = open;
                this.animation = null;
                this.isClosing = false;
                this.isExpanding = false;
                this.el.style.height = this.el.style.overflow = "";
            }
        }

        document.querySelectorAll("details").forEach((el) => {
            new Accordion(el);
        });
    </script>
@endsection
