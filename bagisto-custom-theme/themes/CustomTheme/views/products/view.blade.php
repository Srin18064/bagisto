<div class="product-view">
    <h1>{{ $product->name }}</h1>
    <div class="product-images">
        @foreach($product->images as $image)
            <img src="{{ asset('themes/CustomTheme/assets/images/' . $image->path) }}" alt="{{ $product->name }}">
        @endforeach
    </div>
    <div class="product-details">
        <p>{{ $product->description }}</p>
        <span class="price">{{ $product->price }}</span>
        <button class="add-to-cart">Add to Cart</button>
    </div>
    <div class="related-products">
        <h2>Related Products</h2>
        <ul>
            @foreach($relatedProducts as $relatedProduct)
                <li>
                    <a href="{{ route('products.view', $relatedProduct->id) }}">
                        {{ $relatedProduct->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>