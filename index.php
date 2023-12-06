<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PetShop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yatra+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheeet" href="css/common.css">
  <style>
    .availability-from {
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px) {
      .availability-from {
        margin-top: 0px;
        padding: 0 35px;
      }
    }

    * {
      font-family: 'Poppins', sans-serif;
    }

    .hfont {
      font-family: 'Merienda', cursive;
    }


    input ::-webkit-outer-spin-button,
    input ::-webkit-outer-spin-button {
      -webkit-animation: none;
      margin: 0;
    }

    .custom-bg {
      background-color: rgb(86, 132, 104);
      border: 1px solid rgb(86, 132, 104);
    }

    .custom-bg:hover {
      background-color: rgb(4, 65, 45);
      border-color: rgb(4, 65, 45);
    }
  </style>
</head>

<body class="bg-light">

  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">PetShop</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">TRANG CHỦ</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link me-2" href="#" style="margin-top: 25px;">DỊCH VỤ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#" style="margin-top: 25px;">TIN TỨC</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 25px; border: 0px solid;">
                Sản phẩm
              </a>
              <ul class="dropdown-menu">
                <ul style="list-style: none;">
                  <li><a class="dropdown-item" href="#">Thức ăn cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Thức ăn cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Vòng cổ cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Nhà vệ sinh cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Sữa tắm cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Quần áo cho chó</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Đồ chơi cho chó</a></li>
                  <li><a class="dropdown-item" href="#">Thức ăn cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Thức ăn cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Vòng cổ cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Nhà vệ sinh cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Sữa tắm cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Quần áo cho mèo</a></li>
                  <li><a class="dropdown-item" href="#">Đồ chơi cho mèo</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#"  style="margin-top: 25px;" >LIÊN HỆ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#"  style="margin-top: 25px;">TƯ VẤN</a>
          </li>
          <li>
            <a class="nav-link me-2" href="#">
              <nav class="navbar bg-body-tertiary">
                <div class="container-fluid">
                  <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 68%; margin-top: 10px;">
                    <button class="btn btn-outline-success" type="submit" style="height: 50%; margin-top: 10px;">Tìm kiếm</button>
                  </form>
                </div>
              </nav>
            </a>
          </li>
        </ul>
        <div class="d-flex">


          <form class="d-flex" role="login">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal" style="border: 0px;margin-top: 10px;"><i class="bi bi-cart2 text-success"> GIỎ HÀNG </i></button>
          </form>
          <form class="d-flex" role="login">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal" style="border: 0px;margin-top: 10px;"><i class="bi bi-person-fill text-primary"> ĐĂNG NHẬP </i></button>
          </form>
          <form class="d-flex" role="login">
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#dangkyModal" style="border: 0px; margin-top: 10px;"><i class="bi bi-person-fill-add text-success"> ĐĂNG KÝ </i></button>
          </form>

        </div>
      </div>
    </div>
  </nav>


  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title">
              <i class="bi bi-person-circle"></i> Đăng nhập
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
            </div>
            <div class="d-flex align-items-center justify-content-between mb-2">
              <button type="submit" class="btn btn-dark shadow-none">Login</button>
              <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>

  <div class="modal fade" id="dangkyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
              <i class="bi bi-person-lines-fill fs-3 me-2"></i>
              ĐĂNG KÝ
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"><i class="bi bi-exclamation-triangle-fill text-warning"> Lưu ý điền đầy đủ thông tin</i></span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Họ tên</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Số điện thoại</label>
                  <input type="number" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Ngày sinh /Tháng sinh/Năm sinh</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                  <label class="form-label">Tên tài khoản</label>
                  <input type="text" class="form-control shadow-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                  <label class="form-label">Mật khẩu</label>
                  <input type="password" class="form-control shadow-none">
                </div>
              </div>
            </div>
          </div>
          <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none">ĐĂNG KÝ</button>
          </div>
      </div>
      </form>
    </div>
  </div>

  <div class="container-fluid px-lg-4 mt-4 ">
    <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="img/1.png" class="w-100 d-block " />
        </div>
        <div class="swiper-slide">
          <img src="img/2.jpg" class="w-100 d-block " />
        </div>
        <div class="swiper-slide">
          <img src="img/3.jpg" class="w-100 d-block " />
        </div>
        <div class="swiper-slide">
          <img src="img/4.jpg" class="w-100 d-block" />
        </div>
      </div>

    </div>
  </div>



  <div class="container availability-from">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded ">
        <h5> Đặt lịch cho thú cưng </h5>
        <from>
          <div class="row align-items-end">
            <div class="col-lg-3 mb-3 ">
              <label class="form-label" style="font-weight: 500; ">Đặt lịch cho thú cưng </label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3 ">
              <label class="form-label" style="font-weight: 500; ">Ngày nhận lại thú cưng </label>
              <input type="date" class="form-control shadow-none">
            </div>
            <div class="col-lg-3 mb-3">
              <label class="form-label" style="font-weight: 500; ">Mèo </label>
              <select class="form-select shadow-none">
                <option selected>Số lượng thú cưng</option>
                <option value="1">1 </option>
                <option value="2">2 </option>
                <option value="3">3 </option>
                <option value="1">4 </option>
                <option value="2">5 </option>
                <option value="3">6 </option>
                <option value="1">7 </option>
                <option value="2">8 </option>
                <option value="3">9 </option>
                <option value="3">10 </option>
              </select>
            </div>
            <div class="col-lg-2 mb-3">
              <label class="form-label" style="font-weight: 500; ">Chó </label>
              <select class="form-select shadow-none">
                <option selected>Số lượng thú cưng</option>
                <option value="1">1 </option>
                <option value="2">2 </option>
                <option value="3">3 </option>
                <option value="1">4 </option>
                <option value="2">5 </option>
                <option value="3">6 </option>
                <option value="1">7 </option>
                <option value="2">8 </option>
                <option value="3">9 </option>
                <option value="3">10 </option>
              </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg">Đặt lịch</button>
            </div>
          </div>
        </from>
      </div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">KHÁCH SẠN DÀNH CHO THÚ CƯNG</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto; ">
          <img src="img/5.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng đơn giản</h5>
            <h6 class="mb-4">200.000 VND/Ngày</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Đặc điểm</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Nhà vệ sinh</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Hạt </span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Pate</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Nước</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Chăm sóc </h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Chế độ ăn: 2 bữa / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Vận động:1 - 2 tiếng / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Nhân viên quan sát mọi hoạt động</span>
            </div>
            <div class="ratting mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Thêm chi tiết</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto; ">
          <img src="img/6.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng VIP cho chó</h5>
            <h6 class="mb-4">500.000 VND/Ngày</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Đặc điểm</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Phòng sẽ được vệ sinh 1 tiếng/lần</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Có điều hòa nhiệt độ</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Mùa đông, phòng sẽ được kích hoạt hệ thống sưởi</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Chất lượng được nhập từ Hàn Quốc</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Chăm sóc </h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Chế độ ăn: 2 bữa / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Vận động:1 - 2 tiếng / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Nhân viên quan sát mọi hoạt động</span>
            </div>
            <div class="ratting mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Thêm chi tiết</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto; ">
          <img src="img/7.jpg" class="card-img-top">
          <div class="card-body">
            <h5>Phòng VIP cho mèo</h5>
            <h6 class="mb-4">500.000 VND/Ngày</h6>
            <div class="features mb-4">
              <h6 class="mb-1">Đặc điểm</h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Phòng sẽ được vệ sinh 1 tiếng/lần</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Có điều hòa nhiệt độ</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Mùa đông, phòng sẽ được kích hoạt hệ thống sưởi</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Chất lượng được nhập từ Hàn Quốc</span>
            </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Chăm sóc </h6>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Chế độ ăn: 2 bữa / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Vận động:1 - 2 tiếng / ngày</span>
              <span class="badge rounded-pill bg-light text-dark  text-wrap ">Nhân viên quan sát mọi hoạt động</span>
            </div>
            <div class="ratting mb-4">
              <h6 class="mb-1">Đánh giá</h6>
              <span class="badge rounded-pill bg-light">
                <i class="bi bi-star-fill text-warning "></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
                <i class="bi bi-star-fill text-warning"></i>
              </span>
            </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Đặt Phòng</a>
              <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Thêm chi tiết</a>
            </div>
          </div>
        </div>
      </div>


      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Thêm về PetShop</a>
      </div>
    </div>
  </div>
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ĐÁNH GIÁ</h2>
  <div class="container mt-5">
    <div class="swiper swiper-testimonials">
      <div class="swiper-wrapper mb-5">

        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-person-fill">Phạm Hoàng Quốc Huy</i>
          </div>
          <p>
            bla bla bla
          </p>
          <div class="ratting">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>

          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-person-fill">Phạm Văn Thành Đạt</i>
          </div>
          <p>
            bla bla bla
          </p>
          <div class="ratting">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-person-fill">Nguyễn Văn A</i>
          </div>
          <p>
            bla bla bla
          </p>
          <div class="ratting">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-person-fill">Trần Thị B</i>
          </div>
          <p>
            bla bla bla
          </p>
          <div class="ratting">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>
        <div class="swiper-slide bg-white p-4">
          <div class="profile d-flex align-items-center mb-3">
            <i class="bi bi-person-fill">Vương Văn C</i>
          </div>
          <p>
            bla bla bla
          </p>
          <div class="ratting">
            <i class="bi bi-star-fill text-warning "></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">LIÊN HỆ</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9539995210425!2d106.67529067481787!3d10.738028859901247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fad027e3727%3A0x2a77b414e887f86d!2zMTgwIMSQLiBDYW8gTOG7lywgUGjGsOG7nW5nIDQsIFF14bqtbiA4LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1701612130038!5m2!1svi!2s" loading="lazy"></iframe>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="bg-white p-4 rounded mb-4">
          <h5>Hotline</h5>
          <a href="tel: +9999999999" class="d-inline-block mb-2 text-decoration-none text-dark ">
            <i class="bi bi-telephone-fill"></i> +1111111111
          </a>
          <br>
          <a href="tel: +8888888888" class="d-inline-block mb-2 text-decoration-none text-dark ">
            <i class="bi bi-telephone-fill"></i> +222222222
          </a>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Theo dõi</h5>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i>Facebook: petshop.vn
              </span>
            </a>
            <br>
            <a href="#" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i></i>Instagram: petshop.vn
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">Pet Shop</h3>
        <p>
        <ul>
          <li style="list-style: none;"><i class="bi bi-geo-alt-fill">Địa chỉ: 180 Cao Lỗ phường 4 Quận 8 TP.HCM</i></li>
          <li style="list-style: none;"><i class="bi bi-globe-americas"> petshop.com - </i><i class="bi bi-envelope-fill"> petshop@gmail.com</i></li>
          <li style="list-style: none;"><i class="bi bi-facebook"> fb.com/petshop.vn</i></li>
        </ul>
        </p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Links</h5>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Trang chủ</a>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Dịch vụ</a>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Tin tức</a>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Sản phẩm</a>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Liên hệ</a>
        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Đặt lịch</a>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Theo dõi</h5>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook"></i></i>Facebook: petshop.vn
        </a><br>
        <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-instagram me-1"></i>Instagram: petshop.vn
        </a><br>
      </div>
    </div>
  </div>
  <h6 class="text-center bg-dark text-white p-3 m-0">Copyright <i class="bi bi-c-circle"> 2023 PetShop</i></h6>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,

      }
    });
    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>



</body>

</html>