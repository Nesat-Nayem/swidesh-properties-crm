@include('layout.header')

<!-- partial -->
<div class="container-fluid page-body-wrapper">





  <!-- partial:partials/_sidebar.html -->

  @include('crm.sidebar')

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row" id="proBanner">
        <div class="col-12">
          <span class="d-flex align-items-center purchase-popup">
            <p>Welcome back 👋
              <span class="font-weight-bold text-black">David Smith</span>
            </p>
            <a href="profile.html" class="btn ml-auto download-button bg-danger text-white">View Profile</a>
            <i class="mdi mdi-close" id="bannerClose"></i>
          </span>
        </div>
      </div>


      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
            <button type="button" class="btn btn-link text-light py-0">3 Month</button>
          </div>


          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-calendar mr-1"></i><span id="date-range"></span>
            </button>
          </div>



        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border ">
            <ul class="nav nav-tabs tab-transparent" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="Lead-tab" data-toggle="tab" href="#Lead" role="tab" aria-selected="true">Lead Conversion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " id="Sales-tab" data-toggle="tab" href="#Sales-1" role="tab" aria-selected="false">Sales Analytics</a>
              </li>


            </ul>
            <div class="d-md-block d-none">
              <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
              <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
            </div>
          </div>



          <div class="tab-content tab-transparent-content">

            <div class="tab-pane fade show active" id="Lead" role="tabpanel" aria-labelledby="Lead-tab">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">My Leads</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                      <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Completed</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">
                        My Activities</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                      <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Invoices - Due</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                      <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">
                        Sales Pipeline</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                      <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Decreased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="card-title mb-0">Recent Activity</h4>
                            <div class="dropdown dropdown-arrow-none">
                              <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                <h6 class="dropdown-header">Settings</h6>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                          <div class="wrapper pb-5 border-bottom">
                            <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                              <p class="mb-0 text-dark">Sales -Current Month
                              </p>
                              <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                            </div>
                            <h3 class="mb-0 text-dark font-weight-bold">₹ 92556</h3>
                            <canvas id="total-profit"></canvas>
                          </div>
                          <div class="wrapper pt-5">
                            <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                              <p class="mb-0 text-dark">Sales Last Month</p>
                              <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                            </div>
                            <h3 class="mb-4 text-dark font-weight-bold">₹ 59565</h3>
                            <canvas id="total-expences"></canvas>
                          </div>
                        </div>
                        <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                          <div class="pl-0 pl-lg-4 ">
                            <div class="d-xl-flex justify-content-between align-items-center mb-2">
                              <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                <h3 class="text-dark font-weight-bold mr-2 mb-0">Conversion Matrix - Current Month
                                </h3>
                                <h5 class="mb-0">( growth 62% )</h5>
                              </div>
                              <div class="d-lg-flex">
                                <p class="mr-2 mb-0">Timezone:</p>
                                <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                              </div>
                            </div>
                            <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                            <canvas id="device-sales"></canvas>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="tab-pane fade show " id="Sales-1" role="tabpanel" aria-labelledby="Sales-tab">
              <div class="row">
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Sales Current Month</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">₹ 932.00</h2>
                      <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Completed</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">₹ 5443</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Sales Current Year</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">₹ 756,00</h2>
                      <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">₹ 50%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Sales Current Year (Product)</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">₹ 100,38</h2>
                      <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">₹ 35%</h3>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Sales Current Year (Sales Manager)</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">₹ 4250</h2>
                      <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Decreased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">₹ 25%</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-4 grid-margin stretch-card">
                  <div class="card card-danger-gradient">
                    <div class="card-body mb-4">
                      <h4 class="card-title text-white">Account Retention</h4>
                      <canvas id="account-retension"></canvas>
                    </div>
                    <div class="card-body bg-white pt-4">
                      <div class="row pt-4">
                        <div class="col-sm-6">
                          <div class="text-center border-right border-md-0">
                            <h4>Salesman Collection Current Month</h4>
                            <h1 class="text-dark font-weight-bold mb-md-3">₹1,200,000.00</h1>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="text-center">
                            <h4>Salesman Collection Current FY</h4>
                            <h1 class="text-dark font-weight-bold">₹6,000,000.00</h1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-xl-flex justify-content-between mb-2">
                        <h4 class="card-title">Sales analytics</h4>
                        <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                      </div>
                      <canvas id="page-view-analytic"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>




          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->



    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh Properties 2024</span>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->


</div>
<!-- page-body-wrapper ends -->
</div>

@include('layout.footer')