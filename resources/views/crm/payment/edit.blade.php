@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Payment</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('payments.index') }}">Payments</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Payment
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('payments.update', $payment->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="invoice_id">Invoice ID</label>
                                            <input type="text" class="form-control" id="invoice_id" name="invoice_id"
                                                value="{{ $payment->invoice_id }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-6">
                                        <div class="form-group">
                                            <label for="amount">Amount</label>
                                            <input type="number" class="form-control" id="amount" name="amount"
                                                value="{{ $payment->amount }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="date">Date</label>
                                            <input type="date" class="form-control" id="date" name="date"
                                                value="{{ $payment->date }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="payment_method">Payment Method</label>
                                            <select class="form-control" id="payment_method" name="payment_method"
                                                required>
                                                <option value="Paypal" {{ $payment->payment_method == 'Paypal' ? 'selected' : '' }}>Paypal</option>
                                                <option value="Stripe" {{ $payment->payment_method == 'Stripe' ? 'selected' : '' }}>Stripe</option>
                                                <option value="Bank" {{ $payment->payment_method == 'Bank' ? 'selected' : '' }}>Bank</option>
                                                <option value="Cash" {{ $payment->payment_method == 'Cash' ? 'selected' : '' }}>Cash</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="transaction_id">Transaction ID</label>
                                            <input type="text" class="form-control" id="transaction_id"
                                                name="transaction_id" value="{{ $payment->transaction_id }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="notes">Notes</label>
                                            <textarea class="form-control" id="notes" name="notes"
                                                rows="4">{{ $payment->notes }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        <!-- <button type="button" class="btn btn-light" onclick="window.location='{{ route('payments.index') }}'">Cancel</button> -->
                                        <button type="button" class="btn btn-light">Cancel</button>
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
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh
                        Properties 2024</span>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('layout.footer')
