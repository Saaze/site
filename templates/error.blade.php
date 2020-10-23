@extends('layout')

@section('title', "{$code} {$message}")

@section('content')
@include('partials.nav', ['nav_class' => 'bg-white border-bottom'])

<section class="pt-6 pt-md-11 pb-10 pb-md-12">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">

                <!-- Preheading -->
                <h6 class="text-uppercase text-primary text-center mb-5">
                    Whoops
                </h6>

                <!-- Heading -->
                <h1 class="display-3 text-center mb-4">
                    {{ $code }}
                </h1>

                <!-- Text -->
                <p class="font-size-lg text-center text-muted mb-0">
                    {{ $message }}
                </p>

            </div>
        </div>
    </div>
</section>
@endsection
