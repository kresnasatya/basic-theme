<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Theme!</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        #container {
            max-width: 960px;
            margin: 48px auto;
            border: 1px solid #ccc;
        }

        #site-header {
            padding: 24px;
            text-align: center;
            border-bottom: 2px solid #ccc;
        }

        #primary-navigation {
            padding: 8px;
            text-align: center;
            border-bottom: 2px solid #ccc;
        }

        #primary-navigation ul {
            list-style: none;
        }

        #primary-navigation ul li {
            display: inline-block;
        }

        #primary-navigation ul li a {
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
        }

        #primary-navigation ul li a:hover {
            background-color: #555;
            text-decoration: underline;
        }

        #site-content {
            padding: 24px;
            border-bottom: 2px solid #ccc;
        }

        .pagination {
            padding: 10px;
            text-align: center;
            border-bottom: 2px solid #ccc;
        }

        .pagination .next,
        .pagination .previous {
            display: inline-block;
            text-decoration: none;
            border: 1px solid #ccc;
            padding: 10px 20px;
        }

        #site-footer {
            padding: 12px;
            text-align: center;
            border-bottom: 2px solid #ccc;
        }
    </style>
</head>
<body>
    <div id="container">
        <header id="site-header">
            <h1>Nama Website</h1>
        </header>
        <nav id="primary-navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        <main id="site-content">
            <article>
                <h2>Judul artikel 1</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et commodi esse libero aliquam hic rerum odit recusandae necessitatibus ab ea a maxime corrupti eveniet aliquid, accusantium officiis reiciendis repellat?</p>
            </article>
            <article>
                <h2>Judul artikel 2</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et commodi esse libero aliquam hic rerum odit recusandae necessitatibus ab ea a maxime corrupti eveniet aliquid, accusantium officiis reiciendis repellat?</p>
            </article>
            <article>
                <h2>Judul artikel 3</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident et commodi esse libero aliquam hic rerum odit recusandae necessitatibus ab ea a maxime corrupti eveniet aliquid, accusantium officiis reiciendis repellat?</p>
            </article>
        </main>
        <nav class="pagination">
            <a class="previous" href="#">Previous</a>
            <a class="next" href="#">Next</a>
        </nav>
        <footer id="site-footer">Copyright &copy 2023</footer>
    </div>
</body>
</html>