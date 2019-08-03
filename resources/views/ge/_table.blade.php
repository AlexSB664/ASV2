<table style="width:100%">

    <tr>
        <th>Santa</th>
        <th>Telephone</th> 
        <th>Kid</th>
    </tr>

    @isset($ge)
    @forelse ($ge->friends as $friend)
    <tr>
        <td>{{$friend['santa']}}</td>
        <td>{{$friend['santa_telephone']}}</td>
        @if($unlock)
            <td>{{$friend['kid']}}</td>
        @else
            <td>???</td>
        @endif
    </tr>
    @empty
    </table>
    <div class="p-3 mb-2 bg-danger text-white">the list is empty you should add people to play</div>
    @endforelse
    @else
    <br>Nothing for show
    @endisset
    
</table>