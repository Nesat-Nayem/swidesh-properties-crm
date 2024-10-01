@include('layout.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layout.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Edit Leads</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="lead.html">Leads</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Edit Leads
                  </li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <form class="forms-sample">
                      <div class="row">
                        <div class="col-lg-6">
                          <h4
                            class="mb-4 pb-4"
                            style="border-bottom: 1px solid #000"
                          >
                            Basic Details
                          </h4>
                          <div class="row">
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Lead Title*</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Lead Title "
                                />
                              </div>
                            </div>
                            <div class="col-lg-2 col-6">
                              <div class="form-group">
                                <label for="">Select</label>
                                <select class="form-control" id="">
                                  <option>Mr.</option>
                                  <option>Ms.</option>
                                  <option>Mrs.</option>
                                  <option>Dr.</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-5 col-6">
                              <div class="form-group">
                                <label for="">Full Name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Full Name"
                                />
                              </div>
                            </div>
                            <div class="col-lg-5 col-6">
                              <div class="form-group">
                                <label for="">Phone Type</label>
                                <select class="form-control" id="">
                                  <option>Hot Call</option>
                                  <option>Cold Call</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-6">
                              <div class="form-group">
                                <label for="">Telephone</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Telephone "
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-6">
                              <div class="form-group">
                                <label for="">Email Address</label>
                                <input
                                  type="email"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter  Email Address"
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-6">
                              <div class="form-group">
                                <label for="">Lead Value ($)</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter  Lead Value ($)"
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-6">
                              <div class="form-group">
                                <label for="">Assigned</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter  Name"
                                />
                              </div>
                            </div>
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Select Status</label>
                                <select class="form-control" id="">
                                  <option>Converted</option>
                                  <option>Qualified</option>
                                  <option>Proposal Sent</option>
                                  <option>Contacted</option>
                                  <option>DisQualified</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="col-lg-6"
                          style="border-left: 1px dotted #000"
                        >
                          <h4
                            class="mb-4 pb-4"
                            style="border-bottom: 1px solid #000"
                          >
                            Details
                          </h4>
                          <div class="row">
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Notes*</label>
                                <textarea
                                  name=" "
                                  id=""
                                  cols="30"
                                  rows="10"
                                  class="form-control"
                                ></textarea>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Select Source</label>
                                <select class="form-control" id="">
                                  <option>Yellow & Pages</option>
                                  <option>Yahoo</option>
                                  <option>Google</option>
                                  <option>Facebook</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Category</label>
                                <select class="form-control" id="">
                                  <option>Application Developer</option>
                                  <option>Web Design</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Tags </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Tags "
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Last Contacted</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Last Contacted "
                                />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="col-lg-6 pt-4"
                          style="border-top: 1px dotted #000"
                        >
                          <h4
                            class="mb-4 pb-4"
                            style="border-bottom: 1px solid #000"
                          >
                            More Information
                          </h4>
                          <div class="row">
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Total Budget*</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Total Budget "
                                />
                              </div>
                            </div>
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Target Date*</label>
                                <input
                                  type="date"
                                  class="form-control"
                                  id=""
                                  placeholder=""
                                />
                              </div>
                            </div>
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Content Type</label>
                                <select class="form-control" id="">
                                  <option>Article</option>
                                  <option>Blog Post</option>
                                  <option>Reserach</option>
                                  <option>Production</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Brand Name </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Brand Name "
                                />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="col-lg-6 pt-4"
                          style="
                            border-top: 1px dotted #000;
                            border-left: 1px dotted #000;
                          "
                        >
                          <h4
                            class="mb-4 pb-4"
                            style="border-bottom: 1px solid #000"
                          >
                            Address & Organisation Details
                          </h4>
                          <div class="row">
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Company Name*</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Company Name "
                                />
                              </div>
                            </div>
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Street*</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Street"
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">City*</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="City"
                                />
                              </div>
                            </div>
                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">State</label>
                                <select class="form-control" id="">
                                  <option>Maharashtra</option>
                                  <option>Tamil Nadu</option>
                                  <option>Karnataka</option>
                                  <option>Kerala</option>
                                </select>
                              </div>
                            </div>

                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Zip Code </label>
                                <input
                                  type="text"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Zip Code  "
                                />
                              </div>
                            </div>

                            <div class="col-lg-6 col-12">
                              <div class="form-group">
                                <label for="">Country</label>
                                <select class="form-control" id="">
                                  <option>India</option>
                                  <option>UK</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12 col-12">
                              <div class="form-group">
                                <label for="">Website </label>
                                <input
                                  type="url"
                                  class="form-control"
                                  id=""
                                  placeholder="Enter Website "
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <button type="submit" class="btn btn-primary mr-2">
                        Submit
                      </button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->

          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="footer-inner-wraper">
              <div
                class="d-sm-flex justify-content-center justify-content-sm-between"
              >
                <span
                  class="text-muted d-block text-center text-sm-left d-sm-inline-block"
                  >Copyright © Swadesh Properties 2024</span
                >
              </div>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- delete modal start -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete This Item</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h3 class="text-black text-center">
              Are You Sure Delete This Item
            </h3>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- delete modal end -->
    @include('layout.footer')