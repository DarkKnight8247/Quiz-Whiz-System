<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Whiz</title>
    <link rel="icon" href="graphics/logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            text-align: justify;
        }

        .section {
            text-align: justify;
            padding: 20px;
            line-height: 1.6;
        }

        .group-members h5 {
            text-align: center;
        }
    </style>
</head>
<body class="about">
    <main class="main-content">
        <!-- Header Section -->
        <header class="header sticky">
            <img 
                src="graphics/logo.png" 
                alt="Quiz Whiz Logo" 
                width="170" 
                height="100" 
                class="logo"
            >
            <h1 class="tagline">Where Knowledge Meets Fun!</h1>
            <a href="intro.php" class="fxa">Go back</a>
        </header>

        <!-- Project Overview Section -->
        <fieldset class="section">
            <legend><h3>Project Overview:</h3></legend>
            <p>
                The Quiz Whiz system is an innovative quiz application designed as part of a Computer Programming 1 project. Its primary objective is to offer a platform for users to test and enhance their knowledge across a range of subjects through engaging, semi-trivial questions. The system aims to combine education and entertainment in a single, interactive environment. With its intuitive interface and thought-provoking questions, Quiz Whiz caters to both students and enthusiasts looking for an enjoyable way to learn. The platform's seamless design ensures users can focus on the experience without being hindered by technical challenges.
            </p>
        </fieldset>

        <!-- Features Section -->
        <fieldset class="section">
            <legend><h3>Features:</h3></legend>
            <p>
                The Quiz Whiz system currently offers a selection of diverse categories, enabling users to explore topics of interest. These categories include:
            </p>
            <ul>
                <li>Science</li>
                <li>Arts and Literature</li>
                <li>Math</li>
                <li>History</li>
                <li>Geography</li>
                <li>Sports</li>
                <li>Technology</li>
            </ul>
            <p>
                Upon selecting a category, users are presented with a set of multiple-choice questions designed to challenge their understanding and encourage critical thinking. While the initial scope includes these core categories, additional features such as a timer and adjustable difficulty levels were envisioned. However, given the constraints of the project as a mini-system, these enhancements were deferred for future development, ensuring the current implementation maintains its quality and usability.
            </p>
        </fieldset>

        <!-- System Info Section -->
        <fieldset class="section">
            <legend><h3>System Info:</h3></legend>
            <p>
                The system now consists of eight distinct pages, each serving a specific purpose to enhance the user experience. These include:
            </p>
            <ul>
                <li>The startup menu: Provides an introductory interface for users.</li>
                <li>The selection menu: Allows users to choose their desired quiz category.</li>
                <li>The about page: Offers insights into the project and its development process (this page).</li>
                <li>Five category-specific quiz pages: Each dedicated to presenting questions for a selected category (Science, Arts and Literature, Math, History, Geography, Sports, and Technology).</li>
            </ul>
            <p>
                A notable aspect of the system is its efficient handling of questions using <code>foreach</code> loops. These loops dynamically render the questions and answer choices, providing a scalable and flexible framework for managing the question bank. This approach ensures that the system can be easily updated with new content or adjusted to meet varying requirements, making it a robust and future-ready solution.
            </p>
        </fieldset>

        <!-- Group Members Section -->
        <fieldset class="section">
            <legend><h3>Group Members:</h3></legend>
            <p>
                Quiz Whiz is the result of a collaborative effort by a dedicated team of students. Their combined skills, creativity, and determination brought the system to life. Below are the individuals who contributed to the project's success:
            </p>
            <div class="group-members">
                <h5>Franz Castor</h5>
                <h5>Morganclide Calibo</h5>
                <h5>John Kenth Bornea</h5>
                <h5>Junrie Divinagracia</h5>
                <h5>Humphrey Mosqueda</h5>
                <h5>John Ashley Hoyo-a</h5>
                <h5>Yuval Seith Layon</h5>
            </div>
        </fieldset>

        <!-- Footer Section -->
        <footer class="footer">
            <p>&copy; 2024 Quiz Whiz. All rights reserved.</p>
        </footer>
    </main>
</body>
</html>
