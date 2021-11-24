@forelse($clients as $client)

    <tr class="bg-white">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$client->lastPayment?->id}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->fullName}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->lastPayment?->amount}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->lastPayment?->created_at}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$client->lastPayment?->updated_at}}
        </td>
    </tr>
@empty
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        There are no payments in this data range
    </td>
@endforelse