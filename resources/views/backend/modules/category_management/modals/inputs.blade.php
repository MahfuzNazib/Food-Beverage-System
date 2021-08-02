<form class="ajax-form" method="post"
    action="{{ !empty($editRow) ? route('category.update',$editRow->id) : route('category.store') }}">
    
    {{ csrf_field() }}
    @if(!empty($editRow))
    {{ method_field('PATCH') }}
    @endif
    
    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Category ') }}</h4>
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
                        <input class="form-control" placeholder="Category Name" type="text" name="name"
                            value="{{ !empty($editRow->name) ? $editRow->name : old('name') }}">
                    </div>
                </div>
                <!-- Name End -->

                <!-- Phone No Start -->
                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tablet-button"></i></i></span>
                        </div>
                        <input class="form-control" placeholder="Position No" type="number" name="position"
                            value="{{ !empty($editRow->position) ? $editRow->position : old('position') }}">
                    </div>
                </div>
                <!-- Phone No End -->

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tablet-button"></i></i></span>
                        </div>
                        <select class="form-control" name="offer_status">
                            <option selected disabled>Select Offer Status</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-3">
                    <div class="input-group input-group-merge input-group-alternative">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-tablet-button"></i></i></span>
                        </div>
                        <input class="form-control" placeholder="Offer Amount" type="number" name="offer_amount"
                            value="{{ !empty($editRow->offer_amount) ? $editRow->offer_amount : old('offer_amount') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
