@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-9 breadcrumb breadcrumbs"></div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h2>Shop</h2>
        </div>
        <div class="col-md-5 newbutton">
            <a href="{{ url('cms/newShopItem') }}"><input type="submit" value="Nieuw shop-item maken"  name="submit"></a>
        </div>
    </div>
    <div class="row">
        <div class="container">

            <table class="table">
                <thead>
                <tr>
                    <th class="col-md-1">Toon</th>
                    <th class="col-md-2">Prijs</th>
                    <th class="col-md-5">Titel</th>
                    <th class="col-md-5"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="checkbox toonbutton">
                            <label>
                                <input type="checkbox" value="">
                            </label>
                        </div>
                    </td>
                    <td>
                        Hier komt de prijs
                    </td>
                    <td>Hier komt de titel van het kunstwerk</td>
                    <td>
                        <a href="{{ url('cms/newShopItem') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox toonbutton">
                            <label>
                                <input type="checkbox" value="">
                            </label>
                        </div>
                    </td>
                    <td>
                        Hier komt de prijs
                    </td>
                    <td>
                        Hier komt de titel van het kunstwerk
                    </td>
                    <td>
                        <a href="{{ url('cms/newShopItem') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="checkbox toonbutton">
                            <label>
                                <input type="checkbox" value="">
                            </label>
                        </div>
                    </td>
                    <td>
                       Hier komt de prijs
                    </td>
                    <td>
                        Hier komt de titel van het kunstwerk
                    </td>
                    <td>
                        <a href="{{ url('cms/newShopItem') }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection