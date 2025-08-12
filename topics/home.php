
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grammar Genius - Master English Grammar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fd;
            color: #333;
        }
        
        .header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 2rem;
            color: white;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        
        .tagline {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
        }
        
        .buttons {
            margin-top: 1.5rem;
        }
        
        .btn {
            background-color: #fff;
            color: #6a11cb;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: bold;
            margin: 0 0.5rem;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }
        
        .btn-primary {
            background-color: #FF9A3C;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #ff8921;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .intro {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #6a11cb;
        }
        
        .intro p {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .topics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .topic-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
        }
        
        .topic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
        }
        
        .topic-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .topic-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #333;
        }
        
        .topic-desc {
            font-size: 0.95rem;
            color: #666;
            line-height: 1.5;
        }
        
        /* Team Section Styles - Made Shorter */
        .team-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 3rem -2rem 0 -2rem;
            padding: 2rem 2rem; /* Reduced from 3rem */
            color: white;
            border-radius: 20px;
            position: relative;
            overflow: hidden;
        }
        
        .team-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1.5" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="70" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="70" cy="15" r="1.2" fill="rgba(255,255,255,0.1)"/><circle cx="15" cy="60" r="1.8" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            pointer-events: none;
        }
        
        .team-header {
            text-align: center;
            margin-bottom: 1.5rem; /* Reduced from 2.5rem */
            position: relative;
            z-index: 1;
        }
        
        .team-title {
            font-size: 1.8rem; /* Reduced from 2.2rem */
            margin-bottom: 0.3rem; /* Reduced from 0.5rem */
            font-weight: bold;
            background: linear-gradient(45deg, #fff, #f0f8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .team-subtitle {
            font-size: 1rem; /* Reduced from 1.1rem */
            opacity: 0.9;
            font-weight: 300;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Reduced min width */
            gap: 1rem; /* Reduced from 1.5rem */
            margin-bottom: 1.5rem; /* Reduced from 2rem */
            position: relative;
            z-index: 1;
        }
        
        .team-member {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px; /* Reduced from 15px */
            padding: 1rem; /* Reduced from 1.5rem */
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .team-member::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }
        
        .team-member:hover::before {
            transform: translateX(100%);
        }
        
        .team-member:hover {
            transform: translateY(-3px); /* Reduced from -5px */
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Reduced shadow */
        }
        
        .member-icon {
            font-size: 2rem; /* Reduced from 2.5rem */
            margin-bottom: 0.5rem; /* Reduced from 1rem */
            display: inline-block;
            background: linear-gradient(45deg, #FF9A3C, #ffb366);
            border-radius: 50%;
            width: 45px; /* Reduced from 60px */
            height: 45px; /* Reduced from 60px */
            line-height: 45px; /* Reduced from 60px */
            position: relative;
            z-index: 1;
        }
        
        .member-name {
            font-size: 1rem; /* Reduced from 1.2rem */
            font-weight: bold;
            margin-bottom: 0.2rem; /* Reduced from 0.3rem */
            position: relative;
            z-index: 1;
        }
        
        .member-role {
            font-size: 0.8rem; /* Reduced from 0.9rem */
            opacity: 0.8;
            position: relative;
            z-index: 1;
        }
        
        .guide-section {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px; /* Reduced from 15px */
            padding: 1rem; /* Reduced from 1.5rem */
            text-align: center;
            margin-top: 1rem; /* Reduced from 1.5rem */
            border: 1px solid rgba(255, 255, 255, 0.3);
            position: relative;
            z-index: 1;
        }
        
        .guide-title {
            font-size: 1.1rem; /* Reduced from 1.3rem */
            margin-bottom: 0.5rem; /* Reduced from 0.8rem */
            font-weight: bold;
            color: #FFE4B5;
        }
        
        .guide-name {
            font-size: 1.2rem; /* Reduced from 1.4rem */
            font-weight: bold;
            color: white;
            margin-bottom: 0.2rem; /* Reduced from 0.3rem */
        }
        
        .guide-designation {
            font-size: 0.9rem; /* Reduced from 1rem */
            opacity: 0.9;
            font-style: italic;
        }
        
        .footer {
            text-align: center;
            margin-top: 3rem;
            padding: 1rem;
            color: #777;
            font-size: 0.9rem;
        }
        
        /* Simple floating animation for decoration */
        .decoration {
            position: absolute;
            font-size: 2rem;
            color: rgba(255, 255, 255, 0.2);
            user-select: none;
            pointer-events: none;
        }
        
        #comma1 { top: 20%; left: 10%; }
        #question1 { top: 15%; left: 30%; }
        #exclamation1 { top: 25%; left: 70%; }
        #comma2 { top: 60%; left: 15%; }
        #question2 { top: 70%; left: 80%; }
        
        @media (max-width: 768px) {
            .topics-grid {
                grid-template-columns: 1fr;
            }
            
            .logo {
                font-size: 2rem;
            }
            
            .tagline {
                font-size: 1rem;
            }
            
            .team-section {
                margin: 3rem -1rem 0 -1rem;
                padding: 1.5rem 1rem; /* Further reduced for mobile */
            }
            
            .team-title {
                font-size: 1.5rem; /* Reduced for mobile */
            }
            
            .team-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 columns on mobile */
                gap: 0.8rem;
            }
            
            .member-icon {
                font-size: 1.5rem;
                width: 35px;
                height: 35px;
                line-height: 35px;
            }
            
            .member-name {
                font-size: 0.9rem;
            }
            
            .member-role {
                font-size: 0.7rem;
            }
        }
        
        @media (max-width: 480px) {
            .team-section {
                border-radius: 0;
            }
            
            .container {
                padding: 1rem;
            }
            
            .team-grid {
                grid-template-columns: 1fr; /* Single column on very small screens */
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="decoration" id="comma1">,</div>
        <div class="decoration" id="question1">?</div>
        <div class="decoration" id="exclamation1">!</div>
        <div class="decoration" id="comma2">,</div>
        <div class="decoration" id="question2">?</div>
        
        <div class="logo">Grammar Genius</div>
        <p class="tagline">Where Language Rules Come to Life!</p>
        

    </header>
    
    <div class="container">
        <div class="intro">
            <h2>Master English Grammar the Fun Way</h2>
            <p>Welcome to Grammar Genius, your ultimate resource for mastering English grammar! Whether you're a student, professional, educator, or language enthusiast, our interactive lessons and exercises will help you strengthen your grammar skills. Join our community today and transform the way you understand and use language!</p>
        </div>
        
        <div class="topics-grid">
            <div class="topic-card" onclick="window.location.href='topics/parts_of_speech.html'">
                <div class="topic-icon">📝</div>
                <h3 class="topic-title">Parts of Speech</h3>
                <p class="topic-desc">Nouns, verbs, adjectives, adverbs, pronouns, prepositions, conjunctions, and interjections - the building blocks of language.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/tenses.html'">
                <div class="topic-icon">⏱️</div>
                <h3 class="topic-title">Tenses</h3>
                <p class="topic-desc">Past, present, future, and their perfect and continuous forms - master when things happen in time.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/subject_verb_agreement.html'">
                <div class="topic-icon">🤝</div>
                <h3 class="topic-title">Subject-Verb Agreement</h3>
                <p class="topic-desc">Learn the art of making subjects and verbs work together harmoniously in your sentences.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/active_passive_voice.html'">
                <div class="topic-icon">🔄</div>
                <h3 class="topic-title">Active and Passive Voice</h3>
                <p class="topic-desc">Discover when to put the actor front and center, and when to shine the spotlight on the action itself.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/direct_indirect_speech.html'">
                <div class="topic-icon">💬</div>
                <h3 class="topic-title">Direct and Indirect Speech</h3>
                <p class="topic-desc">Master the art of reporting what others say, both directly and indirectly.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/articles.html'">
                <div class="topic-icon">🔤</div>
                <h3 class="topic-title">Articles (a, an, the)</h3>
                <p class="topic-desc">Those tiny words that make a huge difference - learn when and how to use them correctly.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/prepositions.html'">
                <div class="topic-icon">🔍</div>
                <h3 class="topic-title">Prepositions</h3>
                <p class="topic-desc">Above, below, through, and beyond - navigate the world of relationship words with confidence.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/punctuation.html'">
                <div class="topic-icon">❗</div>
                <h3 class="topic-title">Punctuation</h3>
                <p class="topic-desc">Commas, periods, question marks, and more - give your writing the right rhythm and clarity.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/sentence_structure.html'">
                <div class="topic-icon">🏗️</div>
                <h3 class="topic-title">Sentence Structure</h3>
                <p class="topic-desc">From simple to compound-complex - build sentences that are both powerful and precise.</p>
            </div>
            
            <div class="topic-card" onclick="window.location.href='topics/common_errors.html'">
                <div class="topic-icon">⚠️</div>
                <h3 class="topic-title">Common Errors in English</h3>
                <p class="topic-desc">Spot and fix the most frequent mistakes that even native speakers make.</p>
            </div>
        </div>
        
        <!-- Team Section - Made Shorter -->
        <div class="team-section">
            <div class="team-header">
                <h2 class="team-title">Meet Our Team</h2>
                <p class="team-subtitle">The brilliant minds behind Grammar Genius</p>
            </div>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-icon">👨‍💻</div>
                    <div class="member-name">JAI SURYA S K</div>
                    <div class="member-role">Developer</div>
                </div>
                
                <div class="team-member">
                    <div class="member-icon">👨‍💻</div>
                    <div class="member-name">SRUJAN O</div>
                    <div class="member-role">Developer</div>
                </div>
                
                <div class="team-member">
                    <div class="member-icon">👨‍💻</div>
                    <div class="member-name">VARUN KUMAR</div>
                    <div class="member-role">Content Creator</div>
                </div>
                
                <div class="team-member">
                    <div class="member-icon">👨‍💻</div>
                    <div class="member-name">SRI KARTHIKEYAN</div>
                    <div class="member-role">Content Creator</div>
                </div>
                
                <div class="team-member">
                    <div class="member-icon">👨‍💻</div>
                    <div class="member-name">VISHAL M</div>
                    <div class="member-role">Content Creator</div>
                </div>
            </div>
            
            <div class="guide-section">
                <div class="guide-title">Under the Guidance of</div>
                <div class="guide-name">Dr. Tissaa Tony. C</div>
                <div class="guide-designation">Project Guide</div>
            </div>
        </div>
        
        <div class="footer">
            © 2025 Grammar Genius. All grammar rules respectfully followed.
        </div>
    </div>
</body>
</html>
