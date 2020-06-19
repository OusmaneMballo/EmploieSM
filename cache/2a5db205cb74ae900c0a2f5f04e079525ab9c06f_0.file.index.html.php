<?php
/* Smarty version 3.1.30, created on 2020-05-18 03:53:06
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/offre/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ec1ea8234df67_24768568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a5db205cb74ae900c0a2f5f04e079525ab9c06f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/offre/index.html',
      1 => 1589419771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/demandeur/heander.html' => 1,
    'file:src/view/demandeur/footer.html' => 1,
  ),
),false)) {
function content_5ec1ea8234df67_24768568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/demandeur/heander.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- END nav -->

<div class="overlay"></div>
<div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
            <h1 class="mb-4">Decouvrez ici nos meilleurs offres d'emploie!...</h1>
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Offre</span></p>
            <h1 class="mb-3 bread">Liste des Offres</h1>
        </div>
    </div>
</div>
</div>
<section class="ftco-section bg-light">
    <div class="container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listoffre']->value, 'offre');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
?>
        <sec class="row">
            <div class="col-lg-9 pr-lg-4">
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                            <div class="one-third mb-4 mb-md-0">
                                <div class="job-post-item-header align-items-center">
                                    <span class="subadge"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getDomaine();?>
</span>
                                    <h2 class="mr-3 text-black"><a href="#"><?php echo $_smarty_tpl->tpl_vars['offre']->value->getTitre();?>
</a></h2>
                                </div>
                                <div class="job-post-item-body d-block d-md-flex">
                                    <div class="mr-3"><span class="icon-layers"></span>Entreprise <?php echo $_smarty_tpl->tpl_vars['offre']->value->getEntreprise()->getNom();?>
</div>
                                    <div><span class="icon-my_location"></span> <span><?php echo $_smarty_tpl->tpl_vars['offre']->value->getNiveau();?>
</span></div>
                                </div>
                            </div>

                            <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                                <div>
                                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                        <span class="icon-heart"></span>
                                    </a>
                                </div>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
offre/detail/<?php echo $_smarty_tpl->tpl_vars['offre']->value->getId();?>
" class="btn btn-primary py-2">See</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </sec>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:src/view/demandeur/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
