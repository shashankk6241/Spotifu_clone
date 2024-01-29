<?php

session_start();

?>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        a:link.a1,
        a:visited.a1 {
            background-color: transparent;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }



        a:link.a2,
        a:visited.a2 {
            background-color: transparent;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }


        a:link.a3,
        a:visited.a3 {
            background-color: transparent;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover.a3,
        a:active.a3 {
            background-color: rgba(50, 50, 50, 0.6);
        }

        a:link.a4,
        a:visited.a4 {
            background-color: transparent;
            color: white;
            padding: 14px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover.a4,
        a:active.a4 {
            background-color: rgba(50, 50, 50, 0.6);
        }

        .App__now-playing-bar {
            position: sticky;
            bottom: 0;
            height: 83px;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .icons {
            margin-top: 14px;
        }

        .icons i {
            cursor: pointer;
        }

        .songInfo {
            position: absolute;
            left: 10vw;
            font-family: 'Varela Round', sans-serif;
        }

        .myProgressBar {
            width: 80vw;
        }
    </style>
</head>

<body>
    <div class="App">
        <div class="App__top-bar">
            <div class="App__header">
                <div class="App__song-navigation">
                    <div class="App__song-navigation-prev">
                        <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24">
                            <polyline points="16 4 7 12 16 20" fill="none" stroke="#fff"></polyline>
                        </svg>
                    </div>
                    <div class="App__song-navigation-next">
                        <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24">
                            <polyline points="8 4 17 12 8 20" fill="none" stroke="#fff"></polyline>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
        <div class="App__nav-bar">
            <div class="App__logo">
                <h1>Spotify</h1>

            </div>
            <div class="App__categories-nav">
                <div class="App__category-item App__category-item--selected">
                    <div class="icon"><svg viewBox="0 0 576 512" width="100" title="home">
                            <path d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" fill="#fff" />
                        </svg></div>
                    <span><a href="index.html" target="" class="a3">Home</a></span>
                </div>
                <div class="App__category-item">
                    <div class="icon"><svg viewBox="0 0 512 512" width="100" title="search">
                            <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" fill="#C4C4C4" />
                        </svg></div>
                    <span><a href="search.html" target="" class="a3">Search</a></span>
                </div>
                <div class="App__category-item">
                    <div class="icon"><svg width="112" height="111" viewBox="0 0 112 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="8" height="111" fill="#C4C4C4" />
                            <rect x="24" width="8" height="111" fill="#C4C4C4" />
                            <rect width="7.96484" height="111.503" transform="matrix(0.869849 -0.493319 0.506711 0.862116 48 14.7345)" fill="#C4C4C4" />
                        </svg>
                    </div>
                    <span><a href="error.html" target="" class="a3">Your Library</a></span>
                </div>
            </div>
            <div class="App__playlists-nav">
                <div class="App__category-item">
                    <div class="icon"><svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16" fill="#c4c4c4">
                            <path d="M14 7H9V2H7v5H2v2h5v5h2V9h5z"></path>
                            <path fill="none" d="M0 0h16v16H0z"></path>
                        </svg>
                    </div>
                    <span><a href="error.html" target="" class="a4">Create Library</a></span>
                </div>

            </div>
            <div class="App__divider-container">
                <hr>
            </div>

        </div>
        <div class="App__now-playing-bar">

            <!-- A progress bar input element -->
            <input type="range" name="range" class="myProgressBar" min="0" value="0" max="100" />
            <!-- A container div for fontawesome icons -->
            <div class="icons">
                <!-- A fontawesome icon for previous song -->
                <i class="fas fa-3x fa-step-backward" id="previous"></i>
                <!-- A fontawesome icon for playing/pausing the current song -->
                <i class="far fa-3x fa-play-circle" id="masterPlay"></i>
                <!-- A fontawesome icon for next song -->
                <i class="fas fa-3x fa-step-forward" id="next"></i>
            </div>
            <!-- A div for displaying the current song information -->
            <div class="songInfo">
                <!-- An image of a playing animation -->
                <img src="playing.gif" width="42px" alt="" id="gif" />
                <!-- The name of the currently playing song -->
                <span id="masterSongName">On & On-Cartoon, Daniel Levi</span>
            </div>

            <!-- A script tag for including a JavaScript file -->
            <script src="script.js"></script>
            <script src="https://kit.fontawesome.com/26504e4a1f.js" crossorigin="anonymous"></script>

        </div>
        <div class="App__main-view" id="main_view">
            <div class="App__top-gradient"></div>
            <div class="App__header-placeholder"></div>

        </div>
    </div>
</body>

</html>