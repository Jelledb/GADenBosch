@extends('layouts.cms')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h1 style="text-align: center">Pas {{$product->name}} aan</h1>
                    </div>

                    <div class="panel-body">

                        {!! Form::model($product, ['method' => 'PATCH', 'action' => ['ProductsController@update', $product->id]]) !!}
                        <!-- Name Form Input -->
                            <div class="form-group">
                                {!! Form::label('name', 'Naam product:') !!}
                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Description_short Form Input -->
                            <div class="form-group">
                                {!! Form::label('description_short', 'Beschrijving kort:') !!}
                                {!! Form::text('description_short', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Description_long Form Input -->
                            <div class="form-group">
                                {!! Form::label('description_long', 'Beschrijving lang:') !!}
                                {!! Form::textarea('description_long', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Price Form Input -->
                            <div class="form-group">
                                {!! Form::label('price', 'Prijs:') !!}
                                {!! Form::number('price', null, ['class' => 'form-control', 'pattern' => '[0-9]+([,\.][0-9]+)?']) !!}
                            </div>

                            <!-- Afbeelding Form Input -->
                            <div class="form-group">
                                {!! Form::label('image', 'Afbeelding:') !!}
                                {!! Form::file('image', null, ['class' => 'form-control']) !!}
                            </div>

                            <!-- Alt Form Input -->
                            <div class="form-group">
                                {!! Form::label('alt', 'Alt:') !!}
                                {!! Form::text('alt', null, ['class' => 'form-control']) !!}
                            </div>



                            <!-- $submitButtonText Form Input -->
                            <div class="form-group">
                                {!! Form::submit('Bewerk product', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

