@extends('layout')
@section('content')

@if($fmenu->slug=='ve-may-bay-gia-re')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Airline",
  "name": "Vé máy bay giá rẻ HoaBinh Airlines",
  "alternateName": "Vé máy bay giá rẻ",
  "url": "https://hoabinhairlines.vn/ve-may-bay-gia-re",
  "logo": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0913311911",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "VN",
    "availableLanguage": "Vietnamese"
  },
  "sameAs": [
    "https://hoabinhairlines.vn/ve-may-bay-gia-re",
    "http://baoyenbai.com.vn/226/147181/Kich_cau_du_lich_voi_45000_ve_may_bay_gia_re_va_15000_tour_giam_gia.aspx",
"http://nghean24h.vn/chua-nam-nao-ve-may-bay-tet-re-nhu-nam-nay-a614031.html",
"http://danang24h.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a149980.html",
"http://thanhhoa24h.net.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a153201.html",
"http://nghean24h.vn/di-choi-dip-le-nhat-dinh-phai-biet-nhung-bi-kip-sau-de-co-duoc-tam-ve-may-bay-re-nhat-he-mat-troi-a392159.html",
"http://antt.vn/antt-an-do-quoc-gia-voi-gia-ve-may-bay-re-nhat-the-gioi-6130.htm",
"https://daklak24h.com.vn/du-lich/64621/ve-may-bay-re-khach-di-tour-tro-lai.html",
"http://nghean24h.vn/hang-nghin-ve-may-bay-gia-re-mua-thu-a489460.html",
"http://vinh24h.vn/chua-nam-nao-ve-may-bay-tet-re-nhu-nam-nay-a148569.html",
"http://vinh24h.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a144134.html",
"https://daklak24h.com.vn/tin-kinh-te/53780/o-at-giam-gia-ve-may-bay-gia-tour-khach-san-khi-dich-covid19.html",
"https://daklak24h.com.vn/kinh-te/9802/tranh-dua-ve-may-bay-gia-beo.html",
"http://nghean24h.vn/ve-may-bay-tu-8000-dong-gia-tour-du-lich-giam-den-70-a608520.html",
"https://baobinhduong.vn/jetstar-pacific-mo-10-000-ve-may-bay-gia-tu-31-000-vnd-a151332.html",
"http://antt.vn/ve-may-bay-noi-dia-dong-loat-giam-gia-tran-tu-112015-5513.htm",
"https://daklak24h.com.vn/tin-kinh-te/63651/ve-may-bay-tet-rot-gia-chua-tung-thay.html",
"https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
"http://vinh24h.vn/lam-sao-de-mua-duoc-ve-may-bay-tet-gia-re-a119709.html"

      ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Vé máy bay giá rẻ HoaBinh Airlines",
  "image": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "@id": "https://hoabinhairlines.vn/ve-may-bay-gia-re",
  "url": "https://hoabinhairlines.vn/ve-may-bay-gia-re",
  "telephone": "0913311911",
  "priceRange": "10000000-100000000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa",
    "addressLocality": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.0264331,
    "longitude": 105.8322213
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "08:00",
    "closes": "12:00"
  }],
  "sameAs": [
    "https://hoabinhairlines.vn/ve-may-bay-gia-re",
    "http://baoyenbai.com.vn/226/147181/Kich_cau_du_lich_voi_45000_ve_may_bay_gia_re_va_15000_tour_giam_gia.aspx",
"http://nghean24h.vn/chua-nam-nao-ve-may-bay-tet-re-nhu-nam-nay-a614031.html",
"http://danang24h.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a149980.html",
"http://thanhhoa24h.net.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a153201.html",
"http://nghean24h.vn/di-choi-dip-le-nhat-dinh-phai-biet-nhung-bi-kip-sau-de-co-duoc-tam-ve-may-bay-re-nhat-he-mat-troi-a392159.html",
"http://antt.vn/antt-an-do-quoc-gia-voi-gia-ve-may-bay-re-nhat-the-gioi-6130.htm",
"https://daklak24h.com.vn/du-lich/64621/ve-may-bay-re-khach-di-tour-tro-lai.html",
"http://nghean24h.vn/hang-nghin-ve-may-bay-gia-re-mua-thu-a489460.html",
"http://vinh24h.vn/chua-nam-nao-ve-may-bay-tet-re-nhu-nam-nay-a148569.html",
"http://vinh24h.vn/ve-may-bay-re-nhu-cho-sau-cach-ly-xa-hoi-a144134.html",
"https://daklak24h.com.vn/tin-kinh-te/53780/o-at-giam-gia-ve-may-bay-gia-tour-khach-san-khi-dich-covid19.html",
"https://daklak24h.com.vn/kinh-te/9802/tranh-dua-ve-may-bay-gia-beo.html",
"http://nghean24h.vn/ve-may-bay-tu-8000-dong-gia-tour-du-lich-giam-den-70-a608520.html",
"https://baobinhduong.vn/jetstar-pacific-mo-10-000-ve-may-bay-gia-tu-31-000-vnd-a151332.html",
"http://antt.vn/ve-may-bay-noi-dia-dong-loat-giam-gia-tran-tu-112015-5513.htm",
"https://daklak24h.com.vn/tin-kinh-te/63651/ve-may-bay-tet-rot-gia-chua-tung-thay.html",
"https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
"http://vinh24h.vn/lam-sao-de-mua-duoc-ve-may-bay-tet-gia-re-a119709.html"
  ] 
}
</script>
@elseif($fmenu->slug=='ve-bamboo-airways')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Airline",
  "name": "Vé máy bay Bamboo Airways giá rẻ",
  "alternateName": "Vé Bamboo Airways giá rẻ",
  "url": "https://hoabinhairlines.vn/ve-bamboo-airways",
  "logo": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0913311911",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "VN",
    "availableLanguage": "Vietnamese"
  },
  "sameAs": [
    "https://reatimes.vn/co-hoi-mua-hang-ngan-ve-may-bay-voi-gia-tu-149000-vnd-cua-bamboo-airways-34455.html",
    "https://ngaymoionline.com.vn/co-hoi-mua-hang-ngan-ve-may-bay-voi-gia-tu-149000-vnd-cua-bamboo-airways-13490.html",
    "https://ngaymoionline.com.vn/ve-may-bay-199000-vnd-cua-bamboo-airways-hut-khach-tai-hoi-cho-vitm-2019-13478.html",
    "http://seatimes.com.vn/bamboo-airways-ra-mat-ung-dung-thanh-toan-ve-may-bay-tien-loi-voi-viettelpay-n106723.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "https://reatimes.vn/xep-hang-dong-nghet-san-ve-may-bay-va-combo-du-lich-tron-goi-cua-bamboo-airways-34522.html"
  ]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Vé máy bay Bamboo Airways giá rẻ",
  "image": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "@id": "https://hoabinhairlines.vn/ve-bamboo-airways",
  "url": "https://hoabinhairlines.vn/ve-bamboo-airways",
  "telephone": "0913311911",
  "priceRange": "10000000 - 100000000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa",
    "addressLocality": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.0264331,
    "longitude": 105.8322213
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "08:00",
    "closes": "12:00"
  }],
  "sameAs": [
    "https://reatimes.vn/co-hoi-mua-hang-ngan-ve-may-bay-voi-gia-tu-149000-vnd-cua-bamboo-airways-34455.html",
    "https://ngaymoionline.com.vn/co-hoi-mua-hang-ngan-ve-may-bay-voi-gia-tu-149000-vnd-cua-bamboo-airways-13490.html",
    "https://ngaymoionline.com.vn/ve-may-bay-199000-vnd-cua-bamboo-airways-hut-khach-tai-hoi-cho-vitm-2019-13478.html",
    "http://seatimes.com.vn/bamboo-airways-ra-mat-ung-dung-thanh-toan-ve-may-bay-tien-loi-voi-viettelpay-n106723.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "https://reatimes.vn/xep-hang-dong-nghet-san-ve-may-bay-va-combo-du-lich-tron-goi-cua-bamboo-airways-34522.html"
  ] 
}
</script>
@elseif($fmenu->slug=='ve-vietjet-air')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Airline",
  "name": "Vé máy bay VietJet Air giá rẻ",
  "alternateName": "Vé VietJet Air giá rẻ",
  "url": "https://hoabinhairlines.vn/ve-vietjet-air",
  "logo": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0913311911",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "VN",
    "availableLanguage": "Vietnamese"
  },
  "sameAs": [
    "http://baoyenbai.com.vn/12/201452/Vietjet_giam_50_gia_ve_may_bay_noi_dia.aspx",
    "http://nghean24h.vn/vietjet-tung-hai-trieu-ve-may-bay-0-dong-vao-he-a523907.html",
    "https://daklak24h.com.vn/su-kien-trong-tinh/19007/vietjet-mo-ban-ve-may-bay-tet-dinh-dau-2017.html",
    "https://baobinhduong.vn/vietjet-giam-gia-ve-may-bay-tu-49-90-cho-du-lich-noi-dia-a88761.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "http://thanhhoa24h.net.vn/vietjet-lien-tuc-tung-ve-may-bay-gia-sieu-re-a79664.html"
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Vé máy bay VietJet Air giá rẻ",
  "image": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "@id": "https://hoabinhairlines.vn/ve-vietjet-air",
  "url": "https://hoabinhairlines.vn/ve-vietjet-air",
  "telephone": "0913311911",
  "priceRange": "10000000 - 100000000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa",
    "addressLocality": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.0264331,
    "longitude": 105.8322213
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "08:00",
    "closes": "12:00"
  }],
  "sameAs": [
    "http://baoyenbai.com.vn/12/201452/Vietjet_giam_50_gia_ve_may_bay_noi_dia.aspx",
    "http://nghean24h.vn/vietjet-tung-hai-trieu-ve-may-bay-0-dong-vao-he-a523907.html",
    "https://daklak24h.com.vn/su-kien-trong-tinh/19007/vietjet-mo-ban-ve-may-bay-tet-dinh-dau-2017.html",
    "https://baobinhduong.vn/vietjet-giam-gia-ve-may-bay-tu-49-90-cho-du-lich-noi-dia-a88761.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "http://thanhhoa24h.net.vn/vietjet-lien-tuc-tung-ve-may-bay-gia-sieu-re-a79664.html"
  ] 
}
</script>
@elseif($fmenu->slug=='ve-vietnam-airlines')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Airline",
  "name": "Vé máy bay Vietnam Airlines giá rẻ",
  "alternateName": "Vé Vietnam Airlines giá rẻ",
  "url": "https://hoabinhairlines.vn/ve-vietnam-airlines",
  "logo": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "0913311911",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "VN",
    "availableLanguage": "Vietnamese"
  },
  "sameAs": [
    "http://nghean24h.vn/thuc-hu-thong-tin-vietnam-airlines-ban-ve-may-bay-tet-2021-gia-re-a605290.html",
    "https://tieudungplus.vn/vietnam-airlines-khuyen-mai-ve-may-bay-toi-dong-nam-a-chi-tu-200-nghin-dong-7007.html",
    "http://antt.vn/vietnam-airlines-doi-ap-gia-san-het-thoi-ve-may-bay-0-dong-311375.htm",
    "https://daklak24h.com.vn/thoi-su/38096/vietnam-airlines-mo-ban-ve-may-bay-tet-tu-hom-nay-810.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "http://nguoihanoi.com.vn/vietnam-airlines-noi-gi-ve-may-bay-di-duc-phai-quay-lai-noi-bai_251980.html"
  ]
}
</script>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Vé máy bay Vietnam Airlines giá rẻ",
  "image": "https://hoabinhairlines.vn/public/frontend/css/images/hoa-binh-airlines-logo.png",
  "@id": "https://hoabinhairlines.vn/ve-vietnam-airlines",
  "url": "https://hoabinhairlines.vn/ve-vietnam-airlines",
  "telephone": "0913311911",
  "priceRange": "10000000 - 100000000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "29 Đoàn Thị Điểm, Quốc Tử Giám, Đống Đa",
    "addressLocality": "Hà Nội",
    "postalCode": "100000",
    "addressCountry": "VN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 21.0264331,
    "longitude": 105.8322213
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "08:00",
    "closes": "18:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "08:00",
    "closes": "12:00"
  }],
  "sameAs": [
    "http://nghean24h.vn/thuc-hu-thong-tin-vietnam-airlines-ban-ve-may-bay-tet-2021-gia-re-a605290.html",
    "https://tieudungplus.vn/vietnam-airlines-khuyen-mai-ve-may-bay-toi-dong-nam-a-chi-tu-200-nghin-dong-7007.html",
    "http://antt.vn/vietnam-airlines-doi-ap-gia-san-het-thoi-ve-may-bay-0-dong-311375.htm",
    "https://daklak24h.com.vn/thoi-su/38096/vietnam-airlines-mo-ban-ve-may-bay-tet-tu-hom-nay-810.html",
    "https://goo.gl/maps/ZkUL5Q6CtQHSHntS6",
    "http://nguoihanoi.com.vn/vietnam-airlines-noi-gi-ve-may-bay-di-duc-phai-quay-lai-noi-bai_251980.html"
  ] 
}
</script>
@endif

{!! $fmenu->scheme !!}

<style type="text/css">
  .wrapper34 a{ color: #333; }
  .wrapper34 a:hover{ color: #000;text-decoration: none; }
</style>

    <link rel="stylesheet" href="{{asset('public/frontend/css/toctoc.css')}}">
    <div class="wrapper page-has-banner ve-may-bay">
        <!-- Body -->
        <div class="main-content ">
            <div class="content">
                <div class="page-content-artice">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @if($fmenu->slug=='ve-may-bay-gia-re')
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="wrapper34">
                                <p style="text-align:center;"><a rel="nofollow" href="{{ route('vemaybay.gia.re',array('ve-may-bay-gia-re-hoa-binh-airlines')) }}"><img style="max-width: 100%;" src="https://hoabinhairlines.vn/public/userfiles/files/Ve%20may%20bay%20gia%20re%20la%20cum%20tu%20hot%20trong%20cong%20dong%20me%20xe%20dich%20HoaBinh%20Airline.jpg"></a></p>
                              <p style="text-align:center;">
                                <h2 style="text-align:center;" class="heading_content_pages"><a href="{{ route('vemaybay.gia.re',array('ve-may-bay-gia-re-hoa-binh-airlines')) }}">Vé máy bay giá rẻ HoaBinh Airlines</a></h2>
                              </p>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            @elseif($fmenu->slug=='ve-vietnam-airlines')
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="wrapper34">
                                <p style="text-align:center;"><a href="{{ route('vemaybay.vietnamairline',array('dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines')) }}"><img style="max-width: 100%;" src="https://hoabinhairlines.vn/public/userfiles/files/ve-vietnam-airlines/vietnam%20airlines%20la%20hang%20hang%20khong%20uy%20tin%20HoaBinh%20Airline.jpg"></a></p>
                              <p style="text-align:center;">
                                <h2 style="text-align:center;" class="heading_content_pages"><a href="{{ route('vemaybay.vietnamairline',array('dat-ve-may-bay-vietnam-airlines-gia-re-tai-hoa-binh-airlines')) }}">Đặt vé máy bay Vietnam Airlines giá rẻ tại HoaBinh Airlines</a></h2>
                              </p>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            @elseif($fmenu->slug=='ve-bamboo-airways')
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="wrapper34">
                                <p style="text-align:center;"><a href="{{ route('vemaybay.ve-bamboo-airways',array('dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines')) }}"><img style="max-width: 100%;" src="https://hoabinhairlines.vn/public/userfiles/files/ve-bamboo/Bamboo%20hang%20hang%20khong%20uy%20tin%20HoaBinh%20Airline.jpg"></a></p>
                              <p style="text-align:center;">
                                <h2 style="text-align:center;" class="heading_content_pages"><a href="{{ route('vemaybay.ve-bamboo-airways',array('dat-mua-ve-bamboo-airways-gia-cuc-re-tai-hoa-binh-airlines')) }}">Đặt mua vé Bamboo Airways giá cực rẻ tại HoaBinh Airlines</a></h2>
                              </p>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            @elseif($fmenu->slug=='ve-vietjet-air')
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <div class="wrapper34">
                                <p style="text-align:center;"><a href="{{ route('vemaybay.ve-vietjet-air',array('ve-vietjet-air-gia-re-hoa-binh-airlines')) }}"><img style="max-width: 100%;" src="https://hoabinhairlines.vn/public/userfiles/files/ve-viet-jet/5%20HoaBinh%20Airline.jpg"></a></p>
                              <p style="text-align:center;">
                                <h2 style="text-align:center;" class="heading_content_pages"><a href="{{ route('vemaybay.ve-vietjet-air',array('ve-vietjet-air-gia-re-hoa-binh-airlines')) }}">Vé VietJet Air giá rẻ | HoaBinh Airlines</a></h2>
                              </p>
                              </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                              <p>&nbsp;</p>
                            </div>
                            @else
                              <h1 class="heading_content_pages">{!! $fmenu->title !!} </h1>
                              <div class="news-description-detail">
                                  <div class="contentnewsdt">
                                  <div id="toctoc"></div>
                                    {!! $fmenu->desception !!}
                                  </div>
                              </div>
                            @endif
                        </div>
                    </div>
                    <div style="width: 100%;height: 1px;clear: both;"></div>
                </div>
                <!-- Các chặng bay và hãng bay hàng đầu -->
                <!-- Đăng ký nhận tin khuyến mãi -->
            </div>
        </div>
        <!-- End Body -->
@endsection
