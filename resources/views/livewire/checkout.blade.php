<div class="row">
    <div class="col-lg-6 col-12">
        <form action="/order" method="post">
            @method('POST')
            @csrf
            <div class="checkbox-form">
                <h3>Địa chỉ của bạn</h3>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>First Name <span class="required">*</span></label>
                            <input placeholder="" type="text" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>Last Name <span class="required">*</span></label>
                            <input placeholder="" type="text">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Địa chỉ chi tiết <span class="required">*</span></label>
                            <input placeholder="Street address" type="text" name="address">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="checkout-form-list">
                            <label>Tỉnh / Thành Phố <span class="required" >*</span></label>
                            <input type="text" name="province">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>Quận / Huyện <span class="required" >*</span></label>
                            <input placeholder="" type="text" name="district">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>Xã / Phường <span class="required">*</span></label>
                            <input placeholder="" type="text" name="ward">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>Địa chỉ email <span class="required">*</span></label>
                            <input placeholder="" type="email" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="checkout-form-list">
                            <label>Số điện thoại <span class="required">*</span></label>
                            <input type="text" name="phone">
                        </div>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="order-button-payment">
                        <input value="Đặt hàng " type="submit">
                    </div>
                </div>
                <!-- <div class="different-address">
                                <div id="ship-box-info" class="row">
                                    <div class="col-md-12">
                                        <div class="myniceselect country-select clearfix">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Last Name <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Company Name</label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Address <span class="required">*</span></label>
                                            <input placeholder="Street address" type="text" name="address">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Town / City <span class="required">*</span></label>
                                            <input type="text" name="province">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>State / County <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Postcode / Zip <span class="required">*</span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Email Address <span class="required">*</span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkout-form-list">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Ghi chú</label>
                                        <textarea id="checkout-mess" cols="30" rows="10"
                                            placeholder="Bạn Ghi Chú để chúng mình thuận tiện giao hàng nhé!!!"></textarea>
                                    </div>
                                </div>
                            </div> -->
            </div>

    </div>
    <div class="col-lg-6 col-12">
        <div class="your-order">
            <h3>Hóa Đơn</h3>
            <div class="your-order-table table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="cart-product-name">Sản Phẩm</th>
                            <th class="cart-product-total">Tổng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $cartItem)
                            <tr class="cart_item">
                                <td class="cart-product-name">
                                    {{ $cartItem['name'] }}<strong class="product-quantity">
                                        × {{ $cartItem['quantity'] }}</strong></td>
                                <td class="cart-product-total"><span
                                        class="amount">{{ $cartItem['quantity']*$cartItem['price'] }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="cart-subtotal">
                        </tr>
                        <tr class="order-total">
                            <th>Tổng Tiền</th>
                            <td><strong><span class="amount">{{ $total }}</span></strong></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>

</div>
