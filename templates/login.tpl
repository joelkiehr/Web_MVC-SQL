
{include file="header.tpl"}

<div class="form small">
    <form action='validate' method='post'>

        <label for='email'>Email</label>
        <input type='email' name='email' id='email'>

        <label for='password'>Password</label>
        <input type='Password' name='password' id='password'>

        {if $error}
            {$error}
        {/if}
        <input type='submit' value='Iniciar Sesion'>
    </form>
</div>

{include file="footer.tpl"}
