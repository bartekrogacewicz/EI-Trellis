import './scss/index.scss';
import createPostTemplate from './js/post_template';

const ACTIVE_CLASS = 'is-active';
const site = document.getElementById('site');

// wyszukiwarka globalna
const searchForm = document.getElementById('search');
const searchInput = document.getElementById('search-input');
const searchButton = document.getElementById('search-button');

site.addEventListener('click', () => {
    searchForm.classList.remove(ACTIVE_CLASS);
});
searchButton.addEventListener('click', e => {
    e.stopPropagation();
    if (!searchForm.classList.contains(ACTIVE_CLASS)) {
        e.preventDefault();
        searchForm.classList.add(ACTIVE_CLASS);
        searchInput.focus();
        return;
    }
});

// wyszukiwarka faq
const faqSearch = document.getElementById('faq-search');
if (faqSearch) {
    const faqInput = document.getElementById('faq-search-input');
    const faqList = document.querySelectorAll('.js-faq-block');

    faqSearch.addEventListener('submit', e => {
        e.preventDefault();
    });
    faqInput.addEventListener('input', e => checkFAQForValue(e.target.value));
    faqInput.addEventListener('keypress', e => {
        if (e.key === 'Escape') {
            faqSearch.reset();
        }
    });

    function checkFAQForValue(value) {
        faqList.forEach(block => {
            if (value !== '' || value !== undefined) {
                if (
                    block.textContent
                        .toLowerCase()
                        .includes(value.toLowerCase())
                ) {
                    block.style.display = 'flex';
                } else {
                    block.style.display = 'none';
                }
            } else {
                block.style.display = 'flex';
            }
        });
    }
}

// infinite scroll
// const firstPostID = window._postId;
// const categoriesIDs = window._categoriesIds;
// const articleList = document.getElementById('articles-list');
// const infiniteListener = document.getElementById('infinite-listener');
// let counter = 0;
// let postsList = [];
// if (infiniteListener) {
//     loadPostsList().then(() => {
//         const infiniteObserver = new IntersectionObserver(loadNextPost, {
//             root: document.body,
//             rootMargin: '0px',
//             threshold: 1.0
//         });
//         infiniteObserver.observe(infiniteListener);

//         function loadNextPost(entries) {
//             entries.forEach(entry => {
//                 if (entry.isIntersecting) {
//                   console.log(entry)
//                     if (postsList.length) {
//                         createPostTemplate(postsList[counter]).then(
//                             template => {
//                                 const articleElement = document.createElement(
//                                     'article'
//                                 );
//                                 articleElement.classList.add('article');
//                                 articleElement.innerHTML = template;
//                                 counter++;
//                                 articleList.insertBefore(
//                                     articleElement,
//                                     infiniteListener
//                                 );
//                             }
//                         );
//                     }
//                 } else {
//                   console.log(false)
//                 }
//             });
//         }
//     });
// }

// function loadPostsList() {
//     return new Promise((resolve, reject) => {
//         const api = 'http://localhost/klienci/euroislam/wp-json/wp/v2/posts';
//         const apiArguments = `?categories=${categoriesIDs}&exclude=${firstPostID}`;
//         fetch(`${api}${apiArguments}`)
//             .then(response => response.json())
//             .then(response => {
//                 response.forEach(post => {
//                     const {
//                         id,
//                         date,
//                         title,
//                         content,
//                         categories,
//                         _links
//                     } = post;
//                     postsList.push({
//                         id,
//                         date,
//                         title: title.rendered,
//                         content: content.rendered,
//                         categories,
//                         _links
//                     });
//                 });
//                 resolve();
//             });
//     });
// }
