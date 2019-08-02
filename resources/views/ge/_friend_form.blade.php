<div id="intercambio-form"> 
<h2>Participants:</h2>
<div class="md:flex md:items-center mb-6">
        <label class="label" for="title">
            Name:
        </label>
        <input class="input border-red-500" id="name-friend" type="text" name="name-friend" 
        value="">
        <label class="label" for="description">
            Telephone:
        </label>
        <input class="input" 
        id="telephone" 
        type="text" 
        name="telephone">

        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
</div>
<div class="md:flex md:items-center mb-6">
    <label class="label" for="title">
        Name:
    </label>
    <input class="input border-red-500" id="name-friend2" type="text" name="name-friend2" 
    value="">
    <label class="label" for="description">
        Telephone:
    </label>
    <input class="input" 
    id="telephone2" 
    type="text" 
    name="telephone2">

    @error('description')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>
<div class="md:flex md:items-center mb-6">
    <label class="label" for="title">
        Name:
    </label>
    <input class="input border-red-500" id="name-friend3" type="text" name="name-friend3" 
    value="">
    <label class="label" for="description">
        Telephone:
    </label>
    <input class="input" 
    id="telephone3" 
    type="text" 
    name="telephone3">

    @error('description')
        <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
</div>
<a href="#" id="filldetails" onclick="addFields()"><i class="fa fa-plus" style="font-size:48px;color:green"></i></a>
<a href="#" id="rmdetails" onclick="rmFields()"><i class="fa fa-minus" style="font-size:48px;color:red"></i></a>
</div>
