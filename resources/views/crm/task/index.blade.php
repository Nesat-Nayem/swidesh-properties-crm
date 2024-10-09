@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Tasks</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('tasks.index') }}">Tasks</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tasks List
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
                                            <input type="text" class="form-control bg-transparent border-0"
                                                placeholder="Search..." />
                                        </div>
                                    </form>
                                </div>
                                <a href="{{ route('tasks.create') }}">
                                    <button type="button" class="btn btn-outline-danger btn-icon-text">
                                        <i class="mdi mdi-plus btn-icon-prepend"></i>
                                        Create Tasks
                                    </button>
                                </a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>Title</th>
                                        <th>Project</th>
                                        <th>Deadline</th>
                                        <th>Assigned</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $task->title }}</td>
                                            <td>{{ $task->project }}</td>
                                            <td>{{ $task->deadline }}</td>
                                            <td>{{ $task->assigned }}</td>
                                            <td>
                                                <div class="badge badge-success">{{ $task->status }}</div>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('tasks.show', $task->id) }}">
                                                        <button type="button" class="btn btn-inverse-primary btn-icon mx-2"
                                                            title="View">
                                                            <i class="mdi mdi-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('tasks.edit', $task->id) }}">
                                                        <button type="button" class="btn btn-inverse-dark btn-icon mx-2"
                                                            title="Edit">
                                                            <i class="mdi mdi-table-edit"></i>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="btn btn-inverse-danger btn-icon mx-2"
                                                            title="Delete" data-toggle="modal" data-target="#deleteModal"
                                                            data-id="{{ $task->id }}">
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
                                    {{ $tasks->links() }}
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
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Swadesh
                        Properties 2024</span>
                </div>
            </div>
        </footer>
    </div>
</div>
@include('layout.footer')


<!-- Include the Delete Modal -->
@include('partials.delete_modal')



<script>

    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var action = '{{ route("tasks.destroy", ":id") }}';
        action = action.replace(':id', id);
        $('#deleteForm').attr('action', action);
    });

</script>