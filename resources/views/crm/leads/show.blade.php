@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Lead Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('leads.index') }}">Leads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lead Details</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>Lead Title*</td>
                                        <td>{{ $lead->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Full Name*</td>
                                        <td>{{ $lead->full_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telephone Type</td>
                                        <td>{{ $lead->phone_type }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telephone</td>
                                        <td>{{ $lead->telephone }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>{{ $lead->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lead Value ($)</td>
                                        <td>{{ $lead->lead_value }}</td>
                                    </tr>
                                    <tr>
                                        <td>Assigned</td>
                                        <td>{{ $lead->assigned }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{ $lead->status }}</td>
                                    </tr>
                                    <tr>
                                        <td><h4>Details</h4></td>
                                    </tr>
                                    <tr>
                                        <td>Notes</td>
                                        <td>{{ $lead->notes }}</td>
                                    </tr>
                                    <tr>
                                        <td>Source</td>
                                        <td>{{ $lead->source }}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>{{ $lead->category }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tags</td>
                                        <td>{{ $lead->tags }}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Contacted</td>
                                        <td>{{ $lead->last_contacted }}</td>
                                    </tr>
                                    <tr>
                                        <td><h4>More Information</h4></td>
                                    </tr>
                                    <tr>
                                        <td>Total Budget</td>
                                        <td>{{ $lead->total_budget }}</td>
                                    </tr>
                                    <tr>
                                        <td>Target Date</td>
                                        <td>{{ $lead->target_date }}</td>
                                    </tr>
                                    <tr>
                                        <td>Content Type</td>
                                        <td>{{ $lead->content_type }}</td>
                                    </tr>
                                    <tr>
                                        <td>Brand Name</td>
                                        <td>{{ $lead->brand_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><h4>Address & Organisation Details</h4></td>
                                    </tr>
                                    <tr>
                                        <td>Company Name</td>
                                        <td>{{ $lead->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Street</td>
                                        <td>{{ $lead->street }}</td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td>{{ $lead->city }}</td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td>{{ $lead->state }}</td>
                                    </tr>
                                    <tr>
                                        <td>Zip Code</td>
                                        <td>{{ $lead->zip_code }}</td>
                                    </tr>
                                    <tr>
                                        <td>Country</td>
                                        <td>{{ $lead->country }}</td>
                                    </tr>
                                    <tr>
                                        <td>Website</td>
                                        <td>{{ $lead->website }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>
