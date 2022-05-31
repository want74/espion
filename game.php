<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ыспион</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="loader-man" style="height: 100vh;">
        <div class="container-fluid" style="height: 100vh;">
            <div class="col">
                <div class="row" style="height: 100vh;">
                    <div class="col my-auto">
                        <div class="row">
                            <img src="img/white.svg" class="w-50 mx-auto">
                        </div>
                        <div class="row">
                            <p class="loader-title mx-auto">
                                Ыспион
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mest" style="display: none;">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row my-4">
                    <p class="text-title">
                        Оонньуу:
                    </p>
                </div>
                <div class="row">
                    <div class="col-11 mx-auto">
                        <!-- Карточки -->
                        <div class="row border-kit py-3 mt-3">
                            <div class="col-10 mx-auto">
                                <div class="row">
                                    <p class="text-simple mx-auto my-3 title text-center" style="width: max-content;">
                                        Принудительное голосование начнётся через:
                                    </p>
                                </div>
                                <div class="row my-2">
                                    <div class="col-6 mx-auto circle">
                                        <div class="row h-100">
                                            <p class="text-timer text-center my-auto">
                                                10:49
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-play mx-auto">
                    Следующий
                </button>
            </div>
        </div>
    </div>


    <script>
        let loaders = document.querySelector(".loader-man")
        let content = document.querySelector(".mest")

        function loaderGoodBye() {
            loaders.style.display = "none";
            content.style.display = "block";
            console.log('ss')
        }
        setTimeout(loaderGoodBye, 500);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>