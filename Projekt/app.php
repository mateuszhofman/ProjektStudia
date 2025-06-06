<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikacja Bankowa</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/6ec79b24d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="phone-mockup">
        <div class="container">
            <div class="top-section">
                <div class="settings">
                    <i class="fa-regular fa-user"></i>
                    <a href="logout.php" class="logout">Wyloguj się</a>
                </div>
                <div class="notifications">
                    <i class="fa-regular fa-bell"></i>
                </div>
            </div>
            <div class="user-section">
                <div class="category">
                    <p>Konto</p>
                    <p>Karty</p>
                    <p>Kredyty</p>
                    <p>Lokaty</p>
                </div>
            </div>
            <div class="card-box">
                <div class="card-front">
                    <div class="card-name">
                        <p>WSB Bank</p>
                        <div class="card-logo"><i class="fa-brands fa-opencart"></i></div>
                    </div>
                    <div class="card-info">
                        <div class="card-item">
                            <p class="card-saldo">3 200<span>,00 PLN</span></p>
                        </div>
                        <div class="card-buttons">
                            <button class="transfer">Przelew</button>
                            <button class="history">Historia</button>
                            <div class="blik"><img src="./img/blik.svg" alt="" id="blikButton"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="blikModal" class="modal">
                <div class="modal-content">
                    <div class="close"><i class="fa-solid fa-xmark"></i></div>
                    <p>Twój kod BLIK:</p>
                    <h2 id="blikCode"></h2>
                </div>
            </div>
            <div class="bankAnnouncement">
                <div class="img">
                </div>
                <div class="text">
                    <p class="title">Witaj w WSB Banku</p>
                    <p>Cieszymy się ,że jesteś z nami.</p>
                    <p>Odkryj nową bankowość mobilną.</p>
                </div>
            </div>
            <div class="shortcuts">
                <div class="shortcuts-info">
                    <p class="title">Szybkie skróty</p>
                    <p class="text">Zarządzaj</p>
                </div>
                <div class="shortcuts-box">
                    <div class="shortcuts-item">
                        <img src="./img/parking.svg" alt="">
                        <p class="title">Parkingi</p>
                        <p class="text">Przejdź</p>
                    </div>
                    <div class="shortcuts-item">
                        <img src="./img/bus.svg" alt="">
                        <p class="title">Bilety Komunikacji</p>
                        <p class="text">Przejdź</p>
                    </div>
                </div>
            </div>
            <div class="operation">
                <div class="operation-info">
                    <p class="title">Ostatnie operacje</p>
                    <p class="text">Wszystkie</p>
                </div>
                <div class="operation-item"></div>
            </div>
            <div class="bottom-section">
                <div class="pulpit">
                    <img src="./img/home.svg" alt="pulpit">
                    <p>Pulpit</p>
                </div>
                <div class="transfer">
                    <img src="./img/transfer.svg" alt="płatności">
                    <p>Płatności</p>
                </div>
                <div class="wallet">
                    <img src="./img/wallet.svg" alt="produkty">
                    <p>Produkty</p>
                </div>
                <div class="finance">
                    <img src="./img/finance.svg" alt="finanse">
                    <p>Finanse</p>
                </div>
                <div class="purchase">
                    <img src="./img/purchase.svg" alt="zakupy">
                    <p>Zakupy</p>
                </div>
            </div>
        </div>
    </div>
    <script src="./script.js"></script>
</body>

</html>