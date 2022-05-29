<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/acesss/css/style.css">
    <link rel="stylesheet" href="/acesss/themify-icons/themify-icons.css">
    <title>Help Pets</title>
</head>

<body>
    <div class="main">
        <!--Header-->
        <?php
            include "menu.php";
        ?>
        <!--End Header-->
        <!-- Linh part -->

        <!--slide -->
        <div id="slider">
            <div class="slideshow">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">Hỗ trợ chăm sóc thú cưng</div>
                    <img src="/acesss/img/manydogs.webp" style="width:100%;">
                    <button class="btn bt-slide">Bắt đầu</button>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">Ủng hộ chúng tôi ngay</div>
                    <img src="/acesss/img/rabbit.webp" style="width:100%">
                    <button class="btn bt-slide">Ủng hộ</button>
                </div>
                <div class="mySlides fade">
                    <img src="/acesss/img/meo.jpg" style="width:100%">
                    <div class="text"></div>
                </div>
                <!-- <div style="text-align: center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <br>
            <!--End Slide-->
            <!-- scrip of slide -->
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " active";
                }
            </script>


            <!--Content-->
            <div id="content">
                <hr>
                <div class="introduce">
                    <div class="head-introduce">
                        <h1>Hỗ trợ chăm sóc thú cưng - Help pets</h1>
                    </div>
                    <div class="main-introduce">
                        <p class="text-introduce">Chúng tôi là một nhóm trẻ gồm tình nguyện viên Việt Nam và một số bạn nước ngoài, cùng hoạt động vì tình yêu chó mèo. Tôn chỉ hoạt động của chúng tôi là không từ bỏ nỗ lực với bất kỳ con vật nào, dù bé có ốm yếu hay tàn tật tới
                            đâu, bởi mỗi thú cưng đều cần có cơ hội hi vọng vào một tương lai tốt đẹp. <br><br> Chúng tôi cố gắng chăm sóc tốt nhất có thể, phần nào bù đắp lại những tổn thương cho các bé được cứu hộ về dù là hoang, lạc, bị bỏ rơi hay
                            bạo hành. Ngoài ra, chúng tôi cũng luôn nỗ lực tìm mái ấm yêu thương các bé trọn đời. Và cuối cùng, chúng tôi giúp nâng cao nhận thức về trách nhiệm của chủ nuôi thông qua mạng xã hội và các hoạt động thiện nguyện.
                            <br>
                            <button class="btn bt-introduce">
        VỀ CHÚNG TÔI
      </button>
                            <div class="img-itd">
                                <img class="img-introduce" src="/acesss/img/img-introduce.jpg" alt="Save pets and dogs">
                            </div>
                        </p>

                    </div>
                </div>

                <!-- content-section -->
                <div class="container-content">
                    <div class="container-content-section">
                        <div class="owl-stage-outer">
                            <div class="owl-item active">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Linh part -->
                <section class="linhpart">
                    <!-- TIN TỨC -->
                    <div class="main-tt">

                        <hr>
                        <h1 class="h3-tt">TIN TỨC</h1>

                        <div class="object-tt ">
                            <img class="img-tt" src="/acesss/img/img-tintuc1.jpg" alt="anh 1" style="width:100%">
                            <a href="#" class="link-tt">
                                <h3>Các Sự Thật Về Mèo Mà Ít Ai Biết</h3>
                            </a>
                            <p class="opacity">Đăng bởi: Help Pets</p>
                            <p class="absolute">Đã bao giờ bạn tự hỏi tại sao loài mèo lại có nhiều điều thú vị như vậy. Cùng tìm hiểu các sự thật về mèo mà có thể mọi người có thể chưa biết nha!</p>
                            <p><button class="button-tt">ĐỌC BÀI</button></p>
                        </div>

                        <div class="object-tt">
                            <img class="img-tt" src="/acesss/img/img-tintuc2.jpg" alt="anh 2" style="width:100%">
                            <a href="#" class="link-tt">
                                <h3>Có Nên Nuôi Chó Hay Không Khi Bạn Quá Bận Rộn</h3>
                            </a>
                            <p class="opacity">Đăng bởi: Help Pets</p>
                            <p class="absolute">Chó là một trong những loại động vật có đặc tính xã hội, vì vậy theo quy luật chung, chúng sẽ cảm thấy vui vẻ, hạnh phúc nhất chính là khi được ở cạnh bên những thành viên […]</p>
                            <p><button class="button-tt">ĐỌC BÀI</button></p>
                        </div>

                        <div class="object-tt">
                            <img class="img-tt" src="/acesss/img/img-tt3.jpg" alt="anh 3" style="width:100%">
                            <a href="#" class="link-tt">
                                <h3>Chó mang thai bao lâu? Những điều cần lưu ý khi chó mang thai</h3>
                            </a>
                            <p class="opacity">Đăng bởi: Help Pets</p>
                            <p cclass="absolute">Nếu bạn là một người yêu chó hoặc đang nuôi một bé chó cái. Có bao giờ bạn tự hỏi rằng chó mang thai trong bao lâu không? Như tất cả chúng ta đều biết […]</p>
                            <p><button class="button-tt">ĐỌC BÀI</button></p>
                        </div>

                        <div class="object-tt">
                            <img class="img-tt" src="/acesss/img/img-tt4.jpg" alt="anh 4" style="width:100%">
                            <a href="#" class="link-tt">
                                <h3>Cách Phân Biệt Giới Tính Chuột Hamster Đực Cái Chính Xác Nhất</h3>
                            </a>
                            <p class="opacity">Đăng bởi: Help Pets</p>
                            ỏ nhắn, dễ thương được rất nhiều trẻ em, thậm chí là người lớn ưa thích. Và trong quá trình nuôi hoặc chuẩn bị nuôi thì chắc chắn các bạn sẽ muốn biết Hamster của mình là đực hay […]</p>
                            <p><button class="button-tt">ĐỌC BÀI</button></p>
                        </div>
                    </div>
                    
                    <!-- </div> -->
                    <hr>
                    <!-- Video   -->
                    <div class="main-vid">
                        <h1 class="h1-vid">VIDEO</h1>
                        <div class="object-vid">
                            <div class="object-tt">
                                <iframe class="img-tt" width="420" height="345" src="https://www.youtube.com/embed/gZBjb4rLb70">
                                </iframe>
                                <a href="#" class="link-tt">
                                    <h3>Tại Sao Mèo Hay Cắn Tay Chủ, Làm Sao Để Mèo Không Cắn</h3>
                                </a>
                                <p class="opacity">Đăng bởi: Help Pets</p>
                                <p>Nếu bạn là người thường xuyên bị mèo cắn (đặc biệt là mèo con) hoặc bạn đang có ý định nuôi mèo nhưng sợ hàm răng của tụi nó thì video này là dành cho bạn nha. </p>
                                <p><button class="button-tt">XEM VIDEO</button></p>
                            </div>

                            <div class="object-tt">
                                <iframe class="img-tt" width="420" height="345" src="https://www.youtube.com/embed/d3QZX-czqTg">
                                </iframe>
                                <a href="#" class="link-tt">
                                    <h3>Giải Cứu Mèo Con Bị Bỏ Rơi Bên Lề Đường Cho Vào Quán Cơm</h3>
                                </a>
                                <p class="opacity">Đăng bởi: Help Pets</p>
                                <p>Mèo con bị bỏ rơi bên lề đường, thật may cho chúng vì đã được phát hiện và giải cứu kịp thời. </p>
                                <p><button class="button-tt">XEM VIDEO</button></p>
                            </div>

                            <div class="object-tt">
                                <iframe class="img-tt" width="420" height="345" src="https://www.youtube.com/embed/pY-EhQs0ddc">
                                </iframe>
                                <a href="#" class="link-tt">
                                    <h3>Spa Cho Chó Mèo + Học Cắt Tỉa Lông Chó Mèo Chuẩn Quốc Tế</h3>
                                </a>
                                <p class="opacity">Đăng bởi: Help Pets</p>
                                <p>Với các dịch vụ spa cho chó mèo chuẩn Quốc tế, thú cưng sẽ được chăm sóc và tận hưởng những dịch vụ tốt nhất. Được cắt tỉa lông với style theo xu hướng mới nhất hiện nay. </p>
                                <p><button class="button-tt">XEM VIDEO</button></p>
                            </div>

                            <div class="object-tt">
                                <iframe class="img-tt" width="420" height="345" src="https://www.youtube.com/embed/6PQh8AWRDCc">
                                </iframe>
                                <a href="#" class="link-tt">
                                    <h3>Nhặt Được Chú Cún Bị Bỏ Rơi, Cuối Cùng Em Cũng Được Hạnh Phúc </h3>
                                </a>
                                <p class="opacity">Đăng bởi: Help Pets</p>
                                <p>Nhặt Được Chú Cún Bị Bỏ Rơi, Cuối Cùng Em Cũng Được Hạnh Phúc </p>
                                <p><button class="button-tt">XEM VIDEO</button></p>
                            </div>

                        </div>

                    </div>
                </section>
                <!-- VIDEO -->
                <div class="main-video">

                </div>
                </section>
                <!-- End Linh part -->

                <!-- Contact part -->
                <!-- Contact Section -->
                <div class="contact-form">
                    <h1>Contact Me</h1>

                    <hr>
                    <div class="information">
                        <i class="ti-location-pin">  Ngũ Hành Sơn, Thành Phố Đà Nẵng, Việt Nam</i> <br>
                        <i class="ti-mobile"> Phone: +84 898639048</i> <br>
                        <i class="ti-email">  Email: helppets@gmail.com</i> <br>
                    </div>

                    <form action="#" target="_blank">
                        <p><input class="form-input" type="text" placeholder="First Name "></p>
                        <p><input class="form-input" type="text" placeholder="Last Name "></p>
                        <p><input class="form-input" type="text" placeholder="Phone Number"></p>
                        <p><input class="form-messenger" type="text" placeholder=" Message you want ask us "></p>
                        <button type="submit" class="btn button-sendmess"> <b>SEND MESSAGE</b> </button>
                    </form>
                </div>
                <!-- map -->
                <div class="map">

                    <h1>Location</h1>
                    <hr>
                    <iframe class="map-gg" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15103.434738113894!2d108.2527724747215!3d15.972185452248171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2sVietnam%20-%20Korea%20University%20of%20Information%20and%20Communication%20Technology.!5e1!3m2!1sen!2s!4v1648887897343!5m2!1sen!2s"
                        width="500" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>
            <!--End Content-->

            <!--Footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>Danh Mục</h4>
                            <ul>
                                <li><a href="#">Chăm sóc cún</a></li>
                                <li><a href="#">Chăm sóc mèo</a></li>
                                <li><a href="#">Chăm sóc hamster</a></li>
                                <li><a href="#">Các loại thú cưng khác</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Trợ giúp</h4>
                            <ul>
                                <li><a href="#">Trung tâm trợ giúp</a></li>
                                <li><a href="#">Điều bạn cần biết</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Hướng dẫn tìm kiếm</a></li>
                                <li><a href="#">Các câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Ủng hộ chúng tôi</h4>
                            <ul>
                                <li><a href="#">Hướng dẫn ủng hộ</a></li>
                                <li><a href="#">Mục đích kêu gọi</a></li>
                                <li><a href="#">Thành quả</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Theo dõi chúng tôi </h4>
                            <div class="social-links">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-google"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--End main-->
</body>

</html>