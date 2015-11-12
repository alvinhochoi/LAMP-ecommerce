<html>
<head>
    <meta charset = 'utf-8'>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myCarousel').carousel({
                interval: 10000
            })
        });
    </script>
    <style>
        body{
            background-image: url(http://i.imgur.com/gAaJAl7.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        div.container label, div.container h1, div.container h2, div.container h3, div.container p{
            color: gray;
        }

        div.container h2.team, div.container h2.team2{
            font-family: marker felt;
            color: #B80000;
            position: relative;
            bottom: 60px;
        }

        div.container h2.team2{
            position: relative;
            right:140px;
        }

        div.container h2.rocket{
            font-family: arial black;
            font-size: 120px;
            color: #B80000;
            position: relative;
            right: 60px;
            bottom:58px;
        }

        div.container h2{
            font-size: 80px;
            color: yellow;
            display: inline-block;
            text-align: center;
            margin-left: 70px;
            position: relative;
            bottom: 80px;
        }

        h3.motto{
            text-align: right;
            position: relative;
            right: 200px;
            bottom: 100px;
        }

        div.container{
            width: 1000px;
            min-height: 300px;
        }

        div.container h1{
            margin-top: 30px;
        }

        h1.feature{
            position: relative;
            bottom: 65px;
            left: 30px;
        }

        #all_inventory{
            position: relative;
            left: 420px;
        }

/*----------------Carousel CSS----------------*/
        .carousel-control{
            padding-top:10%;
            width:5%;
        }

/*-----------------TABS CSS-------------------*/
        body{ padding-top: 60px; }

        .nav.nav-justified > li > a { position: relative; }

        .nav.nav-justified > li > a:hover,
        .nav.nav-justified > li > a:focus{ background-color: transparent; }

        .nav.nav-justified > li > a > .quote{
            position: absolute;
            left: 0px;
            top: 0;
            opacity: 0;
            width: 30px;
            height: 30px;
            padding: 5px;
            background-color: #13c0ba;
            border-radius: 15px;
            color: #fff;
        }

        .nav.nav-justified > li.active > a > .quote { opacity: 1; }

        .nav.nav-justified > li > a > img{ box-shadow: 0 0 0 5px #13c0ba; }

        .nav.nav-justified > li > a > img{
            max-width: 100%;
            opacity: .3;
            -webkit-transform: scale(.8,.8);
                    transform: scale(.8,.8);
            -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .nav.nav-justified > li.active > a > img,
        .nav.nav-justified > li:hover > a > img,
        .nav.nav-justified > li:focus > a > img{
            opacity: 1;
            -webkit-transform: none;
                    transform: none;
            -webkit-transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    transition: all 0.3s 0s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .tab-pane .tab-inner{ padding: 30px 0 20px; }

        @media (min-width: 768px){
            .nav.nav-justified > li > a > .quote {
                left: auto;
                top: auto;
                right: 20px;
                bottom: 0px;
            }
        }

        div.containertext-center{ margin-bottom: 300px; }

        .rows{ margin-top: 20px; }
    </style>

</head>

<body>

<div class='container'>
    <h1>Welcome to...</h1>
    <h2 class='team'>Team</h2>
    <h2 class='rocket'>R</h2>
    <h2 class='team2'>ocket</h2>
    <h2 class='store'>>Poké Store</h2>
    <h3 class='motto'>...We steal to give you a deal!!</h3>

    <h1 class='feature'>Featured Pokémon</h1>
    <div class="col-md-12">

        <div class="well">
            <div id="myCarousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/009.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/025.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/029.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/067.png" alt="Image" class="img-responsive"></a></div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/012.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/016.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/051.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/093.png" alt="Image" class="img-responsive"></a></div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/094.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/064.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/115.png" alt="Image" class="img-responsive"></a></div>
                            <div class="col-sm-3"><a href="#x"><img src="/uploads/146.png" alt="Image" class="img-responsive"></a></div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> 
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
            <!--/myCarousel-->
        </div>
        <!--/well-->
    </div>

    <form class ='all_inventory' action='products/product_page' method='post'>
        <input id='all_inventory' type='submit' class='btn-lg btn-primary' value='See all Inventory'>
    </form>

    <div class="containertext-center">
    <div class="rows">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3" role="tabpanel">
            <div class="col-xs-4 col-sm-12">
                <!-- Nav tabs -->
                <ul class="nav nav-justified" id="nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
                            <img class="img-circle" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTEhQTExISFRQXGB4bGBgYGRwaGhocHhobFxwfIhgbHSggHRolHBgVITchJSwrLi4uGB8zODMsNygtLisBCgoKDg0OGhAQGywkICUsLCwsLCwsLC0sLCwsLCwsLCwsLCwtLCwsLCwsLCssNjcsLCw3KywsLDc3LCssLCsrK//AABEIAHgAeAMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAMEBgcBAgj/xAA5EAABAgQDBQYEBAcBAQAAAAABAhEAAwQhBRIxBkFRYXETIoGRocEjMrHwQlJy0QcUFTNi4fFDkv/EABkBAAMBAQEAAAAAAAAAAAAAAAECAwQABf/EACIRAAICAgICAgMAAAAAAAAAAAABAhEDIRIxEyJBUQRhkf/aAAwDAQACEQMRAD8AqaJk0H+0rziSKic39j1MEv6GH/uTTb80PytnkF+/N/8As8Iy+dlPCgTIqZpNpCfOJdHTrSFqWls5JYRPlbNynS5mXH5jDlXs7JSl2Xv/ABK/eBPI5KgxgouwdjCQESVcFpPhYQLxraqWPhyk9oQ4KnZPDXfArbOrlBSZMgfKPiKclz+UdN/WANOgs7WfSBHEqtj8n0h+ZWTlkAqPICwjuS5zqLjjpw1eHZByAkkpVuZAV9WA63iLUqe5d97n2aKUhdjpIJGVZD7ns/B490mJKljKQ6X8fu8C4ly5meyteMFpC7YWkKCpU1n1cGPFIfjyHG5usCF5pZIcgHVt8S8Nn/Fli/zQrjSG5dINYyB2aWfUvEjBVAyFglnQweKzXz1Fah3rE749ycRWkAABhxgxtLROSvTOYkglRLaCOQ9/VZvAeUKD5J/S/o/GNdmky8akZj8Qac4kSMbkOe/uGiT+0E5EsZ9AO7wghRyXUqw0EZ0ijYDRjcnLbObEWQo+0QNpdoUJkKyiYDlIcoUA5sNRF1opbpbmYpP8Yl5KeUl2zTPFgCf2h1ERsyZBc/WDdME5bvlFy2vICB+FYYuYSpI7qbknzAi/7J4WUoNmzb94HLh15Q2WVFcGPl2V7DqdU0/IEo0BNgONz9YmHDZbHJlWRqohwOg9ovsnZmWsvYAcnfqTrDk7YJCg5mMTwS3mQesRTkzS4QWjJZuFDOACN/hwfhHpeD91C0j9Vra2MaQrYlEoXUSN7b4Yq6EJtlAGViBw4c4PkaA8MaMwxFAKQzFrH29x4c4WEkd3iFj6w7i9EUExFwk98DmIt3ExPUifXqCZmUByq/nHpSWdwzax6rKdZndoFIBTo8NzZClFRVNlurWJ8o8UdxlZ7kpKvlDxyO0uaX8tQgPyflCjnKP2coyNM/mKpAXM7CSyUOR2h3OfywFpduahsyaVDKD/ADHpq0XirQOynWN5Z+hjG6ev7qUABgOHT9hA2ujTghjnfN0aZge0k1aMykJTd9CfWKB/ErGTVT5YBdKEHc1ybnyAiw4RVrVKyE2ZvDSK1jNG89ASUjNLABNgCFMXPC4jscnyaZGcPom7JoAkvvzX9oueHhukVDBUKllUqYAFAgKAL3bV+YAg/TT5jd0AC91WH20LkVyNGGXGJc6BZ1AFom9uvTKIqGC1E/tD8aXNH5UtaLHLrHSVAkMzj76wdoompHatSiwt9vFdxUO7ecSsWnzVIBQtEpLtmVqegF4BkzVDN28ucBrkSz+paA4/J3kXQBxcDK/A/ftFZpqdlzFW7pA87/fWDO1VSRLyaEsT4XgDhEwq7QnS3nf2i0V62YMj9grXYehSTMIL5k7+J4QOq6RCZsxOXi0GqgfBWf8AJP1gZiKmnTuQ9oeC9ETt+RoJYHQSsySUpN0+ohQ5s6kgpI3lD8nEchmkLFs0Kbs6gyZijMnWQf8A0VzjHqT5o2r+vyTKUlppdLWlq3vyjNsKwdCkdoRMLubcAW08YlFxRa3R2kr1JTlSB1iPiFVlVImkElCiFDikj/UWumwiT2awEqCxoS5F+HKxit7T4QUSlLCw40Yf75QzeP47EjOXIP49h6ZNcSiyZiEqA4fhI6WHnFooqNK0gWIDEBt4irY/PE5FLVIU6VJynqQki/EFKknwiw4BPsIz5LTs9HGk7Qbk4fLlJLS0pcgqZ+8Q5Fh1MRBOzqmW+ZOn31ibiE8BHP67veIWEyCSpRDk2teOdtjxioo94dNlrTlWgKsxBdjd28xHJ9DLlgFIAADADhq3SIlOeynFN2U7fe+J2Jt2Zy6kfdoNyqgcFeiiTKJE6qUZvyS0qmKfeBlGnjFV7JKEKKQAVLKjydyB0EFsWrskmpVvVkljqo5lX/TLeK4ioSUnvc/SG3SMWSr0HVpenmnkn6mA2MJ+NMG8pDHwiYrEUokqSXJWAA25r+8QqmrTMmGYAzpZj0i0H6EGqm2WLZVlJ7qgWyP13woA0FeJLFiWbQgaF4UGV2CJ9CGX3B0jAUVS0TZiQSwWr0UY2NJrAlJ7SRoS2QneP8oqk7+Hi+2mkqUblTgJGpJ0JhYtfIzsr9ItSwATAfHZWV7kxp+Gfw9D5ZipiQzhspvu6QF2v2M7GUVHtFD9SfUNFH+hUlW+ygYLjKkylSDeWVBQvdJdy3JQ9RGp4EsCWFPuD+UYzSyR2iQCR3wD4lo0vZuvYdjMsoZkF+Yt5xnyJM2YJNdlmxDEwruBiN8RaZMxAdE4pvoLptfebQPpUAhwspuAOB3+fOLJh9BICA6Z4U2qFpyn6esGCTKy5Mr84KQszFrUqZzs2psN0SqPEDNzC1klRPTWHMdEq2WWUpf8SypSvDQB90Cp2KtLmKcIKiAAPyi59oWaVnK47M+21qiJnY/hSSrqSAPQD1MAaeW7vEzFz2kxUwk94+m6G8gQONni6qqRhnd2yfV0oVlOYJ7o1iP/ACiN81MGaXDZc1OdQKikAN1Fj5iHUbLpSsJLELCVJs1lf7hccJSVWNklGO6APYyh/wCo8o5Fsotj1JWJhQFSR3ZhYdxRdI8HEKKLBN9EXngu0bCZyGSCpPyneIf/AJyXnW8xGg/EP3gAjA6fufBQbHdE1ODU4UsdhL0H4RziEZMs0F1YtKC0vOlMU71D94A7b4zIVIKe3lF3/EDHnF8Rw+mAziQFpv2aUpKzbRhv6tGfYptnMqAZaKankguxAzKA/UWBPNoquTJtpFMEsdq6S4d/K/tGgY7Qky01coOyB2g4pb5hzT9OkUekHxgOo9DGp7HVOaSh9CNPQjpC5I0kVwS5NoAYFUGYlx3k7x9nX94KppVlJayeDv6+BhrEdnl080zKRIUhXzStG/STZuUD5uPTZVlyJyL6FJA89Du8olRqUqVMITpJfvK7w5lxoN8AFyVTVTEo+VNlFi3TraJdKuqqlkS5a05g2eYCEpD6tqT04RaJGGplyuyRdKA5U11HUk8/9QaoWXt0Y5WoIOXkPpBPB8EXVZUIKczKFy2gf2iDXFpg/Sn1EOSCULCkqKFpNlCxBjRx3Zg5uqLrsZRJXIWprsB5DMPeJ+NFOWVLObtJZUE2YZFMpLHVwbecVPA9q5lMVDs0zErLqHynfoQDx4QaxraOnny5K0EpmoDKSoMbaX0NjAhFxOk+VoLJxRc/t0JAQVhOYDQ2sfMescgBhlUDNSRpMBT46iFGht/Bn4J9hvEtvUIITKldoQCMxUyfDuufTrFaxTaernk5pq0g/hlukelz4mGKGjSdxMTqlDaMOgiMcaRaWRsD0eGqUbAJA+9If/lShXeZzaCFISPv75RGrp7gl9xf76w9UJYBpZjTArQO5fcI0PYGqSuUtAUMyFlSRvKFXfpciKRhFKFhZUHAGnm3v5CPeG1C5KkTEKCdCk8y7gjeksYWcbRTFk4Ss3JMrOkKAhtYIBSA76RzZPE0VEkLQwOik70K3jpz3wUKRwvGaqPSUr2gUinKElR+Y8YoG0e2ZlFcqQEd2ylKc5lcEgcOMaPiqSqWsI+YJVlP+TFm5vv3RgeHoZZKknMm5cXcW03b7copjim9mf8AIyOKVEOpzKAWoDNvbeBZ25Gx6g74s+GygtKStAVvDjd1iDQ0AVKvZ7j/AJwiVgaGBSfwlveNFGFsVbhYfuBul/rEb+iKIsoE87GCtfqGPlHZU1so3qMdQLK2qhmI7wCg28fuI7Bqee8WO+FAoNnmX3FW1ES5ykrvmCeNoUKGFHZcphxaAuJyrsm5NmhQoDCidQyQiVla7uecCzJ+ER+RT+DiFChgXsLbK48qlmBQUyFslfJtFNyc+BjYKWpMxAUefoW3WP0hQozZTd+M70Z7tVtqZizT0qhqypr+By8he49NYq6KBIQoZiVH1+7woUWhFJGbLNylsIBLJDcIZpkgLVldix8bv9BChQxEkTkDeWEM0jGapnypDB+f/IUKOCM1BDLOa4IYcXLffWFChQDj/9k=">
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
                            <img class="img-circle" src="http://www.aceshowbiz.com/images/photo/oprah_winfrey.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
                            <img class="img-circle" src="http://media.gunaxin.com/wp-content/uploads/2012/12/ron-burgundy-150x150.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">
                            <img class="img-circle" src="https://i.imgflip.com/2/hcv7n.jpg" />
                            <span class="quote"><i class="fa fa-quote-left"></i></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="[ col-xs-8 col-sm-12 ]">
                <!-- Tab panes -->
                <div class="tab-content" id="tabs-collapse">

                    <div role="tabpanel" class="tab-pane fade in active" id="dustin">
                        <div class="tab-inner">
                            <p class="lead">Team Rocket's deals and business skills are stronger than my roundhouse kick!</p>
                            <hr>
                            <p><strong class="text-uppercase">Chuck Norris</strong></p>
                            <p><em class="text-capitalize">Actor, Martial Artist</em> at <a href="">USA</a></p>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="daksh">
                        <div class="tab-inner">
                            <p class="lead">Team Rocket's contribution to society epitomizes selflessness and dedication to hard work. They bring their "A" games 100% of the time!</p>
                            <hr>
                            <p><strong class="text-uppercase">Oprah Winfrey</strong></p>
                            <p><em class="text-capitalize">Talk Show Host</em> at <a href="">The O! network</a></p>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="anna">
                        <div class="tab-inner">
                            <p class="lead">Alvin, Nick, and Steven are the definition of classy. If you don't agree that these guys are the best...I will fight you.</p>
                            <hr>
                            <p><strong class="text-uppercase">Ron Burdundy</strong></p>
                            <p><em class="text-capitalize">Lead Anchor</em> at <a href="">Channel 4 News Team, GNN</a></p>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="wafer">
                        <div class="tab-inner">
                            <p class="lead"> I pity the fool who don't work with these guys! Knockout Service! </p>
                            <hr>
                            <p><strong class="text-uppercase">MR. T</strong></p>
                            <p><em class="text-capitalize">Actor, Wrestler, Boxer, Rapper</em> at <a href="">Hollywood</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<a href="/admins">Admin Login</a>
</body>
</html>
