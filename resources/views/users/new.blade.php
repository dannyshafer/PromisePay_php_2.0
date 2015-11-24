You hit users/new!

<h3>Create a user here</h3>

{!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('first_name', 'First Name:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name:') !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dob', 'DOB:') !!}
        {!! Form::text('dob', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::text('password', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address_line1', 'Address:') !!}
        {!! Form::text('address_line1', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('state', 'State:') !!}
        {!! Form::text('state', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('zip', 'Zip:') !!}
        {!! Form::text('zip', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('country', 'Country:') !!}
        {!! Form::text('country', null, ['class' => 'form-control']) !!}
    </div>

    <? echo Form::submit('Sign up!'); ?>

{!! Form::close() !!}