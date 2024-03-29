@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<div style="margin-top: 135px;"></div>
<!-- MAIN CONTENT -->
<main>
    <section class="cart-section">
        <h2 class="container heading-secondary cart-title margin-bottom-super">
            Giỏ hàng
        </h2>

        <div class="container grid cart-grid">
            <div class="cart-main">
                <div class="book-container">
                    <h1 class="cart-head">Sách đã thêm</h1>
                    <div class="cart-book">
                        <form action="#" class="cart-book__form">
                            <input type="checkbox" class="checkbox margin-right-md" />
                            <div class="img-box margin-right-sm">
                                <img class="cart-img" src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Cay cam ngot cua toi" />
                            </div>
                            <p class="cart-book-title margin-right-super">
                                Cây cam ngọt của tôi nha nha ban dung co chat
                            </p>
                            <div class="price-tag margin-right-super">
                                <p class="price-tag__sale">67.000<span>đ</span></p>
                                <p class="price-tag__origin">100.000<span>đ</span></p>
                            </div>
                            <div class="quantity-box__cart quantity-box margin-right-super">
                                <button class="btn-decrease">-</button>
                                <input type="number" min="1" value="1" />
                                <button class="btn-increase">+</button>
                            </div>
                            <button type="submit" class="btn-detele-item">
                                <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                    <div class="cart-book">
                        <form action="#" class="cart-book__form">
                            <input type="checkbox" class="checkbox margin-right-md" />
                            <div class="img-box margin-right-sm">
                                <img class="cart-img" src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Cay cam ngot cua toi" />
                            </div>
                            <p class="cart-book-title margin-right-super">Cây cam</p>

                            <div class="price-tag margin-right-super">
                                <p class="price-tag__sale">67.000<span>đ</span></p>
                                <p class="price-tag__origin">100.000<span>đ</span></p>
                            </div>
                            <div class="quantity-box__cart quantity-box margin-right-super">
                                <button class="btn-decrease">-</button>
                                <input type="number" min="1" value="1" />
                                <button class="btn-increase">+</button>
                            </div>
                            <button type="submit" class="btn-detele-item">
                                <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                    <div class="cart-book">
                        <form action="#" class="cart-book__form">
                            <input type="checkbox" class="checkbox margin-right-md" />
                            <div class="img-box margin-right-sm">
                                <img class="cart-img" src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Cay cam ngot cua toi" />
                            </div>
                            <p class="cart-book-title margin-right-super">
                                Cây cam ngọt của tôi
                            </p>

                            <div class="price-tag margin-right-super">
                                <p class="price-tag__sale">67.000<span>đ</span></p>
                                <p class="price-tag__origin">100.000<span>đ</span></p>
                            </div>
                            <div class="quantity-box__cart quantity-box margin-right-super">
                                <button class="btn-decrease">-</button>
                                <input type="number" min="1" value="1" />
                                <button class="btn-increase">+</button>
                            </div>
                            <button type="submit" class="btn-detele-item">
                                <ion-icon class="delete-icon" name="trash-outline"></ion-icon>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="address-section">
                    <h1 class="cart-head">Thông tin nhận hàng</h1>
                    <form action="#" method="POST" class="address-form address-form_cart">
                        <div class="address-group">
                            <div class="form-control">
                                <label for="fullName">Họ và tên</label>
                                <input type="text" class="user-name" id="fullName" name="fullName" required />
                            </div>

                            <div class="form-control">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required />
                            </div>

                            <div class="form-control">
                                <label for="phone">Số điện thoại</label>
                                <input type="tel" id="phone" name="phone" required />
                            </div>
                            <div class="form-control">
                                <label for="province">Tỉnh / Thành phố</label>
                                <select id="province" name="province" required>
                                    <option value="">Chọn tỉnh (thành phố)</option>
                                    <option value="province1">Province 1</option>
                                    <option value="province2">Province 2</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="district">Quận / Huyện</label>
                                <select id="district" name="district" required>
                                    <option value="">Chọn quận (huyện)</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="city">Phường / Xã</label>
                                <select id="ward" name="ward" required>
                                    <option value="">Chọn phường (xã)</option>
                                </select>
                            </div>

                            <div class="form-control">
                                <label for="street">Đường</label>
                                <input type="text" id="street" name="street" required />
                            </div>

                            <div class="form-control">
                                <label for="description">Thêm mô tả</label>
                                <textarea type="textarea" id="description" name="description" rows="4" cols="30"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <aside class="customer-info">
                <div class="address-box">
                    <div class="address-header">
                        <p class="address-heading">Giao tới</p>
                        <a href="#" class="change-address__link">Thay đổi</a>
                    </div>
                    <div class="info">
                        <p class="info-name padding-r-md">Bùi Thanh Duy</p>
                        <p class="info-phone padding-l-md">0383314133</p>
                    </div>
                    <address class="info-address">
                        <span>Nhà</span>
                        1/2 đường số 7, Phường Bình Thọ, Thành phố Thủ Đức, Hồ Chí Minh
                    </address>
                </div>
                <!-- payment method -->
                <div class="payment-method">
                    <h2 class="payment-method-title">Phương thức thanh toán</h2>
                    <div class="payment-method-options">
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="creditCard" />
                            <span class="payment-method-option-text">Thẻ tín dụng</span>
                        </label>
                        <label class="payment-method-option">
                            <input type="radio" name="paymentMethod" value="paypal" />
                            <span class="payment-method-option-text">PayPal</span>
                        </label>
                        <label class="payment-method-option">
                            <input checked type="radio" name="paymentMethod" value="bankTransfer" />
                            <span class="payment-method-option-text" selected>Tiền mặt</span>
                        </label>
                    </div>
                </div>

                <div class="total-price-section">
                    <h2 class="price-title">Thanh toán</h2>
                    <div class="subtotal">
                        <span>Tạm tính:</span>
                        <p><span class="money">100.000</span><span>đ</span></p>
                    </div>
                    <div class="shipping">
                        <span>Phí ship:</span>
                        <p><span class="money">15.000</span><span>đ</span></p>
                    </div>
                    <div class="discount">
                        <span>Giảm giá:</span>
                        <p><span class="money">100.000</span><span>đ</span></p>
                    </div>
                    <div class="total">
                        <span>Tổng tiền:</span>
                        <p><span class="money">0.000</span><span>đ</span></p>
                    </div>
                </div>
                <button class="btn btn--radius btn-order">Đặt sách</button>
            </aside>
        </div>
    </section>
</main>

@endsection