@extends('layouts.user')

@section('title', 'About Us - TechZone')

@section('content')
<div class="container py-5" style="max-width:820px;">

    <h4 class="fw-bold mb-1">About TechZone</h4>
    <p class="text-muted mb-4">Computer and gaming accessories, from Toraja Utara.</p>

    <div class="card border-0 shadow-sm" style="border-radius:12px;">
        <div class="card-body p-4">

            <p>
                TechZone is an online store for computer and gaming accessories based in
                Toraja Utara, Indonesia. We sell five categories of hardware: keyboards,
                mice, headsets, monitors, and storage.
            </p>

            <p class="mb-4">
                The store runs as a small operation. Every order is reviewed by hand before
                it ships, and we contact each customer directly to confirm stock, payment,
                and delivery. That is slower than an automated checkout, but it means no
                order sits unnoticed and no customer pays for something we cannot send.
            </p>

            <h6 class="fw-bold mb-2">What we sell</h6>
            <ul class="mb-4">
                <li><strong>Keyboards</strong> &mdash; mechanical, membrane, wireless, and laptop replacements</li>
                <li><strong>Mice</strong> &mdash; gaming, office, and silent wireless</li>
                <li><strong>Headsets</strong> &mdash; gaming, office, and studio monitoring</li>
                <li><strong>Monitors</strong> &mdash; office panels and high refresh-rate gaming displays</li>
                <li><strong>Storage</strong> &mdash; NVMe and SATA SSDs, hard drives, flash drives, RAM</li>
            </ul>

            <h6 class="fw-bold mb-2">How we work</h6>
            <ul class="mb-4">
                <li>Prices are listed in Indonesian Rupiah (Rp) and include no hidden fees.</li>
                <li>Products carry the manufacturer's official warranty.</li>
                <li>Orders are confirmed by our admin before payment, so you always know what you are buying.</li>
            </ul>

            <h6 class="fw-bold mb-2">Contact</h6>
            <p class="mb-0">
                <i class="bi bi-envelope me-2 text-primary"></i>chrismastian@icloud.com<br>
                <i class="bi bi-telephone me-2 text-primary"></i>+62 852 9827 8468<br>
                <i class="bi bi-geo-alt me-2 text-primary"></i>Toraja Utara, Sulawesi Selatan, Indonesia
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
