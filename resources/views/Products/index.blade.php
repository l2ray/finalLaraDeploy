@extends('layout/app')
@section('content')
   
    <div class="container-fluid">
        <div class="table-responsive tbl">
                <h1 id="productListHeader">
                    Welcome to the section of the Application that List the Drugs in the System.
                    
                </h1>
            <table class="table table-bordered table-hover table-condensed">
                    <tr>
                        <th>Product Name</th>
                        <th>Product Unit Price</th>
                        <th>Quantity In Stock</th>
                        <th>Product Threshold</th>
                        <th>More Details</th>
                    </tr>
                    @foreach($pList as $p)
                    <tr>
                        <td>{{ $p->pName }}</td>
                        <td>{{ $p->pUnitPrice }}</td>
                        <td>{{ $p->pQuantity }}</td>
                        <td>{{ $p->treshHold }}</td>
                        <td><a href="/products/{{ $p->id }}" class="btn btn-primary">More Detail</a></td>
                    </tr>
                    
                    @endforeach
                </table>
    </div>
    </div>
    
@endsection