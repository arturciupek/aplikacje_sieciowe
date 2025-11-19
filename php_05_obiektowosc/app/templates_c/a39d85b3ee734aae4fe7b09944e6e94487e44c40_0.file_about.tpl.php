<?php
/* Smarty version 5.4.2, created on 2025-11-19 18:56:09
  from 'file:C:\xampp\htdocs\php_05_obiektowosc/app/about.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691e04b9e7dab6_51120645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39d85b3ee734aae4fe7b09944e6e94487e44c40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_obiektowosc/app/about.tpl',
      1 => 1763574661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691e04b9e7dab6_51120645 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_647980434691e04b9e73d79_69241533', 'content');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_647980434691e04b9e73d79_69241533 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_05_obiektowosc\\app';
?>

    <h2 class="content-head is-center">O projekcie</h2>

    <p>
        Widok oparty na stylach i szablonie <a href="https://html5up.net" target="_blank">HTML5 UP (Editorial)</a>. 
        Projekt realizowany w ramach przedmiotu Aplikacje Sieciowe – przykład integracji 
        logiki aplikacji z warstwą prezentacji przy użyciu systemu szablonów Smarty.
        <br><br>
        <em>(autor przykładu: Artur Ciupek)</em>
    </p>
<?php
}
}
/* {/block 'content'} */
}
