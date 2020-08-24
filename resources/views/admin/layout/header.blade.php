<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="{{url('admin-demo')}}">
                <div class="logo logo-dark" style="background-image: url('{{asset('/admin/images/logo/logo.png')}}')"></div>
                <div class="logo logo-white"
                     style="background-image: url('{{asset('/admin/images/logo/logo-white.png')}}')"></div>
            </a>
        </div>
        <ul class="nav-left">
            <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                    <i class="mdi mdi-menu"></i>
                </a>
            </li>
            <li class="search-box">
                <a class="search-toggle" href="javascript:void(0);">
                    <i class="search-icon mdi mdi-magnify"></i>
                    <i class="search-icon-close mdi mdi-close-circle-outline"></i>
                </a>
            </li>
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Type to search...">
                <div class="search-predict">
                    <div class="search-wrapper scrollable">
                        <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-file p-r-5"></i>
                                            <span>Files</span>
                                        </span>
                            <ul class="list-media">
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-success">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Document.xls</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-info">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Mockup.doc</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);" class="media-hover p-h-20">
                                        <div class="media-img">
                                            <div class="icon-avatar bg-danger">
                                                <i class="mdi mdi-file-outline"></i>
                                            </div>
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Document.pdf</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="m-h-20 border top"></div>
                        <div class="p-v-10">
                                        <span class="display-block m-v-5 p-h-20 text-gray">
                                            <i class="ti-user p-r-5"></i>
                                            <span>Members</span>
                                        </span>
                            <ul class="list-media">
                                <li class="list-item">
                                    <a href="javascript:void(0);"
                                       class="conversation-toggler media-hover p-h-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Debra Stewart</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="javascript:void(0);"
                                       class="conversation-toggler media-hover p-h-20">
                                        <div class="media-img">
                                            <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title p-t-10">Jane Hunt</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-footer">
                        <span>You are Searching for '<b class="text-dark"><span class="serach-text-bind"></span></b>'</span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="mdi mdi-apps"></i>
                </a>
                <ul class="dropdown-menu dropdown-grid col-3 dropdown-lg">
                    <li>
                        <a href="">
                            <div class="text-center">
                                <i class="mdi mdi-information font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Info</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="text-center">
                                <i class="mdi mdi-notification-clear-all font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Notification</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">
                            <div class="text-center">
                                <i class="mdi mdi-logout font-size-30 icon-gradient-success"></i>
                                <p class="m-b-0">Logout</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
