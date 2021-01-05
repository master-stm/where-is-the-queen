<? php
echo '';
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Where's the Queen?</title>';
echo '<style>';
echo '.container{';
echo 'margin-top: 150px;';
echo '}';
echo 'img:nth-child(1) {';
echo 'position: absolute;';
echo 'left: 450px;';
echo '}';
echo '';
echo 'img:nth-child(2) {';
echo 'position: absolute;';
echo 'left: 800px;';
echo '}';
echo '';
echo 'img:nth-child(3) {';
echo 'position: absolute;';
echo 'left: 1150px;';
echo '}';
echo '</style>';
echo '</head>';
echo '';
echo '<body>';
echo '<div class="container">';
echo '<img onclick="resulting()" src='./king.png' alt='king' />';
echo '<img onclick="resulting()" src='./queen.png' alt='queen' />';
echo '<img onclick="resulting()" src='./jack.png' alt='jack' />';
echo '</div>';
echo '';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" type="text/javascript"></script>';
echo '<script>';
echo 'let images = document.querySelectorAll('.container img')';
echo '';
echo '';
echo 'let turnImages = () => {';
echo 'images.forEach(image => image.setAttribute('src', './back.png'))';
echo '}';
echo '';
echo 'setTimeout(turnImages,2000)';
echo '';
echo 'let randmizeOrder = () => {';
echo 'let randPosition = ['450px','800px','1150px'].sort(() => Math.random() - 0.5)';
echo '';
echo 'anime({';
echo 'targets: images[0],';
echo 'left: randPosition[0],';
echo '});';
echo 'anime({';
echo 'targets: images[1],';
echo 'left: randPosition[1],';
echo '});';
echo 'anime({';
echo 'targets: images[2],';
echo 'left: randPosition[2],';
echo '});';
echo '';
echo '}';
echo '';
echo 'let startShuffle;';
echo '';
echo 'setTimeout(() => {';
echo 'startShuffle = setInterval(randmizeOrder,250)';
echo '},3000)';
echo '';
echo '';
echo 'let resulting = () => {';
echo 'clearTimeout(startShuffle)';
echo 'images.forEach(image => {';
echo 'if (image.getAttribute('src') === './back.png'){';
echo 'image.addEventListener('click', () => {';
echo 'if(image.getAttribute('alt') === 'queen'){';
echo 'alert('you found the queen')';
echo 'image.setAttribute('src',`./${image.getAttribute('alt')}.png`)';
echo 'location.reload();';
echo '}else{';
echo 'alert('you missed the queen')';
echo 'image.setAttribute('src',`./${image.getAttribute('alt')}.png`)';
echo 'location.reload();';
echo '}';
echo '})';
echo '}';
echo '})';
echo '}';
echo '';
echo '';
echo '</script>';
echo '</body>';
echo '';
echo '</html>';
?>