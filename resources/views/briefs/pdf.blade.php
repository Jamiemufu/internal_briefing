<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

{{-- for each as data is collection for reltationship --}}
@foreach ($briefs as $brief)

<head>
    <title>{{ $brief->client_name }} - {{ $brief->job_number }}</title>
    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .page-break {
            page-break-after: always;
        }

        table {
            width: 100%;
            background: #575C60;
            border: 2px solid orange;
        }

        td {
            padding: 10px;
            background: #575C60;
            border: 2px solid orange;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 15px;
            text-transform: capitalize;
        }

        .td-pad {
            padding-left: 30px !important;
        }

    </style>
</head>

<body>
    <div>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td style="border-right: none;">
                    <img src="images/team_itg.jpg" alt="" width="200">
                </td>
                <td style="border-left: none !important; text-align: center; font-size: 30px; font-weight: bolder;">
                    {{ $brief->client_name }} - {{ $brief->job_number }}
                </td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Client Name:</strong></td>
                <td class="td-pad">{{ $brief->client_name }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Job Number:</strong></td>
                <td class="td-pad">{{ $brief->job_number }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Client Email:</strong></td>
                <td class="td-pad">{{ $brief->client_email }}</td>
            </tr>

            <tr>
                <td class="td-pad" width="30%"><strong>Brief Date:</strong></td>
                <td class="td-pad">{{ $brief->brief_date }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Briefed In By:</strong></td>
                <td class="td-pad">{{ $brief->brief_in_by }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Campaign Name:</strong></td>
                <td class="td-pad">{{ $brief->campaign_name }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Budget:</strong></td>
                <td class="td-pad">{{ $brief->budget }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Budget Type:</strong></td>
                <td class="td-pad">{{ $brief->budget_type }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Start Date:</strong></td>
                <td class="td-pad">{{ $brief->start_date }}</td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>End Date:</strong></td>
                <td class="td-pad">{{ $brief->end_date }}</td>
            </tr>            
            <tr>
                <td class="td-pad" width="30%"><strong>Questions Sent:</strong></td>
                <td class="td-pad">
                    <strong> {{ $brief->questions_sent }} </strong>
                </td>
            </tr>            
            <tr>
                <td class="td-pad" width="30%"><strong>Estimate Approved:</strong></td>
                <td class="td-pad">
                    <strong> {{ $brief->estimate_approved }} </strong>
                </td>
            </tr>
            <tr>
                <td class="td-pad" width="30%"><strong>Comments:</strong></td>
                <td class="td-pad">
                    <strong> {{ $brief->comments }} </strong>
                </td>
            </tr>
        </table>
    </div>
    {{-- page break --}}
    <div class="page-break"></div>
    <div>
        {{-- if is social --}}
        @if(!is_null($brief->social))
        <div>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="border-right: none;">
                        <img src="images/team_itg.jpg" alt="" width="200">
                    </td>
                    <td style="border-left: none !important; text-align: center; font-size: 30px; font-weight: bolder;">
                        Brief Type: Social
                    </td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Reference Number:</strong></td>
                    <td class="td-pad">{{ $brief->social->id }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Social Type:</strong></td>
                    <td class="td-pad">{{ $brief->social->social_type }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Page Name:</strong></td>
                    <td class="td-pad">{{ $brief->social->page_name }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>URL Destination:</strong></td>
                    <td class="td-pad">{{ $brief->social->url_destination }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>CTA Text:</strong></td>
                    <td class="td-pad">{{ $brief->social->cta }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Targeting (audience, location etc):</strong></td>
                    <td class="td-pad">{{ $brief->social->targeting }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Main Copy:</strong></td>
                    <td class="td-pad">{{ $brief->social->main_copy }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Headline:</strong></td>
                    <td class="td-pad">{{ $brief->social->headline}}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Links:</strong></td>
                    <td class="td-pad">{{ $brief->social->links }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Assets:</strong></td>
                    <td class="td-pad">{{ $brief->social->assets }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Objective:</strong></td>
                    <td class="td-pad">{{ $brief->social->objective }}</td>
                </tr>
            </table>
        </div>
        @else
        {{-- if ppc --}}
        <div>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <td style="border-right: none;">
                        <img src="images/team_itg.jpg" alt="" width="200">
                    </td>
                    <td style="border-left: none !important; text-align: center; font-size: 30px; font-weight: bolder;">
                       Brief Type: PPC
                    </td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Reference Number:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->id }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Website URL:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->website_url }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>URL Destination:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->url_destination }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Ad Type:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->ad_type }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Number Of Ads:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->number_of_ads }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Analytics:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->analytics }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Format:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->format }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Objectives:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->objectives }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Assets:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->assets }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Main Offer:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->main_offer }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Headline 1:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->headline_1 }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Headline 2:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->headline_2 }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Headline 3:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->headline_3 }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Description 1:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->desc_1 }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Description 2:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->desc_2 }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>CTA:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->cta }}</td>
                </tr>
                <tr>
                    <td class="td-pad" width="30%"><strong>Site Extensions:</strong></td>
                    <td class="td-pad">{{ $brief->ppc->site_extensions }}</td>
                </tr>
            </table>
        </div>
        @endif
    </div>
</body>

@endforeach

</html>
