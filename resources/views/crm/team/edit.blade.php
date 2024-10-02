@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Team Member</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('teams.index') }}">Team Members</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Team Member
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('teams.update', $team->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label for="select">Select</label>
                                            <select class="form-control" id="select" name="select">
                                                <option>Mr.</option>
                                                <option>Ms.</option>
                                                <option>Mrs.</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label for="full_name">Full Name</label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $team->full_name }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" value="{{ $team->email }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $team->phone }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="position">Job Title</label>
                                            <input type="text" class="form-control" id="position" name="position" value="{{ $team->position }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="role">Role</label>
                                            <select class="form-control" id="role" name="role" required>
                                                <option value="Administrator" {{ $team->role == 'Administrator' ? 'selected' : '' }}>Administrator</option>
                                                <option value="Management" {{ $team->role == 'Management' ? 'selected' : '' }}>Management</option>
                                                <option value="Staff" {{ $team->role == 'Staff' ? 'selected' : '' }}>Staff</option>
                                                <option value="Accounting" {{ $team->role == 'Accounting' ? 'selected' : '' }}>Accounting</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <!-- <button type="button" class="btn btn-light" onclick="window.location='{{ route('teams.index') }}'">Cancel</button> -->
                                <button type="button" class="btn btn-light">Cancel</button>
                            </form>
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
