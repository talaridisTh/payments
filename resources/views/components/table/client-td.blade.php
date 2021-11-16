@foreach($clients as $client)
    <tr class="bg-white">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$client->id}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->name}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->surname}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->created_at}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->updated_at}}
        </td>

    </tr>
@endforeach