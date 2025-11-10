<?php
$page = basename($_SERVER['PHP_SELF']);
echo
    '
<body class="rs-smoother-yes">

    <!-- preloader start -->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="./assets/images/logo/favicon-apple.jpeg" alt=""></div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- preloader start -->
    <div id="rs-mouse">
        <div id="cursor-ball"></div>
    </div>
    <!-- preloader end -->

    <!-- Header area start -->
    <header>
        <div class="rs-header-area rs-header-one" id="header-sticky">
            <div class="container-fluid g-0">
                <div class="rs-header-inner">
                    <div class="rs-header-left">
                        <div class="rs-header-logo-wrapper">
                            <div class="rs-header-logo">
                                <a href="home"><img src="assets/images/logo/apple-cera-wool-or-blu.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="rs-header-menu">
                        
                        <nav id="mobile-menu" class="main-menu">
                            <ul class="multipage-menu">
                                <li><a href="home">home</a></li>
                                <!-- about menu -->
                                <li><a href="about-us">About us</a></li>
                                
                                <!-- elements menu -->
                                <li class="has-mega-menu menu-item-has-children">
                                    <a href="products">Products</a>
                                    <ul class="mega-menu mega-grid">
                                        <li>
                                            <a href="products/ceramin-fiber" class="title">Ceramic Fiber</a>
                                            <ul>
                                                <li><a href="products/ceramic-fiber-blanket">Ceramic Fiber Blanket</a></li>
                                                <li><a href="products/ceramic-boards">Ceramic Boards</a></li>
                                                <li><a href="products/ceramic-bulk-fiber">Ceramic Bulk Fiber</a></li>
                                                <li><a href="products/ceramic-microporous-insulation">Ceramic Microporous Insulation</a></li>
                                                <li><a href="products/ceramic-modules">Ceramic Modules</a></li>
                                                <li><a href="products/ceramic-papers-felts">Ceramic Papers & Felts</a></li>
                                                <li><a href="products/ceramic-textiles">Ceramic Textiles</a></li>
                                            </ul>
                                        </li>
                                         <li>
                                            <!-- <a href="products/ceramin-fiber" class="title">Ceramic Fiber</a> -->
                                            <ul>
                                                <!-- <li><a href="mixes-coatings.html">Mixes & Coatings</a></li> -->
                                                <li><a href="products/hard-refractory-brick">Hard Refractory & Brick</a></li>
                                                <li><a href="products/specialty-miscellaneous">Specialty & Miscellaneous</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <!-- page menu -->
                                <li>
                                    <a href="industries">Industries </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="services">Services </a>
                                    <ul class="submenu last-children">
                                        <li>
                                            <a href="services/custom-gaskets">Custom Gaskets</a>
                                        </li>
                                        <li>
                                            <a href="services/furnace-doors">Furnace Doors</a>
                                        </li>
                                        <li>
                                            <a href="services/vacuum-formed-shapes">Vacuum-Formed Shapes</a>
                                        </li>
                                        <!-- <li>
                                            <a href="services/machined-parts">Machined Parts</a>
                                        </li> -->
                                        <li>
                                            <a href="services/coatings">Coatings</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="project-management">Project Management</a></li>
                                
                                 <!-- <li><a href="blog">Blog</a></li> -->
                            </ul>
                        </nav>
                    </div>
                    <div class="rs-header-right">
                        <!-- Phone chip -->
                      <div class="download phone">
                         <a href="contact">
                        <!-- Phone SVG -->
                            <i class="fas fa-phone"></i>
                       </a>
                      </div>

                       <div class="download">
                       <!-- Download Icon -->
<a href="#" id="openModal">
   <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_133_755" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
                                <rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
                                </mask>
                                <g mask="url(#mask0_133_755)">
                                <path d="M12.5 19.55C12.3167 19.55 12.1375 19.525 11.9625 19.475C11.7875 19.425 11.625 19.3583 11.475 19.275C10.7917 18.8583 10.075 18.5417 9.325 18.325C8.575 18.1083 7.8 18 7 18C6.3 18 5.6125 18.0917 4.9375 18.275C4.2625 18.4583 3.61667 18.7167 3 19.05C2.65 19.2333 2.3125 19.225 1.9875 19.025C1.6625 18.825 1.5 18.5333 1.5 18.15V6.09999C1.5 5.91665 1.54583 5.74165 1.6375 5.57499C1.72917 5.40832 1.86667 5.28332 2.05 5.19999C2.81667 4.79999 3.61667 4.49999 4.45 4.29999C5.28333 4.09999 6.13333 3.99999 7 3.99999C7.96667 3.99999 8.9125 4.12499 9.8375 4.37499C10.7625 4.62499 11.65 4.99999 12.5 5.49999V17.6C13.35 17.0667 14.2417 16.6667 15.175 16.4C16.1083 16.1333 17.05 16 18 16C18.6 16 19.1875 16.05 19.7625 16.15C20.3375 16.25 20.9167 16.4 21.5 16.6V4.59999C21.75 4.68332 21.9958 4.77082 22.2375 4.86249C22.4792 4.95415 22.7167 5.06665 22.95 5.19999C23.1333 5.28332 23.2708 5.40832 23.3625 5.57499C23.4542 5.74165 23.5 5.91665 23.5 6.09999V18.15C23.5 18.5333 23.3375 18.825 23.0125 19.025C22.6875 19.225 22.35 19.2333 22 19.05C21.3833 18.7167 20.7375 18.4583 20.0625 18.275C19.3875 18.0917 18.7 18 18 18C17.2 18 16.425 18.1083 15.675 18.325C14.925 18.5417 14.2083 18.8583 13.525 19.275C13.375 19.3583 13.2125 19.425 13.0375 19.475C12.8625 19.525 12.6833 19.55 12.5 19.55ZM15.325 14.25C15.1583 14.4 14.9792 14.4292 14.7875 14.3375C14.5958 14.2458 14.5 14.0917 14.5 13.875V5.69999C14.5 5.63332 14.5125 5.57082 14.5375 5.51249C14.5625 5.45415 14.6 5.39999 14.65 5.34999L18.65 1.34999C18.8167 1.18332 19 1.14165 19.2 1.22499C19.4 1.30832 19.5 1.46665 19.5 1.69999V10.275C19.5 10.3583 19.4833 10.4292 19.45 10.4875C19.4167 10.5458 19.375 10.6 19.325 10.65L15.325 14.25ZM10.5 16.625V6.72499C9.95 6.49165 9.37917 6.31249 8.7875 6.18749C8.19583 6.06249 7.6 5.99999 7 5.99999C6.38333 5.99999 5.78333 6.05832 5.2 6.17499C4.61667 6.29165 4.05 6.46665 3.5 6.69999V16.625C4.08333 16.4083 4.6625 16.25 5.2375 16.15C5.8125 16.05 6.4 16 7 16C7.6 16 8.1875 16.05 8.7625 16.15C9.3375 16.25 9.91667 16.4083 10.5 16.625Z" fill="#4D4D4D"/>
                                </g>
                                </svg>
</a>

  <!-- Modal Structure -->
  <div id="catalogModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Product Inquiry</h2>

      <label>Contact Number:</label>
      <input
        type="text"
        id="userNumber"
        placeholder="Enter your number"
        maxlength="10"
      />

      <button id="sendBtn">Send Inquiry</button>
      <p id="successMsg">Message sent successfully! Your catalog has been downloaded.</p>
    </div>
  </div>

                        
                       </div>
                        <div class="rs-header-btn">
                            <a class="rs-btn has-theme-orange has-icon has-bg" href="contact">Contact
                                <span class="icon-box">
                                <svg class="icon-first" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                                <svg class="icon-second" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path
                                        d="M31.71,15.29l-10-10L20.29,6.71,28.59,15H0v2H28.59l-8.29,8.29,1.41,1.41,10-10A1,1,0,0,0,31.71,15.29Z">
                                    </path>
                                </svg>
                            </span>
                            </a>
                        </div>
                        <div class="rs-header-hamburger">
                            <div class="sidebar-toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                        <path d="M8.55566 11H1.55566C1.29045 11 1.03609 11.1054 0.848557 11.2929C0.661021 11.4804 0.555664 11.7348 0.555664 12V19C0.555664 19.2652 0.661021 19.5196 0.848557 19.7071C1.03609 19.8946 1.29045 20 1.55566 20H8.55566C8.82088 20 9.07523 19.8946 9.26277 19.7071C9.45031 19.5196 9.55566 19.2652 9.55566 19V12C9.55566 11.7348 9.45031 11.4804 9.26277 11.2929C9.07523 11.1054 8.82088 11 8.55566 11ZM7.55566 18H2.55566V13H7.55566V18ZM19.5557 0H12.5557C12.2904 0 12.0361 0.105357 11.8486 0.292893C11.661 0.48043 11.5557 0.734784 11.5557 1V8C11.5557 8.26522 11.661 8.51957 11.8486 8.70711C12.0361 8.89464 12.2904 9 12.5557 9H19.5557C19.8209 9 20.0752 8.89464 20.2628 8.70711C20.4503 8.51957 20.5557 8.26522 20.5557 8V1C20.5557 0.734784 20.4503 0.48043 20.2628 0.292893C20.0752 0.105357 19.8209 0 19.5557 0ZM18.5557 7H13.5557V2H18.5557V7ZM19.5557 11H12.5557C12.2904 11 12.0361 11.1054 11.8486 11.2929C11.661 11.4804 11.5557 11.7348 11.5557 12V19C11.5557 19.2652 11.661 19.5196 11.8486 19.7071C12.0361 19.8946 12.2904 20 12.5557 20H19.5557C19.8209 20 20.0752 19.8946 20.2628 19.7071C20.4503 19.5196 20.5557 19.2652 20.5557 19V12C20.5557 11.7348 20.4503 11.4804 20.2628 11.2929C20.0752 11.1054 19.8209 11 19.5557 11ZM18.5557 18H13.5557V13H18.5557V18ZM8.55566 0H1.55566C1.29045 0 1.03609 0.105357 0.848557 0.292893C0.661021 0.48043 0.555664 0.734784 0.555664 1V8C0.555664 8.26522 0.661021 8.51957 0.848557 8.70711C1.03609 8.89464 1.29045 9 1.55566 9H8.55566C8.82088 9 9.07523 8.89464 9.26277 8.70711C9.45031 8.51957 9.55566 8.26522 9.55566 8V1C9.55566 0.734784 9.45031 0.48043 9.26277 0.292893C9.07523 0.105357 8.82088 0 8.55566 0ZM7.55566 7H2.55566V2H7.55566V7Z" fill="#616161"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end -->

'

                                                  ?>
