<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


<div class="row">
    <div class="col-lg-6">
        <h4 class="mb-4 pb-4" style="border-bottom: 1px solid #000">Basic Details</h4>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="title">Lead Title*</label>
                    <input type="text" class="form-control" name="title" value="{{ old('title', $lead->title ?? '') }}" placeholder="Enter Lead Title">
                </div>
            </div>
            <div class="col-lg-2 col-6">
                <!-- <div class="form-group">
                    <label for="select">Select</label>
                    <select class="form-control" name="select">
                        <option>Mr.</option>
                        <option>Ms.</option>
                        <option>Mrs.</option>
                        <option>Dr.</option>
                    </select>
                </div> -->

                <!-- Assuming 'title_prefix' is the correct attribute name in your model -->
<div class="form-group">
    <label for="title_prefix">Select</label>
    <select class="form-control" name="title_prefix">
        <option value="Mr." {{ (old('title_prefix', $lead->title_prefix ?? '') == 'Mr.') ? 'selected' : '' }}>Mr.</option>
        <option value="Ms." {{ (old('title_prefix', $lead->title_prefix ?? '') == 'Ms.') ? 'selected' : '' }}>Ms.</option>
        <option value="Mrs." {{ (old('title_prefix', $lead->title_prefix ?? '') == 'Mrs.') ? 'selected' : '' }}>Mrs.</option>
        <option value="Dr." {{ (old('title_prefix', $lead->title_prefix ?? '') == 'Dr.') ? 'selected' : '' }}>Dr.</option>
    </select>
</div>


            </div>
            <div class="col-lg-5 col-6">
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" class="form-control" name="full_name" value="{{ old('full_name', $lead->full_name ?? '') }}" placeholder="Enter Full Name">
                </div>
            </div>
            <div class="col-lg-5 col-6">
    <div class="form-group">
        <label for="phone_type">Phone Type</label>
        <select class="form-control" name="phone_type">
            <option value="Hot Call" {{ old('phone_type', $lead->phone_type ?? '') == 'Hot Call' ? 'selected' : '' }}>Hot Call</option>
            <option value="Cold Call" {{ old('phone_type', $lead->phone_type ?? '') == 'Cold Call' ? 'selected' : '' }}>Cold Call</option>
        </select>
    </div>
</div>

            <div class="col-lg-6 col-6">
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" class="form-control" name="telephone" value="{{ old('telephone', $lead->telephone ?? '') }}" placeholder="Enter Telephone">
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email', $lead->email ?? '') }}" placeholder="Enter Email Address">
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="form-group">
                    <label for="lead_value">Lead Value ($)</label>
                    <input type="number" class="form-control" name="lead_value" value="{{ old('lead_value', $lead->lead_value ?? '') }}" placeholder="Enter Lead Value ($)">
                </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="form-group">
                    <label for="assigned">Assigned</label>
                    <input type="text" class="form-control" name="assigned" value="{{ old('assigned', $lead->assigned ?? '') }}" placeholder="Enter Name">
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="status">Select Status</label>
                    <select class="form-control" name="status">
    <option value="Converted" {{ (old('status', $lead->status ?? '') == 'Converted') ? 'selected' : '' }}>Converted</option>
    <option value="Qualified" {{ (old('status', $lead->status ?? '') == 'Qualified') ? 'selected' : '' }}>Qualified</option>
    <option value="Proposal Sent" {{ (old('status', $lead->status ?? '') == 'Proposal Sent') ? 'selected' : '' }}>Proposal Sent</option>
    <option value="Contacted" {{ (old('status', $lead->status ?? '') == 'Contacted') ? 'selected' : '' }}>Contacted</option>
    <option value="DisQualified" {{ (old('status', $lead->status ?? '') == 'DisQualified') ? 'selected' : '' }}>DisQualified</option>
</select>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6" style="border-left: 1px dotted #000">
        <h4 class="mb-4 pb-4" style="border-bottom: 1px solid #000">Details</h4>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="notes">Notes*</label>
                    <textarea name="notes" cols="30" rows="10" class="form-control">{{ old('notes', $lead->notes ?? '') }}</textarea>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="source">Select Source</label>
                    <select class="form-control" name="source">
                        <option>Yellow & Pages</option>
                        <option>Yahoo</option>
                        <option>Google</option>
                        <option>Facebook</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" name="category">
                        <option>Application Developer</option>
                        <option>Web Design</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <input type="text" class="form-control" name="tags" value="{{ old('tags', $lead->tags ?? '') }}" placeholder="Enter Tags">
                </div>
            </div>
            <div class="col-lg-6 col-12">
            <div class="form-group">
            <label for="last_contacted">Last Contacted</label>
            <input type="date" class="form-control" name="last_contacted" value="{{ old('last_contacted', optional($lead->last_contacted)->format('Y-m-d')) }}" placeholder="Enter Last Contacted">
            </div>
        </div>
        </div>
    </div>

    <div class="col-lg-6 pt-4" style="border-top: 1px dotted #000">
        <h4 class="mb-4 pb-4" style="border-bottom: 1px solid #000">More Information</h4>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="total_budget">Total Budget*</label>
                    <input type="number" class="form-control" name="total_budget" value="{{ old('total_budget', $lead->total_budget ?? '') }}" placeholder="Enter Total Budget">
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="target_date">Target Date*</label>
                    <input type="date" class="form-control" name="target_date" value="{{ old('target_date',optional( $lead->target_date ?? '')->format('Y-m-d')) }}">
                </div>
            </div>
            


            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="content_type">Content Type</label>
                    <select class="form-control" name="content_type">
                        <option>Article</option>
                        <option>Blog Post</option>
                        <option>Research</option>
                        <option>Production</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="brand_name">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" value="{{ old('brand_name', $lead->brand_name ?? '') }}" placeholder="Enter Brand Name">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 pt-4" style="border-top: 1px dotted #000; border-left: 1px dotted #000;">
        <h4 class="mb-4 pb-4" style="border-bottom: 1px solid #000">Address & Organisation Details</h4>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="company_name">Company Name*</label>
                    <input type="text" class="form-control" name="company_name" value="{{ old('company_name', $lead->company_name ?? '') }}" placeholder="Enter Company Name">
                </div>
            </div>
            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="street">Street*</label>
                    <input type="text" class="form-control" name="street" value="{{ old('street', $lead->street ?? '') }}" placeholder="Street">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="city">City*</label>
                    <input type="text" class="form-control" name="city" value="{{ old('city', $lead->city ?? '') }}" placeholder="City">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="state">State</label>
                    <select class="form-control" name="state">
                        <option>Maharashtra</option>
                        <option>Tamil Nadu</option>
                        <option>Karnataka</option>
                   
                        <option>Maharashtra</option>
                        <option>Tamil Nadu</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="zip_code">Zip Code</label>
                    <input type="text" class="form-control" name="zip_code" value="{{ old('zip_code', $lead->zip_code ?? '') }}" placeholder="Enter Zip Code">
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <label for="country">Country</label>
                    <select class="form-control" name="country">
                        <option>India</option>
                        <option>UK</option>
                    </select>
                </div>
            </div>

            <div class="col-lg-12 col-12">
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" name="website" value="{{ old('website', $lead->website ?? '') }}" placeholder="Enter Website">
                </div>
            </div>
        </div>
    </div>
</div>
