import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'gradient-purple': 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'gradient-blue': 'linear-gradient(135deg, #3b82f6 0%, #1e40af 100%)',
                'gradient-green': 'linear-gradient(135deg, #10b981 0%, #059669 100%)',
                'gradient-orange': 'linear-gradient(135deg, #f59e0b 0%, #d97706 100%)',
                'gradient-pink': 'linear-gradient(135deg, #ec4899 0%, #be185d 100%)',
                'gradient-rainbow': 'linear-gradient(135deg, #667eea 0%, #764ba2 25%, #f59e0b 50%, #10b981 75%, #3b82f6 100%)',
            },
            backgroundColor: {
                'glass': 'rgba(255, 255, 255, 0.95)',
            },
            backdropBlur: {
                'glass': '10px',
            },
            animation: {
                'fade-in': 'fadeIn 0.8s ease-in-out',
                'float': 'float 6s ease-in-out infinite',
                'shimmer': 'shimmer 2s infinite',
                'spin-slow': 'spin 20s linear infinite',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
                shimmer: {
                    '0%': { backgroundPosition: '-200% 0' },
                    '100%': { backgroundPosition: '200% 0' },
                },
            },
        },
    },

    plugins: [forms],
};
