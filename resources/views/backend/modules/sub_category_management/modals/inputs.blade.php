<form class="ajax-form" method="post"
    action="{{ !empty($editRow) ? route('sub-category.update',$editRow->id) : route('sub-category.store') }}">

    {{ csrf_field() }}
    @if(!empty($editRow))
    {{ method_field('PATCH') }}
    @endif

    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Sub Category ') }}</h4>
    </div>
    <div class="modal-body">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body">

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <select class="js-example-basic-single form-control" name="category_id">
                            <option selected disabled>Select Category</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if($editRow->id == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Name Start -->
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                        </div>
                        <input class="form-control" placeholder="Sub Category Name" type="text" name="name"
                            value="{{ !empty($editRow->name) ? $editRow->name : old('name') }}">
                    </div>
                </div>
                <!-- Name End -->
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
