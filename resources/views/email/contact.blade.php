<div style="width: 80%;margin: 0 auto;border: solid 1px #ccc;padding: 10px;border-radius: 10px;">
    <table style="width: 100%;">
        <tr>
            <td colspan="2" style="text-align: left;vertical-align: middle;">
                <p style="margin: 0px;padding: 0px;">Email is sent from the page: https://eventcrew.asia/contact</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;vertical-align: middle;">
                <p style="margin: 0px;padding: 0px;"><b>CONTACT INFORMATION</b></p>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Fullname:</b></p></td>
            <td style="text-align: left;vertical-align: middle;">{{$fullname}}</td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Email:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">{{$email}}</td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Address:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">{{$address}}</td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Mobile:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">{{$mobile}}</td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Request:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">{{$request}}</td>
        </tr>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>Date:</b> </p></td>
            <td style="text-align: left;vertical-align: middle;">{{$created_at}}</td>
        </tr>
        <?php if($file!=''){ ?>
        <tr>
            <td style="text-align: left;vertical-align: middle;width: 30%;"><p style="margin: 0px;padding: 0px;"><b>File:</b></p></td>
            <td style="text-align: left;vertical-align: middle;"><a href="{{asset('public/uploads/'.$file)}}">File Attachment</a></td>
        </tr>
        <?php } ?>
    </table>
</div>










