<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard_style.css') }}">
    <title>dashboard</title>
</head>
<body>
    <div class="container">
        <div class="upload-form">
            <form action="{{ route('uploadImage') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" required>
                </div>
                <div>
                    <label for="alt">Description (alt):</label>
                    <input type="text" name="alt" id="alt" required>
                </div>
                <div>
                    <label for="class">Class:</label>
                    <select name="class" id="class" required>
                        <option value="standard">Standard</option>
                        <option value="large">Large</option>
                    </select>
                </div>
                <button type="submit">Upload</button>
            </form>
        </div>
        <div class="header">
            <form id="updateSizeForm" action="{{ route('updateSize') }}" method="POST">
                @csrf
                <button type="submit" class="save-button">Enregistrer les modifications</button>
                @foreach($gallery as $image)
                    <input type="hidden" id="size_input_{{ $image['id'] }}" name="sizes[{{ $image['id'] }}]" value="{{ $image['class'] }}">
                @endforeach
            </form>
        </div>
        @foreach($gallery as $image)
            <div class="gallery-item">
                <p>{{ $image['alt'] }}</p>
                <div class="actions">
                    <form action="{{ route('deleteImage', $image['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                    <label for="standard_{{ $image['id'] }}">Standard</label>
                    <input type="checkbox" id="standard_{{ $image['id'] }}" data-id="{{ $image['id'] }}" value="standard" {{ $image['class'] == 'standard' ? 'checked' : '' }} onchange="handleCheckboxChange(this)">
                    <label for="large_{{ $image['id'] }}">Large</label>
                    <input type="checkbox" id="large_{{ $image['id'] }}" data-id="{{ $image['id'] }}" value="large" {{ $image['class'] == 'large' ? 'checked' : '' }} onchange="handleCheckboxChange(this)">
                </div>
                <div class="move-buttons">
                    <a href="{{ route('moveUp', $image['id']) }}">▲</a>
                    <a href="{{ route('moveDown', $image['id']) }}">▼</a>
                </div>
            </div>
        @endforeach
    </div>
    <script>
        function handleCheckboxChange(checkbox) {
            var id = checkbox.getAttribute('data-id');
            var sizeInput = document.getElementById('size_input_' + id);

            if (checkbox.checked) {
                var otherCheckbox = document.querySelector('input[type="checkbox"][data-id="' + id + '"]:not(#' + checkbox.id + ')');
                if (otherCheckbox) {
                    otherCheckbox.checked = false;
                }
                sizeInput.value = checkbox.value;
            } else {
                sizeInput.value = '';
            }
        }

    
    </script>
</body>
</html>
