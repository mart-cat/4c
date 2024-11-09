<x-layout>
@foreach ( $posts as $post)
    <p> {{$post->text}}
    {{$post->created_at}}
    @if ($post->new)
    <a href="{{route('old')}}">Не черновик</a>
    @else
    <a href="{{route('newnew')}}"></ahref>Черновик</a>
    @endif
    </p>
    @endforeach
    

</x-layout>