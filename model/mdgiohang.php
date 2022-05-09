<?php
function giohang()
{
    $tongtien = 0;
    $i = 0;
    foreach ($_SESSION['giohang'] as $giohang) {
        $tong = $giohang[3] * $giohang[4];
        $tongtien += $tong;
        $giohang[3] = number_format($giohang[3], 0, ".", ".");
        $tong = number_format($tong, 0, ".", ".");
        $xoa = '<a href="index.php?act=xoa&idgio=' . $i . '"><input type="button" value="Xóa"></a>';
        echo '
            <tr>
                <td class="imgw"><img src ="public/image/' . $giohang[2] . '"></td>
                <td>' . $giohang[1] . '</td>
                <td>' . $giohang[4] . '</td>
                <td>' . $giohang[3] . '</td>
                <td>' . $tong . '</td>
                <td>' . $xoa . '</td>
            </tr>';
        $i += 1;
    }
    $tongtien = number_format($tongtien, 0, ".", ".");
    echo '
            <tr>
                <td colspan="4">Tổng giá trị đơn hàng</td>
                <td>' . $tongtien . '</td> 
                <td></td>
                </tr>
                ';
}
function hoadon()
{
    $tongtien = 0;
    $i = 0;
    foreach ($_SESSION['giohang'] as $giohang) {
        $tong = $giohang[3] * $giohang[4];
        $tongtien += $tong;
        $giohang[3] = number_format($giohang[3], 0, ".", ".");
        $tong = number_format($tong, 0, ".", ".");
        echo '
            <tr>
                <td class="imgw"><img src ="public/image/' . $giohang[2] . '"></td>
                <td>' . $giohang[1] . '</td>
                <td>' . $giohang[4] . '</td>
                <td>' . $giohang[3] . '</td>
                <td>' . $tong . '</td>
            </tr>';
        $i += 1;
    }
}
function tongdon()
{
    $tongtien = 0;
    foreach ($_SESSION['giohang'] as $giohang) {
        $tong = $giohang[3] * $giohang[4];
        $tongtien += $tong;
    }
    return $tongtien;
}
function datadh($ten, $sdt, $dc, $gc, $ngaydat, $tongdonhang)
{
    $sql = "insert into donhang(ten,sdt,diachi,ghichu,ngaydat,tongtien) value('$ten','$sdt','$dc','$gc','$ngaydat','$tongdonhang')";
    return pdo_query_lastInsertId($sql);
}
function datagh($img, $name, $gia, $soluong, $tongdon, $idbill)
{
    $sql = "insert into giohang(img,name,gia,soluong,tongdon,idbill) value('$img','$name','$gia','$soluong','$tongdon','$idbill')";
    return pdo_query_lastInsertId($sql);
}
