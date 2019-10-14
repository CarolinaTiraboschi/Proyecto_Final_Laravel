<h2 class="subheader">Friends</h2>
<table style="width:100%;">
<thead>
 <tr>
   <th>Name</th>
   <th>Email</th>
   <th></th>
 </tr>
</thead>
<tbody>
 @foreach (Auth::user()->followees as $followee)
 <tr>
     <td>{{ $followee->username }}</td>
     <td><a href="#">Remove friend</a></td>
 </tr>
 @endforeach
</tbody>
</table>
