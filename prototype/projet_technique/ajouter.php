<?php
require 'config.php';
$rqt= "SELECT * FROM section";
$st = $pdo->query($rqt);
$sections = $st->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'ajouter') {
        $title = $_POST['title'];
        $contenu = $_POST['contenu'];
        $duree = $_POST['duree'];
        $img = $_POST['img'];
        $status = $_POST['status'];
        $section = $_POST['section'];
        $sql = "INSERT INTO article(titre_article,contenu_article,duree_lecture,image_article,status,id_section)VALUES(:titre_article,:contenu_article,:duree_lecture,:image_article,:status,:id_section)";
        $stmt= $pdo->prepare($sql);
        $stmt -> execute([
            'titre_article' => $title,
            'contenu_article' => $contenu,
            'duree_lecture' => $duree,
            'image_article' => $img,
            'status' => $status,
            'id_section' => $section
        ]);
        header('Location: index.php');
        exit;
    }else{
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="title">Titre de l'article</label>
        <input type="text" name="title" id="title">
        <label for="contenu">Contenu</label>
        <input type="text" name="contenu" id="contenu">
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="brouillon">brouillon</option>
            <option value="publier">publier</option>
        </select>
        <label for="section">Section</label>
        <select name="section" id="section">
        <?php
            foreach($sections as $section){
                echo "<option value='".$section['id_section']."'>".$section['section_nom']."</option>";
            }
        ?>
        </select>
        <label for="duree">Duree de lecture</label>
        <input type="number" name="duree" id="">
        <label for="img">Image</label>
        <input type="file" name="img" id="">
        <button name='action' value='annuler'>Annuler</button>
        <button name='action' value='ajouter'>Ajouter l'article</button>
    </form>
</body>
</html>