@extends('layout')

@section('content')

    <h3>Sản phẩm </h3>
    <div class="row" id="product-filter">

        @foreach ($products as $p)
{{--            {{$loop->index}}--}}
{{--            @if($loop->index == 5) @continue @endif--}}
{{--            @continue($loop->index==5)--}}
{{--            @break($loop->index >7)--}}
            <div class="mix col-lg-3 col-md-6 best">
                <div class="product-item">
                    <figure>
                        <img style="height: 270px;width: 330px" src="{{ $p['image'] }}" alt="">

                    </figure>
                    <div class="product-info">
                        <h6>{{ $p['name']}}</h6>
                        <p>{{ $p['price']}}</p>
                        <a href="#" class="site-btn btn-line">ADD TO CART</a>
                    </div>
                </div>
            </div>
    @endforeach
@endsection
