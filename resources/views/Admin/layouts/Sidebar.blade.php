<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>
    <div class="left-side-logo d-block d-lg-none">
        <div class="text-center">

            <a href="index.html" class="logo"><img src="assets/images/logo_dark.png" height="20" alt="logo"></a>
        </div>
    </div>
    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu">
            <ul>

                {{-- home dashboard  --}}
                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <h3>
                            <i class="dripicons-home"></i>
                        <span>{{ __('site.dashboard') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                        </h3>
                    </a>
                </li>
                {{-- End home dashboard  --}}
                <li class="menu-title"><h5>{{ trans('site.component') }}</h5></li>
                <li class="has_sub">
                <a href="#" class="waves-effect"><i class="dripicons-home"></i>
                    <span>{{ trans('site.navbar') }}<span class="menu-arrow float-right "></span></span>
                </a>
                <ul class="list-unstyled">
                    <li><a href="navbar_data">{{ trans('site.Navbar-Data') }}</a></li>
                </ul>
               {{-- route Admin  --}}
               <li>
                <a href="#" class="waves-effect">
                    <i class="ion ion-md-contacts"></i>
                    <span>{{ trans('site.admins') }}
                        <span class="badge badge-success badge-pill float-right"></span>
                    </span>
                </a>
                </li>
               {{-- End route Admin  --}}
               {{--  route user till i make multi auth as soon as possible  --}}
                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect">
                        <i class="ion ion-md-albums"></i>
                        <span>{{ trans('site.clients') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
                {{--  End route user  --}}
                {{--  route feedback   --}}
                <li>
                <a href="{{ route('feedbacks.index') }}" class="waves-effect">
                    <i class="ion ion-md-recording"></i>
                    <span>{{ trans('site.feedback') }}
                        <span class="badge badge-success badge-pill float-right"></span>
                    </span>
                </a>
                </li>
                {{-- End route feedback   --}}
                {{-- route services   --}}
                <li>
                    <a href="{{ route('services.index') }}" class="waves-effect">
                        <i class="ion ion-md-airplane"></i>
                        <span>{{ trans('site.serv') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
                {{-- End route services   --}}
                {{-- <li>
                    <a href="#" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ trans('site.categories') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li> --}}
                 {{-- <li>
                    <a href="#" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ trans('site.Products') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>

                </li> --}}
                <li>
                    <a href="{{ route('agreements.index') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ trans('site.agreement') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>

                </li>

                <li>
                    <a href="{{ route('events.index') }}" class="waves-effect">

                        <i class="fa fa-signing"></i>
                        <span>{{ trans('site.event') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('tracking_steps.index') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ trans('site.tracking-steps') }}
                            <span class="badge badge-success badge-pill float-right"></span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
