<tr class="align-middle">
    <th><img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" width="100"></th>
    <td>{{ $product->name }}</td>
    <td>{{ $product->sale_price }}</td>
    <td>
        @if ($product->quantity > 0)
            <span class="text-success">In Stock</span>
        @else
            <span class="text-danger">Out of Stock</span>
        @endif
    </td>
    <td><button class="btn btn-dark">Add to Cart</button></td>
    <td class="text-center"><a href=""><i class="fa-solid fa-xmark"></i></a></td>
</tr>
