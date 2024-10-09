@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Meeting</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('followups.index') }}">Meeting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Meeting</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('followups.update', $followup) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="parent_type">Parent</label>
                                    <select class="form-control" id="parent_type" name="parent_type">
                                        <option value="Organization" {{ $followup->parent_type == 'Organization' ? 'selected' : '' }}>Organization</option>
                                        <option value="Lead" {{ $followup->parent_type == 'Lead' ? 'selected' : '' }}>Lead
                                        </option>
                                        <option value="Contact" {{ $followup->parent_type == 'Contact' ? 'selected' : '' }}>Contact</option>
                                        <option value="Opportunity" {{ $followup->parent_type == 'Opportunity' ? 'selected' : '' }}>Opportunity</option>
                                        <option value="Sales" {{ $followup->parent_type == 'Sales' ? 'selected' : '' }}>
                                            Sales</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="organization_name">Organization Name</label>
                                    <input type="text" class="form-control" id="organization_name"
                                        name="organization_name" value="{{ $followup->organization_name }}"
                                        placeholder="Enter Organization Name">
                                </div>
                                <div class="form-group">
                                    <label for="start_date">Start Date</label>
                                    <input type="datetime-local" class="form-control" id="start_date" name="start_date"
                                        value="{{ $followup->start_date->format('Y-m-d\TH:i') }}">
                                </div>
                                <div class="form-group">
                                    <label for="end_date">End Date</label>
                                    <input type="datetime-local" class="form-control" id="end_date" name="end_date"
                                        value="{{ $followup->end_date->format('Y-m-d\TH:i') }}">
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duration</label>
                                    <input type="text" class="form-control" id="duration" name="duration"
                                        value="{{ $followup->duration }}" placeholder="Enter Duration">
                                </div>
                                <div class="form-group">
                                    <label for="outcome">Outcome</label>
                                    <input type="text" class="form-control" id="outcome" name="outcome"
                                        value="{{ $followup->outcome }}" placeholder="Enter Outcome">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description"
                                        rows="4">{{ $followup->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="Meeting Pending" {{ $followup->status == 'Meeting Pending' ? 'selected' : '' }}>Meeting Pending</option>
                                        <option value="Meeting Done" {{ $followup->status == 'Meeting Done' ? 'selected' : '' }}>Meeting Done</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
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

