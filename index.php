<?php


// Importazione file
require_once __DIR__ . '/Models/Cats.php';
require_once __DIR__ . '/Models/Dogs.php';
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Kennels.php';
require_once __DIR__ . '/Models/Toys.php';


// Definizione classe
class Products
{
    private string $name;
    private int $price;
    private string $image;

    // Funzione costruttore
    public function __construct(string $_name, int $_price, string $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
    }


    // Setter e Getter dell'attributo $name

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }


    // Setter e Getter dell'attributo $price

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): int
    {
        return $this->price;
    }


    // Setter e Getter dell'attributo $image

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getImage(): int
    {
        return $this->image;
    }
}

$error = '';

try {
    $product1 = new Products('Pollo', 15, './..', $dog1,);
} catch (Exception) {
    return;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>AlgaPlanet Pets Shop</title>
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
                            <p>Nome: <?php echo $product1->getName() ?></p>
                            <p>Prezzo: <?php echo $product1->getPrice() ?>€</p>
                            <p>Prodotto per cani fino a <?php echo $dog1->getDogAge() ?> anno e peso fino a <?php echo $dog1->getDogWeight() ?>kg</p>
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