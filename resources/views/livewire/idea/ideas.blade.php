<div>
      {{-- start of filter --}}
     <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select 
            wire:model="category"
            id="category"  class="w-full rounded-xl border-none px-4 py-2">
                    <option value="All">All Category</option>
              
              @foreach ($categories as $category)
                    <option value="{{$category->name}}">{{$category->name}}</option>
               @endforeach
               
            </select>
        </div>
        <div class="w-full md:w-1/3">
            <select 
            wire:model="sortby"
            name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
            
                <option value="Top Ideas">Top Ideas</option>
                <option value="Latest">Latest</option>
                <option value="My Ideas">My Ideas</option>
            
            </select>
        </div>
        <div class="w-full md:w-2/3 relative">
            <input 
            wire:model="search"
            type="search" placeholder="Find an idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex itmes-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>
     {{-- end of filter --}}


     {{-- start of ideas cards --}}
        <div class="ideas-container space-y-6 my-4">
            @foreach ($ideas as $idea)
                 <livewire:idea.idea-index :idea="$idea" :key="$idea->id" />
             @endforeach
            
             {{$ideas->appends(request()->query())->links()}}
        
        </div>
     {{-- end of ideas cards --}}

</div>
