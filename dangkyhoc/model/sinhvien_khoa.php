                <?php
                include_once("../publish/connect.php");

                $sql="SELECT  *
                FROM sinhvien INNER JOIN lophoc
                on sinhvien.lop=lophoc.lop
                inner join khoa
                on lophoc.makhoa=khoa.makhoa";
                $kq=mysqli_query($conn,$sql);
                    
                    while ($row=mysqli_fetch_array($kq)) {
                         echo "<option value=".$row[''].">".$row['hoten']." - khoa: ".$row['tenkhoa']."</option>";
                    }
                ?>