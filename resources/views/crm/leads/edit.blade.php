@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Leads</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('leads.index') }}">Leads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Leads</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
             

                        <div class="card-body">
    <form class="forms-sample" action="{{ route('leads.update', $lead->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Display Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('crm.leads.form')
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <a href="{{ route('leads.index') }}" class="btn btn-light">Cancel</a>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
