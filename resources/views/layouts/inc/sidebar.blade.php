<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo"><a href="#" class="simple-text logo-normal">
          Blood Bank
        </a></div>
    <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3c54fd2f-3023-0b24-0385-50c3fa0988de">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{url('dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- مستخدمين --}}
            <li class="nav-item {{ Request::is('Donors') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('Donors') }}">
                    <i class="material-icons">person</i>
                    <p>Donors</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('types') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('types') }}">
                    <i class="material-icons">account_balance</i>
                    <p>Types</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('profiles') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('profiles') }}">
                    <i class="material-icons">Article</i>
                    <p>profiles</p>
                </a>
            </li>
            {{-- <li class="nav-item {{ Request::is('add-category') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('add-donor') }}">
                    <i class="material-icons">person</i>
                    <p>Add Donor</p>
                </a>
            </li> --}}
            {{-- <li class="nav-item {{ Request::is('') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('') }}">
                    <i class="material-icons">person</i>
                    <p></p>
                </a>
            </li> --}}
            {{-- <li class="nav-item {{ Request::is('') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('') }}">
                    <i class="material-icons">person</i>
                    <p>Search</p>
                </a>
            </li> --}}
            {{-- <li class="nav-item {{ Request::is('add-products') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ url('add-products') }}">
                    <i class="material-icons">person</i>
                    <p></p>
                </a>
            </li> --}}
        </ul>
        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;">
            <div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps-scrollbar-y-rail" style="top: 0px; height: 271px; right: 0px;">
            <div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>
    <div class="sidebar-background" style="background-image: url(../assets/img/sidebar-1.jpg) "></div>
</div>
