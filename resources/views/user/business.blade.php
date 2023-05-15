<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .top-div {
            background: red;
            padding: 15px;
            padding-bottom: 5px;
        }

        .top-div .img-box {
            height: 160px;
            width: 160px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.4);
            margin: auto;
            margin-bottom: 5px;
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

        .top-div h4 {
            color: #fff;
        }

        h1,
        h2,
        h3 {
            margin-bottom: 5px;
            color: #fff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        p,
        ul,
        li {
            font-family: 'Montserrat', sans-serif;
        }

        .bottom-div {
            padding: 15px 0;
        }

        .bottom-div h3 {
            font-weight: bold;
            color: #000;
        }

        ul.icons {
            list-style-type: none;
            justify-content: space-between;
            text-align: center;
        }

        ul.icons li {
            display: inline-block;
            margin: 10px;
            text-align: center;
            justify-self: center;
        }

        .icon-box {
            height: 25px;
            width: 25px;
            border-radius: 10px;
            background: red;
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
            height: 110px;
            width: 110px;
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
            height: 25px;
            width: 25px;
            border-radius: 12px;
            background: red;
            color: #fff;
            text-align: center;
            padding: 12px;
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

        .py-1 {
            padding-top: 1em;
            padding-bottom: 1em;

        }

        .pb-0 {
            padding-bottom: 0;
        }

        .location {
            height: 60px;
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

        .footer {
            background: red;
            color: #fff;
            padding: 15px 25px;
            margin: 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .pull-left {
            float: left;
        }

        .pull-right {
            float: right;
        }

        .text-left {
            text-align: left !important;
        }

        .text-right {
            text-align: right !important;
        }

        .footer table {
            width: 100%;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .details {
            display: flex;
        }

        .services {
            width: 50%;
        }

        .products {
            width: 50%;
        }

        .services-products {
            width: 75%;
        }

        /* .services-pr */
    </style>
</head>

<body>
    <div class="">
        <div class="top-div">
            <div class="img-box" style="background-image: url({{ public_path($details->photo) }})"></div>
            <h2>{{$details->fname }}</h2>
            <h4>{{ $details->position}}</h4>
            <h3>{{ $details->cname}}</h3>
        </div>
        <div class="bottom-div">
            <ul class="mb-0 icons">
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
            <p class="mb-0 ">(CLICK ON ABOVE ICONS TO CONTACT ME)</p>
            <div class="text-center details">
                <table class="services-products">
                    <tbody>
                        <tr>
                            <td>
                                <h3 style="color:red;">Services</h3>
                                <ul>
                                    <li>Decoding</li>
                                    <li>Encription</li>
                                    <li>Decryption</li>
                                    <li>Flashing</li>
                                    <li>Phone reset</li>
                                </ul>
                            </td>
                            <td>
                                <h3 style="color:red;">Product</h3>
                                <ul>
                                    <li>Product 1</li>
                                    <li>Product 2</li>
                                    <li>Product 3</li>
                                    <li>Product 4</li>
                                    <li>Product 5</li>
                                    <li>Product 6</li>
                                    <li>Product 7</li>
                                    <li>Product 8</li>
                                    <li>Product 9</li>
                                    <li>Product 10</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
                                    <h3 style="color:black"><a href="{{$details->location}}" target="_blank"
                                            rel="noopener noreferrer"></a>{{$details->address}}</a></h3>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pb-0">
                <ul class="icons">
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
            <div class="footer">
                <table>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <a href="https://horizoninfolabs.com">
                                    <span>Click <b>here</b> to get your ISP</span>
                                </a>
                            </td>
                            <td class="text">
                                <a href="https://horizoninfolabs.com">
                                    <span>https://horizoninfolabs.com</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>