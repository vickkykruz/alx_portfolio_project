<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="flex flex-row justify-around items-center gap-3 w-full">
        {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
        @foreach ($countries as $country)
            @if ($country["country_name"] == $countryName)
                <div class="md:w-full">
                    <label for="country" class="block">Mobile Number</label>
                    <div class="flex items-center">
                        <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                            <img class="h-5 w-5 me-2" src="https://flagsapi.com/{{ $country['country_short_name'] }}/flat/32.png"> +{{ $country['country_phone_code'] }}
                        </button>
                        <label for="phone-input" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Phone number:</label>
                        <div class="relative w-full">
                            <input type="text" id="phone-input" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
                        </div>
                    </div>
                </div>
            
                <div class="md:w-full">
                    <label for="country" class="block">Phone Number</label>
                    <div class="flex items-center">
                        <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                            <img class="h-5 w-5 me-2" src="https://flagsapi.com/{{ $country['country_short_name'] }}/flat/32.png"> +{{ $country['country_phone_code'] }}
                        </button>
                        <label for="phone-input" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Phone number:</label>
                        <div class="relative w-full">
                            <input type="text" id="phone-input" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required>
                        </div>
                    </div>
                </div>        
            @endif
        @endforeach        
    </div>
</div>
