<div class="fromdh">
    <div class="ttdh">
        <span class="h5-mi-des-bk">Thông tin nhận hàng</span>
        <p><span class="err">* Không được để trống</span></p>
        <?php
        echo'
        <form method="post"action="index.php?act=xndathang">
            Tên người nhận: <input type="text" name="name" value="">
            <br><br>
            STD liên hệ: <input type="text" name="phone" value="">
            <br><br>
            Địa chỉ giao hàng: <input type="text" name="dc" value="">
            <br><br>
            Ghi chú: <br>
            <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            <input type="submit" class="raise" name="dh" value=" Đồng ý đặt hàng">
            </form>
             <a href ="index.php?act=home"> <input type="submit" class="raise" name="" value=" Suy nghĩ lại"></a>'
        ?>
    </div>
    <div class="cartq">
        <span class="h5-mi-des-bk">Giỏ Hàng Của Bạn</span>
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

        <?php
        echo ' 
              <a href="index.php?act=xoatb">
              <input type="button"  class="raise" value="Xóa giỏ hàng"></a>';?>
    </div>
</div>