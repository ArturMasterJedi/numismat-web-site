<?php
if (isset($page)) {
    $query = "SELECT meta_title, meta_keywords, meta_description, title, fulldescription FROM setting_page WHERE page='{$page}'";
    $res = mysqli_query($dbc, $query) or die('Query Meta-Tags Error');
    $next = mysqli_fetch_array($res);
    if (isset($meta_title)){
        $smarty_main -> assign('meta_title', $meta_title);
    }else{
        $smarty_main -> assign('meta_title', $next['meta_title']);
    }
    if (isset($meta_keywords)){
        $smarty_main -> assign('meta_keywords', $meta_keywords);
    }else{
        $smarty_main -> assign('meta_keywords', $next['meta_keywords']);
    }
    if (isset($meta_description)){
        $smarty_main -> assign('meta_description', $meta_description);
    }else{
        $smarty_main -> assign('meta_description', $next['meta_description']);
    }
    if (isset($title)){
        $smarty_main -> assign('title', $title);
    }else{
        $smarty_main -> assign('title', $next['title']);
    }
    if (isset($content) && !empty($content)){
        $smarty_main -> assign('content', $content);
    }else{
        $smarty_main -> assign('content', $next['fulldescription']);
    }
    /*----------------------------Menu for site-----START-----*/
    $queryMenu = "SELECT name, page FROM setting_page ORDER BY prioritet ASC";
    $resMenu = mysqli_query($dbc, $queryMenu) or die('Query Menu Error');
    $menu = [];
    while ($nextMenu = mysqli_fetch_array($resMenu)) {
        $menu[] = array('name' => $nextMenu['name'], 'page' => $nextMenu['page']);
    }

    /*----------------------------Category for site menu*/
    $queryCategory = "SELECT id, name, photo_category FROM category";
    $resCategory = mysqli_query($dbc, $queryCategory) or die('query error category');
    $category = [];
    while($nextCategory=mysqli_fetch_array($resCategory)){
        $category[] = array('id' => $nextCategory['id'], 'name' => $nextCategory['name'], 'photo'=>$nextCategory['photo_category']);
    }
    /*Atribute*/
    $queryAtribute = "SELECT id, name_atribut, id_category, photo_atribut FROM atributes";
    $resAtribute = mysqli_query($dbc, $queryAtribute) or die('Query Error atribut');
    $atribute = [];
    while($nextAtribut=mysqli_fetch_array($resAtribute)){
        $atribute[] = array('id_cat'=>$nextAtribut['id_category'], 'id'=>$nextAtribut['id'], 'name'=>$nextAtribut['name_atribut'], 'photo'=>$nextAtribut['photo_atribut']);
    }
    $countAtribute = mysqli_num_rows($resAtribute);

    $smarty_main -> assign('cout', $countAtribute);
    $smarty_main -> assign('atribute', $atribute);
    $smarty_main -> assign('category', $category);
    $smarty_main -> assign('menu', $menu);
    /*----------------------------Menu for site-----END-----*/

    $smarty_main -> display('main.tpl');
}else{
    echo "<a href='index.php'>START</a>";
}
?>
