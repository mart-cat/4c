<x-layout>
    <form action ="{{route('log')}}" method="post">
        @CSRF
        <label>email</label>
        <input type="email" name="email">
        <label>Пароль</label>
        <input type="password" name="password">
        <input type="submit" value="Отправить">
    </form>
</x-layout>