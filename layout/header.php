<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <!-- METAS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez King Plouf, une application utilisable à l'IUT de Chambéry afin de personnaliser son règne">
    <meta name="keywords" content="King Plouf, Roi du plouf, IUT de Chambéry, Jeu toilettes">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Découvrez King Plouf, une application utilisable à l'IUT de Chambéry afin de personnaliser son règne">
    
    <!-- LINKS -->
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- TITLE -->
    <title>King Plouf - <?php if (isset($title)) { echo $title;} else { echo 'Règne à l\'IUT de Chambéry';} ?></title>
</head>
<body class="flex-center-center flex-column">
  <!-- MAIN CONTAINER WITH PAGE NAME -->
  <div class="main-container <?php if (isset($page_name)) { echo $page_name;} ?> flex-center-center flex-column">