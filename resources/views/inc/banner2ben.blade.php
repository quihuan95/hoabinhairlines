<style>
    /*
     * Override global style.css:
     * - .item 1,2: float left; margin-left -162px; top 60px / 328px
     * - .item 3,4: float right; margin-right -10px; top 60px / 328px
     * - img: position fixed; width 152px
     * Gap 10px giữa 2 banner mỗi cột: top hàng 2 = 60px + chiều cao (9:16) + 10px
     */
    .list_banner_advertise .banner-2ben-img {
        width: 152px;
        aspect-ratio: 9 / 16;
        height: auto;
        object-fit: cover;
        display: block;
        position: fixed;
    }

    .list_banner_advertise .item_banner_advertise:nth-child(1) .banner-2ben-img,
    .list_banner_advertise .item_banner_advertise:nth-child(3) .banner-2ben-img {
        top: 60px;
    }

    .list_banner_advertise .item_banner_advertise:nth-child(2) .banner-2ben-img,
    .list_banner_advertise .item_banner_advertise:nth-child(4) .banner-2ben-img {
        top: calc(60px + 152px * 16 / 9 + 10px);
    }

    .list_banner_advertise .item_banner_advertise:nth-child(2),
    .list_banner_advertise .item_banner_advertise:nth-child(4) {
        top: calc(60px + 152px * 16 / 9 + 10px) !important;
    }
</style>

<div class="list_banner_advertise hidden-xs hidden-sm">

    <div class="item_banner_advertise">
            <img class="banner-2ben-img" src="{{asset('public/frontend/css/images/banner sản phẩm HBA 1.png')}}" alt="Đặt vé máy bay giá rẻ HoaBinh Airlines">
    </div>
    <div class="item_banner_advertise">
            <img class="banner-2ben-img" src="{{asset('public/frontend/css/images/banner sản phẩm HBA 2.png')}}" alt="Cơ hội săn vé máy bay siêu rẻ chỉ có ở Hòa Bình Airlines">
    </div>
    <div class="item_banner_advertise">
            <img class="banner-2ben-img" src="{{asset('public/frontend/css/images/banner sản phẩm HBA 3.png')}}" alt="Tuyển đại lý F2 của HoaBinh Airlines">
    </div>
    <div class="item_banner_advertise">
            <img class="banner-2ben-img" src="{{asset('public/frontend/css/images/banner sản phẩm HBA 4.png')}}" alt="advertise">
    </div>
</div>
