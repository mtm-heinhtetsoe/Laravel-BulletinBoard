<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirps</title>
</head>
<body>
    <div>
        <form action="{{ route('chirps.store') }}" method="post">
            @csrf
            <textarea 
                name="message" 
                id="message" 
                placeholder="{{ __('What\'s on your mind?') }}" 
                cols="30" 
                rows="10"
            >{{ old('message') }}</textarea>
            <button type="submit">{{ __('Chirp') }}</button>
        </form>
    </div>
</body>
</html>