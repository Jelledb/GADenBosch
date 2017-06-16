@extends('layouts.website')



@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-heading"><h3 style="text-align: center">Producten</h3></div>

                    @include('partials.all-products')
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection