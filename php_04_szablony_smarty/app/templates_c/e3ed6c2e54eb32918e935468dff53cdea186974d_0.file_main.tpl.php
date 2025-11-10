<?php
/* Smarty version 5.4.2, created on 2025-11-10 22:36:20
  from 'file:C:\xampp\htdocs\php_04_szablony_smarty\app\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69125ad45a4134_40070286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3ed6c2e54eb32918e935468dff53cdea186974d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\app\\../templates/main.tpl',
      1 => 1762810564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69125ad45a4134_40070286 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="wrapper">

        <div id="main">
            <div class="inner">

                <header id="header">
                    <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
" class="logo"><strong><?php echo (($tmp = $_smarty_tpl->getValue('page_header') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</strong></a>
                </header>

                <section>
                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_151878354169125ad45a0327_95974368', 'content');
?>

                </section>

            </div>
        </div>

        <div id="sidebar">
            <div class="inner">

                <nav id="menu">
                    <header class="major">
                        <h2>Menu</h2>
                    </header>
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/index.php">Strona główna</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php">Kalkulator kredytowy</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/about.php">O projekcie</a></li>
                    </ul>
                </nav>

                <footer id="footer">
                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_113044478869125ad45a2193_50468805', 'footer');
?>

                </footer>

            </div>
        </div>

    </div>

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('app_url');?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>


<?php }
/* {block 'content'} */
class Block_151878354169125ad45a0327_95974368 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates';
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_113044478869125ad45a2193_50468805 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\templates';
?>

                        <p>„Twój spokój zaczyna się od dobrze policzonej raty.”</p>
                    <?php
}
}
/* {/block 'footer'} */
}
