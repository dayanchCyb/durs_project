<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <script type="text/javascript" src="{{ asset('js/splide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</head>
<body class="bg-light">
<div class="container-lg py-3">
        @foreach($products as $product)
                <div class="bg-white border rounded p-3">
                    <div class="h3">
                        {{ $product->brand->name}}
                    </div>
                    <div class="h4">
                        {{ $product->name}}

                    </div>
                    <div class="h5">
                        {{ $product->category->name }}
                    </div>
                    <div>
                        <img src="{{ asset('storage/img/'.$product->image) }}" alt="" class="img-thumbnail img-thumbnail p-2">
                    </div>
                    <div class="h6">
                        {{ $product->description}}
                    </div>
                </div>
            </div>
        @endforeach
    {{ $products->links() }}
</body>
</html>

{{--<div class="h6">--}}
{{--Category: {{ $product->category->name }}--}}
{{--</div>--}}
{{--<div class="h6">--}}
{{--Price: {{ $product->price }}--}}
{{--</div>--}}
{{--<div class="h6">--}}
{{--Barcode: {{ $product->barcode}}--}}
{{--</div>--}}

