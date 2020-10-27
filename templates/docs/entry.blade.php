@extends('layout')

@section('title', $entry->title)

@section('content')
@include('partials.nav', ['nav_class' => 'bg-white border-bottom'])

<nav class="navbar-dark docs-breadcrumb">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col">

                <!-- Breadcrumb -->
                <ol class="breadcrumb breadcrumb-dark px-0 mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html">Docs</a>
                    </li>
                </ol>

            </div>
            <div class="col-auto">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#docsSidenav"
                    aria-controls="docsSidenav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </div>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<section class="docs-content">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-lg-3 col-xl-2">

                <!-- Collapse -->
                <div class="collapse d-lg-block" id="docsSidenav">
                    <div class="border-bottom border-bottom-lg-0 py-6 py-md-9 px-lg-8">

                        <ul class="list-unstyled font-size-xs text-muted mb-6">
                            <li class="mb-2">
                                <a class="text-reset" href="/docs">Introduction</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/contributing">Contributing</a>
                            </li>
                        </ul>

                        <h5 class="font-family-sans-serif mb-3">
                            Basics
                        </h5>

                        <ul class="list-unstyled font-size-xs text-muted mb-6">
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/requirements">Requirements</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/quick-start">Quick Start</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/deploying">Deploying</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/updating">Updating</a>
                            </li>
                        </ul>

                        <h5 class="font-family-sans-serif mb-3">
                            Concepts
                        </h5>

                        <ul class="list-unstyled font-size-xs text-muted mb-6">
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/collections">Collections</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/entries">Entries</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/templates">Templates</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/routing">Routing</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/structure">Structure</a>
                            </li>
                            <li class="mb-2">
                                <a class="text-reset" href="/docs/cli">CLI</a>
                            </li>
                        </ul>

                    </div>
                </div>


            </div>
            <div class="col-lg-9 col-xl-8 py-6 py-md-9 px-lg-10 js-toc-content">

                <h1 class="font-family-sans-serif m-0">
                    {{ $entry->title }}
                </h1>

                <hr class="my-6">

                {!! $entry->content !!}

            </div>
            <div class="col-lg-3 col-xl-2 d-none d-xl-block">

                <div class="my-6 my-md-9 px-lg-8 border-left js-toc"></div>

            </div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tocbot/4.11.1/tocbot.min.js"></script>
<script>
    tocbot.init({
        tocSelector: '.js-toc',
        contentSelector: '.js-toc-content',
        headingSelector: 'h2, h3',
        listClass: 'toc-list list-unstyled font-size-xs mb-0',
        listItemClass: 'toc-list-item mb-2',
        linkClass: 'toc-link text-reset',
    });
</script>
@endsection
