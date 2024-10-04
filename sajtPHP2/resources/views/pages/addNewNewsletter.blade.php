@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add new newsletter</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" method="POST" action="{{route('addNewsletter')}}">
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                @if($errors)
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja">Add newsletter</button>
                {{--            <button class="btn btn-light">Cancel</button>--}}
            </form>
        </div>
    </div>
@endsection
