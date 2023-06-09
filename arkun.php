<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="Arkun" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="./static/Icons/Satyakilogo.png"
    />
    <meta name="description" content="Arkun" />
    <title>SATYAKI</title>

    <!--  
    Stylesheets
    =============================================

    -->
    <!-- Default stylesheets-->
    <link
      rel="stylesheet"
      href="./static/lib/bootstrap/dist/css/bootstrap.min.css"
    />
    <!-- Template specific stylesheets-->
    <link rel="stylesheet" href="./static/fonts/Roboto_condensed.css" />
    <link rel="stylesheet" href="./static/fonts/Adobe_arabic.css" />
    <link rel="stylesheet" href="./static/fonts/Volkhov.css" />
    <link rel="stylesheet" href="./static/fonts/opensans.css" />
    <link rel="stylesheet" href="./static/lib/animate.css/animate.css" />
    <!-- <link rel="stylesheet" href="./static/"> -->
    <link
      rel="stylesheet"
      href="./static/lib/components-font-awesome/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./static/lib/flexslider/flexslider.css" />
    <link
      rel="stylesheet"
      href="./static/lib/owl.carousel/dist/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./static/lib/owl.carousel/dist/assets/owl.theme.default.min.css"
    />
    <link
      rel="stylesheet"
      href="./static/lib/magnific-popup/dist/magnific-popup.css"
    />
    <link
      rel="stylesheet"
      href="./static/lib/simple-text-rotator/simpletextrotator.css"
    />
    <!-- Main stylesheet and color file -->
    <link rel="stylesheet" href="./static/css/style.css" />
    <link
      id="color-scheme"
      rel="stylesheet"
      href="./static/css/colors/default.css"
    />
    <!-- <link rel="stylesheet" href="./static/about/about.css" /> -->
    <link rel="stylesheet" href="./static/about/bootstrapabout.css" />
    <link rel="stylesheet" href="./static/css/arkunHomepage.css" />
    <link
      href="https://db.onlinewebfonts.com/c/6b75b24d502dab23003320c2e1b2fc68?family=Adobe+Arabic"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="stylesheet" href="./static/css/arkun_table.css" />
    <style>
      @-webkit-keyframes zoom {
        from {
          -webkit-transform: scale(1, 1);
        }
        to {
          -webkit-transform: scale(1.12, 1.12);
        }
      }

      @keyframes zoom {
        from {
          transform: scale(1, 1);
        }
        to {
          transform: scale(1.12, 1.12);
        }
      }

      .carousel-inner .item > img {
        -webkit-animation: zoom 10s;
        animation: zoom 10s;
      }
      #logo {
        position: absolute;
        top: 5px;
        left: 13px;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav
        class="navbar navbar-custom navbar-fixed-top navbar-dark"
        role="navigation"
      >
        <div>
          <div class="navbar-header">
            <button
              class="navbar-toggle"
              type="button"
              data-toggle="collapse"
              data-target="#custom-collapse"
            >
              <span class="sr-only">Toggle navigation</span
              ><span class="icon-bar"></span><span class="icon-bar"></span
              ><span class="icon-bar"></span>
            </button>
            <a class="navbar-logo" id="logo" href="/"
              ><img src="./static/images/logo.png" alt="Satyaki"
            /></a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a href="./aboutus.php">About Us</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown"
                  >Solutions</a
                >
                <ul class="dropdown-menu">
                  <li><a href="./aiml_solutions.php">AI & ML Solutions</a></li>
                  <li><a href="./sted.php">STED</a></li>
                  <li>
                    <a href="./digital_branding.php">Digital Branding</a>
                  </li>
                  <li>
                    <a href="./full_stack_development.php"
                      >Full Stack Development</a
                    >
                  </li>
                  <li><a href="./iot.php">IoT & Robotics</a></li>
                  <li><a href="./arkun.php">Arkun</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="./contact.php">Contact Us &nbsp;&nbsp;&nbsp;&nbsp;</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- <section
        class="module contact-page-header"
        id="home"
        data-background="./static/images/Arkun/arkunhome_banner2.png"
      >
        <div class="whatApp_box" style="text-align: end">
          <img src="../../static/images/Arkun/whatsapp-icon.png" />
          <br/>
          <button class="message"><span>Message us</span></button>
        </div>
      </section> -->
      <section class="main_section">
        <div class="display_desktop">
          <img src="../../static/images/Arkun/arkunhome_banner2.png" />
        </div>
        <div class="display_mobile">
          <img src="../../static/images/Arkun/mobile_bannerImg.png" />
        </div>

        <div class="whatApp_box" style="text-align: end">
          <img src="../../static/images/Arkun/whatsapp-icon.png" />
          <br />
          <button class="message"><span>Message us</span></button>
        </div>
      </section>

      <!-- Portfolio Grid -->
      <!-- section two key factors  -->
      <section
        class="module arkunhome-page-body"
        id="home"
        data-background="static/images/Arkun/backround_img.png"
      >
        <div class="container">
          <div class="wht_arkunTxt">
            <h2 class="wht_h2">What is arkun?</h2>
            <h6 class="wht_p">
              Arkun is an AI Based platform where you can send personalized
              Targeted Advertisement videos for your multitude of customers
              through any media platforms.
            </h6>
          </div>
          <h1>How Arkun works?</h1>
          <!-- <p>Lorem Ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
          <div class="row">
            <div class="course-col">
              <img
                src="./static/images/Arkun/upload_video1.png"
                alt=""
                srcset=""
              />
              <h3>Creation of Video</h3>
              <p>Creation of Base video as per customer requirement</p>
            </div>
            <div class="course-col">
              <img src="./static/images/Arkun/thumbnail.png" alt="" srcset="" />
              <h3 style="margin-top: 24px">Add Thumbnail</h3>
              <p>
                Customising video with unique thumbnail as per
                existing/potential client base
              </p>
            </div>
            <div class="course-col">
              <img
                src="./static/images/Arkun/music_speech.png"
                alt=""
                srcset=""
              />
              <h3 style="margin-top: 15px;">Add Music & Speech</h3>
              <p>
                Adding background music and unique speech as per
                existing/potential client base
              </p>
            </div>

            <div class="course-col">
              <img
                src="./static/images/Arkun/send_customer3.png"
                alt=""
                srcset=""
              />
              <h3>Send The Videos</h3>
              <p>Send customised videos to your clients</p>
            </div>
          </div>

          <div class="useful_for_business">
            <h2 class="business_h2">ARKUN VIDEOS ARE GOOD FOR YOUR BUSINESS</h2>
            <h6 class="business_h6">
              Arkun is a SAAS solution for creating customized video promotions
              at scale.
            </h6>
            <div class="orderlist_div">
              <ol>
                <li>
                  SaaS Solution to create customized one to one video promotions
                </li>
                <li> Reach large-scale customers with Unique Message</li>
                <li>
                  Saves your Time by Sending Multitude of Customers in one click
                </li>
                <li> Best Way to Tranform your Digital Advertising Journey</li>
              </ol>
            </div>
          </div>
        </div>

        <section class="arkun_features">
          <!-- <div class="container" data-aos="fade-up"> -->
          <text class="feature_h2">FEATURES OF ARKUN</text>
          <br />
          <text class="feature_para">Where Technology Meets Creativity</text>

          <div class="features_contents_main">
            <div class="row content">
              <div class="col-lg-6">
                <div class="f_column">
                  <img
                    src="./static/images/Arkun/featureImg1.png"
                    style="margin-bottom: 1.5rem"
                  />
                  <br />
                  <b class="feature_bTxt"
                    >Latest Technology to Promote your Business</b
                  >
                  <p class="feature_pTxt">
                    Arkun implements the latest AI-based technology which
                    produces unique one-to-one video messages & speech.
                  </p>
                </div>
                <div class="f_column">
                  <img
                    src="./static/images/Arkun/feature3.png"
                    style="margin-bottom: 1.5rem"
                  />
                  <br />
                  <b class="feature_bTxt"
                    >Highly Scalable to Customer Requirements</b
                  >
                  <p class="feature_pTxt">
                    Customised videos which are suitable for all kinds of
                    businesses like Small, Medium and Large scale
                  </p>
                </div>
              </div>
              <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="f_column">
                  <img
                    src="./static/images/Arkun/feature2.png"
                    style="margin-bottom: 1.5rem"
                  />
                  <br />
                  <b class="feature_bTxt">Increases Promotion Open ratio</b>
                  <p class="feature_pTxt">
                    With help of client base data, Videos will reach a multitude
                    of customers with unique messages which provoke customer's
                    interest in your Products, Services or Brand
                  </p>
                </div>

                <div class="f_column">
                  <img
                    src="./static/images/Arkun/feature4.png"
                    style="margin-bottom: 1.5rem"
                  />
                  <br />
                  <b class="feature_bTxt"
                    >Integrated Analytic Solution to Track Progress</b
                  >
                  <p class="feature_pTxt">
                    Being tired of old-fashioned advertising Arkun will
                    transform your advertising journey with digitalisation and
                    have built in analytical tool which helps to track and
                    measure you business progress.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </section>

        <!-- demo video -->
        <!-- <div class="arkun_demoVideo">
          <h3>FEATURES OF ARKUN</h3>
          <p>Where Technology Meets Creativity</p>
          <div class="video___main">
            <div class="video-sh_wrapper">
              <div class="sh_wrapper">
                <video
                  class="sh_video"
                  poster="../../static/images/Arkun/video-poster.png"
                >
                  <source
                    src="../../static/images/Arkun/demovideo.mp4"
                    type="video/mp4"
                  />
                </video>
                <div class="playpausebtn" style="display: block"></div>
              </div>
            </div>
          </div>
          <br />
          <button class="try_now">Try it now!</button>
        </div> -->
      </section>

      <!-- <section id="choose_plans" style="margin: 4rem">
        <div class="plan_rows">
          <div class="plan_column">
            <h1 class="choose_plan_col1">Choose your Plan</h1>
          </div>
          <div class="plan_column">
            <div class="div_col2">
              <div class="plans_content">
                <p>
                  Basic <br />
                  <span
                    style="font-weight: 700; font-size: 30px; color: #0e3482"
                    >&#x20b9; 6,999 </span
                  ><br /><span
                    style="
                      color: #005e85;
                      font-weight: 400;
                      font-size: 20px;
                      line-height: 24px;
                      text-transform: capitalize;
                      padding: 0px 25px;
                    "
                    >*Applicable taxes per month</span
                  >
                </p>
              </div>
              <a href="#"
                ><button
                  style="
                    width: 92%;
                    background: #e4f7ff;
                    color: #003e77;
                    font-size: 24px;
                    font-weight: 700;
                    border: none;
                  "
                >
                  BUY NOW
                </button>
              </a>
            </div>
          </div>
          <div class="plan_column">
            <div class="div_col3">
              <div class="plans_content">
                <p>
                  Pro <br />
                  <span
                    style="font-weight: 700; font-size: 30px; color: #0e3482"
                  >
                    &#x20b9;9,999 </span
                  ><br /><span
                    style="
                      color: #005e85;
                      font-weight: 400;
                      font-size: 20px;
                      line-height: 24px;
                      text-transform: capitalize;
                      padding: 0px 25px;
                    "
                    >*Applicable taxes per month</span
                  >
                </p>
              </div>
              <button
                style="
                  width: 92%;
                  background: #e4f7ff;
                  color: #003e77;
                  font-size: 24px;
                  font-weight: 700;
                  border: none;
                "
              >
                BUY NOW
              </button>
            </div>
          </div>
          <div class="plan_column">
            <div class="div_col4">
              <div class="plans_content" style="padding: 37px 10px;">
                <p>Premium</p>
                <span
                    style="
                      color: #005e85;
                      font-weight: 400;
                      font-size: 20px;
                      line-height: 24px;
                      text-transform: capitalize;
                      padding: 0px 25px;
                    "
                    >*Customizable Features</span>
              </div>
              <button
                style="
                  width: 92%;
                  background: #e4f7ff;
                  color: #003e77;
                  font-size: 24px;
                  font-weight: 700;
                  border: none;
                "
              >
                BUY NOW
              </button>
            </div>
          </div>
        </div>
      </section> -->

      <!-- new trial code -->
      <section id="table_format">
        <div class="container">
          <section id="choose_plans" style="margin: 4rem 0rem">
            <div class="plan_rows">
              <div class="plan_column">
                <div>
                  <div style="height: 255px">
                    <h1 class="choose_plan_col1">Choose your Plan</h1>
                  </div>

                  <div class="table_main">
                    <div class="th_main" style="position: relative; top: 7px">
                      <h1 class="th">Top features</h1>
                    </div>

                    <p class="td table_col1">Customizing Videos</p>
                    <p class="td table_col1" style="background: #fcfbfb">
                      Video variant count
                    </p>
                    <p class="td table_col1">Broadcasting Videos</p>
                    <p class="td table_col1" style="background: #fcfbfb">
                      Video count
                    </p>
                    <p class="td table_col1">Customer contact database</p>
                    <p class="td table_col1" style="background: #fcfbfb">
                      Background music
                    </p>
                    <p class="td table_col1">Premium song music</p>
                    <p class="td table_col1" style="background: #fcfbfb">
                      AI Digital platform compatibility
                    </p>
                    <p class="td table_col1">Storage</p>
                    <p class="td table_col1" style="background: #fcfbfb">
                      Cloud Transfers
                    </p>
                  </div>
                </div>
              </div>
              <div class="plan_column">
                <div class="div_col2">
                  <div style="height: 255px">
                    <div class="plans_content">
                      <p>
                        Basic <br />
                        <span
                          style="
                            font-weight: 700;
                            font-size: 30px;
                            color: #0e3482;
                          "
                          ><img
                            src="../../static/images/Arkun/INR.png"
                            class="inr_img"
                          />6,999 </span
                        ><br /><span class="green_txtp"
                          >*Applicable taxes per month</span
                        >
                      </p>
                    </div>
                    <a href="#"
                      ><button
                        style="
                          width: 91%;
                          background: #e4f7ff;
                          color: #003e77;
                          font-size: 24px;
                          font-weight: 700;
                          border: none;
                        "
                      >
                        BUY NOW
                      </button>
                    </a>
                  </div>
                  <div class="table_main">
                    <div class="th_main">
                      <h1 class="th" style="color: transparent">
                        top features
                      </h1>
                    </div>

                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      >
                      </i>
                      Yes
                    </p>
                    <p
                      class="td"
                      style="background: #fcfbfb; margin-top: -0.8rem"
                    >
                      One
                    </p>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td" style="background: #fcfbfb">500</p>
                    <p class="td">Contact us</p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td">
                      <svg
                        style="color: #ff2121"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-x-circle-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                        />
                      </svg>
                      No
                    </p>
                    <p class="td" style="background: #fcfbfb">
                      <svg
                        style="color: #ff2121"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-x-circle-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                        />
                      </svg>
                      No
                    </p>
                    <p class="td">One week</p>
                    <p class="td" style="background: #fcfbfb">
                      <svg
                        style="color: #ff2121"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-x-circle-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                        />
                      </svg>
                      No
                    </p>
                  </div>
                </div>
              </div>
              <div class="plan_column">
                <div class="div_col3">
                  <div style="height: 255px">
                    <div class="plans_content">
                      <p>
                        Pro <br />
                        <span
                          style="
                            font-weight: 700;
                            font-size: 30px;
                            color: #0e3482;
                          "
                        >
                          <img
                            src="../../static/images/Arkun/INR.png"
                            class="inr_img"
                          />9,999 </span
                        ><br /><span class="green_txtp"
                          >*Applicable taxes per month</span
                        >
                      </p>
                    </div>

                    <a href="#">
                      <button
                        style="
                          width: 91%;
                          background: #e4f7ff;
                          color: #003e77;
                          font-size: 24px;
                          font-weight: 700;
                          border: none;
                        "
                      >
                        BUY NOW
                      </button>
                    </a>
                  </div>
                  <div class="table_main">
                    <div class="th_main">
                      <h1 class="th" style="color: transparent">
                        Top features
                      </h1>
                    </div>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p
                      class="td"
                      style="background: #fcfbfb; margin-top: -0.8rem"
                    >
                      One
                    </p>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td" style="background: #fcfbfb">1000</p>
                    <p class="td">Contact us</p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td">One month</p>
                    <p class="td" style="background: #fcfbfb">
                      <svg
                        style="color: #ff2121"
                        xmlns="http://www.w3.org/2000/svg"
                        width="16"
                        height="16"
                        fill="currentColor"
                        class="bi bi-x-circle-fill"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                        />
                      </svg>
                      No
                    </p>
                  </div>
                </div>
              </div>
              <div class="plan_column">
                <div class="div_col4">
                  <div style="height: 255px">
                    <div class="plans_content" style="padding: 37px 10px">
                      <p>Premium</p>

                      <span class="green_txtp">*Customizable Features</span>
                    </div>
                    <a href="#">
                      <button
                        style="
                          width: 91%;
                          background: #e4f7ff;
                          color: #003e77;
                          font-size: 24px;
                          font-weight: 700;
                          border: none;
                        "
                      >
                        CONTACT US
                      </button>
                    </a>
                  </div>
                  <div class="table_main">
                    <div class="th_main">
                      <h1 class="th" style="color: transparent">
                        top features
                      </h1>
                    </div>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p
                      class="td"
                      style="background: #fcfbfb; margin-top: -0.8rem"
                    >
                      Three
                    </p>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td" style="background: #fcfbfb">5000</p>
                    <p class="td">Contact us</p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                    <p class="td">Contact us</p>
                    <p class="td" style="background: #fcfbfb">
                      <i
                        class="fa fa-check-circle green-color"
                        style="color: #019a0d"
                      ></i>
                      Yes
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- <table>
            <thead>
              
              <tr>
                <th>Top features</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table_col1">Customizing Videos</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Video variant count</td>
                <td>One</td>
                <td>One</td>
                <td>Three</td>
              </tr>

              <tr>
                <td class="table_col1">Broadcasting Videos</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Video count</td>
                <td>500</td>
                <td>1000</td>
                <td>5000</td>
              </tr>

              <tr>
                <td class="table_col1">Customer contact database</td>
                <td>Contact us</td>
                <td>Contact us</td>
                <td>Contact us</td>
              </tr>

              <tr>
                <td class="table_col1">Background music</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Premium song music</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">AI Digital platform compatibility</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Storage</td>
                <td>One week</td>
                <td>One month</td>
                <td>Contact us</td>
              </tr>

              <tr>
                <td class="table_col1">Cloud Transfers</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>
            </tbody>
          </table> -->
        </div>
      </section>

    <!-- mobile table -->

    <div id="mobile_table_scroll" class="mobile_table_scroll">
      <div class="table-wrap">
        <table class="main-table">
          <thead>


            
            <tr style="background:transparent !important;">
              <th
                class="fixed-side"
                scope="col"
                style="
                  font-weight: 700;
                  font-size: 24px;
                  color: #072259;
                  line-height: 20px;
                  font-family: 'Adobe Arabic';
                "
              >
                Choose your Plan
              </th>
              <th scope="col" style="background:transparent;">
                <div class="box_table">
                  <p>
                    <br/><span style="font-size:24px">Basic </span><br />
                    <span
                      style="font-weight: 700; font-size: 30px; color: #0e3482"
                      ><img
                        src="../../static/images/Arkun/INR.png"
                        class="inrr_imgg"
                      />6,999 </span
                    ><br /><span class="mobile_greentxt"
                      >*Applicable taxes per month <br/></span
                    >
                    
                  </p>
                </div>
                <a href="#"
                  ><button
                    style="
                      width: 100%;
                      background: #e4f7ff;
                      color: #003e77;
                      font-size: 24px;
                      font-weight: 700;
                      border: none;
                      font-family: 'Adobe Arabic';
                      /* margin: 0px 20px; */
                    "
                  >
                    BUY NOW
                  </button>
                </a>
              </th>
              <th scope="col">
                <div class="box_table">
                  <p>
                   <br/><span style="font-size:24px;"> Pro </span><br />
                    <span
                      style="font-weight: 700; font-size: 30px; color: #0e3482"
                      ><img
                        src="../../static/images/Arkun/INR.png"
                        class="inrr_imgg"
                      />9,999 </span
                    ><br /><span class="mobile_greentxt"
                      >*Applicable taxes per month </span
                    >
                
                 
                  </p>
                </div>
                <a href="#"
                  ><button
                    style="
                      width: 100%;
                      background: #e4f7ff;
                      color: #003e77;
                      font-size: 24px;
                      font-weight: 700;
                      border: none;
                      font-family: 'Adobe Arabic';
                      /* margin: 0px 20px; */
                    "
                  >
                    BUY NOW
                  </button>
                </a>
              </th>
              <th scope="col">
                <div class="box_table">
                  <p style="    padding: 26px 10px;">
                   <!-- <br/> -->
                   <br/> <span style="font-size:24px">PREMIUM</span> <br />
                    
                   <span class="mobile_greentxt"
                      >*Customizable Features</span
                    >
               
                  </p>
                  
                </div>
                <a href="#"
                  ><button
                    style="
                      width: 100%;
                      background: #e4f7ff;
                      color: #003e77;
                      font-size: 24px;
                      font-weight: 700;
                      border: none;
                      font-family: 'Adobe Arabic';
                      text-transform: uppercase;
                      /* margin: 0px 20px; */
                    "
                  >
                  contact us
                  </button>
                </a>
              </th>
            </tr>
          </thead>
          <tbody>
          <tr style="background: transparent !important;">
              <th
                class="fixed-side"
                style="
                  background: transparent !important;
                "
              >
              &nbsp;
              </th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <tr>

            <tr style="background: rgba(245, 252, 255, 0.56) !important;">
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 700;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: rgba(245, 252, 255, 0.56) !important;
                "
              >
                Top features
              </th>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                "
              >
              Customizing Videos
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: #FCFBFB !important;
                "
              >
                Video variant count
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              One
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              One
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              Three
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                "
              >
              Broadcasting Videos 
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: #FCFBFB !important;
                "
              >
              Video count
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              500
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              1000
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
            5000
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                "
              >
              Customer contact database
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              Contact us
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              Contact us
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
            Contact us
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: #FCFBFB !important;
                "
              >
              Background music
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                "
              >
              Premium song music
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              <svg
              style="color: #ff2121"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-x-circle-fill"
              viewbox_table="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
              />
            </svg>
            No
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: #FCFBFB !important;
                "
              >
              AI Digital platform compatibility
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              <svg
              style="color: #ff2121"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-x-circle-fill"
              viewbox_table="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
              />
            </svg>
            No
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
                <i
                  class="fa fa-check-circle green-color"
                  style="color: #019a0d"
                >
                </i>
                Yes
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                "
              >
              Storage
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              One week
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              one month
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
            Contact us
            </td>
            </tr>

            <tr>
              <th
                class="fixed-side"
                style="
                  font-family: 'Adobe Arabic';
                  font-weight: 500;
                  font-size: 20px;
                  line-height: 24px;
                  color: #113f9d;
                  text-align: left;
                  background: #FCFBFB !important;
                "
              >
              Cloud Transfers
              </th>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              <svg
              style="color: #ff2121"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-x-circle-fill"
              viewbox_table="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
              />
            </svg>
            No
              </td>
              <td
                style="
                  font-family: 'Adobe Arabic';
                  font-size: 18px;
                  line-height: 24px;
                  color: #272727;
                  text-align: center;
                "
              >
              <svg
              style="color: #ff2121"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-x-circle-fill"
              viewbox_table="0 0 16 16"
            >
              <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
              />
            </svg>
            No
              </td>
              <td
              style="
                font-family: 'Adobe Arabic';
                font-size: 18px;
                line-height: 24px;
                color: #272727;
                text-align: center;
              "
            >
              <i
                class="fa fa-check-circle green-color"
                style="color: #019a0d"
              >
              </i>
              Yes
            </td>
            </tr>
           
          </tfoot>
        </table>
      </div>
    </div>
	





      <!-- table format  old-->
      <!-- <section id="table_format">
        <div class="container">
          <section id="choose_plans" style="margin: 4rem 0rem;">
            <div class="plan_rows">
              <div class="plan_column">
                <h1 class="choose_plan_col1">Choose your Plan</h1>
              </div>
              <div class="plan_column">
                <div class="div_col2">
                  <div class="plans_content">
                    <p>
                      Basic <br />
                      <span
                        style="font-weight: 700; font-size: 30px; color: #0e3482"
                        >&#x20b9; 6,999 </span
                      ><br /><span
                        style="
                          color: #005e85;
                          font-weight: 400;
                          font-size: 20px;
                          line-height: 24px;
                          text-transform: capitalize;
                          padding: 0px 25px;
                        "
                        >*Applicable taxes per month</span
                      >
                    </p>
                  </div>
                  <a href="#"
                    ><button
                      style="
                        width: 92%;
                        background: #e4f7ff;
                        color: #003e77;
                        font-size: 24px;
                        font-weight: 700;
                        border: none;
                      "
                    >
                      BUY NOW
                    </button>
                  </a>
                </div>
              </div>
              <div class="plan_column">
                <div class="div_col3">
                  <div class="plans_content">
                    <p>
                      Pro <br />
                      <span
                        style="font-weight: 700; font-size: 30px; color: #0e3482"
                      >
                        &#x20b9;9,999 </span
                      ><br /><span
                        style="
                          color: #005e85;
                          font-weight: 400;
                          font-size: 20px;
                          line-height: 24px;
                          text-transform: capitalize;
                          padding: 0px 25px;
                        "
                        >*Applicable taxes per month</span
                      >
                    </p>
                  </div>
                  <button
                    style="
                      width: 92%;
                      background: #e4f7ff;
                      color: #003e77;
                      font-size: 24px;
                      font-weight: 700;
                      border: none;
                    "
                  >
                    BUY NOW
                  </button>
                </div>
              </div>
              <div class="plan_column">
                <div class="div_col4">
                  <div class="plans_content" style="padding: 37px 10px;">
                    <p>Premium</p>
                    <span
                        style="
                          color: #005e85;
                          font-weight: 400;
                          font-size: 20px;
                          line-height: 24px;
                          text-transform: capitalize;
                          padding: 0px 25px;
                        "
                        >*Customizable Features</span>
                  </div>
                  <button
                    style="
                      width: 92%;
                      background: #e4f7ff;
                      color: #003e77;
                      font-size: 24px;
                      font-weight: 700;
                      border: none;
                    "
                  >
                    BUY NOW
                  </button>
                </div>
              </div>
            </div>
          </section>
          <table>
            <thead>
              
              <tr>
                <th>Top features</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td class="table_col1">Customizing Videos</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Video variant count</td>
                <td>One</td>
                <td>One</td>
                <td>Three</td>
              </tr>

              <tr>
                <td class="table_col1">Broadcasting Videos</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Video count</td>
                <td>500</td>
                <td>1000</td>
                <td>5000</td>
              </tr>

              <tr>
                <td class="table_col1">Customer contact database</td>
                <td>Contact us</td>
                <td>Contact us</td>
                <td>Contact us</td>
              </tr>

              <tr>
                <td class="table_col1">Background music</td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Premium song music</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">AI Digital platform compatibility</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>

              <tr>
                <td class="table_col1">Storage</td>
                <td>One week</td>
                <td>One month</td>
                <td>Contact us</td>
              </tr>

              <tr>
                <td class="table_col1">Cloud Transfers</td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <svg
                    style="color: #ff2121"
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-x-circle-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"
                    />
                  </svg>
                  No
                </td>
                <td>
                  <i
                    class="fa fa-check-circle green-color"
                    style="color: #019a0d"
                  ></i>
                  Yes
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </section> -->
      <div style="background: #e7ffff; color: transparent; font-size: 8px">
        a
      </div>
      <section
        class="module arkunhome-page-body1"
        id="home"
        data-background="./static/images/worksbg.png"
      >
        <h1 class="our_works">CUSTOMER REVIEWS</h1>
        <div class="container">
          <div class="row">
            <div class="facilities-col">
              <div class="picture">
                <div class="aiml-works-img1">
                  <!-- <img src="./static/images/works/aiml/blue-policy.png" /> -->
                  <video autoplay muted controls>
                    <source
                      src="./static/images/Arkun/podar.mp4"
                      type="video/mp4"
                    />
                  </video>
                </div>
              </div>
              <div class="text">
                <h3>Podar Jumbo Kids</h3>
                <p>
                  Podar a trusted name and an acknowledged leader in the
                  collective effort to shape the future of our children and the
                  nation. Our design team and tech team collectively created
                  customised video and poster for their target customer and
                  gained exceptionally good footfall for their business.
                </p>
              </div>
            </div>
            <div class="facilities-col">
              <div class="picture">
                <div class="aiml-works-img2">
                  <!-- <img src="./static/images/works//aiml/reliablesite.png" /> -->
                  <video autoplay muted controls>
                    <source
                      src="./static/images/Arkun/uniq-salon.mp4"
                      type="video/mp4"
                    />
                  </video>
                </div>
              </div>
              <div class="text">
                <h3>Uniq Salon & Spa</h3>
                <p>
                  Uniq salon, a small scale business having great deals of offer
                  for their customers. We helped them voice out their deals with
                  in no time through Arkun.
                  <br />
                  <br />
                </p>
              </div>
            </div>
            <div class="facilities-col">
              <div class="picture">
                <div class="aiml-works-img3">
                  <video autoplay muted controls>
                    <source
                      src="./static/images/Arkun/gym.mp4"
                      type="video/mp4"
                    />
                  </video>
                  <!-- <img src="./static/images/works/aiml/arkun.png" /> -->
                </div>
              </div>
              <div class="text">
                <h3>Gym</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                  vulputate libero et velit interdum, ac aliquet odio mattis.lor
                  sit amet, consectetur adipiscing elit. Nunc vulputate libero
                  et velit interdum, ac aliquet odio mattis.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-6">
              <cool-ad>
                <template class="ad__mobile">
                  <p class="copyright font-alt">
                    &copy; 2022&nbsp;<a href="/">Satyaki</a>
                  </p>
                </template>
                <template class="ad__desktop">
                  <p class="copyright font-alt">
                    &copy; 2022&nbsp;<a href="/">Satyaki</a>, All Rights
                    Reserved
                  </p>
                </template>
              </cool-ad>
            </div>
            <div class="col-xs-6 col-sm-6">
              <div class="footer-social-links">
                <!-- <a href="https://www.facebook.com/Satyaki.co.in/" target="_blank"  ><i class="fa fa-facebook"></i></a>
                  <a href="https://instagram.com/satyakisolutions/" target="_blank" ><i class="fa fa-instagram"></i></a>
                  <a href="https://www.linkedin.com/company/satyaki-solutions/" target="_blank" ><i class="fa fa-linkedin"></i></a>
                  <a href="https://twitter.com/SatyakiSolutio1" target="_blank" ><i class="fa fa-twitter"></i></a>
                  <a href="https://www.behance.net/satyakisolutio" target="_blank" ><i class="fa fa-behance"></i></a> -->
                <a
                  href="https://www.facebook.com/Satyaki.co.in/"
                  target="_blank"
                  ><img src="../../static/images/footer/facebook.png"
                /></a>

                <a href="https://twitter.com/SatyakiSolutio1" target="_blank"
                  ><img src="../../static/images/footer/twitter.png"
                /></a>

                <a
                  href="https://join.skype.com/invite/UweV0y1UZfDW"
                  target="_blank"
                  ><img src="../../static/images/footer/skype.png"
                /></a>

                <a
                  href="https://maps.app.goo.gl/QT5qEenB2ck2CeKu8"
                  target="_blank"
                  ><img src="../../static/images/footer/map.png"
                /></a>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- </div> -->
      <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </main>
    <script src="./static/lib/jquery/dist/jquery.js"></script>
    <script src="./static/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./static/lib/wow/dist/wow.js"></script>
    <script src="./static/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="./static/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="./static/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="./static/lib/flexslider/jquery.flexslider.js"></script>
    <script src="./static/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="./static/lib/smoothscroll.js"></script>
    <script src="./static/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="./static/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="./static/js/plugins.js"></script>
    <script src="./static/js/main.js"></script>

    <script src="./static/about/bootstrap.bundle.min.js"></script>

    <!-- arkun demo video -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script>
      $(".sh_video")
        .parent()
        .click(function () {
          if ($(this).children(".sh_video").get(0).paused) {
            $(this).children(".sh_video").get(0).play();
            $(this).children(".playpausebtn").fadeOut();
          } else {
            $(this).children(".sh_video").get(0).pause();
            $(this).children(".playpausebtn").fadeIn();
          }
        });
    </script> -->


    <!-- scrolling -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      // requires jquery library
          jQuery(document).ready(function() {
            jQuery(".main-table").clone(true).appendTo('#mobile_table_scroll').addClass('clone');   
        });
 </script>
  </body>
  <!--
 JavaScripts
 =============================================
 -->
</html>
