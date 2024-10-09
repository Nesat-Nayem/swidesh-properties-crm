@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Leads List</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('leads.index') }}">Leads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Leads List</li>
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
                                            <input type="text" class="form-control bg-transparent border-0"
                                                placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('leads.create') }}">
                                    <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="mdi mdi-plus btn-icon-prepend"></i> Create Lead
                                    </button>
                                </a>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Contact</th>
                                        <th>Title</th>
                                        <th>Created</th>
                                        <th>Value</th>
                                        <th>Assigned</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $lead)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $lead->full_name }}</td>
                                            <td>{{ $lead->title }}</td>
                                            <td>{{ $lead->created_at->format('m-d-Y') }}</td>
                                            <td>${{ $lead->lead_value }}</td>
                                            <td>{{ $lead->assigned }}</td>
                                            <td>{{ $lead->telephone }}</td>
                                            <td>{{ $lead->status }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('leads.show', $lead->id) }}">
                                                        <button type="button" class="btn btn-inverse-primary btn-icon mx-2"
                                                            title="View">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('leads.edit', $lead->id) }}">
                                                        <button type="button" class="btn btn-inverse-dark btn-icon mx-2"
                                                            title="Edit">
                                                            <i class="mdi mdi-table-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('leads.destroy', $lead->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-inverse-danger btn-icon mx-2"
                                                            title="Delete" data-toggle="modal" data-target="#deleteModal"
                                                            data-id="{{ $lead->id }}">
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
                                    {{ $leads->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.footer')
    </div>
</div>

<!-- Include the Delete Modal -->
@include('partials.delete_modal')



<script>

    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var action = '{{ route("leads.destroy", ":id") }}';
        action = action.replace(':id', id);
        $('#deleteForm').attr('action', action);
    });

</script>