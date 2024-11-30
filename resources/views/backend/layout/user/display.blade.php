@extends('backend.app')
@section('content')
@push('scripts')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


@endpush

<div class="container">

<br>
        @if (session('success'))
        <div class="mt-3 alert alert-success">
            {{ session('success') }}
        </div>
    @endif

        <h2>All Users</h2>

        <table class="table table-bordered" id="data-table">

            <thead>

                <tr>

                    <th>No</th>

                    <th>Name</th>

                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Subscription Status</th>


                    <th width="100px">Action</th>

                </tr>

            </thead>

            <tbody>

            </tbody>

        </table>


</div>


@push('scripts')



{{-- Datatable --}}
<script src="{{ asset('backend/vendors/datatable/js/datatables.min.js') }}"></script>
{{-- sweet alart --}}
<script src="{{ asset('backend/vendors/sweetalert/sweetalert2@11.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        var searchable = [];
        var selectable = [];
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            }
        });
        if (!$.fn.DataTable.isDataTable('#data-table')) {
            let dTable = $('#data-table').DataTable({
                    order: [],
                    lengthMenu: [
                        [25, 50, 100, 200, 500, -1],
                        [25, 50, 100, 200, 500, "All"]
                    ],
                    processing: true,
                    responsive: true,
                    serverSide: true,

                    language: {
                        processing: `<div class="text-center">
                            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                          </div>
                            </div>`
                    },

                    scroller: {
                        loadingIndicator: false
                    },
                    pagingType: "full_numbers",
                    dom: "<'row justify-content-between table-topbar'<'col-md-2 col-sm-4 px-0'l><'col-md-2 col-sm-4 px-0'f>>tipr",
                    ajax: {
                        url: "{{ route('user.display') }}",
                        type: "get",
                    },

                    columns: [{
                            data: 'id',
                            name: 'id',
                            orderable: true,
                            searchable: true
                        },
                        {data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'email',
                        name: 'email',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'phone',
                        name: 'phone',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'address',
                        name: 'address',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'subscription_status',
                        name: 'subscription_status',
                        orderable: true,
                        searchable: true
                    },

                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

        new DataTable('#data-table', {
            responsive: true
        });
    }
    });



    // delete Confirm

        // Delete Button
        function deleteItem(id) {
            var url = '{{ route('user.delete', ':id') }}';
            var csrfToken = '{{ csrf_token() }}';
            $.ajax({
                type: "GET",
                url: url.replace(':id', id),
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(resp) {
                    console.log(resp);
                    // Reloade DataTable
                    $('#data-table').DataTable().ajax.reload();
                    if (resp.success === true) {
                        // show toast message
                        toastr.success(resp.message);

                    } else if (resp.errors) {
                        toastr.error(resp.errors[0]);
                    } else {
                        toastr.error(resp.message);
                    }
                }, // success end
                error: function(error) {
                    // location.reload();
                } // Error
            })
        }

</script>
@endpush
@endsection
