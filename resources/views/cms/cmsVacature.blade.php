@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs">CMS >> Vacatures</div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2>Vacatures</h2>
        </div>
        <div class="col-md-5 newbutton">
            <a href="{{ url('cms/vacature/getcreate') }}"><input type="submit" value="Nieuwe vacature aanmaken"  name="submit"></a>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th class="col-md-1">Toon</th>

                    <th class="col-md-5">Titel</th>
                    <th class="col-md-6"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($vacatures as $vacature)
                <tr>
                    <td>
                        <div class="checkbox toonbutton">
                            <label>
                                {!! Form::model($vacature, ['method' => 'POST','url' => ['cms/vacature/toon', $vacature->id]]) !!}
                                @if($vacature->show === 1)
                                <input name="toon1" type="checkbox" value="1" checked>
                                    @else
                                    <input name="toon2" type="checkbox" value="1">
                                    @endif
                            </label>
                        </div>
                    </td>
                    <td>{{$vacature->title}}</td>
                    <td>
                        <a href="{{ url('cms/vacature/edit', [$vacature->id]) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="{{ url('cms/vacature/delete', [$vacature->id]) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <button type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
