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
              @foreach ($pres as $pre)
              <tr class="hover:bg-gray-lighter">
                <td class="py-4 px-6 border-b border-gray-light dark:border-gray-600">
                
                  
                 <a href="{{ route('pre.show',$pre->id) }}">
                
                
                <div>
                  <h2 class="text-left text-lg font-bold">リーダーシップ</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$pre->action1}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$pre->action2}}</h3>
                </div>
                  
                <div>
                  <h2 class="text-left text-lg font-bold">コミュニケーション</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$pre->action3}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$pre->action4}}</h3>
                </div>
                
                <div>
                  <h2 class="text-left text-lg font-bold">問題解決力</h2>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">100%目標：{{$pre->action5}}</h3>
                  <h3 class="text-left text-lg text-gray-dark dark:text-gray-200">80%目標：{{$pre->action6}}</h3>
                </div>

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

