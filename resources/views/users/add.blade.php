@extends('layouts.app')
@section('content')
<h3>{{ $title }}</h3>

<div class="row">
        <div class="col-md-12">
            <a href="/user/">
                <button class="btn btn-default"> Go Back </button>
            </a>
        </div>
    </div>

     <form action="/user" method="post">
        {{ csrf_field() }}
         <div class="form-group">
           <label for="name">Name</label>
         <input type="text" autocomplete="false" class="form-control" id="name" placeholder="Enter Name" name="name">
         </div>
         <div class="form-group">
           <label for="pwd">Number:</label>
         <input type="Number" class="form-control" autocomplete="false"  placeholder="Enter Number" name="number">
         </div>
         <div class="form-group">
             <label for="gender">Gender:</label>
             <select class="form-control" name="gender">
                 <option value="null">--Select Gender--</option>
                 <option value="male">MALE</option>
                 <option value="female">FEMALE</option>
             </select>
         </div>
         <div class="form-group">
             <label for="add">Address:</label>
             <input type="Address" class="form-control" autocomplete="false" placeholder="Enter Address" name="address">
         </div>
         <div class="form-group">
             <label for="dob">DoB:</label>
             <input type="date" class="form-control"  autocomplete="false" placeholder="Enter DoB" name="dob">
         </div>
         <button type="submit" class="btn btn-default">Submit</button>
       </form>
@endsection
