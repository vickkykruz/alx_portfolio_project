<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="stepper mb-8" style="display:flex; justify-content:center">
        <div class="stepper-center">
            <ol class="items-center w-full space-y-4 sm:flex sm:space-x-8 sm:space-y-0 rtl:space-x-reverse">
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        1
                    </span>
                    <span>
                        <h3 class="font-medium leading-tight">Account Creation</h3>
                        <p class="text-sm">Step details here</p>
                    </span>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        2
                    </span>
                    <span>
                        <h3 class="font-medium leading-tight">User info</h3>
                        <p class="text-sm">Step details here</p>
                    </span>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        3
                    </span>
                    <span>
                        <h3 class="font-medium leading-tight">Contact Verification</h3>
                        <p class="text-sm">Step details here</p>
                    </span>
                </li>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        4
                    </span>
                    <span>
                        <h3 class="font-medium leading-tight">Company info</h3>
                        <p class="text-sm">Step details here</p>
                    </span>
                </li>
                <li class="flex items-center text-gray-500 dark:text-gray-400 space-x-2.5 rtl:space-x-reverse">
                    <span class="flex items-center justify-center w-8 h-8 border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        5
                    </span>
                    <span>
                        <h3 class="font-medium leading-tight">Go to Dashboard</h3>
                        <p class="text-sm">Step details here</p>
                    </span>
                </li>
            </ol>
        </div>
    </div>

    <div class="mt-20">
        @if ($phoneVerifiedStatus == 'false')
        <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
              Invaild Mobile Number. Click on a <b>Edit Mobile Number</b> to edit your number.
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
            </button>
          </div>
        @endif
        <ul class="w-full divide-y divide-gray-200">
            <li class="pb-3 sm:pb-4 w-full">
                <div class="flex w-full items-center space-x-4 rtl:space-x-reverse">
                    <div class="flex-shrink-0">
                        <svg class="w-12 h-12 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                          </svg>

                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Email Verification
                        </p>
                        <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Click on <b>Verify Email</b> to verify this email address <span class="text-muted">{{ $userData['email'] }}</span>
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{-- Submit Button --}}
                        <div class="md:col-span-5 text-right">
                            @if (Auth::user()->hasVerifiedEmail())
                                <input type="hidden" wire:model="verifiedEmail" value="Verified">
                                <div class="inline-flex items-end">
                                    <button type="button" disabled class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Verifed</button>
                                </div>
                            @else
                                <input type="hidden" wire:model="verifyEmail" value="Not Verified">
                                <div class="inline-flex items-end">
                                    <button wire:click="verifyEmail" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Verify your Email Address</button>
                                </div>
                            @endif

                        </div>

                    </div>
                </div>
            </li>
            <li class="pb-3 sm:pb-4 w-full">
                <div class="flex mt-3 items-center space-x-4 rtl:space-x-reverse">
                    <div class="flex-shrink-0">
                        <svg class="w-10 h-10 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                          </svg>

                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            Mobile Number Verification
                        </p>
                        <p style="margin-left: 5px;" class="text-sm text-gray-500 truncate dark:text-gray-400">
                            Click on <b>Verify Phone Number</b> to verify this phone number <span class="text-muted">{{ $formattedPhoneNumber }} {{ $phoneVerifiedStatus }}</span>
                        </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                        {{-- Submit Button --}}
                        <div class="md:col-span-5 text-right">
                            <div class="inline-flex items-end">
                                @if ($phoneVerifiedStatus == 'true')
                                    <input type="hidden" wire:model="verifyPhone" value="Verified">
                                    <button type="button" disabled class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Verified</button>
                                @elseif ($phoneVerifiedStatus === 'false')
                                    <input type="hidden" wire:model="verifyPhone" value="Not Verified">
                                    <button type="button" data-modal-target="static-modal" data-modal-toggle="static-modal" wire:click="toggleModal" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit Mobile Number</button>

                                    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="{{ $showModal ? '' : 'hidden' }} fixed top-0 right-0 bottom-0 left-0 flex items-center justify-center bg-black bg-opacity-50">
                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <!-- Modal header -->
                                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                                        Edit Mobile Number
                                                    </h3>
                                                    <button type="button" wire:click="closeToggleModal" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="static-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="p-4 md:p-5 space-y-4">
                                                    <form class="max-w-sm mx-auto">
                                                        @foreach ($countries as $country)
                                                            @if ($country["country_name"] == $countryName)
                                                                <div class="md:w-full">
                                                                    <label for="phone-input" class="block">Mobile Number</label>
                                                                    <div class="flex items-center">
                                                                        <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">
                                                                            <img class="h-5 w-5 me-2" src="https://flagsapi.com/{{ $country['country_short_name'] }}/flat/32.png"> +{{ $country['country_phone_code'] }}
                                                                        </button>
                                                                        <div class="relative w-full">
                                                                            <input type="text" id="phone-input" name="phone-input" wire:model="insertNewNumber" value="{{ $userInfo->mobileNumber }}" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-0 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" maxlength="10" placeholder="123-456-7890">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        @endforeach

                                                    </form>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                    <button data-modal-hide="static-modal" type="button" wire:click="saveNewNumber" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                                    <button data-modal-hide="static-modal" type="button" wire:click="closeToggleModal" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <input type="hidden" wire:model="verifyPhone" value="Not Verified">
                                    <button wire:click="verifyPhoneNumber({{ $userInfo->countryPhoneCode .''. $userInfo->mobileNumber }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Verifiy your Phone Number</button>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </li>
        </ul>

        {{-- Submit --}}
        <div class="md:col-span-5 text-right mt-10">
            <div class="inline-flex items-end">
                <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 disabled px-4 rounded">Continue</button>
            </div>
        </div>

    </div>

</div>
