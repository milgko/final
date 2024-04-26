const bookNames = [
  "Eternal Echoes",
  "Whispers in the Mist",
  "Midnight's Embrace",
  "Eternal Enigma"
];


let savedPosts = JSON.parse(localStorage.getItem('savedPosts')) || [];

const nameDropdown = document.getElementById('nameDropdown');
const selectedName = document.getElementById('selectedName');
const postsContainer = document.getElementById('postsContainer');


function displaySavedPosts() {
  postsContainer.innerHTML = ''; 
  savedPosts.forEach(post => {
    const postElement = document.createElement('div');
    postElement.classList.add('py-8', 'px-4', 'lg:w-1/3');
    postElement.innerHTML = `
      <div class="h-full flex items-start">
        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
          <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">${post.month}</span>
          <span class="font-medium text-lg text-gray-800 title-font leading-none">${post.day}</span>
        </div>
        <div class="flex-grow pl-6">
          <h2 class="tracking-widest text-xs title-font font-medium text-[#6b705c] mb-1">${post.selectedName}</h2>
          <h1 class="title-font text-xl font-medium text-gray-900 mb-3">${post.postTitle}</h1>
          <p class="leading-relaxed mb-5">${post.postContent}</p>
        </div>
      </div>
    `;
    postsContainer.appendChild(postElement);
  });
}


window.addEventListener('load', () => {
  displaySavedPosts();
});

bookNames.forEach(bookName => {
  const option = document.createElement('option');
  option.value = bookName;
  option.textContent = bookName;
  nameDropdown.appendChild(option);
});

nameDropdown.addEventListener('change', () => {
  const selectedValue = nameDropdown.value;
  selectedName.textContent = selectedValue; 
});

document.getElementById('postForm').addEventListener('submit', event => {
  event.preventDefault();

  const selectedName = document.getElementById('nameDropdown').value;
  const postTitle = document.getElementById('postTitle').value;
  const postContent = document.getElementById('postContent').value;

  const currentDate = new Date();
  const month = currentDate.toLocaleString('default', { month: 'short' });
  const day = currentDate.getDate();
  const postElement = document.createElement('div');
  postElement.classList.add('py-8', 'px-4', 'lg:w-1/3');
  postElement.innerHTML = `
    <div class="h-full flex items-start">
      <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
        <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">${month}</span>
        <span class="font-medium text-lg text-gray-800 title-font leading-none">${day}</span>
      </div>
      <div class="flex-grow pl-6">
        <h2 class="tracking-widest text-xs title-font font-medium text-[#6b705c] mb-1">${selectedName}</h2>
        <h1 class="title-font text-xl font-medium text-gray-900 mb-3">${postTitle}</h1>
        <p class="leading-relaxed mb-5">${postContent}</p>
      </div>
    </div>
  `;

  postsContainer.appendChild(postElement);

  savedPosts.push({ selectedName, postTitle, postContent, month, day });
  localStorage.setItem('savedPosts', JSON.stringify(savedPosts));

  event.target.reset();
});

