{!! Form::model($model, ['route' => 'user.store']) !!}
    <div class="form-group">
        <label for="name" class="control-label">Name:</label>
        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
    </div>
    <div class="form-group">
        <label for="email" class="control-label">E-Mail:</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
    </div>
{!! Form::close() !!}

{{-- 3209101608940005 --}}
{{-- 3209101709071287 --}}