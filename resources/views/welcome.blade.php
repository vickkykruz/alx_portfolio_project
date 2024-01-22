@extends('layouts.index')
@section('index')
    <!-- Hero Area Start -->
    <section id="hero-area" class="bg-blue-100 pt-48 pb-10">
        <div class="container">
            <div class="flex justify-between">
                <div class="w-full text-center">
                    <h2 class="text-4xl font-bold leading-snug text-gray-700 mb-10 wow fadeInUp" data-wow-delay="1s">Let's showcase your professional expertise
                        <br class="hidden lg:block"> On a global scale.
                    </h2>
                    <div class="text-center mb-10 wow fadeInUp" data-wow-delay="1.2s">
                        <a href="#" rel="nofollow" class="btn">Get Started</a>
                    </div>
                    <div class="text-center wow fadeInUp" data-wow-delay="1.6s">
                        <img class="img-fluid mx-auto" src="{{ asset('build/assets/images/hero.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Area End -->
@endsection
