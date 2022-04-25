<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="ctsp">
        <ul>
            <li>
                <?php
                extract($ctsp);
                $giagoc = number_format($giagoc, 0, ".", ".");
                $giafm = $gia;
                $giafm = number_format($giafm, 0, ".", ".");
                echo ' <div class="zom">
                    <ul>
                        <li>
                            <img src="public/image/' . $hinhanh . '">
                        </li>
                        <li>
                            <p class="textct">' . $ten . '</p>
                            <p>' . $thongtin . ' </p>
                            <p c> Kho còn: &nbsp;' . $soluong . ' &nbsp;sản phẩm</p>
                            <div class="gia">
                                Giá: 
                                <p>' . $giafm . 'đ</p>
                                <del>' . $giagoc . 'đ</del>
                            </div>
                            <div>
                            <form method="post" action="index.php?act=giohang" >
                                    <input type="hidden" name ="id" value ="' . $id . '">
                                    <input type="hidden" name ="ten" value ="' . $ten . '">
                                    <input type="hidden" name ="hinhanh" value ="' . $hinhanh . '">
                                    <input type="hidden" name ="gia" value ="' . $gia . '">
                                     Chọn số lượng  <input type="number"  class="numbersl" name ="soluong" min="1" max ="10" value="1"><br>
                                    <input type="submit"  class="raise" name ="them" value ="Thêm vào giỏ hàng">   
                            </form>
                            </div>
                        </li>
                    </ul></div>
                    <div class="mt">
                        <ul>
                            <li><div class ="tt">Mô tả sản phẩm</div></li>
                            </ul>
                    </div>  
                        <div class="mtsp">
                            <ul>
                                <li>' . $mota . '
                                </li>
                            </ul>
                        </div>
                    </div>';

                ?>

            </li>
        </ul>
    </div>



    </form>
    <div class="cafe">
        <div class="aline1">
            <p class="text1"> Sản phẩm liên quan
            </p>
        </div>
    </div>
    <div class="spkm">
        <ul>
            <?php
            foreach ($spcl as $sanpham) {
                extract($sanpham);
                $linksp = "index.php?act=chitiet&id=".$id;
                echo
                '<li>
                    <div class="zom">
                            <div class="text_aline">
                            <a href="' . $linksp . '">
                                <img src="public/image/' . $hinhanh . '"><br>
                                <a href="' . $linksp . '"><div class="text-3">' . $ten . '</div></a>
                                <br>
                            </div></div>
                         </li>';
            }
            ?>
        </ul>
    </div>

</body>

</html>