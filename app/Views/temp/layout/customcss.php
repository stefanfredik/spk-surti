<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
<style>
    :root {
        /* --bs-blue: #0061f2;
        --bs-indigo: #5800e8;
        --bs-purple: #6900c7;
        --bs-pink: #e30059;
        --bs-red: #e81500;
        --bs-orange: #f76400;
        --bs-yellow: #f4a100;
        --bs-green: #00ac69;
        --bs-teal: #00ba94;
        --bs-cyan: #00cfd5;
        --bs-white: #fff;
        --bs-gray: #69707a;
        --bs-gray-dark: #363d47;
        --bs-gray-100: #f2f6fc;
        --bs-gray-200: #e0e5ec;
        --bs-gray-300: #d4dae3;
        --bs-gray-400: #c5ccd6;
        --bs-gray-500: #a7aeb8;
        --bs-gray-600: #69707a;
        --bs-gray-700: #4a515b;
        --bs-gray-800: #363d47;
        --bs-gray-900: #212832; */
        --bs-primary: #007b77;
        --bs-secondary: #6900c7;
        --bs-success: #00ac69;
        --bs-info: #00cfd5;
        --bs-warning: #f4a100;
        --bs-danger: #e81500;
        --bs-light: #f2f6fc;
        --bs-dark: #212832;
        --bs-black: #000;
        --bs-white: #fff;
        --bs-red: #e81500;
        --bs-orange: #f76400;
        --bs-yellow: #f4a100;
        --bs-green: #00ac69;
        --bs-teal: #00ba94;
        --bs-cyan: #00cfd5;
        --bs-blue: #0061f2;
        --bs-indigo: #5800e8;
        --bs-purple: #6900c7;
        --bs-pink: #e30059;
        --bs-red-soft: #f1e0e3;
        --bs-orange-soft: #f3e7e3;
        --bs-yellow-soft: #f2eee3;
        --bs-green-soft: #daefed;
        --bs-teal-soft: #daf0f2;
        --bs-cyan-soft: #daf2f8;
        --bs-blue-soft: #dae7fb;
        --bs-indigo-soft: #e3ddfa;
        --bs-purple-soft: #e4ddf7;
        --bs-pink-soft: #f1ddec;
        --bs-primary-soft: #dae7fb;
        --bs-secondary-soft: #e4ddf7;
        --bs-success-soft: #daefed;
        --bs-info-soft: #daf2f8;
        --bs-warning-soft: #f2eee3;
        --bs-danger-soft: #f1e0e3;
        --bs-primary-rgb: 0, 97, 242;
        --bs-secondary-rgb: 105, 0, 199;
        --bs-success-rgb: 0, 172, 105;
        --bs-info-rgb: 0, 207, 213;
        --bs-warning-rgb: 244, 161, 0;
        --bs-danger-rgb: 232, 21, 0;
        --bs-light-rgb: 242, 246, 252;
        --bs-dark-rgb: 33, 40, 50;
        --bs-black-rgb: 0, 0, 0;
        --bs-white-rgb: 255, 255, 255;
        --bs-red-rgb: 232, 21, 0;
        --bs-orange-rgb: 247, 100, 0;
        --bs-yellow-rgb: 244, 161, 0;
        --bs-green-rgb: 0, 172, 105;
        --bs-teal-rgb: 0, 186, 148;
        --bs-cyan-rgb: 0, 207, 213;
        --bs-blue-rgb: 0, 97, 242;
        --bs-indigo-rgb: 88, 0, 232;
        --bs-purple-rgb: 105, 0, 199;
        --bs-pink-rgb: 227, 0, 89;
        --bs-red-soft-rgb: 241, 224, 227;
        --bs-orange-soft-rgb: 243, 231, 227;
        --bs-yellow-soft-rgb: 242, 238, 227;
        --bs-green-soft-rgb: 218, 239, 237;
        --bs-teal-soft-rgb: 218, 240, 242;
        --bs-cyan-soft-rgb: 218, 242, 248;
        --bs-blue-soft-rgb: 218, 231, 251;
        --bs-indigo-soft-rgb: 227, 221, 250;
        --bs-purple-soft-rgb: 228, 221, 247;
        --bs-pink-soft-rgb: 241, 221, 236;
        --bs-primary-soft-rgb: 218, 231, 251;
        --bs-secondary-soft-rgb: 228, 221, 247;
        --bs-success-soft-rgb: 218, 239, 237;
        --bs-info-soft-rgb: 218, 242, 248;
        --bs-warning-soft-rgb: 242, 238, 227;
        --bs-danger-soft-rgb: 241, 224, 227;
        --bs-white-rgb: 255, 255, 255;
        --bs-black-rgb: 0, 0, 0;
        --bs-body-color-rgb: 105, 112, 122;
        --bs-body-bg-rgb: 242, 246, 252;
        --bs-font-sans-serif: "Metropolis", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        --bs-body-font-family: Metropolis, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #69707a;
        --bs-body-bg: #006a67;
    }

    /* sidebar */
    .sidenav-light {
        background-color: #004e48;
        color: #fff;
    }

    .sidenav-light .sidenav-menu .nav-link {
        color: #fff;
    }

    .sidenav-light .sidenav-menu .nav-link .nav-link-icon {
        color: #fff;
    }

    .sidenav-light .sidenav-menu .sidenav-menu-heading {
        color: #fff;
    }


    .sidenav-light .sidenav-footer .sidenav-footer-subtitle {
        color: #fff;
    }

    .sidenav-light .sidenav-menu .nav-link:hover {
        color: #212121;
        background-color: #BBDEFB;
        /* font-weight: bold; */
    }

    .sidenav-light .sidenav-menu .nav-link.active {
        color: #fff;
        background-color: #c73433;
    }


    /* Background */

    .bg-gradient-primary-to-secondary {
        background-color: #fff;
        background-image: none;
    }


    /* navbar */

    .bg-primary {
        --bs-bg-opacity: 1;
        background-color: ;
    }
</style>