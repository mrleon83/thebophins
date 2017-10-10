@extends('header')
@section('title' , ' - About Us')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<ul class="nav nav-tabs">
			<li class="nav-item active"><a class="nav-link" data-toggle="tab" href="#band">Band</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#adam">Adam</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timbass">Tim(bass)</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timgit">TIm(Guitar)</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="container">
<div class="tab-content">
  <div id="band" class="tab-pane fade in active">
		   <div class="row" style="color: #fff">
		   	<div class="col-md-4">
		   	<p>The Bophins were formed in 2012 by Adam, Tim (bass) and Lee (drums) with a love a for Garage/Punk/Glam. </p>

			<p>The line-up was together for two years and performed many gigs around the Midlands and recorded a 6 song EP which remains at the heart of their live set to this day. Following Lee's departure in 2014, the band decided to expand to a fuller sounding line-up and recruited Tim (Guitar) and Sylvie (drums) and promptly recorded their debut LP X-Ray Action, with an album launch at the world famous Hope and Anchor punk venue. </p>

			<p>The band played 100's of gigs around London and the Midlands and became a tight, high energy live act. Mid 2015 saw a change in personnel again following the sudden departure of Sylvie. With lots of gigs booked and time constraints on finding a drummer, Tim (Guitar) sat in as the sticks-man and the band reverted back all be it temporary to the 3 piece sound of the early days. Late 2015 welcomed Terry as permanent drummer which coincided with prestigious support slots with punk royalty, Vice Squad, The Vibrators, The Members and a place on the bill for Blank Generation Punk Festival. The band has gone from strength to strength since Terry's arrival and are in the best form of their lives as demonstrated in their blistering exciting unique live shows and their recently released genre defying 2nd album New Swag.</p>
			</div>
				<div class="col-md-8">
				<img src="images/bophinbandold.jpg" style="border-radius: 10px; border: 1px solid #fff; width: 100%">
			</div>
			</div>
		</div>

<div id="adam" class="tab-pane fade">
		<div class="row">
			<div class="col md-4">
				<img src="images/adambophin.jpg">
			</div>
			<div class="col mk-8" style="color:#fff" >
			<h3>Adam (Vocals/Guitar)</h3>
			<p>Adam is the main songwriter of the band, drawing lyrical ideas from comics and books. His preferred musical styles are; Punk, Glam rock, 60’s Garage and Rock N’ Roll. Adam draws influences from The New York Dolls, The Troggs, The Ramones, Richard Hell, Marc Bolan, The Equals and Chinnichap.</p>
			</div>
		</div>
</div>
</br>

<div class="tab-pane fade" id="timbass">
<div class="container">
		<div class="row">
			<div class="col md-4">
				<img src="images/timbassbophins.jpg" style="width:100%;">
			</div>
			<div class="col mk-8" style="color:#fff" >
			<h3>Tim (Bass)</h3>
			<p>Tim has 12 years experience as a bass player, he is an avid collector of vinyl from different genres which has a great impact on his bass playing style. Tim’s favourite bands are; Arthur Lee, The Who, The Rolling Stones and 60’s pop music. He cites Bill Wyman as his bass playing influence.</p>
			</div>
		</div>
	</div>
</div>
</br>

<div class="tab-pane fade" id="timgit">
	<div class="container" >
		<div class="row">
			<div class="col md-4">
				<img src="images/timgitbophins.jpg" style="width:100%;">
			</div>
			<div class="col mk-8" style="color:#fff" >
			<h3>Tim (Guitar)</h3>
			<p>Tim brings to the band 28 years experience as a guitarist, and 27 years gigging experience.  Tim fell in love with growly distorted guitars after hearing the B Side of Bohemian Rapsody which his brother had bought called “I’m in love with my car”. Tim has played with countless bands over the years including; Trauma, Durango 95 and Creech. </p>
			</div>
		</div>
	</div>
</br>
</div>
</div>
<!--

<div class="container">
	<div class="row" style="color:#fff" id="drums">
		<h3>Could it be you? (Drums)</h3>
		<p>The Bophins are looking for a new drummer - contact using the book the bophins page or facebook message </p>
	</div>
</div>
-->
@endsection


