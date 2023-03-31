<!-- Page Sidebar Start-->
<header class="main-nav">
  <div class="sidebar-user text-center">
    {{-- <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a> --}}
    <img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
    <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
      <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6></a>
    {{-- <p class="mb-0 font-roboto">Human Resources Department</p> --}}
    {{-- <ul>
      <li><span><span class="counter">19.8</span>k</span>
        <p>Follow</p>
      </li>
      <li><span>2 year</span>
        <p>Experince</p>
      </li>
      <li><span><span class="counter">95.2</span>k</span>
        <p>Follower </p>
      </li>
    </ul> --}}
  </div>
  <nav>
    <div class="main-navbar">
      <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
      <div id="mainnav">           
        <ul class="nav-menu custom-scrollbar">
          <li class="back-btn">
            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
          </li>
          <li class="sidebar-main-title">
            <div>
              <h6>Main Menu</h6>
            </div>
          </li>
          <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Menu</span></a>
            <div class="mega-menu-container menu-content">
              <div class="container">
                <div class="row">
                  <div class="col mega-box">
                    <div class="link-section">
                      <div class="submenu-title">
                        <h5>Sub Menu</h5>
                      </div>
                      <div class="submenu-content opensubmegamenu">
                        <ul>
                          <li><a href="#">Child Sub Menu 1</a></li>
                          <li><a href="#">Child Sub Menu 2</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </div>
  </nav>
</header>
<!-- Page Sidebar Ends-->