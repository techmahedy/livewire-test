<div>
    <input type="text" wire:model="name">
    <input type="checkbox" wire:model="loud">
    <select wire:model="greeting">
        <option>Hello</option>
        <option>Googbye</option>
        <option>Adios</option>
    </select>
    <form action="#" wire:submit.prevent="resetName('bingo')">
        <button>Reset Name</button>
    </form>
    
    <h1>{{ $greeting }} {{ $name }}</h1> @if($loud) ! @endif
</div>
