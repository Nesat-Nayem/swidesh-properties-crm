@include('layout.header')
<div class="container-fluid page-body-wrapper">
    @include('crm.sidebar')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">Edit Product</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('products.index') }}">Products</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Product
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{ route('products.update', $product->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ $product->description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="rate">Rate</label>
                                            <input type="text" class="form-control" id="rate" name="rate" value="{{ $product->rate }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="unit">Unit</label>
                                            <input type="text" class="form-control" id="unit" name="unit" value="{{ $product->unit }}" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                                <option value="Category 1" {{ $product->category == 'Category 1' ? 'selected' : '' }}>Category 1</option>
                                                <option value="Category 2" {{ $product->category == 'Category 2' ? 'selected' : '' }}>Category 2</option>
                                                <option value="Category 3" {{ $product->category == 'Category 3' ? 'selected' : '' }}>Category 3</option>
                                                <option value="Category 4" {{ $product->category == 'Category 4' ? 'selected' : '' }}>Category 4</option>
                                                <option value="Category 5" {{ $product->category == 'Category 5' ? 'selected' : '' }}>Category 5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <!-- <button type="button" class="btn btn-light" onclick="window.location='{{ route('products.index') }}'">Cancel</button> -->
                                <button type="button" class="btn btn-light" >Cancel</button>
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
