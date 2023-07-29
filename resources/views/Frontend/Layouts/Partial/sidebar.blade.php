<aside class="main-sidebar .sidebar-dark-warning elevation-4" style="background-color:  rgb(40, 40, 41) ">

    <img src="" alt="" width="220" style="margin-left:3%; margin-top:5%;">


    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block" style="font-weight:800">HOSPITAL INSIGHTS PANEL</a>

            </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('age')}}" class="nav-link">
                        <i class="fas fa-pager">&nbsp;</i>
                        <p>
                            Age Distribution
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('gender')}}" class="nav-link">
                        <i class="fas fa-venus-mars">&nbsp;</i>
                        <p>
                            Gender Distribution
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('location')}}" class="nav-link">
                        <i class="fas fa-location-arrow">&nbsp;</i>
                        <p>
                            Location Based Insights
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('source')}}" class="nav-link">
                        <i class="fas fa-caret-up">&nbsp;</i>
                        <p>
                            Source Analysis
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('screeningStatus')}}" class="nav-link">
                        <i class="fas fa-magic">&nbsp;</i>
                        <p>
                            Screening Status
                        </p>
                    </a>
                </li>


                <li class="nav-item menu-open mt-3">
                    <a href="{{route('abnormalScreening')}}" class="nav-link">
                        <i class="fas fa-magic">&nbsp;</i>
                        <p>
                            Abnormal Screening
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('testParameters')}}" class="nav-link">
                        <i class="fas fa-vials">&nbsp;</i>
                        <p>
                            Test Parameters
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('nodeWiseInsight')}}" class="nav-link">
                        <i class="fas fa-circle-notch">&nbsp;</i>
                        <p>
                            Node wise Insights
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open mt-3">
                    <a href="{{route('preExistingCondition')}}" class="nav-link">
                        <i class="fas fa-thumbs-up">&nbsp;</i>
                        <p>
                            PreExisting Condition
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>

