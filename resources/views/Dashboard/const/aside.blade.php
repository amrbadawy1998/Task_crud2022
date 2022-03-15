<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{asset("Dashborad/dist/img/AdminLTELogo.png")}}" alt="Admin ASWAQ" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">ASWAQ DASHBOARD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("Dashborad/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Amr badawy</a>
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            المستخدمين
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route("user.create")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p> إضافه مستخدم </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route("user.index")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>  عرض المستخدمين</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            الاقسام
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>


                    <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{route("category.create")}}" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p> إضافه  </p>
                                </a>
                            </li>
                        <li class="nav-item">
                            <a href="{{route("category.index")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>  إستعراض  </p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            المقالات
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route("article.create")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p> إضافه  </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route("article.index")}}" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>  إستعراض  </p>
                            </a>
                        </li>
                    </ul>

                </li>

{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.showitem")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> المنتجات</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.item")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه منتج</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.brand")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه ماركه</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.provider")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه بائع </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/boxed.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Devise</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                            الطعام--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه طلب  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  عرض الطلابات  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}


{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p> إضافه قسم  </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                            المؤموريات--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه مئموريه  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  عرض مئموريات   </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                            طلابات المستخدمين--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> طلب اجازه  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> تعديل طلب اجازه  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  طلبات الاجازات    </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  بدل موصلات    </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> تعديل  طلبات الموصلات    </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>   طلبات الموصلات    </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> مذكره  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                            الحضور و الغياب--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> تقرير حضور الاشخاص </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  تعديل حضور شخص  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                          اوف لابن ميتنج--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> اضافه ميتنج  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>   الميتنج  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-boxes"></i>--}}
{{--                        <p>--}}
{{--                           العملاء--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right"></span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p> إضافه عميل  </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                                <i class="nav-icon fas fa-edit"></i>--}}
{{--                                <p>  العملاء   </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="{{route("Inventory.Category.all")}}" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-edit"></i>--}}
{{--                        <p> المبني  </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
