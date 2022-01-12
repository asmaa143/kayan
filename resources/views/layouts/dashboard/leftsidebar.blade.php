<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

<div class="slimscroll-menu">

    <!-- User box -->
    <div class="user-box text-center mb-3">
        <img src="{{ URL::asset('assets/images/users/default.png') }}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
        <div class="dropdown">
            <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown"  aria-expanded="false">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">General</li>

            <li>
                <a href="index.html">
                    <i class="fas fa-home"></i>
                    <span> Home </span>
                </a>
            </li>

            <li>
                <a href="javascript: void(0);">
                    <i class="dripicons-gear"></i>
                    <span> Setteing </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="layouts-horizontal.html">Horizontal</a></li>
                </ul>
            </li>

            <li class="menu-title">Doctors</li>

            <li>
                <a href="javascript: void(0);">
                    <i class="mdi mdi-doctor"></i>
                    <span> Doctors </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li><a href="layouts-horizontal.html">All</a></li>
                    <li><a href="layouts-horizontal.html">Archive</a></li>
                </ul>
            </li>
            {{-- <li>
                <a href="apps-chat.html">
                    <i class="mdi mdi-forum"></i>
                    <span class="badge badge-purple float-right">New</span>
                    <span> Chat </span>
                </a>
            </li>

            <li>
                <a href="calendar.html">
                    <i class="mdi mdi-calendar"></i>
                    <span> Calendar </span>
                </a>
            </li> --}}

            <li>
                <a href="inbox.html">
                    <i class="mdi mdi-email"></i>
                    <span> Mail </span>
                </a>
            </li>

            <li class="menu-title">Patients</li>

            <li>
                <a href="ui-typography.html">
                    <i class="mdi mdi-format-font"></i>
                    <span> Typography </span>
                </a>
            </li>

            <li class="menu-title">Medical Labs</li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->