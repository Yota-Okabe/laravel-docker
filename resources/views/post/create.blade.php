<x-app-layout class="max-w-7xl max-auto px-6">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            フォーム
        </h2>
    </x-slot>

    <div class="mt-8">
        <form action="">
            <div class="w-full flex flex-col">
                <label for="title" class="font-semibold mt-4">件名</label>
                <input type="text" name="title" class="w-auto py-2 border border-gray-300 rounded-md" id="title">
            </div>

            <div class="w-full flex flex-col">
                <label for="body" class="font-semibold mt-4">本文</label>
                <textarea name="body" id="body" cols="30" rows="10" class="w-auto py-2 border border-gray-300 ronded-md"></textarea>
            </div>

            <x-primary-button class="mt-4">
                送信する
            </x-primary-button>
        </form>
    </div>
</x-app-layout>