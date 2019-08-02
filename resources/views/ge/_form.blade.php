
@csrf
<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        <label class="label" for="title">
            Name Exchange:
        </label>
    </div>
    <div class="md:w-2/3">
        <input class="input @error('title') border-red-500 @enderror" id="name" type="text" name="name" 
        value="{{$project->name}}">

        @error('title')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="md:flex md:items-center mb-6">
    <div class="md:w-1/3">
        <label class="label" for="description">
            Password:
        </label>
    </div>
    <div class="md:w-2/3">
        <input class="input @error('description') border-red-500 @enderror" 
        id="clave_privada" 
        type="password" 
        name="clave_privada"
        rows="8"
        >{{$project->clave_privada}}
        </textarea>

        @error('description')
            <p class="text-red-500 text-xs italic">{{ $message }}</p>
        @enderror
    </div>
</div>

<div class="flex items-center justify-between">
    <button class="button" type="submit">
        {{ $button_text }}
    </button>
    <a class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-600" href="{{$cancel_url}}">
        Cancel
    </a>
</div>