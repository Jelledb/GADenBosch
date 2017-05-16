@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h1 style="text-align: center">Pas {{$product->name}} aan</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]]) !!}
                        @include('Desktop.Informatica jaar 2.Project GA.resources.views.webshop.partials.product-form', ['submitButtonText' => 'Update product'])
                        {!! Form::close() !!}

                        @include('errors.error-list')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

