@extends('layouts.website')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h2 style="text-align: center">Voeg een product toe</h2></div>

                    <div class="panel-body">

                        <h2>Voeg een nieuw product toe</h2>
                        <hr/>

                        {!! Form::open(['url' => 'product', 'files' => true]) !!}
                        @include('partials.product-form', ['submitButtonText' => 'Create product'])
                        {!! Form::close() !!}

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

