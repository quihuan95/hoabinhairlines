<table style="width: 100%;" cellpadding="4" cellspacing="4">
    <tr>
        <td colspan="2" style="text-align: left;vertical-align: middle;">
            <p style="margin: 0px 0px 15px 0px;padding: 0px;text-align: center;font-size: 19px;"><b>THÔNG BÁO THANH TOÁN QUA CỔNG MOMO TỪ HOABINHAIRLINES.VN</b></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: left;vertical-align: middle;border-bottom:solid 1px #ccc;">
            <p style="margin: 0px;padding: 0px;"><b>THÔNG TIN KHÁCH HÀNG</b></p>
        </td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Họ và tên:</b></p></td>
        <td style="text-align: left;vertical-align: middle;">{{$fullname}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Email:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$email}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Điện thoại:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$phone}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Mã đơn hàng:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$vpc_OrderInfo}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Mã đặt chỗ:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$orderID}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Số tiền:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;"><b><?php echo number_format($fee); ?></b></td>
    </tr>
    <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Trạng thái:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">
                @if($txn==0)
                <label style="background-color: #5cb85c;display: inline;padding: 0.2em 0.6em 0.3em;font-size: 75%;font-weight: 700;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.25em;">
                    Giao dịch thành công
                </label>
                @else
                <label style="background-color: #d9534f;display: inline;padding: 0.2em 0.6em 0.3em;font-size: 75%;font-weight: 700;line-height: 1;color: #fff;text-align: center;white-space: nowrap;vertical-align: baseline;border-radius: 0.25em;">
                    {{ $response }}
                </label>
                @endif
                
            </td>
        </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Ghi chú:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$notes}}</td>
    </tr>
    <tr>
        <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Ngày/tháng:</b> </p></td>
        <td style="text-align: left;vertical-align: middle;">{{$created_at}}</td>
    </tr>
    
</table>

