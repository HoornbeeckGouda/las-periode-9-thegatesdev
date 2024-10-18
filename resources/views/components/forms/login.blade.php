<form action="auth/login" method="post" id="login-form" class="form-simple flex gap">
    @csrf
    <x-forms.input name="email">Email adres</x-forms.input>
    <x-forms.input name="password">Wachtwoord</x-forms.input>
</form>