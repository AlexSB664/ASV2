@csrf
<div id="giftExchangeFields">
    

<div class="form-row">
    <div class="col">
        <label class="label" for="title">Friend 1:</label>
        <input class="input" id="person1" type="text" name="person1" 
        placeholder="Name of the person" required>
    </div>
    <div class="col">
        <label class="label" for="description">Telephone:</label>
        <input class="input" id="telephone1" type="text" name="telephone1" 
        placeholder="Telephone of the person" required>
    </div>
</div>

<div class="form-row">
        <div class="col">
            <label class="label" for="title">Friend 2:</label>
            <input class="input" id="person2" type="text" name="person2" 
            placeholder="Name of the person" required>
        </div>
        <div class="col">
            <label class="label" for="description">Telephone:</label>
            <input class="input" id="telephone2" type="text" name="telephone2" 
            placeholder="Telephone of the person" required>
        </div>
</div>

<div class="form-row">
        <div class="col">
            <label class="label" for="title">Friend 3:</label>
            <input class="input" id="person3" type="text" name="person3" 
            placeholder="Name of the person" required>
        </div>
        <div class="col">
            <label class="label" for="description">Telephone:</label>
            <input class="input" id="telephone3" type="text" name="telephone3" 
            placeholder="Telephone of the person" required>
        </div>
</div>

</div>

<div class="md:flex md:items-center mb-6">
<input type="hidden" id="count" name="count" value="3" readonly=""><br />
    <i class="fas fa-user-plus" onclick="addFields()"></i>
    <i class="fas fa-user-minus" onclick="rmFields()"></i>
</div>
                                
<div class="flex items-center justify-between">
    <button class="button" type="submit">
        {{ $button_text }}
    </button>
    <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-600" href="{{$cancel_url}}">
        Cancel
    </a>
</div>