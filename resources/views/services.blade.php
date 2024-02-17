@extends('layouts.index')
@section('index')
        {{-- SERVICES SECTION START --}}
        {{-- <section class="services_area mt-20 mb-20" id="about">
            <div class="container mx-auto">
                <div class="flex justify-center">
                    <div class="w-full lg:w-1/2">
                        <div class="section_title text-center pb-6">
                            <h5 class="text-2xl text-blue-900 font-extrabold">About</h5>
                            <h4 class="text-4xl text-gray-600 font-extrabold">Work Process</h4>
                        </div> <!-- section title -->
                    </div>
                </div> <!-- flex -->
                <div class="flex justify-center">
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                            <div class="services_icon flex justify-center items-center relative">
                                <!-- Search SVG -->
                                <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                                </svg>

                                <!-- Polygon 12 SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12"  data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                                </svg>
                            </div>

                            <div class="services_content mt-5">
                                <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Career Exploration</h3>
                                <p class="mt-5">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                            <div class="services_icon flex justify-center items-center relative">
                                <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4c.6 0 1-.4 1-1v-1a3 3 0 0 0-3-3h-2m-2.2-4A3 3 0 0 0 19 8a3 3 0 0 0-5.2-2M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Real-time Interview</h3>
                                <p class="mt-5">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12">
                        <div class="group single_services text-center mt-8 mx-3 p-10 border-4 border-dotted border-gray-300 rounded-lg cursor-pointer hover:border-blue-900">
                            <div class="services_icon flex justify-center items-center relative">
                                <svg class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-10 h-10 text-gray-800 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.5 11.5 11 13l4-3.5M12 20A16.4 16.4 0 0 1 5 6.7L12 4l7 2.7A16.7 16.7 0 0 1 12 20Z"/>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                                    <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" fill="#dbeafe" />
                                </svg>
                            </div>
                            <div class="services_content mt-5">
                                <h3 class="services_title text-gray-700 mt-10 font-semibold text-xl md:text-3xl">Community Growth</h3>
                                <p class="mt-5">Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                            </div>
                        </div> <!-- single services -->
                    </div>
                </div> <!-- flex -->
            </div> <!-- container -->
        </section> --}}

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
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4">
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
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4">
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
                    <div class="w-full sm:w-10/12 md:w-6/12 lg:w-4/12 mb-4">
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
@endsection
