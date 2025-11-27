<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        img {
            height : 100px;
            width : 100px;
        }
    </style>
</head>
<body>
    
    <div id="gameContainer">
        <table id="taquinGrid">
            <tr>
                <td><img class="tile" src="1.png" width="150" data-index="0" alt="1"></td>
                <td><img class="tile" src="2.png" width="150" data-index="1" alt="2"></td>
                <td><img class="tile" src="3.png" width="150" data-index="2" alt="3"></td>
            </tr>
            <tr>
                <td><img class="tile" src="4.png" width="150" data-index="3" alt="4"></td>
                <td><img class="tile" src="5.png" width="150" data-index="4" alt="5"></td>
                <td><img class="tile" src="6.png" width="150" data-index="5" alt="6"></td>
            </tr>
            <tr>
                <td><img class="tile" src="7.png" width="150" data-index="6" alt="7"></td>
                <td><img class="tile" src="8.png" width="150" data-index="7" alt="8"></td>
                <td><div class="tile empty" data-index="8"></div></td>
            </tr>
        </table>
        <div id="message"></div>
        <button id="restartBtn">Recommencer</button>
    </div>

    <script>
        let emptyIndex = 8;
        let gameWon = false;

        function initGame() {
            shuffleTiles();
            gameWon = false;
            document.getElementById('message').innerHTML = '';
            document.getElementById('restartBtn').classList.remove('visible');
        }

        function shuffleTiles() {
            for (let i = 0; i < 200; i++) {
                const validMoves = getValidMoves();
                const randomMove = validMoves[Math.floor(Math.random() * validMoves.length)];
                swapTiles(emptyIndex, randomMove);
            }
        }

        function getValidMoves() {
            const moves = [];
            const row = Math.floor(emptyIndex / 3);
            const col = emptyIndex % 3;

            if (row > 0) moves.push(emptyIndex - 3);
            if (row < 2) moves.push(emptyIndex + 3);
            if (col > 0) moves.push(emptyIndex - 1);
            if (col < 2) moves.push(emptyIndex + 1);

            return moves;
        }

        function swapTiles(index1, index2) {
            const cells = document.querySelectorAll('#taquinGrid td');
            const temp = cells[index1].innerHTML;
            cells[index1].innerHTML = cells[index2].innerHTML;
            cells[index2].innerHTML = temp;
            
            attachEvents();
            
            emptyIndex = index2;
        }

        function attachEvents() {
            const tiles = document.querySelectorAll('.tile:not(.empty)');
            tiles.forEach(tile => {
                tile.onclick = function() {
                    handleTileClick(this);
                };
            });
        }

        function handleTileClick(tile) {
            if (gameWon) return;

            const cells = Array.from(document.querySelectorAll('#taquinGrid td'));
            const clickedCell = tile.parentElement;
            const clickedIndex = cells.indexOf(clickedCell);

            const validMoves = getValidMoves();
            
            if (validMoves.includes(clickedIndex)) {
                swapTiles(emptyIndex, clickedIndex);
                checkWin();
            }
        }

        function checkWin() {
            const tiles = document.querySelectorAll('.tile');
            let isWon = true;

            tiles.forEach((tile, index) => {
                const dataIndex = tile.dataset.index;
                if (dataIndex && parseInt(dataIndex) !== index) {
                    isWon = false;
                }
            });

            if (isWon) {
                gameWon = true;
                document.getElementById('message').innerHTML = '<span class="success">Vous avez gagné !</span>';
                document.getElementById('restartBtn').classList.add('visible');
            }
        }

        document.getElementById('restartBtn').addEventListener('click', function() {
            location.reload();
        });

        attachEvents();
        
        window.onload = function() {
            setTimeout(initGame, 100);
        };
    </script>
</body>
</html>