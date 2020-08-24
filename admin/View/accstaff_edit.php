<?php 
    if(!isset($_GET['id']) || $_GET['id'] == NULL){
        echo "<script> window.location = 'index.php?act=accstaff_list' </script>";
    }else {
        $id = $_GET['id']; // Lấy brandid trên host
    }
    // gọi class brand
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
        $updateaccStaff = $acc -> update_accstaff($_POST,$id);
    }
  ?>
        <div class="title-style"><h4><i class="fas fa-home mr-3"></i>Cập nhật tài khoản nhân viên</h4></div>
        <div class="boxInsert">
            <?php 
                if(isset($updateaccStaff)){
                    echo $updateaccStaff;
                }
            ?>
            <?php 
                $getaccstaffbyId = $acc->getaccstaffbyId($id);
                foreach($getaccstaffbyId as $value){
            ?>
            <form method="post">
                <table class="form">                    
                    <tr>
                        <td style="width:150px"><label>Username:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['Username_Staff']; ?>" name="Username_Staff" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['Password_Staff']; ?>" name="Password_Staff" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>Họ và tên:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['FullName']; ?>" name="FullName" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>Số điện thoại:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['Phone']; ?>" name="Phone" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>CMND:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['CMND']; ?>" name="CMND" />
                        </td>
                    </tr>
                    <tr>
                        <td><label>Địa chỉ:</label></td>
                        <td>
                            <input type="text" value="<?php echo $value['Address']; ?>" name="Address" />
                        </td>
                    </tr>
                    <tr>
                        <td id="td_end"style=" width:150px"><label>Id_Role:</label></td>
                        <td id="td_end">
                            <input type="text" value="<?php echo $value['Id_Role']; ?>" name="Id_Role" />
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
                    <?php 
                }
             ?>
        </div>
    </div>
</div>
