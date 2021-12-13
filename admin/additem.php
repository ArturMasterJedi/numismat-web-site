<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    $smarty_add = new Smarty();
    $smarty_add->assign('id', $_GET['id']);
    if (!isset($_GET['id'])) {
        $queryCategory = "SELECT id, name, photo_category FROM category";
        $resCategory = mysqli_query($dbc, $queryCategory) or die('Query Category Error');
        //Наполняем массив категориями
        $cat = [];
        while ($nextCategory = mysqli_fetch_array($resCategory)) {
            $cat[] = array('id' => $nextCategory['id'], 'name' => $nextCategory['name'], 'photo' => $nextCategory['photo_category']);
        }
        $smarty_add->assign('cat', $cat);
        //Выводим выбор категорий для добавления товара с файла 'itemaddconfig.tpl'
        $content = $smarty_add->fetch('itemaddconfig.tpl');
    } elseif (isset($_GET['mode']) && $_GET['mode'] == 'additem') {
        if (!isset($_POST['send'])) {
            $queryAtribut = "SELECT id, name_atribut FROM atributes WHERE id_category=" . $_GET['id'];
            $resAtribut = mysqli_query($dbc, $queryAtribut) or die('Query Atribut Error');
            ////Наполняем массив атрибутами категорий
            $atribut = [];
            while ($nextAtr = mysqli_fetch_array($resAtribut)) {
                $atribut[] = array('id' => $nextAtr['id'], 'name' => $nextAtr['name_atribut']);
            }
            //Вывод формы добавления товара с файла 'additem.tpl'
            $smarty_add->assign('atribut', $atribut);
            $content = $smarty_add->fetch('additem.tpl');
        } elseif (isset($_POST['send'], $_POST['name'], $_POST['kod'], $_POST['type'], $_POST['country'], $_POST['colichestvo']) && !empty($_POST['name']) && !empty($_POST['kod']) && !empty($_POST['colichestvo'])) {
            /*Функция посчета процентаскидки на товар*/
            function percentSale($price, $oldPrice){
                $onePercent = $oldPrice/100;
                $totalPercent = ceil(100-($price/$onePercent));

                return $totalPercent;
            }

            if (isset($_POST['oldprice']) && !empty($_POST['oldprice'])){
                $percentSale = percentSale($_POST['price'], $_POST['oldprice']);
                $queryAddItem = "INSERT INTO item_monets(meta_title, meta_description, meta_keywords, name, type, category_id, atribut_id, colichestvo, kod_tovara, fulldescription, gurt, weight, diametr, year, country, type_monets, nominal, series, quality, chekan_type, price, oldprice, salepercent, material) VALUES ('" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','{$_POST['type']}','{$_POST['id']}','{$_POST['atribut']}', '{$_POST['colichestvo']}', '{$_POST['kod']}', '" . myProtect($_POST['fulldescription']) . "','{$_POST['gurt']}','{$_POST['weight']}','{$_POST['diametr']}','{$_POST['year']}','{$_POST['country']}', '{$_POST['type']}','{$_POST['nominal']}','{$_POST['series']}','{$_POST['sostoyaniye']}', '{$_POST['chekan']}', '{$_POST['price']}', '{$_POST['oldprice']}', '".percentSale($_POST['price'], $_POST['oldprice'])."','".myProtect($_POST['material'])."')";
            }else{
                $queryAddItem = "INSERT INTO item_monets(meta_title, meta_description, meta_keywords, name, type, category_id, atribut_id, colichestvo, kod_tovara, fulldescription, gurt, weight, diametr, year, country, type_monets, nominal, series, quality, chekan_type, price, material) VALUES ('" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','" . myProtect($_POST['name']) . "','{$_POST['type']}','{$_POST['id']}','{$_POST['atribut']}', '{$_POST['colichestvo']}', '{$_POST['kod']}', '" . myProtect($_POST['fulldescription']) . "','{$_POST['gurt']}','{$_POST['weight']}','{$_POST['diametr']}','{$_POST['year']}','{$_POST['country']}', '{$_POST['type']}','{$_POST['nominal']}','{$_POST['series']}','{$_POST['sostoyaniye']}', '{$_POST['chekan']}', '{$_POST['price']}', '".myProtect($_POST['material'])."')";
            }
            mysqli_query($dbc, $queryAddItem) or die('Query Add Error');
            //Получаем айди товара
            $id_item = mysqli_insert_id($dbc);
            //Добавление фотографий к товару
            if ($_FILES['main_photo']['error'] == 0) {//Добавление главной фотогорафии
                $tmp_main = $_FILES['main_photo']['tmp_name'];
                $main_name = time() . $_FILES['main_photo']['name'];
                move_uploaded_file($tmp_main, "../assets/img/item/$main_name");
                $queryMain = "INSERT INTO photo(name, id_item, main) VALUES ('{$main_name}', {$id_item}, 1)";
                mysqli_query($dbc, $queryMain) or die('Query Main Photo Error');
                //Добавление множества фото к товару
                for ($i = 0; $i < count($_FILES['photos']['name']); $i++) {
                    if ($_FILES['photos']['error'][$i] == 0) {
                        $tmp_photos = $_FILES['photos']['tmp_name'][$i];
                        $photos_name = time() . $_FILES['photos']['name'][$i];
                        move_uploaded_file($tmp_photos, "../assets/img/item/$photos_name");
                        $queryPhotos = "INSERT INTO photo(name, id_item, main) VALUES ('{$photos_name}','{$id_item}',0)";
                        mysqli_query($dbc, $queryPhotos) or die('Query photos Error');
                    }
                }
            } else {
                $content = 'Выберите главную фотографию';
            }
            $content = "Добавление успешное<br><a class='btn btn-danger' href='indexcategory.php'>Назад</a>";
        } else {
            $content = "Добавление не успешное<br><a class='btn btn-danger' href='indexcategory.php'>Назад</a>";
        }
    } else {
        $content = 'Error';
    }

    $smarty_admin->assign('title', 'Добавление товара');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>