<?php
/* Smarty version 5.4.2, created on 2025-11-19 10:33:58
  from 'file:C:\xampp\htdocs\aplikacje_sieciowe\php_04_szablony_smarty/app/calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_691d8f063ddb74_20980710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c8685c5dbe5b9599f9c5c5a759e6be5972ce784' => 
    array (
      0 => 'C:\\xampp\\htdocs\\aplikacje_sieciowe\\php_04_szablony_smarty/app/calc.tpl',
      1 => 1762810204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_691d8f063ddb74_20980710 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\aplikacje_sieciowe\\php_04_szablony_smarty\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_614564354691d8f063af281_40053235', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1638032025691d8f063b69c9_54629304', 'content');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_614564354691d8f063af281_40053235 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\aplikacje_sieciowe\\php_04_szablony_smarty\\app';
?>
„Twój spokój zaczyna się od dobrze policzonej raty.”<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1638032025691d8f063b69c9_54629304 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\aplikacje_sieciowe\\php_04_szablony_smarty\\app';
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php#wynik" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu:</label>
			<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
">
			<br>
			<label for="lata">Ilość lat:</label>
			<input id="lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('form')['lata'];?>
">
			<br>
			<label for="procent">Oprocentowanie:</label>
			<input id="procent" type="text" name="procent" value="<?php echo $_smarty_tpl->getValue('form')['procent'];?>
">
			<br>
			<button type="submit" class="pure-button" style="margin-top:15px" >Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ((null !== ($_smarty_tpl->getValue('msgs') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('msgs')) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('rata') ?? null))) {?>
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('rata');?>
 zł
	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
