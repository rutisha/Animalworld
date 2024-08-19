@extends('layouts.user')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Welcome to Animal World</h1>
    <p class="text-center">Your ultimate destination for discovering and learning about animals and their lifespan.</p>

    <section class="hero-section mt-5">
        <div class="text-center">
            <h2>Explore the Animal Kingdom</h2>
            <p>Discover a wide variety of animals and learn about their unique lifespans.</p>
            <a href="#featured" class="btn btn-primary">Explore Now</a>
        </div>
    </section>

    <section id="featured" class="featured-animals mt-5">
        <h2 class="text-center">Featured Animals</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">African Elephant</h5>
                        <p class="card-text">The largest land animal, known for its intelligence and long lifespan.</p>
                        <a href="/user/animals" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bald Eagle</h5>
                        <p class="card-text">A symbol of freedom, known for its sharp vision and impressive wingspan.</p>
                        <a href="/user/animals" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Giant Tortoise</h5>
                        <p class="card-text">A remarkable creature with one of the longest lifespans in the animal kingdom.</p>
                        <a href="/user/animals" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials mt-5">
        <h2 class="text-center">What Our Visitors Say</h2>
        <div class="row">
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"Animal World is a fantastic resource for learning about different species and their lifespans."</p>
                    <footer class="blockquote-footer">Dr. Sarah Johnson, Wildlife Biologist</footer>
                </blockquote>
            </div>
            <div class="col-md-6">
                <blockquote class="blockquote">
                    <p>"A great place to explore and appreciate the diversity of life on our planet."</p>
                    <footer class="blockquote-footer">Mark Robinson, Nature Enthusiast</footer>
                </blockquote>
            </div>
        </div>
    </section>
    
</div>
@endsection
