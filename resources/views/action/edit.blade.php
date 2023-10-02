<!-- resources/views/tweet/edit.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標の修正') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 mb-4">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
            
        <h2 class="text-left text-lg font-bold">あなたの前期の目標</h2>   
        @include('common.errors')
        <form class="mb-6" pre="{{ route('pre.update',$pre->id) }}" method="POST">
            @method('put')
            @csrf
        <div class="mb-2">
             <h2 class="text-lg font-bold">全社目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action1" :value="__('①')" />
              <x-text-input id="action1" class="block mt-1 w-full" type="text" name="action1" value="{{$pre->action1}}" required autofocus />
              <x-input-error :messages="$errors->get('action1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action2" :value="__('②')" />
              <x-text-input id="action2" class="block mt-1 w-full" type="text" name="action2" value="{{$pre->action2}}" autofocus />
              <x-input-error :messages="$errors->get('action2')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action3" :value="__('③')" />
              <x-text-input id="action3" class="block mt-1 w-full" type="text" name="action3" value="{{$pre->action3}}" autofocus />
              <x-input-error :messages="$errors->get('action3')" class="mt-2" />
            </div>
        </div>
        
        

        <div class="mb-2">
             <h2 class="text-lg font-bold">部門目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action4" :value="__('①')" />
              <x-text-input id="action4" class="block mt-1 w-full" type="text" name="action4" value="{{$pre->action4}}" required autofocus />
              <x-input-error :messages="$errors->get('action4')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action5" :value="__('②')" />
              <x-text-input id="action5" class="block mt-1 w-full" type="text" name="action5" value="{{$pre->action5}}" autofocus />
              <x-input-error :messages="$errors->get('action5')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action6" :value="__('③')" />
              <x-text-input id="action6" class="block mt-1 w-full" type="text" name="action6" value="{{$pre->action6}}" autofocus />
              <x-input-error :messages="$errors->get('action6')" class="mt-2" />
            </div>
        </div>

        <div class="mb-2">
             <h2 class="text-lg font-bold">個人目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action7" :value="__('①')" />
              <x-text-input id="action7" class="block mt-1 w-full" type="text" name="action7" value="{{$pre->action7}}" required autofocus />
              <x-input-error :messages="$errors->get('action7')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action8" :value="__('②')" />
              <x-text-input id="action8" class="block mt-1 w-full" type="text" name="action8" value="{{$pre->action8}}" autofocus />
              <x-input-error :messages="$errors->get('action8')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action9" :value="__('③')" />
              <x-text-input id="action9" class="block mt-1 w-full" type="text" name="action9" value="{{$pre->action9}}" autofocus />
              <x-input-error :messages="$errors->get('action9')" class="mt-2" />
            </div>
        </div>
        </form> 
        </div> 
        </div>
        </div>
         
    <div class="max-w-7xl mx-auto sm:w-8/12 md:w-1/2 lg:w-5/12 mb-4">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-800 ">
        
        
        <h2 class="text-left text-lg font-bold">あなたの今期の目標</h2> 
        @include('common.errors')
        <form class="mb-6" action="{{ route('action.update',$action->id) }}" method="POST">
            @method('put')
            @csrf
        <div class="mb-2">
            <h2 class="text-lg font-bold">全社目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action1" :value="__('①')" />
              <x-text-input id="action1" class="block mt-1 w-full" type="text" name="action1" value="{{$action->action1}}" required autofocus />
              <x-input-error :messages="$errors->get('action1')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action2" :value="__('②')" />
              <x-text-input id="action2" class="block mt-1 w-full" type="text" name="action2" value="{{$action->action2}}" autofocus />
              <x-input-error :messages="$errors->get('action2')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action3" :value="__('③')" />
              <x-text-input id="action3" class="block mt-1 w-full" type="text" name="action3" value="{{$action->action3}}" autofocus />
              <x-input-error :messages="$errors->get('action3')" class="mt-2" />
            </div>
        </div>

        <div class="mb-2">
             <h2 class="text-lg font-bold">部門目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action4" :value="__('①')" />
              <x-text-input id="action4" class="block mt-1 w-full" type="text" name="action4" value="{{$action->action4}}" required autofocus />
              <x-input-error :messages="$errors->get('action4')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action5" :value="__('②')" />
              <x-text-input id="action5" class="block mt-1 w-full" type="text" name="action5" value="{{$action->action5}}" autofocus />
              <x-input-error :messages="$errors->get('action5')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action6" :value="__('③')" />
              <x-text-input id="action6" class="block mt-1 w-full" type="text" name="action6" value="{{$action->action6}}" autofocus />
              <x-input-error :messages="$errors->get('action6')" class="mt-2" />
            </div>
        </div>

        <div class="mb-2">
             <h2 class="text-lg font-bold">個人目標</h2>
            <div class="flex flex-col mb-4">
              <x-input-label for="action7" :value="__('①')" />
              <x-text-input id="action7" class="block mt-1 w-full" type="text" name="action7" value="{{$action->action7}}" required autofocus />
              <x-input-error :messages="$errors->get('action7')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action8" :value="__('②')" />
              <x-text-input id="action8" class="block mt-1 w-full" type="text" name="action8" value="{{$action->action8}}" autofocus />
              <x-input-error :messages="$errors->get('action8')" class="mt-2" />
            </div>
            <div class="flex flex-col mb-4">
              <x-input-label for="action9" :value="__('③')" />
              <x-text-input id="action9" class="block mt-1 w-full" type="text" name="action9" value="{{$action->action9}}" autofocus />
              <x-input-error :messages="$errors->get('action9')" class="mt-2" />
            </div>
        </div>
        
            <div class="flex items-center justify-end mt-4">
              <a href="{{ url()->previous() }}">
                <x-secondary-button class="ml-3">
                  {{ __('Back') }}
                </x-primary-button>
              </a>
              
              <x-primary-button class="ml-3">
                {{ __('Update') }}
              </x-primary-button>
            </div>
　　    </form>    
            
        </div> 
        </div>
        </div>        

            
         
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

