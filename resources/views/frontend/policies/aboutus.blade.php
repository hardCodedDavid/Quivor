@extends('frontend.layouts.app')



@section('meta')
    
    
    <link rel="stylesheet" href="{{ static_asset('assets/about/nicepage.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/about/Home.css') }}">
    <script class="u-script" type="text/javascript" src="{{ static_asset('assets/about/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ static_asset('assets/about/nicepage.js') }}" defer=""></script>
    
    
@endsection

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('privacypolicy') }}">"{{ translate('Privacy Policy') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        <div class="p-4 bg-white rounded shadow-sm overflow-hidden mw-100 text-left">


<section class="u-clearfix u-valign-middle-sm u-valign-middle-xs u-section-1" id="carousel_b155">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-align-right u-container-style u-layout-cell u-size-9 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="u-image u-image-circle u-image-1" alt="" data-image-width="124" data-image-height="128"></div>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-size-51 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <h2 class="u-custom-font u-font-montserrat u-text u-text-1">
                        <font>
                          <span style="color: rgb(164, 1, 143);"></span>
                          <span class="u-text-black">About </span>
                        </font>
                        <font color="#a4018f">Us</font>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                    <div class="u-container-layout u-valign-top u-container-layout-3">
                      <p class="u-custom-font u-font-montserrat u-spacing-20 u-text u-text-2">
                        <span style="font-weight: 700;"></span>
                        <span style="font-weight: 400;">Quivor </span>is an online platform that allows the easy access of <span style="font-weight: 400;" class="u-text-black">buying </span>and <span style="font-weight: 400;" class="u-text-black">selling from different vendors</span>. It provides a range of features including product listing, order management, customer support, auction system, and more. Quivor also offers a variety of marketing tools to help businesses promote their products and services. Additionally, it provides&nbsp;a secure and convenient marketplace for users to shop for items from the comfort of their homes.<br>
                      </p>
                    </div>
                  </div>
                  <div class="u-container-align-center u-container-style u-image u-layout-cell u-shape-round u-size-30 u-image-2" data-image-width="1128" data-image-height="901">
                    <div class="u-container-layout u-container-layout-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-container-align-center u-custom-color-1 u-section-2" id="carousel_3458">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">We maximize added value for our clients</h2>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                <div class="u-container-style u-group u-shape-rectangle u-group-1">
                  <div class="u-container-layout">
                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-1"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-1"><img src="{{ static_asset('assets/about/images/115968-1e054c51.png') }}" alt=""></span>
                  </div>
                </div>
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">Strategy</h4>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                <div class="u-container-style u-group u-shape-rectangle u-group-2">
                  <div class="u-container-layout">
                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-2"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-2"><img src="{{ static_asset('assets/about/images/3720937-c9d9a8d0.png') }}" alt=""></span>
                  </div>
                </div>
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">Mission</h4>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                <div class="u-container-style u-group u-shape-rectangle u-group-3">
                  <div class="u-container-layout">
                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-3"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-3"><img src="{{ static_asset('assets/about/images/2282272-813a7688.png') }}" alt=""></span>
                  </div>
                </div>
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">Development</h4>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">
                <div class="u-container-style u-group u-shape-rectangle u-group-4">
                  <div class="u-container-layout">
                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-4"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-4"><img src="{{ static_asset('assets/about/images/171561-3a82e3fd.png') }}" alt=""></span>
                  </div>
                </div>
                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-8">Team</h4>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
              </div>
            </div>
          </div>
        </div>
        <a href="https://nicepage.com/c/medicine-science-html-templates" class="u-active-white u-align-center u-border-none u-btn u-btn-round u-button-style u-radius-50 u-text-active-palette-1-base u-text-body-color u-text-hover-palette-1-base u-white u-btn-1">Get started</a>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-31cb">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-tabs u-tabs-1">
          <ul class="u-border-1 u-border-grey-25 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Sell on Quivor</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Buy on Quivor</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Security Tips</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <img alt="" class="u-image u-image-default u-image-1" data-image-width="892" data-image-height="730" src="{{ static_asset('assets/about/images/undraw_Successful_purchase_re_mpig.png') }}">
                <h4 class="u-custom-font u-font-montserrat u-text u-text-1">How to sell on <span class="u-text-custom-color-1" style="font-weight: 700;">Quivor</span>
                </h4>
                <p class="u-custom-font u-font-montserrat u-text u-text-2">Very easy procedure to get your products ready or sale<br>
                </p>
                <ul class="u-custom-font u-font-montserrat u-text u-text-3">
                  <li>
                    <div class="class u-list-icon"></div>Register your store as a&nbsp;<span style="font-weight: 700;">
                      <span class="u-text-custom-color-1"> Seller<span style="font-weight: 400;">
                          <span class="u-text-black"> with your email address.</span>
                        </span>
                      </span>
                    </span>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Take a clear <span style="font-weight: 700;" class="u-text-custom-color-1">Photo</span> of your product<span style="font-weight: 700;" class="u-text-custom-color-1"></span>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div> Proceed to&nbsp; <span style="font-weight: 700;" class="u-text-custom-color-1">Add Product</span>&nbsp;​​and fill in the required details. e.g (Product title, description, and more)
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Hit the <span style="font-weight: 700;" class="u-text-custom-color-1">Upload</span> button to put your product on sale.&nbsp;
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Start receiving <span style="font-weight: 700;" class="u-text-custom-color-1">Orders</span> instantly.
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-container-layout-2">
                <img alt="" class="u-image u-image-default u-image-2" data-image-width="892" data-image-height="730" src="{{ static_asset('assets/about/images/undraw_Successful_purchase_re_mpig.png') }}">
                <h4 class="u-custom-font u-font-montserrat u-text u-text-4">How to Buy on <span class="u-text-custom-color-1" style="font-weight: 700;">Quivor</span>
                </h4>
                <ul class="u-custom-font u-font-montserrat u-text u-text-5">
                  <li>
                    <div class="class u-list-icon"></div><b>
                      <span style="color: rgb(164, 1, 143);">Register</span>
                      <span style="font-weight: 400;">
                        <span class="u-text-black"> an account with Quivor&nbsp; via your email</span>
                      </span></b>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>
                    <span style="font-weight: 700;" class="u-text-custom-color-1">Search </span>your desired item and view the details about the item if that's what suit you.
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Click on the&nbsp;<span style="font-weight: 700;">
                      <span class="u-text-custom-color-1"> Buy Now&nbsp;<span style="font-weight: 400;">
                          <span class="u-text-black"> button</span>
                        </span>
                      </span>
                    </span>
                    <span style="font-weight: 700;" class="u-text-custom-color-1"></span>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div> Fill up your <span style="font-weight: 700;" class="u-text-custom-color-1">Home address</span> and other information.
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>You get an <span style="font-weight: 700;" class="u-text-custom-color-1">Order Confirmation</span> mail when done.
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Your item will then be <span style="font-weight: 700;" class="u-text-custom-color-1">Delivered</span>&nbsp;and you leave a eedback about the seller.
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
              <div class="u-container-layout u-container-layout-3">
                <ul class="u-custom-font u-font-montserrat u-text u-text-6">
                  <li>
                    <div class="class u-list-icon"></div><b>
                      <span style="color: rgb(164, 1, 143);"></span>
                      <span class="u-text-black">
                        <span style="font-weight: 400;"> Do&nbsp;</span>
                      </span>
                      <span class="u-text-black" style="font-weight: 400;">Not</span>
                      <span style="color: rgb(164, 1, 143);">&nbsp;</span>
                      <span class="u-text-black">
                        <span style="font-weight: 400;"> Pay In Advance to any Seller, Not even delivery.</span>
                      </span></b>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>
                    <span style="font-weight: 700;">
                      <span class="u-text-black">
                        <span style="font-weight: 400;"> Try to verify the Item and Seller before paying.</span>
                      </span>
                    </span>
                    <br>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Pay ONLY&nbsp; after recieving the Item.<span style="font-weight: 700;" class="u-text-custom-color-1"></span>
                  </li>
                  <li>
                    <div class="class u-list-icon"></div>Stay Safe!
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-4" id="sec-f595">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="{{ static_asset('assets/about/images/388531-0724b8fe.png') }}" alt=""></span>
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-1">Secured</h3>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2"> We are highly focused on the security and can solve any issues in short-terms. That’s why we ask you, kindly, to leave a review after purchasing.&nbsp;</p>
                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">learn more</a>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-2"><img src="{{ static_asset('assets/about/images/8922295-3a50380c.png') }}" alt=""></span>
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-3">Quality</h3>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">We make sure we get reliable sellers to deliver to you the best quality.</p>
                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">learn more</a>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-3"><img src="{{ static_asset('assets/about/images/1067566-68e5fc05.png') }}" alt=""></span>
                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-5">Support</h3>
                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    </div>
    </div>
</section>
@endsection





















<!--<head>-->
<!--    <link rel="stylesheet" href="{{ static_asset('assets/about/nicepage.css') }}">-->
<!--    <link rel="stylesheet" href="{{ static_asset('assets/about/Home.css') }}">-->
<!--    <script class="u-script" type="text/javascript" src="{{ static_asset('assets/about/jquery.js') }}" defer=""></script>-->
<!--    <script class="u-script" type="text/javascript" src="{{ static_asset('assets/about/nicepage.js') }}" defer=""></script>-->
<!--    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">-->
<!--    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">-->
<!--    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">-->
    
    
    
    
    
<!--    <script type="application/ld+json">{-->
<!--		"@context": "http://schema.org",-->
<!--		"@type": "Organization",-->
<!--		"name": ""-->
<!--}</script>-->

<!--</head>-->
<!--  <body class="u-body u-xl-mode" data-lang="en">-->
<!--    <section class="u-clearfix u-valign-middle-sm u-valign-middle-xs u-section-1" id="carousel_b155">-->
<!--      <div class="u-clearfix u-sheet u-sheet-1">-->
<!--        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">-->
<!--          <div class="u-gutter-0 u-layout">-->
<!--            <div class="u-layout-col">-->
<!--              <div class="u-size-30 u-size-60-md">-->
<!--                <div class="u-layout-row">-->
<!--                  <div class="u-align-right u-container-style u-layout-cell u-size-9 u-layout-cell-1">-->
<!--                    <div class="u-container-layout u-container-layout-1">-->
<!--                      <div class="u-image u-image-circle u-image-1" alt="" data-image-width="124" data-image-height="128"></div>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="u-align-left u-container-style u-layout-cell u-size-51 u-layout-cell-2">-->
<!--                    <div class="u-container-layout u-container-layout-2">-->
<!--                      <h2 class="u-custom-font u-font-montserrat u-text u-text-1">-->
<!--                        <font>-->
<!--                          <span style="color: rgb(164, 1, 143);"></span>-->
<!--                          <span class="u-text-black">About </span>-->
<!--                        </font>-->
<!--                        <font color="#a4018f">Us</font>-->
<!--                      </h2>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--              <div class="u-size-30 u-size-60-md">-->
<!--                <div class="u-layout-row">-->
<!--                  <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-3">-->
<!--                    <div class="u-container-layout u-valign-top u-container-layout-3">-->
<!--                      <p class="u-custom-font u-font-montserrat u-spacing-20 u-text u-text-2">-->
<!--                        <span style="font-weight: 700;"></span>-->
<!--                        <span style="font-weight: 400;">Quivor </span>is an online platform that allows the easy access of <span style="font-weight: 400;" class="u-text-black">buying </span>and <span style="font-weight: 400;" class="u-text-black">selling from different vendors</span>. It provides a range of features including product listing, order management, customer support, auction system, and more. Quivor also offers a variety of marketing tools to help businesses promote their products and services. Additionally, it provides&nbsp;a secure and convenient marketplace for users to shop for items from the comfort of their homes.<br>-->
<!--                      </p>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="u-container-align-center u-container-style u-image u-layout-cell u-shape-round u-size-30 u-image-2" data-image-width="1128" data-image-height="901">-->
<!--                    <div class="u-container-layout u-container-layout-4"></div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!--    <section class="u-align-center u-clearfix u-container-align-center u-custom-color-1 u-section-2" id="carousel_3458">-->
<!--      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">-->
<!--        <h2 class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">We maximize added value for our clients</h2>-->
<!--        <div class="u-expanded-width u-list u-list-1">-->
<!--          <div class="u-repeater u-repeater-1">-->
<!--            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-1">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">-->
<!--                <div class="u-container-style u-group u-shape-rectangle u-group-1">-->
<!--                  <div class="u-container-layout">-->
<!--                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-1"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-1"><img src="{{ static_asset('assets/about/images/115968-1e054c51.png') }}" alt=""></span>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-2">Strategy</h4>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-2">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">-->
<!--                <div class="u-container-style u-group u-shape-rectangle u-group-2">-->
<!--                  <div class="u-container-layout">-->
<!--                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-2"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-2"><img src="{{ static_asset('assets/about/images/3720937-c9d9a8d0.png') }}" alt=""></span>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">Mission</h4>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-3">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">-->
<!--                <div class="u-container-style u-group u-shape-rectangle u-group-3">-->
<!--                  <div class="u-container-layout">-->
<!--                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-3"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-3"><img src="{{ static_asset('assets/about/images/2282272-813a7688.png') }}" alt=""></span>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">Development</h4>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-container-style u-list-item u-radius-10 u-repeater-item u-shape-round u-white u-list-item-4">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-7">-->
<!--                <div class="u-container-style u-group u-shape-rectangle u-group-4">-->
<!--                  <div class="u-container-layout">-->
<!--                    <div class="u-custom-color-1 u-opacity u-opacity-85 u-preserve-proportions u-shape u-shape-circle u-shape-4"></div><span class="u-file-icon u-icon u-text-palette-1-dark-2 u-icon-4"><img src="{{ static_asset('assets/about/images/171561-3a82e3fd.png') }}" alt=""></span>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <h4 class="u-align-center u-custom-font u-font-montserrat u-text u-text-8">Team</h4>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-grey-50 u-text-9">Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--        <a href="https://nicepage.com/c/medicine-science-html-templates" class="u-active-white u-align-center u-border-none u-btn u-btn-round u-button-style u-radius-50 u-text-active-palette-1-base u-text-body-color u-text-hover-palette-1-base u-white u-btn-1">Get started</a>-->
<!--      </div>-->
<!--    </section>-->
<!--    <section class="u-align-center u-clearfix u-section-3" id="sec-31cb">-->
<!--      <div class="u-clearfix u-sheet u-sheet-1">-->
<!--        <div class="u-expanded-width u-tabs u-tabs-1">-->
<!--          <ul class="u-border-1 u-border-grey-25 u-tab-list u-unstyled" role="tablist">-->
<!--            <li class="u-tab-item" role="presentation">-->
<!--              <a class="active u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Sell on Quivor</a>-->
<!--            </li>-->
<!--            <li class="u-tab-item" role="presentation">-->
<!--              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Buy on Quivor</a>-->
<!--            </li>-->
<!--            <li class="u-tab-item" role="presentation">-->
<!--              <a class="u-active-white u-border-2 u-border-active-grey-15 u-border-hover-grey-15 u-border-no-bottom u-button-style u-custom-font u-font-montserrat u-tab-link u-text-active-custom-color-1 u-text-hover-black u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Security Tips</a>-->
<!--            </li>-->
<!--          </ul>-->
<!--          <div class="u-tab-content">-->
<!--            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">-->
<!--              <div class="u-container-layout u-container-layout-1">-->
<!--                <img alt="" class="u-image u-image-default u-image-1" data-image-width="892" data-image-height="730" src="{{ static_asset('assets/about/images/undraw_Successful_purchase_re_mpig.png') }}">-->
<!--                <h4 class="u-custom-font u-font-montserrat u-text u-text-1">How to sell on <span class="u-text-custom-color-1" style="font-weight: 700;">Quivor</span>-->
<!--                </h4>-->
<!--                <p class="u-custom-font u-font-montserrat u-text u-text-2">Very easy procedure to get your products ready or sale<br>-->
<!--                </p>-->
<!--                <ul class="u-custom-font u-font-montserrat u-text u-text-3">-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Register your store as a&nbsp;<span style="font-weight: 700;">-->
<!--                      <span class="u-text-custom-color-1"> Seller<span style="font-weight: 400;">-->
<!--                          <span class="u-text-black"> with your email address.</span>-->
<!--                        </span>-->
<!--                      </span>-->
<!--                    </span>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Take a clear <span style="font-weight: 700;" class="u-text-custom-color-1">Photo</span> of your product<span style="font-weight: 700;" class="u-text-custom-color-1"></span>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div> Proceed to&nbsp; <span style="font-weight: 700;" class="u-text-custom-color-1">Add Product</span>&nbsp;​​and fill in the required details. e.g (Product title, description, and more)-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Hit the <span style="font-weight: 700;" class="u-text-custom-color-1">Upload</span> button to put your product on sale.&nbsp;-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Start receiving <span style="font-weight: 700;" class="u-text-custom-color-1">Orders</span> instantly.-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">-->
<!--              <div class="u-container-layout u-container-layout-2">-->
<!--                <img alt="" class="u-image u-image-default u-image-2" data-image-width="892" data-image-height="730" src="{{ static_asset('assets/about/images/undraw_Successful_purchase_re_mpig.png') }}">-->
<!--                <h4 class="u-custom-font u-font-montserrat u-text u-text-4">How to Buy on <span class="u-text-custom-color-1" style="font-weight: 700;">Quivor</span>-->
<!--                </h4>-->
<!--                <ul class="u-custom-font u-font-montserrat u-text u-text-5">-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div><b>-->
<!--                      <span style="color: rgb(164, 1, 143);">Register</span>-->
<!--                      <span style="font-weight: 400;">-->
<!--                        <span class="u-text-black"> an account with Quivor&nbsp; via your email</span>-->
<!--                      </span></b>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>-->
<!--                    <span style="font-weight: 700;" class="u-text-custom-color-1">Search </span>your desired item and view the details about the item if that's what suit you.-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Click on the&nbsp;<span style="font-weight: 700;">-->
<!--                      <span class="u-text-custom-color-1"> Buy Now&nbsp;<span style="font-weight: 400;">-->
<!--                          <span class="u-text-black"> button</span>-->
<!--                        </span>-->
<!--                      </span>-->
<!--                    </span>-->
<!--                    <span style="font-weight: 700;" class="u-text-custom-color-1"></span>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div> Fill up your <span style="font-weight: 700;" class="u-text-custom-color-1">Home address</span> and other information.-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>You get an <span style="font-weight: 700;" class="u-text-custom-color-1">Order Confirmation</span> mail when done.-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Your item will then be <span style="font-weight: 700;" class="u-text-custom-color-1">Delivered</span>&nbsp;and you leave a eedback about the seller.-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">-->
<!--              <div class="u-container-layout u-container-layout-3">-->
<!--                <ul class="u-custom-font u-font-montserrat u-text u-text-6">-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div><b>-->
<!--                      <span style="color: rgb(164, 1, 143);"></span>-->
<!--                      <span class="u-text-black">-->
<!--                        <span style="font-weight: 400;"> Do&nbsp;</span>-->
<!--                      </span>-->
<!--                      <span class="u-text-black" style="font-weight: 400;">Not</span>-->
<!--                      <span style="color: rgb(164, 1, 143);">&nbsp;</span>-->
<!--                      <span class="u-text-black">-->
<!--                        <span style="font-weight: 400;"> Pay In Advance to any Seller, Not even delivery.</span>-->
<!--                      </span></b>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>-->
<!--                    <span style="font-weight: 700;">-->
<!--                      <span class="u-text-black">-->
<!--                        <span style="font-weight: 400;"> Try to verify the Item and Seller before paying.</span>-->
<!--                      </span>-->
<!--                    </span>-->
<!--                    <br>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Pay ONLY&nbsp; after recieving the Item.<span style="font-weight: 700;" class="u-text-custom-color-1"></span>-->
<!--                  </li>-->
<!--                  <li>-->
<!--                    <div class="class u-list-icon"></div>Stay Safe!-->
<!--                  </li>-->
<!--                </ul>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!--    <section class="u-align-center u-clearfix u-section-4" id="sec-f595">-->
<!--      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">-->
<!--        <div class="u-expanded-width u-list u-list-1">-->
<!--          <div class="u-repeater u-repeater-1">-->
<!--            <div class="u-container-style u-list-item u-repeater-item">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="{{ static_asset('assets/about/images/388531-0724b8fe.png') }}" alt=""></span>-->
<!--                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-1">Secured</h3>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-2"> We are highly focused on the security and can solve any issues in short-terms. That’s why we ask you, kindly, to leave a review after purchasing.&nbsp;</p>-->
<!--                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-1">learn more</a>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-align-center u-container-style u-list-item u-repeater-item">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-2"><img src="{{ static_asset('assets/about/images/8922295-3a50380c.png') }}" alt=""></span>-->
<!--                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-3">Quality</h3>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-4">We make sure we get reliable sellers to deliver to you the best quality.</p>-->
<!--                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2">learn more</a>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="u-container-style u-list-item u-repeater-item">-->
<!--              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-file-icon u-icon u-text-custom-color-1 u-icon-3"><img src="{{ static_asset('assets/about/images/1067566-68e5fc05.png') }}" alt=""></span>-->
<!--                <h3 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-5">Support</h3>-->
<!--                <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>-->
<!--                <a href="" class="u-active-none u-border-2 u-border-custom-color-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-3">learn more</a>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!--</body>-->