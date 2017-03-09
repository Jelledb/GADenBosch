@extends('layouts.website)

@section('content')




    <?php
    $counter = 0;
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                        <br/>
                        <table>


                            @foreach($products as $product)
                                @if ($counter === 0)
                                    <tr>
                                        <td>
                                            <h1> {{ $product->name }} </h1>
                                            <br/>
                                            <?php echo '<img src="data:image/png;base64,' . base64_encode($product->image) . '"/>';  ?>
                                            <br/>
                                            {{ $product->discription }}
                                            <br/>
                                            <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn-success btn-lg" role="button"  >Add To Cart</a>
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
                                                <?php echo '<img src="data:image/png;base64,' . base64_encode($product->image) . '"/>';  ?>
                                                <br/>
                                                {{ $product->discription }}
                                                <br/>
                                                <a href="{{route('product.addToCart',['id'=>$product->id])}}" class="btn-success btn-lg" role="button"  >Add To Cart</a>
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
                                {{ "</tr>" }}
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
