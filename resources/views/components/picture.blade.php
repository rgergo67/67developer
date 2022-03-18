<picture class="{{ $pictureClass ?? '' }}">
    <source srcset="{{ preg_replace('/\.[a-z]+$/', '.webp', $src) }}" type="image/webp">
    <source srcset="{{ $src }}" type="image/jpeg">
    <img class="{{ $class }}" loading="lazy" width="{{ $width }}" height="{{ $height }}" src="{{ $src }}" alt="{{ $alt }}">
</picture>
