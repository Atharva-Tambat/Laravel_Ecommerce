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
                <!-- <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body" style="width:fit-content">
                                        
                                        <form action="" method="post" >
                                            <div class="form-group">
                                                <label for="category" class="control-label mb-1">category</label>
                                                <input id="category" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                            </div>
                                            <div class="form-group has-success">
                                                <label for="category slug" class="control-label mb-1">category slug</label>
                                                <input id="category slug" name="category slug" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                    autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                            </div>
                                            
                                           
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            </div>
                            
                    </div>
                </div> -->
                {{session('message')}}
                    <div class="container">
                        <form action="{{url('manage_category_process')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="category" class="control-label mb-1">category_name</label>
                                                <input id="category" name="category" type="text" class="form-control" aria-required="true" aria-invalid="false"  required>
                                                
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