@extends('layouts.user')

@section('title', 'Checkout - TechZone')

@section('content')
<div class="container py-4">
    <h4 class="mb-4">Checkout</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
        <div class="row g-4">
            <div class="col-md-7">
                <div style="background:#fff; border-radius:12px; border:1px solid var(--tz-border); padding:1.75rem;">
                    <h6 class="fw-bold mb-3">Shipping Details</h6>

                    <div class="mb-3">
                        <label class="form-label" for="nama">Full Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                               id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="telepon">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                                   id="telepon" name="telepon" value="{{ old('telepon') }}" required>
                            @error('telepon')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="alamat">Address <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror"
                                  id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>

                    <div class="mb-0">
                        <label class="form-label" for="catatan">Note (optional)</label>
                        <textarea class="form-control" id="catatan" name="catatan" rows="2">{{ old('catatan') }}</textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div style="background:#fff; border-radius:12px; border:1px solid var(--tz-border); padding:1.75rem;">
                    <h6 class="fw-bold mb-3">Order Summary</h6>

                    @foreach($cart as $key => $item)
                        <div class="d-flex justify-content-between gap-2 mb-2" style="font-size:.9rem;">
                            <span>{{ $item['name'] }} &times; {{ $item['qty'] }}</span>
                            <span class="text-nowrap">Rp {{ number_format($item['price'] * $item['qty'], 0, ',', '.') }}</span>
                        </div>
                    @endforeach

                    <hr>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-bold">Total</span>
                        <span class="fw-bold" style="font-size:1.25rem; color:var(--tz-blue);">
                            Rp {{ number_format($total, 0, ',', '.') }}
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2" style="border-radius:8px;">
                        <i class="bi bi-bag-check me-1"></i> Place Order
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
