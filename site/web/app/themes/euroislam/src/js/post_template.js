export default function({ date, title, content, _links }) {
    return new Promise((resolve, reject) => {
        const imgFetchLink = _links['wp:featuredmedia'][0].href;
        fetch(imgFetchLink)
            .then(response => response.json())
            .then(response => {
                const imgLink = response.source_url;
                const template = `<header class="article__header">
          <div class="article__taxonomy">
            <span class="article__date">
              Publikacja: ${date}
            </span>
          </div>
          <h1 class="article__title">
            ${title}
          </h1>
          <div class="article__social-media">
    
          </div>
          <figure class="article__image-wrapper">
            <img src="${imgLink}" alt="" class="article__image">
            <figcaption class="article__image-caption">
              ${response.title.rendered}
            </figcaption>
          </figure>
        </header>
        <div class="article__content">
          ${content}
        </div>
        <footer class="article__footer">
    
        </footer>`;
                resolve(template);
            });
    });
}
