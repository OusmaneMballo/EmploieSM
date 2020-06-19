<?php
/* Smarty version 3.1.30, created on 2020-06-19 17:06:31
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eecd4777dbdf5_13229396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694fe2ed598e8146f84e8e3867780ffe171fc420' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/index.html',
      1 => 1589094046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/entreprise/header.html' => 1,
    'file:src/view/entreprise/footer.html' => 1,
  ),
),false)) {
function content_5eecd4777dbdf5_13229396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/entreprise/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- END nav -->
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-10 d-flex align-items-center ftco-animate">
                <div class="text text-center pt-5 mt-md-5">
                    <h1 class="mb-5">Bienvenue sur Liguey.sn</h1>
                    <h1 class="mb-4">Prenez le plaisir de recruter les meilleurs profils!...</h1>
                    <div class="ftco-counter ftco-no-pt ftco-no-pb">
                        <div class="row">
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-worldwide"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="0">0</strong>
                                            <span>Countries</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-visitor"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="0">0</strong>
                                            <span>Companies</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text d-flex">
                                        <div class="icon mr-2">
                                            <span class="flaticon-resume"></span>
                                        </div>
                                        <div class="desc text-left">
                                            <strong class="number" data-number="0">0</strong>
                                            <span>Active Employees</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section-parallax">
    <div class="parallax-img d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2>Vous etes satisfaites ?</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2>Laissez nous votre avis! </h2>
                    <p>Votre avis compte beaucoup pour les nouveaux visiteur du site! donc faites-vous plaisir
                        en donnant les bonnes raison aux visiteurs de s'inscrir sur ce site!.</p>
                    <div class="row d-flex justify-content-center mt-4 mb-4">
                        <div class="col-md-12">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $_smarty_tpl->_subTemplateRender("file:src/view/entreprise/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
