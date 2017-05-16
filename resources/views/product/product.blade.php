@extends('layouts.website')



@section('content')



    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">

                    <div class="panel-heading"><h1 style="text-align: center">Products</h1></div>
                    @include('partials.all-products')
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection