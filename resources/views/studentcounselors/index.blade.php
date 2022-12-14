@extends('studentcounselors.dashboard_admin')
@section('content')
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header d-flex flex-column">
                <h4>Rekap Kehadiran Siswa</h4>
                <p>Bapak/Ibu terdaftar sebagai pembimbing rayon {{$regionNames}}</p>
                <p>Pembimbing Salat Jumat : {{$prayerCounselorNames}}</p>
			</div>
			<div class="card-body">
				<table id="table" class="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nis</th>
							<th>Nama</th>
							<th>Rombel</th>
							<th>Rekap Hadir</th>
							<th>Rekap Tidak Hadir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->nis }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->student_group }}</td>
                                <td><span class="badge badge-success"> {{ $student->presences_status_true_count}} kehadiran</span></td>
                                <td><span class="badge badge-danger"> {{ $student->presences_status_false_count}} ketidakhadiran</span></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
			</div>

@endsection
