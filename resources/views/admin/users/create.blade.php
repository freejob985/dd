@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row mt-5 col-md-10 offset-md-1">

            <div>
                <h1 class="display-4 mb-3">المؤلفين </h1>
            </div>

            <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">الأسم الأول:</label>
                    <input type="text" class="form-control" id="usr" name="first_name">
                </div>

                <div class="form-group">
                    <label for="last_name">الأسم الأخير:</label>
                    <input type="text" class="form-control" id="usr" name="last_name">
                </div>

                <div class="form-group">
                    <label for="email">البريد:</label>
                    <input type="email" class="form-control" id="usr" name="email">
                </div>

                <div class="form-group">
                    <label for="usr">الباسورد:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="mobile_number">الموبيل:</label>
                    <input type="number" class="form-control" id="usr" name="mobile_number">
                </div>
                <div class="form-group">
                    <label for="usr">الصورة:</label>
                    <input type="file" class="form-control" id="img_path" name="img_path">
                </div>
                <input type="submit" class="btn btn-primary mt-3 btn-block" value="اضافة">
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
