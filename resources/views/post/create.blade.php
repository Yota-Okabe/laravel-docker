<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white-800 leading-tight">
            フォーム
        </h2>
    </x-slot>

    <div class="max-w-7xl max-auto px-6">
        @if (session('message'))
            <div class="text-red-600 font-bold">
                {{ session('message') }}
            </div>
        @endif
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="mt-8">
                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
                </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">本文</label>
                    <textarea name="body" id="body" cols="30" rows="5" class="w-auto py-2 border border-gray-300 rounded-md"></textarea>
                </div>

                <x-primary-button class="mt-4">
                    送信する
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>