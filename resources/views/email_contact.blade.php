<h3>You have a new Contact via the contact form of your Portfolio</h3>

<p>Sent from {{ $email }}</p>

<div>
	<label>Name: {{ $name }}</label>
</div>

<div>
	<label>Message: {{ $bodyMessage }}</label>
	{{-- <p>
		{{ $bodyMessage }}
	</p> --}}
</div>
{{-- <p>Sent to {{ $to }}</p>
<img src="{{ URL::to($attach_file) }}"> --}}