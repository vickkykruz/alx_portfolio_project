@extends('layouts.index')
@section('index')
    {{-- HERO AREA SECTION START --}}
    <section class="bg-blue-100 pt-48 pb-10">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-4xl lg:text-5xl leading-loose">Let's showcase your professional expertise <br> on a <mark class="px-2  text-white bg-blue-400 rounded">GLOBAL SCALE.</mark></h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Here at Shine we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Learn more
                </a>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center space-y-4 sm:space-y-0">
                <img class="img-fluid mx-auto sm:mx-0" src="{{ asset('build/assets/images/hero.svg') }}" alt="">
            </div>
        </div>
    </section>
    {{-- HERO AREA SECTION END --}}

    {{-- SERVICES SECTION START --}}
    <section class="services_area mt-20 mb-20" id="about">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="text-2xl text-blue-900 font-extrabold">What We Do?</h5>
                        <h4 class="text-4xl text-gray-600 font-extrabold">Our Services</h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- flex -->
            <div class="flex flex-wrap justify-center">
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4 animate__animated animate__fadeInLeft animate__delay-5s">
                    <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                        <div class="services_icon flex justify-center items-center relative">
                            <!-- Search SVG -->
                            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 md:w-10 md:h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>

                            <!-- Polygon 12 SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12"  data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                            </svg>
                        </div>

                        <div class="services_content mt-5">
                            <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Career Exploration</h3>
                            <p class="mt-3 md:mt-5">Get a job that suits your career or qualification by engaging in our job listing features</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <!-- Repeat similar structure for other service items -->
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4 animate__animated animate__fadeInDown animate__delay-5s">
                    <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                        <div class="services_icon flex justify-center items-center relative">
                            <!-- Search SVG -->
                            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 md:w-10 md:h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>

                            <!-- Polygon 12 SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12"  data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                            </svg>
                        </div>

                        <div class="services_content mt-5">
                            <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Real-time Interview</h3>
                            <p class="mt-3 md:mt-5">Stay connected with fellow recruiters, employees, and organizations around the globe.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <!-- Repeat similar structure for other service items -->
                <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4 animate__animated animate__fadeInRight animate__delay-5s">
                    <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                        <div class="services_icon flex justify-center items-center relative">
                            <!-- Search SVG -->
                            <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-8 h-8 md:w-10 md:h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 11.5 11 13l4-3.5M12 20A16.4 16.4 0 0 1 5 6.7L12 4l7 2.7A16.7 16.7 0 0 1 12 20Z"/>
                            </svg>

                            <!-- Polygon 12 SVG -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                <path class="services_shape" id="Polygon_12"  data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                            </svg>
                        </div>

                        <div class="services_content mt-5">
                            <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Community Growth</h3>
                            <p class="mt-3 md:mt-5">Join the community space where we share innovative ideas and problem-solving solutions among members.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <!-- Repeat similar structure for other service items -->
            </div> <!-- flex -->
        </div> <!-- container -->
    </section>
    {{-- SERVICES SECTION END --}}

    {{-- ABOUT SECTION START --}}
    <section id="why" class="about_area pt-24 lg:pt-48 relative bg-gray-100 pb-5">
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="lg:w-1/2 flex justify-center lg:justify-start">
                    <div class="about_content mx-4 pt-8 lg:pt-11 lg:pb-15 lg:pl-20">
                        <div class="section_title pb-5 lg:pb-9">
                            <h5 class="text-xl lg:text-2xl text-blue-900 font-extrabold">Why Choose Us?</h5>
                            <h4 class="text-2xl lg:text-4xl text-gray-600 font-extrabold">Your Mission is Our Commitment.</h4>
                        </div> <!-- section title -->
                        <p class="text-sm lg:text-base font-medium leading-normal">Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus. </p>
                        <ul class="about_list pt-3">
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">Dvero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
                <div class="lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="about_image lg:pr-13">
                        <div class="image">
                            <img src="{{ asset('build/assets/images/svg/about.svg') }}" alt="about">
                        </div>
                    </div> <!-- about image -->
                </div>
            </div> <!-- flex -->

            <div class="flex flex-col lg:flex-row items-center justify-between mt-10 lg:mt-24">
                <div class="lg:w-1/2 flex justify-center lg:justify-start">
                    <div class="about_image lg:pl-13">
                        <div class="image">
                            <img src="{{ asset('build/assets/images/svg/img_1.svg') }}" alt="about">
                        </div>
                    </div> <!-- about image -->
                </div>
                <div class="lg:w-1/2 flex justify-center lg:justify-end">
                    <div class="about_content mx-4 pt-8 lg:pt-11 lg:pb-15 lg:pr-20">
                        <div class="section_title pb-5 lg:pb-9">
                            <h5 class="text-xl lg:text-2xl text-blue-900 font-extrabold">What We Intend To Do.</h5>
                            <h4 class="text-2xl lg:text-4xl text-gray-600 font-extrabold">Your Vision Is Our Dedicated Partnership.</h4>
                        </div> <!-- section title -->
                        <p class="text-sm lg:text-base font-medium leading-normal">Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus. </p>
                        <ul class="about_list pt-3">
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                            <li class="flex mt-4 lg:mt-5">
                                <div class="about_check">
                                    <svg class="w-5 lg:w-6 h-5 lg:h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm13.7-1.3a1 1 0 0 0-1.4-1.4L11 12.6l-1.8-1.8a1 1 0 0 0-1.4 1.4l2.5 2.5c.4.4 1 .4 1.4 0l4-4Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <div class="about_list_content pl-3 lg:pl-5 pr-2">
                                    <p class="text-xs lg:text-sm">Dvero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- about content -->
                </div>
            </div> <!-- flex -->
        </div> <!-- container -->
    </section>
    {{-- aBOUT SECTION END --}}

    {{-- BLOG SECTION START --}}
    <section id="blog" class="blog_area mt-20 mb-20">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full lg:w-1/2">
                    <div class="section_title text-center pb-6">
                        <h5 class="text-2xl lg:text-3xl text-blue-900 font-extrabold">Blog</h5>
                        <h4 class="text-4xl lg:text-5xl text-gray-600 font-extrabold">Latest Happens Here</h4>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="w-full">
                    <div class="single_blog mx-auto lg:mx-3 mt-8 rounded-xl bg-white transition duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('build/assets/images/blog/blog1.avif') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="w-full">
                    <div class="single_blog mx-auto lg:mx-3 mt-8 rounded-xl bg-white transition duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('build/assets/images/blog/blog2.avif') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
                <div class="w-full">
                    <div class="single_blog mx-auto lg:mx-3 mt-8 rounded-xl bg-white transition duration-300 overflow-hidden hover:shadow-lg">
                        <div class="blog_image">
                            <img src="{{ asset('build/assets/images/blog/blog3.avif') }}" alt="blog" class="w-full">
                        </div>
                        <div class="blog_content p-4 md:p-5">
                            <ul class="blog_meta flex justify-between">
                                <li class="text-body-color text-sm md:text-base">By: <a href="#" class="text-body-color hover:text-theme-color">Musharof Chowdury</a></li>
                                <li class="text-body-color text-sm md:text-base">15 June 2024</li>
                            </ul>
                            <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                            <a href="#" class="more_btn">Read More</a>
                        </div>
                    </div> <!-- row -->
                </div>
            </div> <!-- grid -->
        </div> <!-- container -->
    </section>
    {{-- BLOG SECTION END  --}}

@endsection
