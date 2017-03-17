

<div class="" id="pop">
  <div class="Name-wrap">
  <div class="Name-html">
    <div class="text-top">
      <a href="#" onclick="document.getElementById('pop').style.display='none';" >[Fechar]</a>
    </div>
    <br>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registre-se</label>
    <div class="Name-form">

      <form class="" action="/" method="POST">
        {{ csrf_field() }}

      <div class="sign-in-htm">
        <div class="group">
          <label for="nome" class="label">Name</label>
          <input id="nome" type="text" class="input">
        </div>
        <div class="group">
          <label for="password" class="label">Senha</label>
          <input id="password" type="password" class="input" data-type="password">
        </div>

        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>

      </div>
    </form>

    <form class="" action="/register/create" method="GET">
      {{ csrf_field() }}
      <div class="sign-up-htm">
        <div class="group">
          <label for="nome" class="label">Name</label>
          <input id="nome" type="text" class="input">
        </div>
        <div class="group">
          <label for="password" class="label">Senha</label>
          <input id="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Repita a Senha</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="email" class="label">Email</label>
          <input id="email" type="text" class="input">
        </div>
          <input type="hidden" name="type" value="1">

        <div class="group">
          <input type="submit" class="button" value="Registrar">
        </div>
        <div class="hr"></div>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
