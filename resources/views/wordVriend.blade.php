@extends('layouts.website')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h1 class="centerH1">Vriend worden?</h1>
                    <br>
                    <div class="text">
                        Ook in 2017 kunnen wij niet zonder onze vrienden.<br>
                        Met een kleine of grote vriendendonatie helpt u het Grafisch Atelier ook in 2017 weer aan de weg te timmeren. We hebben weer veel mooie plannen voor projecten, workshops en exposities.
                        Vrienden ontvangen in 2017 een grafisch vriendengeschenk van Alexia Pnevmatikos gratis!
                        <br><br>
                        Vriend van het GA ben je al vanaf € 45,- per jaar, maar een groter bedrag is meer dan welkom.
                        <br>
                        <p class="formRed">Vul alle verplichte velden in</p>
                        <p><form method="post"  id="userForm" enctype="multipart/form-data" action="https://www.gadenbosch.ga/vriend"><fieldset class="formFieldset">
                        <ol class="formContainer" id="rsform_1_page_0">
                            <li class="rsform-block rsform-block-naam">
                                <div class="formCaption">Naam<strong class="formRequired">*</strong></div>
                                <div class="formBody"><input type="text" value="" size="20"  name="form[Naam]" id="Naam"  class="rsform-input-box"/><span class="formClr"><span id="component1" class="formNoError">Vul uw naam in.</span></span></div>
                                <div class="formDescription"></div>
                            </li>
                            <li class="rsform-block rsform-block-adres">
                                <div class="formCaption">Adres<strong class="formRequired">*</strong></div>
                                <div class="formBody"><input type="text" value="" size="20"  name="form[Adres]" id="Adres"  class="rsform-input-box"/><span class="formClr"><span id="component23" class="formNoError">Voer uw adres in!</span></span></div>
                                <div class="formDescription"></div>
                            </li>
                            <li class="rsform-block rsform-block-postcode">
                                <div class="formCaption">Postcode<strong class="formRequired">*</strong></div>
                                <div class="formBody"><input type="text" value="" size="20"  name="form[Postcode]" id="Postcode"  class="rsform-input-box"/><span class="formClr"><span id="component24" class="formNoError">Voer uw postcode in!</span></span></div>
                                <div class="formDescription"></div>
                            </li>
                            <li class="rsform-block rsform-block-woonplaats">
                                <div class="formCaption">Woonplaats<strong class="formRequired">*</strong></div>
                                <div class="formBody"><input type="text" value="" size="20"  name="form[Woonplaats]" id="Woonplaats"  class="rsform-input-box"/><span class="formClr"><span id="component25" class="formNoError">Voer uw woonplaats in!</span></span></div>
                                <div class="formDescription"></div>
                            </li>
                            <li class="rsform-block rsform-block-email">
                                <div class="formCaption">E-mail<strong class="formRequired">*</strong></div>
                                <div class="formBody"><input type="text" value="" size="20"  name="form[Email]" id="Email"  class="rsform-input-box"/><span class="formClr"><span id="component3" class="formNoError">Voer uw e-mailadres in.</span></span></div>
                                <div class="formDescription"></div>
                            </li>
                        </ol>
                            </fieldset>
                            <input type="hidden" name="form[formId]" value="1"/></form></p>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
