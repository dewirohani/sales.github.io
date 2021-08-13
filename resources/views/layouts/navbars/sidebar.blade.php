<div class="sidebar" data-color="black">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      {{ __('PT. GARAM CANVASING SALES') }}
    </a>
    <!-- <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      {{ __('CANVASING SALES') }}
    </a> -->
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li>
        <a data-toggle="collapse" href="#laravelExamples">
            <i class="now-ui-icons users_single-02"></i>
          <p>
            {{ __("USER") }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExamples">
          <ul class="nav">
            <li class="@if ($activePage == 'profile') active @endif">
              <a href="{{ route('profile.edit') }}">
                <i class="now-ui-icons users_single-02"></i>
                <p> {{ __("User Profile") }} </p>
              </a>
            </li>
            <li class="@if ($activePage == 'users') active @endif">
              <a href="{{ route('user.index') }}">
                <i class="now-ui-icons design_bullet-list-67"></i>
                <p> {{ __("User Management") }} </p>
              </a>
            </li>
          </ul>
        </div>
      <!-- <li class="@if ($activePage == 'icons') active @endif">
        <a href="{{ route('page.index','icons') }}">
          <i class="now-ui-icons education_atom"></i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li> -->
      <li class="@if ($activePage == 'penjadwalan') active @endif">
        <a href="{{ route('calendar.index') }}">
          <i class="now-ui-icons ui-1_calendar-60"></i>
          <p>{{ __('Penjadwalan') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'maps') active @endif">
      <a href="{{ route('absensi') }}">
          <i class="now-ui-icons files_paper"></i>
          <p>{{ __('Absensi') }}</p>
        </a>
      </li>
     <li class = " @if ($activePage == 'create') active @endif">
        <a href="{{ route('penjualan.index','create') }}">
          <i class="now-ui-icons shopping_shop"></i>
          <p>{{ __('Penjualan') }}</p>
        </a>
      </li>
     <!-- <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class = "@if ($activePage == 'typography') active @endif">
        <a href="{{ route('page.index','typography') }}">
          <i class="now-ui-icons text_caps-small"></i>
          <p>{{ __('Typography') }}</p>
        </a>
      </li> -->
      <!-- <li class = "">
        <a href="{{ route('page.index','upgrade') }}" class="bg-info">
          <i class="now-ui-icons arrows-1_cloud-download-93"></i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li> -->
    </ul>
  </div>
</div>
