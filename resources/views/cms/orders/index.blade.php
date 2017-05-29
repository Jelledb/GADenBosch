@extends('layouts.cms')

@section('content')
    <div>
        <div style="height: 60px;">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>Orders</h2>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>E-mail</th>
                <th>Telefoonnummer</th>
                <th>Postcode</th>
                <th>Straat</th>
                <th>Huisnummer</th>
                <th>Stad</th>
                <th>Producten</th>
            </tr>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order['id']}}</td>
                    <td>{{ $order['first_name'] }}</td>
                    <td>{{ $order['last_name'] }}</td>
                    <td>{{ $order['email'] }}</td>
                    <td>{{ $order['phone_number'] }}</td>
                    <td>{{ $order['zip_code'] }}</td>
                    <td>{{ $order['street'] }}</td>
                    <td>{{ $order['house_number'] }}</td>
                    <td>{{ $order['city'] }}</td>
                    <td>
                        <ul>
                            @foreach ($order['products'] as $product)
                                <li>{{ $product['name'] }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection