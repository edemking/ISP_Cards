<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .top-div {
            background: teal;
            padding: 15px;
            padding-bottom: 5px;
        }

        .top-div .img-box {
            height: 200px;
            width: 200px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.4);
            margin: auto;
            margin-bottom: 15px;
            background-size: cover;
            background-position: top center;
        }

        .top-div .img-box img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        h1 {
            font-weight: bold;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 5px;
            color: #fff;
        }

        .bottom-div {
            padding: 15px;
        }

        .bottom-div h3 {
            font-weight: bold;
            color: #000;
        }

        ul {
            list-style-type: none;
        }

        ul li {
            display: inline-block;
            margin: 10px;
        }

        .icon-box {
            height: 25px;
            width: 25px;
            border-radius: 10px;
            background: teal;
            color: #fff;
            text-align: center;
            margin-bottom: 10px;
            padding: 9px;
        }

        .icon-box img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        .icon-text {
            text-align: center;
            font-weight: bold;
            font-size: 8px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .py {
            padding-top: 3em;
            padding-bottom: 3em;
        }

        .bottom-div .img-box {
            height: 200px;
            width: 200px;
            margin: auto;
            margin-bottom: 15px;
        }

        .bottom-div .img-box img {
            height: 100%;
            width: auto;
            /* object-fit: contain;
            object-position: center; */
        }

        .icon-box.lg {
            height: 30px;
            width: 30px;
            border-radius: 15px;
            background: teal;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        .icon-box.lg img {
            height: 100%;
            width: 100%;
            object-fit: contain;
            object-position: center;
            margin: auto;
        }


        .icon-box.lg.last img {
            margin-top: 5px;
        }

        .py-2 {
            padding-top: 2em;
            padding-bottom: 2em;
        }

        .pb-0 {
            padding-bottom: 0;
        }

        .location {
            width: 80%;
            padding: 0 15px;
            text-align: center;
            align-content: center;
            margin: auto;
            position: relative;
        }

        .location-icon {
            position: relative;
        }

        .location-icon img {
            margin: auto;
        }

        .location-address {
            word-wrap: break-word;
            word-break: break-all;
        }

        table {
            text-align: center;
            justify-content: center;
            margin: auto;
        }

        table tr {
            text-align: center;
            justify-content: center;
        }

        table tr td {
            text-align: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="top-div">
            <div class="img-box" style="background-image: url({{ public_path($details->photo) }})"></div>
            <h1>{{$details->fname }}</h1>
            <h3>{{ $details->position}}</h3>
            <h2>{{ $details->cname}}</h2>
        </div>
        <div class="bottom-div">
            <ul>
                <li>
                    <a target="_blank" href="tel:+{{$details->pnumber}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/call.png') }}" alt=""></div>
                        <div class="icon-text">DIRECT LINE 1</div>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="tel:+{{$details->pnumber2}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/call.png') }}" alt=""></div>
                        <div class="icon-text">DIRECT LINE 2</div>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="tel:+{{$details->pnumber3}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/call.png') }}" alt=""></div>
                        <div class="icon-text">MOBILE</div>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="mailto:{{$details->email}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/email.png') }}" alt=""></div>
                        <div class="icon-text">EMAIL</div>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="api.whatsapp.com/message/send?phone=+{{$details->whatsapp}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/whatsapp.png') }}" alt=""></div>
                        <div class="icon-text">WHATSAPP</div>
                    </a>

                </li>
                <li>
                    <a target="_blank" href="{{$details->website}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/website.png') }}" alt=""></div>
                        <div class="icon-text">WEBSITE</div>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="{{$details->products}}">
                        <div class="icon-box"><img src="{{ public_path('/image/icons/products.png') }}" alt=""></div>
                        <div class="icon-text">PRODUCTS</div>
                    </a>
                </li>
            </ul>
            <h4>(CLICK ON ABOVE ICONS TO CONTACT ME)</h4>
            <div class="py-2 company-img">
                <div class="img-box"><img src="{{ public_path($details->company_logo) }}" alt=""></div>
            </div>
            <div class="location">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="location-icon"><img src="{{ public_path('/image/icons/location.png') }}"
                                        alt=""></div>
                            </td>
                            <td>
                                <div class="location-address">
                                    <h2 style="color:black"><a href="{{$details->location}}" target="_blank"
                                            rel="noopener noreferrer"></a>{{$details->address}}</a></h2>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="py-2 pb-0">
                <ul>
                    <li>
                        <a target="_blank" href="{{$details->facebook}}">
                            <div class="icon-box lg"><img src="{{ public_path('/image/icons/facebook.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{$details->instagram}}">
                            <div class="icon-box lg"><img src="{{ public_path('/image/icons/instagram.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{$details->linkedin}}">
                            <div class="icon-box lg"><img src="{{ public_path('/image/icons/linkedin.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{$details->twitter}}">
                            <div class="icon-box lg"><img src="{{ public_path('/image/icons/twitter.png') }}" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="{{$details->youtube}}">
                            <div class="icon-box lg last"><img src="{{ public_path('/image/icons/youtube.png') }}"
                                    alt="">
                            </div>
                        </a>

                    </li>
                </ul>
            </div>
            <div class="">
                <p><a href="mailto:thiranafricalimited@gmail.com">"To get your ISP -> POWERED BY THIRAN AFRICA"</a></p>
            </div>
        </div>
    </div>
</body>

</html>