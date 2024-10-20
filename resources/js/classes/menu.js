export class Menu {
    constructor(menu, openBtn, closeBtn, direction = 'right', toggleIcon = false) {
        this.menu = document.querySelector(menu);
        this.openBtn = document.querySelector(openBtn);
        this.closeBtn = document.querySelector(closeBtn);
        this.direction = direction;
        this.toggleIcon = toggleIcon;
        this.isOpen = false;
        if (!this.menu) return;
        this.menu.style.transition = `opacity 0.3s ease, ${this.direction} 0.3s ease`;

        this.init();
    }

    toggleMenuIcon() {
        if (this.toggleIcon) this.openBtn.innerHTML = `<span class="material-symbols-outlined">${this.isOpen ? 'close' : 'menu'}</span>`;
    }

    open() {
        if (this.isOpen) return;
        this.menu.style.display = 'flex';
        this.menu.style[this.direction] = `${-this.menu.offsetWidth}px`;
        setTimeout(() => {
            this.menu.style.opacity = '1';
            this.menu.style[this.direction] = '0';
        }, 10);

        this.isOpen = true;
        this.toggleMenuIcon();
    }

    close() {
        if (!this.isOpen) return;
        this.menu.style.opacity = '0';
        this.menu.style[this.direction] = `${-this.menu.offsetWidth}px`;
        setTimeout(() => this.menu.removeAttribute('style'), 300);

        this.isOpen = false;
        this.toggleMenuIcon();
    }

    toggle() {
        this.isOpen ? this.close() : this.open();
    }

    closeOnClickOutside(event) {
        if (!this.menu.contains(event.target) && !this.openBtn.contains(event.target)) this.close();
    }

    init() {
        [this.openBtn, this.closeBtn].forEach(btn => btn?.addEventListener('click', (e) => (e.stopPropagation(), this.toggle())));
        document.addEventListener('click', (e) => this.isOpen && this.closeOnClickOutside(e));
        document.addEventListener('keydown', (e) => this.isOpen && e.key === 'Escape' && this.close());
    }
}
