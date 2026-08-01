<?php include 'header.php'; ?>

<body>

    <div class="d-flex">

        <!-- Sidebar -->

        <?php include 'sidebar.php'; ?>

        <!-- Main Content -->

        <div class="main-content">

            <!-- Navbar -->

            <nav class="navbar navbar-expand-lg bg-white shadow-sm">

                <div class="container-fluid">

                    <h4 class="fw-bold">React Practical Task Series</h4>

                    <div class="ms-auto">

                        <button class="btn btn-primary">
                            <i class="bi bi-bell"></i>
                        </button>

                    </div>

                </div>

            </nav>

            <div class="container-fluid mt-4">

                <!-- Cards -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="mb-3">Set 1 – JSX + Components</h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3">
                            <p>Ek Personal Profile Page banao.</p>
                            <p class="fw-bold">Requirements</p>
                            <p>Components alag files me hone chahiye: </p>
                            <code>
                                <pre>
src/
├── components/
│   ├── Header.jsx
│   ├── Profile.jsx
│   ├── Skills.jsx
│   └── Footer.jsx
└── App.jsx
</pre>
                            </code>
                            <p>App.jsx me sab components import karke use karo.</p>
                            <img src="image/task1.png" width="200">
                        </div>

                        <h3 class="mb-3">Set 2 – Props 🟢</h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3">
                            <p>Ek <mark>ProductCard.jsx</mark> component banao jo props accept kare:</p>
                            <ul>
                                <li>name</li>
                                <li>price</li>
                                <li>category</li>
                                <li>inStock</li>
                            </ul>
                            <p>App.jsx se 3 products bhejo</p>
                        </div>

                        <h3 class="mb-3">Set 3 – Events + useState 🟢</h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3">
                            <p>Ek Counter App banao.</p>
                            <code>
                                <pre>
Counter: 0

[ Increase ] [ Decrease ] [ Reset ]
</pre>
                            </code>
                        </div>

                        <h3 class="mb-3">Set 4 – Conditional Rendering 🟢</h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3">
                            <p>Ek Login Status App banao.</p>
                            <p class="fw-bold">Initially:</p>
                            <p>Welcome Guest
                                </br>
                                [ Login ]
                                <br />
                                <br />
                                Login click:
                            </p>
                            <p>
                                Welcome Jyoti <br />

                                You are logged in ✅ <br />

                                [ Logout ] <br />

                                Logout click karne par wapas Guest.
                            </p>

                            <img src="image/task4.png" width="200">
                        </div>

                        <h3 class="mb-3">Set 5 – Forms + Controlled Components 🟡</h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3">
                            <p>Ek Registration Form banao:</p>
                            <p>
                                <span class="fw-bold">Requirements:</span>
                            <ul>
                                <li>
                                    Har input controlled hona chahiye.
                                </li>
                                <li>
                                    Empty field par: <br />
                                    <mark>Please fill all fields</mark>
                                </li>
                                <li>
                                    Successful submit: <br />
                                    <mark>Registration Successful</mark>
                                </li>
                                <li>
                                    Submit ke baad fields clear karo.
                                </li>
                            </ul>
                            Page reload nahi hona chahiye.
                            </p>
                            <img src="image/task5.png" width="200">
                        </div>

                        <h3 class="mb-3"></h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>

                        <h3 class="mb-3"></h3>
                        <div class="mb-3 mt-3 card shadow-sm p-3"></div>

                    </div>
                </div>

                <!-- script -->

                <script></script>

                <!-- Previous & Next Buttons -->
                <div class="button-wrapper">
                    <a href="set6_functions.php" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left"></i> Previous
                    </a>

                    <a href="set8_object.php" class="btn btn-primary">
                        Next <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
