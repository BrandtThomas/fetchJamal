const submitBtn = document.querySelector('.submitBtn');

submitBtn.addEventListener('click', (event) => {
    event.preventDefault();
    
    fetch('data.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })

})