@extends('index')
@section('content')

<style>
    .section-slider {
        display: none;
    }
</style>

<!-- MAIN CONTENT -->
<div style="margin-top: 145px;"></div>
<main class="detail-section">
    <section class="product-detail container grid detail-grid">
        <div class="detail-img-box">
            <img src="{{asset('public/frontend/imgs/top-books/book5.jpeg')}}" alt="" class="main-img" />
            <div class="detail-imgs">
                <div class="detail-img"></div>
                <div class="detail-img"></div>
                <div class="detail-img"></div>
                <div class="detail-img"></div>
            </div>
        </div>
        <div class="detail-text-box">
            <div class="main-info">
                <div class="title margin-bottom-lg">
                    <p class="author margin-bottom-sm">Tác giả: Vũ Trọng Phụng</p>
                    <h1 class="heading-secondary margin-bottom-md">
                        Số đỏ (Tái bản 2020)
                    </h1>
                    <div class="rating-box">
                        <div class="rating-icons padding-r-sm">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>
                        <p class="rating-numbe padding-l-sm padding-r-md">
                            ( Xem 370 đánh giá )
                        </p>
                        <p class="rating-number padding-l-md">Đã bán 2000</p>
                    </div>
                </div>
                <!-- pricing -->
                <div class="detail-pricing margin-bottom-lg">
                    <div class="pricing-box">
                        <p class="sell-price padding-r-md">60.000<span>đ</span></p>
                        <p class="original-price padding-r-md">100.000<span>đ</span></p>
                    </div>
                    <div class="discount-box padding-r-sm">
                        <p class="discount">Giảm giá <span>30%</span></p>
                    </div>
                </div>
            </div>

            <div class="relevant-books">
                <h1 class="heading-tertiary margin-bottom-md">Sách liên quan</h1>
                <div class="relevant-books-list">
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book1.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book2.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                    <div class="relevant-book">
                        <a href="#" class="relevant-book-link">
                            <img src="{{asset('public/frontend/imgs/top-books/book3.jpeg')}}" alt="Book's image" class="relevant-book-img" />
                            <p class="relevant-book-title">Số đỏ (Tái bản 2020)</p>
                            <p class="relevant-book-price">60.000<span>đ</span></p>
                        </a>
                    </div>
                </div>
                <div class="dots">
                    <div class="dot active"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
                <button class="btn-right btn-circle">
                    <ion-icon name="chevron-forward-outline"></ion-icon>
                </button>
                <button class="btn-left btn-circle">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </button>
            </div>
            <!-- detail information -->
            <div class="detail-infomation">
                <h1 class="heading-tertiary">Thông tin chi tiết</h1>
                <ul class="detail-info-list">
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Tác giả:</p>
                        <p class="detail-content">Vũ Trọng Phụng</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Nhà xuất bản:</p>
                        <p class="detail-content">NXB Văn Học</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Năm xuất bản:</p>
                        <p class="detail-content">2020</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Số trang:</p>
                        <p class="detail-content">300</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Kích thước:</p>
                        <p class="detail-content">14 x 20.5 cm</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">Loại bìa:</p>
                        <p class="detail-content">Bìa mềm</p>
                    </li>
                    <li class="detail-item margin-bottom-sm">
                        <p class="detail-label">SKU:</p>
                        <p class="detail-content">9786042060949</p>
                    </li>
                </ul>
            </div>

            <div class="book-description">
                <h1 class="heading-tertiary">Mô tả sách</h1>
                <p class="description">
                    Số đỏ là một tiểu thuyết của nhà văn Vũ Trọng Phụng, được viết vào
                    năm 1936 và xuất bản lần đầu năm 1937. Đây là một trong những tác
                    phẩm văn học có ảnh hưởng lớn nhất trong thời kỳ phát triển tiểu
                    thuyết Việt Nam từ năm 1930 đến 1945. Số đỏ là một tiểu thuyết của
                    nhà văn Vũ Trọng Phụng, được viết vào năm 1936 và xuất bản lần đầu
                    năm 1937. Đây là một trong những tác phẩm văn học có ảnh hưởng lớn
                    nhất trong thời kỳ phát triển tiểu thuyết Việt Nam từ năm 1930 đến
                    1945. Số đỏ là một tiểu thuyết của nhà văn Vũ Trọng Phụng, được
                    viết vào năm 1936 và xuất bản lần đầu năm 1937. Đây là một trong
                    những tác phẩm văn học có ảnh hưởng lớn nhất trong thời kỳ phát
                    triển tiểu thuyết Việt Nam từ năm 1930 đến 1945. Số đỏ là một tiểu
                    thuyết của nhà văn Vũ Trọng Phụng, được viết vào năm 1936 và xuất
                    bản lần đầu năm 1937. Đây là một trong những tác phẩm văn học có
                    ảnh hưởng lớn nhất trong thời kỳ phát triển tiểu thuyết Việt Nam.
                </p>
                <a class="more">Xem thêm</a>
            </div>
        </div>
        <form class="buy-form">
            <div class="detail-address margin-bottom-lg">
                <p class="shipped-address">
                    Giao đến: <span>An Ninh Tây, Tuy An, Phú Yên</span>
                </p>
                <a href="#" class="address-link">Đổi địa chỉ</a>
            </div>
            <p class="quantity-label margin-bottom-sm">Số lượng:</p>
            <div class="quantity-box margin-bottom-md">
                <button class="btn-decrease">-</button>
                <input type="number" min="0" value="0" />
                <button class="btn-increase">+</button>
            </div>
            <button class="btn btn-buy">Chọn mua</button>
            <button class="btn btn-add-to-cart">Thêm vào giỏ</button>
        </form>
    </section>

    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="close" id="closeModal">&times;</span>
            <h2>Thêm thành công</h2>
            <p>Giỏ hàng đã được thêm vào sản phẩm</p>
            <button id="modalCloseButton">OK</button>
        </div>
    </div>
</main>

@endsection