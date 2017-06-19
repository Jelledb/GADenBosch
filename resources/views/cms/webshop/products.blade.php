@extends('layouts.website')

@section('content')
    <?php
    $counter = 0;
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading"><h2 style="text-align: center">Product list</h2></div>

                    <div class="panel-body">
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
                                            <a href="{{url('/product/' . $product->id . '/edit')}}"
                                               class="btn-success btn-lg" role="button">Edit</a>
                                            {{ Form::open(['url' => ['product/'.$product->id], 'method' => 'delete']) }}
                                            <button type="submit" class="btn-success btn-lg" >Delete</button>
                                            {{ Form::close() }}

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
                                        <a href="{{url('/product/' . $product->id . '/edit')}}"
                                           class="btn-success btn-lg" role="button">Edit</a>
                                        {{ Form::open(['url' => ['product/'.$product->id], 'method' => 'delete']) }}
                                        <button type="submit" class="btn-success btn-lg" >Delete</button>
                                        {{ Form::close() }}
                                        <?php
                                        $counter++;
                                        ?>

                                    </td>
                                @endif

                                @if ($counter === 3)
                                    @php
                                        $counter = 0;
                                        echo "</tr>";
                                    @endphp
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
            </div>
        </div>
    </div>
@endsection