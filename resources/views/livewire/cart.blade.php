<div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="offcanvas-body">
        @if($cart!=null)
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4 class="mb-0">Giỏ hàng</h4>
                    <a class="button-close" wire:ignore.self><i class="pe-7s-close" data-tippy="Close"
                            data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50"
                            data-tippy-arrow="true" data-tippy-theme="sharpborder"></i></a>
                </div>
                @foreach($cart as $item)
                    <ul class="minicart-list">
                        <li class="minicart-product">
                            <a href="single-product-variable.html" class="product-item_img">
                                <img class="img-full"
                                    src="http://127.0.0.1:8000/storage/images/{{ $item['image'] }}"
                                    alt="Product Image">
                            </a>
                            <div class="product-item_content">
                                <a class="product-item_title"
                                    href="single-product-variable.html">{{ $item['name'] }}</a>
                                <span class="product-item_quantity">{{ $item['quantity']}} x
                                    {{ $item['price'] }}</span>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="minicart-item_total">
               
            </div>
            <div class="group-btn_wrap d-grid gap-2">
                <a href="/cart" class="btn btn-dark">Xem chi tiết</a>
            </div>
        @endif
    </div>
</div>
<div class="global-overlay"></div>
