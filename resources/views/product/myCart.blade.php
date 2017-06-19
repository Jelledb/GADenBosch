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
                    <div class="panel-heading">Dashboard</div>


                    <div class="panel-heading"><h2 style="text-align: center">Winkelwagen</h2></div>

                    <div class="panel-body">
                        <table>


                            @foreach($productsInCart as $product)
                                @if ($counter === 0)
                                    <tr>
                                        <td>
                                            <h3> {{ $product->name }} </h3>
                                            <br/>
                                            <a href="{{ url('product/'. $product->id) }}">{!! Html::image(asset("images/".$product->image)) !!}</a>
                                            <br/>
                                            {{ $product->description_short }}
                                            <br/>
                                            <br>
                                            <a href="{{route('product.remove',['id'=>$product->id])}}"
                                               class="btn-success btn-lg" role="button">verwijder</a>
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
                                                <h3> {{ $product->name }} </h3>
                                                <br/>
                                                <a href="{{ url('product/'. $product->id) }}">{!! Html::image(asset("images/".$product->image)) !!}</a>
                                                <br/>
                                                {{ $product->description_short }}
                                                <br/>
                                                <br>
                                                <a href="{{route('product.remove',['id'=>$product->id])}}"
                                                   class="btn-success btn-lg" role="button">verwijder</a>
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

                        Totaalprijs: <label class="label label-default">{{$totalprice}}</label>


                    </div>
                    <br>
                    <div class="purchase">
                        <a href="{{route('product.purchase')}}"
                           class="btn-success btn-lg" role="button">koop</a>
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
