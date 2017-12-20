@extends('layouts/mainLayout')

@section("content")

    <div class="row col-md-6">
        @foreach($messages as $messsage)

        <div class="row">
            <div class="col-sm-2">
                <div class="thumbnail">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </div>
            </div>
            <div class="col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{$messsage->username}}</strong> <span class="text-muted">Posted at {{$messsage->created_at->format('d-m-Y')}}</span>
                    </div>
                    <div class="panel-body">
                        {{$messsage->content}}
                    </div>
                </div>
            </div>
        </div>

        @endforeach
    </div>
    <div class="col-md-6">
        <div class="row">
            @if(Session::has('success message'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ Session::get('success message') }}
                </div>
            @endif
            {!! Form::open(['route' => 'message.store' , 'class'=>'col-md-6']) !!}
            <div class="form-group  {{ $errors->has('username') ? 'has-error' : ''}}">
                {!!  Form::label('username', 'Username') !!}
                {!!  Form::text('username',null,['class' => 'form-control  ','placeholder' => 'Username'])!!}
                @if($errors->has('username'))
                    <div class="help-block">{{ $errors->first('username') }}</div>
                @endif
            </div>
            <div class="form-group   {{ $errors->has('email') ? 'has-error' : ''}} ">
                {!!  Form::label('email', 'Email') !!}
                {!!  Form::text('email',null,['class' => 'form-control  ','placeholder' => 'example@gmail.com'])!!}
                @if($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : ''}} ">
                {!!  Form::label('content', 'Message') !!}
                {!!  Form::textarea('content',null,['class' => 'form-control ','placeholder' => 'Your Message','rows'=>'3'])!!}
                @if($errors->has('content'))
                    <span class="help-block">{{ $errors->first('content') }}</span>
                @endif
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@endsection