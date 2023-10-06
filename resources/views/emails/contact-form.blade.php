<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/email.scss'])
    </head>
    <body>
        <header>
            <nav class="BgPrimary py-4">
                <div class="d-flex justify-content-around align-items-center container">

                    <div class="d-flex align-items-center">
                        <div class="imgCont">
                            <img src="images/duck.png" alt="mascotte">
                        </div>
                        <div class="logoCont ms-2">
                            <img src="images/logo.png" alt="logo">
                        </div>
                    </div>

                    <div>
                        <h2 class="m-0">
                            Ciao amministratori, $lead->full_name vi cerca!
                        </h2>
                    </div>

                </div>
            </nav>
        </header>
        <main class="position-relative BgSecondarySoft">
            <svg style="height: 4rem; width: 100%; position: absolute; top: 0; left: 0; right: 0; transform: rotate(180deg);" class="wave-1hkxOo" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100" preserveAspectRatio="none">
                <path class="wavePath-haxJK1 animationPaused-2hZ4IO" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="#ff9654"></path>
            </svg>
            <div class="container paddingCustom">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 messagePaper">
                        $lead->message
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

