<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $insertProduct = $pd -> insert_product($_POST, $_FILES); // hàm check khi submit lên
    }
?>
<div class="title-style"><h4><i class="fas fa-home mr-3"></i>Thêm sản phẩm</h4></div>
<div class="boxInsert">
    <?php 
    if(isset($insertProduct)){
        echo $insertProduct;
    }
    ?> 
    <form action="productadd.php" method="post" enctype="multipart/form-data">
        <table class="form">                    
            <tr>
                <td style="width: 150px;"><label>Username:</label></td>
                <td >
                    <input name="Username_Staff" type="text" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Password</label></td>
                <td >
                    <input name="Password_Staff" type="text" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Họ tên</label></td>
                <td >
                    <input name="FullName" type="text" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Giá lẻ</label></td>
                <td >
                    <input name="giale" type="text" class="medium" />
                </td>
            </tr>
            <tr>
                <td><label>Tải ảnh</label></td>
                <td >
                    <input name="image" type="file" />
                </td>
            </tr>
            <tr>
                <td id="td_end"></td>
                <td id="td_end">
                    <input type="submit" name="submit" Value="Save" />
                </td>
            </tr>
        </table>
    </form>
</div>