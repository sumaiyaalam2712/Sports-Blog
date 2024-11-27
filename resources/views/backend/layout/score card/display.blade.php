@extends('backend.app')
@section('content')
    <div class="container">
        <br>
        <div class="card">
            <h5 class="card-header">Score Card</h5>

            <br>

            <div style="display: flex;justify-content: end;"><a href="{{ route('score.index') }}" class="btn btn-primary">Add
                    New Score Card</a></div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>

                            <th>Sports Type</th>

                            <th>Team 1 Name</th>


                            <th>Team 2 Name</th>
                            <th>Team 1 Score</th>
                            <th>Team 2 Score</th>
                            <th>Team 1 Logo</th>
                            <th>Team 2 Logo</th>

                            <th>Winner</th>
                            <th>Match Time</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($datas as $data)
                            <tr>


                                <td>{{ $data['sports_type'] }}</td>
                                <td>{{ $data['team1_name'] }}</td>
                                <td>{{ $data['team2_name'] }}</td>
                                <td>{{ $data['team1_score'] }}</td>
                                <td>{{ $data['team2_score'] }}</td>


                                <td>


                                    <img src="{{ asset('backend/' . $data['team1_logo']) }}" alt="Avatar"
                                        class="rounded-circle" height="50px" width="50px" />

                                </td>

                                <td>


                                    <img src="{{ asset('backend/' . $data['team2_logo']) }}" alt="Avatar"
                                        class="rounded-circle" height="50px" width="50px" />

                                </td>
                                <td>{{ $data['winner'] }}</td>
                                <td>{{ $data['play_date'] }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('score.edit', $data->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="{{ route('score.delete', $data->id) }}"><i class="bx bx-trash me-1"></i>
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
