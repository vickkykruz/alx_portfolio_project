@extends('layouts.index')
@section('index')
    <section id="contact" class="py-12 mt-10 md:py-24">
        <div class="container mx-auto">
            <div class="text-center">
                <h2 class="mb-6 md:mb-12 text-2xl md:text-4xl text-gray-700 font-bold tracking-wide animate__animated animate__fadeInDown" data-wow-delay="0.3s">Contact</h2>
            </div>

            <div class="flex flex-wrap contact-form-area animate__animated animate__fadeInUp" data-wow-delay="0.4s">
                <div class="w-full md:w-1/2">
                    <div class="contact">
                        <h2 class="uppercase font-bold text-lg md:text-xl text-gray-700 mb-3 md:mb-5 ml-3">Contact Form</h2>
                        <form id="contactForm" action="assets/contact.php">
                            <div class="flex flex-wrap">
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3 mb-3">
                                        <input type="text" class="w-full form-input rounded-full" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                    </div>
                                </div>
                                <div class="w-full sm:w-1/2 md:w-full lg:w-1/2">
                                    <div class="mx-3 mb-3">
                                        <input type="text" placeholder="Email" id="email" class="w-full form-input rounded-full" name="email" required data-error="Please enter your email">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3 mb-3">
                                        <input type="text" placeholder="Subject" id="subject" name="subject" class="w-full form-input rounded-full" required data-error="Please enter your subject">
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="mx-3 mb-3">
                                        <textarea class="w-full form-input rounded-lg" id="message" name="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                                    </div>
                                </div>
                                <div class="w-full">
                                    <div class="submit-button mx-3">
                                        <button class="inline-flex justify-center items-center py-3 px-6 md:px-10 text-base font-extrabold text-center text-white rounded-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300" id="form-submit" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-full md:w-1/2 md:mt-10">
                    <div class="ml-3 md:ml-6 animate__animated animate__fadeIn">
                        <h2 class="uppercase font-bold text-lg md:text-xl text-gray-700 mb-3 md:mb-5">Get In Touch</h2>
                        <div>
                            <div class="flex flex-wrap mb-4 md:mb-6 items-center">
                                <div class="contact-icon bg-blue-600 px-2 py-2 rounded-full">
                                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 14h0a7 7 0 1 0-11.5 0h0l.1.3.3.3L12 21l5.1-6.2.6-.7.1-.2Z"/>
                                    </svg>
                                </div>
                                <p class="pl-3">P.O Box 12232, Opposite Daniel RD, Ikeja. Lagos State. </p>
                            </div>
                            <div class="flex flex-wrap mb-4 md:mb-6 items-center">
                                <div class="bg-blue-600 px-2 py-2 rounded-full">
                                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.9 6c.4.3.8.3 1.2 0l7.9-6M4 19h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Z"/>
                                    </svg>
                                </div>
                                <p class="pl-3">
                                    <a href="#" class="block">support@shime.com</a>
                                    <a href="#" class="block">info@shine.com</a>
                                </p>
                            </div>
                            <div class="flex flex-wrap items-center">
                                <div class="bg-blue-600 px-2 py-2 rounded-full">
                                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m18.4 14.8-1.2-1.3a1.7 1.7 0 0 0-2.4 0l-.7.7a1.7 1.7 0 0 1-2.4 0l-1.9-1.9a1.7 1.7 0 0 1 0-2.4l.7-.6a1.7 1.7 0 0 0 0-2.5L9.2 5.6a1.6 1.6 0 0 0-2.4 0c-3.2 3.2-1.7 6.9 1.5 10 3.2 3.3 7 4.8 10.1 1.6a1.6 1.6 0 0 0 0-2.4Z"/>
                                    </svg>
                                </div>
                                <p class="pl-3">
                                    <a href="#" class="block">+42 374 5967</a>
                                    <a href="#" class="block">+99 123 5967</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section Start -->
    <section id="google-map-area">
        <div class="mx-6 mb-6">
        <div class="flex">
            <div class="w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        </div>
    </section>
  <!-- Map Section End -->
@endsection
