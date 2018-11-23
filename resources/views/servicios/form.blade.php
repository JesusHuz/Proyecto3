<div class="form-group {{ $errors->has('telefono') ? ' has-error' : '' }} ">
    {!! Form::label('telefono','Telefono') !!}

    {!! Form::select('telefono',

        ['200 minutos' => '200','400 minutos' => '400','600 minutos' => '600' ],
        null,
        [
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('telefono'))
        <span class="help-block">
            <strong>{{ $errors->first('telefono') }}</strong>
        </span>
    @endif

</div> 

<div class="form-group {{ $errors->has('internet') ? ' has-error' : '' }} ">
    {!! Form::label('internet','Internet') !!}

    {!! Form::select('internet',

        ['256 mb' => '256','512 mb' => '512','1024 mb' => '1024' ],
        null,
        [
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('internet'))
        <span class="help-block">
            <strong>{{ $errors->first('internet') }}</strong>
        </span>
    @endif

</div> 

<div class="form-group {{ $errors->has('cable') ? ' has-error' : '' }} ">
    {!! Form::label('cable','Cable') !!}

    {!! Form::select('cable',

        ['ladrillo' => 'ladrillo',' madera' => 'madera','paja' => 'paja' ],
        null,
        [
            'class' => 'form-control'
        ]
    ) !!}

    @if($errors->has('cable'))
        <span class="help-block">
            <strong>{{ $errors->first('cable') }}</strong>
        </span>
    @endif

</div> 


<div class="form-group">
<button type="submit" class="btn btn-primary">Guardar</button>
</div>


