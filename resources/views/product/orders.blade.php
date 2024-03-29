@extends('layouts.website')
@section('panel-heading')

@endsection
@section('content')
    <?php
    $counter = 0;
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h3 style="text-align: center">Producten op bestelling</h3></div>

                    <div class="panel-body">
                        @if(Session::has('success'))
                            <div class="alert alert-success">De betaling is gelukt! Uw bestelling is geplaatst</div>
                        @elseif(Session::has('fail'))
                            <div class="alert alert-warning">Betaling is mislukt</div>
                        @endif
                        <table>


                            @foreach($products as $product)
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

                                            <br>
                                            <br>
                                            <?php
                                            $counter++;
                                            ?>
                                            @if($counter === 3)
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

                                                <br>
                                                <br>
                                                <?php
                                                $counter++;
                                                ?>

                                            </td>
                                    @if ($counter === 3)
                                        @php
                                            $counter = 0;
                                            echo "</tr>";
                                        @endphp
                                    @endif

                                @endif
                            @endforeach
                            @if($counter !=0 and (($counter % 3) != 0))
                                <?php
                                echo "</tr>";

                                ?>
                            @endif
                        </table>
                    </div>


                </div>

                @if($isAdmin == true)
                <div class="purchase">
                    <a href="{{route('/removeOrder')}}"
                       class="btn-success btn-lg" role="button">verwijder bestelling</a>
                </div>
                @endif
                <br>
            </div>
        </div>
    </div>
@endsection