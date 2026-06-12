<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>POS-Master - Dashboard</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- CSS Customizado -->
    <style>
        
        /* Variáveis */
        :root {
            --orange-500: #F97316;
            --orange-600: #EA580C;
            --orange-100: #FFF7ED;
            --gray-50: #F9FAFB;
            --gray-100: #F3F4F6;
            --gray-600: #4B5563;
            --gray-700: #374151;
            --gray-800: #1F2937;
            --gray-900: #111827;
            --white: #FFFFFF;
        }
        
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Corpo */
        body {
            font-family: 'Figtree', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--gray-50);
            color: var(--gray-900);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }
        
        /* Fontes */
        .font-sans { font-family: 'Figtree', sans-serif; }
        .font-semibold { font-weight: 600; }
        .font-medium { font-weight: 500; }
        .text-sm { font-size: 0.875rem; }
        .text-lg { font-size: 1.125rem; }
        .text-xl { font-size: 1.25rem; }
        .text-2xl { font-size: 1.5rem; }
        .text-3xl { font-size: 1.875rem; }
        .sm\:text-5xl { font-size: 3rem; }
        
        /* Cores de Texto */
        .text-orange-500 { color: var(--orange-500); }
        .text-orange-600 { color: var(--orange-600); }
        .text-gray-500 { color: #6B7280; }
        .text-gray-600 { color: var(--gray-600); }
        .text-gray-700 { color: var(--gray-700); }
        .text-gray-800 { color: var(--gray-800); }
        .text-gray-900 { color: var(--gray-900); }
        .text-white { color: var(--white); }
        
        /* Cores de Background */
        .bg-white { background-color: var(--white); }
        .bg-gray-50 { background-color: var(--gray-50); }
        .bg-orange-500 { background-color: var(--orange-500); }
        .bg-orange-600 { background-color: var(--orange-600); }
        .bg-orange-50 { background-color: var(--orange-100); }
        
        /* Bordas */
        .border-b { border-bottom: 1px solid; }
        .border-t { border-top: 1px solid; }
        .border-l-4 { border-left: 4px solid; }
        .border-t-4 { border-top: 4px solid; }
        .border-orange-100 { border-color: var(--orange-100); }
        .border-orange-500 { border-color: var(--orange-500); }
        
        /* Overflow */
        .overflow-hidden { overflow: hidden; }
        
        /* Espaçamento */
        .max-w-7xl { max-width: 80rem; }
        .max-w-2xl { max-width: 42rem; }
        .mx-auto { margin-left: auto; margin-right: auto; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .sm\:px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .lg\:px-8 { padding-left: 2rem; padding-right: 2rem; }
        .py-6 { padding-top: 1.5rem; padding-bottom: 1.5rem; }
        .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
        .py-16 { padding-top: 4rem; padding-bottom: 4rem; }
        .sm\:py-24 { padding-top: 6rem; padding-bottom: 6rem; }
        .pb-20 { padding-bottom: 5rem; }
        .p-6 { padding: 1.5rem; }
        .mt-1 { margin-top: 0.25rem; }
        .mt-4 { margin-top: 1rem; }
        .mt-8 { margin-top: 2rem; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        
        /* Flexbox */
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-between { justify-content: space-between; }
        .justify-center { justify-content: center; }
        .gap-2 { gap: 0.5rem; }
        .gap-4 { gap: 1rem; }
        .gap-6 { gap: 1.5rem; }
        
        /* Grid */
        .grid { display: grid; }
        .grid-cols-1 { grid-template-columns: repeat(1, minmax(0, 1fr)); }
        .sm\:grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        
        /* Header */
        header {
            background-color: var(--white);
            border-bottom: 1px solid var(--orange-100);
            height: 64px;
        }
        
        header .max-w-7xl {
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        
        /* Logo */
        .x-application-logo {
            height: 36px;
            width: auto;
            color: var(--orange-500);
        }
        
        /* Navegação */
        nav {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        nav a {
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-700);
            transition: color 0.2s;
        }
        
        nav a:hover {
            color: var(--orange-600);
        }
        
        /* Botões */
        .rounded-md {
            border-radius: 0.375rem;
            transition: all 0.2s;
        }
        
        .rounded-lg {
            border-radius: 0.5rem;
        }
        
        .sm\:rounded-lg {
            border-radius: 0.5rem;
        }
        
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        .py-3 { padding-top: 0.75rem; padding-bottom: 0.75rem; }
        
        /* Botão primário */
        .bg-orange-500 {
            background-color: var(--orange-500);
            color: var(--white);
            font-weight: 500;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            transition: background-color 0.2s;
        }
        
        .bg-orange-500:hover {
            background-color: var(--orange-600);
        }
        
        /* Botão secundário */
        .border-orange-500 {
            border: 1px solid var(--orange-500);
            color: var(--orange-600);
            font-weight: 500;
            border-radius: 0.375rem;
            padding: 0.75rem 1.5rem;
            transition: all 0.2s;
        }
        
        .border-orange-500:hover {
            background-color: var(--orange-100);
        }
        
        /* Hero Section */
        section.max-w-7xl {
            max-width: 80rem;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
            padding-top: 4rem;
            padding-bottom: 4rem;
            text-align: center;
        }
        
        .text-center { text-align: center; }
        
        h1 {
            font-size: 1.875rem;
            font-weight: 600;
            color: var(--gray-900);
            line-height: 1.25;
        }
        
        h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--gray-800);
            line-height: 1.25;
        }
        
        .leading-tight { line-height: 1.25; }
        
        /* Shadow */
        .shadow-sm {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }
        
        /* Cards de Features */
        .bg-white.rounded-lg {
            background-color: var(--white);
            border-radius: 0.5rem;
        }
        
        .p-6 { padding: 1.5rem; }
        
        .border-t-4 { border-top: 4px solid; }
        .border-orange-500 { border-top-color: var(--orange-500); }
        .border-l-4 { border-left-color: var(--orange-500); }
        
        .feature-card h3 {
            font-weight: 600;
            font-size: 1.125rem;
            margin-bottom: 0.5rem;
        }
        
        .feature-card p {
            color: var(--gray-600);
            font-size: 0.875rem;
        }
        
        /* Cards de Resumo (Dashboard) */
        .bg-white.overflow-hidden {
            background-color: var(--white);
            overflow: hidden;
        }
        
        .bg-white.overflow-hidden.shadow-sm.rounded-lg {
            background-color: var(--white);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
        }
        
        .dashboard-card p.text-sm {
            font-size: 0.875rem;
            color: #6B7280;
        }
        
        .dashboard-card p.text-2xl {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--gray-800);
            margin-top: 0.25rem;
        }
        
        /* Bem-vindo Card */
        .welcome-card {
            background-color: var(--white);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            border-radius: 0.5rem;
        }
        
        .welcome-card p.text-lg {
            font-size: 1.125rem;
            font-weight: 500;
            color: var(--orange-600);
            margin-bottom: 0.25rem;
        }
        
        .welcome-card p.text-gray-600 {
            color: var(--gray-600);
        }
        
        /* Footer */
        footer {
            border-top: 1px solid var(--orange-100);
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            text-align: center;
            font-size: 0.875rem;
            color: #6B7280;
        }
        
        /* Responsivo */
        @media (min-width: 640px) {
            .sm\:grid-cols-3 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            
            .sm\:text-5xl {
                font-size: 3rem;
                line-height: 1.15;
            }
            
            .sm\:py-24 {
                padding-top: 6rem;
                padding-bottom: 6rem;
            }
            
            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            
            .sm\:rounded-lg {
                border-radius: 0.5rem;
            }
        }
        
        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
        
        /* Utilitários */
        .hover\:text-orange-600:hover { color: var(--orange-600); }
        .hover\:bg-orange-600:hover { background-color: var(--orange-600); }
        .hover\:bg-orange-50:hover { background-color: var(--orange-100); }
        .transition { transition: all 0.2s; }
        .antialiased { -webkit-font-smoothing: antialiased; }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900">

    <!-- Top bar -->
    <header class="bg-white border-b border-orange-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <x-application-logo class="h-9 w-auto fill-current text-orange-500" />
                <span class="text-lg font-semibold text-orange-600">POS-Master</span>
            </div>

            @if (Route::has('login'))
                <nav class="flex items-center gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">
                            {{ __('Dashboard') }}
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-orange-600">
                            {{ __('Entrar') }}
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-sm font-medium text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md transition">
                                {{ __('Cadastrar') }}
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Header do Dashboard -->
            <div class="mb-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>

            <!-- Cards de resumo -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-6">
                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6 border-l-4 border-orange-500 dashboard-card">
                    <p class="text-sm text-gray-500">Total de acessórios</p>
                    <p class="text-2xl font-semibold text-gray-800 mt-1">128</p>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6 border-l-4 border-orange-500 dashboard-card">
                    <p class="text-sm text-gray-500">Itens com estoque baixo</p>
                    <p class="text-2xl font-semibold text-gray-800 mt-1">7</p>
                </div>

                <div class="bg-white overflow-hidden shadow-sm rounded-lg p-6 border-l-4 border-orange-500 dashboard-card">
                    <p class="text-sm text-gray-500">Com garantia estendida</p>
                    <p class="text-2xl font-semibold text-gray-800 mt-1">42</p>
                </div>
            </div>

            <!-- Boas-vindas -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg welcome-card">
                <div class="p-6 text-gray-900">
                    <p class="text-lg font-medium text-orange-600 mb-1">{{ __("Bem-vindo(a) ao POS-Master!") }}</p>
                    <p class="text-gray-600">{{ __("Você está logado(a). Use o menu acima para gerenciar os acessórios cadastrados no sistema.") }}</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-orange-100 py-6 text-center text-sm text-gray-500">
        POS-Master · {{ date('Y') }}
    </footer>

</body>
</html>