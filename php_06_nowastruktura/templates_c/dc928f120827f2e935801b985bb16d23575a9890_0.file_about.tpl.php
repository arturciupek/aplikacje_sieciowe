<?php
/* Smarty version 5.4.2, created on 2025-11-25 14:18:44
  from 'file:about.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6925acb401de12_73699493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc928f120827f2e935801b985bb16d23575a9890' => 
    array (
      0 => 'about.tpl',
      1 => 1764074875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6925acb401de12_73699493 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12315173736925acb4001297_57557966', 'content');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_12315173736925acb4001297_57557966 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\templates';
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
