@forelse($payments as $payment)
    <tr class="bg-white">
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$payment->id}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$payment->clientFullName}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            ${{$payment->amount}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$payment->created_at}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$payment->updated_at}}
        </td>

    </tr>
@empty
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
     There are no payments in this data range
    </td>
@endforelse