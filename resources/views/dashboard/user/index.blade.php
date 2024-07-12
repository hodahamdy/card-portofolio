@extends('dashboard.sidebar')


@section('content')
<div class="row">
    <div class="col-md-12 py-5 pl-5 pr-5">
        <!-- DATA TABLE -->
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <a class="au-btn au-btn-icon au-btn--green au-btn--small" style="text-decoration: none"
                href="{{ route('dashboard.user.create') }}"><i class="zmdi zmdi-plus"></i> add user</a>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table id="example" class="table table-data2">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name in English</th>
                        <th>Name in Arabic</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $i => $user)
                        <tr class="tr-shadow">
                            <td>{{$user->id }}</td>
                            <td>{{$user->name_en }}</td>
                            <td>{{$user->name_ar }}</td>
                            <td>{{$user->email }}</td>
                            <td>{{$user->role }}</td>
                            <td>
                                <img class="card-img-top" src="{{ asset('Uploads/User/') }}/{{ $user->image }}" style="width:100px;height:100px;">
                            </td>
                            <td>
                               <div class="table-data-feature">
                                  {{--     <a href="{{ route('dashboard.user.edit', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a> --}}
                                    <a href="{{ route('dashboard.user.delete', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
    </div>
</div>

@endsection

