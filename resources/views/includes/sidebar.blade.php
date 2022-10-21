<nav id="mainnav-container">
    <div id="mainnav">

        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano has-scrollbar">
                <div class="nano-content" tabindex="0" style="right: -15px;">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap">
                            <div class="pad-btm">
                                <span class="label label-success pull-right">New</span>
                                <img class="img-circle img-sm img-border"
                                    src="{{ Vite::asset('resources/img/profile-photos/1.png') }}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{ Auth::user()->name }}</p>
                                <span class="mnp-desc">{{ Auth::user()->email }}</span>
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i> View Profile
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-gear icon-lg icon-fw"></i> Settings
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="demo-pli-information icon-lg icon-fw"></i> Help
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-nav-link :href="route('logout')" class="list-group-item"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="demo-pli-unlock icon-lg icon-fw"></i> {{ __('Log Out') }}
                                </x-nav-link>
                            </form>
                        </div>
                    </div>


                    <!--Shortcut buttons-->
                    <!--================================-->
                    <div id="mainnav-shortcut">
                        <ul class="list-unstyled">
                            <li class="col-xs-3" data-content="My Profile" data-original-title="" title="">
                                <a class="shortcut-grid" href="{{ route('profile.index') }}">
                                    <i class="demo-psi-male"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Messages" data-original-title="" title="">
                                <a class="shortcut-grid" href="{{ route('chat.index') }}">
                                    <i class="demo-psi-speech-bubble-3"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Activity" data-original-title="" title="">
                                <a class="shortcut-grid" href="#">
                                    <i class="demo-psi-thunder"></i>
                                </a>
                            </li>
                            <li class="col-xs-3" data-content="Lock Screen" data-original-title="" title="">
                                <a class="shortcut-grid" href="{{ route('login.locked') }}">
                                    <i class="demo-psi-lock-2"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">

                        <!--Category name-->
                        <li class="list-header">Navigation</li>

                        <!--Menu list item-->
                        <li class="{{ request()->is('dashboard*') ? 'active-link' : '' }}">
                            <a href="{{ route('dashboard') }}">
                                <i class="fa-solid fa-gauge"></i>
                                <span class="menu-title">
                                    <strong>Dashboard</strong>
                                </span>
                            </a>
                        </li>
                        @can('permissions.list')
                        <li class="{{ request()->is('permissions*') ? 'active-link' : '' }}">
                            <a href="{{ url('permissions') }}">
                                <i class="fa-solid fa-person-circle-exclamation"></i>
                                <span class="menu-title">
                                    <strong>Permissions</strong>
                                </span>
                            </a>
                        </li>
                        @endcan
                        @can('roles.list')
                            <li class="{{ request()->is('roles*') ? 'active-link' : '' }}">
                                <a href="{{ url('roles') }}">
                                    <i class="fa-solid fa-person-circle-exclamation"></i>
                                    <span class="menu-title">
                                        <strong>Roles</strong>
                                    </span>
                                </a>
                            </li>
                        @endcan
                        @can('users.list')
                        <li class="{{ request()->is('users*') ? 'active-link' : '' }}">
                            <a href="{{ url('users') }}">
                                <i class="fa-solid fa-users-gear"></i>
                                <span class="menu-title">
                                    <strong>Users</strong>
                                </span>
                            </a>
                        </li>
                        @endcan
                        @can('chat')
                            <li class="{{ request()->is('chat*') ? 'active-link' : '' }}">
                                <a href="{{ url('chat') }}">
                                    <i class="fa-solid fa-message"></i>
                                    <span class="menu-title">
                                        <strong>Chat</strong>
                                    </span>
                                </a>
                            </li>
                        @endcan

                        @can('commands')
                            <li class="{{ request()->is('commands*') ? 'active-link' : '' }}">
                                <a href="{{ url('commands') }}">
                                    <i class="fa-solid fa-universal-access"></i>
                                    <span class="menu-title">
                                        <strong>Commands</strong>
                                    </span>
                                </a>
                            </li>
                        @endcan


                        <li class="{{ request()->is('products*') ? 'active-link' : '' }}">
                            <a href="{{ url('products') }}">
                                <i class="fa-solid fa-layer-group"></i>
                                <span class="menu-title">
                                    <strong>Products</strong>
                                </span>
                            </a>
                        </li>

                        <li class="{{ request()->is('schedule*') ? 'active-link' : '' }}">
                            <a href="{{ url('schedule') }}">
                                <i class="fa-solid fa-calendar"></i>
                                <span class="menu-title">
                                    <strong>Job Schedule</strong>
                                </span>
                            </a>
                        </li>

                        <li class="{{ request()->is('dropzone*') ? 'active-link' : '' }}">
                            <a href="{{ url('dropzone') }}">
                                <i class="fa-solid fa-file-upload"></i>
                                <span class="menu-title">
                                    <strong>File Upload</strong>
                                </span>
                            </a>
                        </li>

                        <!--Menu list item-->
                        <li class="{{ request()->is('friends*') ? 'active-link active' : '' }}">
                            <a href="#">
                                <i class="fa-solid fa-users"></i>
                                <span class="menu-title">
                                    <strong>Friends</strong>
                                </span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse {{ request()->is('friends*') ? 'in' : '' }}" aria-expanded="false">
                                <li><a href="{{ route('friends.index') }}">Friend List</a></li>
                            </ul>
                        </li>


                    </ul>
                </div>
            </div>
            <!--================================-->
            <!--End widget-->

        </div>
        <div class="nano-pane" style="display: none;">
            <div class="nano-slider" style="height: 1510px; transform: translate(0px, 0px);"></div>
        </div>
    </div>
</nav>
