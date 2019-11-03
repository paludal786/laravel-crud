@extends('layouts.app')
@section('content')
<h3><center>{{$title}}</center></h3>

    <div class="row">
        <div class="col-md-12 form-group">
                <a href="/user/add"><button class="btn btn-info pull-right"> Add User </button> </a>
        </div>
    </div>

    @if(count($users) > 0)

    <table class="table table-striped">
            <tr>
              <th>Name</th>
              <th>Number</th>
              <th>Gender</th>
              <th>Address</th>
              <th>DoB</th>
              <th>Action</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->number }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>
                        <a href="/user/edit/{{$user->id}}"><button class="btn btn-primary"> Edit </button> </a>
                        <a href="/user/delete/{{$user->id}}"><button class="btn btn-danger"> Delete </button> </a>
                    </td>
                </tr>
                @endforeach
        </table>
        {{$users->links()}}
    @else
          <p> No Records Found </p>
    @endif

@endsection
