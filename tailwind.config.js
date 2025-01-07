import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                'warna-01': '#0c6196',
                'warna-02': '#47759d',
                'warna-temp-02': '#ff007a',
            },
        },
},
}
