<x-guest-layout>
{{--    <x-jet-authentication-card>--}}
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="mx-aut w-full sm:max-w-md mt-6 px-3 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('books.store') }}">
                @csrf

                <div>
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                </div>
                <div>
                    <x-jet-label for="name" value="{{ __('Full name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>
                <div>
                    <x-jet-label for="phone_number" value="{{ __('Phone Number') }}" />
                    <x-jet-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" required autofocus />
                </div>
                <div>
                    <x-jet-label for="address" value="{{ __('Address') }}" />
                    <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
                </div>
                <div>
                    <x-jet-label for="address" value="{{ __('Comments') }}" />
                    <textarea class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500" name="comments" ></textarea>
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-400 text-md font-bold mb-2" for="pair">
                        Select Books
                    </label>
                    <select
                        class="js-example-basic-multiple" style="width: 100%"
                        data-placeholder="Select one or more cities..."
                        data-allow-clear="false"
                        multiple="multiple"
                        name="books[]"
                        title="select books">
                        @foreach($books as $book)
                            <option value="{{ $book['id'] }}">{{ $book['name'] }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="flex items-center justify-end mt-4">


                    <x-jet-button class="ml-4">
                        {{ __('Order') }}
                    </x-jet-button>
                </div>
            </form>
        </div>
{{--    </x-jet-authentication-card>--}}
    </div>
</x-guest-layout>
