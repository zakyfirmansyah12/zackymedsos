<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .video-container {
            max-width: 100%;
            overflow-x: hidden; /* Menghindari scroll horizontal */
            overflow-y: auto; /* Memungkinkan scroll vertical */
            white-space: nowrap;
            height: 400px; /* Tinggi maksimum kontainer sebelum scroll muncul */
        }
        .video-item {
            display: inline-block;
            margin-right: 10px;
            width: 240px; /* Adjust the width of the video item */
            height: 135px; /* Adjust the height of the video item */
            position: relative; /* Menjadikan posisi absolut dari tombol hapus */
        }
        .video-item video {
            width: 100%; /* Ensure the video fills the container */
            height: 100%; /* Ensure the video fills the container */
        }
        .delete-button {
            position: absolute;
            top: 5px;
            right: 5px;
        }
        .pagination-container {
            position: relative;
            margin-top: 20px; /* Atur jarak antara tombol "Add" dan tombol pagination */
        }
        .pagination {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    <title>Video ronaldo</title>
</head>
<body>
    <div class="container text-center">
        <h2 class="text-center">Feed</h2>
        <div class="video-container">
            @foreach ($videos as $video)
                <div class="video-item">
                    <video controls>
                        <source src="{{ asset('storage/'.$video->video)}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <form action="{{ route('video.destroy',$video->id) }}" method="POST" class="delete-button">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus video ini?')">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                    <div>{{ $video->created_at->format('d F Y') }}</div>
                    <div>{{ $video->caption }}</div>
                 </div>
            @endforeach
        </div>
        <div class="container mt-3 text-center pagination-container">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline-block">
                @csrf
                <button class="btn btn-warning mr-2" type="submit">{{ __('Logout') }}</button>
            </form>
            <a class="btn btn-success d-inline-block" href="{{ route('video.create') }}">Add</a>
            <div class="pagination mt-3">
                {{ $videos->links() }}
            </div>
        </div>
    </div>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
