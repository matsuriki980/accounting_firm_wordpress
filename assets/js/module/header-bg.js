export function initHeaderBg() {
  const header = document.querySelector(".js-header");
  const hamburgerMenu = document.querySelector(".js-hamburger-menu");
  const headerBgTrigger = document.querySelector(".js-header-bg-trigger"); // 表示・非表示を切り替えるトリガー要素

  // ページトップからトリガー要素までの距離を取得
  const distanceFromTop =
    headerBgTrigger.getBoundingClientRect().top + window.scrollY;

  const updateHeaderBg = () => {
    const currentScrollY = window.scrollY;
    const isOverTrigger = currentScrollY >= distanceFromTop;
    const isMenuOpen = hamburgerMenu.classList.contains("is-open");
    const isHeaderTop = header.classList.contains("js-header--top");

    if (isOverTrigger && !isMenuOpen) {
      header.classList.add("is-active");
    } else {
      header.classList.remove("is-active");
    }

    // 下層ページの時、トリガー要素を通過状況でクラス切り替え
    if (isOverTrigger && !isHeaderTop) {
      header.classList.remove("l-header--sub-page");
    } else if (!isOverTrigger && !isHeaderTop) {
      header.classList.add("l-header--sub-page");
    }
  };

  // スクロール時
  window.addEventListener("scroll", updateHeaderBg);

  // 初回実行
  updateHeaderBg();

  // ハンバーガーメニュー側から状態更新できるように返す
  return updateHeaderBg;
}
