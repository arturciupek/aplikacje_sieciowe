<?php
/* Smarty version 5.4.2, created on 2025-11-10 22:36:22
  from 'file:C:\xampp\htdocs\php_04_szablony_smarty/app/about.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_69125ad665b414_74026595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0be006784c712add6f5bc5ca24392ceb201173e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_szablony_smarty/app/about.tpl',
      1 => 1762809326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69125ad665b414_74026595 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_177706464669125ad6654696_60197870', 'content');
?>



<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_177706464669125ad6654696_60197870 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_szablony_smarty\\app';
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
