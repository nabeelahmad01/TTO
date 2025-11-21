@extends('frontend.layouts.master')

@section('title', 'Home - Welcome')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to Your Website</h1>
            <p class="hero-subtitle">This is your frontend homepage with beautiful design</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Get Started</a>
                <a href="#" class="btn btn-secondary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <h2 class="section-title">Our Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🚀</div>
                <h3>Fast Performance</h3>
                <p>Lightning fast load times and optimized performance</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Beautiful Design</h3>
                <p>Modern and clean user interface design</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Secure</h3>
                <p>Enterprise-level security and data protection</p>
            </div>
        </div>
    </div>
</section>
@endsection
