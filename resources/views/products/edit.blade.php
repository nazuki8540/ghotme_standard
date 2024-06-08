<x-app-layout>
    <div>
        {{-- Breadcrumb start --}}
        <div class="mb-6">
            <x-breadcrumb :breadcrumb-items="$breadcrumbItems" :page-title="$pageTitle" />
        </div>
        {{-- Breadcrumb end --}}

        {{-- Update product form start --}}
        <form method="POST" action="{{ route('products.update', $product) }}" class="max-w-4xl m-auto">
            @csrf
            @method('PUT')
            <div class="bg-white dark:bg-slate-800 rounded-md p-5 pb-6">

                <div class="grid sm:grid-cols-1 gap-x-8 gap-y-4">

                    {{-- Name input start --}}
                    <div class="input-area">
                        <label for="name" class="form-label">{{ __('Name') }}</label>
                        <input name="name" type="text" id="name" class="form-control"
                               placeholder="{{ __('Enter product name') }}" value="{{ $product->name }}" required>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    {{-- Name input end --}}

                    {{-- Description input start --}}
                    <div class="input-area">
                        <label for="description" class="form-label">{{ __('Description') }}</label>
                        <textarea name="description" id="description" class="form-control"
                                  placeholder="{{ __('Enter product description') }}" required>{{ $product->description }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2"/>
                    </div>
                    {{-- Description input end --}}

                    {{-- Price input start --}}
                    <div class="input-area">
                        <label for="price" class="form-label">{{ __('Price') }}</label>
                        <input name="price" type="number" id="price" class="form-control"
                               placeholder="{{ __('Enter product price') }}" value="{{ $product->price }}" required>
                        <x-input-error :messages="$errors->get('price')" class="mt-2"/>
                    </div>
                    {{-- Price input end --}}

                    {{-- Quantity input start --}}
                    <div class="input-area">
                        <label for="quantity" class="form-label">{{ __('Quantity') }}</label>
                        <input name="quantity" type="number" id="quantity" class="form-control"
                               placeholder="{{ __('Enter product quantity') }}" value="{{ $product->quantity }}" required>
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2"/>
                    </div>
                    {{-- Quantity input end --}}
                </div>
                <button type="submit" class="btn inline-flex justify-center btn-dark mt-4 w-full">
                    {{ __('Save Changes') }}
                </button>
            </div>
        </form>
        {{-- Update product form end --}}
    </div>
</x-app-layout>
