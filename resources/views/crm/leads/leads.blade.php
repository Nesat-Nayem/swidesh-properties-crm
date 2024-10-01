@include('layout.header')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
 @include('layout.sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Leads List</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="lead.html">Leads</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Leads List
                  </li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="search-field" style="border: 1px solid #000">
                        <form
                          class="d-flex align-items-center h-100"
                          action="#"
                        >
                          <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                              <i
                                class="input-group-text border-0 mdi mdi-magnify"
                              ></i>
                            </div>
                            <input
                              type="text"
                              class="form-control bg-transparent border-0"
                              placeholder="Search..."
                            />
                          </div>
                        </form>
                      </div>
                      <a href="create-lead.html">
                        <button
                          type="button"
                          class="btn btn-outline-danger btn-icon-text"
                        >
                          <i class="mdi mdi-plus btn-icon-prepend"></i> Create
                          Lead
                        </button>
                      </a>
                    </div>

                    <table class="table table-bordered table-responsive">
                      <thead>
                        <tr>
                          <th>Sr.No</th>
                          <th>Contact</th>
                          <th>Title</th>
                          <th>Created</th>
                          <th>Value</th>
                          <th>Assigned</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Philipie Gurney...</td>
                          <td>Web Design - Shoppin...</td>
                          <td>02-13-2024</td>
                          <td>$0.00</td>
                          <td>suraj jamdade</td>
                          <td>
                            <div class="badge badge-danger">+91 9090909090</div>
                          </td>
                          <td>
                            <div class="badge badge-success">Converted</div>
                          </td>
                          <td>
                            <div
                              class="btn-group"
                              role="group"
                              aria-label="Basic example"
                            >
                              <a href="#">
                                <button
                                  type="button"
                                  class="btn btn-inverse-primary btn-icon mx-2"
                                  title="View"
                                  data-toggle="modal"
                                  data-target="#viewModal"
                                >
                                  <i class="mdi mdi-eye"></i>
                                </button>
                              </a>
                              <a href="edit-lead.html">
                                <button
                                  type="button"
                                  class="btn btn-inverse-dark btn-icon mx-2"
                                  title="Edit"
                                >
                                  <i class="mdi mdi-table-edit"></i>
                                </button>
                              </a>
                              <a href="#">
                                <button
                                  type="button"
                                  class="btn btn-inverse-danger btn-icon mx-2"
                                  title="Delete"
                                  data-toggle="modal"
                                  data-target="#exampleModal"
                                >
                                  <i class="mdi mdi-trash-can"></i>
                                </button>
                              </a>
                              <a href="#">
                                <button
                                  type="button"
                                  class="btn btn-inverse-success btn-icon mx-2"
                                  title="Email"
                                  data-toggle="modal"
                                  data-target="#emailModal"
                                >
                                  <i class="mdi mdi-email"></i>
                                </button>
                              </a>
                              <a href="#">
                                <button
                                  type="button"
                                  class="btn btn-inverse-success btn-icon mx-2"
                                  title="Assigned"
                                  data-toggle="modal"
                                  data-target="#asignModal"
                                >
                                  <i class="mdi mdi-account"></i>
                                </button>
                              </a>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="row mt-5 text-center">
                      <div class="col-lg-12">
                        <div
                          class="btn-group"
                          role="group"
                          aria-label="Basic example"
                        >
                          <button
                            type="button"
                            class="btn btn-outline-secondary"
                          >
                            1
                          </button>
                          <button
                            type="button"
                            class="btn btn-outline-secondary"
                          >
                            2
                          </button>
                          <button
                            type="button"
                            class="btn btn-outline-secondary"
                          >
                            3
                          </button>
                        </div>
                      </div>
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
          <div class="modal-body p-5">
            <h5 class="text-black text-center">
              Are You Sure Delete This Item
            </h5>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-danger">Delete</button>
          </div>
        </div>
      </div>
    </div>
    <!-- delete modal end -->

    <!-- asign modal start -->
    <div
      class="modal fade"
      id="asignModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Assigned Users</h5>
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
            <form
              action="
           "
            >
              <div class="form-group">
                <label for="">Select User</label>
                <select class="form-control" id="">
                  <option>Suraj Jamdade</option>
                  <option>Vishal Mishra</option>
                  <option>Rahul Dravid</option>
                  <option>Ms Doni</option>
                  <option>Virat Kohli</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- asign modal end -->

    <!-- emil modal start -->
    <div
      class="modal fade"
      id="emailModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send email</h5>
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
            <form
              action="
          "
            >
              <div class="form-group">
                <label for="">To</label>
                <input type="text" class="form-control" id="" />
              </div>
              <div class="form-group">
                <label for="">Subject</label>
                <input type="text" class="form-control" id="" />
              </div>
              <div class="form-group">
                <label for="">Use A Template</label>
                <select class="form-control" id="">
                  <option>test</option>
                </select>
              </div>
              <div class="form-group">
                <textarea
                  name=" "
                  cols="30"
                  rows="10"
                  class="form-control"
                  id=""
                ></textarea>
              </div>
              <div class="form-group">
                <label for="">Drop File here or upload file here</label>
                <input type="file" class="form-control" id="" />
              </div>

              <div class="form-group">
                <label for="">From</label>
                <select class="form-control" id="">
                  <option>test</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- emil modal end -->

    <!-- view modal start -->
    <div
      class="modal fade"
      id="viewModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lead Details</h5>
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
            <table class="table table-bordered">
              <tbody>
                <tr>
                  <td>Lead Title*</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Full Name*</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Telephone Type</td>
                  <td>
                    <div class="badge badge-danger">Hot Call</div>
                  </td>
                </tr>
                <tr>
                  <td>Telephone</td>
                  <td>
                    <div class="badge badge-danger">+91 9090909090</div>
                  </td>
                </tr>
                <tr>
                  <td>Email Address</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Lead Value ($)</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Assigned</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    <h4>Details</h4>
                  </td>
                </tr>
                <tr>
                  <td>Notes</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Source</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Category</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Tags</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Last Contacted</td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    <h4>More Information</h4>
                  </td>
                </tr>
                <tr>
                  <td>Total Budget</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Target Date</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Content Type</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Brand Name</td>
                  <td></td>
                </tr>
                <tr>
                  <td>
                    <h4>Address & Organisation Details</h4>
                  </td>
                </tr>

                <tr>
                  <td>Company Name</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Street</td>
                  <td></td>
                </tr>
                <tr>
                  <td>City</td>
                  <td></td>
                </tr>
                <tr>
                  <td>State</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Zip Code</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Country</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Website</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- view modal end -->
@include('layout.footer')