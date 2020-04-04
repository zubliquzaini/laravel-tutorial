<h1>Edit Customer</h1>

<form action="/customers/{{ $customer->id }}" method="post">

    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" autocomplete="off" value="{{ $customer->name }}">
        @error('name') {{ $message }} @enderror
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="email" autocomplete="off" value="{{ $customer->email }}">
        @error('email') {{ $message }} @enderror
    </div>
    @csrf
    <button>Save</button>
</form>
