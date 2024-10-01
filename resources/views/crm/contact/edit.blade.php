@include('layout.header')

<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Contacts</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('contacts.index') }}">Contacts</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Contacts
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('contacts.update', $contact->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-2 col-6">
                                        <div class="form-group">
                                            <label for="title">Select</label>
                                            <select class="form-control" id="title" name="title">
                                                <option {{ $contact->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                                <option {{ $contact->title == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                                                <option {{ $contact->title == 'Mrs.' ? 'selected' : '' }}>Mrs.</option>
                                                <option {{ $contact->title == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-6">
                                        <div class="form-group">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $contact->full_name }}" placeholder="Enter Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-6">
                                        <div class="form-group">
                                            <label for="account">Accounts</label>
                                            <input type="text" class="form-control" id="account" name="account" value="{{ $contact->account }}" placeholder="Enter Accounts Name" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="phone_type">Select Phone</label>
                                            <select class="form-control" id="phone_type" name="phone_type">
                                                <option {{ $contact->phone_type == 'Mobile' ? 'selected' : '' }}>Mobile</option>
                                                <option {{ $contact->phone_type == 'Office' ? 'selected' : '' }}>Office</option>
                                                <option {{ $contact->phone_type == 'Home' ? 'selected' : '' }}>Home</option>
                                                <option {{ $contact->phone_type == 'Fax' ? 'selected' : '' }}>Fax</option>
                                                <option {{ $contact->phone_type == 'Other' ? 'selected' : '' }}>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}" placeholder="+91 Enter Mobile" required>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea class="form-control" id="address" name="address" rows="4">{{ $contact->address }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <select class="form-control" id="state" name="state">
                                                <option {{ $contact->state == 'Maharashtra' ? 'selected' : '' }}>Maharashtra</option>
                                                <option {{ $contact->state == 'Tamil Nadu' ? 'selected' : '' }}>Tamil Nadu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <select class="form-control" id="city" name="city">
                                                <option {{ $contact->city == 'Pune' ? 'selected' : '' }}>Pune</option>
                                                <option {{ $contact->city == 'Mumbai' ? 'selected' : '' }}>Mumbai</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                  
                                        <label for="country">Country</label>
                                            <select class="form-control" id="country" name="country">
                                                <option {{ $contact->country == 'India' ? 'selected' : '' }}>India</option>
                                                <option {{ $contact->country == 'UK' ? 'selected' : '' }}>UK</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ $contact->postal_code }}" placeholder="Enter Postal Code">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" value="{{ $contact->dob }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option {{ $contact->status == 'Active' ? 'selected' : '' }}>Active</option>
                                                <option {{ $contact->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="remarks">Enter Remarks Here</label>
                                            <input type="text" class="form-control" id="remarks" name="remarks" value="{{ $contact->remarks }}" placeholder="Enter Remarks Here">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="next_followup_date">Date and Time of Next Followup</label>
                                            <input type="date" class="form-control" id="next_followup_date" name="next_followup_date" value="{{ $contact->next_followup_date }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="next_followup_time"> </label>
                                            <input type="time" class="form-control" id="next_followup_time" name="next_followup_time" value="{{ $contact->next_followup_time }}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4">{{ $contact->description }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>
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
