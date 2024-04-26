
fetch('https://api.npoint.io/5d6289337cbf63e6d8b0')
.then(response => response.json())
.then(data => {
  const booksGrid = document.getElementById('booksGrid');

  data.forEach(book => {
    const bookElement = document.createElement('a');
    bookElement.href = "#";
    bookElement.classList.add('group');

    const imageContainer = document.createElement('div');
    imageContainer.classList.add('aspect-h-1', 'aspect-w-1', 'w-full', 'overflow-hidden', 'rounded-lg', 'bg-gray-200', 'xl:aspect-h-8', 'xl:aspect-w-7');

    const image = document.createElement('img');
    image.src = book.image;
    image.alt = book.title;
    image.classList.add('h-full', 'w-full', 'object-cover', 'object-center', 'group-hover:opacity-75');

    imageContainer.appendChild(image);
    bookElement.appendChild(imageContainer);

    const title = document.createElement('h3');
    title.textContent = book.name;
    title.classList.add('mt-4', 'text-sm', 'font-bold', 'text-gray-700');

    const author = document.createElement('h4');
    author.textContent = book.author;
    author.classList.add('mt-1', 'text-sm', 'font-medium', 'text-gray-900');

    const description = document.createElement('h5');
    description.textContent = book.description;
    description.classList.add('mt-1', 'text-sm', 'text-gray-900');

    bookElement.appendChild(title);
    bookElement.appendChild(author);
    bookElement.appendChild(description);

    booksGrid.appendChild(bookElement);
  });
})
.catch(error => console.error('Error fetching books:', error));