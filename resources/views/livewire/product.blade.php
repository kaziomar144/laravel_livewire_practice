<div>
   <input type="text" wire:model="title"> <br>
   <input type="text" wire:model="name"><br>


   <h4> Title: {{$title}}</h4>
   <h4> Name: {{$name}}</h4>

   <h2>Lifecycle Hooks Method</h2>

   @foreach ($info as $item)
       <h5>{{$item}} <img src="{{asset('img')}}/loading.gif" alt="" width="70"></h5>
   @endforeach
</div>
