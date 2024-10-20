import '../bootstrap';
import { Menu } from '../classes/menu'

document.addEventListener('DOMContentLoaded', () => {
    const menus = [
        new Menu('#menu-profile', '#btnProfile', '#btnCloseProfile'),
        new Menu('#menu-main-responsive', '#openMenuMain', '#closeMenuMain', 'right', true),
        new Menu('#aside-left', '#openMenu', '#closeMenu', 'left')
    ];

    document.addEventListener('keydown', (e) => e.key === 'Escape' && menus.forEach(menu => menu.close()));
});
