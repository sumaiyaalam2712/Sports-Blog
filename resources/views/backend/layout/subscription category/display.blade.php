@extends('backend.app')
@section('content')
    <div class="container">
        <br>
        <div class="card">
            <h5 class="card-header">Subscription Category</h5>

            <br>

            <div style="display: flex;justify-content: end;"><a href="{{ route('subscription.category.index') }}" class="btn btn-primary">Add
                    New Subscription Category</a></div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>

                            <th>Package Name</th>

                            <th>Package Category</th>


                            <th>Package Duration</th>
                            <th>Price</th>
                            <th>Package Savings</th>
                            <th>Description</th>

                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($datas as $data)
                            <tr>


                                <td>{{ $data['package_name'] }}</td>
                                <td>{{ $data['package_category'] }}</td>
                                <td>{{ $data['package_duration'] }}</td>
                                <td>{{ $data['rate'] }}</td>
                                <td>{{ $data['package_saving'] }}</td>



                                <td>{!! $data['description'] !!}</td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('subscription.edit', $data->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('subscription.delete', $data->id) }}"><i class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>



                            </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
    @endpush
@endsection
