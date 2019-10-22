@extends('layouts.default')
@section('content')

<div class="header">
    <h1>Hi there! To start setting up your campaign we just need a few bits of info.</h1>
</div>

<br>
{{-- form errors --}}
@if ($errors->any())
<div class="errors alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ action('HomeController@setHome') }}" method="POST" class="form-container">
    @csrf

    <div class="form-field">
        <label for="client_name">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true" title="Clients Name">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Client Name:
        </label>
        <input type="text" name="client_name" value="{{ old('client_name') }}">
    </div>

    <div class="form-field">
        <label for="brief_date">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Date of initial briefing in - Date must today">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Briefing Date:
        </label>
        <input type="date" name="brief_date" value="{{ old('brief_date') }}">
    </div>

    <div class="form-field">
        <label for="brief_in_by">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Person or Department that is briefing it in.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Briefed in by:
        </label>
        <input type="text" name="brief_in_by" value="{{ old('brief_in_by') }}">
    </div>

    <div class="form-field">
        <label for="client_email">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Clients contactable email address.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Email Address:
        </label>
        <input type="email" name="client_email" {{ old('client_email') }}>
    </div>

    <div class="form-field">
        <label for="job_number">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Requested Job Number">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Job Number/Phase:
        </label>
        <input type="text" name="job_number" value="{{ old('job_number') }}">
    </div>

    <div class="form-field">
        <button type="submit">Submit</button>
    </div>
</form>

@endsection
