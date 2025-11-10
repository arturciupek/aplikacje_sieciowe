{extends file="../templates/main.tpl"}

{block name=footer}„Twój spokój zaczyna się od dobrze policzonej raty.”{/block}

{block name=content}

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php#wynik" method="post">
		<fieldset>

			<label for="kwota">Kwota kredytu:</label>
			<input id="kwota" type="text" name="kwota" value="{$form['kwota']}">
			<br>
			<label for="lata">Ilość lat:</label>
			<input id="lata" type="text" name="lata" value="{$form['lata']}">
			<br>
			<label for="procent">Oprocentowanie:</label>
			<input id="procent" type="text" name="procent" value="{$form['procent']}">
			<br>
			<button type="submit" class="pure-button" style="margin-top:15px" >Oblicz</button>
		</fieldset>
	</form>
</div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($msgs)}
	{if count($msgs) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $msgs as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($rata)}
	<a id="wynik"></a>
	<h4>Miesięczna rata: </h4>
	<p class="res">
	{$rata} zł
	</p>
{/if}

</div>
</div>

{/block}

