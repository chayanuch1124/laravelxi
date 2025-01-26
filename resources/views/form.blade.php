<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Admission Form</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admission.submit') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}"
                    required>
            </div>

            <div class="mb-3">
                <label for="education_level" class="form-label">Education Level</label>
                <select name="education_level" id="education_level" class="form-select" required>
                    <option value="">-- Select --</option>
                    <option value="High School" {{ old('education_level') == 'High School' ? 'selected' : '' }}>High
                        School</option>
                    <option value="Undergraduate" {{ old('education_level') == 'Undergraduate' ? 'selected' : '' }}>
                        Undergraduate</option>
                    <option value="Postgraduate" {{ old('education_level') == 'Postgraduate' ? 'selected' : '' }}>
                        Postgraduate</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="portfolio" class="form-label">Portfolio (PDF or ZIP, max 5 MB)</label>

                <input type="file" name="portfolio" id="portfolio" class="form-control" accept=".pdf, .zip" required>
            </div>
            
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    @if (session('portfolio_url'))
                        <br>
                        <a href="{{ session('portfolio_url') }}" target="_blank" class="btn btn-link">
                            Click here to view your uploaded portfolio
                        </a>
                    @endif
                </div>
            @endif

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
