<?php
require_once 'header.php';
require_once 'myprotect.php';

if (isset($_SESSION['login'], $_SESSION['prava'], $_SESSION['user_name'])) {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        /*Запрос для получения данных с таблицы item_monets*/
        $query = "SELECT name, type, colichestvo, category_id, kod_tovara, price,fulldescription, gurt, weight, diametr, year, country, type_monets, nominal, series, quality, material,chekan_type, atribut_id, oldprice FROM item_monets WHERE id=" . $_GET['id'];
        $res = mysqli_query($dbc, $query) or die('Query Error');
        $next = mysqli_fetch_array($res);
        /*Запрос для получения данных с таблицы atributes
        Данные мы тянем по полю 'category_id'*/
        $queryAtr = "SELECT id, name_atribut FROM atributes WHERE id_category=" . $next['category_id'];
        $resAtr = mysqli_query($dbc, $queryAtr) or die('Query Atr Error');
        $atr = [];//Создаем массив для хранения атрибутов
        while ($nextAtr = mysqli_fetch_array($resAtr)) {
            $atr[] = array('id' => $nextAtr['id'], 'name' => $nextAtr['name_atribut']);
        }
        /*Получаем фото по айди товара с таблицы photo*/
        $queryPhoto = "SELECT name, main FROM photo WHERE id_item=" . $_GET['id'];
        $resPhoto = mysqli_query($dbc, $queryPhoto) or die('Query Photo Error');
        $photo = [];
        while ($nxtPhoto = mysqli_fetch_array($resPhoto)) {
            $photo[] = array('name' => $nxtPhoto['name'], 'main' => $nxtPhoto['main']);
        }

        $smarty_edit = new Smarty();
        $smarty_edit->assign('atr', $atr);
        $smarty_edit->assign('photo', $photo);

        $smarty_edit->assign('id', $_GET['id']);
        $smarty_edit->assign('name', $next['name']);
        $smarty_edit->assign('type', $next['type']);
        $smarty_edit->assign('colichestvo', $next['colichestvo']);
        $smarty_edit->assign('kod_tovara', $next['kod_tovara']);
        $smarty_edit->assign('fulldescription', $next['fulldescription']);
        $smarty_edit->assign('gurt', $next['gurt']);
        $smarty_edit->assign('weight', $next['weight']);
        $smarty_edit->assign('diametr', $next['diametr']);
        $smarty_edit->assign('material', $next['material']);
        $smarty_edit->assign('year', $next['year']);
        $smarty_edit->assign('country', $next['country']);
        $smarty_edit->assign('price', $next['price']);
        $smarty_edit->assign('type_monets', $next['type_monets']);
        $smarty_edit->assign('nominal', $next['nominal']);
        $smarty_edit->assign('series', $next['series']);
        $smarty_edit->assign('series', $next['series']);
        $smarty_edit->assign('quality', $next['quality']);
        $smarty_edit->assign('oldprice', $next['oldprice']);
        $smarty_edit->assign('chekan_type', $next['chekan_type']);
        $smarty_edit->assign('name_atribut', $next['name_atribut']);
        $content = $smarty_edit->fetch('edititem.tpl');
    } elseif (isset($_POST['send'], $_POST['name'], $_POST['kod'], $_POST['country'], $_POST['price'], $_POST['colichestvo']) && !empty($_POST['name']) && !empty($_POST['kod']) && !empty($_POST['country']) && !empty($_POST['colichestvo']) && !empty($_POST['price'])) {
        /*Функция посчета процентаскидки на товар*/
        function percentSale($price, $oldPrice){
            $onePercent = $oldPrice/100;
            $totalPercent = ceil(100-($price/$onePercent));

            return $totalPercent;
        }

        if (isset($_POST['oldprice']) && !empty($_POST['oldprice'])) {
            $percentSale = percentSale($_POST['price'], $_POST['oldprice']);
            $queryUpdate = "UPDATE item_monets SET name='{$_POST['name']}', type='{$_POST['type']}', atribut_id='{$_POST['atribut']}', colichestvo='{$_POST['colichestvo']}', kod_tovara='{$_POST['kod']}', fulldescription='{$_POST['fulldescription']}', gurt='{$_POST['gurt']}', weight='{$_POST['weight']}', diametr='{$_POST['diametr']}', year='{$_POST['year']}', country='{$_POST['country']}', type_monets='{$_POST['type']}', nominal='{$_POST['nominal']}', series='{$_POST['series']}', quality='{$_POST['sostoyaniye']}', chekan_type='{$_POST['chekan']}', price='{$_POST['price']}', oldprice='{$_POST['oldprice']}', salepercent='".$percentSale."' WHERE id=" . $_POST['id'];
        }else{
            $queryUpdate = "UPDATE item_monets SET name='{$_POST['name']}', type='{$_POST['type']}', atribut_id='{$_POST['atribut']}', colichestvo='{$_POST['colichestvo']}', kod_tovara='{$_POST['kod']}', fulldescription='{$_POST['fulldescription']}', gurt='{$_POST['gurt']}', weight='{$_POST['weight']}', diametr='{$_POST['diametr']}', year='{$_POST['year']}', country='{$_POST['country']}', type_monets='{$_POST['type']}', nominal='{$_POST['nominal']}', series='{$_POST['series']}', quality='{$_POST['sostoyaniye']}', chekan_type='{$_POST['chekan']}', price='{$_POST['price']}' WHERE id=" . $_POST['id'];
        }
        mysqli_query($dbc, $queryUpdate) or die('Query Up Error');
        if ($_FILES['newMain']['error']==0){
            $tmp_main = $_FILES['newMain']['tmp_name'];
            $main_name = time().$_FILES['newMain']['name'];
            move_uploaded_file($tmp_main, "../assets/img/item/{$main_name}");
            $queryUpdateOldMain = "UPDATE photo SET name='{$main_name}' WHERE id_item=".$_POST['id']." AND main=1";
            mysqli_query($dbc, $queryUpdateOldMain) or die('Query Delete Main Error');
            unlink("../assets/img/item/{$_POST['oldMain']}");
        }
        $content = '<h3>Редактирование произведено успешно</h3><br><a href="indexitem.php">Назад</a>';
    }elseif(isset($_POST['newSend'], $_POST['id']) && !empty($_POST['id'])){
        /*Проверяем если количество передаваемых файлов в newPhotos больше 0,
        то удаляем старые фото и загружаем новые*/
        $sqlSelPhoto = "SELECT name FROM photo WHERE main=0 AND id_item=" . $_POST['id'];
        $resSel = mysqli_query($dbc, $sqlSelPhoto) or die('Error 1');
        while ($nextSel = mysqli_fetch_array($resSel)) {
            unlink("../assets/img/item/{$nextSel['name']}");
        }
        $sqlDelPhoto = "DELETE FROM photo WHERE main=0 AND id_item=" . $_POST['id'];
        mysqli_query($dbc, $sqlDelPhoto) or die('SQL DEL ERROR');
        /*Загружаем новые фото с помощью цыкла for*/
        for ($i = 0; $i < count($_FILES['newPhotos']['name']); $i++) {
            if ($_FILES['newPhotos']['error'][$i] == 0) {
                $tmp_photos = $_FILES['newPhotos']['tmp_name'][$i];
                $name_photos = time() . $_FILES['newPhotos']['name'][$i];
                move_uploaded_file($tmp_photos, "../assets/img/item/$name_photos");
                $queryPhotos = "INSERT INTO photo(name, id_item, main) VALUES('{$name_photos}','{$_POST['id']}',0)";
                mysqli_query($dbc, $queryPhotos) or die('Query Photos Error');
            }
        }
    } else {
        $content = '<h3>Не достаточно данных для редактирования</h3><br><a href="indexitem.php">Назад</a>';
    }
    $smarty_admin->assign('title', 'Редактирование товара');
    $smarty_admin->assign('content', $content);
    $smarty_admin->display('main.tpl');
}else{
    header('location:404.html');
}
?>
