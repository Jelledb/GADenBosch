@extends('layouts.website')

@section('content')




    <?php
    $counter = 0;
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <table class="sponsors">
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
                                            <?php
                                            $counter++;
                                            ?>

                                        </td>
                                        @if($counter === 2)
                                            <?php $counter = 0; ?>
                                            </tr>

                                        @endif
                            @endif
                                @if((($counter % 3) != 0) and end($products))
                                    <?php echo "</tr>" ?>
                                @endif
                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
