<div>
    <label for="name">Name</label>
    <input type="text" name="name" autocomplete="off" value="{{ old('name') ?? $customer->name }}">
    @error('name') {{ $message }} @enderror
</div>
<div>
    <label for="name">Email</label>
    <input type="text" name="email" autocomplete="off" value="{{ old('email') ?? $customer->email }}">
    @error('email') {{ $message }} @enderror
</div>
@csrf
