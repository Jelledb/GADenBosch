<!-- Name Form Input -->
<div class="form-group">
    {!! Form::label('name', 'Naam product:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description_short Form Input -->
<div class="form-group">
    {!! Form::label('description_short', 'Beschrijving kort:') !!}
    {!! Form::text('description_short', null, ['class' => 'form-control']) !!}
</div>

<!-- Description_long Form Input -->
<div class="form-group">
    {!! Form::label('description_long', 'Beschrijving lang:') !!}
    {!! Form::textarea('description_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Form Input -->
<div class="form-group">
    {!! Form::label('price', 'Prijs:') !!}
    {!! Form::number('price', null, ['class' => 'form-control', 'pattern' => '[0-9]+([,\.][0-9]+)?']) !!}
</div>

<!-- Afbeelding Form Input -->
<div class="form-group">
    {!! Form::label('image', 'Afbeelding:') !!}
    {!! Form::file('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Alt Form Input -->
<div class="form-group">
    {!! Form::label('alt', 'Alt:') !!}
    {!! Form::text('alt', null, ['class' => 'form-control']) !!}
</div>



<!-- $submitButtonText Form Input -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>