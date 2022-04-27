<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="dkdt">
        <div class="dk">
            <h2>Đăng Ký Đối Tác</h2>
            <h2>Trung Nguyên Legend</h2><br><br>
            <h4>Thông tin doanh nghiệp</h4>
        </div><br><br>
        <form>
            <p>Tên doanh nghiệp</p>
            <input type="text"><br><br>
            <p>Mã số thuế doanh nghiệp</p>
            <input type="text"><br><br>
            <p>Địa chỉ doanh nghiệp</p>
            <input type="text"><br><br>
            <p>Số tài khoản ngân hàng</p>
            <input type="text"><br><br>
            <p>Tên người đại điện ngân hàng</p>
            <input type="text"><br><br>
            <p>Số điện thoại người đại điện</p>
            <input type="text"><br><br>
            <p>Email người đại diện</p>
            <input type="text"><br><br>
            <p>Mật khẩu</p>
            <input type="password">
            <p>Xác nhận mật khẩu</p>
            <input type="password"><br><br>
           
            <input type="submit" class="raise" onclick="myFunction()" name="xndk" value="Gửi thông tin">
        </form>
        <script>
            function myFunction() {
                alert("Thông tin đã được gởi đi, vui lòng chờ phản hồi từ công ty");
            }
        </script>
    </div>
</body>

</html>