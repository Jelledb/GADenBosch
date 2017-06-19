@extends('layouts.website')

@section('content')




    <?php
    $counter = 0;
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div>
                        <h2 class="centerH1">Sponsoren</h2>
                        <br />
                    </div>
                    <table class="sponsors">
                        @foreach($sponsors as $sponsor)
                            @if ($counter === 0)
                                <tr>
                                    <td>
                                        <h1 class="sponsorTitleH1"> {{ $sponsor->name }} </h1>
                                        <br/>
                                        <a href="http://{{ $sponsor->website }}" target="_blank"><img src="{{$sponsor->photo}}"/></a>
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
                                            <h2 class="sponsorTitleH1"> {{ $sponsor->name }} </h2>
                                            <br/>
                                            <a href="http://{{ $sponsor->website }}"><img src="{{$sponsor->photo}}"/></a>
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

                        @endforeach

                        @if((($counter % 3) != 0) and end($sponsors))
                            <?php echo "</tr>" ?>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>



@endsection
