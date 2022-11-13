<div class="container-lg py-3">
    @foreach($products as $product)
        <div class="bg-light p-3">
            <div class="h3 fw-bold text-center ">
                "{{ $product->brand->name}}"
            </div>
            <div class="text-center"><img class="img-fluid width-full" src="{{ asset('storage/img/color.png') }}" alt=""></div>
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
                    <div  class="text-center pt-5">
                        <button type="button" class="text-white contact-size btn rounded-pill px-3">CONTACT US<i class="ps-2 bi bi-telephone-fill h6 text-white"></i></button>
                    </div>
                </div>
            </div>
        </div>
@endforeach
</div>

{{ $products->links() }}