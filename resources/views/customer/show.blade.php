<h1>
    Customer Details
</h1>

<strong>Name</strong>
<p>{{ $customer->name }}</p>

<strong>Email</strong>
<p>{{ $customer->email }}</p>

<a href="/customers">Return</a>
<a href="/customers/{{ $customer->id }}/edit">Edit</a>
<form action="/customers/{{ $customer->id }}" method="post">
    @method('DELETE')
    @csrf
    <button>Delete</button>
</form>


