@include('layout.header')   
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('crm.sidebar')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Reports</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="reports.html">Reports</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Reports
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Customers</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="projects-overview.html">Lead</a>
                                    <a class="dropdown-item" href="client-projects.html">Contract</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Selse</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="clients-overview.html">Product</a>
                                    <a class="dropdown-item" href="clients-overview.html">Expense</a>
                                    <a class="dropdown-item" href="clients-overview.html">Payment</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Activities</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="team-member.html">Task</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false">Team</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="team-member.html">Team</a>
                                </div>
                            </li>
                        </ul> -->
                        
                        @include('layout.reportAppBar')
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div style="text-align: center">
                                    <img src="crm/assets/images/reports.svg" alt="img" class="img-fluids" style="
                                                        width: 400px;
                                                        height: 400px;
                                                    " />
                                    <h4>
                                        Select a section above to
                                        get started
                                    </h4>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                ...
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="footer-inner-wraper">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh
                        Properties 2024</span>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
</div>
</div>
<!-- container-scroller -->

@include('layout.footer')