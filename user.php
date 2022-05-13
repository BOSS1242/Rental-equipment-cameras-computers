<?php 

    session_start();
    require_once 'config/db.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: signin.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Camera&Computer</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php 

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>
    </div>
    <div class="menubar">
        <div class="container">
            <div class="logo">
                <h1>Camera And Computer</h1>
            </div>
            <ul class="menu">
                <li>
                    <a href="user.php">Home</a>
                </li>
                <li>
                    <a href="hire.html">เช่า กล้อง-คอมพิวเตอร์</a>
                </li>
                <li>
                    <a href="logout.php" class="btn btn-danger"><span style="color:red;font-weight:bold">Logout</span></a>
                </li>
            </ul>
            <div class="links">
                    <div class="link">
                    <h3 class="mt-4">Welcome, <?php echo $row['firstname'] . ' ' . $row['lastname'] ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <header class="header">
        <div class="container">
            <div class="header_area">
                <h1>Camera And Computer</h1>
                <p>บริการให้เช่ากล้อง เเละ คอมพิวเตอร์ โน๊ตบุ๊ค ราคาถูก</p>
            </div>
        </div>
    </header>

    <section class="info1">
        <div class="container">
            <div class="info1_area">
                <img src="img/pic1.png" alt="">
                <div class="info1_text">
                    <h1>คอมพิวเตอร์ เเละ โน๊ตบุ๊ค</h1>
                    <p>บริการเช่าคอมพิวเตอร์ โน๊ตบุ๊ค รายเดือน/รายปี</p>
                    <p>1.ติดต่อได้ที่ช่องทาง Line เเล้ว บอกชื่อรุ่น</p>
                    <p>2.เลือกวันเวลา</p>
                    <p>3.เลือกสถานที่รับ รับได้ทั้งร้าน เเละ รับส่งนอกสถานที่</p>
                    <p>4.ฝากบัตรประชาชน หรือ ใบขับขี่ก็ได้</p>
                    <p>5.พร้อมเซนต์สัญญา เเละ ถ่ายรูปรับ-มอบ</p>
                </div>
            </div>
        </div>
    </section>

    <section class="info2">
        <div class="container">
            <div class="info2_area">
                <div class="info2_text">
                    <h1>กล้อง เเละ อุปกรณ์กล้อง</h1>
                    <p>บริการเช่ากล้อง รายวัน/รายเดือน</p>
                    <p>1.ติดต่อได้ที่ช่องทาง Line เเล้ว บอกชื่อรุ่น</p>
                    <p>2.เลือกวันเวลา</p>
                    <p>3.เลือกสถานที่รับ รับได้ทั้งร้าน เเละ รับส่งนอกสถานที่</p>
                    <p>4.ฝากบัตรประชาชน หรือ ใบขับขี่ก็ได้</p>
                    <p>5.พร้อมเซนต์สัญญา เเละ ถ่ายรูปรับ-มอบ</p>
                </div>
                <img src="img/cam.png" alt="">
                
                
            </div>
        </div>
    </section>

    <section class="info3">
        <div class="container">
            <div class="info3_area">
                <div class="info3_text">
                    <h1>สนใจเช่าติดต่อได้ที่ช่องทางนี้</h1>
                    <p>Line : @camandcom &nbsp Facebook : Camera And Computer</p>
                    <p>เบอร์ : 0959999999</p>
                    <h2>ที่อยู่ร้าน</h2>
                    <p>ซอยรังสิตภิรมย์ 12/12 ร้าน CameraAndComputer</p>
                    <p>ต.คลองหนึ่ง อ.คลองหลวง จ.ปทุมธานี 12120</p>
                    <p>เวลาทำการ 9.30-17.30 น. (หยุดวันอาทิตย์)</p>
                </div>
                <img src="img/line.png" alt="">
                <img src="img/facebook.png" alt="">
                <img src="img/telephone.png" alt="">
                
            </div>
        </div>
    </section>

    <div class="clearfix"></div>
    
</body>
</html>