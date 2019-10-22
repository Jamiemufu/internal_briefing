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

<form action="{{ action('HomeController@storePPC') }}" method="POST" class="form-container">
    @csrf

    <div class="form-field">
        <label for="website_url">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="The URL of the website.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Website URL:</label>
        <input type="text" name="website_url" value="{{ old('website_url') }}">
    </div>

    <div class="form-field">
        <label for="url_destination">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Main URL Destination.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Main URL Destination:</label>
        <input type="text" name="url_destination" value="{{ old('url_destination') }}">
    </div>

    <div class="form-field">
        <label for="number_of_ads">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Enter the total number of ads required">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Number of Ads/Campaigns:</label>
        <input type="text" name="number_of_ads" value="{{ old('number_of_ads') }}">
    </div>

    <div class="form-field">
        <label for="ad_type">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What type of ad is required? Search or Display.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Ad Type:</label>
        <select name="ad_type">
            <option value="search">Search</option>
            <option value="display">Display</option>
        </select>
    </div>

    <div class="form-field">
        <label for="analytics">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Do you require Google Analytics? Do we have access?">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Google Analytics:</label>
        <select name="analytics">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
    </div>

    <div class="form-field">
        <label for="format">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Format of ad? Search or Display">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Format:</label>
        <select name="format">
            <option value="search">Search</option>
            <option value="display">Display</option>
        </select>
    </div>

    <div class="form-field">
        <label for="objectives">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What are the main objectives of the social ad?">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Objectives:</label>
        <select name="objectives">
            <option value="lead generation">Lead Generation</option>
            <option value="increase brand awareness">Increase Brand Awareness</option>
            <option value="website traffic">Website Traffic</option>
            <option value="conversions">Conversions</option>
            <option value="sales">Sales</option>
            <option value="roi">ROI</option>
        </select>
    </div>

    <br>&nbsp;<br>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Please upload/provide links to all assets that are required.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Assets (Please provide a FTP link for the assets being used)
        </p>
        <textarea name="assets" cols="30" rows="3" value="{{ old('assets') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What is the main offer/message you are trying to put to potential customers?">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            What is the main offer/advertisment message?
        </p>
        <textarea name="main_offer" cols="30" rows="6" value="{{ old('main_offer') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="First Headline - Character limit of 30">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Headline 1 (max 30 characters)
        </p>
        <textarea name="headline_1" cols="30" rows="2" maxlength="30" value="{{ old('headline_1') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Second Headline - Character limit of 30.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Headline 2 (max 30 characters)
        </p>
        <textarea name="headline_2" cols="30" rows="2" maxlength="30" value="{{ old('headline_2') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Third Headline - Character limit of 30.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Headline 3 (max 30 characters)
        </p>
        <textarea name="headline_3" cols="30" rows="2" maxlength="30" value="{{ old('headline_3') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="First Description - Character limit of 90.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Description Line 1 (max 90 characters)
        </p>
        <textarea name="desc_1" cols="30" rows="2" maxlength="90" value="{{ old('desc_1') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
            title="Second Description - Character limit of 90.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Description Line 2 (max 90 characters)
        </p>
        <textarea name="desc_2" cols="30" rows="2" maxlength="90" value="{{ old('desc_2') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="CTA - Text to be shown on the Call To Action.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            CTA
        </p>
        <textarea name="cta" cols="30" rows="2" value="{{ old('cta') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Please provide all required site extensions.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Site Extensions
        </p>
        <textarea name="site_extensions" cols="30" rows="2" value="{{ old('site_extensions') }}"></textarea>
    </div>

    <div class="form-field">
        <button type="submit">Submit</button>
    </div>
</form>

<div class="asset-guide">

    <img src="{{ asset('images/ppc/instructions.jpg') }}" alt="Social Asset Size Instructions">

    <div class="instruction-block ppc">

        <p>Instructions on how to fill out this form below</p>

        <ol>
            <li>Headline 1,2,3
                <span>
                    (max characters - 30 per headline. Google now allow three headline options but may not always
                    display three. Therefore we need three examples of a headline)
                </span>
            </li>

            <li>Description Line 1 & 2
                <span>
                    (max characters - 90 per headline. Google now combine use and offer two descriptions for a longer
                    summary - please provide two)
                </span>
            </li>

            <li>Link
                <span>
                    (the link is used to direct users to the landing page, relevant to the add)
                </span>
            </li>

        </ol>

        <p>
            Please use this free tool to help you construct your PPC ad copy (headlines and descriptions). There is also
            options to add in site extenstions, If you would like to provide these.<br>&nbsp<br>
            www.karooya.com/explanded-text-ad-preview-tool
        </p>

    </div>

</div>

@endsection
