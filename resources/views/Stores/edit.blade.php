@extends('layout/app')
@section('content')
    <h1>Edit store</h1>
@endsection
<div  class="col-sm-7" id="table">
    <table id="tblSales" class="table-bordered table-striped table table-bordered table-hover table-condensed">
        <tr>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
        
    </table>
</div>


{!! Form::open(['action'=>'SalesController@store','method'=>'POST']) !!}
    <div>
        <div class="form-group">

            {!! Form::label("cusName", "Customer Name", ["class"=>"col-sm-1 col-form-label"]) !!}
            <div class="col-sm-2">
                
            </div>
        </div>
        <div class="form-group">
            {!! Form::label("address", "Address", ["class"=>"col-sm-1 col-form-label"]) !!}
            <div class="col-sm-5">
                
            </div>
        </div>
        <div class="form-group">
            
            
        </div>
    </div>

    <div >
                <div class="form-group" >

            
            <div class="col-sm-5">
                
                
                
            </div>
        </div>
        

        
        
        

        

    </div>
    

{!! Form::close() !!}
</div>
    {{--  9343318one  --}}