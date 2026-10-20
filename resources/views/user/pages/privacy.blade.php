@extends('layouts.user')

@section('title', 'Privacy Policy - TechZone')

@section('content')
<div class="container py-5" style="max-width:820px;">

    <h4 class="fw-bold mb-1">Privacy Policy</h4>
    <p class="text-muted mb-4">What we collect when you order, and what we do with it.</p>

    <div class="card border-0 shadow-sm" style="border-radius:12px;">
        <div class="card-body p-4">

            <h6 class="fw-bold mb-2">What we collect</h6>
            <p>When you place an order, we store only what is needed to fulfil it:</p>
            <ul>
                <li>Full name</li>
                <li>Phone number</li>
                <li>Delivery address</li>
                <li>Email address (optional)</li>
                <li>Order note (optional)</li>
                <li>The products, quantities, and prices in your order</li>
            </ul>
            <p class="mb-4">
                We do not ask for, and never store, card numbers, bank credentials, or
                passwords for payment services. Payment is arranged directly with our admin.
            </p>

            <h6 class="fw-bold mb-2">Why we collect it</h6>
            <ul class="mb-4">
                <li>To confirm your order and its price</li>
                <li>To contact you about stock, payment, and delivery</li>
                <li>To deliver the order to the right address</li>
            </ul>

            <h6 class="fw-bold mb-2">Cookies and sessions</h6>
            <p class="mb-4">
                This site uses one session cookie to remember your cart between pages. The cart
                holds product IDs and quantities only. Clear the cart, or let the session expire,
                and the data is gone. We run no advertising or tracking scripts on this site.
            </p>

            <h6 class="fw-bold mb-2">Who can see your data</h6>
            <p class="mb-4">
                Order details are visible only to the store admin, who is logged in behind
                authentication. We do not sell, rent, or share your data with third parties
                for marketing.
            </p>

            <h6 class="fw-bold mb-2">How long we keep it</h6>
            <p class="mb-4">
                Order records are kept for as long as needed to handle the transaction and any
                follow-up about it. Ask us and we will delete your order data, unless we are
                required to keep the record.
            </p>

            <h6 class="fw-bold mb-2">Your requests</h6>
            <p class="mb-0">
                To see, correct, or delete the data we hold about you, email
                <a href="mailto:chrismastian@icloud.com">chrismastian@icloud.com</a> with your
                order code. We answer from the same address.
            </p>

        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('user.home') }}" class="btn btn-outline-primary btn-sm" style="border-radius:8px;">
            <i class="bi bi-arrow-left me-1"></i> Back to the store
        </a>
    </div>

</div>
@endsection
