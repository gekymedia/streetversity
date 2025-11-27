<form method="post" action="{{ route('profile.update') }}" class="space-y-6">
    @csrf
    @method('patch')

    <div class="space-y-4">
        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-gold mb-2">Name</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required 
                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200">
            @error('name')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gold mb-2">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required 
                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200">
            @error('email')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="px-6 py-3 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Save Changes
        </button>

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" 
               class="text-sm text-green-400">Saved successfully.</p>
        @endif
    </div>
</form>