<?php
/* Smarty version 5.4.2, created on 2025-11-25 13:35:03
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6925a277cc65d6_81090411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7af0b311683faeab322a372ed23590c627ea8ae' => 
    array (
      0 => 'main.tpl',
      1 => 1764012047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6925a277cc65d6_81090411 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/main.css" />
    <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

    <div id="wrapper">

        <div id="main">
            <div class="inner">

                <header id="header">
                    <a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
" class="logo"><strong><?php echo (($tmp = $_smarty_tpl->getValue('page_header') ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</strong></a>
                </header>

                <section>
                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6984518866925a277cb14a5_73194567', 'content');
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
                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/index.php">Strona główna</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcView">Kalkulator kredytowy</a></li>
                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
about">O projekcie</a></li>
                    </ul>
                </nav>

                <footer id="footer">
                    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12862631966925a277cb95b2_58844076', 'footer');
?>

                </footer>

            </div>
        </div>

    </div>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html>


<?php }
/* {block 'content'} */
class Block_6984518866925a277cb14a5_73194567 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_12862631966925a277cb95b2_58844076 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
?>

                        <p>„Twój spokój zaczyna się od dobrze policzonej raty.”</p>
                    <?php
}
}
/* {/block 'footer'} */
}
