@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Meeting Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('followups.index') }}">Meeting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Meeting Details</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Meeting Information</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Parent Type:</strong> {{ $followup->parent_type }}</p>
                                    <p><strong>Organization Name:</strong> {{ $followup->organization_name }}</p>
                                    <p><strong>Start Date:</strong> {{ $followup->start_date->format('d/m/Y H:i') }}</p>
                                    <p><strong>End Date:</strong> {{ $followup->end_date->format('d/m/Y H:i') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Duration:</strong> {{ $followup->duration }}</p>
                                    <p><strong>Outcome:</strong> {{ $followup->outcome }}</p>
                                    <p><strong>Status:</strong> {{ $followup->status }}</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <h5>Description:</h5>
                                    <p>{{ $followup->description }}</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('followups.edit', $followup) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('followups.index') }}" class="btn btn-light">Back to List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
