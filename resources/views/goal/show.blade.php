<!-- resources/views/tweet/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('みんなの目標') }}
    </h2>
  </x-slot>

  
  
  @foreach ($goals as $goal)
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-3/4 lg:w-2/3">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800">
          <div class="mb-6">
            
            <p class="text-left text-gray-800 dark:text-gray-200 font-bold">{{$goal->user->name}}</p>
            <h2 class="text-left text-lg font-bold">リーダーシップ</h2>
           
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">100%目標：{{$goal->leadership1}}</p>
            </div>
            
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">80%目標：{{$goal->leadership2}}</p>
            </div>
            
            
            <h2 class="text-left text-lg font-bold">コミュニケーション</h2>
            <div class="flex flex-col mb-4">
            <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">100%目標：{{$goal->communication1}}</p>
            </div>
            
            <div class="flex flex-col mb-4">
            <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">80%目標：{{$goal->communication2}}</p>
            </div>
            
            <h2 class="text-left text-lg font-bold">問題解決力</h2>
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">100%目標：{{$goal->issue1}}</p>
            </div>
            
            <div class="flex flex-col mb-4">
              <p class="mb-2 uppercase text-lg text-gray-800 dark:text-gray-200">100%目標：{{$goal->issue2}}</p>
            </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>

  @endforeach
  </div>
</x-app-layout>

