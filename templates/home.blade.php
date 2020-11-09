@extends('layout')

@section('body_class', 'bg-light')

@section('content')
@include('partials.nav')

<!-- WELCOME -->
<section class="pt-6 pt-md-11 pb-9 pb-md-11">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-10 text-center">

                <!-- Heading -->
                <h1 class="display-3 mb-4" data-aos="fade-up">
                    The <span class="text-underline-warning">easiest</span> way to build simple&nbsp;websites.
                </h1>

                <!-- Text -->
                <p class="font-size-lg text-muted" data-aos="fade-up" data-aos-delay="50">
                    Saaze is an all-inclusive, flat-file CMS for simple websites and blogs.
                </p>

                <!-- Button -->
                <a class="btn btn-primary lift" href="/docs" data-aos="fade-up" data-aos-delay="100">
                    Get Started
                </a>

            </div>
        </div>
    </div>
</section>

<!-- DEMO -->
<section id="demo">
    <div class="container-lg position-relative" style="z-index: 1;">
        <div class="row align-items-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-12 col-md-7">
                <div class="card window-terminal">
                    <div class="window-header">
                        <div class="window-buttons">
                            <span class="window-close"></span>
                            <span class="window-minimize"></span>
                            <span class="window-fullscreen"></span>
                        </div>
                        <div class="window-title">Terminal</div>
                    </div>
                    <div class="window-terminal-body">
                        <span id="terminal" class="text-monospace"></span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-7 offset-md-5">
                <div class="card window-preview">
                    <div class="window-header">
                        <div class="window-buttons">
                            <span class="window-close"></span>
                            <span class="window-minimize"></span>
                            <span class="window-fullscreen"></span>
                        </div>
                        <div class="window-title">
                            <span class="window-url">http://127.0.0.1:8000</span>
                        </div>
                    </div>
                    <div class="window-preview-body">
                        <div id="preview" class="window-preview-content">
                            <div class="d-flex align-items-center justify-content-between mb-5">
                                <span>Saaze</span>
                                <span class="preview-text w-25"></span>
                            </div>
                            <div class="mx-auto pt-5 w-75">
                                <span class="preview-text w-50 mb-4"></span>
                                <span class="preview-text mb-4"></span>
                                <span class="preview-text mb-4"></span>
                                <span class="preview-text mb-4"></span>
                                <span class="preview-text w-25 mb-4"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- DECORATION -->
                <div class="position-relative d-none d-md-block">
                    <div class="position-absolute bottom-right text-warning mb-n8 mr-n8">
                        <svg width="185" height="186" viewBox="0 0 185 186" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2" cy="2" r="2" fill="currentColor" />
                            <circle cx="22" cy="2" r="2" fill="currentColor" />
                            <circle cx="42" cy="2" r="2" fill="currentColor" />
                            <circle cx="62" cy="2" r="2" fill="currentColor" />
                            <circle cx="82" cy="2" r="2" fill="currentColor" />
                            <circle cx="102" cy="2" r="2" fill="currentColor" />
                            <circle cx="122" cy="2" r="2" fill="currentColor" />
                            <circle cx="142" cy="2" r="2" fill="currentColor" />
                            <circle cx="162" cy="2" r="2" fill="currentColor" />
                            <circle cx="182" cy="2" r="2" fill="currentColor" />
                            <circle cx="2" cy="22" r="2" fill="currentColor" />
                            <circle cx="22" cy="22" r="2" fill="currentColor" />
                            <circle cx="42" cy="22" r="2" fill="currentColor" />
                            <circle cx="62" cy="22" r="2" fill="currentColor" />
                            <circle cx="82" cy="22" r="2" fill="currentColor" />
                            <circle cx="102" cy="22" r="2" fill="currentColor" />
                            <circle cx="122" cy="22" r="2" fill="currentColor" />
                            <circle cx="142" cy="22" r="2" fill="currentColor" />
                            <circle cx="162" cy="22" r="2" fill="currentColor" />
                            <circle cx="182" cy="22" r="2" fill="currentColor" />
                            <circle cx="2" cy="42" r="2" fill="currentColor" />
                            <circle cx="22" cy="42" r="2" fill="currentColor" />
                            <circle cx="42" cy="42" r="2" fill="currentColor" />
                            <circle cx="62" cy="42" r="2" fill="currentColor" />
                            <circle cx="82" cy="42" r="2" fill="currentColor" />
                            <circle cx="102" cy="42" r="2" fill="currentColor" />
                            <circle cx="122" cy="42" r="2" fill="currentColor" />
                            <circle cx="142" cy="42" r="2" fill="currentColor" />
                            <circle cx="162" cy="42" r="2" fill="currentColor" />
                            <circle cx="182" cy="42" r="2" fill="currentColor" />
                            <circle cx="2" cy="62" r="2" fill="currentColor" />
                            <circle cx="22" cy="62" r="2" fill="currentColor" />
                            <circle cx="42" cy="62" r="2" fill="currentColor" />
                            <circle cx="62" cy="62" r="2" fill="currentColor" />
                            <circle cx="82" cy="62" r="2" fill="currentColor" />
                            <circle cx="102" cy="62" r="2" fill="currentColor" />
                            <circle cx="122" cy="62" r="2" fill="currentColor" />
                            <circle cx="142" cy="62" r="2" fill="currentColor" />
                            <circle cx="162" cy="62" r="2" fill="currentColor" />
                            <circle cx="182" cy="62" r="2" fill="currentColor" />
                            <circle cx="2" cy="82" r="2" fill="currentColor" />
                            <circle cx="22" cy="82" r="2" fill="currentColor" />
                            <circle cx="42" cy="82" r="2" fill="currentColor" />
                            <circle cx="62" cy="82" r="2" fill="currentColor" />
                            <circle cx="82" cy="82" r="2" fill="currentColor" />
                            <circle cx="102" cy="82" r="2" fill="currentColor" />
                            <circle cx="122" cy="82" r="2" fill="currentColor" />
                            <circle cx="142" cy="82" r="2" fill="currentColor" />
                            <circle cx="162" cy="82" r="2" fill="currentColor" />
                            <circle cx="182" cy="82" r="2" fill="currentColor" />
                            <circle cx="2" cy="102" r="2" fill="currentColor" />
                            <circle cx="22" cy="102" r="2" fill="currentColor" />
                            <circle cx="42" cy="102" r="2" fill="currentColor" />
                            <circle cx="62" cy="102" r="2" fill="currentColor" />
                            <circle cx="82" cy="102" r="2" fill="currentColor" />
                            <circle cx="102" cy="102" r="2" fill="currentColor" />
                            <circle cx="122" cy="102" r="2" fill="currentColor" />
                            <circle cx="142" cy="102" r="2" fill="currentColor" />
                            <circle cx="162" cy="102" r="2" fill="currentColor" />
                            <circle cx="182" cy="102" r="2" fill="currentColor" />
                            <circle cx="2" cy="122" r="2" fill="currentColor" />
                            <circle cx="22" cy="122" r="2" fill="currentColor" />
                            <circle cx="42" cy="122" r="2" fill="currentColor" />
                            <circle cx="62" cy="122" r="2" fill="currentColor" />
                            <circle cx="82" cy="122" r="2" fill="currentColor" />
                            <circle cx="102" cy="122" r="2" fill="currentColor" />
                            <circle cx="122" cy="122" r="2" fill="currentColor" />
                            <circle cx="142" cy="122" r="2" fill="currentColor" />
                            <circle cx="162" cy="122" r="2" fill="currentColor" />
                            <circle cx="182" cy="122" r="2" fill="currentColor" />
                            <circle cx="2" cy="142" r="2" fill="currentColor" />
                            <circle cx="22" cy="142" r="2" fill="currentColor" />
                            <circle cx="42" cy="142" r="2" fill="currentColor" />
                            <circle cx="62" cy="142" r="2" fill="currentColor" />
                            <circle cx="82" cy="142" r="2" fill="currentColor" />
                            <circle cx="102" cy="142" r="2" fill="currentColor" />
                            <circle cx="122" cy="142" r="2" fill="currentColor" />
                            <circle cx="142" cy="142" r="2" fill="currentColor" />
                            <circle cx="162" cy="142" r="2" fill="currentColor" />
                            <circle cx="182" cy="142" r="2" fill="currentColor" />
                            <circle cx="2" cy="162" r="2" fill="currentColor" />
                            <circle cx="22" cy="162" r="2" fill="currentColor" />
                            <circle cx="42" cy="162" r="2" fill="currentColor" />
                            <circle cx="62" cy="162" r="2" fill="currentColor" />
                            <circle cx="82" cy="162" r="2" fill="currentColor" />
                            <circle cx="102" cy="162" r="2" fill="currentColor" />
                            <circle cx="122" cy="162" r="2" fill="currentColor" />
                            <circle cx="142" cy="162" r="2" fill="currentColor" />
                            <circle cx="162" cy="162" r="2" fill="currentColor" />
                            <circle cx="182" cy="162" r="2" fill="currentColor" />
                            <circle cx="2" cy="182" r="2" fill="currentColor" />
                            <circle cx="22" cy="182" r="2" fill="currentColor" />
                            <circle cx="42" cy="182" r="2" fill="currentColor" />
                            <circle cx="62" cy="182" r="2" fill="currentColor" />
                            <circle cx="82" cy="182" r="2" fill="currentColor" />
                            <circle cx="102" cy="182" r="2" fill="currentColor" />
                            <circle cx="122" cy="182" r="2" fill="currentColor" />
                            <circle cx="142" cy="182" r="2" fill="currentColor" />
                            <circle cx="162" cy="182" r="2" fill="currentColor" />
                            <circle cx="182" cy="182" r="2" fill="currentColor" /></svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SHAPE -->
<div class="position-relative">
    <div class="shape shape-fluid-x shape-top text-dark">
        <div class="shape-img pb-14 pb-md-16">
            <svg viewBox="0 0 100 50" preserveAspectRatio="none">
                <path d="M0 25h25L75 0h25v50H0z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
</div>

<!-- FEATURES -->
<section id="features" class="pt-10 pt-md-12 pb-10 pb-md-12 bg-dark">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8" data-aos="fade-up" data-aos-delay="200">

                <!-- Heading -->
                <h2 class="display-4 text-md-center text-white mb-7 mb-md-9">
                    Why Saaze?
                </h2>

                <p class="text-white-80 text-md-center mb-10 mb-md-12">
                    WordPress is a great CMS but it can become bloated and a maintenance nightmare for a simple sites.
                    Static site builders are fast but normally have a steep learning curve and require lots of tooling
                    to make them work. Building a personal site should be stupidly simple. That's why Saaze is
                    different.
                </p>

            </div>
        </div>
        <div class="row mt-n8 mt-md-n9" data-aos="fade-up" data-aos-delay="400">
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M12.374 19.939l5.849-8.773A.75.75 0 0017.599 10H13V4.477a.75.75 0 00-1.374-.416l-5.849 8.773A.75.75 0 006.401 14H11v5.523a.75.75 0 001.374.416z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Easy to run
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            PHP is used by 80% of all websites on the internet. So all you need to run Sazze is PHP (and
                            Composer).
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M3.5 21h17a1.5 1.5 0 001.5-1.5v-11A1.5 1.5 0 0020.5 7H10L7.44 4.44A1.5 1.5 0 006.378 4H3.5A1.5 1.5 0 002 5.5v14A1.5 1.5 0 003.5 21z"
                                    fill="#335EEA" opacity=".3" />
                                <path
                                    d="M10.875 16.75a.946.946 0 01-.67-.288l-1.918-1.916a.926.926 0 010-1.342c.384-.383 1.007-.383 1.342 0l1.246 1.246 3.162-3.162a.926.926 0 011.342 0 .926.926 0 010 1.341l-3.833 3.833a.946.946 0 01-.671.288z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Easy to host
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Serve your site with any PHP webserver. Or build a "static"
                            version of your site at deploy time.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <rect fill="#335EEA" x="4" y="5" width="16" height="3" rx="1.5" />
                                <path
                                    d="M5.5 15h13a1.5 1.5 0 010 3h-13a1.5 1.5 0 010-3zm0-5h7a1.5 1.5 0 010 3h-7a1.5 1.5 0 010-3z"
                                    fill="#335EEA" opacity=".3" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Easy to edit
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Edit your content using simple Markdown files + a sprinkle of Yaml metadata. Works great
                            with Git.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <rect fill="#335EEA" opacity=".3" x="14" y="4.7" width="3" height="3" rx="1.5" />
                                <path
                                    d="M6.828 15a8.59 8.59 0 0116.468-3.821C21.766 11.659 21 12.6 21 14h2.98a8.718 8.718 0 01.01 1H24v1.5a.5.5 0 01-.5.5H1a1 1 0 010-2h5.828z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Easy to theme
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            You don't need to learn another template language. Blade is just like PHP... but nicer.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M4 4l7.631-1.43a2 2 0 01.738 0L20 4v9.283a8.51 8.51 0 01-4 7.217l-3.47 2.169a1 1 0 01-1.06 0L8 20.5a8.51 8.51 0 01-4-7.217V4z"
                                    fill="#335EEA" opacity=".3" />
                                <path
                                    d="M11.175 14.75a.946.946 0 01-.67-.287l-1.917-1.917a.926.926 0 010-1.342c.383-.383 1.006-.383 1.341 0l1.246 1.246 3.163-3.162a.926.926 0 011.341 0 .926.926 0 010 1.341l-3.833 3.834a.946.946 0 01-.671.287z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Fast and secure
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            No database means less maintenance headaches, better security and more speed to boot.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M9 10v9l1.153.384a12 12 0 003.794.616h3.594a3 3 0 002.941-2.412l.75-3.746a3 3 0 00-3.142-3.581l-3.59.239.364-4.006A1.37 1.37 0 0013.5 5a2.65 2.65 0 00-2.272 1.286L9 10z"
                                    fill="#335EEA" />
                                <rect fill="#335EEA" opacity=".3" x="2" y="9" width="5" height="11" rx="1" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Simple to understand
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Sazze deliberately has a stupidly simple architecture. Everything is a collection of
                            entries.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M5.293 6.707a1 1 0 111.414-1.414l6 6a1 1 0 01.03 1.383l-5.5 6a1 1 0 11-1.474-1.352l4.853-5.294-5.323-5.323z"
                                    fill="#335EEA" />
                                <rect fill="#335EEA" opacity=".3" x="12" y="17" width="10" height="2" rx="1" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            All-inclusive
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Saaze comes with out-of-the-box CLI tools for serving and building your site. Nothing else
                            required.
                        </p>

                    </div>

                </div>

            </div>
            <div class="col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path d="M7 11h8a2 2 0 002-2V8h2v1a4 4 0 01-4 4H7v2a1 1 0 01-2 0V9a1 1 0 112 0v2z"
                                    fill="#335EEA" opacity=".3" />
                                <path
                                    d="M6 21a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 110-8 4 4 0 010 8zM18 7a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 110-8 4 4 0 010 8zM6 7a2 2 0 100-4 2 2 0 000 4zm0 2a4 4 0 110-8 4 4 0 010 8z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            Free &amp; Open
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Saaze is open source and open (MIT) licensed. Use it, abuse it, love it, eat it. We don't
                            care.
                        </p>

                    </div>

                </div>

            </div>
            <div class="d-none d-lg-block col-md-6 col-lg-4">

                <!-- Item -->
                <div class="d-flex mt-8 mt-md-9">

                    <!-- Icon -->
                    <div class="icon text-primary-light">
                        <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                                <path d="M0 0h24v24H0z" />
                                <path
                                    d="M21.982 8.19a.993.993 0 01-.468.667l-5 3A1 1 0 0116 12H8a1 1 0 01-.514-.143l-5-3a.993.993 0 01-.468-.668l-.999-4.993a1 1 0 011.962-.392l.633 3.168 2.679-2.68a1 1 0 011.414 1.415L4.613 7.801 8.277 10h7.446l3.664-2.199-3.094-3.094a1 1 0 111.414-1.414l2.679 2.679.633-3.168a1 1 0 011.962.392l-.999 4.993zm-6.93.704a1 1 0 01.895-1.788l3 1.5a1 1 0 01.067 1.751l-2.5 1.5A1 1 0 0116 12H8a1 1 0 01-.514-.143l-2.5-1.5a1 1 0 010-1.714l2.5-1.5a1 1 0 011.028 1.714l-1.07.643.833.5h7.446l.7-.42-1.37-.686z"
                                    fill="#335EEA" opacity=".3" />
                                <path
                                    d="M9.855 10h4.29a2 2 0 011.88 2.683l-2.683 7.377a1.428 1.428 0 01-2.683 0l-2.683-7.377A2 2 0 019.856 10z"
                                    fill="#335EEA" />
                            </g>
                        </svg>
                    </div>

                    <!-- Body -->
                    <div class="ml-5">

                        <!-- Title -->
                        <p class="font-size-lg font-weight-bold text-white mb-1">
                            One more thing
                        </p>

                        <!-- Text -->
                        <p class="font-size-sm text-white-60 mb-0">
                            Just kidding. I needed to put something here to complete the grid. Sorry about that.
                        </p>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="bg-dark">
    <div class="container-lg">
        <div class="row align-items-center" data-aos="fade-up">
            <div class="col-12">

                <!-- Divider -->
                <hr class="border-gray-900 mt-0 mb-8">

            </div>
            <div class="col-12 col-md">

                <!-- Heading -->
                <h2 class="h1 text-white mb-0">
                    Make your next site <span class="text-primary-light">sizzle</span>
                </h2>

                <!-- Text -->
                <p class="text-white-60 mb-4 mb-md-0">
                    Create a beautiful websites in hours, not weeks.
                </p>

            </div>
            <div class="col-auto">

                <!-- Button -->
                <a class="btn btn-primary lift" href="/docs/quick-start">
                    Get Started
                </a>

            </div>
            <div class="col-12">

                <!-- Divider -->
                <hr class="border-gray-900 mb-0 mt-8">

            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
<script>
    new TypeIt('#terminal', {
        speed: 50,
        waitUntilVisible: true
    })
        .type('<span class="caret">$</span> ', {speed: 0})
        .pause(2000)
        .type('composer create-project saaze/saaze mysite.com')
        .break()
        .type('<span class="caret">$</span> ', {speed: 0})
        .pause(1000)
        .type('cd mysite.com')
        .break()
        .type('<span class="caret">$</span> ', {speed: 0})
        .pause(1000)
        .type('php saaze serve')
        .pause(500)
        .exec(function() {
            var el = document.getElementById('preview');
            el.classList.add('show');
        })
        .go();
</script>
@endsection
