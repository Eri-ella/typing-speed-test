    <section 
        x-data="{
            difficulty: 'easy',
            mode: 'timed',
            difficulties: [
                {id: 'easy', name: 'easy'},
                {id: 'medium', name: 'medium'},
                {id: 'hard', name: 'hard'},
            ],
            modes: [
                {id: 'timed', name: 'timed', text: 'timed (60s)'},
                {id: 'passage', name: 'passage', text: 'passage'},
            ]
        }"
        class="flex flex-col">
        <div class="flex justify-between items-center">
            <div class="flex">
                <div>
                    <span class="uppercase">wpm: </span>
                    <span class="text-(--neutral_0) font-bold">0</span>
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div>
                    <span class="capitalize">accuracy: </span>
                    <span class="text-(--red_500) font-bold"><span>100</span>%</span>            
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div>
                    <span class="capitalize">time: </span>
                    <span class="text-(--yellow_400) font-bold">0:60</span>            
                </div>
            </div>
            <div class="flex capitalize">
                <div class="flex gap-2">
                    <legend>difficulty:</legend>

                    <template x-for="item in difficulties" :key="item.id" class="flex gap-2">           
                        <span>           
                            <input type="radio" name="difficulty" :id="item.id" class="hidden" :value="item.id" x-model="difficulty">
                            <label 
                                :for="item.id"
                                :class="difficulty == item.name ? 'cursor-pointer text-(--blue_600) border-1 border-(--blue_600) p-1 rounded-sm' : 'cursor-pointer border-1 border-(--neutral_0) p-1 rounded-sm'"
                                class="hover:text-(--blue_600) hover:border-(--blue_600)"
                                x-text="item.name">
                                
                            </label>
                        </span>                    
                    </template>                
                </div>
                <span class="w-[1px] h-full bg-(--neutral_400) mx-3"></span>
                <div class="flex gap-2">
                    <legend>mode:</legend>
                    <template x-for="item in modes" :key="item.id" class="flex gap-2">           
                        <span>           
                            <input type="radio" name="mode" :id="item.id" class="hidden" :value="item.id" x-model="mode">
                            <label 
                                :for="item.id"
                                :class="mode == item.name ? 'cursor-pointer text-(--blue_600) border-1 border-(--blue_600) p-1 rounded-sm' : 'cursor-pointer border-1 border-(--neutral_0) p-1 rounded-sm'"
                                class="hover:text-(--blue_600) hover:border-(--blue_600)"
                                x-text="item.text">
                                
                            </label>
                        </span>                    
                    </template>       
                </div>
            </div>
        </div>
        <div class="w-full h-[1px] bg-(--neutral_400) mt-6 mb-6"></div>
    </section>  