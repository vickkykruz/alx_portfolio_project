<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

    @switch($status)
        @case(2)
            @livewire('user-form-info', ['userData' => $userData])        
            @break
        @case(3)
            @livewire('verify-user-contant', ['userData' => $userData, 'userInfo' => $userInfo])    
            @break
    
        @default
            <h5 class="text-center text-danger">Page Error</h5>
    @endswitch
    
</div>
