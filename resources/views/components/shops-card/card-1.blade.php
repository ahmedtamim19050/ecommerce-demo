<div class=" col-md-3 col-sm-6 mb-3">
    <div class="nature-card">
        <span class="nature-product-label">{{ $shop->products->count() }} Products</span>
        <div class="nature-seller-info">
            <div class="nature-image">
                <img src="{{ Storage::url($shop->logo) }}" class="img-fluid" alt="Nature Food Logo" />
            </div>
            <h4 class="nature-seller-name">{{ $shop->name }}</h4>
            <h6 class="nature-since-number">since {{ $shop->created_at->format('Y') }}</h6>
            <div class="nature-product-rating">
                <ul class="nature-rating list-inline">
                    <li class="list-inline-item">
                        <i class="fas fa-star nature-fill"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fas fa-star nature-fill"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fas fa-star nature-fill"></i>
                    </li>
                    <li class="list-inline-item">
                        <i class="fas fa-star nature-fill"></i>
                    </li>
                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                </ul>
                <h6 class="theme-color">(26)</h6>
            </div>
            <div class="nature-product-categories">

                @if ($shop->tags == !null)

                    @foreach (json_decode($shop->tags) as $tag)
                        <span class="nature-product-category"
                            title="{{ $tag }}">{{ Str::limit($tag, $limit = 5, $end = '..') }}</span>
                    @endforeach
                @endif
            </div>
            <a class="nature-btn-visit-store nature-fw-bold" href="{{ route('store_front', $shop->slug) }}">
                Visit Store <i class="fas fa-arrow-right-long"></i>
            </a>
        </div>
    </div>
</div>
