<!-- body -->

<body class="main-layout">
    <div">
        <div class="container">
            <div class="row offset-md-1">
                <div class="col-lg-6">
                    <div class="d-flex">
                            <img style="width: 50px; height: 50px" src="./Content/images/email-gradient.png" alt="">
                            <div class="d-flex">
                                <h3 style="line-height: 50px">Email: </h3>
                                <span style="line-height: 50px" class="text-secondary mx-1">Lighten@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img style="width: 50px; height: 50px" src="./Content/images/insta-gradient.png" alt="">
                            <div class="d-flex">
                                <h3 style="line-height: 50px">Instagram: </h3>
                                <span style="line-height: 50px" class="text-secondary mx-1">lighten</span>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div class="d-flex">
                        <img style="width: 50px; height: 50px" src="./Content/images/fb-gradient.png" alt="">
                        <div class="d-flex">
                            <h3 style="line-height: 50px">Facebook: </h3>
                            <span style="line-height: 50px" class="text-secondary mx-1">fb.com/lighten</span>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img style="width: 50px; height: 50px" src="./Content/images/youtube-gradient.png" alt="">
                        <div class="d-flex">
                            <h3 style="line-height: 50px">Youtube: </h3>
                            <span style="line-height: 50px" class="text-secondary mx-1">LIGHTEN Concept</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        </div>
        <!-- contact -->
        <div class="contact p-2">
            <div class="container">
                <div class="mx-5">
                    <h1 >THÔNG IN BẠN CẦN GÓP Ý: </h1>
                    <p class="text-secondary">
                        Nếu bạn cần liên hệ gấp vui lòng gọi hotline: 0703.038.870
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $name = '';
                        $email = '';
                        $sdt = '';
                        $noidung = '';
                        if (isset($_POST['submit'])) {
                            $name = $_POST['YourName'];
                            $email = $_POST['Email'];
                            $sdt = $_POST['Phone'];
                            $noidung = $_POST['content'];
                            if ($name != '' && $email != '' && $sdt != '' && $noidung != '') {
                                echo "<script> alert('Cảm ơn bạn đã góp ý, Chúng tôi sẽ liên hệ bạn sớm nhất có thể') </script>";
                                $lh = new lienhe();
                                $kq = $lh->getInfo($name, $email, $sdt, $noidung);
                            } else {
                                echo "<script> alert('Thông tin nhập không đầy đủ! Hãy nhập lại') </script>";
                            }
                        }

                        ?>
                        <form action="index.php?action=contact" method="POST" class="main_form">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 ">
                                    <input style="border-radius: 20px" class="form-control" placeholder="Nhập quý danh của bạn" type="text"
                                        name="YourName">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <input style="border-radius: 20px" class="form-control" placeholder="Nhập Email của bạn" type="text"
                                        name="Email">
                                </div>
                                <div class=" col-md-12">
                                    <input style="border-radius: 20px" class="form-control" placeholder="Nhập số điện thoại của bạn" type="text"
                                        name="Phone">
                                </div>
                                <div class="col-md-12">
                                    <textarea style="border-radius: 20px" name="content" class="textarea"
                                        placeholder="Nhập nội dung liên hệ hoặc góp ý của bạn dành cho Lighten"></textarea>
                                </div>
                                <div class=" col-md-12">
                                    <button name="submit" type="submit" class="send bg-danger">GỬI LIÊN HỆ</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- end contact -->