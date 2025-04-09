<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modèle pour CV</title>
</head>
<style>
    h1 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 16px;
        border: 2px solid #678;
        padding: 10px;
        background-color: #678;
        color: white;        
    }

    header {
        display:flex;
        justify-content: space-around;
    }

    article {
        border-bottom: 1px solid #F99;
        margin-left: 20px;
    }

    h2 {
        background-color: #F99;
    }

    #nom {
        font-size: 20px;
        color: #33A;
        font-weight: bold;
    }

    address {
        font-weight: bold;
    }

    .titrecv {
        font-size: 40px;
        border: 3px solid #7Ae;
        text-align: center;
        border-radius: 10px;
        font-weight: bold;
        color: #A34;
    }
</style>

<body>
    <!-- En tete du document -->
    <p class="titrecv">Software Developer | Web Designer | Entrepreneur</p>
    <header>
        <section>            
            <h1>Contact Information:</h1>
            <ul>
                <li>Name: <span id="nom">John Doe</span></li>
                <li>Email: <a href="mailto:john.doe@example.com">john.doe@example.com</a></li>
                <li>Phone: <a href="tel:+1 123-456-7890">+1 123-456-7890</a></li>
                <li>LinkedIn: <a href="https://linkedin.com/in/johndoe">linkedin.com/in/johndoe</a></li>
                <li>GitHub: <a href="https://github.com/johndoe">github.com/johndoe</a></li>
                <li>Adresse :<br>
                    <address>
                        8 rue du chemin vert<br>
                        12546 Saint-Gervais
                    </address>
                </li>
            </ul>
        </section>

        <section>
            <h1>Expériences professionnelles</h1>
            <!-- un article pour chaque exp pro -->
            <article>
                <h2>Software Developer at ABC Corporation (2018-Present)</h2>
                <ul>
                    <li>Developed and maintained multiple software applications for various clients.</li>
                    <li>Collaborated with cross-functional teams to design and implement new features.</li>
                    <li>Migrated legacy codebase to modern frameworks.</li>
                </ul>
            </article>
            <article>
                <h2>Web Designer at XYZ Agency (2015-2018)</h2>
                <ul>
                    <li>Designed and developed multiple web applications for various clients.</li>
                    <li>Crafted user experiences and interfaces for responsive websites.</li>
                    <li>Collaborated with copywriters to create engaging content.</li>
                </ul>
            </article>
        </section>        
    </header>    

    <!-- contenu principal du document -->
    <main>

        <!-- structure le document en section -->


        <section>
            <h1>Etudes et formations</h1>
            <!-- un article pour chaque formation -->
            <article>
                <h2>Bachelor of Science in Computer Science at XYZ University (2010-2014)</h2>
                <p>Completed coursework in data structures, algorithms, computer networks, and software engineering.</p>
                <p>Maintained a strong academic record with honors in multiple courses.</p>
            </article>
        </section>

        <section>
            <h1>Compétences</h1>
            <ul>
                <li>Programming languages: Java, Python, JavaScript</li>
                <li>Databases: MySQL, MongoDB</li>
                <li>Frameworks: React, Angular</li>
                <li>Operating Systems: Windows, macOS, Linux</li>
                <li>Natural Languages : French fluent</li>
            </ul>
        </section>

        <section>
            <h1>Loisirs et centre d'intérêts</h1>
            <ul>
                <li>Informatique</li>
                <li>Science</li>
                <li>Manga et BD</li>
                <li>Jeux vidéos</li>
            </ul>
        </section>

    </main>

</body>

</html>