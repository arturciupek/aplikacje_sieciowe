{extends file="main.tpl"}

{block name=content}

<section>
    <header class="major">
        <p class="content-head is-center" style="text-transform:none;">Zaloguj się, aby skorzystać z kalkulatora kredytowego.</p>
    </header>

    <form action="{$conf->action_url}login" method="post" class="login-form">
        <div class="fields">
            <div class="field">
                <label for="id_login">Login:</label>
                <input id="id_login" type="text" name="login" />
				<br>
            </div>

            <div class="field">
                <label for="id_pass">Hasło:</label>
                <input id="id_pass" type="password" name="pass" />
				<br>
            </div>
        </div>

        <ul class="actions">
            <li><input type="submit" value="Zaloguj" class="primary" /></li>
        </ul>
    </form>

    {include file='messages.tpl'}
</section>
{/block}

