<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定を行いましょう＿行動目標') }}
    </h2>
  </x-slot>

  <div class="py-12">
    
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-3/4 lg:w-2/3">
      <div>
        <div class="p-6 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
         
          <form class="mb-6" action="{{ route('goal.store') }}" method="POST">
            @csrf
          
          <div class="mb-2">
             <h2 class="text-lg font-bold">リーダーシップ</h2>
          </div>
           
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="leadership1" :value="__('100%目標')" />
              <x-text-input id="leadership1" class="block mt-1 w-full" type="text" name="leadership1" :value="old('leadership1')" required autofocus />
              <x-input-error :messages="$errors->get('leadership1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="leadership2" :value="__('80%目標')" />
              <x-text-input id="leadership1" class="block mt-1 w-full" type="text" name="leadership2" :value="old('leadership2')" required autofocus />
              <x-input-error :messages="$errors->get('leadership2')" class="mt-2" />
            </div>
          </div>
          

          <div class="mb-2">
             <h2 class="text-lg font-bold">コミュニケーション</h2>
          </div>
            
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="communication1" :value="__('100%目標')" />
              <x-text-input id="communication1" class="block mt-1 w-full" type="text" name="communication1" :value="old('communication1')" required autofocus />
              <x-input-error :messages="$errors->get('communication1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="communication2" :value="__('80%目標')" />
              <x-text-input id="communication2" class="block mt-1 w-full" type="text" name="communication2" :value="old('communication2')" required autofocus />
              <x-input-error :messages="$errors->get('communication2')" class="mt-2" />
            </div>
          </div>


          <div class="mb-2">
             <h2 class="text-lg font-bold">問題解決</h2>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="issue1" :value="__('100%目標')" />
              <x-text-input id="issue1" class="block mt-1 w-full" type="text" name="issue1" :value="old('issue1')" required autofocus />
              <x-input-error :messages="$errors->get('issue1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="issue2" :value="__('80%目標')" />
              <x-text-input id="issue2" class="block mt-1 w-full" type="text" name="issue2" :value="old('issue2')" required autofocus />
              <x-input-error :messages="$errors->get('issue2')" class="mt-2" />
            </div>
          </div>
            

            <div class="flex items-center justify-end mt-4">
              <x-primary-button class="ml-3">
                {{ __('次へ') }}
              </x-primary-button>
            </div>
          </form>
          
          
          
        </div>
      </div>
    </div>
  </div>
  
  


</x-app-layout>

