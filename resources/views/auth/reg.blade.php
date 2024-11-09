<x-layout>
    <form action ="{{route('reg')}}" method="post">
        @CSRF
        <label>Имя</label>
        <input type="text" name="name">
        <label>email</label>
        <input type="email" name="email">
        <label>email</label>
        <input type="email" name="email_confirm">
        <label>Пароль</label>
        <input type="password" name="password">
        <input type="submit" value="Отправить">
    </form>
</x-layout>