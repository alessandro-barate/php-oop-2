<?php

require_once __DIR__ . '/Models/Cats.php';
require_once __DIR__ . '/Models/Dogs.php';
class Products
{
    private int $price;
    private string $image;

    // Funzione costruttore
    public function __construct(string $_price, int $_image)
    {
        $this->price = $_price;
        $this->image = $_image;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Products</title>
</head>

<body>
    <header>
        <nav>
            <ul class="d-flex justify-between">
                <li>
                    <button>Home</button>
                </li>
                <li>
                    <button>Chi Siamo</button>
                </li>
                <li>
                    <button>Punti Vendita</button>
                </li>
                <li>
                    <button>Contattaci</button>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <section>
                    <div class="col">
                        <h1>ALGAPLANET</h1>
                    </div>
                </section>

                <section class="cards-section d-flex justify-between">
                    <div class="col">
                        <div class="card">
                            <img src="" alt="">
                            <p>nome</p>
                            <p>prezzo</p>
                            <p>categoria</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="" alt="">
                            <p>nome</p>
                            <p>prezzo</p>
                            <p>categoria</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="" alt="">
                            <p>nome</p>
                            <p>prezzo</p>
                            <p>categoria</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</body>

</html>