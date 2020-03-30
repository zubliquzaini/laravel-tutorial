<h1>Add New Customer</h1>

<form action="/customer" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" autocomplete="off" value="{{ old('name') }}">
        @error('name') {{ $message }} @enderror
    </div>
    <div>
        <label for="name">Name</label>
        <input type="text" name="email" autocomplete="off" value="{{ old('email') }}">
        @error('email') {{ $message }} @enderror
    </div>
    @csrf
    <button>Add New Customer</button>
</form>
