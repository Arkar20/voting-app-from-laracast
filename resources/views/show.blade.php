<x-app-layout>
    <div>
        {{-- start of naviagation  --}}
               <a href="#" class="flex items-center space-x-1">
                    <svg class="w-4 h-4 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                         </svg>
                     <span class="text-lg text-gray-700">Ideas</span>
               </a>
        {{--end of naviagation  --}}

        {{-- start of single idea  --}}
        <div class="idea-container max-width-100 bg-white rounded-md  shadow-lg flex py-6">
               
                  <a href="#" class="px-4 flex-none">
                            <img 
                                class=" w-14 h-14 rounded-full"
                                src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairTheCaesarSidePart&accessoriesType=Sunglasses&hairColor=BrownDark&facialHairType=BeardMajestic&facialHairColor=BrownDark&clotheType=ShirtScoopNeck&clotheColor=Gray01&eyeType=Side&eyebrowType=RaisedExcited&mouthType=Twinkle&skinColor=Light'/>
                        </a>
                <div class="flex-col">
                    <div class="flex  ">
                      
                        <div class="">
                            <p class="font-semibold text-3xl">A ramdom title can go here.</p>
                            <p class="mt-3 line-clamp-3">
                                Something 
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full justify-between mt-10 mx-2">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900">John Doe</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                          </div>
                          <div class="flex space-x-1">
                                <button class="relative w-10 rounded-3xl flex justify-center items-center transition duration-150 text-xs bg-gray-300 hover:bg-gray-400">
                                        <svg  xmlns="http://www.w3.org/2000/svg" width="15" height="4" viewBox="0 0 27 6">
                                            <g id="Icon_feather-more-horizontal" data-name="Icon feather-more-horizontal" transform="translate(-4.5 -15)">
                                                <path id="Path_2" data-name="Path 2" d="M19.5,18A1.5,1.5,0,1,1,18,16.5,1.5,1.5,0,0,1,19.5,18Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                <path id="Path_3" data-name="Path 3" d="M30,18a1.5,1.5,0,1,1-1.5-1.5A1.5,1.5,0,0,1,30,18Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                                <path id="Path_4" data-name="Path 4" d="M9,18a1.5,1.5,0,1,1-1.5-1.5A1.5,1.5,0,0,1,9,18Z" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                                            </g>
                                          </svg>
                                          {{-- start of popup     --}}
                                          <div class="w-40 hidden absolute bg-white shadow-md ml-40 top-10">
                                              <ul>
                                                  <li class="p-3 hover:bg-gray-100">Lock The Idea</li>
                                                  <li class="p-3 hover:bg-gray-100 hover:text-red-600">Delete The Idea</li>
                                              </ul>
                                          </div>
                                          
                                          {{-- end of popup     --}}

                                </button>
                          </div>
                    </div>
                </div>
            </div>
        {{-- end of single idea  --}}

        {{-- start of buttons --}}
            <div class="buttons-section w-full flex justify-between mt-4  ">
                <div class="left ">
                    <div class="flex space-x-1">
                        <div 
                         x-data="{openSideMenu:false}"
                        class="relative">
                                    <button
                                        @click="openSideMenu = ! openSideMenu"
                                            type="submit"
                                            class="flex items-center justify-center h-11 text-xs bg-blue-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                        >
                                     <span class="ml-1">Reply</span>
                                 </button>
                                 <div 
                                   x-cloak  
                                            x-show.transition.top.left.duration.200ms="openSideMenu"
                                            @click.away="openSideMenu = ! openSideMenu"
                                            @keydown.escape.window="openSideMenu =  false"
                                 class="z-10  absolute w-80 bg-white rounded-md shadow-lg border border-1 border-gray-200 py-1 px-2">
                                     <form action="#" class="space-y-2">
                                            <textarea name="reply"
                                            class="w-full border border-1 border-gray-200 rounded-lg shadow-md focus:border-green-400"
                                            rows="3"
                                            placeholder="Reply Your Message"
                                            ></textarea>
                                            <div class="flex space-x-4">
                                                    <button
                                                            type="submit"
                                                            class="flex items-center justify-center h-11 text-xs bg-blue-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                                        >
                                                    <span class="ml-1">Post Comment</span>
                                                </button>
                                                    <button
                                                            type="submit"
                                                            class="flex items-center justify-center h-11 text-xs bg-gray-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                                        >
                                                    <span class="ml-1">Attach</span>
                                                </button>
                                            </div>
                                     </form>
                                 </div>
                        </div>
                        <div 
                        x-data="{openSideMenu:false}"
                        class="relative">
                             <button
                                @click="openSideMenu=!openSideMenu"
                                 type="submit"
                                 class="  justify-between h-11 text-xs bg-gray-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                             >
                             <div class="flex space-x-4">
                                 <span class="ml-1">Set Status</span>
                                 <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                 </svg>
                             </div>
                             </button>

                                 <div 
                                        x-cloak  
                                            x-show.transition.top.left.duration.200ms="openSideMenu"
                                            @click.away="openSideMenu = ! openSideMenu"
                                            @keydown.escape.window="openSideMenu =  false"
                                 class="absolute top-10 z-10 bg-white rounded-lg shadow-xl font-normal text-black w-56 py-1 px-2">
                                    <ul>
                                        <li class="py-4 px-2 flex justify-center space-x-4">
                                            <input type="radio" name="option1" checked="" class="text-green-400 border-none"/>
                                           <span>Option 1</span>
                                        </li>
                                        <li class="py-4 px-2 flex justify-center space-x-4">
                                            <input type="radio" name="option1" class=" focus:bg-blue-400"/>
                                           <span>Option 1</span>
                                        </li>
                                        <li class="py-4 px-2 flex justify-center space-x-4">
                                            <input type="radio" name="option1" class=" focus:bg-blue-400"/>
                                           <span>Option 1</span>
                                        </li>
                                        <li class="py-4 px-2 flex justify-center space-x-4">
                                            <input type="radio" name="option1" class=" focus:bg-blue-400"/>
                                           <span>Option 1</span>
                                        </li>
                                    </ul>
                                    <textarea name="reply"
                                            class="w-full border border-1 border-gray-200 rounded-lg shadow-md focus:border-green-400 placeholder-gray-200"
                                            rows="3"
                                            placeholder="Add an tag (Optional)"
                                            ></textarea>
                                    <div class="flex justify-between mt-3">
                                                <button class="flex items-center justify-center h-11 text-xs bg-gray-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3">
                                                        Attach
                                                </button>
                                                <button
                                                    type="submit"
                                                    class="flex items-center justify-center h-11 text-xs bg-blue-400 text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                                >
                                                    <span class="ml-1">Submit</span>
                                                </button>
                                        </div>
                                </div>

                             </button>
                        </div>
                         
                    </div>
                </div>
                <div class="right-btngp ">
                     <div class="flex items-center  mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-bold leading-none">12</div>
                            <div class="text-xs font-semibold leading-none text-gray-400">Votes</div>
                        </div>
                        <button
                            class="w-20 bg-gray-300 border border-gray-200 font-bold text-xs uppercase rounded-xl hover:border-gray-400 transition duration-150 ease-in px-4 py-3 -mx-5"
                        >
                            Vote
                        </button>
                    </div>
                </div>
            </div>
        {{-- end of buttons --}}

        {{-- start of replies  --}}
            <div class="ml-10 replies-section relative flex-col my-4 space-y-6">
               {{-- start of singel reply   --}}
                <div class="reply-section relative flex border border-1 border-gray-300 cursor-pointer   hover:border-green-500 rounded-md shadow-md">
                    <div class="flex-none">
                    
                        <a href="#" class="px-4 flex-none">
                                <img 
                                    class=" w-14 h-14 rounded-full"
                                    src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairTheCaesarSidePart&accessoriesType=Sunglasses&hairColor=BrownDark&facialHairType=BeardMajestic&facialHairColor=BrownDark&clotheType=ShirtScoopNeck&clotheColor=Gray01&eyeType=Side&eyebrowType=RaisedExcited&mouthType=Twinkle&skinColor=Light'/>
                            </a>

                    </div>    
                <div class="flex-col">
                    <div class="flex">
                      
                        <div class="py-4 px-2">
                            <p class="mt-3 line-clamp-3">
                                Aute irure incididunt nisi mollit eu esse quis est est sunt. Ad laboris occaecat minim nostrud id. Ex labore do anim ipsum nulla veniam ut tempor reprehenderit deserunt. Nostrud voluptate mollit cupidatat voluptate. Proident commodo veniam ex ad velit nostrud commodo incididunt laborum non eiusmod cillum. Deserunt laborum ut ullamco elit aliqua ut in.
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full justify-between my-4 mx-2">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900">John Doe</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>10 hours ago</div>
                      
                          </div>
                         
                    </div>
                </div>
                </div>
               {{-- end of singel reply   --}}
               {{-- start of singel reply   --}}
                <div class="reply-section relative flex border border-1 border-gray-300 cursor-pointer   hover:border-green-500 rounded-md shadow-md">
                    <div class="flex-none">
                    
                        <a href="#" class="px-4 flex-none">
                                <img 
                                    class=" w-14 h-14 rounded-full"
                                    src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairTheCaesarSidePart&accessoriesType=Sunglasses&hairColor=BrownDark&facialHairType=BeardMajestic&facialHairColor=BrownDark&clotheType=ShirtScoopNeck&clotheColor=Gray01&eyeType=Side&eyebrowType=RaisedExcited&mouthType=Twinkle&skinColor=Light'/>
                            </a>

                    </div>    
                <div class="flex-col">
                    <div class="flex">
                      
                        <div class="py-4 px-2">
                            <p class="mt-3 line-clamp-3">
                                Aute irure incididunt nisi mollit eu esse quis est est sunt. Ad laboris occaecat minim nostrud id. Ex labore do anim ipsum nulla veniam ut tempor reprehenderit deserunt. Nostrud voluptate mollit cupidatat voluptate. Proident commodo veniam ex ad velit nostrud commodo incididunt laborum non eiusmod cillum. Deserunt laborum ut ullamco elit aliqua ut in.
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full justify-between my-4 mx-2">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900">John Doe</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>10 hours ago</div>
                      
                          </div>
                         
                    </div>
                </div>
                </div>
               {{-- end of singel reply   --}}
               {{-- start of singel reply   --}}
                <div class="reply-section isadmin relative flex border border-1 border-gray-300 cursor-pointer   hover:border-green-500 rounded-md shadow-md">
                    <div class="flex-none">
                    
                        <a href="#" class="px-4 flex-none">
                                <img 
                                    class=" w-14 h-14 rounded-full"
                                    src='https://avataaars.io/?avatarStyle=Circle&topType=ShortHairTheCaesarSidePart&accessoriesType=Sunglasses&hairColor=BrownDark&facialHairType=BeardMajestic&facialHairColor=BrownDark&clotheType=ShirtScoopNeck&clotheColor=Gray01&eyeType=Side&eyebrowType=RaisedExcited&mouthType=Twinkle&skinColor=Light'/>
                            </a>

                    </div>    
                <div class="flex-col">
                    <div class="flex">
                      
                        <div class="py-4 px-2">
                            <p class="mt-3 line-clamp-3">
                                Aute irure incididunt nisi mollit eu esse quis est est sunt. Ad laboris occaecat minim nostrud id. Ex labore do anim ipsum nulla veniam ut tempor reprehenderit deserunt. Nostrud voluptate mollit cupidatat voluptate. Proident commodo veniam ex ad velit nostrud commodo incididunt laborum non eiusmod cillum. Deserunt laborum ut ullamco elit aliqua ut in.
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full justify-between my-4 mx-2">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="hidden md:block font-bold text-gray-900">Admin</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>10 hours ago</div>
                      
                          </div>
                         
                    </div>
                </div>
                </div>
               {{-- end of singel reply   --}}
               
               

            </div>
        {{-- end of replies  --}}
    </div>
</x-app-layout>