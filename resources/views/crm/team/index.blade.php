@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Team Members</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('teams.index') }}">Team Members</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Team Members List
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-3">
                                <div class="search-field" style="border: 1px solid #000">
                                    <form class="d-flex align-items-center h-100" action="#">
                                        <div class="input-group">
                                            <div class="input-group-prepend bg-transparent">
                                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                                            </div>
                                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search..." />
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('teams.create') }}">
                                    <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="mdi mdi-plus btn-icon-prepend"></i>
                                        Create Team
                                    </button>
                                </a>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Full Name</th>
                                        <th>Position</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Last Seen</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $team->full_name }}</td>
                                        <td>{{ $team->position }}</td>
                                        <td>{{ $team->role }}</td>
                                        <td>{{ $team->email }}</td>
                                        <td>{{ $team->phone }}</td>
                                        <td>{{ $team->last_seen }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('teams.show', $team->id) }}">
                                                    <button type="button" class="btn btn-inverse-primary btn-icon mx-2" title="View">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </a>
                                                <a href="{{ route('teams.edit', $team->id) }}">
                                                    <button type="button" class="btn btn-inverse-dark btn-icon mx-2" title="Edit">
                                                        <i class="mdi mdi-table-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-inverse-danger btn-icon mx-2" title="Delete">
                                                        <i class="mdi mdi-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row mt-5 text-center">
                                <div class="col-lg-12">
                                    {{ $teams->links() }}
                                </div>
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
