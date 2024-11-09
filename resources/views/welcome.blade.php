<x-layout>
    @foreach ( $users as $user)
    @foreach ( $user->posts as $post)
    <p> {{$post->text}}
    {{$post->created_at}}
    {{$user->name}}
    
    </p>
    @endforeach
    @endforeach
Написать свой черновик
<form action ="{{route('new')}}" method="post">
        @CSRF
        <label>Имя</label>
        <input type="text" name="name">
        <input type="submit" value="Отправить">
    </form>
</x-layout>