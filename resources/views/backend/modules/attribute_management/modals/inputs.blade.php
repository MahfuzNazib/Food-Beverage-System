<form class="ajax-form" method="post"
    action="{{ !empty($editRow) ? route('attribute.update',$editRow->id) : route('attribute.store') }}">

    {{ csrf_field() }}
    @if(!empty($editRow))
    {{ method_field('PATCH') }}
    @endif
    
    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Attribute ') }}</h4>
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
                                <input class="form-control" placeholder="Attribute Name" type="text" id="name"
                                    name="name"
                                    value="{{ !empty($editRow->name) ? $editRow->name : old('name') }}">
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
                                <select class="form-control" name="is_active" id="is_active">
                                    @if(empty($editRow))
                                    
                                    <option selected disabled> Select Status </option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>

                                    @elseif(!empty($editRow->is_active == 1))

                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>

                                    @else

                                    <option value="0" selected>Inactive</option>
                                    <option value="1">Active</option>

                                    @endif
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
                                <th>Status</th>
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

            var is_active = $('#is_active').val();
            var status = $("#is_active option:selected").text();
            var name = $('#name').val();
            
            if (is_active && name) {
                var attributes = '<tr class="text-center">' +
                    '<td>' + name + '</td>' +
                    '<input type="hidden" value="' + name + '" name="name[]">' +
                    '<td>' + status + '</td>' +
                    '<input type="hidden" value="' + is_active + '" name="is_active[]">' +
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
