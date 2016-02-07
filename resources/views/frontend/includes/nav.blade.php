<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#frontend-navbar-collapse">
                <span class="sr-only">{{ trans('labels.general.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{!! route('frontend.index') !!}">
                {!! app_name() !!}
            </a>
        </div><!--navbar-header-->

        <div class="collapse navbar-collapse" id="frontend-navbar-collapse">

            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Customers<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li>{!! link_to_route('customers.index', 'View Customers')!!}<li>
                        @role('Office')
                            <li>{!! link_to_route('customers.create', 'Create Customer')!!}<li>
                        @endauth
                        <li role="separator" class="divider"></li>                        
                        <li>{!! link_to_route('contacts.index', 'View Contacts')!!}<li>
                        @role('Office')
                            <li>{!! link_to_route('contacts.create', 'Create Contact')!!}<li>
                        @endauth
                    </ul>
                </li>

                <li>{!! link_to_route('processes.index', 'Processes')!!}<li>
                <li>{!! link_to_route('parts.index', 'Parts')!!}<li>
                <li>{!! link_to_route('workorders.index', 'Workorders')!!}<li>
                <li>{!! link_to_route('dmrs.index', 'DMR')!!}<li>
              
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">



                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li>{!! link_to('login', trans('navs.frontend.login')) !!}</li>
                    {{-- <li>{!! link_to('register', trans('navs.frontend.register')) !!}</li> --}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>{!! link_to_route('frontend.user.dashboard', trans('navs.frontend.dashboard')) !!}</li>

                            @if (access()->user()->canChangePassword())
                                <li>{!! link_to_route('auth.password.change', trans('navs.frontend.user.change_password')) !!}</li>
                            @endif

                            @permission('view-backend')
                                <li>{!! link_to_route('admin.dashboard', trans('navs.frontend.user.administration')) !!}</li>
                            @endauth

                            <li>{!! link_to_route('auth.logout', trans('navs.general.logout')) !!}</li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div><!--navbar-collapse-->
    </div><!--container-->
</nav>