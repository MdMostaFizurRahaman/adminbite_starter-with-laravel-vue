<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    {{-- <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Navigation</span>
                    </li> --}}
                    {{-- <li class="sidebar-item">
                        <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Car-Wheel"></i>
                            <span class="hide-menu">Dashboards </span>
                        </a>
                    </li> --}}

                    <router-link tag="li" active-class="selected"  :to="{ name: 'dashboard' }"  class="sidebar-item" exact>
                        <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="hide-menu">Dashboard</span>
                        </a> 
                    </router-link>


                    <router-link tag="li" active-class="selected"  :to="{ name: 'category' }"  class="sidebar-item" exact>
                        <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="fas fa-list-alt"></i>
                            <span class="hide-menu">Category</span>
                        </a> 
                    </router-link>
                    <router-link tag="li" active-class="selected"  :to="{ name: 'product' }"  class="sidebar-item" exact>
                        <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class=" fas fa-cubes"></i>
                            <span class="hide-menu">Product</span>
                        </a> 
                    </router-link>

                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                            <i class="icon-Mailbox-Empty"></i>
                            <span class="hide-menu">Inbox </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level">
                            <li class="sidebar-item">
                                <a href="inbox-email.html" class="sidebar-link">
                                    <i class="mdi mdi-email"></i>
                                    <span class="hide-menu"> Email </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="inbox-email-detail.html" class="sidebar-link">
                                    <i class="mdi mdi-email-alert"></i>
                                    <span class="hide-menu"> Email Detail </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="inbox-email-compose.html" class="sidebar-link">
                                    <i class="mdi mdi-email-secure"></i>
                                    <span class="hide-menu"> Email Compose </span>
                                </a>
                            </li>
                        </ul>
                    </li>
        
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>