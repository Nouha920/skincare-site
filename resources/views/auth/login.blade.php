<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphism Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #83ce9cff 0%, #e25f96ff 100%);
            padding: 20px;
        }

        .glass-container {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-title {
            text-align: center;
            color: white;
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .glass-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .glass-input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .glass-label {
            color: white;
            font-weight: 500;
            font-size: 1rem;
            margin-left: 5px;
        }

        .glass-input {
            padding: 15px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.15);
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .glass-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .glass-input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0 0 2px rgba(255, 255, 255, 0.4);
        }

        .glass-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .glass-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .glass-checkbox input {
            width: 18px;
            height: 18px;
            accent-color: rgba(255, 255, 255, 0.7);
        }

        .glass-checkbox label {
            color: white;
            font-size: 0.9rem;
        }

        .glass-link {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }

        .glass-link:hover {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: underline;
        }

        .glass-button {
            padding: 15px;
            border-radius: 12px;
            border: none;
            background: rgba(255, 255, 255, 0.25);
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            backdrop-filter: blur(5px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .glass-button:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .glass-button:active {
            transform: translateY(0);
        }

        @media (max-width: 480px) {
            .glass-container {
                padding: 30px 20px;
            }
            
            .glass-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="glass-container">
        <h1 class="glass-title">🌸 Bienvenue</h1>
        
        <form class="glass-form" method="POST" action="{{ route('login') }}">
            @csrf
            
            <!-- Email Address -->
            <div class="glass-input-group">
                <label class="glass-label" for="email">Email</label>
                <input class="glass-input" id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email">
            </div>

            <!-- Password -->
            <div class="glass-input-group">
                <label class="glass-label" for="password">Mot de passe</label>
                <input class="glass-input" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
            </div>

            <!-- Remember Me -->
            <div class="glass-options">
                <div class="glass-checkbox">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me">Souvenir moi</label>
                </div>

                <a class="glass-link" href="{{ route('password.request') }}">
                    mot de passe oublié?
                </a> 
                
                
            </div>

            <!-- Login Button -->
            <x-primary-button class="glass-button">
                Connexion
            </x-primary-button>
             <div class="glass-options">
             <label for="ll" class="glass-label" >Tu n'a pas de compte?</label>
             <a class="glass-options glass-link glass-label" href="{{ route('register') }}" >Inscrire
            </a></div>
        </form>
    </div>
</body>
</html>