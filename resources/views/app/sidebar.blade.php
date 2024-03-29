<aside class="main-sidebar elevation-4 sidebar-dark-success">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
    <span class="brand-text font-weight-light">FiTech</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition">
    <div class="os-resize-observer-host observed">
      <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
    </div>
    <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
      <div class="os-resize-observer"></div>
    </div>
    <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 879px;"></div>
    <div class="os-padding">
      <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
        <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <!--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
            </div>
            <div class="info">
              <a href="#" class="d-block">Fernando Higino</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @php $config = Config::get('layout.menu'); @endphp

            @foreach($config as $vec)
              
              @if(!empty($vec['submenu']))
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="{{ $vec['icon'] }}"></i>
                    <p>
                      {{ $vec['text'] }}
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                @foreach($vec['submenu'] as $subMenu)
                  
                
                  <li class="nav-item">
                    <a href="{{ $subMenu['url'] }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>{{ $subMenu['text'] }}</p>
                    </a>
                  </li>

                @endforeach
                  </ul>
                </li>
              @else
              <li class="nav-item">
                <a href="$vec['url']" class="nav-link">
                  <i class="{{ $vec['icon'] }}"></i>
                  <p>
                    {{ $vec['text'] }}
                  </p>
                </a>
              </li>
              @endif

          
            @endforeach
            </ul>
          </nav>

          
          <!-- /.sidebar-menu -->
        </div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
      <div class="os-scrollbar-track">
        <div class="os-scrollbar-handle" style="height: 64.7535%; transform: translate(0px, 0px);"></div>
      </div>
    </div>
    <div class="os-scrollbar-corner"></div>
  </div>
  <!-- /.sidebar -->
</aside>