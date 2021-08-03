<form class="ajax-form" method="post"
    action="{{ !empty($editRow) ? route('attribute-category.update',$editRow->id) : route('attribute-category.store') }}">

    {{ csrf_field() }}
    @if(!empty($editRow))
    {{ method_field('PATCH') }}
    @endif
    
    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Attribute Category') }}</h4>
    </div>
    <div class="modal-body">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-6">
                        <!-- name Start-->
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <select class="form-control" name="attribute_id" id="attribute_id">
                                    <option selected disabled>Select Attribute</option>
                                    @foreach($attributes as $attribute)
                                    <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- name End -->
                    </div>

                    <div class="col-sm-4">
                        <!-- Name Start -->
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <select class="form-control" name="category_id" id="category_id">
                                    <option selected disabled>Select Category</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Name End -->
                    </div>

                    @if(empty($editRow))
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-success float-left" id="add-value">Add</button>
                    </div>
                    @endif
                </div>

                <!-- Added name List -->
                @if(empty($editRow))
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-sm table-bordered">
                            <thead class="text-center">
                                <th>Attribute</th>
                                <th>Category</th>
                                <th>Action</th>
                            </thead>

                            <tbody id="att_list">

                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>



<script type="text/javascript">
    $(document).ready(function () {

        // Add Row
        $('#add-value').on('click', function () {

            var attribute_id = $('#attribute_id').val();
            var attribute = $("#attribute_id option:selected").text();
            var category_id = $('#category_id').val();
            var category = $("#category_id option:selected").text();

            
            if (attribute_id && category_id) {
                var attributes = '<tr class="text-center">' +
                    '<td>' + category + '</td>' +
                    '<input type="hidden" value="' + category_id + '" name="category_id[]">' +
                    '<td>' + attribute + '</td>' +
                    '<input type="hidden" value="' + attribute_id + '" name="attribute_id[]">' +
                    '<td> <button class="btn btn-danger btn-sm delete-row">X</button> </td>'
                '</tr>'

                $("#att_list").append(attributes);
            } else {
                swal("", "Input field must be required", "error");
                return false;
            }
        })

        // Delete Row
        $('#att_list').on('click', '.delete-row', function () {
            var currentRow = $(this).closest("tr");
            $(this).closest('tr').remove();

            swal("", "Item Removed", "success");
        });
    })

</script>
