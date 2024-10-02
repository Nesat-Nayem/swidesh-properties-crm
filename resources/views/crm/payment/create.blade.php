@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Add A New Payment</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('payments.index') }}">Payment</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Add A New Payment
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('payments.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="invoice_id">Invoice ID</label>
                                            <input type="text" class="form-control" id="invoice_id" name="invoice_id" placeholder="Enter Invoice ID" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="payment_method">Payment Method</label>
                                            <select class="form-control" id="payment_method" name="payment_method" required>
                                                <option>Paypal</option>
                                                <option>Stripe</option>
                                                <option>Bank</option>
                                                <option>Cash</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="transaction_id">Transaction ID</label>
                                            <input type="text" class="form-control" id="transaction_id" name="transaction_id" placeholder="Enter Transaction ID">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="notes">Notes</label>
                                            <textarea class="form-control" id="notes" name="notes" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="send_email" name="send_email" value="1">
                                            <label class="form-check-label" for="send_email">Send the client a payment received email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <!-- <button type="button" class="btn btn-light" onclick="window.location='{{ route('payments.index') }}'">Cancel</button> -->
                                        <button type="button" class="btn btn-light" >Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-inner-wraper">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh Properties 2024</span>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('layout.footer')
