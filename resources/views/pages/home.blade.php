@extends('layout.layout')

@section('title', 'Home - IPCIH')

@section('content')
    <div class="container-fluid p-0">
        <!-- Swiper Slider -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="swiper-slide-image" style="background-image: url('{{ asset('webimages/sliderone.jpeg') }}');">
                    </div>
                    <div class="overlay-content" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                        <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">IDEAS PAKISTAN</h1>
                        <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                            DEPO works as a facilitation agency for all international customers.
                        </p>
                        <h3 data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                            Partnered organization of Defence Export Promotion Organization (DEPO)
                        </h3>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="swiper-slide-image"
                        style="background-image: url('{{ asset('webimages/slidertwo.jpeg') }}');"></div>
                    <div class="overlay-content" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                        <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                            Defence Export Promotion Organization (DEPO)
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                            International Defence Exhibition and Seminar (IDEAS)
                        </p>
                        <h3 data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                            Official Partners of IDEAS PAKISTAN
                        </h3>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="swiper-slide-image"
                        style="background-image: url('{{ asset('webimages/sliderthree.jpeg') }}');"></div>
                    <div class="overlay-content" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                        <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                            IPCIH PAKISTAN
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                            In our pursuit of peace, we champion human rights, uphold the rule of law, etc.
                        </p>
                        <h3 data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                            Let's Make the Nation Peaceful
                        </h3>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="swiper-slide-image"
                        style="background-image: url('{{ asset('webimages/sliderfour.jpeg') }}');"></div>
                    <div class="overlay-content" data-aos="fade-in" data-aos-delay="300" data-aos-duration="1500">
                        <h1 data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                            Interfaith Harmony
                        </h1>
                        <p data-aos="fade-up" data-aos-delay="500" data-aos-duration="1200">
                            Peace through Interfaith Harmony
                        </p>
                        <h3 data-aos="fade-up" data-aos-delay="600" data-aos-duration="1200">
                            IPCIH PAKISTAN is Bridging Faiths for a Harmonious Future
                        </h3>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>


    </div>
    {{-- ipcih introduciton area  --}}
    <section class="ipcih-intro-section container py-5">
        <!-- Title and Description -->
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="toptextinfo fw-bold text-uppercase display-5" style="letter-spacing: 2px; color: #ffffff;">
                <i class="fas fa-dove me-2"></i>IPCIH Introduction
            </h2>
            {{-- <p class="mt-3 mx-auto" style="max-width: 750px;">
                Learn more about the <strong>International Peace Committee for Interfaith Harmony (IPCIH)</strong> – a key force for peace and unity across religious communities since 2010.
            </p> --}}
        </div>

        <!-- Content Box -->
        <div class="introinfo shadow-lg rounded-4 overflow-hidden" data-aos="zoom-in-up" data-aos-duration="1200">
            <div class="row g-0 align-items-stretch">
                <!-- Left: Image -->
                <div class="col-lg-4 col-md-5 d-flex align-items-center justify-content-center p-4">
                    <div class="img-wrapper">
                        <img src="{{ asset('webimages/ipcihlogo.png') }}" alt="Organization Logo" class="img-fluid">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="col-lg-8 col-md-7 p-4 p-md-5 text-white">
                    <h4 class="fw-bold mb-3">
                        <i class="fas fa-handshake-angle me-2"></i>Our Mission
                    </h4>
                    <p style="text-align: justify;">
                        <strong>International Peace Committee for Interfaith Harmony (IPCIH)</strong> was established in
                        2010. It functions as a specialized body within the government, tasked with promoting peace and
                        fostering interfaith harmony across the region.
                    </p>
                    <p style="text-align: justify;">
                        IPCIH is dedicated to fostering peace and promoting interfaith harmony in the region. With a mission
                        to bridge divides and build understanding among diverse religious communities, IPCIH plays a vital
                        role in nurturing a culture of respect, tolerance, and mutual coexistence.
                    </p>
                    <p style="text-align: justify;">
                        Through various initiatives, dialogues, and collaborative efforts, the committee works to address
                        conflicts, reduce tensions, and create a peaceful environment where all faiths are valued and
                        celebrated. IPCIH is committed to ensuring that harmony and peace remain at the forefront of
                        regional development and social progress, contributing to a more united and inclusive society.
                    </p>
                </div>
            </div>
        </div>
    </section>



    {{-- our core programs area  --}}
    <div class="core-program-container py-5">
        <h2 class="core-program-heading text-center mb-5 text-white">Our Core Programs</h2>
    
        <div class="swiper coreProgramSwiper px-2">
            <div class="swiper-wrapper">
                @foreach ($programs as $program)
                    <div class="swiper-slide">
                        <div class="card program-card position-relative overflow-hidden border-0 shadow-lg rounded-4"
                            style="height: 350px; background: linear-gradient(135deg, #0f9b0f, #000000);">
                            
                            <!-- Image -->
                            @if ($program->image)
                                <img src="{{ asset('storage/' . $program->image) }}" class="card-img-top program-image"
                                    alt="{{ $program->title }}">
                            @else
                                <img src="{{ asset('default-image.jpg') }}" class="card-img-top program-image"
                                    alt="{{ $program->title }}">
                            @endif
    
                            <!-- Title -->
                            <div class="card-body text-white">
                                <h5 class="card-title fw-bold">{{ $program->title }}</h5>
                            </div>
    
                            <!-- Description Overlay -->
                            <div
                                class="program-overlay position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-center text-center px-3">
                                <p class="text-white">{{ \Str::limit($program->description, 150) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    


<style>
    .program-card {
    position: relative;
    height: 300px !important;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.program-card:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(0, 255, 150, 0.3);
}

.program-image {
    height: 200px;
    object-fit: cover;
    width: 100%;
    border-radius: 0.5rem;
}

.program-overlay {
    background: linear-gradient(135deg, rgba(39, 136, 0, 0.85), rgba(0, 128, 0, 0.85));
    opacity: 0;
    transition: opacity 0.3s ease;
    border-radius: 1rem;
}

.program-card:hover .program-overlay {
    opacity: 1;
}

.card-title, .card-text {
    color: white !important;
    text-transform: capitalize; /* Capitalize the first letter of each word */
}

.core-program-container {
    background-color: #2a2a2a;
    padding: 2rem 0;
}

.core-program-heading {
    font-size: 2rem;
    font-weight: bold;
    color: white;
    margin-bottom: 30px;
}

.swiper.coreProgramSwiper {
    padding-left: 10px;
    padding-right: 10px;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    border: 0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

.card-body {
    padding: 1.25rem;
}

.card-title {
    text-transform: capitalize;
    font-size: 1.1rem;
    font-weight: bold;
}

.card-text {
    font-size: 0.9rem;
    color: white;
    text-transform: capitalize;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.program-card:hover .card-title,
.program-card:hover .card-text {
    color: white; /* Make sure text is white on hover */
}

</style>



    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1200, // Set the duration for animations to 1.2 seconds
            once: true, // Ensure animations happen only once (on first scroll)
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
                autoplay: {
                    delay: 5000, // 3 seconds
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
    </script>
    <script>
        var swiper = new Swiper(".coreProgramSwiper", {
            slidesPerView: 4,
            spaceBetween: 20,
            autoplay: {
                delay: 3000, // 3 seconds
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1024: {
                    slidesPerView: 4
                },
                768: {
                    slidesPerView: 3
                },
                640: {
                    slidesPerView: 2
                },
                0: {
                    slidesPerView: 1
                },
            },
        });
    </script>

@endsection
