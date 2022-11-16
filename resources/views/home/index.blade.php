<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/splide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</head>
<body class="bg-light">
    @include('app.nav')
    <div class="container-lg py-3">
        @foreach($products as $product)
            <div class="bg-light p-3">
                <div class="h3 fw-bold text-center ">
                    "{{ $product->brand->name}}"
                </div>
                <div class="text-center"><img class="img-fluid width-full" src="{{ asset('storage/img/color.png') }}"
                                              alt=""></div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-3">
                        <img src="{{ asset('storage/img/'.$product->image) }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6">
                        <div class="h4 fw-bold">
                            {{ $product->name}}
                        </div>
                        <div class="h5 fw-bold">
                            {{ $product->category->name }}
                        </div>
                        <div class="fs-6 form-text">
                            {{ $product->description}}
                        </div>
                        <div class="text-center pt-5">
                            <button type="button" class="text-white contact-size btn rounded-pill px-3">CONTACT US<i
                                        class="ps-2 bi bi-telephone-fill h6 text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $products->links() }}
    </div>
</body>
</html>


