<form wire:submit.prevent="register" >
    <input type="text" placeholder="name" wire:model="name">
    @error('name')<span>{{ $message }}</span>@enderror
    <input type="text" placeholder="email" wire:model="email">
    @error('email')<span>{{ $message }}</span>@enderror
    <input type="text" placeholder="password" wire:model.lazy="password">
    @error('password')<span>{{ $message }}</span>@enderror
    <input type="text" placeholder="password_confirmation" wire:model.lazy="password_confirmation">
    @error('password_confirmation')<span>{{ $message }}</span>@enderror
    <input type="submit" value="Submit">
 </form>
