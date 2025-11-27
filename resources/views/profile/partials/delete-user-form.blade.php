<form method="post" action="{{ route('profile.destroy') }}" class="space-y-6">
    @csrf
    @method('delete')

    <div class="space-y-4">
        <p class="text-gray-300 leading-relaxed">
            Once your account is deleted, all of its resources and data will be permanently erased. 
            Please be certain before proceeding.
        </p>

        @if ($user->subscription)
            <div class="bg-red-900 border border-red-700 rounded-lg p-4">
                <p class="text-red-200 text-sm">
                    <strong>Warning:</strong> You have an active subscription. Please cancel your subscription 
                    before deleting your account to avoid any charges.
                </p>
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <button type="button" 
                x-data="{}"
                @click="if(confirm('Are you sure you want to delete your account? This action cannot be undone.')) { $el.closest('form').submit(); }"
                class="px-6 py-3 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 transform hover:scale-105 transition-all duration-300">
            Delete Account
        </button>
    </div>
</form>