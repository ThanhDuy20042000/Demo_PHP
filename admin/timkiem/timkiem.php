<div class="cafe">
    <div class="aline1">
        <p class="text1">Sản phẩm cho từ khóa tìm kiếm "<?php echo $smf ?>"
        </p>
    </div>
</div>
<div class="spkm">
    <ul>
        <?php
        foreach ($sptk as $sanpham) {
            extract($sanpham);
            $linksp = "index.php?act=chitiet&id=" . $id;
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