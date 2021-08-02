<form class="ajax-form" method="post"
    action="{{ !empty($editRow) ? route('attribute.update',$editRow->id) : route('attribute.store') }}">
    <div class="modal-header">
        <h4>{{ (!empty($editRow) ? 'Edit, '. $editRow->name : 'Create New Attribute ') }}</h4>
    </div>
    <div class="modal-body">
        <div class="card bg-secondary border-0 mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Name Start -->
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <input class="form-control" placeholder="Attribute Name" type="text" id="name"
                                    name="name" value="{{ !empty($editRow->name) ? $editRow->name : old('name') }}">
                            </div>
                        </div>
                        <!-- Name End -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Values Start-->
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                                </div>
                                <input class="form-control" placeholder="Attribute Value" type="text" id="values"
                                    name="values"
                                    value="{{ !empty($editRow->values) ? $editRow->values : old('values') }}">
                            </div>
                        </div>
                        <!-- Values End -->
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-success float-left" id="add-value">Add</button>
                    </div>
                </div>

                <!-- Added Values List -->
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-sm table-bordered">
                            <thead class="text-center">
                                <th>Name</th>
                                <th>Values</th>
                                <th>Action</th>
                            </thead>

                            <tbody id="att_list">

                            </tbody>
                        </table>
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



<script type="text/javascript">
    $(document).ready(function () {

        // Add Row
        $('#add-value').on('click', function () {
            var name = $('#name').val();
            var values = $('#values').val();
            console.log(name + '---' + values);
            if (name && values) {
                var attributes = '<tr class="text-center">' +
                    '<td>' + name + '</td>' +
                    '<input type="hidden" value="' + name + '" name="name[]">' +
                    '<td>' + values + '</td>' +
                    '<input type="hidden" value="' + values + '" name="values[]">' +
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

            swal("", "Row Removed", "success");
        });


    })

</script>
