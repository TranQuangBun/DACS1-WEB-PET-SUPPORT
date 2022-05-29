<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/acesss/css/style.css">
    <link rel="stylesheet" href="/acesss/themify-icons/themify-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="main.js"></script>
    <title>Nhận nuôi | Help Pets</title>
</head>

<body>
    <div class="main">
        <!--Header-->
        <?php
            include "../menu.php";
        ?>
        <!--End Header-->

        <div class="image-container">
            <img src="/acesss/img/meo2.jpg">
            <div class="after">
                <h1>Nhận nuôi</h1>
            </div>
        </div>
        <!-- Content nhận nuôi -->
        <div>
            <div class="introduce" style="margin-left: 5%">
                <div class="head-introduce">
                    <h1>Quy Trình Nhận Nuôi</h1>
                </div>
                <div class="main-introduce">
                    <p class="text-introduce">

                        Trước khi quyết định nhận nuôi bé chó hay mèo nào, bạn hãy tự hỏi bản thân rằng mình đã sẵn sàng để chịu trách nhiệm cả đời cho bé chưa, cả về tài chính, nơi ở cũng như tinh thần. Việc nhận nuôi cần được sự đồng thuận lớn từ bản thân bạn cũng như gia
                        đình và những người liên quan. Xin cân nhắc kỹ trước khi liên hệ với HP về việc nhận nuôi.
                        <br>
                        <br> Bạn đã sẵn sàng? Hãy thực hiện các bước sau đây nhé:
                        <br>
                        <br> 1️⃣ Tìm hiểu về thú cưng bạn muốn nhận nuôi trên trang web của HP.
                        <br> 2️⃣ Liên hệ với Tình nguyện viên phụ trách bé để tìm hiểu thêm về bé.
                        <br> 3️⃣ Tham gia phỏng vấn nhận nuôi.
                        <br> 4️⃣ Chuẩn bị cơ sở vật chất, ký giấy tờ nhận nuôi và đóng tiền vía để đón bé về.
                        <br> 5️⃣ Thường xuyên cập nhật về tình hình của bé, đặc biệt là khi có sự cố để được tư vấn kịp thời.
                        <br><br> ❗ Lưu ý:<br> - Chỉ inbox 01 Tình nguyện viên phỏng vấn, KHÔNG NÊN inbox tất cả danh sách. Trường hợp TNV chưa phản hồi lại trong vòng 1 ngày, vui lòng inbox cho Page.<br> - Phần phỏng vấn có thể có nhiều câu hỏi mang tính
                        chất riêng tư, vì vậy mong bạn hãy kiên nhẫn nhé!<br> - Tiền vía mỗi bé sẽ khác nhau tùy thuộc vào tình trạng của bé khi cứu cũng như các dịch vụ y tế (tiêm phòng, triệt sản) đã thực hiện.<br> - Tiền vía dùng để trả các khoản chi
                        về y tế trước đây cho bé, cũng như để hỗ trợ chi phí chăm sóc, nuôi dưỡng các bé khác tại nhà chung.<br> - Trường hợp không nuôi được tiếp cần trả lại cho Nhóm, không tự ý đem cho người khác.<br><br> 🐕‍🦺 Nếu bạn chỉ có thể chăm
                        sóc tạm thời (foster), tham khảo thông tin tại mục Tình nguyện.<br> 🐈 Tìm hiểu thêm về chương trình Nhận nuôi Ảo ở banner cuối trang này.
                    </p>
                    <div class="card">
                        <h3>Điều kiện nhận nuôi</h3>
                        <ul>
                            <li>Tài chính tự chủ và ổn định.</li>
                            <li>Chỗ ở cố định, ưu tiên tại Đà Nẵng</li>
                            <li>Cam kết tiêm phòng và triệt sản .</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kết thúc content nhận nuôi -->
        <div class="image-container-2">
            <div class="after">
                <h2>Tất Cả Các Ca Cứu Hộ</h2>
                <h3>Tìm hiểu về tất cả các ca cứu hộ, đang nằm viện, ở nhà chung, đã mất, đã được nhận nuôi...</h3>
                <p><button class="button-viewAll">XEM TẤT CẢ</button></p>
            </div>
            <img src="/acesss/img/banner-pet.jpg">
        </div>

        <div class="findPet">
            <h1>Tìm thú cưng</h1>
            <div class="list-button">
                <button id="bt1" class="button-option-selected" onclick="myFunction(1)">Tất cả</button>
                <button id="bt2" class="button-option" onclick="myFunction(2)">Chó</button>
                <button id="bt3" class="button-option" onclick="myFunction(3)">Mèo</button>
                <button id="bt4" class="button-option" onclick="myFunction(4)">Khác</button>
            </div>
        </div>
        <!-- js -->
        <script>
            function myFunction(index) {
                for (let i = 1; i <= 4; i++)
                    document.getElementById("bt" + i).className = "button-option";
                document.getElementById("bt" + index).className = "button-option-selected";
            }
            function execute(){
                for( let i =1; i<=4; i++){
                    if(document.getElementById("bt" + i).className === "button-option-selected")
                        return i;
                }
            }
        </script>
        <!-- end js -->
        <div class="list-form">
            <div class="form-group">
                <label>Giới tính</label>
                <div>
                    <select id="gender">
                        <option value="All">Tất cả</option>
                        <option value="Đực">Đực</option>
                        <option value="Cái">Cái</option>
                        <option value="Chưa rõ">Chưa rõ</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Độ tuổi</label>
                <div>
                    <select id="age">
                        <option value="All">Chưa rõ</option>
                        <?php
                        for($i = 1; $i<20; $i++ ){
                            echo "'<option value='".$i."'>".$i."</option>'";
                        }
                        ?>
                        <!-- <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option> -->
                        
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Triệt sản</label>
                <div>
                    <select id="ts">
                        <option value="All">Tất cả</option>
                        <option value="Có">Có</option>
                        <option value="Không">Không</option>
                        <option value="Chưa rõ">Chưa rõ</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="list-form">
            <div class="form-group">
                <label>Màu</label>
                <div>
                    <select id="color">
                        <option value="All">Tất cả</option>
                        <option value="Den">Đen</option>
                        <option value="Trang">Trắng</option>
                        <option value="Vang">Vàng</option>
                        <option value="DanTrang">Đen trắng</option>
                        <option value="TrangVang">Trắng vàng</option>
                        <option value="Muop">Mướp</option>
                        <option value="TamThe">Tam thể</option>
                        <option value="NhiThe">Nhị thể</option>
                        <option value="DoiMoi">Đồi mồi</option>
                        <option value="Nau">Nâu</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Tên</label>
                <div>
                    <input type="text" id="name">
                </div>
            </div>

            <div class="form-group">
                <label></label>
                <div class="div-btn-search"> <button class="btn-search" id = "btn-search">Tìm kiếm</button> </div>
            </div>
        </div>

        <div class="grid-container">
            <!-- data-->
        </div>

    <!--Footer-->
    <footer class="footer footer-edit">
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