<form method="post" action="{{ route('password.update') }}" class="space-y-6">
    @csrf
    @method('put')

    <div class="space-y-4">
        <!-- Current Password -->
        <div>
            <label for="current_password" class="block text-sm font-medium text-gold mb-2">Current Password</label>
            <input type="password" name="current_password" id="current_password" required 
                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200">
            @error('current_password')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- New Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-gold mb-2">New Password</label>
            <input type="password" name="password" id="password" required 
                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200">
            @error('password')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gold mb-2">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required 
                   class="w-full px-4 py-3 bg-gray-800 border border-gray-700 text-white rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-colors duration-200">
            @error('password_confirmation')
                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="flex items-center gap-4">
        <button type="submit" class="px-6 py-3 gold-gradient text-black font-bold rounded-lg hover:shadow-lg transform hover:scale-105 transition-all duration-300">
            Update Password
        </button>

        @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" 
               class="text-sm text-green-400">Password updated successfully.</p>
        @endif
    </div>
</form>