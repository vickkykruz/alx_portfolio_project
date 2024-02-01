<div class="" x-data x-init="
    Livewire.on('countryChanged', (selectedcountry) => {
        @this.set('selectedcountry', selectedcountry);
        @this.refresh('phone-number', { wait: 300 });
    })
    " wire:poll>
    <div class="flex flex-row justify-around items-center mb-3 gap-3 w-full">
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        <div class="md:w-2/5">
            <label for="country" class="block">Country / region</label>
            <select wire:model="selectedcountry" name="selectedcountry" id="countries" wire:change="getStates" wire:change="$emit('countryChanged', '{{ $selectedcountry }}')" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Choose your country</option>
                @foreach ($countries as $country)
                    <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
                @endforeach
            </select>
        </div>
    
        <div class="md:w-2/5">
            <label for="states" class="block">State / province</label>
            <select wire:model="selectedstate" name="selectedstate" id="states" wire:change="getCities" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Choose your state</option>
                @if ($states)
                    @foreach ($states as $state)
                        <option value="{{ $state['state_name'] }}">{{ $state['state_name'] }}</option>    
                    @endforeach
                @endif
            </select>
        </div>
    
        <div class="md:w-2/5">
            <label for="cities" class="block">City</label>
            <select wire:model="selectedcity" name="selectedcity" id="cities" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Choose your city</option>
                @if ($cities)
                    @foreach ($cities as $city)
                        <option value="{{ $city['city_name'] }}">{{ $city['city_name'] }}</option>    
                    @endforeach
                @endif
            </select>
        </div>
    </div>

    {{-- User Phone Number --}}
    @if ($selectedcountry)
        @livewire('phone-number', ['selectedcountry' => $selectedcountry], key($selectedcountry))
    @endif
</div>

