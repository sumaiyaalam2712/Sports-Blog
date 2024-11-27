@extends('backend.app')
@section('content')
    <div class="container">
        <br>
        <div class="card">
            <h5 class="card-header">Blogs</h5>

            <br>

            <div style="display: flex;justify-content: end;"><a href="{{ route('blog.index') }}" class="btn btn-primary">Add
                    New Blogs</a></div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>

                            <th>Headline</th>

                            <th>Sub-Headline</th>


                            <th>News Type</th>
                            <th>Sports Type</th>
                            <th>Image</th>
                            <th>Actions</th>
                            <th>Description</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($datas as $data)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $data['headline'] }}</strong>
                                </td>
                                <td>{{ $data['sub_headline'] }}</td>
                                <td>{{ $data['news_type'] }}</td>
                                <td>{{ $data['sports_type'] }}</td>

                                <td>
                                    @php
                                        $images = explode(',', $data['image']);
                                    @endphp
                                    <ul class="m-0 list-unstyled users-list avatar-group d-flex align-items-center">
                                        @foreach ($images as $image)
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="{{ asset('backend/' . $image) }}" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>


                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('blog.edit', $data->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('blog.delete', $data->id) }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                                <td>{!! $data['description'] !!}</td>
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
