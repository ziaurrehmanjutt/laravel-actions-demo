{{-- resources/views/home.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Laravel Site - Upgrade</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
            background-color: #f4f4f9;
        }

        h1, h2 {
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Hero Section */
        .hero {
            background-color: #4CAF50;
            color: white;
            padding: 100px 20px;
            text-align: center;
        }

        .hero h1 {
            font-size: 48px;
            margin: 0;
        }

        .hero p {
            font-size: 24px;
            margin: 20px 0;
        }

        .hero button {
            background-color: #fff;
            color: #4CAF50;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .hero button:hover {
            background-color: #ddd;
        }

        /* Services Section */
        .services {
            display: flex;
            justify-content: center;
            gap: 30px;
            padding: 50px 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-card {
            background-color: #f9f9f9;
            padding: 30px;
            width: 30%;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .service-card h3 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .service-card p {
            font-size: 18px;
            color: #777;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        /* Footer */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .footer p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to My Laravel App - Upgrade</h1>
        <p>Your go-to platform for amazing services</p>
        <button onclick="window.location.href='#services'">Discover Our Services</button>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="service-card">
            <h3>Web Development</h3>
            <p>Build beautiful and responsive websites with the latest technologies.</p>
        </div>
        <div class="service-card">
            <h3>E-commerce</h3>
            <p>Launch your online store with integrated payment systems and more.</p>
        </div>
        <div class="service-card">
            <h3>SEO Services</h3>
            <p>Increase your visibility on search engines and drive more traffic.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} My Laravel Site. All rights reserved.</p>
    </footer>

</body>
</html>
