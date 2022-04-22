<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tyle.css">
</head>
<body>
    <div class="ttgiohang">
    <span class="h5-mi-des-bk">Giỏ Hàng Của Bạn</span>
        <div class="giohang">
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
                    <th>
                        Thao tác
                    </th>
                </tr>
                <?php
                giohang();
                echo ' 
                    <a href="index.php?act=xoatb">
                    <input type="button"class="raise" value="Xóa giỏ hàng"></a>
                    <a href="index.php?act=home">
                    <input type="button" class="raise" value="Tiếp tục mua sắm"></a>
                    <a href="index.php?act=dathang">
                    <input type="button" class="raise" value="Đặt hàng"></a> ';
            ?>
            </table>
        </div>
    </div>
</body>
</html>