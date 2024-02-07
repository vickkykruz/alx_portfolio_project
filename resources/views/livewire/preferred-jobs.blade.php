<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="flex flex-row justify-around items-center mb-3 gap-3 w-full">
        <div class="md:w-full">
            <label class="block mb-1 text-sm font-semibold text-gray-900" for="file_input">Industry / Sector</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Choose an Industry / Sector</option>
                <option value="US">United States</option>
                <option value="CA">Canada</option>
                <option value="FR">France</option>
                <option value="DE">Germany</option>
            </select>
        </div>
        <div class="md:w-full">
            <label class="block mb-1 text-sm font-semibold text-gray-900" for="file_input">Skills & Qualiation</label>
            <select data-te-select-init multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option>
                <option value="7">Seven</option>
                <option value="8">Eight</option>
            </select>
            <label data-te-select-label-ref>Skills & Qualiation</label>
        </div>
    </div>
    <div class="flex flex-row justify-around items-center gap-3 w-full">
        <div class="md:w-full">
            <label for="mobile-input" class="block mb-1 text-sm font-medium text-gray-900">Portfoilo URL</label>
            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="flowbite.com" required>
        </div>
        <div class="md:w-full">
            <label for="mobile-input" class="block mb-1 text-sm font-medium text-gray-900">Linkedin URL</label>
            <input type="url" id="website" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="flowbite.com" required>
        </div>
    </div>
</div>
