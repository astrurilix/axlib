@extends('layouts.main', ['title' => 'Users'])

@section('css')
    <style>
        ul{
            list-style: none;
        }
        li.online::before, li.offline::before{
            content: "\2022";
            font-weight: 900;
            display: inline-block;
            width: 1em;
            margin-left: -2.25em;
        }

        li.online::before{
            color: rgb(0, 255, 0);
        }
    </style>
@endsection

@section('content')    
<div class="row">
    <div class="col">

      <div class="card">
        <div class="card-body">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Last Seen</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            @if (Carbon\Carbon::parse($user->last_online)->diffInMinutes() < 5)
                                <td><ul><li class="online">Online</li></ul></td>
                            @else
                                <td><ul><li class="offline">Offline <em>({{ \Carbon\Carbon::parse($user->last_online)->diffForHumans() }})</em></li></ul></td>
                            @endif
                            <td class="d-flex">
                                <a class="badge bg-info text-start me-2" href="{{ Request::segment(1) }}/{{ $user->id }}">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                                <a class="badge bg-primary text-start me-2" href="{{ Request::segment(1) }}/{{ $user->id }}/edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <a class="badge bg-danger text-start me-2" href="" id="delete">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>

    </div>
</div>
@endsection

@section('script')
    
@endsection