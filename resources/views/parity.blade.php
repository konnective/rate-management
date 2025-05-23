<x-app-layout>

    <style>
        /* .table-dark-custom:nth-child(even) {
            background-color: #000;
            color: #fff;
        } */
        .table {
            --bs-table-striped-bg: #FAFAFA !important;
        }

        tbody,tr {
            border-style: hidden !important;
        }

        .price-red {
            color: #ff7070;
            font-weight: bold;
        }

        .price-blue {
            color: #4f5fff;
            font-weight: bold;
        }

        /*
        .icon {
            font-size: 1rem;
            margin-left: 5px;
        } */
    </style>
     <div class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped  align-middle text-center">
                <thead class="">
                    <tr>
                        <th>Date</th>
                        <th>Brand.com</th>
                        <th>Booking.com</th>
                        <th>Expedia</th>
                        <th>Loss Channels on Metasearch</th>
                        <th>Lowest rate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td>06/05/2025</td>
                        <td><span class="">$76</span></td>
                        <td><span class="price-red">$77</span> <i class="bi bi-tag icon"></i></td>
                        <td><span class="">$76</span></td>
                        <td class="">Priceline</td>
                        <td><span class="">$71</span></td>
                    </tr>
                    <tr>
                        <td>07/05/2025</td>
                        <td>$77 <i class="bi bi-tag icon"></i> <i class="bi bi-cup icon"></i></td>
                        <td>$76 <i class="bi bi-cup icon"></i></td>
                        <td>$77 <i class="bi bi-tag icon"></i> <i class="bi bi-cup icon"></i></td>
                        <td>GoSplitty</td>
                        <td>$71</td>
                    </tr>
                    <tr class="">
                        <td>08/05/2025</td>
                        <td><span class="price-red">$75</span></td>
                        <td><span class="price-blue">$76</span></td>
                        <td><span class="price-blue">$76</span></td>
                        <td class="">GoSplitty, Traveluro.com, Trivago</td>
                        <td class="">$76</td>
                    </tr>
                    <tr>
                        <td>09/05/2025</td>
                        <td><span class="price-blue">$76</span> <i class="bi bi-cup icon"></i></td>
                        <td>$76 <i class="bi bi-cup icon"></i></td>
                        <td>$73 <i class="bi bi-cup icon"></i></td>
                        <td>GoSplitty, Traveluro.com, Trivago</td>
                        <td>$72</td>
                    </tr>
                    <tr class="">
                        <td>10/05/2025</td>
                        <td class="">$73</td>
                        <td><span class="price-red">$74</span></td>
                        <td class="">$77</td>
                        <td class="">GoSplitty</td>
                        <td class="">$70</td>
                    </tr>
                    <tr>
                        <td>11/05/2025</td>
                        <td>$73 <i class="bi bi-cup icon"></i></td>
                        <td>$74 <i class="bi bi-cup icon"></i></td>
                        <td><span class="price-red">$75</span> <i class="bi bi-cup icon"></i></td>
                        <td>Priceline</td>
                        <td>$73</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="./assets/js/custom.js"></script> --}}
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

</x-app-layout>
