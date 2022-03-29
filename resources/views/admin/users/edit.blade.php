@extends('layouts.admin')
@section('content')

<div class="container-fluid">
<div class="row mt-5 col-md-10 offset-md-1">

            <div>
                <h1 class="display-4 mb-3">المؤلفين </h1>
            </div>





            <form action="{{route('admin.users.update', ['user'=>$users->id])}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

            <div class="form-group">
                <label for="first_name">first_name:</label>
                <input type="text" class="form-control" id="usr" name="first_name" value="{{ $users->first_name}}">
              </div>

                <div class="form-group">
                <label for="last_name">last_name:</label>
                <input type="text" class="form-control" id="usr" name="last_name" value="{{ $users->last_name}}">
              </div>

                <div class="form-group">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="usr" name="email" value="{{ $users->email}}">
              </div>

              <div class="form-group">
                <label for="usr">password:</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

                <div class="form-group">
                <label for="mobile_number">mobile_number:</label>
                <input type="number" class="form-control" id="usr" name="mobile_number" name="{{ $users->mobile_number}}">
              </div>
              <div class="form-group">
                <label for="usr">img_path:</label>
                <input type="file" class="form-control" id="img_path" name="img_path">
              </div>

              <input type="submit" class="btn btn-primary mt-3 btn-block" value="تعديل">

              <br>
              <hr>
              @if (session()->has('alert-success'))
                  <input type="submit" style="background: #011a25;background: #20a049;padding: 1%;font-size: 16px;"
                      class="btn btn-success save btn-large btn-block"
                      value="  {{ session()->get('alert-success') }}" />
              @endif
            </form>
        </div>
    </div>

@endsection
