<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Muhammad Ferdy Alamsyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
        }
        .social-links a {
            color: #333;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }
        .social-links a:hover {
            color: #667eea;
        }
        .card {
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="profile-header text-center">
        <div class="container">
            <img src="https://avatars.githubusercontent.com/u/59298638?s=400&u=b78f0e49727d9911dbff5ae0166875fa9a9e5f8b&v=4" alt="Profile Picture" class="profile-img mb-3">
            <h1 class="mb-2">Muhammad Ferdy Alamsyah</h1>
            <p class="mb-3">Murid</p>
            <div class="social-links">
                <a href="https://github.com/Ahmad041" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/codemad041/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Informasi Kontak</h5>
                    </div>
                    <div class="card-body">
                        <p><i class="fas fa-envelope me-2"></i> ahamdferdyalamsyah@gmail.com</p>
                        <p><i class="fas fa-phone me-2"></i> 085959893812</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Kav. Permata Bunda</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Tentang Saya</h5>
                    </div>
                    <div class="card-body">
                        <p>Saya seorang Programmer tingkat junior</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Keahlian</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle text-success me-2"></i> 3D Artist</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Junior Fullstack Dev.</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Junior Game Dev</li>
                            <li><i class="fas fa-check-circle text-success me-2"></i> Editor</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pendidikan</h5>
                    </div>
                    <div class="card-body">
                        <p>SD, SMP, SMK jurusan RPL</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>