@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Expense Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('expenses.index') }}">Expenses</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Expense Details
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $expense->description }}</h4>
                            <p class="card-description">
                                Details of the expense
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Date</td>
                                            <td>{{ $expense->date }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{ $expense->description }}</td>
                                        </tr>
                                        <tr>
                                            <td>User</td>
                                            <td>{{ $expense->user }}</td>
                                        </tr>
                                        <tr>
                                            <td>Client</td>
                                            <td>{{ $expense->client }}</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>{{ $expense->project }}</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>{{ $expense->amount }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $expense->status }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-primary">Edit Expense</a>
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Expense</button>
                                </form>
                                <a href="{{ route('expenses.index') }}" class="btn btn-light">Back to List</a>
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
