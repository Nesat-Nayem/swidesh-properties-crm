@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Task Details</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('tasks.index') }}">Tasks</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Task Details
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $task->title }}</h4>
                            <p class="card-description">
                                Details of the task
                            </p>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Title</td>
                                            <td>{{ $task->title }}</td>
                                        </tr>
                                        <tr>
                                            <td>Project</td>
                                            <td>{{ $task->project }}</td>
                                        </tr>
                                        <tr>
                                            <td>Deadline</td>
                                            <td>{{ $task->deadline }}</td>
                                        </tr>
                                        <tr>
                                            <td>Assigned</td>
                                            <td>{{ $task->assigned }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>{{ $task->status }}</td>
                                        </tr>
                                        <tr>
                                            <td>Description</td>
                                            <td>{{ $task->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4">
                                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit Task</a>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Task</button>
                                </form>
                                <a href="{{ route('tasks.index') }}" class="btn btn-light">Back to List</a>
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
