@extends('backend.app')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        @if (session('error'))
            <div class="alert alert-success">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-xl">
                <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Create Match Highlights</h5>
                        <small class="text-muted float-end">Score Card</small>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('score.create') }}" method="POST" enctype="multiupart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Sports Type</label>
                                <select class="form-select" name="sports_type" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="Football">Football</option>
                                    <option value="BasketBall">BasketBall</option>
                                    <option value="VolleyBall">VolleyBall</option>
                                    <option value="Cricket">Cricket</option>
                                </select>
                                @error('sports_type')
                                    <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-1 Name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team1_name"
                                    placeholder="Team-1 Name" />
                            </div>
                            @error('team1_name')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-2 Name</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team2_name"
                                    placeholder="Team-2 Name" />
                            </div>
                            @error('team2_name')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-1 Score</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team1_score"
                                    placeholder="Team-1 Score" />
                            </div>
                            @error('team1_score')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-2 Score</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team2_score"
                                    placeholder="Team-2 Score" />
                            </div>
                            @error('team2_score')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-1 Logo</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team1_logo"
                                    placeholder="Team-1 Logo" />
                            </div>
                            @error('team1_logo')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Team-2 Logo</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="team2_logo"
                                    placeholder="Team-2 Logo" />
                            </div>
                            @error('team2_logo')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror



                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Winner Team</label>
                                <input type="text" class="form-control" id="basic-default-fullname" name="winner"
                                    placeholder="Winner Team" />
                            </div>
                            @error('winner')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror


                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Match Play Date</label>
                                <input type="date" class="form-control" id="basic-default-fullname" name="play_date"
                                    placeholder="Match Play Date" />
                            </div>
                            @error('play_date')
                                <strong><span style="color:darkslateblue">{{ $message }}</span></strong>
                            @enderror
                            <button type="submit" class="btn btn-primary">POST</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
