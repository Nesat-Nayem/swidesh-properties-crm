@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Payment Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('payments.index') }}">Payments</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Payment Details
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $payment->invoice_id }}</h4>
                            <p class="card-description">
                                Details of the payment
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Invoice ID</td>
                                            <td>{{ $payment->invoice_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>{{ $payment->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>Date</td>
                                            <td>{{ $payment->date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Payment Method</td>
                                            <td>{{ $payment->payment_method }}</td>
                                        </tr>
                                        <tr>
                                            <td>Transaction ID</td>
                                            <td>{{ $payment->transaction_id }}</td>
                                        </tr>
                                        <tr>
                                            <td>Notes</td>
                                            <td>{{ $payment->notes }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('payments.edit', $payment->id) }}" class="btn btn-primary">Edit Payment</a>
                                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Payment</button>
                                </form>
                                <a href="{{ route('payments.index') }}" class="btn btn-light">Back to List</a>
                            </div>
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
