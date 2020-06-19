<?php
/* Smarty version 3.1.30, created on 2020-06-19 17:06:31
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eecd477937389_38215026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '173b8b8d8bf8ba46ff9849a5d1519f09ce75a06e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/header.html',
      1 => 1589096334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eecd477937389_38215026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Entreprise | home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/animate.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/aos.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid px-md-4	">
        <a class="navbar-brand"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getNom();?>
</a>
        <a class="navbar-brand nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
login/deconnexion">Logout</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
entreprise/index" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="browsejobs.html" class="nav-link">Voir Demandes</a></li>
                <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
entreprise/poste" class="nav-link">Poster Offres</a></li>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getDescription() === '' || $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getDescription() == null) {?>
                <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
entreprise/profil" class="nav-link text-warning">Completer Profil</a></li>
                <?php } else { ?>
                <li class="nav-item"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
entreprise/profil" class="nav-link">Profil</a></li>
                <?php }?>

            </ul>
        </div>
    </div>
</nav>
<?php if ($_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getPhoto() != '') {?>
<div class="hero-wrap img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getPhoto();?>
');">
    <?php } else { ?>
    <div class="hero-wrap img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/images/accueilImg.jpg');">
        <?php }
}
}
