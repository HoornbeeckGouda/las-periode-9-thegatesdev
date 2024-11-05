<form action="auth/login" method="post" id="login-form" class="form-simple flex gap">
    @csrf
    <x-form.input name="email">Email adres</x-form.input>
    <x-form.input name="password">Wachtwoord</x-form.input>
</form>