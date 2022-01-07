<div>
   <button type="button" wire:click="addTwoNumber(99,55)">Sum</button> <br>

   <textarea wire:keydown.enter="displayMsg($event.target.value)"></textarea> <br>

    <form wire:submit.prevent="getSum">
     Enter Num1:   <input type="text" name="num1" wire:model="num1">
     Enter Num2:   <input type="text" name="num2" wire:model="num2">
        <button type="submit">Submit</button>
    </form>

   Sum: {{$sum}} <br>

   Message: {{$msg}} <br>
</div>
