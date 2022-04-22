<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <main>
        <div class="SP">
            <div class=main_SP>
                <div><span class="h5-mi-des-bk"> Sản Phẩm Khuyến Mãi</span></div>
            </div>
            <div class="spkm">
                <ul>
                    <?php
                    $main = main();
                    foreach ($main as $sanpham) {
                        extract($sanpham);
                        $gia = number_format($gia,0,".",".");
                        $giagoc = number_format($giagoc,0,".",".");
                        if ($phanloai ="sanphamkhuyenmai")
                        $linksp = "index.php?act=chitiet&id=".$id; {
                            echo '<li>
                                    <div class="zom">
                                        <div class="text_aline">
                                        <a href="'.$linksp.'"> <img src="public/image/' . $hinhanh . '"></a><br>
                                            <a href="'.$linksp.'"><div class="text-3">' . $ten . '</div></a>
                                            <br>
                                            <del>' . $giagoc . '   đ</del><br>
                                            <p>' . $gia . '   đ</p>
                                        </div>
                                    </div>
                                </li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="main_SP">
                <div><span class="h5-mi-des-bk"> Hàng Mới Về</span></div>
            </div>
            <div class="spkm">
                <ul><?php
                    $main_new = main_new();
                    foreach ($main_new as $sanpham) {
                        extract($sanpham);
                        $gia = number_format($gia,0,".",".");
                        $giagoc = number_format($giagoc,0,".",".");
                        $linksp = "index.php?act=chitiet&id=".$id;
                        echo '<li>
                        <div class="zom">
                        <div class="text_aline">
                        <a href="'.$linksp.'">
                        <img src="public/image/' . $hinhanh . '"><br>
                        </a>
                        <a href="'.$linksp.'"><div class="text-3">' . $ten . '</div></a>
                        <br>
                        <del>' . $giagoc . ' đ</del><br>
                        <p>' . $gia . '    đ</p>
                    </div></div>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
            <div class=main_SP>
                <div><span class="h5-mi-des-bk"> Sản Phẩm Bán chạy nhất</span></div>
            </div>
            <div class="spkm">
                <ul>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_9_3_.jpg"><br>
                            <a href="">Trung Nguyên Legend Success 1</a>
                            <br>
                            <del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_com0055_2.jpg"><br>
                            <a href="">
                                Combo máy pha cà phê BFC 2 group </a><br>
                            <del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_com0056.jpg"><br>
                            <a href="">Trung Nguyên Legend Success 2</a><br>
                            <del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_com0058.jpg"><br>
                            <a href="">
                                Combo máy pha cà phê Oscar II </a><br> <del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_com0058.jpg"><br>
                            <a href="">
                                Combo máy pha cafe Appia Life 1G </a><br><del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                    <li>
                        <div class="text_aline">
                            <img src="public/image/spkm/batch_combo_8.png"><br>
                            <a href="">Combo máy pha cà phê Oscar III </a><br><del>220.536 đ</del><br>
                            <p>189.661 đ</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="cafe">
            <div class="aline">
                <p class="text1"> Coffee
                </p>
                <p class="text2"> / </p>
                <p class="text3"> Cà phê năng lượng - Cà phê đổi đời</p>
            </div>
        </div>
        <div class="spkm">
            <ul>
                <?php 
                $main_coffee = main_coffe();
                foreach ($main_coffee as $sanpham) {
                    extract($sanpham);
                     $gia = number_format($gia,0,".",".");
                    $giagoc = number_format($giagoc,0,".",".");
                        $linksp = "index.php?act=chitiet&id=".$id;
                        echo 
                        '<li><div class="zom">
                            <div class="text_aline">
                            <a href="'.$linksp.'">
                                <img src="public/image/' . $hinhanh . '"><br>
                                <a href="'.$linksp.'"><div class="text-3">' . $ten . '</div></a>
                                <br>
                                <del>' . $giagoc . '   đ</del><br>
                                <p>' . $gia . ' đ</p>
                            </div></div>
                         </li>';
                }
                ?>
            </ul>
        </div>
        <div class="cafe">
            <div class="aline">
                <p class="text1"> Máy pha chế cà phê
                </p>
                <p class="text2"> / </p>
                <p class="text3"> Nhập từ các nhà phân phối chính hãng.</p>
            </div>
        </div>
        <div class="spkm">
            <ul>
                <?php
                $main_coffee = main_mayphacaffee();
                foreach ($main_coffee as $sanpham) {
                    extract($sanpham);
                        $linksp = "index.php?act=chitiet&id=".$id;
                        $gia = number_format($gia,0,".",".");
                        $giagoc = number_format($giagoc,0,".",".");
                        echo 
                        '<li><div class="zom">
                            <div class="text_aline">
                            <a href="'.$linksp.'">
                                <img src="public/image/' . $hinhanh . '"><br>
                                <a href="'.$linksp.'"><div class="text-3">' . $ten . '</div></a>
                                <br>
                                <del>' . $giagoc . '    đ</del><br>
                                <p>' . $gia . '   đ</p>
                            </div></div>
                         </li>';
                }
                ?>
            </ul>
        </div>
        <div class="cafe">
            <div class="aline">
                <p class="text1"> Nguyên phụ liệu pha chế
                </p>
            </div>
        </div>
        <div class="spkm">
            <ul>
                <?php
                $main_phulieu = main_phulieu();
                foreach ($main_phulieu as $sanpham) {
                    extract($sanpham);
                    $gia = number_format($gia,0,".",".");
                    $giagoc = number_format($giagoc,0,".",".");
                    $linksp = "index.php?act=chitiet&id=".$id;
                        echo 
                        '<li><div class="zom">
                            <div class="text_aline">
                            <a href="'.$linksp.'">
                                <img src="public/image/' . $hinhanh . '"><br>
                                <a href="'.$linksp.'"><div class="text-3">' . $ten . '</div></a>
                                <br>
                                <del>' . $giagoc . '    đ</del><br>
                                <p>' . $gia . '   đ</p>
                            </div></div>
                         </li>';
                }
                ?>
            </ul>
        </div>
        <div class="typical_list">
            <div class="list_01">
                <ul>
                    <li>
                        <h1> DANH MỤC TIÊU BIỂU</h1>
                    </li>
                    <li>
                        <div class="list_ul">
                            <ul>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/crown-win-royal.png"></a>
                                        </div>
                                        <div class="column02"> <a href=""> Cà phê hòa tan G7</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/coffee-maker-moka-pot.png"></a>
                                        </div>
                                        <div class="column02"> <a href=""> Máy pha cà phê viên nén</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/dinner-canteen-food-services.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Cà phê</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/espresso-pot-glass-coffee-bottle (1).png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Cà phê hòa tan G7</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/hot-drink-coffee-mug-cup-glass.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Dụng cụ nén cà phê</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/paper-cup-takeaway-coffee.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Máy làm cà phê đá xay</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/crown-win-royal.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Máy rang cà phê </a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/hot-drink-coffee-mug-cup-glass.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Máy bán tự động</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/dinner-canteen-food-services.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Cà phê hòa tan G7</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row02">
                                        <div class="column02">
                                            <a href=""> <img src="public/image/icon/coffee-maker-moka-pot.png"></a>
                                        </div>
                                        <div class="column02"><a href=""> Máy làm cà phê đá xoay</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="coffee_world">
            <div class="zom">
            <div class="row10">
                <h1>Thế Giới Cafe</h1>
            </div>
            <div class="row03">
                <div class="column03">
                    <a href=""> <img src="public/image/image_cafe_work/THE-ART-COFFEE-HOUSE-1.jpg">
                        <b>Văn hóa cà phê sài gòn</b>
                        <p>Otc31 - 02:44 PM</p>
                    </a>
                </div>
                <div class="column04">
                    <div class="row05">
                        <div class="column05">
                            <a href=""> <img src="public/image/image_cafe_work/190.jpg">
                                <b>Cà phê xưa và nay</b>
                                <p>Nov 22- 04:44 PM</p>
                            </a>
                        </div>
                        <div class="column05">
                            <a href=""> <img src="public/image/image_cafe_work/42425d5f373553a3f986734d1f575bf7.jpg">
                                <b> Sự tinh tế trong văn hóa cà phê của người ý</b>
                                <p>Nov 22- 04:44 PM</p>
                            </a>
                        </div>
                    </div>
                    <div class="row05">
                        <div class="column05">
                            <a href=""> <img src="public/image/image_cafe_work/CA-PHE-Scandinavian.png">
                                <b> Top những phong cách quán cà phê chất nhất hiện nay</b>
                                <p>Nov 22- 04:44 PM</p>
                            </a>
                        </div>
                        <div class="column05">
                            <a href=""> <img src="public/image/image_cafe_work/QUAY-PHA-CHE.jpg">
                                <b> Có gì bênh trong một quầy pha chế cà phê</b>
                                <p>Nov 22- 04:44 PM</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
      
    </main>
</body>
</html>