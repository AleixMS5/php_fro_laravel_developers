<x-layout>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
        </tr>
        @foreach ($users as $user)

            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td> {{$user->password}}</td>
            </tr>
        @endforeach


    </table>
</x-layout>
