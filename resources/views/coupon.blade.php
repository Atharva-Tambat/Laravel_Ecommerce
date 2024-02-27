@extends('layout');
@section('page_title','Coupon')
@section('container')

<div class="row" style="margin-left:25%">
    <h1>Category</h1>
    </div>    
    <div class="mb10" style="margin-left:25%">
        <a href="{{url('manage_coupon')}}">
        <button type="submit" class="btn btn-success">Add coupon
        </button>
        </a>
    </div>

<div class="table-responsive m-b-40" style="margin-left:25%" >
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Code</th>
                                                <th>Value</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($data as $list)
                                       
                                            <tr>
                                                
                                                <td>{{$list->id}}</td>
                                                <td>{{$list->title}}</td>
                                                <td>{{$list->code}}</td>
                                                <td>{{$list->value}}</td>
                                                  
                                                <td>
                                                    <a href="{{url('delete/')}}/{{$list->id}}">
                                                    <button type="button" class="btn btn-danger">delete</button>
                                                    </a>
                                                    <a href="{{url('edit/')}}/{{$list->id}}">
                                                    <button type="button" class="btn btn-success">edit</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>

@endsection