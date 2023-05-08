@extends('client.shared.master')
@section('content')
<div class="content_yield">
	@if (session('thanhcong'))
    <div class="alert alert-success">
        {{ session('thanhcong') }}
    </div>
	@endif
	{{ Form::open(['route'=>['reset.password',$user->id],'method'=>'put','class' => 'col-md-12 row']) }}
	<div class="col-md-6 m-auto">
		<h3 class="mt-3 mb-4 font-weight-bold" style="text-align: center;">Thay đổi thông tin người dùng</h3>
		<div class=" row">
			<div class="form-group col-lg-10 col-md-12 col-sm-12 mx-auto" style="">
				{{ Form::label('Tên người dùng: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('name', $user->name, [
					'class' => 'form-control',
					'placeholder'=>"Tên người dùng"
				])
				!!}
				<span class="text-danger">{{ $errors->first('name')}}</span>
				{{ Form::label('Password: ','',['class' => 'font-weight-bold']) }}
				{!! Form::text('password', '', [
					'class' => 'form-control',
					'placeholder'=>"Password",
				])
				!!}
				<span class="text-danger">{{ $errors->first('password')}}</span>
				<div class="form-group text-right" >
					{{ Form::submit('Lưu',['class' => 'font-weight-bold text-white btn btn-success mt-4']) }}
				</div>
			</div>
			{{-- <div class="form-group" style="margin-left: 60px;">
			</div> --}}
			
		</div>
	</div>
	{{ Form::close() }}
</div>
@endsection