export function initTopServiceSlider() {
  const slider = document.querySelector(".js-top-service-slider");

  if (!slider) return;

  const mySplide = new Splide(slider, {
    mediaQuery: "min", // モバイルファーストでメディアクエリを判定する設定
    arrows: false, // 矢印非表示
    pagination: false, // ページネーション非表示
    perMove: 1, // 1度で何枚のスライドを移動するか指定
    fixedWidth: "340rem",

    breakpoints: {
      // 900px以上の場合、Splideを破棄（スライダー化を解除）
      900: {
        destroy: true,
      },
    },
  });

  mySplide.mount();
}
