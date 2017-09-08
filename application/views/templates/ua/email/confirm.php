<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="600" style="margin-top:15px">
    <tbody>
    <tr>
        <td align="center" valign="bottom" id="m_8397510277536891065headerImage">
            <table width="100%" cellpadding="0" cellspacing="0" style="border-bottom:3px solid #df3a6b;padding-bottom:10px;background-color:#fff">
                <tbody>
                <tr>
                    <td valign="top" bgcolor="#df3a6b" width="100%" style="padding:0">
                        <img src="http://thoitrangchobe.com.vn/assets/images/ua/logo.png" />
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr style="background:#fff">
        <td align="left" width="600" height="auto" style="padding:15px">
            <table>
                <tbody>
                <tr>
                    <td>
                        <h1 style="font-size:17px;font-weight:bold;color:#444;padding:0 0 5px 0;margin:0">
                            Cảm ơn
                            quý khách {{traveller-name}}
                            đã đặt hàng tại {{domain}},</h1>

                        <p style="margin:4px 0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                            Cherry Store rất vui thông báo đơn hàng #{{refno}} của quý khách đã
                            được tiếp nhận và đang trong quá trình xử lý. Cherry Store sẽ liên hệ với quý khách sớm nhất.
                        </p>
                        <h3 style="font-size:13px;font-weight:bold;color:#df3a6b;text-transform:uppercase;margin:20px 0 0 0;border-bottom:1px solid #ddd">
                            Thông tin đơn hàng #{{refno}} <span style="font-size:12px;color:#777;text-transform:none;font-weight:normal">({{date-time}})</span>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">

                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <thead>
                            <tr>
                                <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold">
                                    Thông tin thanh toán
                                </th>
                                <th align="left" width="50%" style="padding:6px 9px 0px 9px;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;font-weight:bold">
                                    Địa chỉ giao hàng
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                    <span style="text-transform:capitalize">{{traveller-name}}</span><br>
                                    {{email}}<br>
                                    {{phone}}
                                </td>

                                <td valign="top" style="padding:3px 9px 9px 9px;border-top:0;border-left:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
									<span style="text-transform:capitalize">
									{{traveller-name}}</span><br>
                                    {{email}}<br>
                                    {{address}}<br>
                                    {{phone}}
                                </td>
                            </tr>


                            <tr>
                                <td valign="top" style="padding:7px 9px 0px 9px;border-top:0;font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444" colspan="2">
                                    <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal">
                                        <strong>Phương thức thanh toán: </strong>
                                        Thanh toán tiền mặt khi nhận hàng
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2 style="text-align:left;margin:10px 0;border-bottom:1px solid #ddd;padding-bottom:5px;font-size:13px;color:#df3a6b">
                            CHI TIẾT ĐƠN HÀNG</h2>

                        <table cellspacing="0" cellpadding="0" border="0" width="100%" style="background:#f5f5f5">
                            <thead>
                            <tr>
                                <th align="left" bgcolor="#df3a6b" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Sản phẩm</th>
                                <th align="left" bgcolor="#df3a6b" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px"> Đơn giá(VND)</th>
                                <th align="left" bgcolor="#df3a6b" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Số lượng</th>
                                <th align="right" bgcolor="#df3a6b" style="padding:6px 9px;color:#fff;font-family:Arial,Helvetica,sans-serif;font-size:12px;line-height:14px">Tổng tạm(VND)</th>
                            </tr>
                            </thead>
                            <tbody bgcolor="#eee" style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                            <!--s-item-->
                            <tr>
                                <td align="left" valign="top" style="padding:3px 9px">
                                    <span class="">{{product-name}}</span><br>
                                    <span class="">{{size-name}}</span><br>
                                </td>
                                <td align="left" valign="top" style="padding:3px 9px"><span>{{price}}</span></td>
                                <td align="left" valign="top" style="padding:3px 9px">{{quantity}}</td>
                                <td align="right" valign="top" style="padding:3px 9px"><span>{{total-item}}</span></td>
                            </tr>
                            <!--e-item-->
                            </tbody>
                            <tfoot style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px">
                            <tr bgcolor="#eee">
                                <td colspan="3" align="right" style="padding:7px 9px"><strong><big>Tổng giá trị đơn hàng (Chưa tính phí vẫn chuyển)</big></strong></td>
                                <td align="right" style="padding:7px 9px"><strong><big><span>{{total}} VND</span></big></strong></td>
                            </tr>
                            </tfoot>
                        </table>
                        <div style="margin:auto">
                            <a href="http://{{domain}}/thankyou/{{booking-id}}"
                               style="display: inline-block;
									text-decoration: none;
									background-color: #df3a6b!important;
									margin-right: 30px;
									text-align: center;
									border-radius: 3px;
									color: #fff;
									padding: 5px 10px;
									font-size: 12px;
									font-weight: bold;
									margin-left: 35%;
									margin-top: 5px;">Chi tiết đơn hàng tại Cherry Store</a></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>

                        <p style="text-align:right;font-family:Arial,Helvetica,sans-serif;font-size:11px;margin:0;padding:0;line-height:18px;color:#444;font-weight:bold">
                            Một lần nữa Cherry Store cảm ơn quý khách.<br>
                        </p>

                        <p style="font-family:Arial,Helvetica,sans-serif;font-size:12px;color:#444;line-height:18px;font-weight:normal;text-align:right">
                            <strong>
                                <a style="color:#df3a6b;text-decoration:none;font-size:14px"
                                   href="http://{{domain}}" target="_blank">Cherry Store</a>
                            </strong>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>

</table>
</body>
</html>