@include('layout.header')

<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Contact Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('contacts.index') }}">Contacts</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contact Details
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $contact->full_name }}</h4>
                            <p class="card-description">
                                Details of the contact
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{ $contact->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Full Name</td>
                                            <td>{{ $contact->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Account</td>
                                            <td>{{ $contact->account }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $contact->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>{{ $contact->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>{{ $contact->address }}</td>
                                        </tr>
                                        <tr>
                                            <td>State</td>
                                            <td>{{ $contact->state }}</td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>{{ $contact->city }}</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>{{ $contact->country }}</td>
                                        </tr>
                                        <tr>
                                            <td>Postal Code</td>
                                            <td>{{ $contact->postal_code }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td>{{ $contact->dob }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $contact->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Remarks</td>
                                            <td>{{ $contact->remarks }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date and Time of Next Followup</td>
                                            <td>{{ $contact->next_followup_date }} {{ $contact->next_followup_time }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{ $contact->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('contacts.index') }}" class="btn btn-primary">Back to Contacts</a>
                                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit Contact</a>
                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Contact</button>
                                </form>
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
