@extends('layouts.website')

@section('content')
    <?php
        $counter = 0;
    ?>


    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="centerH1">Vacatures</h2>
                <br>
                <div class="text">

                </div>
            </div>
        </div>
    </div>

            @foreach($vacatures as $vacature)
                @if($vacature->show == 1)
                @if($counter === 0)
                    <div class="row">
                @endif
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div id="item vacatureblok" class="nieuws-nu vacature">
                            <h2 class="arch">{{ $vacature->title}}</h2>
                            <div>{{ $vacature->short_description }}</div>
                            <div class="leetsmeer arch"><a href="{{url('/vacatures', [$vacature->id])}}">LEES VERDER &gt;</a></div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                        @if($counter != 0)
                            </div>
                            <?php
                                $counter =0;
                            ?>
                        @else
                            <?php
                                $counter =1;
                            ?>
                        @endif
                @endif
            @endforeach
            @if($counter == 1)
                </div>
            @endif

</div>





@endsection