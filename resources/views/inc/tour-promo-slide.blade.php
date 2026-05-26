<style>
    .tour-promo-slide {
        position: fixed;
        inset: 0;
        z-index: 100001;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 16px;
        background: rgba(0, 0, 0, 0.6);
    }

    .tour-promo-slide.is-open {
        display: flex;
    }

    .tour-promo-slide__dialog {
        width: min(920px, 100%);
        max-height: calc(100vh - 32px);
        background: #fff;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.35);
        display: flex;
        align-items: stretch;
        position: relative;
        animation: tourPromoSlideIn 0.35s ease;
    }

    @keyframes tourPromoSlideIn {
        from {
            opacity: 0;
            transform: translateY(24px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .tour-promo-slide__media {
        flex: 0 1 auto;
        align-self: stretch;
        width: fit-content;
        max-width: min(392px, 46vw);
        min-width: 0;
        min-height: 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        background: #f3f6fb;
    }

    .tour-promo-slide__media img {
        width: auto;
        height: auto;
        max-width: 100%;
        display: block;
        object-fit: contain;
        object-position: center;
    }

    .tour-promo-slide__form-wrap {
        flex: 1;
        background: linear-gradient(160deg, #0b2f5c 0%, #061a33 100%);
        color: #fff;
        padding: 28px 32px 24px;
        display: flex;
        flex-direction: column;
        min-width: 0;
        width: 100%;
        align-items: stretch;
    }

    .tour-promo-slide #tourPromoSlideForm {
        width: 100%;
        max-width: 100%;
    }

    .tour-promo-slide__badge {
        display: inline-block;
        background: #f17419;
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        padding: 4px 10px;
        border-radius: 4px;
        margin-bottom: 12px;
        text-transform: uppercase;
    }

    .tour-promo-slide__title {
        font-size: 22px;
        font-weight: 700;
        line-height: 1.3;
        margin: 0 0 8px;
        color: #fff;
    }

    .tour-promo-slide__desc {
        font-size: 14px;
        line-height: 1.5;
        color: rgba(255, 255, 255, 0.88);
        margin: 0 0 20px;
    }

    .tour-promo-slide__close {
        position: absolute;
        top: 12px;
        right: 12px;
        width: 36px;
        height: 36px;
        border: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
        color: #fff;
        font-size: 24px;
        line-height: 1;
        cursor: pointer;
        z-index: 2;
    }

    .tour-promo-slide__close:hover {
        background: rgba(255, 255, 255, 0.25);
    }

    .tour-promo-slide__field {
        margin: 0 0 14px;
        width: 100%;
        max-width: 100%;
    }

    .tour-promo-slide__field label {
        display: block;
        width: 100%;
        font-size: 13px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #fff;
    }

    .tour-promo-slide__field input,
    .tour-promo-slide__field textarea {
        width: 100% !important;
        max-width: 100% !important;
        display: block;
        margin-left: 0 !important;
        margin-right: 0 !important;
        border: 0;
        border-radius: 0px;
        padding: 10px 12px;
        font-size: 14px;
        color: #1f2b3d;
        box-sizing: border-box;
    }

    .tour-promo-slide__field textarea {
        min-height: 72px;
        resize: vertical;
    }

    .tour-promo-slide__submit {
        margin-top: 8px;
        width: 100%;
        border: 0;
        background: #fdd302;
        color: #0b2f5c;
        font-size: 16px;
        font-weight: 700;
        padding: 14px 16px;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .tour-promo-slide__submit:hover {
        background: #f5c800;
    }

    .tour-promo-slide__submit:disabled {
        opacity: 0.7;
        cursor: not-allowed;
    }

    .tour-promo-slide__message {
        display: none;
        margin-top: 10px;
        font-size: 13px;
        border-radius: 6px;
        padding: 8px 10px;
    }

    .tour-promo-slide__message.is-error {
        display: block;
        background: rgba(220, 53, 69, 0.2);
        color: #ffc9cf;
    }

    .tour-promo-slide__message.is-success {
        display: block;
        background: rgba(40, 167, 69, 0.2);
        color: #c8f5d4;
    }

    @media (max-width: 767px) {
        .tour-promo-slide__dialog {
            flex-direction: column;
            max-height: calc(100vh - 24px);
            overflow-y: auto;
        }

        .tour-promo-slide__media {
            flex: none;
            align-self: auto;
            max-width: 100%;
            width: 100%;
            padding: 0;
        }

        .tour-promo-slide__media img {
            max-height: min(240px, 38vh);
            width: auto;
            height: auto;
            margin: 0 auto;
            object-fit: contain;
        }

        .tour-promo-slide__form-wrap {
            padding: 20px 18px 18px;
        }

        .tour-promo-slide__title {
            font-size: 18px;
        }
    }
</style>

<div class="tour-promo-slide" id="tourPromoSlide" role="dialog" aria-modal="true" aria-labelledby="tourPromoSlideTitle"
    aria-hidden="true">
    <div class="tour-promo-slide__dialog">
        <button type="button" class="tour-promo-slide__close" id="tourPromoSlideClose"
            aria-label="Đóng">&times;</button>

        <div class="tour-promo-slide__media">
            <img src="{{ asset('public/frontend/css/images/pop up.png') }}" alt="Ưu đãi tour HoaBinh Tourist"
                loading="lazy" decoding="async">
        </div>

        <div class="tour-promo-slide__form-wrap">
            <h2 class="tour-promo-slide__title" id="tourPromoSlideTitle">Để lại thông tin — chúng tôi tư vấn lịch trình &amp; báo giá miễn phí.</h2>

            <form id="tourPromoSlideForm" action="{{ route('tour.promo.register') }}" method="post" novalidate>
                {{ csrf_field() }}
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_name">Họ và tên <span aria-hidden="true">*</span></label>
                    <input type="text" id="tour_promo_name" name="name" required maxlength="255"
                        placeholder="Nguyễn Văn A" autocomplete="name">
                </div>
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_phone">Điện thoại <span aria-hidden="true">*</span></label>
                    <input type="tel" id="tour_promo_phone" name="tel" required minlength="10" maxlength="11"
                        pattern="[0-9]{10,11}" placeholder="0900 000 000" autocomplete="tel">
                </div>
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_email">Email</label>
                    <input type="email" id="tour_promo_email" name="email" maxlength="255"
                        placeholder="name@example.com" autocomplete="email">
                </div>
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_so_luong_ve">Số lượng vé <span aria-hidden="true">*</span></label>
                    <input type="number" id="tour_promo_so_luong_ve" name="so_luong_ve" required min="1" max="99"
                        placeholder="1" inputmode="numeric">
                </div>
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_chieu_di">Chiều đi <span aria-hidden="true">*</span></label>
                    <input type="text" id="tour_promo_chieu_di" name="chieu_di" required maxlength="255"
                        placeholder="VD: Hà Nội - TP. Hồ Chí Minh">
                </div>
                <div class="tour-promo-slide__field">
                    <label for="tour_promo_chieu_ve">Chiều về <span aria-hidden="true">*</span></label>
                    <input type="text" id="tour_promo_chieu_ve" name="chieu_ve" required maxlength="255"
                        placeholder="VD: TP. Hồ Chí Minh - Hà Nội">
                </div>
                <button type="submit" class="tour-promo-slide__submit" id="tourPromoSlideSubmit">Đăng ký nhận tư
                    vấn</button>
                <p class="tour-promo-slide__message" id="tourPromoSlideMessage" role="alert"></p>
            </form>
        </div>
    </div>
</div>

<script>
    (function () {
        var slide = document.getElementById('tourPromoSlide');
        var closeBtn = document.getElementById('tourPromoSlideClose');
        var form = document.getElementById('tourPromoSlideForm');
        var submitBtn = document.getElementById('tourPromoSlideSubmit');
        var messageEl = document.getElementById('tourPromoSlideMessage');

        if (!slide) {
            return;
        }

        var formWrap = slide.querySelector('.tour-promo-slide__form-wrap');
        var promoImg = slide.querySelector('.tour-promo-slide__media img');

        /** Ảnh giữ tỉ lệ gốc; chiều cao tối đa bằng chiều cao cột form (viewport ≥768px). */
        function syncPromoImgToFormHeight() {
            if (!formWrap || !promoImg) {
                return;
            }
            if (window.matchMedia('(max-width: 767px)').matches) {
                promoImg.style.maxHeight = '';
                return;
            }
            var h = formWrap.offsetHeight;
            promoImg.style.maxHeight = (h > 0 ? h : '') + (h > 0 ? 'px' : '');
        }

        if (formWrap && promoImg && typeof ResizeObserver !== 'undefined') {
            new ResizeObserver(syncPromoImgToFormHeight).observe(formWrap);
            if (promoImg.complete) {
                syncPromoImgToFormHeight();
            } else {
                promoImg.addEventListener('load', syncPromoImgToFormHeight);
            }
        }
        window.addEventListener('resize', syncPromoImgToFormHeight);
        function openSlide() {
            slide.classList.add('is-open');
            slide.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            requestAnimationFrame(syncPromoImgToFormHeight);
        }

        function closeSlide() {
            slide.classList.remove('is-open');
            slide.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        function showMessage(text, type) {
            if (!messageEl) {
                return;
            }
            messageEl.textContent = text;
            messageEl.className = 'tour-promo-slide__message is-' + type;
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closeSlide);
        }

        slide.addEventListener('click', function (e) {
            if (e.target === slide) {
                closeSlide();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && slide.classList.contains('is-open')) {
                closeSlide();
            }
        });

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }

                submitBtn.disabled = true;
                showMessage('', '');

                var formData = new FormData(form);

                fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    credentials: 'same-origin'
                }).then(function (res) {
                    return res.json().then(function (data) {
                        if (!res.ok) {
                            var msg = data.message || 'Đăng ký thất bại, vui lòng thử lại.';
                            if (data.errors) {
                                var firstKey = Object.keys(data.errors)[0];
                                if (data.errors[firstKey] && data.errors[firstKey][0]) {
                                    msg = data.errors[firstKey][0];
                                }
                            }
                            throw new Error(msg);
                        }
                        return data;
                    });
                }).then(function (data) {
                    showMessage(data.message || 'Đăng ký thành công! Chúng tôi sẽ liên hệ sớm.', 'success');
                    form.reset();
                    setTimeout(closeSlide, 2200);
                }).catch(function (err) {
                    showMessage(err.message || 'Đăng ký thất bại, vui lòng thử lại.', 'error');
                }).finally(function () {
                    submitBtn.disabled = false;
                });
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(openSlide, 800);
        });
    })();
</script>