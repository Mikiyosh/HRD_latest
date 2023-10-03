<!-- resources/views/tweet/create.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標設定を行いましょう＿業績目標') }}
    </h2>
  </x-slot>

  <div class="py-12">
    
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-3/4 lg:w-2/3">
      <div>
        <div class="p-6 dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
          @include('common.errors')
         
          <form class="mb-6" action="{{ route('action.store') }}" method="POST">
            @csrf
          
          <div class="mb-2">
             <h2 class="text-lg font-bold">全社目標</h2>
          </div>
           
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="action1" :value="__('①')" />
              <x-text-input id="action1" class="block mt-1 w-full" type="text" name="action1" :value="old('action1')" required autofocus />
              <x-input-error :messages="$errors->get('action1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action2" :value="__('②')" />
              <x-text-input id="action2" class="block mt-1 w-full" type="text" name="action2" :value="old('action2')" required autofocus />
              <x-input-error :messages="$errors->get('action2')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action3" :value="__('③')" />
              <x-text-input id="action3" class="block mt-1 w-full" type="text" name="action3" :value="old('action3')" required autofocus />
              <x-input-error :messages="$errors->get('action3')" class="mt-2" />
            </div>

          </div>
          

          <div class="mb-2">
             <h2 class="text-lg font-bold">部門目標</h2>
          </div>
            
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="action4" :value="__('①')" />
              <x-text-input id="action4" class="block mt-1 w-full" type="text" name="action4" :value="old('action4')" required autofocus />
              <x-input-error :messages="$errors->get('action4')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action5" :value="__('②')" />
              <x-text-input id="action5" class="block mt-1 w-full" type="text" name="action5" :value="old('action5')" required autofocus />
              <x-input-error :messages="$errors->get('action5')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action6" :value="__('③')" />
              <x-text-input id="action6" class="block mt-1 w-full" type="text" name="action6" :value="old('action6')" required autofocus />
              <x-input-error :messages="$errors->get('action6')" class="mt-2" />
            </div>
          </div>


          <div class="mb-2">
             <h2 class="text-lg font-bold">個人目標</h2>
          </div>
          
          <div class="bg-white p-6 rounded-lg shadow-lg mb-3">
            <div class="flex flex-col mb-4">
              <x-input-label for="action7" :value="__('①')" />
              <x-text-input id="action7" class="block mt-1 w-full" type="text" name="action7" :value="old('action7')" required autofocus />
              <x-input-error :messages="$errors->get('action7')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action8" :value="__('②')" />
              <x-text-input id="action8" class="block mt-1 w-full" type="text" name="action8" :value="old('action8')" required autofocus />
              <x-input-error :messages="$errors->get('action8')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action9" :value="__('③')" />
              <x-text-input id="action9" class="block mt-1 w-full" type="text" name="action9" :value="old('action9')" required autofocus />
              <x-input-error :messages="$errors->get('action9')" class="mt-2" />
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

