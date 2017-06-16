@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Reserveringen beheren</h2>
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
                <th>Werkplaats</th>
            </tr>
            <tr>
                <td>
                <select class="form-group" name="workspace_name">
                    @foreach($workspaces as $workspace)
                        <option value="{{$workspace->id}}">{{$workspace->name}}</option>
                    @endforeach
                </select>
                </td>
            </tr>
            <tr>
                <td>
                    {{-- TODO::Data dat uit de select komt hierin stoppen.  --}}
                </td>
                <td>
                    {{-- Delete button hier --}}
                </td>
            </tr>

        </table>
    </div>
@endsection