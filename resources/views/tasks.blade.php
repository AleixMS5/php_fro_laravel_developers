<x-layout>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>completed</th>
        </tr>
            @foreach ($tasks as $task)

        <tr>
            <td> <?=$task->id; ?></td>
            <td> <?=$task->title; ?></td>
            <td> <?=$task->description; ?></td>
            <td> <?=$task->completed; ?></td>
        </tr>
            @endforeach


    </table>
</x-layout>
