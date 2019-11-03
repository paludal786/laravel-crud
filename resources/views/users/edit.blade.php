@extends('layouts.app')
@section('content')
       <h3>Edit User</h3>

       <div class="row">
           <div class="col-md-12">
               <a href="/user/">
                   <button class="btn btn-default"> Go Back </button>
               </a>
           </div>
       </div>

    <form action="/user/update/{{$edituser->id}}" method="post">
             {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" value="{{ $edituser->name }}" name="name">
            </div>
            <div class="form-group">
              <label for="number">Number:</label>
            <input type="Number" class="form-control" placeholder="Enter Number" value="{{$edituser->number}}" name="number">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select class="form-control" :selected="{{ $edituser->gender }}" name="gender">
                    <option value="">--Select Gender--</option>
                    <?php
                    $arr = ['male','female'];
                    ?>
                    @foreach($arr as $item)
                    <option value="{{ $item }}" @if($edituser->gender === $item) selected='selected' @endif> {{ strtoupper($item) }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="Address" class="form-control" placeholder="Enter Address" value="{{$edituser->address}}" name="address">
            </div>
            <div class="form-group">
                <label for="dob">DoB:</label>
                <input type="date" class="form-control" placeholder="Enter DoB" value="{{$edituser->dob}}" name="dob">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>

@endsection
