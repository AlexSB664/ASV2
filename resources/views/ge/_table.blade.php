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
    <br>the list is empty :c
    <br><a href="{{route ('friend.create',[$ge]) }}">Add Friends</a>
    @endforelse
    @else
    <br>Nothing for show
    @endisset
    
</table>