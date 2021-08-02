<form class="ajax-form" method="post" action="{{ !empty($editRow) ? route('brand.update',$editRow->id) : route('brand.store') }}">
    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Brand ') }}</h4>
    </div>
    <div class="modal-body">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body">
                <!-- Name Start -->
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Brand Name" type="text" name="name" value="{{ !empty($editRow->name) ? $editRow->name : old('name') }}">
                    </div>
                </div>
                <!-- Name End -->

                <!-- Brand Image Start -->
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Select Brand Image" type="file" name="image">
                    </div>
                </div>
                <!-- Brand Image End -->

                <!-- Email Start -->
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Slug" type="text" name="slug" value="{{ !empty($editRow->slug) ? $editRow->slug : old('slug') }}">
                    </div>
                </div>
                <!-- Email End -->

                <!-- Phone No Start -->
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tablet-button"></i></i></span>
                        </div>
                        <input class="form-control" placeholder="Position No" type="number" name="position" value="{{ !empty($editRow->position) ? $editRow->position : old('position') }}">
                    </div>
                </div>
                <!-- Phone No End -->
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
