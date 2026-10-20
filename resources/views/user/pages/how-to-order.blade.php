@extends('layouts.user')

@section('title', 'How to Order - TechZone')

@section('content')
<div class="container py-5" style="max-width:820px;">

    <h4 class="fw-bold mb-1">How to Order</h4>
    <p class="text-muted mb-4">Four steps, no account needed.</p>

    <div class="card border-0 shadow-sm mb-3" style="border-radius:12px;">
        <div class="card-body p-4">

            <div class="d-flex gap-3 mb-4">
                <div class="fw-bold text-primary" style="font-size:1.4rem;">1</div>
                <div>
                    <h6 class="fw-bold mb-1">Pick your products</h6>
                    <p class="mb-0 text-muted">
                        Browse a category from the menu, or use the search bar. Open a product
                        page to see the price and photo, then press <strong>Add to Cart</strong>.
                    </p>
                </div>
            </div>

            <div class="d-flex gap-3 mb-4">
                <div class="fw-bold text-primary" style="font-size:1.4rem;">2</div>
                <div>
                    <h6 class="fw-bold mb-1">Review your cart</h6>
                    <p class="mb-0 text-muted">
                        The cart page shows every item, the quantity, and the subtotal. You can
                        change quantities or remove items before continuing.
                    </p>
                </div>
            </div>

            <div class="d-flex gap-3 mb-4">
                <div class="fw-bold text-primary" style="font-size:1.4rem;">3</div>
                <div>
                    <h6 class="fw-bold mb-1">Fill in the delivery details</h6>
                    <p class="mb-0 text-muted">
                        At checkout we ask for your full name, phone number, and address.
                        Email and a note are optional, but an email makes it easier for us to
                        send updates. Then press <strong>Place Order</strong>.
                    </p>
                </div>
            </div>

            <div class="d-flex gap-3">
                <div class="fw-bold text-primary" style="font-size:1.4rem;">4</div>
                <div>
                    <h6 class="fw-bold mb-1">We confirm, then ship</h6>
                    <p class="mb-0 text-muted">
                        You immediately get an order code on screen &mdash; save it. Our admin
                        contacts you using the phone number or email you gave, confirms stock,
                        and arranges payment and delivery. Order status then moves from
                        <span class="badge bg-warning text-uppercase">pending</span> to
                        <span class="badge bg-info text-uppercase">paid</span> and
                        <span class="badge bg-success text-uppercase">shipped</span>.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="card border-0 shadow-sm" style="border-radius:12px;">
        <div class="card-body p-4">
            <h6 class="fw-bold mb-2">Good to know</h6>
            <ul class="mb-0">
                <li>No payment is taken on this website. Payment is arranged with our admin after confirmation.</li>
                <li>All prices are in Indonesian Rupiah (Rp).</li>
                <li>Keep your order code &mdash; it is the fastest way for us to find your order.</li>
                <li>Questions before ordering? Email <a href="mailto:chrismastian@icloud.com">chrismastian@icloud.com</a> or call +62 852 9827 8468.</li>
            </ul>
        </div>
    </div>

    <div class="mt-4 d-flex gap-2">
        <a href="{{ route('user.home') }}" class="btn btn-primary btn-sm" style="border-radius:8px;">
            <i class="bi bi-bag me-1"></i> Start shopping
        </a>
        <a href="{{ route('page.about') }}" class="btn btn-outline-primary btn-sm" style="border-radius:8px;">
            About TechZone
        </a>
    </div>

</div>
@endsection
