<x-app-layout>

    <x-errors />

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">

            <div class="lg:px-8 mb-3">
                <h3>Show latest payment of each user:</h3>
            </div>
            <form class="lg:px-8 flex items-center space-x-5" action="{{route('client.search')}}">
                <label for="from">From</label>
                <input id="from" name="from" type="date" value="{{$filters["from"]??now()}}">

                <label for="to">To</label>
                <input id="to" name="to" type="date" value="{{$filters["to"]??now()}}">

                <div class="flex items-center space-x-3">
                    <button class="px-3 py-2 bg-green-600 text-white rounded">Save</button>
                    <a href="{{route('client.index')}}" class="px-3 py-2 bg-red-600 text-white rounded">Reset</a>
                </div>
            </form>
            <div class="lg:px-8">
                @if(!($filters["from"]??null && $filters["to"]??null))
                    <hr class="my-4">
                    <h2 class="text-lg font-bold">All Payments</h2>
                @endif
            </div>

            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <x-table.table
                     :tableName="['payment id','fullname','amount','created_at','updated_at']">
                        @if(isset($clients))
                            <x-table.client-td :clients="$clients" />
                        @elseif(isset($payments))
                            <x-table.payment-td :payments="$payments" />
                        @endif
                    </x-table.table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
