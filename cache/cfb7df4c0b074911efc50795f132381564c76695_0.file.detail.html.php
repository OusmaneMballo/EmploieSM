<?php
/* Smarty version 3.1.30, created on 2020-05-18 03:53:35
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/offre/detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1ea9f126867_85012474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfb7df4c0b074911efc50795f132381564c76695' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/offre/detail.html',
      1 => 1589423343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/demandeur/heander.html' => 1,
    'file:src/view/demandeur/footer.html' => 1,
  ),
),false)) {
function content_5ec1ea9f126867_85012474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/demandeur/heander.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
            <h1 class="mb-4">Decouvrez ici nos meilleurs offres d'emploie!...</h1>
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Offre</span></p>
            <h1 class="mb-3 bread">Details Offre</h1>
        </div>
    </div>
</div>
</div>
<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pr-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="team d-md-flex p-4 bg-white">
                            <div class="img" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/<?php echo $_smarty_tpl->tpl_vars['offre']->value->getEntreprise()->getPhoto();?>
');"></div>
                            <div class="text pl-md-4">
                                <span class="location mb-3">Entreprise: <?php echo $_smarty_tpl->tpl_vars['offre']->value->getEntreprise()->getNom();?>
</span>
                                <h2>Titre: <?php echo $_smarty_tpl->tpl_vars['offre']->value->getTitre();?>
</h2>
                                <span class="position">Experience:<?php echo $_smarty_tpl->tpl_vars['offre']->value->getNiveau();?>
</span><br>
                                <span class="position">Domaine:<?php echo $_smarty_tpl->tpl_vars['offre']->value->getDomaine();?>
</span><br/>
                                <span class="position">Profile:<?php echo $_smarty_tpl->tpl_vars['offre']->value->getProfil();?>
</span>
                                <p class="mb-2"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getDescription();?>
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 mb-5">
            <form method="post" class="p-5 bg-white" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
demande/postuler/<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
">
                <div class="row form-group">
                    <div class="col-md-12"><h3>Lettre Motivation<small>(*)</small><?php if (isset($_smarty_tpl->tpl_vars['erro']->value)) {
if ($_smarty_tpl->tpl_vars['error']->value == 1) {?><small class="text-danger">Champ obligatoir...</small><?php }
}?></h3></div>
                    <div class="col-md-12 mb-3 mb-md-0">
                        <textarea name="motivation" class="form-control" id="" cols="28" rows="8" required></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Postuler" class="btn btn-primary  py-2 px-5">
                    </div>
                </div>
            </form>
        </div>

    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:src/view/demandeur/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
