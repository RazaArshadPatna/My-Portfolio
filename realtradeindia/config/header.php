<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<head>
    <meta charset="utf-8" />
    <title>Real India Trade Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <!-- bootstrape css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <!-- font css -->
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <!-- font awesome css -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- owl slider carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css" />
    <!-- add cart -->
    <link rel="stylesheet" type="text/css" href="css/add-cart.css" />
    <!-- select dropdown css -->
    <link rel="stylesheet" type="text/css" href="css/select2.min.css" />
    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <!-- font awesome icon css -->
    <!--<link rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="images/LOGO RITG.png" />

    <style>
    .icon-design {
        color: black;
        background: #fff9f9;
        padding: 4px;
        border-radius: 50px;
    }

    .slide-img {
        height: 600px;
    }

    @media (max-width:425px) {
        .slide-img {
            height: 420px;
        }
    }

    .alaq-home-wrapper .top-header .alaq-top-header-wrapper .alaq-cart-box-wrapper ul li .phone:after {
        content: "";
        position: absolute;
        top: 15px;
        right: 10px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background-color: #38ae20;
        border: 2px solid #FFF;
        display:none;
    }
    .alaq-home-wrapper .top-header .alaq-top-header-wrapper .alaq-cart-box-wrapper ul li span:after {
    content: "";
    position: absolute;
    top: 15px;
    right: 10px;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: #38ae20;
    border: 2px solid #FFF;
    display:none;
}

.footer-logo-section{
    padding-left:25px;
}
@media (max-width:425px){
    .footer-logo-section{
        padding-left:5px;
    } 
}
.
.notifications-hover{
    color:white;
    font-size:20px;
    font-weight:400;
}
.notification-box{
    font-weight: 500;
    font-size: 17px;
    background-color: #24637c;
    z-index: 100;
    color: #fff;
    padding: 11px 10px;
    width: 100%;
}
.notification-box a{
    color:white;
}

.notification-box:hover{
    background-color: white;
    color: black;
}
.notification-box a:hover{
    color:black;
}







/*TESTIMONIAL CSS*/
.gtco-testimonials {
  position: relative;

  h2 {
    font-size: 30px;
    text-align: center;
    color: #333333;
    margin-bottom: 50px;
  }

  .owl-stage-outer {
  }

  .owl-nav {
    display: none;
  }

  .owl-dots {
    text-align: center;

    span {
      position: relative;
      height: 10px;
      width: 10px;
      border-radius: 50%;
      display: block;
      background: #fff;
      border: 2px solid #01b0f8;
      margin: 0 5px;
    }

    .active {
      box-shadow: none;

      span {
        background: #01b0f8;
        box-shadow: none;
        height: 12px;
        width: 12px;
        margin-bottom: -1px;
      }
    }
  }

  .card {
    background: #fff;
    box-shadow: 0 8px 30px -7px #c9dff0;
    margin: 0 20px;
    padding: 0 10px;
    border-radius: 20px;
    border: 0;

    .card-img-top {
      max-width: 100px;
      border-radius: 50%;
      margin: 15px auto 0;
      box-shadow: 0 8px 20px -4px #95abbb;
      width: 100px;
      height: 100px;
    }

    h5 {
      color: #01b0f8;
      font-size: 21px;
      line-height: 1.3;

      span {
        font-size: 18px;
        color: #666666;
      }
    }

    p {
      font-size: 18px;
      color: #555;
      padding-bottom: 15px;
    }
  }

  .active {
    opacity: 0.5;
    transition: all 0.3s;
  }

  .center {
    opacity: 1;

    h5 {
      font-size: 24px;

      span {
        font-size: 20px;
      }
    }

    .card-img-top {
      max-width: 100%;
      height: 120px;
      width: 120px;
    }
  }
}

@media (max-width: 767px) {
  .gtco-testimonials {
    margin-top: 20px;
  }
}

.owl-carousel {
  .owl-nav button {
    &.owl-next, &.owl-prev {
      outline: 0;
    }
  }

  button.owl-dot {
    outline: 0;
  }
}
/*TESTIMONIAL CSS*/'





    </style>

</head>

<body>
    <div class="cursor"></div>
    <div class="cursor2"></div>
    <!--Preloader start-->
    <div class="medicalloader" id="preloader">
        <div id="status">
            <div class="u-loading">
                <div class="u-loading__symbol">
                    <img src="images/LOGO RITG.png" alt="loader" class="img-fluid" width="160px" height="80px" />
                </div>
            </div>
            <div class="loader" id="dotsLoader">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!--Preloader end-->

    <!-- top to return -->
    <a href="javascript:;" id="return-to-top" class="change-bg3">
        <i class="fa fa-angle-double-up"></i></a>

    <!--header start-->
    <div class="alaq-home-wrapper">
        <!-- mobile search box Start -->
        <div class="right-sidebar" id="right-sidebar">
            <div class="toggle-top-header">
                <button class="sidebar-close"></button>
            </div>
            <div class="toggle-content">
                <div class="container custom-container">
                    <div class="search-box">
                        <input type="text" class="form-control" placeholder="Search Here" />
                        <span>
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.49833 0.000312674C3.3688 0.000312674 0 3.36934 0 7.49864C0 11.6279 3.36902 14.997 7.49833 14.997C9.2042 14.997 10.7819 14.4241 12.0444 13.4582L17.2855 18.7073C17.676 19.0978 18.3167 19.0978 18.7072 18.7073C19.0976 18.3169 19.0976 17.684 18.7072 17.2936L13.458 12.0444C14.4236 10.782 14.9968 9.20393 14.9968 7.49833C14.9968 3.3688 11.6276 0 7.49846 0L7.49833 0.000312674ZM7.49833 1.99985C10.5472 1.99985 12.9975 4.45002 12.9975 7.49904C12.9975 10.5481 10.5473 12.9982 7.49833 12.9982C4.44931 12.9982 1.99914 10.5481 1.99914 7.49904C1.99914 4.45002 4.44931 1.99985 7.49833 1.99985V1.99985Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile search box End -->

        <div class="cart-sidebar" id="cart-sidebar">
            <div class="toggle-top-header">
                <a class="tog-logo" href="#">
                    <img src="images/LOGO RITG.png" alt="logo" width="160px" height="80px" />
                </a>
                <button class="cart-close"></button>
            </div>
            <div class="post-toggle">
                <div class="togle-img">
                    <img src="images/product3.png" alt="img" />
                </div>
                <div class="togle-text">
                    <a href="javascript:;">Freezer</a>
                    <span>7 X $12.00</span>
                </div>
                <div class="toggle-cross">
                    <a href="javascript:;">X</a>
                </div>
            </div>
            <!--  -->
            <div class="post-toggle">
                <div class="togle-img">
                    <img src="images/product5.png" alt="img" />
                </div>
                <div class="togle-text">
                    <a href="javascript:;">LED</a>
                    <span>3 X $420.00</span>
                </div>
                <div class="toggle-cross">
                    <a href="javascript:;">X</a>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="post-toggle">
                <div class="togle-img">
                    <img src="images/product4.png" alt="img" />
                </div>
                <div class="togle-text">
                    <a href="javascript:;">Speakers</a>
                    <span>3 X $230.00</span>
                </div>
                <div class="toggle-cross">
                    <a href="javascript:;">X</a>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="post-toggle">
                <div class="togle-img">
                    <img src="images/product6.png" alt="img" />
                </div>
                <div class="togle-text">
                    <a href="javascript:;">Phone</a>
                    <span>3 X $200.00</span>
                </div>
                <div class="toggle-cross">
                    <a href="javascript:;">X</a>
                </div>
            </div>
            <!--  -->
            <!--  -->
            <div class="toogle-centent">
                <p>Subtotal :</p>
                <strong>$132.00</strong>
            </div>
            <div class="view-btn-wrapper">
                <a class="alaq-btn" href="#">View Cart</a>
                <a class="alaq-btn" href="#">Go to Checkout</a>
            </div>
        </div>
        <div class="top-header">
            <div class="container custom-container">
                <div class="alaq-top-header-wrapper">
                    <div class="alaq-search-box-wrapper">
                        <h1>
                            <a href="#">
                                <img src="images/LOGO RITG.png" alt="logo" width="150px" height="60px" />
                            </a>
                        </h1>
                        <div class="search-box-wrapper">
                            <!--<select id="category">
                  <option>Category</option>
                  <option>Mobile & Tablets</option>
                  <option>TV & Speaker</option>
                  <option>Home Appliances</option>
                  <option>Smart Watch</option>
                  <option>Cameras</option>
                  <option>Computers</option>
                  <option>Gaming</option>
                </select>-->
                            <div class="input-box">
                                <input type="text" placeholder="Search Product Name" class="form-control" />
                                <span><a href="javascript:;"><img src="images/search.png" alt="icon" /></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="alaq-cart-box-wrapper">
                        <ul>
                            <!---->
                            <li>
                                <a class="cart-wrapper" href="#">
                                    <span>
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4062 12.8999H8.5229C7.9223 12.8996 7.34032 12.6914 6.87584 12.3106C6.41136 11.9299 6.09301 11.4001 5.9749 10.8112L4.22423 2.06652H1.46823C1.23838 2.06652 1.01793 1.97521 0.855403 1.81268C0.692872 1.65015 0.601563 1.42971 0.601562 1.19985C0.601562 0.969997 0.692872 0.749557 0.855403 0.587025C1.01793 0.424494 1.23838 0.333184 1.46823 0.333184H4.9349C5.13765 0.329095 5.33542 0.396237 5.49377 0.522922C5.65213 0.649606 5.76105 0.827812 5.80156 1.02652L7.67356 10.4732C7.71408 10.6719 7.823 10.8501 7.98135 10.9768C8.13971 11.1035 8.33748 11.1706 8.54023 11.1665H17.4062C17.6078 11.171 17.8046 11.1051 17.9628 10.9801C18.1209 10.8552 18.2306 10.679 18.2729 10.4819L19.6682 3.98185C19.6958 3.85386 19.6939 3.7213 19.6629 3.59412C19.6318 3.46694 19.5724 3.34844 19.489 3.24753C19.4056 3.14662 19.3004 3.06591 19.1814 3.01146C19.0623 2.95702 18.9324 2.93026 18.8016 2.93318H17.9349C17.705 2.93318 17.4846 2.84188 17.3221 2.67934C17.1595 2.51681 17.0682 2.29637 17.0682 2.06652C17.0682 1.83666 17.1595 1.61622 17.3221 1.45369C17.4846 1.29116 17.705 1.19985 17.9349 1.19985H18.8016C19.1951 1.19077 19.5856 1.27117 19.9436 1.43498C20.3015 1.5988 20.6176 1.84177 20.868 2.14555C21.1183 2.44933 21.2964 2.80599 21.3889 3.18865C21.4813 3.5713 21.4857 3.96995 21.4016 4.35452L19.9889 10.8545C19.8609 11.4413 19.5337 11.9656 19.0629 12.3384C18.5921 12.7113 18.0067 12.9097 17.4062 12.8999ZM9.26823 19.3999C8.754 19.3999 8.25132 19.2474 7.82375 18.9617C7.39618 18.676 7.06293 18.2699 6.86614 17.7948C6.66936 17.3197 6.61787 16.797 6.71819 16.2926C6.81851 15.7883 7.06614 15.325 7.42975 14.9614C7.79337 14.5978 8.25665 14.3501 8.761 14.2498C9.26535 14.1495 9.78812 14.201 10.2632 14.3978C10.7383 14.5946 11.1444 14.9278 11.4301 15.3554C11.7157 15.7829 11.8682 16.2856 11.8682 16.7999C11.8682 17.4894 11.5943 18.1507 11.1067 18.6383C10.6191 19.1259 9.95779 19.3999 9.26823 19.3999ZM9.26823 15.9332C9.09682 15.9332 8.92926 15.984 8.78674 16.0792C8.64421 16.1745 8.53313 16.3098 8.46754 16.4682C8.40194 16.6266 8.38478 16.8008 8.41822 16.9689C8.45166 17.1371 8.5342 17.2915 8.65541 17.4127C8.77661 17.5339 8.93104 17.6164 9.09915 17.6499C9.26727 17.6833 9.44153 17.6661 9.59989 17.6005C9.75825 17.535 9.89361 17.4239 9.98884 17.2813C10.0841 17.1388 10.1349 16.9713 10.1349 16.7999C10.1349 16.57 10.0436 16.3496 9.88106 16.187C9.71852 16.0245 9.49809 15.9332 9.26823 15.9332ZM17.0682 19.3999C16.554 19.3999 16.0513 19.2474 15.6238 18.9617C15.1962 18.676 14.8629 18.2699 14.6661 17.7948C14.4694 17.3197 14.4179 16.797 14.5182 16.2926C14.6185 15.7883 14.8661 15.325 15.2298 14.9614C15.5934 14.5978 16.0566 14.3501 16.561 14.2498C17.0653 14.1495 17.5881 14.201 18.0632 14.3978C18.5383 14.5946 18.9444 14.9278 19.2301 15.3554C19.5157 15.7829 19.6682 16.2856 19.6682 16.7999C19.6682 17.4894 19.3943 18.1507 18.9067 18.6383C18.4191 19.1259 17.7578 19.3999 17.0682 19.3999ZM17.0682 15.9332C16.8968 15.9332 16.7293 15.984 16.5867 16.0792C16.4442 16.1745 16.3331 16.3098 16.2675 16.4682C16.2019 16.6266 16.1848 16.8008 16.2182 16.9689C16.2517 17.1371 16.3342 17.2915 16.4554 17.4127C16.5766 17.5339 16.731 17.6164 16.8992 17.6499C17.0673 17.6833 17.2415 17.6661 17.3999 17.6005C17.5583 17.535 17.6936 17.4239 17.7888 17.2813C17.8841 17.1388 17.9349 16.9713 17.9349 16.7999C17.9349 16.57 17.8436 16.3496 17.6811 16.187C17.5185 16.0245 17.2981 15.9332 17.0682 15.9332Z"
                                                fill="#F85934" />
                                            <path
                                                d="M15.3323 6.39935H10.1323C9.90244 6.39935 9.682 6.30804 9.51947 6.14551C9.35693 5.98298 9.26562 5.76254 9.26562 5.53268C9.26562 5.30283 9.35693 5.08239 9.51947 4.91986C9.682 4.75733 9.90244 4.66602 10.1323 4.66602H15.3323C15.5621 4.66602 15.7826 4.75733 15.9451 4.91986C16.1076 5.08239 16.199 5.30283 16.199 5.53268C16.199 5.76254 16.1076 5.98298 15.9451 6.14551C15.7826 6.30804 15.5621 6.39935 15.3323 6.39935Z"
                                                fill="#F85934" />
                                            <path
                                                d="M12.7339 8.99974C12.504 8.99974 12.2836 8.90843 12.121 8.7459C11.9585 8.58337 11.8672 8.36293 11.8672 8.13307V2.93307C11.8672 2.70322 11.9585 2.48278 12.121 2.32025C12.2836 2.15772 12.504 2.06641 12.7339 2.06641C12.9637 2.06641 13.1841 2.15772 13.3467 2.32025C13.5092 2.48278 13.6005 2.70322 13.6005 2.93307V8.13307C13.6005 8.36293 13.5092 8.58337 13.3467 8.7459C13.1841 8.90843 12.9637 8.99974 12.7339 8.99974Z"
                                                fill="#F85934" />
                                        </svg>
                                    </span>
                                </a>
                            </li>



                            <li id="notification_li">
                                <span id="notificationLink">

                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                        viewBox="0 0 24 24" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <g fill="">
                                                <path
                                                    d="M12 11.796c2.719 0 4.923-2.193 4.923-4.898S14.72 2 12 2 7.077 4.193 7.077 6.898 9.28 11.796 12 11.796zM14.564 13.837H9.436C6.462 13.837 4 16.286 4 19.245c0 .714.308 1.327.923 1.633C5.846 21.388 7.897 22 12 22s6.154-.612 7.077-1.122A1.93 1.93 0 0 0 20 19.245c0-3.061-2.461-5.408-5.436-5.408z"
                                                    fill="" opacity="1" data-original="" class=""></path>
                                            </g>
                                        </g>
                                    </svg>

                                </span>
                                <div id="notificationContainer">
                                    <div class="notification-box"><a href="#" class="notifications-hover"><i class="fa-regular fa-user icon-design"></i>&nbsp;Profile</a></div>
                                    <div class="notification-box"><a href="#" class="notifications-hover"><i class="fa-solid fa-right-to-bracket icon-design"></i>&nbsp;SignUp</a></div>
                                    <div class="notification-box"><a href="#" class="notifications-hover"><i class="fa-solid fa-right-from-bracket icon-design"></i>&nbsp;LogOut</a>
                                    </div>
                                </div>
                            </li>





                            <li id="notification_li">
                                <span id="notificationLink" class="phone">

                                    <a href="tel:1234 5678 90"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z" />
                                      </svg></a>

                                </span>
                                <div id="notificationContainer">
                                    <div id="notificationTitle"><a href="#"
                                            style="color:white;font-size:20px;font-weight:400;"><i
                                                class="fa-regular fa-user icon-design"></i>&nbsp;Profile</a></div>
                                    <div id="notificationTitle"><a href="#"
                                            style="color:white;font-size:20px;font-weight:400;"><i
                                                class="fa-solid fa-right-to-bracket icon-design"></i>&nbsp;SignUp</a>
                                    </div>
                                    <div id="notificationTitle"><a href="#"
                                            style="color:white;font-size:20px;font-weight:400;"><i
                                                class="fa-solid fa-right-from-bracket icon-design"></i>&nbsp;LogOut</a>
                                    </div>
                                </div>
                            </li>






                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sb-main-header1">
            <div class="menu-items-wrapper">
                <div class="container-fluid">
                    <div class="alaq-header">
                        <div class="my-menu-header">
                            <nav class="navbar navbar-expand-lg">
                                <ul class="navbar-nav" id="myTab">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Our Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- responsive menu bar start -->
            <div class="mobile-menu-wrapper">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-4">
                            <div class="mobile-logo">
                                <a href="#">
                                    <img src="images/LOGO RITG.png" alt="logo" width="160px" height="60px" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-8">
                            <div class="d-flex justify-content-end">
                                <div class="social-media-icons">
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="sidebar-toggle">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20 18.954L14.4133 13.3673C15.7558 11.7556 16.4253 9.68835 16.2825 7.59562C16.1396 5.50288 15.1954 3.54579 13.6464 2.13146C12.0973 0.717125 10.0626 -0.0455437 7.96554 0.00210549C5.86847 0.0497547 3.87051 0.904053 2.38728 2.38728C0.904053 3.87051 0.0497547 5.86847 0.00210549 7.96554C-0.0455437 10.0626 0.717125 12.0973 2.13146 13.6464C3.54579 15.1954 5.50288 16.1396 7.59562 16.2825C9.68835 16.4253 11.7556 15.7558 13.3673 14.4133L18.954 20L20 18.954ZM1.50598 8.16382C1.50598 6.84703 1.89645 5.5598 2.62803 4.46492C3.3596 3.37004 4.39941 2.51669 5.61598 2.01277C6.83254 1.50886 8.17121 1.37701 9.46271 1.6339C10.7542 1.8908 11.9405 2.5249 12.8716 3.45601C13.8028 4.38713 14.4369 5.57345 14.6937 6.86494C14.9506 8.15644 14.8188 9.49511 14.3149 10.7117C13.811 11.9282 12.9576 12.9681 11.8627 13.6996C10.7678 14.4312 9.48062 14.8217 8.16382 14.8217C6.39865 14.8197 4.70634 14.1176 3.45818 12.8695C2.21001 11.6213 1.50793 9.92899 1.50598 8.16382Z"
                                                            fill="white" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="cart-wrapper" href="javascript:;"><span><svg width="22"
                                                        height="20" viewBox="0 0 22 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.4062 12.8999H8.5229C7.9223 12.8996 7.34032 12.6914 6.87584 12.3106C6.41136 11.9299 6.09301 11.4001 5.9749 10.8112L4.22423 2.06652H1.46823C1.23838 2.06652 1.01793 1.97521 0.855403 1.81268C0.692872 1.65015 0.601563 1.42971 0.601562 1.19985C0.601562 0.969997 0.692872 0.749557 0.855403 0.587025C1.01793 0.424494 1.23838 0.333184 1.46823 0.333184H4.9349C5.13765 0.329095 5.33542 0.396237 5.49377 0.522922C5.65213 0.649606 5.76105 0.827812 5.80156 1.02652L7.67356 10.4732C7.71408 10.6719 7.823 10.8501 7.98135 10.9768C8.13971 11.1035 8.33748 11.1706 8.54023 11.1665H17.4062C17.6078 11.171 17.8046 11.1051 17.9628 10.9801C18.1209 10.8552 18.2306 10.679 18.2729 10.4819L19.6682 3.98185C19.6958 3.85386 19.6939 3.7213 19.6629 3.59412C19.6318 3.46694 19.5724 3.34844 19.489 3.24753C19.4056 3.14662 19.3004 3.06591 19.1814 3.01146C19.0623 2.95702 18.9324 2.93026 18.8016 2.93318H17.9349C17.705 2.93318 17.4846 2.84188 17.3221 2.67934C17.1595 2.51681 17.0682 2.29637 17.0682 2.06652C17.0682 1.83666 17.1595 1.61622 17.3221 1.45369C17.4846 1.29116 17.705 1.19985 17.9349 1.19985H18.8016C19.1951 1.19077 19.5856 1.27117 19.9436 1.43498C20.3015 1.5988 20.6176 1.84177 20.868 2.14555C21.1183 2.44933 21.2964 2.80599 21.3889 3.18865C21.4813 3.5713 21.4857 3.96995 21.4016 4.35452L19.9889 10.8545C19.8609 11.4413 19.5337 11.9656 19.0629 12.3384C18.5921 12.7113 18.0067 12.9097 17.4062 12.8999ZM9.26823 19.3999C8.754 19.3999 8.25132 19.2474 7.82375 18.9617C7.39618 18.676 7.06293 18.2699 6.86614 17.7948C6.66936 17.3197 6.61787 16.797 6.71819 16.2926C6.81851 15.7883 7.06614 15.325 7.42975 14.9614C7.79337 14.5978 8.25665 14.3501 8.761 14.2498C9.26535 14.1495 9.78812 14.201 10.2632 14.3978C10.7383 14.5946 11.1444 14.9278 11.4301 15.3554C11.7157 15.7829 11.8682 16.2856 11.8682 16.7999C11.8682 17.4894 11.5943 18.1507 11.1067 18.6383C10.6191 19.1259 9.95779 19.3999 9.26823 19.3999ZM9.26823 15.9332C9.09682 15.9332 8.92926 15.984 8.78674 16.0792C8.64421 16.1745 8.53313 16.3098 8.46754 16.4682C8.40194 16.6266 8.38478 16.8008 8.41822 16.9689C8.45166 17.1371 8.5342 17.2915 8.65541 17.4127C8.77661 17.5339 8.93104 17.6164 9.09915 17.6499C9.26727 17.6833 9.44153 17.6661 9.59989 17.6005C9.75825 17.535 9.89361 17.4239 9.98884 17.2813C10.0841 17.1388 10.1349 16.9713 10.1349 16.7999C10.1349 16.57 10.0436 16.3496 9.88106 16.187C9.71852 16.0245 9.49809 15.9332 9.26823 15.9332ZM17.0682 19.3999C16.554 19.3999 16.0513 19.2474 15.6238 18.9617C15.1962 18.676 14.8629 18.2699 14.6661 17.7948C14.4694 17.3197 14.4179 16.797 14.5182 16.2926C14.6185 15.7883 14.8661 15.325 15.2298 14.9614C15.5934 14.5978 16.0566 14.3501 16.561 14.2498C17.0653 14.1495 17.5881 14.201 18.0632 14.3978C18.5383 14.5946 18.9444 14.9278 19.2301 15.3554C19.5157 15.7829 19.6682 16.2856 19.6682 16.7999C19.6682 17.4894 19.3943 18.1507 18.9067 18.6383C18.4191 19.1259 17.7578 19.3999 17.0682 19.3999ZM17.0682 15.9332C16.8968 15.9332 16.7293 15.984 16.5867 16.0792C16.4442 16.1745 16.3331 16.3098 16.2675 16.4682C16.2019 16.6266 16.1848 16.8008 16.2182 16.9689C16.2517 17.1371 16.3342 17.2915 16.4554 17.4127C16.5766 17.5339 16.731 17.6164 16.8992 17.6499C17.0673 17.6833 17.2415 17.6661 17.3999 17.6005C17.5583 17.535 17.6936 17.4239 17.7888 17.2813C17.8841 17.1388 17.9349 16.9713 17.9349 16.7999C17.9349 16.57 17.8436 16.3496 17.6811 16.187C17.5185 16.0245 17.2981 15.9332 17.0682 15.9332Z"
                                                            fill="#F85934" />
                                                        <path
                                                            d="M15.3323 6.39935H10.1323C9.90244 6.39935 9.682 6.30804 9.51947 6.14551C9.35693 5.98298 9.26562 5.76254 9.26562 5.53268C9.26562 5.30283 9.35693 5.08239 9.51947 4.91986C9.682 4.75733 9.90244 4.66602 10.1323 4.66602H15.3323C15.5621 4.66602 15.7826 4.75733 15.9451 4.91986C16.1076 5.08239 16.199 5.30283 16.199 5.53268C16.199 5.76254 16.1076 5.98298 15.9451 6.14551C15.7826 6.30804 15.5621 6.39935 15.3323 6.39935Z"
                                                            fill="#F85934" />
                                                        <path
                                                            d="M12.7339 8.99974C12.504 8.99974 12.2836 8.90843 12.121 8.7459C11.9585 8.58337 11.8672 8.36293 11.8672 8.13307V2.93307C11.8672 2.70322 11.9585 2.48278 12.121 2.32025C12.2836 2.15772 12.504 2.06641 12.7339 2.06641C12.9637 2.06641 13.1841 2.15772 13.3467 2.32025C13.5092 2.48278 13.6005 2.70322 13.6005 2.93307V8.13307C13.6005 8.36293 13.5092 8.58337 13.3467 8.7459C13.1841 8.90843 12.9637 8.99974 12.7339 8.99974Z"
                                                            fill="#F85934" />
                                                    </svg> </span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex">
                                    <div class="toggle-main-wrapper click-toggle" id="sidebar-toggle">
                                        <span class="line"></span>
                                        <span class="line"></span>
                                        <span class="line"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="sidebar_logo">
                    <a href="home-1.html"><img src="images/LOGO RITG.png" alt="logo" width="160px" height="60px" /></a>
                </div>
                <div id="cssmenu">
                    <ul class="float_left">
                        <li class="">
                            <a href="#">Home</a>
                        </li>
                        <li class="">
                            <a href="#">About Us</a>
                        </li>
                        <li class="">
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- responsive menu End -->
        </div>
    </div>
    <!--header end-->