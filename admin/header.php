<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css.css">
    <link rel="stylesheet" href="public/button.js">
</head>

<body>
    <header>
        <div class="container">
            <div class="panel_header">
                <div class="panel_wrapper">
                    <div class="panel_box">
                        <h1>
                            Trang thương mại điện tử chính thức của Tập Đoàn Trung Nguyên Legend
                        </h1>
                    </div>
                </div>
                <div class="header_link">
                    <ul>
                        <li>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                1900 6016
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=dkdt"> Trở thành đối tác</a>
                        </li>
                        <li>
                            <a href="index.php?act=ktbh"> Kiểm tra bảo hành</a>
                        </li>
                        <li>
                            <a href="index.php?act=ktbh"> Đăng nhập</a>
                        </li>
                        <li>
                            <a href="index.php?act=ktbh"> Đăng ký</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header_content">
                <div class="header_logo">

                    <a href="index.php">
                        <img src="public/image/logo/logo-TGCF-224.png">
                    </a>

                </div>


                <div class="header_seach">
                    <div class="block-search">
                        <form class="form minisearch" id="search_mini_form" action="index.php?act=timkiem" method="post">
                            <div class="field search">
                                <div class="control">
                                    <input id="search" type="text" name="smf" value="" placeholder="Tìm tại đây vô vàn sản phẩm cà phê chính hãng từ tập đoàn Trung Nguyên Legend..." class="text-sm-le-des-gr input-text" maxlength="128" role="combobox" aria-haspopup="false" aria-autocomplete="both" autocomplete="off">
                                    <div id="search_autocomplete" class="search-autocomplete" style="display: none;"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="headea">
                        <a href="index.php?act=htgiohang">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z" />
                            </svg> Giỏ hàng
                        </a>
                    </div>
                </div>
            </div>




        </div>
        <div class="DMSP">
            <ul>
                <li>
                    <div class="ruler2">
                        <div class="ruler"></div>
                        <div class="ruler"></div>
                        <div class="ruler"></div>
                    </div>
                    <div class="no2">Danh mục sản phẩm</div>
                </li>
            </ul>
            <div class="no1">
                <ul>
                    <li><a href="#spkm">
                            <img src="public/image/item/gift-box-reward-bonus-surprise_3x.png">
                            Sản phẩm khuyến mãi</a>
                    </li>
                    <li><a href="#spbc">
                            <img src="public/image/item/star-icon_1.png">
                            Bán chạy nhất
                    </li></a>
                    <li><a href="#spmoi">
                            <img src="public/image/item/new-icon_1.png">
                            Sản phẩm mới</a>
                    </li>
                    <li><a href="index.php?act=blog">
                            <img src="public/image/item/cup-coffee.png">
                            Blog cà phê</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header_max">
            <div class="navi">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="public/image/slide/200-tet_2022.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/slide/resize-23.3-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/slide/untitled-2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="public/image/slide/untitled-3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div><!-- JavaScript Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <div class="navi1">
                    <ul>
                        <li>
                            <div class="row01">
                                <div class="column01">
                                    <img src="public/image/icon_na/handshake-collaboration-partnership.png">
                                </div>
                                <div class="column01"> Giá tốt cho toàn đối tượng mua số lượng lớn</div>
                            </div>
                        </li>
                        <li> 
                            <div class="row01">
                                <div class="column01">
                                <img src="public/image/icon_na/shield-protection-guard-insurance-money.png">
                                </div>
                                <div class="column01">  Thanh toán an toàn tuyệt đối</div>
                            </div>
                        </li>
                        <li> 
                        <div class="row01">
                                <div class="column01">
                                <img src="public/image/icon_na/van-truck-delivery-fast-service.png">
                                </div>
                                <div class="column01"> Giao hàng toàn quốc đảm bảo</div>
                            </div>
                          
                        </li>
                        <li>
                            <div class="row01">
                                <div class="column01">
                                    <img src="public/image/icon_na/espresso-pot-glass-coffee-bottle.png">
                                </div>
                                <div class="column01">Chất lượng cà phê đạt chuẩn toàn cầu</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#">
                            <img src="public/image/iteam1/coffee-bean_3x.png"> Cà phê</a>
                           
                        <ul class="sub-menu ">
                            <div class="row">
                            <div class="column">

                                    <H1> CÀ PHÊ </H1>
                            </div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                                <div class="column2"> Cà phê Hạt</div>
                            </div>
                        </ul>
                          
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/images_1.jpg">Máy Cà phê</a>
                  
                        <ul class="sub-menu menu1">
                            <div class="row">
                            <div class="column">
                                    <H1> MÁY CÀ PHÊ </H1>
                            </div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                  
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/coffee-maker-moka-pot_3x.png">
                            Công dụng cụ cà phê
                        </a>
                        <ul class="sub-menu menu2">
                            <div class="row">
                            <div class="column">
                                    <H1>  CÔNG DỤNG CỤ CÀ PHÊ </H1>
</div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/wine-bartender-glass-lemon_3x.png">
                            Nguyên phụ liệu pha chế

                        </a>
                        <ul class="sub-menu menu3">
                            <div class="row">
                            <div class="column">
                                    <H1> NGUYÊN LIỆU PHA CÀ PHÊ </H1>
</div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#">
                            <img src="public/image/iteam1/paper-cup-takeaway-coffee_3x.png">
                            Ly - Cốc - Tách - Phin

                        </a>
                        <ul class="sub-menu menu4">
                            <div class="row">
                            <div class="column">
                                    <H1>  Ly - Cốc - Tách - Phin </H1>
</div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/dinner-canteen-food-services_3x.png">
                            Giải pháp cho văn phòng

                        </a>
                        <ul class="sub-menu menu5">
                            <div class="row">
                            <div class="column">
                                    <H1> GIẢI PHÁP CHO VĂN PHÒNG</H1>
</div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/gift-box-reward-bonus-surprise_3x (1).png">
                            Quà tặng

                        </a>
                        <ul class="sub-menu menu6">
                            <div class="row">
                            <div class="column">
                                    <H1> QUÀ TẶNG </H1>
</div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                    <li><a href="#"> <img src="public/image/iteam1/wine-bartender-glass-lemon_3x.png">Công thức pha chế


                        </a>
                        <ul class="sub-menu menu7">
                            <div class="row">
                                <div class="column">
                                    <H1> CÔNG THỨC PHA CHẾ </H1>
                                </div>
                                <div class="column1">
                                    <li><a href="#">Cà phê chuyên biệt</a></li>
                                    <li><a href="#">Cà phê rang xoay</a>
                                        <a href=""> Dòng Trung cao </a>
                                        <a href=""> Dòng phổ thông </a>
                                        <a href=""> Casule </a>
                                        <a href=""> Cà phê Phin giấy</a>
                                    </li>
                                    <li><a href="#"> Cà phê hòa tan</a>
                                        <a href="">Cà phê hòa tan</a>
                                        <a href=""> Trung Nguyên G7</a>
                                        <a href=""> Trung nguyên Legend</a>
                                        <a href=""> Cà phê đặc chế</a>
                                    </li>
                                    <li>
                                    </li>
                                </div>
                               <div class="column2"> Cà phê Hạt</li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
</body>

</html>