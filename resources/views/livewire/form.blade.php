<div>
    <label>Name:</label>
    <input type="text" wire:model.debounce.1000ms='name'> <br>
    <label for="">Message:</label>
    <textarea wire:model="message"></textarea> <br>
    <label for="">Marital Status:</label>
    <input type="radio" wire:model="marital_status" value="Single">Single
    <input type="radio" wire:model="marital_status" value="Married">Married <br>
    <label for="">Favorite Color:</label><br>
    <input type="checkbox" wire:model="colors" value="Red"> Red
    <input type="checkbox" wire:model="colors" value="Blue"> Blue
    <input type="checkbox" wire:model="colors" value="Black"> Black <br>

    <label for="">Favorite Fruit</label><br>
    <select name="" id="" wire:model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>
    <hr>
    Name: {{$name}} <br>
    Message: {{$message}} <br>
    Marital Status: {{$marital_status}} <br>
    Favorite Color: 
    <ul>
        @foreach ($colors as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
    Favorite Fruit: {{$fruit}}

    {{-- total: {{$n}} --}}
</div>
