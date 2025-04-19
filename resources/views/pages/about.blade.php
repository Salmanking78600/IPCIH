@extends('layout.layout')

@section('title', 'About - IPCIH')

@section('content')
    <section class="about-section" style="background: linear-gradient(135deg, rgba(39, 136, 0, 0.85), rgba(0, 0, 0, 0.85)); color: white; padding: 60px 0; position: relative; margin-top: 60px;">
        <div class="container">
            <!-- Heading Section -->
            <div class="row text-center mb-5">
                <div class="col-md-12">
                    <h1 class="display-4 mb-3">About the International Peace Committee for Interfaith Harmony</h1>
                    <p class="lead">Promoting Peace and Harmony Across Diverse Communities</p>
                </div>
            </div>

            <!-- Brief about Organization -->
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="section-title mb-4">Brief About the Organization</h2>
                    <p>The International Peace Committee for Interfaith Harmony (IPCIH) is dedicated to advancing peace and fostering interfaith harmony across diverse communities. Through its initiatives, IPCIH aims to bridge the gaps between religious communities and promote mutual respect and understanding.</p>
                    <p>We believe in creating a peaceful environment where every individual, regardless of faith or beliefs, can live in harmony with others.</p>
                </div>
            </div>

            <!-- Type & Nature of the Organization -->
            <div class="row mb-5">
                <!-- Type & Nature of the Organization -->
                <div class="col-md-6 text-center">
                    <i class="fas fa-users fa-3x mb-3" style="color: #fff;"></i>
                    <h3 class="mb-3">Type & Nature of the Organization</h3>
                    <p>IPCIH is a non-profit, non-political, and non-sectarian organization dedicated to the public good, focusing on peacebuilding, conflict resolution, and advocacy for social cohesion.</p>
                </div>
            
                <!-- Collaboration & Engagement -->
                <div class="col-md-6 text-center">
                    <i class="fas fa-handshake fa-3x mb-3" style="color: #fff;"></i>
                    <h3 class="mb-3">Collaboration & Engagement</h3>
                    <p>IPCIH works in collaboration with religious leaders, civil society, and government entities to create a culture of respect and understanding that promotes peace in the region.</p>
                </div>
            </div>
            

            <!-- Vision and Mission -->
            <div class="row mb-5">
                <div class="col-md-6 text-center">
                    <i class="fas fa-eye fa-3x mb-3" style="color: #fff;"></i>
                    <h3>Vision</h3>
                    <p>Our vision is to create a world where diverse religious and cultural communities coexist peacefully, respecting each other's beliefs, and resolving conflicts through dialogue and understanding.</p>
                </div>
                <div class="col-md-6 text-center">
                    <i class="fas fa-bullseye fa-3x mb-3" style="color: #fff;"></i>
                    <h3>Mission</h3>
                    <p>Our mission is to foster peace by promoting interfaith understanding, bridging divides, and advocating for policies that support social harmony and tolerance across religious and cultural communities.</p>
                </div>
            </div>

            <!-- Goals Section -->
            <div class="row mt-5">
                <div class="col-md-12 text-center mb-4">
                    <h2 class="section-title mb-3">Our Goals</h2>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-comments fa-3x mb-3" style="color: #fff;"></i>
                    <h4>Promote Interfaith Dialogue</h4>
                    <p>Facilitate open and constructive dialogues to foster mutual respect and cooperation between different communities.</p>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-handshake fa-3x mb-3" style="color: #fff;"></i>
                    <h4>Reduce Religious Conflicts</h4>
                    <p>Address and resolve religious conflicts to prevent violence and promote peaceful coexistence among diverse groups.</p>
                </div>
                <div class="col-md-4 text-center mb-3">
                    <i class="fas fa-graduation-cap fa-3x mb-3" style="color: #fff;"></i>
                    <h4>Educate and Raise Awareness</h4>
                    <p>Develop and deliver educational programs that emphasize the importance of tolerance, respect, and interfaith harmony.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="row text-center mt-5">
                <div class="col-md-12">
                    <a href="#contact" class="btn btn-light btn-lg" style="border-radius: 25px;">Join Us in Promoting Peace</a>
                </div>
            </div>
        </div>
    </section>
@endsection
