<?php
/* Smarty version 3.1.30, created on 2020-06-19 17:09:19
  from "/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/offre/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5eecd51f9debc8_10523857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e933f5ac5c250881142b8a1367117bfe5f55c110' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Mes Sites/DITI/Emploie/src/view/entreprise/offre/add.html',
      1 => 1589099678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/entreprise/header.html' => 1,
    'file:src/view/entreprise/footer.html' => 1,
  ),
),false)) {
function content_5eecd51f9debc8_10523857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:src/view/entreprise/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- END nav -->

    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Offre</span></p>
                <h1 class="mb-3 bread">Post A Job</h1>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 col-lg-8 mb-5">

    <form method="post" class="p-5 bg-white" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/offre/addoffre">

        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label class="font-weight-bold" for="fullname">Titre de la Poste</label>
                <input type="text" id="fullname" name="titre" class="form-control" placeholder="eg. Professional UI/UX Designer" required>
            </div>
        </div>

        <div class="row form-group mb-4">
            <div class="col-md-12"><h3>Domaine</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" name="domaine" class="form-control" placeholder="Exp...Informatique" required>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
                <label for="option-job-type-2">
                    <select name="niveau" id="option-job-type-2" class="form-control" required>
                        <option value="0">--Selectionnez Niveau--</option>
                        <option value="1">Debutant</option>
                        <option value="2">2ans Experiences</option>
                        <option value="3">3ans Experiences</option>
                        <option value="4">4ans Experiences</option>
                        <option value="5">5ans Experiences</option>
                        <option value="6">Plus 5ans Experiences</option>
                    </select>
                </label>
            </div>
        </div>

        <div class="row form-group mb-4">
            <div class="col-md-12"><h3>Profil</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
                <input type="text" name="profil" class="form-control" placeholder="Exp...Technicien" required>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12"><h3>Job Description</h3></div>
            <div class="col-md-12 mb-3 mb-md-0">
                <textarea name="description" class="form-control" id="" cols="20" rows="5" required></textarea>
            </div>
        </div>

        <div class="row form-group">
            <div class="col-md-12">
                <input type="submit" value="Poster" class="btn btn-primary  py-2 px-5">
            </div>
        </div>


    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:src/view/entreprise/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
