@extends('layouts.website')
@section('panel-heading')

@endsection
@section('content')
    <?php
    $counter = 0;
    $totalprice = null;
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 style="text-align: center">Winkelwagen</h3></div>

                    <div class="panel-body">
                        <table>


                            @foreach($productsInCart as $product)
                                @if ($counter === 0)
                                    <tr>
                                        <td>
                                            <h1> {{ $product->name }} </h1>
                                            <br/>
                                            <a href="{{ url('product/'. $product->id) }}">{!! Html::image(asset("images/".$product->image)) !!}</a>
                                            <br/>
                                            {{ $product->description_short }}
                                            <br/>
                                            <br>
                                            <a href="{{route('product.remove',['id'=>$product->id])}}"
                                               class="btn-success btn-lg" role="button">remove</a>
                                            <br>
                                            <br>
                                            <?php
                                            $counter++;
                                            ?>
                                            @if($counter === 2)
                                                <?php $counter = 0; ?>
                                            @endif
                                        </td>

                                        @else
                                            <td>
                                                <h1> {{ $product->name }} </h1>
                                                <br/>
                                                <a href="{{ url('product/'. $product->id) }}">{!! Html::image(asset("images/".$product->image)) !!}</a>
                                                <br/>
                                                {{ $product->description_short }}
                                                <br/>
                                                <br>
                                                <a href="{{route('product.remove',['id'=>$product->id])}}"
                                                   class="btn-success btn-lg" role="button">remove</a>
                                                <br>
                                                <br>
                                                <?php
                                                $counter++;
                                                ?>

                                            </td>
                                            @if($counter === 2)
                                                <?php $counter = 0; ?>
                                    </tr>
                                @endif

                                @endif
                            @endforeach
                            @if(($counter % 3) != 0)

                            @endif
                        </table>
                    </div>
                    <div class="totalprice">

                        @foreach($productsInCart as $product)
                            <?php  $totalprice = $totalprice + $product->price ?>
                        @endforeach

                        Totale prijs: <label class="label label-default">{{$totalprice}}</label>


                    </div>

                    <div class="order-information">
                        <h4>Bestelinformatie</h4>
                        {!! Form::open(array('route' => 'product.purchase','method'=>'POST', 'files' => true)) !!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Voornaam:</strong>
                                    {!! Form::text('first_name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Achternaam:</strong>
                                    {!! Form::text('last_name', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>E-mail:</strong>
                                    {!! Form::text('email', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Telefoonnummer:</strong>
                                    {!! Form::text('phone_number', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Postcode:</strong>
                                    {!! Form::text('zip_code', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Straatnaam:</strong>
                                    {!! Form::text('street', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Huisnummer:</strong>
                                    {!! Form::text('city', null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Plaatsnaam:</strong>
                                    {!! Form::text('city', null, array('class' => 'form-control')) !!}
                                </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Bestel</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
