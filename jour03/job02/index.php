<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu de l'Arc-en-ciel</title>
</head>
<body>
    <h1>Jeu de l'Arc-en-ciel</h1>
    
    <h2>Test des images :</h2>
    
    <hr>
    
    <button id="shuffleBtn">Mélanger</button>
    
    <br><br>
    
    <table>
        <tr id="rainbowRow">
            <td><img src="arc1.png" width="100" data-index="0" alt="arc1"></td>
            <td><img src="arc2.png" width="100" data-index="1" alt="arc2"></td>
            <td><img src="arc3.png" width="100" data-index="2" alt="arc3"></td>
            <td><img src="arc4.png" width="100" data-index="3" alt="arc4"></td>
            <td><img src="arc5.png" width="100" data-index="4" alt="arc5"></td>
            <td><img src="arc6.png" width="100" data-index="5" alt="arc6"></td>
        </tr>
    </table>
    
    <br>
    
    <div id="message"></div>

    <script>
        console.log('Script chargé !');
        
        let draggedImg = null;

        // Mélanger les images
        document.getElementById('shuffleBtn').addEventListener('click', function() {
            console.log('Bouton cliqué');
            
            const images = document.querySelectorAll('#rainbowRow img');
            console.log('Nombre d\'images:', images.length);
            
            const sources = [];
            const indices = [];
            
            images.forEach(img => {
                sources.push(img.src);
                indices.push(img.dataset.index);
            });
            
            console.log('Avant:', sources);
            
            for (let i = sources.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [sources[i], sources[j]] = [sources[j], sources[i]];
                [indices[i], indices[j]] = [indices[j], indices[i]];
            }
            
            console.log('Après:', sources);
            
            images.forEach((img, index) => {
                img.src = sources[index];
                img.dataset.index = indices[index];
            });
            
            document.getElementById('message').innerHTML = '';
        });

        // Drag and drop
        const images = document.querySelectorAll('img');
        images.forEach(img => {
            img.draggable = true;
            
            img.addEventListener('dragstart', function(e) {
                draggedImg = this;
            });
            
            img.addEventListener('dragover', function(e) {
                e.preventDefault();
            });
            
            img.addEventListener('drop', function(e) {
                e.preventDefault();
                
                if (draggedImg !== this) {
                    const draggedSrc = draggedImg.src;
                    const draggedIndex = draggedImg.dataset.index;
                    
                    draggedImg.src = this.src;
                    draggedImg.dataset.index = this.dataset.index;
                    
                    this.src = draggedSrc;
                    this.dataset.index = draggedIndex;
                    
                    checkWin();
                }
            });
        });

        function checkWin() {
            const images = document.querySelectorAll('img');
            let isCorrect = true;
            
            images.forEach((img, position) => {
                if (parseInt(img.dataset.index) !== position) {
                    isCorrect = false;
                }
            });
            
            const messageEl = document.getElementById('message');
            
            if (isCorrect) {
                messageEl.innerHTML = '<span style="color: green; font-weight: bold;">Vous avez gagné</span>';
            } else {
                messageEl.innerHTML = '<span style="color: red; font-weight: bold;">Vous avez perdu</span>';
            }
        }
    </script>
</body>
</html>