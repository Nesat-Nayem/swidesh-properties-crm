@include('layout.header')
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
          @include('crm.sidebar')

                <!-- partial -->
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title">Lead</h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="projects-overview.html"
                                            >Lead</a
                                        >
                                    </li>
                                    <li
                                        class="breadcrumb-item active"
                                        aria-current="page"
                                    >
                                         Overview
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                
                                @include('layout.reportAppBar')


                                    <div class="tab-content" id="myTabContent">
                                        <div
                                            class="tab-pane fade show active"
                                            id="home"
                                            role="tabpanel"
                                            aria-labelledby="home-tab"
                                        >
                                            <div class="mb-4">
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <select
                                                            name=""
                                                            class="form-control"
                                                            id=""
                                                        >
                                                            <option value="">
                                                                All
                                                            </option>
                                                            <option value="">
                                                                25
                                                            </option>
                                                            <option value="">
                                                                50
                                                            </option>
                                                            <option value="">
                                                                75
                                                            </option>
                                                            <option value="">
                                                                100
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <select
                                                            name=""
                                                            class="form-control"
                                                            id=""
                                                        >
                                                            <option value="">
                                                                All
                                                            </option>
                                                            <option value="">
                                                                This Year
                                                            </option>
                                                            <option value="">
                                                                Last Year
                                                            </option>
                                                            <option value="">
                                                                This Month
                                                            </option>
                                                            <option value="">
                                                                Last Month
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <select
                                                            name=""
                                                            class="form-control"
                                                            id=""
                                                        >
                                                            <option value="">
                                                                Status
                                                            </option>
                                                            <option value="">
                                                                Paid
                                                            </option>
                                                            <option value="">
                                                                Due
                                                            </option>
                                                            <option value="">
                                                                OverDue
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary"
                                                        >
                                                            Update Report
                                                        </button>
                                                    </div>
                                                </div>
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
            <th>View</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leads as $lead)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lead->full_name }}</td>
                <td>{{ $lead->title }}</td>
                <td>{{ $lead->created_at->format('m-d-Y') }}</td>
                <td>${{ $lead->lead_value }}</td>
                <td>{{ $lead->assigned }}</td>
                <td>{{ $lead->telephone }}</td>
                <td>{{ $lead->status }}</td>
                <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('leads.show', $lead->id) }}">
                                                        <button type="button" class="btn btn-inverse-primary btn-icon mx-2" title="View">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>
                                                    </a>
       
                                                </div>
                                            </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="row mt-5 text-center">
    <div class="col-lg-12">
        {{ $leads->links() }}
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
@include('layout.footer')