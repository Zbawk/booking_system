@extends('layout')
@section('content')
<!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- DataTales Example -->
           <div class="card shadow mb-4">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Add Customer
                   <a href="{{url('admin/Customer')}}" class="float-right btn btn-success btn-sm">View all</a>
                   </h6>
               </div>
               <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                   <div class="table-responsive" >
                        <form method="post" enctype="multipart/form-data" action="{{url('admin/Customer')}}">
                            @csrf
                            <table class="table table-bordered">
                                    <tr>
                                        <th>Full name</th>
                                        <td><input name="full_name" type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <th>Email</th>
                                        <td><input name="email" type="email" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <th>Password</th>
                                        <td><input name="password" type="password" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <th>Mobile</th>
                                        <td><input name="mobile" type="text" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <th>Photo</th>
                                        <td><input name="photo" type="file"></td>
                                    </tr>

                                    <tr>
                                        <th>Address</th>
                                        <td><input name="address" class="form-control"></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" class="btn btn-primary"/>
                                        </td>
                                    </tr>
                                
                            </table>
                        </form>
                   </div>
               </div>
           </div>

    </div>
@endsection 