<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        ต.ยานยนต์
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <!-- <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"> -->
                    <div class="simplebar-content" style="padding: 0px;">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">
                                Dashboard</a>
                        </li>

                        <li class="nav-title">Motorcycle</li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('motorcycle-overview') }}">
                                <div class="px-3">รถจักรยานยนต์ทั้งหมด</div>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('motorcycle-sell-list') }}">
                                <div class="px-3">รายการขายทั้งหมด</div>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('motorcycle-buy-list') }}">
                                <div class="px-3">รายการรับซื้อ</div>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('motorcycle-reserve-list') }}">
                                <div class="px-3">รายการจอง</div>
                            </a>
                        </li>



                        <li class="nav-title">Repair</li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="px-3">รายการซ่อม</div>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="px-3">อะไหล่</div>
                            </a>
                        </li>

                        <li class="nav-title">Data Management</li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="px-3">จัดการข้อมูลรถ</div>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <div class="px-3">จัดการข้อมูลอะไหล่</div>
                            </a>
                        </li>
                        <!-- <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                <svg class="nav-icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                </svg> Base</a>
                            <ul class="nav-group-items">
                                <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Collapse</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List group</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"></span> Navs &amp; Tabs</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"></span> Placeholders</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Popovers</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Progress</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Scrollspy</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Spinners</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Tables</a></li>
                                <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Tooltips</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </li>


                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- <div class="simplebar-placeholder" style="width: auto; height: 841px;"></div> -->
        </div>
    </ul>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>