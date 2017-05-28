@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs">CMS >> Vacatures</div>
    </div>
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Educatie pagina's beheren</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('educatie.create') }}">Maak nieuwe pagina</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Actie</th>
            </tr>
            @foreach ($educaties as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('cms/newEducatie'), [$item->id] }}">Bewerk</a>
                        <a class="btn btn-danger" href="{{ url('cms/vacature/delete', [$item->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
