
document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.frame-singleaccordion').forEach(element => {

        const idx = element.id;
        const nextId = `${idx}1`;

        // Die beiden ursprünglichen Elemente sichern
        const children = Array.from(element.children);

        if (children.length !== 2) return;

        let [heading, content] = children;

        // Falls die Überschrift ein Link ist, entfernen
        if (heading.tagName === 'A') {
            heading.remove();
            heading = element.firstElementChild;
        }

        if (!heading || !content) return;

        // Accordion aufbauen
        const accordion = document.createElement('div');
        accordion.id = `accordion-${idx}`;
        accordion.className = 't3up_accordion accordion accordion-flush accordionstyle-1';

        const item = document.createElement('div');
        item.className = 'accordion-item';

        const header = document.createElement('div');
        header.className = 'accordion-header';
        header.id = `heading-${nextId}`;

        const button = document.createElement('a');
        button.href = `#collapse-${nextId}`;
        button.className = 'accordion-button collapsed justify-content-between';
        button.setAttribute('data-bs-toggle', 'collapse');
        button.setAttribute('data-bs-target', `#collapse-${nextId}`);
        button.setAttribute('data-toggle', 'collapse');
        button.setAttribute('data-target', `#collapse-${nextId}`);
        button.setAttribute('aria-expanded', 'false');
        button.setAttribute('aria-controls', `collapse-${nextId}`);

        // Klasse des ersten Kindelements entfernen
        button.append(...Array.from(heading.childNodes));
        button.firstElementChild?.removeAttribute('class');

        header.appendChild(button);

        const collapse = document.createElement('div');
        collapse.id = `collapse-${nextId}`;
        collapse.className = 'accordion-collapse collapse';
        collapse.setAttribute('aria-labelledby', `heading-${nextId}`);

        const body = document.createElement('div');
        body.className = 'accordion-body';
        body.appendChild(content);

        collapse.appendChild(body);
        item.append(header, collapse);
        accordion.appendChild(item);

        element.replaceChildren(accordion);

        // Accordion sichtbar machen
        element.style.opacity = '1';

    });

});
