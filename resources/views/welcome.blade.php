@extends('layouts/master')
@section('content')
    <div class="
	 mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @forelse ($result ?? [] as $item)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                             <img src="{{$item->Img ?? ''}}" alt="">
                            </div>
                            <h3>{{$item->name ?? 'Product'}}</h3>
                            <p>{{$item->Description ?? 'No description available.'}}</p>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No products available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
