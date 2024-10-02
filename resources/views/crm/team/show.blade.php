@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Team Member Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('teams.index') }}">Team Members</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Team Member Details
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $team->full_name }}</h4>
                            <p class="card-description">
                                Details of the team member
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Full Name</td>
                                            <td>{{ $team->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Position</td>
                                            <td>{{ $team->position }}</td>
                                        </tr>
                                        <tr>
                                            <td>Role</td>
                                            <td>{{ $team->role }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $team->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>{{ $team->phone }}</td>
                                        </tr>
                                        <tr>
                                            <td>Last Seen</td>
                                            <td>{{ $team->last_seen }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-primary">Edit Team Member</a>
                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Team Member</button>
                                </form>
                                <a href="{{ route('teams.index') }}" class="btn btn-light">Back to List</a>
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
