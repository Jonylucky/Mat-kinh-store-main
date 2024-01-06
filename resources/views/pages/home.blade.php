@extends('layout')
@section('content')
<!--features_items-->
<div class="features_items">
    <h2 class="title text-center">Sản Phảm Mới Nhất</h2>

    @foreach($all_product as $key => $product)
    <a href="{{URL::to('chi-tiet-san-pham/'.$product->product_id)}}">
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL::to('public/uploads/product/'.$product->product_image) }}" alt="" />
                    <h2>{{number_format($product->product_price).' '.'$'}}</h2>
                    <p>{{($product->product_content)}}</p>
                    <a data-url="{{ route('addToCard' , ['id' => $product->product_id]) }}" class="btn btn-default add_to_card"><i class="fa fa-shopping-cart"></i>Add to
                        cart</a>
                </div>
            </div>


            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm Yêu Thích</a>
                    </li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So Sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    </a>
    @endforeach
</div><!--features_items-->

@endsection