<div class=" col-md-3 col-sm-6 mb-2">
    <div class="product-box-3 h-100 wow fadeInUp" data-wow-delay="0.05s">
        <div class="product-header">
            <div class="product-image">
                <a href="{{ route('product_details', $product->slug) }}">
                    <img src="{{ Storage::url($product->image) }}" class="img-fluid blur-up lazyload"
                        alt=" {{ $product->name }}" />
                </a>
                <ul class="product-option">
                    <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                        <a href="wishlist.html" class="notifi-wishlist">
                            <i class="fa-regular fa-heart" style="color: #ff4500;"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="product-footer">
            <div class="product-detail">
                <span class="span-name">{{ $product->type }}</span>
                <a href="{{ route('product_details', $product->slug) }}">
                    <h5 class="name">
                        {{ $product->name }}
                    </h5>
                </a>

                <div class="product-rating mt-2">
                    <ul class="rating">
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star"></i>
                        </li>
                        <li>
                            <i class="fas fa-star-half-alt"></i>
                        </li>
                    </ul>
                    <span>(4.5)</span>
                </div>
                <h6 class="unit">{{ $product->weight }}</h6>
                <h5 class="price">
                    <span class="theme-color">{{ Sohoj::price($product->sale_price) }}</span>
                    <del>{{ Sohoj::price($product->price) }}</del>
                </h5>
                <div class="add-to-cart-box bg-white">
                    <a class="btn btn-add-cart addcart-button " href="{{ route('cart') }}" style="width: 100%">
                        Add
                        <span class="add-icon bg-light-gray">
                            <i class="fas fa-plus"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
