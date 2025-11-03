<style type="text/css">
	.ft-content-item{ float: left; }
	@media  only screen and (min-width:320px) and (max-width:736px){
		.fflabel{ display: none; }
		#ft-col-1{ margin-top: -8px; }
		.contact-text, .contact-footer{ display: block; }
		.list-contact-footer.has-img-location{ display: block;margin-top: 20px; }
	}
</style>
<div id="footermainhm">
	<div class="clearfix">&nbsp;</div>
<div class="footer">
	<div class="row m0">
		<div class="">
			<div class="col-xs-12 col-sm-12 col-md-12 p0">
				<div class="row m0mb">
					<div class="col-xs-12 col-sm-6 col-md-7 pr0 pr15mb">
						<div class="ft-content-item" style="padding-right:88px;">
							<label style="font-size: 18px;">Chính sách và điều khoản</label>
							<ul id="ft-col-1">
								<li><a href="{{ URL::to('pages/chinh-sach-bao-mat') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Chính sách bảo mật</a></li>
								<li><a href="{{ URL::to('pages/chinh-sach-doi-tra-ve-va-hoan-tien') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Chính sách đổi trả vé và hoàn tiền</a></li>
								<li><a href="{{ URL::to('pages/chinh-sach-giao-nhan') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Chính sách giao nhận</a></li>
								<li><a href="{{ URL::to('pages/hinh-thuc-thanh-toan') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Hình thức thanh toán</a></li>
								<li><a href="{{ URL::to('pages/quy-che-hoat-dong-san-tmdt') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Quy chế hoạt động sàn TMĐT</a></li>
							</ul>
						</div>
						<div class="ft-content-item" style="width: 220px;">
							<label style="font-size: 18px;">&nbsp;</label>
							<ul id="ft-col-1">
								<li><a href="{{ URL::to('pages/dieu-khoan-su-dung') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Điều khoản sử dụng</a></li>
								<li><a href="{{ URL::to('pages/dieu-le-van-chuyen') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Điều lệ vận chuyển</a></li>
								<li><a href="{{ URL::to('pages/dieu-kien-ve') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Điều kiện vé</a></li>
								<li><a href="{{ URL::to('kiem-tra-don-hang') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Kiểm tra đơn hàng</a></li>
								<li><a href="{{ URL::to('pages/nghia-vu-cua-nguoi-ban-va-nghia-vu-cua-khach-hang-trong-moi-giao-dich') }}" rel="nofollow"><i class="fa fa-angle-right mr5" aria-hidden="true"></i> Nghĩa vụ của người bán và nghĩa vụ của khách hàng trong mỗi giao dịch</a></li>
								
							</ul>
						</div>
						
					</div>

				</div>
			</div>

			<div class="clearfix"></div>

			<hr/>

			<div class="clearfix"></div>

			<div class="txt-addr txc-xs txt-copyright">
				<p style="text-align:center;"><b>Công ty TNHH ĐTTM và Du Lịch Quốc Tế Hòa Bình</b></p>
				<p style="text-align:center;">Giấy chứng nhận ĐKKD số 0102720141 do Sở KH & ĐT TP. Hà Nội cấp</p>
				<p style="text-align:center;">Đăng ký lần đầu ngày 14/04/2008. Đăng ký thay đổi lần thứ 5, ngày 14/04/2021</p>
				<p style="text-align:center;">Email: <a rel="nofollow" href="mailto:info@hoabinhtourist.com">info@hoabinhtourist.com</a> | <a rel="nofollow" href="mailto:lan.pham@hoabinh-group.com">lan.pham@hoabinh-group.com</a> - Phản ánh dịch vụ: <a rel="nofollow" href="tel:0918640988">0918 640 988</a></p>
				<p style="text-align:center;"><a href="https://hoabinhairlines.vn/sitemap.xml" rel="dofollow" target="_blank">Sitemap website</a></p>
			</div>
		</div>
	</div>

	<a rel="nofollow"  class="scrollToTop" id="bttop">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
	</a>

	<div class="modal right fade" id="menuRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="header-menu-mb">Hòa Bình Airlines</div>
				<hr class="m0">

				<div class="list-menu-mb">
					<ul class="menu-mb">
 
						<li>
							<a rel="nofollow" href="/"><i class="fa fa-home" aria-hidden="true"></i>Trang chủ</a>
						</li>
						<?php $menu_mobile=App\Models\Menus::render_menu_mobile(); 
							echo $menu_mobile;
						?>
					</ul>

				</div>

			</div>
		</div>
	</div>

</div>
</div>

</div>
