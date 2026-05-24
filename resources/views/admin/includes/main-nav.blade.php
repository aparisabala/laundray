 <div class="vertical-menu">
    <div class="navbar-brand-box">
        <a href="{{url('admin/dashboard')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{config('i.favicon')}}" alt="" class="admin-logo-sm">
            </span>
            <span class="logo-lg">
                <img src="{{config('i.logo')}}" alt=""  class="admin-logo-lg">
            </span>
        </a>
        <a href="{{url('admin/dashboard')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{config('i.favicon')}}" alt=""  class="admin-logo-sm">
            </span>
            <span class="logo-lg">
                <img src="{{config('i.logo')}}" alt=""  class="admin-logo-lg">
            </span>
        </a>
    </div>
    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>
    <div data-simplebar="" class="sidebar-menu-scroll">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="">
                    <a href="{{url('admin/dashboard')}}" class="">
                        <i class="bx bxs-dashboard"></i>
                        <span>{{pxLang('admin.main-nav','dashboard')}}</span>
                    </a>
                </li>
                 <li class="">
                    <a href="{{url('admin/customer')}}" class="">
                        <i class="fa-solid fa-user-cog"></i>
                        <span>{{pxLang('admin.main-nav','customer.menu')}}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fa fa-users"></i>
                        <span>{{pxLang('admin.main-nav','hrm.menu')}}</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="{{url('admin/hrm/user/user-role')}}">{{pxLang('admin.main-nav','hrm.menu.user_role')}}</a>
                        </li>
                        <li>
                            <a href="{{url('admin/hrm/user/user-list/1')}}">{{pxLang('admin.main-nav','hrm.menu.user')}}</a>
                        </li>
                        <li>
                            <a href="{{url('admin/hrm/user/user-policy')}}">{{pxLang('admin.main-nav','hrm.menu.user_policy')}}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
