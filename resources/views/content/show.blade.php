@extends('app.main')

@section('title', 'Data Siswa')

@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Siswa</h4>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>Pelanggaran</th>
                                    <th>Kelas</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">UI/UX</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-500">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
