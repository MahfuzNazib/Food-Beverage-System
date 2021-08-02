<div>
    <div class="modal-header">
        <h4>Details of, {{ $category->name }}</h4>
    </div>

    <div class="modal-body">
        <table class="table table-sm table-bordered">
            <tr>
                <td>CategoryName</td>
                <td>{{ $category->name }}</td>

                <td>Position</td>
                <td>{{ $category->position }}</td>
            </tr>

            <tr>
                <td>Slug</td>
                <td>{{ $category->slug }}</td>
            </tr>

            <tr>
                <td>Offer Status</td>
                <td>
                    @if($category->offer_status == 1)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-danger">Inactive</span>
                    @endif
                </td>

                <td>Offer Amount</td>
                <td>{{ $category->offer_amount }}</td>
            </tr>
        </table>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>
