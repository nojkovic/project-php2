@extends('layouts.admin')
@section('contentMain')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$rl? "Edit reservation line":"Add reservation line"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>

    <form class="forms-sample" action="{{ $rl? route('updateReservationLineA',['id'=>$rl->id]): route('addReservationLine') }}" method="post">
        @csrf
        @if($rl)

            @method('PATCH')
        @endif
        <div class="form-group">
            <label for="userAdmin">User</label>
            <select name="id_user" id="userAdmin" {{ ($rl) ? 'disabled' : '' }}>
                <option value="0" {{ (!$rl) ? 'selected' : '' }}>Choose..</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ ($rl && $userSel->id == $user->id) ? 'selected' : '' }}>
                        {{ $user->email }}
                    </option>
                @endforeach
            </select>
        </div>




        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" placeholder="Date" name="date" value="{{ $rl ? $rl->date : old('date') }}">
        </div>

        <div class="form-group">
            <label for="galleryAdmin">Gallery</label>
            <select name="id_gallery" id="galleryAdmin">
                <option value="0" {{ (!$rl) ? 'selected' : '' }}>Choose..</option>
                @foreach($gallery as $g)
                    <option value="{{ $g->id }}" {{ ($rl && $rl->gallery && $rl->gallery->id == $g->id) ? 'selected' : '' }}>
                        {{ $g->name }}
                    </option>
                @endforeach
            </select>
        </div>

        @if($errors)
            @foreach($errors->all() as $e)
                <p class="alert alert-danger">{{$e}}</p>

            @endforeach
        @endif
        <button type="submit" class="btn btn-primary btn-Boja" >{{$rl? "Edit reservation line":"Add reservation line"}}</button>
    </form>
        </div>
    </div>
@endsection
