@extends('layout')
@section('page_title','Manage Category')
@section('container')

<div class="row" style="margin-left:25%">
    <h1>Category</h1>
    </div>    
    <div class="mb10" style="margin-left:25%">
        <a href="category">
        <button type="submit" class="btn btn-success">back
        </button>
        </a>
</div>

<div class="main-content">
               
                {{session('message')}}
                    <div class="container">
                        <form action="{{url('manage_coupon_process')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="title" class="control-label mb-1">Title</label>
                                                <input id="title" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                                                
                            </div>
                            <div class="form-group">
                            <label for="code" class="control-label mb-1">Code</label>  
                                                <input id="code" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                            </div>
                            <label for="value" class="control-label mb-1">Value</label>
                                                <input id="value" name="value" type="number" class="form-control" aria-required="true" aria-invalid="false"  required> 
                            </div>
                            <div class='form-button'>
                <input type='submit' name='login' class='btn btn-primary' value='submit' /><br>

            </div>
                          
                        </form>
                    </div>

            </div> 
            
            
        

@endsection