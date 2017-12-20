@extends('layouts/mainLayout')

@section("content")

    <div class="">

    </div>
    {!! Form::open(['url' => 'Message.store']) !!}
        <div class="form-group col-md-4">
            {!!  Form::label('username', 'Username') !!}
            {!!  Form::text('username',null,['class' => 'form-control  ','placeholder' => 'Username'])!!}
        </div>
        <div class="form-group col-md-4 ">
            {!!  Form::label('email', 'Email') !!}
            {!!  Form::text('email',null,['class' => 'form-control ','placeholder' => 'example@gmail.com'])!!}
        </div>
        <div class="form-group col-md-4 ">
            {!!  Form::label('content', 'Message') !!}
            {!!  Form::textarea('content',null,['class' => 'form-control ','placeholder' => 'Your Message','rows'=>'3'])!!}
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>
    {!! Form::close() !!}


@endsection