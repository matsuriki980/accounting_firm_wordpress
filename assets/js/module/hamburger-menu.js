import { initHeaderBg } from "./header-bg.js";

export function initHamburgerMenu() {
  const header = document.querySelector(".js-header");
  const hamburgerMenu = document.querySelector(".js-hamburger-menu");
  const hamburgerBtn = document.querySelector(".js-hamburger-btn");
  const hamburgerMenuElement = [header, hamburgerMenu];
  const bodyElement = document.body;

  // ヘッダー背景の初期化
  const updateHeaderBg = initHeaderBg();

  hamburgerBtn.addEventListener("click", () => {
    hamburgerMenuElement.forEach((element) => {
      element.classList.toggle("is-open");
    });

    const isMenuOpen = hamburgerMenu.classList.contains("is-open");

    if (isMenuOpen) {
      bodyElement.classList.add("u-scroll-hidden");
    } else {
      bodyElement.classList.remove("u-scroll-hidden");
    }

    // ハンバーガーメニューの状態が変わるのでヘッダー背景も更新する
    updateHeaderBg();
  });

  // ホバーしたリンクと同じdata値を持つ画像を表示する
  const hamburgerMenuItem = document.querySelectorAll(
    ".js-hamburger-menu__item a",
  );
  const hamburgerMenuImg = document.querySelectorAll(".js-hamburger-menu__img");
  hamburgerMenuItem.forEach((item) => {
    item.addEventListener("mouseenter", () => {
      hamburgerMenuImg.forEach((img) => {
        img.classList.remove("is-active");
      });

      const itemData = item.closest(".js-hamburger-menu__item").dataset.item;
      const img = hamburgerMenu.querySelector(`[data-img="${itemData}"]`);
      img.classList.add("is-active");
      console.log(img);
    });
  });
}
