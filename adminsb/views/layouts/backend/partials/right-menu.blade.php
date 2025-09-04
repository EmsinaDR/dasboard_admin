<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name ?? 'Dany Rosepta' }}
            </div>
            <div class="email">{{ Auth::user()->email ?? 'fake@mail.com' }}</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a>
                    </li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MENU</li>
            <li class="active">
                <a href="#">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            {{-- <li>
                <a href="pages/typography.html">
                    <i class="material-icons">text_fields</i>
                    <span>Typography</span>
                </a>
            </li>
            <li>
                <a href="pages/helper-classes.html">
                    <i class="material-icons">layers</i>
                    <span>Helper Classes</span>
                </a>
            </li> --}}
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">person</i>
                    <span>User</span>
                </a>

                <ul class="ml-menu">
                    <li>
                        <a href="#"><span>Admin</span></a>
                    </li>
                    <li>
                        <a href="#"><span>Pelanggan</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-symbols-outlined text-primary">data_table</i>
                    <span>Paket</span>
                </a>
                <ul class="ml-menu">

                    <li>
                        <a href="#">
                            <i class="material-symbols-outlined text-primary">bring_your_own_ip</i>
                            <span>Data</span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Member</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Setup</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-symbols-outlined text-success">wallet</i>
                    <span>Pembayaran</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="#">
                            <i class="material-symbols-outlined text-success">pending_actions</i>
                            <span>Pending</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-symbols-outlined text-success">assignment</i>
                            <span>Konfirmasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Konfirmasi</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Setup</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                        width="24" height="24">
                    <span>Whatsapp</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <span>Member</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#">Promosi</a>
                            </li>
                            <li>
                                <a href="#">Pengingat Pembayaran</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - {{ date('Y') }} <a href="javascript:void(0);">{{ config('app.name') }}</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>
