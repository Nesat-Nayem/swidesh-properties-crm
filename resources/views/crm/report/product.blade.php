@include('layout.header')
<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    @include('crm.sidebar')

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Contact</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/report">Report</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contact
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">

                        @include('layout.reportAppBar')


                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="mb-4">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <select name="" class="form-control" id="">
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
                                            <select name="" class="form-control" id="">
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
                                            <select name="" class="form-control" id="">
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
                                            <button type="button" class="btn btn-primary">
                                                Update Report
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Description</th>
                                        <th>Rate</th>
                                        <th>Unit</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->rate }}</td>
                                        <td>{{ $product->unit }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('products.show', $product->id) }}">
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
                                    {{ $products->links() }}
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
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh
                        Properties 2024</span>
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