@extends('layouts.cms')

@section('content')

    <div class="row">
        <div class="col-md-12 breadcrumb breadcrumbs"></div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h2>Menu</h2>
        </div>
        <div class="col-md-3">

        </div>
    </div>
        <div class="row">
            <div class="col-md-3">
                <p>De naam van het menu item:</p>
                <input type="text">
            </div>
            <div class="col-md-9"></div>
        </div>
        <hr class="breeklijn"/>
        <div class="row">
            <div class="col-md-3">
                <input type="submit" value="Zet op de site" name="submit">
            </div>
            <div class="col-md-9"></div>
        </div>
    </form>
@endsection