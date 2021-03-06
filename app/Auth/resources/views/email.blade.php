@extends('auth::app')

@section('content')
    <p class="login-box-msg">{{ _ucwords(trans('auth::messages.email.title')) }}</p>

    {!! Form::open(['method' => 'post', 'route' => ['password.email']]) !!}
    {!! Form::openGroup('email', _ucwords(trans('validation.attributes.email'))) !!}
    {!! Form::text('email') !!}
    {!! Form::closeGroup() !!}

    <button type="submit" class="btn btn-primary btn-block btn-flat">
        {{ _ucwords(trans('auth::messages.email.actions.send')) }}
    </button>

    {!! Form::close() !!}

    <div class="login-actions">
        <a class="btn btn-default btn-block btn-flat" href="{{ route('login') }}">
            {{ _ucwords(trans('auth::messages.email.actions.back')) }}
        </a>
    </div>
@endsection
