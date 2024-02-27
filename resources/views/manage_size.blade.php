@extends('layout')
@section('page_title','Manage Size')
@section('container')

<div class="row" style="margin-left:25%">
    <h1>Category</h1>
    </div>    
    <div class="mb10" style="margin-left:25%">
        <a href="size">
        <button type="submit" class="btn btn-success">back
        </button>
        </a>
</div>

<div class="main-content">
                {{session('message')}}
                    <div class="container">
                        <form action="{{url('manage_category_process')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="size" class="control-label mb-1">Size</label>
                                                <input id="size" name="size" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                                                
                            </div>
                            <div class="form-group">
                            <label for="categoryslug" class="control-label mb-1">categoryslug</label>
                                                <input id="categoryslug" name="categoryslug" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                            </div>
                            <div class='form-button'>
                <input type='submit' name='login' class='btn btn-primary' value='submit' /><br>

            </div>
                          
                        </form>
                    </div>

            </div> 
            
            
        

@endsection