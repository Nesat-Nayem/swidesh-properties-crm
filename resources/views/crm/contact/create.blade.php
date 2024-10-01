@include('layout.header')

<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Create Contacts</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('contacts.index') }}">Contacts</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Create Contacts
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-end mb-3">
                                <a href="{{ route('contacts.index') }}">
                                    <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="mdi mdi-view-list btn-icon-prepend"></i>
                                        View All
                                    </button>
                                </a>
                            </div>

                            <form class="forms-sample" action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-2 col-6">
                                        <div class="form-group">
                                            <label for="title">Select</label>
                                            <select class="form-control" id="title" name="title">
                                                <option>Mr.</option>
                                                <option>Ms.</option>
                                                <option>Mrs.</option>
                                                <option>Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-6">
                                        <div class="form-group">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-6">
                                        <div class="form-group">
                                            <label for="account">Accounts</label>
                                            <input type="text" class="form-control" id="account" name="account" placeholder="Enter Accounts Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="phone_type">Select Phone</label>
                                            <select class="form-control" id="phone_type" name="phone_type">
                                                <option>Mobile</option>
                                                <option>Office</option>
                                                <option>Home</option>
                                                <option>Fax</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="+91 Enter Mobile" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="4"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <select class="form-control" id="state" name="state">
                                                <option>Maharashtra</option>
                                                <option>Tamil Nadu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select class="form-control" id="city" name="city">
                                                <option>Pune</option>
                                                <option>Mumbai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-control" id="country" name="country">
                                                <option>India</option>
                                                <option>UK</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Enter Postal Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="remarks">Enter Remarks Here</label>
                                            <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks Here">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="next_followup_date">Date and Time of Next Followup</label>
                                            <input type="date" class="form-control" id="next_followup_date" name="next_followup_date">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="next_followup_time"> </label>
                                            <input type="time" class="form-control" id="next_followup_time" name="next_followup_time">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="button" class="btn btn-light" id="cancelButton">Cancel</button>
                                <!-- <button type="button" class="btn btn-light" onclick="window.location='{{ route('contacts.index') }}'">Cancel</button> -->
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
<!-- container-scroller -->

@include('layout.footer')
