
@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Create Meeting</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('followups.index') }}">Meeting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Meeting</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('followups.store') }}" method="POST">
                                @csrf

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                
                                <div class="form-group">
                                    <label for="parent_type">Parent</label>
                                    <select class="form-control" id="parent_type" name="parent_type">
                                        <option value="Organization">Organization</option>
                                        <option value="Lead">Lead</option>
                                        <option value="Contact">Contact</option>
                                        <option value="Opportunity">Opportunity</option>
                                        <option value="Sales">Sales</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="organization_name">Organization Name</label>
                                    <input type="text" class="form-control" id="organization_name" name="organization_name" placeholder="Enter Organization Name">
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="datetime-local" class="form-control" id="start_date" name="start_date">
                                </div>
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="datetime-local" class="form-control" id="end_date" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Duration">
                                </div>
                                <div class="form-group">
                                    <label for="outcome">Outcome</label>
                                    <input type="text" class="form-control" id="outcome" name="outcome" placeholder="Enter Outcome">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="Meeting Pending">Meeting Pending</option>
                                        <option value="Meeting Done">Meeting Done</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="{{ route('followups.index') }}" class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
