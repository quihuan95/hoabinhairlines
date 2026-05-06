<style>
    .footer-license-wrap {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0px;
        border-top: 1px solid #e9e9e9;
    }

    .footer-license-wrap .bottom_links {
        float: none !important;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 18px;
        margin: 0;
        padding: 15px;
        border-bottom: 1px solid #ececec;
    }

    .footer-license-wrap .bottom_links li {
        list-style: none;
        background: transparent !important;
        height: auto !important;
    }

    .footer-license-wrap .bottom_links img {
        display: block;
        max-width: 100%;
        height: 40px;
        width: auto;
    }

    .license-cards {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        border-bottom: 1px solid #ececec;
    }

    .license-card {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 16px 20px;
        text-decoration: none;
        color: #1f2b3d;
    }

    .license-card+.license-card {
        border-left: 1px solid #ececec;
    }

    button.license-card {
        width: 100%;
        background: transparent;
        border: 0;
        text-align: left;
        cursor: pointer;
    }

    button.license-card:focus-visible {
        outline: 3px solid rgba(47, 74, 111, 0.35);
        outline-offset: 2px;
        border-radius: 10px;
    }

    .license-icon {
        width: 58px;
        height: 58px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        color: #334f73;
        flex-shrink: 0;
    }

    .license-content strong {
        display: block;
        font-size: 16px;
        line-height: 1.2;
        margin-bottom: 4px;
    }

    .license-content p {
        margin: 0 0 6px;
        font-size: 14px;
        line-height: 1.35;
    }

    .license-more {
        font-size: 14px;
        font-weight: 600;
        color: #2f4a6f;
    }

    .footer-copyright-center {
        text-align: center;
        padding-top: 14px;
        font-size: 16px;
        color: #233246;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .footer-copyright-center .dmca-badge img {
        height: 28px;
        width: auto;
    }

    .pdf-modal {
        position: fixed;
        inset: 0;
        z-index: 100000;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 16px;
        background: rgba(0, 0, 0, 0.55);
    }

    .pdf-modal.is-open {
        display: flex;
    }

    .pdf-modal__dialog {
        width: min(980px, 96vw);
        height: min(760px, 86vh);
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.35);
        display: flex;
        flex-direction: column;
    }

    .pdf-modal__header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 12px 14px;
        border-bottom: 1px solid #e9e9e9;
    }

    .pdf-modal__actions {
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .pdf-modal__download {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 10px;
        border-radius: 10px;
        border: 1px solid #e6e6e6;
        background: #fff;
        color: #1f2b3d;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        line-height: 1;
    }

    .pdf-modal__download:focus-visible {
        outline: 3px solid rgba(47, 74, 111, 0.35);
        outline-offset: 2px;
    }

    .pdf-modal__title {
        font-size: 16px;
        font-weight: 700;
        margin: 0;
        color: #1f2b3d;
    }

    .pdf-modal__close {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        border: 1px solid #e6e6e6;
        background: #fff;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .pdf-modal__close:focus-visible {
        outline: 3px solid rgba(47, 74, 111, 0.35);
        outline-offset: 2px;
    }

    .pdf-modal__body {
        flex: 1;
        background: #f7f7f7;
    }

    .pdf-modal__iframe {
        width: 100%;
        height: 100%;
        border: 0;
        background: #fff;
    }

    @media (max-width: 767px) {
        .footer-license-wrap {
            padding: 8px 10px 12px;
        }

        .footer-license-wrap .bottom_links {
            flex-wrap: wrap;
            gap: 10px 12px;
            padding: 15px;
        }

        .footer-license-wrap .bottom_links li img {
            max-width: 64px;
        }

        .license-cards {
            grid-template-columns: 1fr;
        }

        .license-card {
            padding: 12px 10px;
            gap: 12px;
        }

        .license-card+.license-card {
            border-left: 0;
            border-top: 1px solid #ececec;
        }

        .license-icon {
            width: 42px;
            height: 42px;
            font-size: 20px;
        }

        .license-content strong {
            font-size: 15px;
            margin-bottom: 2px;
        }

        .license-content p {
            font-size: 14px;
            margin: 0 0 4px;
        }

        .license-more {
            font-size: 13px;
        }

        .footer-copyright-center {
            font-size: 14px;
            padding-top: 10px;
            gap: 6px;
        }

        .footer-copyright-center .dmca-badge img {
            height: 22px;
        }

        .pdf-modal__dialog {
            width: 96vw;
            height: 86vh;
            border-radius: 10px;
        }
    }
</style>

<div class="col-md-12 col-sm-12 copyright"
    style="padding-left: 0px !important; padding-right: 0px !important; margin-top: 30px;">
    <div class="footer-license-wrap">
        <div class="license-cards">
            <button type="button" class="license-card js-certificate-trigger"
                data-pdf-url="https://cdn.hoabinhevents.com/profiles/GI%E1%BA%A4Y%20PH%C3%89P%20KDDV%20L%E1%BB%AE%20H%C3%80NH%20QT%20H%C3%92A%20B%C3%8CNH%20L%E1%BA%A6N%204.pdf"
                data-title="Giấy phép Lữ hành Quốc tế" aria-haspopup="dialog">
                <span class="license-icon"><img src="https://cdn.hoabinhevents.com/profiles/gpkd-luhanh-min2.PNG"
                        alt="Giấy phép Lữ hành Quốc tế" width="58" height="58"></span>
                <span class="license-content">
                    <strong>Giấy phép Lữ hành Quốc tế</strong>
                    <span class="license-more">Xem chi tiết &rarr;</span>
                </span>
            </button>
            <button type="button" class="license-card js-certificate-trigger"
                data-pdf-url="https://cdn.hoabinhevents.com/profiles/Gi%E1%BA%A5y%20ph%C3%A9p%20v%E1%BA%ADn%20t%E1%BA%A3i%20HB%20m%E1%BB%9Bi.pdf"
                data-title="Giấy phép Kinh doanh Vận tải" aria-haspopup="dialog">
                <span class="license-icon"><img src="https://cdn.hoabinhevents.com/profiles/gpkd-vantai-min2.PNG"
                        alt="Giấy phép Kinh doanh Vận tải" width="58" height="58"></span>
                <span class="license-content">
                    <strong>Giấy phép Kinh doanh Vận tải</strong>
                    <span class="license-more">Xem chi tiết &rarr;</span>
                </span>
            </button>
            <button type="button" class="license-card js-certificate-trigger"
                data-pdf-url="https://cdn.hoabinhevents.com/profiles/ISO.pdf" data-title="Giấy chứng nhận ISO"
                aria-haspopup="dialog">
                <span class="license-icon"><img src="https://cdn.hoabinhevents.com/profiles/bqc-min.png"
                        alt="Giấy chứng nhận ISO" width="58" height="58"></span>
                <span class="license-content">
                    <strong>Giấy chứng nhận ISO</strong>
                    <p>TCVN ISO</p>
                    <span class="license-more">Xem chi tiết &rarr;</span>
                </span>
            </button>
        </div>

    </div>
</div>


<div id="certificate-modal" class="certificate-modal" style="display:none;">
    <div class="certificate-modal-backdrop js-certificate-close"></div>
    <div class="certificate-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="certificate-modal-title">
        <button type="button" class="certificate-modal-close js-certificate-close" aria-label="Đóng">&times;</button>
        <h3 id="certificate-modal-title" class="certificate-modal-title">Xem chứng nhận</h3>
        <iframe id="certificate-modal-iframe" src="" title="Chứng nhận" loading="lazy"></iframe>
        <div class="certificate-modal-actions">
            <a id="certificate-modal-download" href="#" target="_blank" rel="noopener" download class="btn btn-blue">
                <i class="fa fa-download" aria-hidden="true"></i> Tải xuống
            </a>
        </div>
    </div>
</div>
<style type="text/css">
    .tit a {
        float: right;
        font-size: 18px;
        margin-top: 8px;
        color: #04245d;
    }

    .tit a:hover {
        text-decoration: none;
    }

    .certificate-list {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .certificate-item {
        align-items: center;
        background: #f8fbff;
        border: 1px solid #dce8fb;
        border-radius: 8px;
        color: #04245d;
        display: flex;
        flex: 1 1 280px;
        min-height: 88px;
        padding: 12px;
        text-decoration: none;
        transition: all .2s ease;
    }

    .certificate-item:hover {
        border-color: #0a4fc2;
        box-shadow: 0 4px 12px rgba(4, 36, 93, .12);
        text-decoration: none;
    }

    .certificate-icon {
        align-items: center;
        background: #fff;
        border: 1px solid #dce8fb;
        border-radius: 50%;
        color: #d52727;
        display: inline-flex;
        font-size: 24px;
        height: 46px;
        justify-content: center;
        margin-right: 12px;
        min-width: 46px;
    }

    .certificate-content {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .certificate-content strong {
        color: #04245d;
        font-size: 15px;
        line-height: 1.4;
    }

    .certificate-action {
        color: #5e6f90;
        font-size: 13px;
    }

    .certificate-modal {
        inset: 0;
        position: fixed;
        z-index: 9999;
    }

    .certificate-modal-backdrop {
        background: rgba(0, 0, 0, .6);
        inset: 0;
        position: absolute;
    }

    .certificate-modal-dialog {
        background: #fff;
        border-radius: 10px;
        height: calc(100vh - 80px);
        left: 50%;
        max-width: 960px;
        padding: 18px 18px 10px;
        position: absolute;
        top: 40px;
        transform: translateX(-50%);
        width: calc(100% - 30px);
    }

    .certificate-modal-close {
        background: transparent;
        border: 0;
        color: #333;
        cursor: pointer;
        font-size: 34px;
        line-height: 1;
        position: absolute;
        right: 12px;
        top: 8px;
    }

    .certificate-modal-title {
        color: #04245d;
        font-size: 20px;
        margin: 0 0 10px;
        padding-right: 35px;
    }

    #certificate-modal-iframe {
        border: 1px solid #dce8fb;
        border-radius: 6px;
        height: calc(100% - 92px);
        width: 100%;
    }

    .certificate-modal-actions {
        margin-top: 10px;
        text-align: right;
    }

    @media only screen and (min-width:320px) and (max-width:736px) {
        .tit a {
            font-size: 15px;
        }

        .certificate-item {
            flex: 1 1 100%;
        }

        .certificate-modal-dialog {
            height: calc(100vh - 30px);
            top: 15px;
        }
    }
</style>
<script type="text/javascript">
    (function () {
        var modal = document.getElementById('certificate-modal');
        if (!modal) {
            return;
        }
        var iframe = document.getElementById('certificate-modal-iframe');
        var titleNode = document.getElementById('certificate-modal-title');
        var downloadLink = document.getElementById('certificate-modal-download');
        var triggers = document.querySelectorAll('.js-certificate-trigger');
        var closeNodes = document.querySelectorAll('.js-certificate-close');

        function closeCertificateModal() {
            modal.style.display = 'none';
            iframe.setAttribute('src', '');
            document.body.style.overflow = '';
        }

        function openCertificateModal(pdfUrl, title) {
            iframe.setAttribute('src', pdfUrl);
            titleNode.textContent = title || 'Xem chứng nhận';
            downloadLink.setAttribute('href', pdfUrl);
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        for (var i = 0; i < triggers.length; i++) {
            triggers[i].addEventListener('click', function () {
                openCertificateModal(this.getAttribute('data-pdf-url'), this.getAttribute('data-title'));
            });
        }

        for (var j = 0; j < closeNodes.length; j++) {
            closeNodes[j].addEventListener('click', closeCertificateModal);
        }

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.style.display === 'block') {
                closeCertificateModal();
            }
        });
    })();
</script>