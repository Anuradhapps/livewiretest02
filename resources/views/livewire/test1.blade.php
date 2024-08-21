<div>
    <form wire:submit.prevent='createNewUser' action="">

        <input wire:model='name' type="text" placeholder="name">
        @error('name')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <input wire:model='email' type="email" placeholder="email">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <button>Create New User</button>
    </form>

    <div>{{ count($users) }}</div>
    @foreach ($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</div>
