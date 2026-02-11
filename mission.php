<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>NU Identity | Mission & Vision</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { 
            font-family: 'Montserrat', sans-serif; 
            background: linear-gradient(135deg, #002b5c, #001a33); 
            min-height: 100vh;
            color: #333;
            overflow-x: hidden;
        }
        
        /* Navbar */
        .custom-navbar { 
            background: #003366 !important; 
            padding: 1.2rem 0;
            border-bottom: 3px solid #FFCC00; 
        }
        .navbar-brand { font-size: 2rem; color: #FFCC00 !important; font-weight: 800; }
        .nav-link { font-weight: 700; color: white !important; text-transform: uppercase; transition: 0.3s; }
        .nav-link:hover { color: #FFCC00 !important; }

        /* Hero Section */
        .hero-section { padding: 4rem 0; text-align: center; color: white; }
        .hero-title { font-size: 3.5rem; font-weight: 800; color: #FFCC00; text-shadow: 2px 2px 10px rgba(0,0,0,0.5); }

        /* Identity Cards */
        .glass-card { 
            background: rgba(255, 255, 255, 0.95); 
            border-radius: 20px; 
            padding: 2.5rem; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.3); 
            margin-bottom: 2rem;
            transition: 0.4s ease;
        }

        /* Manual Accordion (Core Values) */
        .value-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            text-align: center;
            height: 100%;
            transition: 0.3s;
            border: none;
            position: relative;
        }
        .value-card:hover { transform: translateY(-10px); }
        
        .value-details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out, opacity 0.3s;
            opacity: 0;
            font-size: 0.9rem;
            color: #555;
            background: #f8f9fa;
            border-radius: 10px;
        }
        .value-details.active {
            max-height: 200px;
            opacity: 1;
            padding: 15px;
            margin-top: 15px;
            border-left: 4px solid #FFCC00;
        }

        h2, h3 { font-weight: 800; color: #003366; text-transform: uppercase; }
        
        .btn-meaning { 
            background: #003366; 
            color: #FFCC00; 
            font-weight: 700; 
            border-radius: 50px; 
            width: 100%; 
            border: 2px solid #003366;
            transition: 0.3s;
        }
        .btn-meaning:hover { background: #FFCC00; color: #003366; }
        .btn-meaning span { display: inline-block; transition: 0.3s; }
        .btn-meaning.active span { transform: rotate(90deg); }

        footer { background: #001a33; color: white; padding: 3rem 0; border-top: 3px solid #FFCC00; text-align: center; margin-top: 4rem; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">NU PORTAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nuNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="nuNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="actDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Activities
                        </a>
                        <ul class="dropdown-menu shadow" aria-labelledby="actDrop">
                            <li><a class="dropdown-item" href="syllabus.php">Resources</a></li>
                            <li><a class="dropdown-item" href="NuStrategicGoal.php">Strategic Goals</a></li>
                            <li><a class="dropdown-item" href="mission.php">Mission & Vision</a></li>
                            <li><a class="dropdown-item" href="schedule.php">Schedule</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header class="hero-section">
        <div class="container">
            <h1 class="hero-title">OUR IDENTITY</h1>
            <p class="fs-5 opacity-75">Education that works. Nation-building through innovation.</p>
        </div>
    </header>

    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-6 reveal">
                <div class="glass-card text-center h-100">
                    <div class="display-4 mb-3">👁️</div>
                    <h2>Vision</h2>
                    <p class="lead">To be a leading provider of relevant, innovative, and accessible quality education characterized by <strong>Dynamic Filipinism</strong>.</p>
                </div>
            </div>
            <div class="col-md-6 reveal">
                <div class="glass-card text-center h-100">
                    <div class="display-4 mb-3">🚀</div>
                    <h2>Mission</h2>
                    <p class="lead">National University contributes to nation-building through progressive education and development programs.</p>
                </div>
            </div>
        </div>

        <h2 class="text-white text-center mb-5 reveal">CORE VALUES</h2>
        
        <div class="row g-4 justify-content-center mb-5">
            <div class="col-md-4 reveal">
                <div class="value-card shadow">
                    <div class="display-5 mb-3">⚖️</div>
                    <h3>Integrity</h3>
                    <button class="btn btn-meaning btn-sm toggle-btn">See Meaning <span>&rsaquo;</span></button>
                    <div class="value-details">
                        Demonstrating honesty and fairness in every action and decision, upholding the highest ethical standards of the University.
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal">
                <div class="value-card shadow">
                    <div class="display-5 mb-3">🤝</div>
                    <h3>Compassion</h3>
                    <button class="btn btn-meaning btn-sm toggle-btn">See Meaning <span>&rsaquo;</span></button>
                    <div class="value-details">
                        Fostering a culture of care and empathy, ensuring that every Nationalian supports one another and the community.
                    </div>
                </div>
            </div>

            <div class="col-md-4 reveal">
                <div class="value-card shadow">
                    <div class="display-5 mb-3">💡</div>
                    <h3>Innovation</h3>
                    <button class="btn btn-meaning btn-sm toggle-btn">See Meaning <span>&rsaquo;</span></button>
                    <div class="value-details">
                        Seeking creative ways to improve learning and solve real-world problems through advanced technology and research.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p class="mb-1">&copy; 2026 National University Student Portal</p>
            <p class="small opacity-50">Project by Canillo | Dynamic Filipinism in Action</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // 1. MANUAL ACCORDION LOGIC
        const toggleButtons = document.querySelectorAll('.toggle-btn');
        
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const details = this.nextElementSibling;
                const isActive = details.classList.contains('active');
                
                // Close all other open sections
                document.querySelectorAll('.value-details').forEach(el => el.classList.remove('active'));
                document.querySelectorAll('.toggle-btn').forEach(el => el.classList.remove('active'));
                
                // If the clicked one wasn't active, open it
                if (!isActive) {
                    details.classList.add('active');
                    this.classList.add('active');
                }
            });
        });

        // 2. SCROLL REVEAL (INTERSECTION OBSERVER)
        const observerOptions = { threshold: 0.15 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = "1";
                    entry.target.style.transform = "translateY(0)";
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            el.style.opacity = "0";
            el.style.transform = "translateY(40px)";
            el.style.transition = "all 0.8s cubic-bezier(0.2, 0.8, 0.2, 1)";
            observer.observe(el);
        });
    });
    </script>
</body>
</html>