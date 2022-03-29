@extends('layouts.admin')
@section('content')

    <div class="container-fluid">
        <div class="row mt-5 col-md-10 offset-md-1">
            <a type="submit" class="btn btn-secondary" href="{{ route('admin.users.create') }}">
                اضافة
            </a>
            <div>
                <h1 class="display-4 mb-3">المؤلفين </h1>
            </div>
            @if (count($users) > 0)
                <table class="table table-striped"">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>اسم الكاتب</th>
                            <th>البريد الالكتروني</th>
    {{-- <th>مشرف\كاتب</th> --}}
                            <th>مسح</th>

                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $user)
                    <tr>
                        <td style="
                            width: 30%;
                        "><img src="{{ Request::root() }}/images/user/{{ $user->img_path }}" style="width: 21%;"
                                class="img-thumbnail img-responsive" alt="Cinque Terre"> </td>

                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        {{-- <td>
                            <a type="submit" class="btn btn-secondary"
                                href="{{ route('admin.users.edit', ['id' => $user->id]) }}">
                                <i class="far fa-edit"></i>
                            </a>
                        </td> --}}
                        <td>
                            <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-times"></i> مسح</button>
                            </form>
                        </td>
                    </tr>
            @endforeach
            </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection
