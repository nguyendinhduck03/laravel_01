function toggleSubmenu(event) {
    event.preventDefault();
    const submenu = event.target.nextElementSibling;
    submenu.classList.toggle('show');
}

function displaySelectedImages() {
    const fileInput = document.getElementById('change-images');
    const imageContainer = document.getElementById('selected-images');
    imageContainer.innerHTML = '';

    for (const file of fileInput.files) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('img-thumbnail');
            img.style.width = '100px';
            img.style.height = 'auto';
            img.style.marginRight = '10px';
            imageContainer.appendChild(img);
        };

        reader.readAsDataURL(file);
    }
}
