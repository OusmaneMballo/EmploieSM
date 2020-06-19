<?php
/* Smarty version 3.1.30, created on 2020-06-19 17:07:37
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/profil/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eecd4b9bef978_42980044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1db32d5a6e340eb6a6065efa6171dfbd243d2c06' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/profil/edit.html',
      1 => 1589094723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/entreprise/header.html' => 1,
    'file:src/view/entreprise/footer.html' => 1,
  ),
),false)) {
function content_5eecd4b9bef978_42980044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/entreprise/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/template/images/accueilImg.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil</span></p>
                <h1 class="mb-3 bread">Profil</h1>
            </div>
        </div>
    </div>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
entreprise/edit" class="p-5 bg-white" method="post" enctype="multipart/form-data">

    <div class="row form-group">
        <div class="team d-md-flex p-4 bg-white">
           <?php if ($_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getPhoto() != '') {?>
                <div class="img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/<?php echo $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getPhoto();?>
');"></div>
                <?php } else { ?>
                    <div class="img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/profil.jpg');"></div>
              <?php }?>
            <!--<div class="img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/profil.jpg');"></div>-->
            <input class="form-control col-md-4" type="file" name="fileName" id="fileName"/>
            <!--<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getPhoto();?>
</label>-->
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12"><h3>Entreprise Description</h3></div>
        <div class="col-md-9 mb-3 mb-md-0">
            <textarea name="description" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getEntreprise()->getDescription();?>
" class="form-control" id="" cols="15" rows="10"></textarea>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            <input type="submit" value="Valider" class="btn btn-primary  py-2 px-5">
        </div>
    </div>


</form>
<?php $_smarty_tpl->_subTemplateRender("file:src/view/entreprise/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
