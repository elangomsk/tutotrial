<body class=" menu-affix ">
  <div class="bg-dark dk" id="wrap">
    <div id="top">
      <!-- .navbar -->
      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <header class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="<?php echo base_url('assets/img/logo.png');?>" alt=""></a>
          </header>

          <div class="topnav">
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                class="btn btn-default btn-sm" id="toggleFullScreen">
                <i class="glyphicon glyphicon-fullscreen"></i>
              </a>
            </div>
            <div class="btn-group">
              <a data-placement="bottom" data-original-title="E-mail" data-toggle="tooltip"
                class="btn btn-default btn-sm" href="<?php //echo admin_redirect('logout'); ?>">
                <i class="fa fa-envelope"></i>
                <span class="label label-warning">5</span>
              </a>
              <a data-placement="bottom" data-original-title="Messages" href="#" data-toggle="tooltip"
                class="btn btn-default btn-sm">
                <i class="fa fa-comments"></i>
                <span class="label label-danger">4</span>
              </a>
              <!-- <a data-toggle="modal" data-original-title="Help" data-placement="bottom"
                class="btn btn-default btn-sm"
                href="#helpModal">
                <i class="fa fa-question"></i>
              </a> -->
            </div>
            <div class="btn-group">
              <a href="<?php //echo admin_redirect('logout'); ?>" data-toggle="tooltip"  class="btn btn-metis-1 btn-sm">
                <i class="fa fa-power-off"></i>
              </a>
            </div>
           <!--  <div class="btn-group">
              <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                <i class="fa fa-bars"></i>
              </a>
              <a href="#right" data-toggle="onoffcanvas" class="btn btn-default btn-sm" aria-expanded="false">
                <span class="fa fa-fw fa-comment"></span>
              </a>
            </div> -->
          </div>

          <div class="collapse navbar-collapse navbar-ex1-collapse">
            
            <!-- .nav -->
            <ul class="nav navbar-nav">
              <li class="active"><a href="dashboard.html">Dashboard</a></li>
              <!-- <li><a href="table.html">Tables</a></li>
              <li class='dropdown '>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Form Elements <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="form-general.html">General</a></li>
                  <li><a href="form-validation.html">Validation</a></li>
                  <li><a href="form-wysiwyg.html">WYSIWYG</a></li>
                  <li><a href="form-wizard.html">Wizard &amp; File Upload</a></li>
                </ul>
              </li> -->
            </ul>
            <!-- /.nav -->
          </div>
        </div>
        <!-- /.container-fluid -->
      </nav>
      <!-- /.navbar -->
      <header class="head">
        <div class="search-bar">
          <!-- <form class="main-search" action="">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Live Search ...">
              <span class="input-group-btn">
                <button class="btn btn-primary btn-sm text-muted" type="button">
                <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form> -->
        </div>
          <!-- /.main-search -->                                
          <!-- /.search-bar -->
          <!-- <div class="main-bar">
            <h3>
            <i class="fa fa-dashboard"></i>&nbsp;
            Dashboard
            </h3>
          </div> -->
          <!-- /.main-bar -->
      </header>
        <!-- /.head -->
    </div>
      <!-- /#top -->
    <div id="left">
      <div class="media user-media bg-dark dker">
        <div class="user-media-toggleHover">
          <span class="fa fa-user"></span>
        </div>
        <div class="user-wrapper bg-dark">
          <a class="user-link" href="">
            <img class="media-object img-thumbnail user-img" alt="User Picture" src="<?php echo base_url('assets/img/user.gif');?>">
            <span class="label label-danger user-label">16</span>
          </a>
          
          <div class="media-body">
            <h5 class="media-heading">Archie</h5>
            <ul class="list-unstyled user-info">
              <li><a href="<?php echo admin_url('site_settings');?>">Site settings</a></li>
              <li>Last Access : <br>
                <small><i class="fa fa-calendar"></i>&nbsp;<?php 
                $logged_at =$this->session->userdata('logged_at');
                 echo date('d M h:i', strtotime($logged_at)); ?></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- #menu -->
      <ul id="menu" class="bg-dark dker" style="background-color: transparent !important;">
        <li class="nav-header">Menu</li>
        <li class="nav-divider"></li>
        <li class="active">
          <a href="dashboard">
            <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-building "></i>
            <span class="link-title">Layouts</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="boxed.html">
              <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout </a>
            </li>
            <li>
              <a href="fixed-header-boxed.html">
              <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Header </a>
            </li>
            <li>
              <a href="fixed-header-fixed-mini-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed Header and Fixed Mini Menu </a>
            </li>
            <li>
              <a href="fixed-header-menu.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Menu </a>
            </li>
            <li>
              <a href="fixed-header-mini-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed Header &amp; Mini Menu </a>
            </li>
            <li>
              <a href="fixed-header.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed Header </a>
            </li>
            <li>
              <a href="fixed-menu-boxed.html">
              <i class="fa fa-angle-right"></i>&nbsp; Boxed Layout &amp; Fixed Menu </a>
            </li>
            <li>
              <a href="fixed-menu.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed Menu </a>
            </li>
            <li>
              <a href="fixed-mini-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; Fixed &amp; Mini Menu </a>
            </li>
            <li>
              <a href="fxhmoxed.html">
              <i class="fa fa-angle-right"></i>&nbsp; Boxed and Fixed Header &amp; Nav </a>
            </li>
            <li>
              <a href="no-header-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Header &amp; Sidebars </a>
            </li>
            <li>
              <a href="no-header.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Header </a>
            </li>
            <li>
              <a href="no-left-right-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Left &amp; Right Sidebar </a>
            </li>
            <li>
              <a href="no-left-sidebar-main-search.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar &amp; Main Search </a>
            </li>
            <li>
              <a href="no-left-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Left Sidebar </a>
            </li>
            <li>
              <a href="no-main-search.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Main Search </a>
            </li>
            <li>
              <a href="no-right-sidebar.html">
              <i class="fa fa-angle-right"></i>&nbsp; No Right Sidebar </a>
            </li>
            <li>
              <a href="sm.html">
              <i class="fa fa-angle-right"></i>&nbsp; Mini Sidebar </a>
            </li>
          </ul>
        </li>
        <!-- <li class="">
          <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span class="link-title">Components</span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="bgcolor.html">
              <i class="fa fa-angle-right"></i>&nbsp; Bg Color </a>
            </li>
            <li>
              <a href="bgimage.html">
              <i class="fa fa-angle-right"></i>&nbsp; Bg Image </a>
            </li>
            <li>
              <a href="button.html">
              <i class="fa fa-angle-right"></i>&nbsp; Buttons </a>
            </li>
            <li>
              <a href="icon.html">
              <i class="fa fa-angle-right"></i>&nbsp; Icon </a>
            </li>
            <li>
              <a href="pricing.html">
              <i class="fa fa-angle-right"></i>&nbsp; Pricing Table </a>
            </li>
            <li>
              <a href="progress.html">
              <i class="fa fa-angle-right"></i>&nbsp; Progress </a>
            </li>
          </ul>
        </li>
        <li class="">
          <a href="javascript:;">
            <i class="fa fa-pencil"></i>
            <span class="link-title">
              Forms
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="form-general.html">
              <i class="fa fa-angle-right"></i>&nbsp; Form General </a>
            </li>
            <li>
              <a href="form-validation.html">
              <i class="fa fa-angle-right"></i>&nbsp; Form Validation </a>
            </li>
            <li>
              <a href="form-wizard.html">
              <i class="fa fa-angle-right"></i>&nbsp; Form Wizard </a>
            </li>
            <li>
              <a href="form-wysiwyg.html">
              <i class="fa fa-angle-right"></i>&nbsp; Form WYSIWYG </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="table.html">
            <i class="fa fa-table"></i>
            <span class="link-title">Tables</span>
          </a>
        </li>
        <li>
          <a href="typography.html">
            <i class="fa fa-font"></i>
            <span class="link-title">
              Typography
            </span>  
          </a>
        </li>
        <li>
          <a href="maps.html">
            <i class="fa fa-map-marker"></i><span class="link-title">
              Maps
            </span>
          </a>
        </li>
        <li>
          <a href="chart.html">
            <i class="fa fa fa-bar-chart-o"></i>
            <span class="link-title">
              Charts
            </span>
          </a>
        </li>
        <li>
          <a href="calendar.html">
            <i class="fa fa-calendar"></i>
            <span class="link-title">
              Calendar
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-exclamation-triangle"></i>
            <span class="link-title">
              Error Pages
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="403.html">
              <i class="fa fa-angle-right"></i>&nbsp;403</a>
            </li>
            <li>
              <a href="404.html">
              <i class="fa fa-angle-right"></i>&nbsp;404</a>
            </li>
            <li>
              <a href="405.html">
              <i class="fa fa-angle-right"></i>&nbsp;405</a>
            </li>
            <li>
              <a href="500.html">
              <i class="fa fa-angle-right"></i>&nbsp;500</a>
            </li>
            <li>
              <a href="503.html">
              <i class="fa fa-angle-right"></i>&nbsp;503</a>
            </li>
            <li>
              <a href="offline.html">
              <i class="fa fa-angle-right"></i>&nbsp;offline</a>
            </li>
            <li>
              <a href="countdown.html">
              <i class="fa fa-angle-right"></i>&nbsp;Under Construction</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="grid.html">
            <i class="fa fa-columns"></i>
            <span class="link-title">
              Grid
            </span>
          </a>
        </li>
        <li>
          <a href="blank.html">
            <i class="fa fa-square-o"></i>
            <span class="link-title">
              Blank Page
            </span>
          </a>
        </li>
        <li class="nav-divider"></li>
        <li>
          <a href="login.html">
            <i class="fa fa-sign-in"></i>
            <span class="link-title">
              Login Page
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-code"></i>
            <span class="link-title">
              Unlimited Level Menu
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li>
                  <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                  <ul class="collapse">
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li>
                      <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                      <ul class="collapse">
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li>
                          <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                          <ul class="collapse">
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="javascript:;">Level 4</a>  </li>
                  </ul>
                </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
            <li> <a href="javascript:;">Level 1</a>  </li>
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-divider"></li>
        <li>
          <a href="login.html">
            <i class="fa fa-sign-in"></i>
            <span class="link-title">
              Login Page
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-code"></i>
            <span class="link-title">
              Unlimited Level Menu
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li>
                  <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                  <ul class="collapse">
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li>
                      <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                      <ul class="collapse">
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li>
                          <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                          <ul class="collapse">
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="javascript:;">Level 4</a>  </li>
                  </ul>
                </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
            <li> <a href="javascript:;">Level 1</a>  </li>
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-divider"></li>
        <li>
          <a href="login.html">
            <i class="fa fa-sign-in"></i>
            <span class="link-title">
              Login Page
            </span>
          </a>
        </li>
        <li>
          <a href="javascript:;">
            <i class="fa fa-code"></i>
            <span class="link-title">
              Unlimited Level Menu
            </span>
            <span class="fa arrow"></span>
          </a>
          <ul class="collapse">
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li>
                  <a href="javascript:;">Level 2  <span class="fa arrow"></span>  </a>
                  <ul class="collapse">
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li> <a href="javascript:;">Level 3</a>  </li>
                    <li>
                      <a href="javascript:;">Level 3  <span class="fa arrow"></span>  </a>
                      <ul class="collapse">
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li> <a href="javascript:;">Level 4</a>  </li>
                        <li>
                          <a href="javascript:;">Level 4  <span class="fa arrow"></span>  </a>
                          <ul class="collapse">
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                            <li> <a href="javascript:;">Level 5</a>  </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href="javascript:;">Level 4</a>  </li>
                  </ul>
                </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
            <li> <a href="javascript:;">Level 1</a>  </li>
            <li>
              <a href="javascript:;">Level 1  <span class="fa arrow"></span>  </a>
              <ul class="collapse">
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
                <li> <a href="javascript:;">Level 2</a>  </li>
              </ul>
            </li>
          </ul>
        </li> -->
      </ul>
        <!-- /#menu -->
    </div>