<?php
session_start();
include_once 'connection.php';
$newFilename = uploadImage($_FILES['image'],$filename);
function uploadImage($image) {
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION); // узнаем расширение файла
    $filename = uniqid() . "." . $extension; // делаем уникальное название файла и добавляем в конец расширение
    move_uploaded_file($image['tmp_name'], "./../assets/img/" . $filename);
    return $filename;
}

function search($text) {
    $text = trim(strip_tags(stripcslashes(htmlspecialchars($text))));
    $pdo = Connection::get()->connect();
    $sql = "SELECT id_product, name_product FROM public.products WHERE name_product ILIKE '%$text%'";
    // $sql = "SELECT id, title, content FROM public.posts WHERE title ILIKE '%$text%' OR content ILIKE '%$text%'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $found = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $found;
}

function addCard($number_card, $mm_yy, $cvv_cvc, $name_card, $email_card) {
    $pdo = Connection::get()->connect();
    $sql = 'INSERT INTO public.cards (number_card, mm_yy, cvv_cvc, name_card, email_card) VALUES( :number_card, :mm_yy, :cvv_cvc, :name_card, :email_card)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":number_card", $number_card);
    $statement->bindValue(":mm_yy", $mm_yy);
    $statement->bindValue(":cvv_cvc", $cvv_cvc);
    $statement->bindValue(":name_card",  $name_card);
    $statement->bindValue(":email_card", $email_card);
    $statement->execute();
}

function addProduct($genre_product, $cost_product, $name_product, $type_product, $img_product) {
    $pdo = Connection::get()->connect();
    $sql = 'INSERT INTO public.products (genre_product, cost_product, name_product, type_product, img_product) VALUES( :genre_product, :cost_product, :type_product, :img_product, :name_product)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":genre_product", $genre_product);
    $statement->bindValue(":cost_product", $cost_product);
    $statement->bindValue(":name_product", $name_product);
    $statement->bindValue(":type_product",  $type_product);
    $statement->bindValue(":img_product", $img_product);
    $statement->execute();
}

function getProducts() {
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.products';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $products = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getProduct($id_product){
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.products WHERE id_product = :id_product';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id_product', intval($id_product));
    $statement->execute();
    $post = $statement->fetch(PDO::FETCH_ASSOC);
    return $post;
}

function delProduct($id_product){
    $pdo = Connection::get()->connect();
    $sql = 'DELETE FROM public.products WHERE id_product = :id_product';
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_product]);
    return true;
}

function addBilet($time_bilet, $place_bilet) {
    $pdo = Connection::get()->connect();
    $sql = 'INSERT INTO public.bilets (time_bilet, place_bilet) VALUES(:time_bilet, :place_bilet)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":time_bilet", $time_bilet);
    $statement->bindValue(":place_bilet", $place_bilet);
    $statement->execute();
}

function getBilets() {
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.bilets';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $bilets = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $bilets;
}

function getBilet($id_bilet){
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.bilets WHERE id_bilet = :id_bilet';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id_bilet', intval($id_bilet));
    $statement->execute();
    $post = $statement->fetch(PDO::FETCH_ASSOC);
    return $post;
}


function delBilet($id_bilet){
    $pdo = Connection::get()->connect();
    $sql = 'DELETE FROM public.bilets WHERE id_bilet = :id_bilet';
    $statement = $pdo->prepare($sql);
    $statement->execute([$id_bilet]);
    return true;
}

function editProduct($id_product, $genre_product, $cost_product, $name_product, $type_product) {
    $pdo = Connection::get()->connect();
    $sql = 'UPDATE public.products SET genre_product=:genre_product, cost_product=:cost_product, name_product=:name_product, type_product=:type_product WHERE id_product=:id_product;';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":genre_product", $genre_product);
    $statement->bindValue(":cost_product", $cost_product);
    $statement->bindValue(":name_product", $name_product);
    $statement->bindValue(":type_product",  $type_product);
    $statement->bindValue(":id_product", $id_product);
    $statement->execute();
}

function editBilet($id_bilet, $time_bilet, $place_bilet) {
    $pdo = Connection::get()->connect();
    $sql = 'UPDATE public.bilets SET time_bilet=:time_bilet, place_bilet=:place_bilet WHERE id_bilet=:id_bilet;';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":time_bilet", $time_bilet);
    $statement->bindValue(":place_bilet", $place_bilet);
    $statement->bindValue(":id_bilet", $id_bilet);
    $statement->execute();
}

function addInBucket($id, $id_product, $cost_product, $qty)
{
    $pdo = Connection::get()->connect();
    $sql = 'INSERT INTO public.bucket (id, id_product, cost_product, qty) VALUES(:id, :id_product, :cost_product, :qty)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":id", $id);
    $statement->bindValue(":id_product", $id_product);
    $statement->bindValue(":cost_product", $cost_product);
    $statement->bindValue(":qty", $qty);
    $statement->execute();
}

function getBuckets()
{
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM bucket LEFT JOIN products ON bucket.id_product = products.id_product';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $bucket = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $bucket;
}

function GetBucket($id_bucket)
{
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.bucket WHERE id_bucket = :id_bucket';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id_bucket', intval($id_bucket));
    $statement->execute();
    $bucket = $statement->fetch(PDO::FETCH_ASSOC);
    return $bucket;
}

function addPaycard($number_card, $data, $cvc, $name_card, $email_card)
{ 
    $pdo = Connection::get()->connect();
    $sql = 'INSERT INTO public.paycard (number_card, data, cvc, "name_card", email_card) VALUES(:number_card, :data, :cvc, :name_card, :email_card)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(":number_card", $number_card);
    $statement->bindValue(":data", $data);
    $statement->bindValue(":cvc", $cvc);
    $statement->bindValue(":name_card", $name_card);
    $statement->bindValue(":email_card", $email_card);
    $statement->execute();
}

function getPays()
{
    $pdo = Connection::get()->connect();
    $sql = 'SELECT * FROM public.paycard';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $paycard = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $paycard;
}

function removeFromCard($id_product) {
    $_SESSION['cart.qty'] = --$_SESSION['cart.qty'];
    $_SESSION['cart.sum'] = $_SESSION['cart.sum'] - $_SESSION['cart'][$id_product]['cost_product'];

    if ($_SESSION['cart'][$id_product]['qty'] === 1) {
        unset($_SESSION['cart'][$id_product]);
    }
    if (isset($_SESSION['cart'][$id_product])) {
        $_SESSION['cart'][$id_product]['qty'] -= 1;
    }
}

function addFromCard($id_product) {
    $_SESSION['cart.qty'] = ++$_SESSION['cart.qty'];
    $_SESSION['cart.sum'] = $_SESSION['cart.sum'] + $_SESSION['cart'][$id_product]['cost_product'];

    if ($_SESSION['cart'][$id_product]['qty'] === 0) {
        unset($_SESSION['cart'][$id_product]);
    }
    if (isset($_SESSION['cart'][$id_product])) {
        $_SESSION['cart'][$id_product]['qty'] += 1;
    }
}

function addProd($product) {
    if (isset($_SESSION['cart'][$product['id_product']])) {
        $_SESSION['cart'][$product['id_product']]['qty'] += 1;
    } else {
        $_SESSION['cart'][$product['id_product']] = [
            'name_product' => $product['name_product'],
            'id_product' => $product['id_product'],
            'cost_product' => $product['cost_product'],
            'type_product' => $product['type_product'],
            'img_product' => $product['img_product'],
            'qty' => 1,
        ];
    }
    $_SESSION['cart.qty'] = !empty($_SESSION['cart.qty']) ? ++$_SESSION['cart.qty'] : 1;
    $_SESSION['cart.sum'] = !empty($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $product['cost_product'] : $product['cost_product'];
}



function clearBucket() {
    unset($_SESSION['cart']);
    unset($_SESSION['cart.sum']);
    unset($_SESSION['cart.qty']);
    unset($_SESSION['cart.cost']);
}
