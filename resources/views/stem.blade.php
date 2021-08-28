@extends('layout.main')
@section('title', 'Web')

{{-- @yield('container') --}}

@section('container')
<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Tune your guitar</h1>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Stem</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin about Area -->
    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2 class="about-title">How to tune up?</h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1>Tuning Gitar <button class="btn btn-pronia-primary"> Start</button></h1>
                    <div class="contact-wrap mt-4 mb-2">

                        <form id="contact-form" class="contact-form">
                            <h2 class="text-warning" style="margin-top: -.5em">Key Input</h2>
                            <hr>
                        </form>
                        <div class="contact-info text-white" data-bg-image="assets/images/banner/5-1-1980-1080.jpg"
                            style="background-image: url(&quot;assets/images/banner/5-1-1980-1080.jpg&quot;);">
                            <h2 class="contact-title">Response</h2>
                            <hr>
                            <ul class="contact-list">
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> C </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> D </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> E </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> F </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> G </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">Tuned</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> A </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">...</p>
                                </li>
                                <li style="margin-bottom: -1em">
                                    <p class="btn btn-outline-success text-success" style="border-radius: 9em"> B </p>
                                    &nbsp;&nbsp;
                                    <p class="fs-3 fw-bold">...</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area section-space-top-95 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap p-4">
                        <h3>Ikut berpartisipasi dengan upload chord dengan variasimu sekarang!</h3>
                        &nbsp;&nbsp;
                        <a href="{{ url('/stemadd') }}" class="text-right btn btn-pronia-primary"> Mulai!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End about Area -->

</main>
@endsection
