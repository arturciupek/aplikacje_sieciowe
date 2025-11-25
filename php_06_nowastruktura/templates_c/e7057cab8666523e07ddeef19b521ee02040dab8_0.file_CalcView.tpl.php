<?php
/* Smarty version 5.4.2, created on 2025-11-24 19:48:07
  from 'file:C:\xampp\htdocs\php_06_kontroler_glowny/app/calc/CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.2',
  'unifunc' => 'content_6924a8678fe269_34545255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7057cab8666523e07ddeef19b521ee02040dab8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_kontroler_glowny/app/calc/CalcView.tpl',
      1 => 1764010084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6924a8678fe269_34545255 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\calc';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13741380146924a8678aab01_56324694', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6391992476924a8678bc970_55637956', 'content');
?>


<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, ($_smarty_tpl->getValue('conf')->root_path).("/templates/main.tpl"), $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_13741380146924a8678aab01_56324694 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\calc';
?>
„Twój spokój zaczyna się od dobrze policzonej raty.”<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_6391992476924a8678bc970_55637956 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_06_kontroler_glowny\\app\\calc';
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute#wynik" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu:</label>
			<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
">
			<br>
			<label for="lata">Liczba lat:</label>
			<input id="lata" type="text" name="lata" value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
">
			<br>
			<label for="procent">Oprocentowanie:</label>
			<input id="procent" type="text" name="procent" value="<?php echo $_smarty_tpl->getValue('form')->procent;?>
">
			<br>
			<button type="submit" class="pure-button" style="margin-top:15px" >Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->rata ?? null))) {?>
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('res')->rata;?>
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
