<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>YouContact</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body>
    <nav class="navbar border-bottom">
        <div class="container d-flex align-items-center mt-2">
            <h2 style="cursor: default; user-select: none; font-size: 36px;">You<span
                    style="color: #009FDF; font-family: 'Allerta Stencil';">Contact</span></h2>
            <div class="dropdown">
                <button class="btn btn-primary px-5 dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menu
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="width: 250px;">
                    <li><a class="dropdown-item <?= ($is_page === 'is_home') ? "active" : "link-dark" ?>"
                            href="index.php"><svg
                                style="margin-bottom: 4px; margin-right: 5px; stroke: <?= ($is_page === 'is_home') ? "#FFFFFF" : "#000000" ?>;"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M20 9v11a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9" />
                                <path d="M9 22V12h6v10M2 10.6L12 2l10 8.6" />
                            </svg><span>Home</span></a></li>
                    <li><a class="dropdown-item <?= ($is_page === 'is_contact') ? "active" : "link-dark" ?>"
                            href="contact.php"><svg
                                style="margin-bottom: 4px; margin-right: 5px; stroke: <?= ($is_page === 'is_contact') ? "#FFFFFF" : "#000000" ?>;"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z">
                                </path>
                            </svg><span>Contacts</span></a></li>
                    <li><a class="dropdown-item <?= ($is_page === 'is_profile') ? "active" : "link-dark" ?>"
                            href="profile.php"><svg
                                style="margin-bottom: 4px; margin-right: 5px; stroke: <?= ($is_page === 'is_profile') ? "#FFFFFF" : "#000000" ?>;"
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg><span>Profile</span></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="./resources/logout.php"><svg
                                style="margin-bottom: 1.5px; margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-log-out">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg><span>Log out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>