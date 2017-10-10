@extends('header') 
@section('title' , ' - Book Us')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<form>
			<div class="form-group">
				<label name="name" style="color:#fff;margin-left:28%; width:25%">Name</label>
				<input id="name" name="name" class="form-contrrol">
			</div>
			<div class="form-group" >
				<label name="telephone" style="color:#fff;margin-left:28%; width:25%">Telephone Number</label>
				<input id="telephone" name="telephone" class="form-contrrol">
			</div>
			<div class="form-group">
				<label name="email" style="color:#fff;margin-left:28%; width:25%">Email</label>
				<input id="email" name="email" class="form-contrrol">
			</div>
			<div class="form-group">
				<label name="message" style="color:#fff;margin-left:28%; width:25%">Message</label>
				<input id="message" name="message" class="form-contrrol">
			</div>
			<div class="form-group">
				<label name="datetime" style="color:#fff;margin-left:28%; width:25%">Date/Time of Gig Offered</label>
				<input id="datetime" name="datetime" class="form-contrrol">
			</div>
			<input type="submit" value="Send Message" class="btn btn-success" style="margin-left:50%">
		</form>
		</div>
	</div>
</div>
@endsection