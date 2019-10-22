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

<form action="{{ action('HomeController@storeSocial') }}" method="POST" class="form-container">
    @csrf

    <div class="form-field">
        <label for="social_type">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Social Media Type - facebook etc..">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Social Media Type:
        </label>
        <select name="social_type">
            <option value="facebook">Facebook</option>
            <option value="linkedin">LinkedIn</option>
            <option value="twitter">Twitter</option>
            <option value="instagram">Instagram</option>
        </select>
    </div>

    <div class="form-field">
        <label for="cta">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="CTA Preference - Message you want to send.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            CTA Preference:
        </label>
        <select name="cta">
            <option value="no button">No Button</option>
            <option value="apply now">Apply Now</option>
            <option value="book now">Book Now</option>
            <option value="contact us">Contact Us</option>
            <option value="download">Download</option>
            <option value="learn more">Learn More</option>
            <option value="send message">Send Message</option>
            <option value="request time">Request Time</option>
            <option value="see menu">See Menu</option>
            <option value="shop now">Shop Now</option>
            <option value="sign up">Sign Up</option>
            <option value="watch more">Watch More</option>
        </select>
    </div>

    <div class="form-field">
        <label for="ad_type">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Social Ad type - Images or Videos etc...">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Social Ad Type:
        </label>
        <select name="ad_type">
            <option value="single image">Single image</option>
            <option value="video">Video</option>
            <option value="carousel">Carousel</option>
            <option value="canvas">Canvas</option>
            <option value="collection">Collection</option>
            <option value="catalogue sales">Catalogue Sales</option>
            <option value="store visits">Store Visits</option>
        </select>
    </div>

    <div class="form-field">
        <label for="objective">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What is the main objective of the campaign.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Campaign Objective:
        </label>
        <select name="objective">
            <option value="brand awareness">Brand Awareness</option>
            <option value="reach">Reach</option>
            <option value="website traffic">Website Traffic</option>
            <option value="engagment">Engagment</option>
            <option value="app install">App Installs</option>
            <option value="video views">Video Views</option>
            <option value="lead generation">Lead Generation</option>
            <option value="messages">Messages</option>
            <option value="conversions">Conversions</option>
        </select>
    </div>

    <div class="form-field">
        <label for="page_name">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="The name of your social page">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Social Page Name:
        </label>
        <input type="text" name="page_name" value="{{ old('page_name') }}">
    </div>

    <div class="form-field">
        <label for="url_destination">
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What's your URL destination.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Main URL Destination:
        </label>
        <input type="text" name="url_destination" value="{{ old('url_destination') }}">
    </div>

    <br>&nbsp;<br>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What are you tying to target through the ad? (locations, audience interests etc...)">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Targeting
        </p>
        <textarea name="targeting" cols="30" rows="2" value="{{ old('targeting') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="What is the main copy/message for the ad?">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Main Copy
        </p>
        <textarea name="main_copy" cols="30" rows="6" value="{{ old('main_copy') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Headline copy per asset - Ideally 5 words in length.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Headlines per asset
        </p>
        <textarea name="headline" cols="30" rows="3" value="{{ old('headline') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Please provide links required - if tracking is required please also provide tracking links.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Links
        </p>
        <textarea name="links" cols="30" rows="3" value="{{ old('links') }}"></textarea>
    </div>

    <div class="form-field-col">
        <p>
            <span class="info" data-toggle="tooltip" data-placement="left" data-animation="true"
                title="Please upload/provide links to all assets that are required.">
                <img src="{{ asset('images/search_icon.png') }}" alt="Search Icon">
            </span>
            Assets
        </p>
        <textarea name="assets" cols="30" rows="3" value="{{ old('assets') }}"></textarea>
    </div>

    <div class="form-field">
        <button type="submit">Submit</button>
    </div>

</form>

<div class="asset-guide">

    <p>If you need an asset size for Social Media please click the below links</p>

    <div class="asset-guide__buttons">
        <a href="{{ asset('images/social/facebook.jpg') }}" target="_blank">Facebook</a>
        <a href="{{ asset('images/social/twitter.jpg') }}" target="_blank">Twitter</a>
        <a href="{{ asset('images/social/insta.jpg') }}" target="_blank">Instagram</a>
        <a href="{{ asset('images/social/link.jpg') }}" target="_blank">Linkedin</a>
        <a href="{{ asset('images/social/snap.jpg') }}" target="_blank">Snapchat</a>
        <a href="{{ asset('images/social/pin.jpg') }}" target="_blank">Pinterest</a>
        <a href="{{ asset('images/social/youtube.jpg') }}" target="_blank">Youtube</a>
    </div>

    <img src="{{ asset('images/social/instructions.jpg') }}" alt="Social Asset Size Instructions">

    <div class="instruction-block social">

        <p>Instructions on how to use and fill out above information</p>

        <ol>
            <li>Main Copy (recommended characters 80 or less)</li>
            <li>CTA (apply now, contact us, download, get showtimes, learn more, listen now, send message)</li>
            <li>Headline - per asset (ideal length - 5 words)</li>
            <li>Image (please specify image order, if applicable)</li>
            <li>Link (if tracking is required - please provide full url)</li>
            <li>Link Description</li>
        </ol>

    </div>

</div>

@endsection
