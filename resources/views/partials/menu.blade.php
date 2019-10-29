<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
            
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
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>