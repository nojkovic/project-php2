@extends('layouts.admin')
@section("contentMain")
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{isset($gallerie)? "Edit gallery":"Add new gallery"}}</h4>
            <p class="card-description">
                Basic form elements
            </p>
            <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{isset($gallerie) ? route('updateGalleries',['id'=>$gallerie->id]): route('addGalleries')}}">
                @csrf
                @if(isset($gallerie))
                    @method("PATCH")
                @endif
                <div class="form-group">
                    <label for="nameGall">Name</label>
                    <input type="text" class="form-control" id="nameGall" name="name" placeholder="Name" value="{{isset($gallerie)?$gallerie->name:old('name')}}">
                </div>
                <div class="form-group">
                    <label for="descriptionGall">Description</label>
                    <input type="text" class="form-control" id="descriptionGall" name="description" placeholder="Description" value="{{isset($gallerie)?$gallerie->description:old('description')}}">
                </div>
                <div class="form-group">
                    <label for="yearGall">Year</label>
                    <input type="text" class="form-control" id="yearGall" name="year" placeholder="Year" value="{{isset($gallerie)?$gallerie->year:old('year')}}">
                </div>
                <div class="form-group">
                    <label for="monthGall">Month</label>
                    <input type="text" class="form-control" id="monthGall" name="month" placeholder="Month" value="{{isset($gallerie)?$gallerie->month:old('month')}}">
                </div>
                @if(isset($gallerie->image))
                    <div class="form-group ">
                        <label for="imageTeam"> New Image</label>
                        <img alt="slika" width="200" src="{{asset('images').'/'.$gallerie->image}}">
                    </div>

                @endif
                <div class="form-group">
                    <label for="pictureGall">Image</label>
                    <input type="file" class="form-control" id="image" name="image" >
                </div>

                <div class="form-group">
                    <label for="categoryGall">Category</label>
                    <select name="id_category" id="categoryGall">
                        @if(isset($gallerie))
                        <option value="0">Choose...</option>
                            @foreach($category as $c)
                                @if($gallerie->id_category==$c->id)
                                <option value="{{$c->id}}" selected>{{$c->category}}</option>
                                    @else
                                        <option value="{{$c->id}}" >{{$c->category}}</option>
                                    @endif
                            @endforeach
                        @else
                            <option value="0">Choose...</option>
                            @foreach($category as $c)
                                    <option value="{{$c->id}}" >{{$c->category}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @if($errors)
                    @foreach($errors->all() as $e)
                        <p class="alert alert-danger">{{$e}}</p>

                    @endforeach
                @endif
                <button type="submit" class="btn btn-primary btn-Boja">{{isset($gallerie)? "Edit gallery":"Add gallery"}}</button>
                {{--            <button class="btn btn-light">Cancel</button>--}}
            </form>
        </div>
    </div>
@endsection
