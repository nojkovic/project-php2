@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{isset($category)?"Edit category":"Add category"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" method="POST" action="{{isset($category)?route('updateCategories',['id'=>$category->id]):route('addCategories')}}">
                @csrf
                @if(isset($category))
                    @method("PATCH")
                @endif
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Name" value="{{isset($category)?$category->category:old('category')}}">
                </div>
                @if(isset($category))
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                @if($errors)
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja">{{isset($category)?"Edit category":"Add category"}}</button>
                {{--            <button class="btn btn-light">Cancel</button>--}}
            </form>
        </div>
    </div>
@endsection
