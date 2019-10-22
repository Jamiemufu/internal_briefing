@extends('layouts.default')
@section('content')

<div class="header">
    <h1>We have your basic informarion, we just need a little more...</h1>
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

<form action="{{ action('HomeController@setBasic') }}" method="POST" class="form-container">
    @csrf

    <div class="form-field">
        <label for="campaign_name">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Name of the Campaign.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Name:
        </label>
        <input type="text" name="campaign_name" value="{{ old('campaign_name') }}">
    </div>

    <div class="form-field">
        <label for="budget">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Total budget for entire duration of campaign.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Budget:
        </label>
        <input type="text" name="budget" value="{{ old('budget') }}">
    </div>

    <div class="form-field">
        <label for="budget_type">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Type of budget - Daily or Lifetime.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Budget Type:
        </label>
        <select name="budget_type">
            <option value="daily">Daily</option>
            <option value="lifetime">Lifetime</option>
        </select>
    </div>

    <div class="form-field">
        <label for="start_date">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Start date of the Campaign - must be after today.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Start Date:
        </label>
        <input type="date" name="start_date" value="{{ old('start_date') }}">
    </div>

    <div class="form-field">
        <label for="end_date">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="End date of the campaign - must be after the start date of the campaign">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign End Date:
        </label>
        <input type="date" name="end_date" value="{{ old('end_date') }}">
    </div>

    <div class="form-field">
        <label for="campaign_type">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Type of Campaign required. Social or PPC.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Type:
        </label>
        <select name="campaign_type">
            <option value="social">Social</option>
            <option value="ppc">PPC</option>
        </select>
    </div>

    <div class="form-field">
        <button type="submit">Submit</button>
    </div>
</form>

@endsection
