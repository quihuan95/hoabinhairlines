<style>
    .footer-license-wrap {
        max-width: 100%;
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
        color: #ffffff;
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
        color: #ffffff;
    }

    .footer-copyright-center {
        text-align: center;
        padding-top: 14px;
        font-size: 16px;
        color: #ffffff;
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
        color: #ffffff;
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

<div class="col-md-12 col-sm-12 copyright" style="padding-left: 0px !important; padding-right: 0px !important;">
    <div class="footer-license-wrap">
        <div class="license-cards">
            <button type="button" class="license-card license-card--pdf"
                data-pdf="https://cdn.hoabinhevents.com/profiles/GI%E1%BA%A4Y%20PH%C3%89P%20KDDV%20L%E1%BB%AE%20H%C3%80NH%20QT%20H%C3%92A%20B%C3%8CNH%20L%E1%BA%A6N%204.pdf"
                data-title="Giấy phép Lữ hành Quốc tế" aria-haspopup="dialog">
                <span class="license-icon"><img src="https://cdn.hoabinhevents.com/profiles/gpkd-luhanh-min2.PNG"
                        alt="Giấy phép Lữ hành Quốc tế" width="58" height="58"></span>
                <span class="license-content">
                    <strong>Giấy phép Lữ hành Quốc tế</strong>
                    <span class="license-more">Xem chi tiết &rarr;</span>
                </span>
            </button>
            <button type="button" class="license-card license-card--pdf"
                data-pdf="https://cdn.hoabinhevents.com/profiles/Gi%E1%BA%A5y%20ph%C3%A9p%20v%E1%BA%ADn%20t%E1%BA%A3i%20HB%20m%E1%BB%9Bi.pdf"
                data-title="Giấy phép Kinh doanh Vận tải" aria-haspopup="dialog">
                <span class="license-icon"><img src="https://cdn.hoabinhevents.com/profiles/gpkd-vantai-min2.PNG"
                        alt="Giấy phép Kinh doanh Vận tải" width="58" height="58"></span>
                <span class="license-content">
                    <strong>Giấy phép Kinh doanh Vận tải</strong>
                    <span class="license-more">Xem chi tiết &rarr;</span>
                </span>
            </button>
            <button type="button" class="license-card license-card--pdf"
                data-pdf="https://cdn.hoabinhevents.com/profiles/ISO.pdf" data-title="Giấy chứng nhận ISO"
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

        <div class="pdf-modal" id="licensePdfModal" role="dialog" aria-modal="true" aria-hidden="true"
            aria-label="Xem giấy phép">
            <div class="pdf-modal__dialog" role="document">
                <div class="pdf-modal__header">
                    <p class="pdf-modal__title" id="licensePdfTitle">Xem giấy phép</p>
                    <div class="pdf-modal__actions">
                        <a class="pdf-modal__download" id="licensePdfDownload" href="#" target="_blank" rel="noopener"
                            download>
                            <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true" focusable="false">
                                <path d="M12 3v10m0 0l4-4m-4 4l-4-4M5 17v3h14v-3" stroke="currentColor" stroke-width="2.2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Tải xuống
                        </a>
                        <button type="button" class="pdf-modal__close" id="licensePdfClose" aria-label="Đóng">
                            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" focusable="false">
                                <path d="M6 6l12 12M18 6L6 18" stroke="currentColor" stroke-width="2.6"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pdf-modal__body">
                    <iframe class="pdf-modal__iframe" id="licensePdfFrame" title="PDF viewer" loading="lazy"></iframe>
                </div>
            </div>
            <br />
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var pdfModal = document.querySelector("#licensePdfModal");
        var pdfFrame = document.querySelector("#licensePdfFrame");
        var pdfTitle = document.querySelector("#licensePdfTitle");
        var pdfClose = document.querySelector("#licensePdfClose");
        var pdfDownload = document.querySelector("#licensePdfDownload");
        var pdfTriggers = document.querySelectorAll(".license-card--pdf");

        if (!pdfModal || !pdfFrame || !pdfTriggers.length) {
            return;
        }

        var toMinimalPdfViewerUrl = function(url) {
            var hash = "toolbar=0&navpanes=0&scrollbar=0";
            return url.indexOf("#") !== -1 ? url : url + "#" + hash;
        };

        var openPdfModal = function(url, titleText) {
            if (!pdfModal || !pdfFrame) {
                return;
            }
            if (pdfTitle && titleText) {
                pdfTitle.textContent = titleText;
            }
            pdfFrame.src = toMinimalPdfViewerUrl(url);
            if (pdfDownload) {
                pdfDownload.href = url;
            }
            pdfModal.classList.add("is-open");
            pdfModal.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";
            if (pdfClose) {
                pdfClose.focus();
            }
        };

        var closePdfModal = function() {
            if (!pdfModal || !pdfFrame) {
                return;
            }
            pdfModal.classList.remove("is-open");
            pdfModal.setAttribute("aria-hidden", "true");
            pdfFrame.src = "";
            document.body.style.overflow = "";
        };

        for (var i = 0; i < pdfTriggers.length; i++) {
            pdfTriggers[i].addEventListener("click", function() {
                var url = this.getAttribute("data-pdf");
                var titleText = this.getAttribute("data-title") || "Xem giấy phép";
                if (url) {
                    openPdfModal(url, titleText);
                }
            });
        }

        if (pdfClose) {
            pdfClose.addEventListener("click", closePdfModal);
        }

        pdfModal.addEventListener("click", function(e) {
            if (e.target === pdfModal) {
                closePdfModal();
            }
        });

        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && pdfModal.classList.contains("is-open")) {
                closePdfModal();
            }
        });
    });
</script>
