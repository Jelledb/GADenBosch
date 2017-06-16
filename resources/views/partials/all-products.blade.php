<?php
$counter = 0;
?>

<table>
    @foreach($products as $product)
        @if ($counter === 0)
            <tr>
                <td>
                    <h4 class="text-center"> {{ $product->name }} </h4>
                    <br/>

                    <a href="{{ url('product/'. $product->id) }}" class="product-image">{!! Html::image(asset("images/".$product->image)) !!}</a>
                    <br/>
                    {{ $product->description_short }}
                    <br/>
                    <br/>
                    € {{ $product->price }}
                    <br/>
                    <br>
                    <a href="{{route('product.addToCart',['id'=>$product->id])}}"
                       class="btn-success btn-lg" role="button">Zet in winkelwagen</a>
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
                        <h4 class="text-center"> {{ $product->name }} </h4>
                        <br/>
                        <a href="{{ url('product/'. $product->id) }}" class="product-image">{!! Html::image(asset("images/".$product->image)) !!}</a>

                        <br/>
                        {{ $product->description_short }}
                        <br/>
                        <br/>
                        € {{ $product->price }}
                        <br/>
                        <br>
                        <a href="{{route('product.addToCart', ['id'=>$product->id])}}"
                           class="btn-success btn-lg" role="button">Zet in winkelwagen</a>
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