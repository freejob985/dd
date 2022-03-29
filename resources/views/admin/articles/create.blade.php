@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="display-4">اضافة المقالة</h1>
        <div class="mt-3">
            <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">تعين فئة</label>
                    <select name="category_id" class="form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <span class="invalid-feedback">المجالة مطلوب</span>
                </div>
                <div class="form-group">
                    <label for="cover_path">تعين غلاف المقالة</label>
                    <div class="custom-file">
                        <input type="file" name="article_cover" class="custom-file-input">
                        <label for="logo_path" class="custom-file-label"></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">أسم المقالة</label>
                    <input type="text" name="article_title"
                        class="form-control {{ $errors->has('article_title') ? 'is-invalid' : '' }}">
                    <span class="invalid-feedback">اسم المقالة مطلوب<span class="text-muted">(من حرفين الى 25
                            حرف)</span></span>
                </div>

                <div class="form-group">
                    <label for="name">محتوى المقالة</label>
                    <textarea name="article_content"
                        class="form-control {{ $errors->has('article_content') ? 'is-invalid' : '' }}"></textarea>
                    <span class="invalid-feedback">محتوى المقالة مطلوب<span class="text-muted">(من حرفين الى 25
                            حرف)</span></span>
                </div>
                <div class="form-group">
                    <label for="name">تعين مجالة</label>
                    <select name="magazine_id" class="form-control {{ $errors->has('magazine_id') ? 'is-invalid' : '' }}">
                        @foreach ($magazines as $magazine)
                            <option value="{{ $magazine->id }}">{{ $magazine->magazine_name }}</option>
                        @endforeach
                    </select>
                    <span class="invalid-feedback">المجالة مطلوب</span>
                </div>

                <div class="radio">
                    <label><input type="radio" name="optradio" checked value="1">اظهار المؤلف</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" value="0">عدم اظهار المؤلف</label>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="اضافة" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection
