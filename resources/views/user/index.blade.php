@extends('layouts.user')

@section('title', 'Home - TechZone')

@section('content')

{{-- ─── HERO BANNER ─── --}}
<section class="hero-banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <p class="mb-2" style="opacity:.75; font-size:.85rem; text-transform:uppercase; letter-spacing:.1em">
                    Computer & Gaming Accessories
                </p>
                <h1>Find the Best Gear<br>for Your Setup</h1>
                <p class="mb-3">Keyboards, mice, headsets, monitors, and storage from trusted brands at fair prices.</p>

                {{-- Category pills --}}
                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a href="{{ route('user.category', 'keyboard') }}" class="category-pill">
                        <i class="bi bi-keyboard"></i> Keyboard
                    </a>
                    <a href="{{ route('user.category', 'mouse') }}" class="category-pill">
                        <i class="bi bi-mouse"></i> Mouse
                    </a>
                    <a href="{{ route('user.category', 'headset') }}" class="category-pill">
                        <i class="bi bi-headset"></i> Headset
                    </a>
                    <a href="{{ route('user.category', 'monitor') }}" class="category-pill">
                        <i class="bi bi-display"></i> Monitor
                    </a>
                    <a href="{{ route('user.category', 'storage') }}" class="category-pill">
                        <i class="bi bi-device-hdd"></i> Storage
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-flex justify-content-end">
                <div style="font-size: 8rem; opacity:.25;">
                    <i class="bi bi-laptop"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container pb-5">

    {{-- ─── KEYBOARD ─── --}}
    @if($keyboards->count())
    <section class="mb-5">
        <div class="section-heading">
            <h4><i class="bi bi-keyboard text-primary"></i> Keyboard</h4>
            <a href="{{ route('user.category', 'keyboard') }}">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
            @foreach($keyboards as $product)
            <div class="col-6 col-md-4 col-lg-3">
                @include('user.partials.product-card', [
                    'product'  => $product,
                    'category' => 'keyboard'
                ])
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ─── MOUSE ─── --}}
    @if($mouses->count())
    <section class="mb-5">
        <div class="section-heading">
            <h4><i class="bi bi-mouse text-primary"></i> Mouse</h4>
            <a href="{{ route('user.category', 'mouse') }}">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
            @foreach($mouses as $product)
            <div class="col-6 col-md-4 col-lg-3">
                @include('user.partials.product-card', [
                    'product'  => $product,
                    'category' => 'mouse'
                ])
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ─── HEADSET ─── --}}
    @if($headsets->count())
    <section class="mb-5">
        <div class="section-heading">
            <h4><i class="bi bi-headset text-primary"></i> Headset</h4>
            <a href="{{ route('user.category', 'headset') }}">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
            @foreach($headsets as $product)
            <div class="col-6 col-md-4 col-lg-3">
                @include('user.partials.product-card', [
                    'product'  => $product,
                    'category' => 'headset'
                ])
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ─── MONITOR ─── --}}
    @if($monitors->count())
    <section class="mb-5">
        <div class="section-heading">
            <h4><i class="bi bi-display text-primary"></i> Monitor</h4>
            <a href="{{ route('user.category', 'monitor') }}">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
            @foreach($monitors as $product)
            <div class="col-6 col-md-4 col-lg-3">
                @include('user.partials.product-card', [
                    'product'  => $product,
                    'category' => 'monitor'
                ])
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- ─── STORAGE ─── --}}
    @if($storages->count())
    <section class="mb-5">
        <div class="section-heading">
            <h4><i class="bi bi-device-hdd text-primary"></i> Storage</h4>
            <a href="{{ route('user.category', 'storage') }}">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-3">
            @foreach($storages as $product)
            <div class="col-6 col-md-4 col-lg-3">
                @include('user.partials.product-card', [
                    'product'  => $product,
                    'category' => 'storage'
                ])
            </div>
            @endforeach
        </div>
    </section>
    @endif

    {{-- Empty state: no products at all --}}
    @if($keyboards->isEmpty() && $mouses->isEmpty() && $headsets->isEmpty() && $monitors->isEmpty() && $storages->isEmpty())
    <div class="empty-state">
        <i class="bi bi-box-seam d-block"></i>
        <h5>No products available yet</h5>
        <p>The admin has not added any products yet. Please check back later.</p>
    </div>
    @endif

</div>
@endsection
