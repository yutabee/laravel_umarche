<x-tests.app>
    <x-slot name="header">ヘッダー１</x-slot>
    Conponenttest1
    <x-tests.card title="タイトル" content="本文" :message="$message" />
    <x-tests.card title="タイトル" />
    <x-tests.card title="CSSを変更したい" class="bg-red-300" />
</x-tests.app>