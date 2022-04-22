<div class="thankyou">
   
  <h1 class="display-3">Thank You!</h1>
</div>

<div class="fromdh">
    <div class="ttdh">
        <h2 class="h5-mi-des-bk">Thông tin người nhận hàng</h2>
        <?php
         $tongdonhang= number_format($tongdonhang,0,".",".");
        echo' <table>
        <tr>
            <td>Tên người nhận :</td>
            <td class ="tdhd">' . $ten . ' </td>
        </tr>
        <tr>
            <td> Số điện thoại :</td>
            <td class ="tdhd"> ' . $sdt . '</td>
        </tr>
        <tr>
            <td>Lưu ý cho shop:
            <td class ="tdhd">' . $gc . ' </td>
        </tr>
        <tr>
            <td>Thời gian đặt hàng:</td>
            <td class ="tdhd">' . $ngaydat . ' </td>
        </tr>
        <tr>
            <td> Địa chỉ giao hàng:</td>
            <td class ="tdhd"> ' . $dc . ' </td>
        </tr>
        <tr>
             <td>Tổng giá trị đơn hàng:</td>
             <td class ="tdhd">' . $tongdonhang . ' đ </td>
        </tr>
     
</table>';
        ?>



    </div>



    <div class="cartq">
        <H5><b>Sản Phẩm Đã Mua</b></H5>
        <div class="ctcart">
            <table>
                <tr>
                    <th>
                        Hình ảnh
                    </th>
                    <th>
                        Tên sản phẩm
                    </th>
                    <th>
                        Số lượng
                    </th>
                    <th>
                        Giá sản phẩm
                    </th>
                    <th>
                        Tổng tiền
                    </th>
                </tr>
                <?php
                hoadon();
                ?>
            </table>
        </div>
    </div>
  
</div>
  <div class="end">
      <a href="index.php?act=hoanthanh">
      <input type="button"  class="raise" value="Hoàn thành giao dịch">
      </a>
    </div>