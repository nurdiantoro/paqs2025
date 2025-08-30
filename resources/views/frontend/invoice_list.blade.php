@include('frontend.components.header')
@include('frontend.components.navbar')


<!-- main-area -->
<main>
    <div class="max-w-[1000px] mx-auto tm-consulting mt-140 min-h-screen">
        <div class="cs-invoice cs-style1">

            {{-- INVOICE --}}
            <div class="cs-invoice_in overflow-x-auto " id="download_section">
                <table class="table">
                    <thead class="">
                        <tr>
                            <td class="md:hidden table-cell">Invoice Detail</td>
                            <td class="md:table-cell hidden">Invoice</td>
                            <td class="md:table-cell hidden">Item</td>
                            <td class="md:table-cell hidden">Qty</td>
                            <td class="md:table-cell hidden">Total</td>
                            <td class="md:table-cell hidden">Payment Method</td>
                            <td class="md:table-cell hidden">Status</td>
                            <td></td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td class="md:hidden table-cell">
                                    No Invoice: {{ $order->no_invoice }} <br>
                                    Category: {{ $order->kategori->name }} <br>
                                    Qty: {{ $order->quantity }} <br>
                                    Total: {{ $order->kategori->currency . ' ' . $order->total_price }} <br>
                                    Payment Method: {{ $order->payment_method }} <br>
                                    Payment Status: <span
                                        class="{{ $order->payment_status == 'paid' ? 'text-success' : 'text-danger' }}">
                                        {{ $order->payment_status }}</span> <br>
                                </td>
                                <td class="md:table-cell hidden">{{ $order->no_invoice }}</td>
                                <td class="md:table-cell hidden">{{ $order->kategori->name }}</td>
                                <td class="md:table-cell hidden">{{ $order->quantity }}</td>
                                <td class="md:table-cell hidden">
                                    {{ $order->kategori->currency . ' ' . $order->total_price }}
                                </td>
                                <td class="md:table-cell hidden">{{ $order->payment_method }}</td>
                                <td
                                    class="md:table-cell hidden {{ $order->payment_status == 'paid' ? 'text-success' : 'text-danger' }}">
                                    {{ $order->payment_status }}</td>
                                <td>
                                    <a href="{{ url('invoice/' . $order->no_invoice) }}">
                                        <div class="rounded-md bg-warna-01 text-white px-3 py-2 text-nowrap">
                                            See Detail
                                        </div>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- main-area-end -->
<!-- footer -->
@include('frontend.components.footer')
