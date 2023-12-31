<!-- resources/views/tweet/index.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('目標の確認と修正') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:w-10/12 md:w-8/10 lg:w-8/12">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-grey-200 dark:border-gray-800">
          <table class="text-center w-full border-collapse">
            <thead>
              <tr>
                <th class="py-4 px-6 bg-gray-lightest dark:bg-gray-darkest font-bold uppercase text-lg text-gray-dark dark:text-gray-200 border-b border-grey-light dark:border-grey-dark">今期の目標</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($goals as $goal)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                
                  
                 <a href="{{ route('goal.show',$goal->id) }}">
                
                
                <div>
                  <h2 class="text-left text-lg font-bold">リーダーシップ</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$goal->leadership1}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$goal->leadership2}}</h3>
                </div>
                  
                <div>
                  <h2 class="text-left text-lg font-bold">コミュニケーション</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$goal->communication1}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$goal->communication2}}</h3>
                </div>
                
                <div>
                  <h2 class="text-left text-lg font-bold">問題解決力</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$goal->issue1}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$goal->issue2}}</h3>
                </div>

                 </a>
 
          <div class="flex items-center justify-end mt-4"> 
              <div class="flex">
                    <!-- 更新ボタン -->
                    <form action="{{ route('goal.edit',$goal->id) }}" method="GET" class="text-left">
                      @csrf
                      <x-primary-button class="ml-3">
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="gray">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                      </x-primary-button>
                    </form>
          </div>
                

<a href="{{ route('action.show', $action->id) }}">
    <x-primary-button class="ml-3">
        {{ __('行動目標を提出する') }}
    </x-primary-button>
</a>

            </div>
                  
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>

