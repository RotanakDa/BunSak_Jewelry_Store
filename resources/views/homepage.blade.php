
@extends('layout.share_layout')
@section('content')

    <!-- Main Section -->
    <section class="features-section">
        <div class="features">
            <div class="feature-item">
                <i class="icon-airplane"></i>
                <h4>Free Shipping</h4>
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="feature-item">
                <i class="icon-support"></i>
                <h4>Support 24/7</h4>
                <p>Lorem ipsum dolor sit</p>
            </div>
            <div class="feature-item">
                <i class="icon-secure"></i>
                <h4>100% Payment Secure</h4>
                <p>Lorem ipsum dolor sit</p>
            </div>
        </div>
    </section>
    
    <section class="products-section">
        <div class="products-grid">
            <div class="product-item large" style=" width:1500px; height: 500px;">
                <img src="/images/wedding_ring.png" alt="Wedding Ring">
                <div class="product-info">
                    <h4>Beautiful Wedding Ring</h4>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
            <div class="product-item small">
                <img src="/images/wedding_ring.png" alt="Earrings Floary">
                <div class="product-info">
                    <h4>Earrings Floary</h4>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
            <div class="product-item small">
                <img src="/images/wedding_ring.png" alt="Pearl Necklaces">
                <div class="product-info">
                    <h4>New Arrivals Pearl Necklaces</h4>
                    <a href="#" class="shop-now-btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection