@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Meeting</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('followups.index') }}">Meeting</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Meeting List</li>
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
                                            <input type="text" class="form-control bg-transparent border-0" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('followups.create') }}">
                                    <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="mdi mdi-plus btn-icon-prepend"></i>
                                        Create Meeting
                                    </button>
                                </a>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <!-- <th>Parent</th>
                                        <th>Organizations</th> -->
                                        <th>Date Start</th>
                                        <th>End Start</th>
                                        <th>Duration</th>
                                        <!-- <th>Outcome</th>
                                        <th>Description</th> -->
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($followups as $followup)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <!-- <td>{{ $followup->parent_type }}</td>
                                            <td>{{ $followup->organization_name }}</td> -->
                                            <td>{{ $followup->start_date->format('d/m/Y H:i') }}</td>
                                            <td>{{ $followup->end_date->format('d/m/Y H:i') }}</td>
                                            <td>{{ $followup->duration }}</td>
                                            <!-- <td>{{ $followup->outcome }}</td>
                                            <td>{{ $followup->description }}</td> -->
                                            <td>
                                                <div class="badge badge-{{ $followup->status == 'Meeting Done' ? 'success' : 'warning' }}">
                                                    {{ $followup->status }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                <a href="{{ route('followups.show', $followup) }}" title="Show">
            <button type="button" class="btn btn-inverse-info btn-icon mx-2">
                <i class="mdi mdi-eye"></i>
            </button>
        </a>
        <a href="{{ route('followups.edit', $followup) }}" title="Edit">
            <button type="button" class="btn btn-inverse-dark btn-icon mx-2">
                <i class="mdi mdi-table-edit"></i>
            </button>
        </a>
        <form action="{{ route('followups.destroy', $followup) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this followup?');">
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

                            <div class="row mt-5">
                                <div class="col-lg-12">
                                    {{ $followups->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
